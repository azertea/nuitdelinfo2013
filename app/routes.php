<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});



// Package login
Route::post('/user/connect', 'UserController@postLogin');
Route::post('/user/inscription', 'UserController@postRegister');
Route::post('/user/test-email', 'UserController@postTestMail');

// Package peuplement
Route::get('/annonce/add', 'ProductController@getProductAdd');
Route::post('/annonce/add', 'ProductController@postProductAdd');

// JE SAIS PAS CE QUE C'EST
Route::get('/annonce/list', 'ProductController@getProductList');
Route::get('/send-annonce', 'ProductController@getProductSend');

//Package de recherche depuis la page d'index
Route::post('/search', 'SearchController@postSearch');
Route::post('/tree', 'TreeController@postTree');
Route::post('/annonce/get', 'ProductController@postGetAnnonce');

// Affichage d'un article
Route::get('{idProduct}-{slug-annonce}}', 'ProductController@getProduct')
	->where('slug-annonce', '[a-zA-Z0-9-]+')
	->where('id', '[0-9]+');

