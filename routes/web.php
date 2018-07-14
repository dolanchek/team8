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

Route::get('/', 'Team8Controller@slash');
Route::get('/redirect', 'Team8Controller@splash');
Route::get('/post/{id}', 'Team8Controller@post');
Route::get('/home', 'Team8Controller@home');
Route::get('/profile', 'Team8Controller@profile');
Route::get('/stats', 'Team8Controller@statistic');
Route::get('/settings', 'Team8Controller@settings');
Route::post('/donate/{id}', 'Team8Controller@donate');
Route::get('/addAdmin', 'Team8Controller@admin');
Route::get('/addPost', 'Team8Controller@createPost');
Route::post('/redirect-vil', 'Team8Controller@uploadPost');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
