<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/', 'PagesController@index');
Route::get('/search', 'PagesController@search');

Route::get('/home', 'HomeController@index');

Route::resource('authors', 'AuthorsController');
Route::resource('jokes', 'JokesController');
Route::resource('categories', 'CategoriesController');
