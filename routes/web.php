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
Route::get('/home', 'HomeController@index')->name('home');



//記事投稿や編集等のコントローラー
Route::get('/articles/index', "ArticleController@index")->name('articles.index');
Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);

//コメント機能用のコントローラー
Route::resource('comments', 'CommentsController')->middleware('auth');

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//ハンドレンジ表表示のコントローラー
Route::get('/range', 'HandrangeController@situation');
Route::get('/range/openrange', 'HandrangeController@openrange');
Route::get('/range/openrange/utg', 'HandrangeController@openutg');
Route::get('/range/openrange/hj', 'HandrangeController@openhj');
Route::get('/range/openrange/co', 'HandrangeController@openco');
Route::get('/range/openrange/btn', 'HandrangeController@openbtn');
Route::get('/range/openrange/sb', 'HandrangeController@opensb');
Route::get('/range/commingsoon', 'HandrangeController@commingsoon');


