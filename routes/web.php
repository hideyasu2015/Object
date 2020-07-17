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

Route::get('/', function () {
    return view('welcome');
});

//urlでgroupsがリクエストされたら、GroupsControllerで処理する。
// Route::resource('groups','GroupsController');
Route::get('/groups','GroupsController@index')->name('groups.index');

// Route::resource('main_words','MainWordsController');

// MainWordsControllerのindex()を実行
Route::get('/main_words','MainWordsController@index');

Route::POST('/materials/{{$main_word -> id}}','MaterialsController@index');