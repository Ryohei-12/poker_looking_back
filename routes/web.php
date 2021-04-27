<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

//ユーザー認証
Auth::routes();

//トップページ表示
Route::get('/', function () {
    return view('top');
});

//メインページ表示
Route::get('/main', function () {
    return view('main');
});

//ユーザーページ表示
Route::prefix('users')->name('users.')->group(function () {
    //ユーザーの詳細ページはユーザー名をURLに参照する
    Route::get('/{name}', 'UserController@show')->name('show');
});

//投稿一覧
Route::get('/articles/index', "ArticleController@index")->name('articles.index');
//投稿作成・投稿・編集・更新・削除→ログインユーザーのみ
Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
//投稿詳細画面
Route::resource('/articles', 'ArticleController')->only(['show']);

//コメント投稿・削除（コントローラーを作成すればCRUD可能）→ログインユーザーのみ    
Route::resource('comments', 'CommentsController')->middleware('auth');

//各種ハンドレンジ表表示
Route::group(['prefix'=>'range' , 'as'=>'range.'], function(){
    Route::get('/', 'HandrangeController@situation');
    Route::get('/openrange', 'HandrangeController@openrange');
    Route::get('/openrange/utg', 'HandrangeController@openutg');
    Route::get('/openrange/hj', 'HandrangeController@openhj');
    Route::get('/openrange/co', 'HandrangeController@openco');
    Route::get('/openrange/btn', 'HandrangeController@openbtn');
    Route::get('/openrange/sb', 'HandrangeController@opensb');
    Route::get('/commingsoon', 'HandrangeController@commingsoon');
});