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

// ランディングページを表示
Route::get('/', function () {
    return view('welcome');
});

// グループ（レベル）選択画面を表示
Route::get('groups', 'GroupsController@index');

// うまくいかない
// Route::get('/groups/{id}/materials','MaterialsController@index');

// タイピング画面を表示
Route::get('materials','MaterialsController@index');


if ( env('APP-EVV') === 'local'){
    URL::forceScheme('https');
}
