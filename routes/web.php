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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['as' => 'admin.', 'middleware' => 'auth.admin', 'namespace' => 'Admin', 'prefix' => 'admin'],function(){
    Route::get('/', 'AdminController@index')->name('index');
    Route::post('image/upload','ImageUploadController@upload')->name('upload');
    Route::get('project/{project}/images', 'ProjectController@images')->name("project.images");
    Route::resource('project', 'ProjectController');

    Route::get('news/{news}/images','NewsController@images')->name('news.images');
    Route::resource('news','NewsController');

    Route::resource('tag','TagController');
});