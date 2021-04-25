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

//メインページ、トップページ表示のコントローラー
Route::get('/', function () {
    return view('top');
});
Route::get('/main', function () {
    return view('main');
});

//ユーザーページのコントローラー
Route::prefix('users')->name('users.')->group(function () {
    //ユーザーの詳細ページはユーザー名をURLに参照する
    Route::get('/{name}', 'UserController@show')->name('show');
});

//記事一覧
Route::get('/articles/index', "ArticleController@index")->name('articles.index');
//記事作成・投稿・編集・更新・削除→ログインユーザーのみ
Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
//記事詳細画面
Route::resource('/articles', 'ArticleController')->only(['show']);

//コメント投稿・削除（コントローラーを作成すればCRAD可能）→ログインユーザーのみ
Route::resource('comments', 'CommentsController')->middleware('auth');

//ユーザー認証
Auth::routes();

//各種ハンドレンジ表表示
Route::get('/range', 'HandrangeController@situation');
Route::get('/range/openrange', 'HandrangeController@openrange');
Route::get('/range/openrange/utg', 'HandrangeController@openutg');
Route::get('/range/openrange/hj', 'HandrangeController@openhj');
Route::get('/range/openrange/co', 'HandrangeController@openco');
Route::get('/range/openrange/btn', 'HandrangeController@openbtn');
Route::get('/range/openrange/sb', 'HandrangeController@opensb');
Route::get('/range/commingsoon', 'HandrangeController@commingsoon');


