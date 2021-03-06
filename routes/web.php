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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/{id}/notes', 'NotesController');
Route::get('/{id}/profile', 'UserController@index');
Route::post('/{id}/profile', 'UserController@editUser');
Route::resource('/{id}/posts', 'PostsController');
Route::resource('/{id}/comments', 'CommentsController');
Route::resource('/{id}/projects', 'ProjectsController');
Route::resource('/{id}/links', 'LinksController');

Route::get('/gmail', function(){
	return view('quickstart');
});
