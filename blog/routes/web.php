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
    // return view('welcome');
    return phpinfo();
});

Route::any('student/index', ['as'=>'s1','uses'=>'StudentController@index']);

Route::any('student/file', ['uses'=>'StudentController@file']);
Route::any('student/mail', ['uses'=>'StudentController@mail']);

Auth::routes();

Route::any('/home', 'HomeController@index');
Route::any('/home/index', 'Home\IndexController@index');
Route::any('/home/list', 'Home\ListController@index');
Route::any('/home/show/{id?}', 'Home\ShowController@index');
Route::any('/home/myblog', 'Home\MyBlogController@index');
Route::any('/home/handle', 'Home\MyBlogController@handle');

