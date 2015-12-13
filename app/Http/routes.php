<?php

/*
|--------------------------------------------------------------------------
| Application Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [
	'as' => 'home.index',
	'uses' => 'HomeController@index'
]);

Route::post('/accounts/create', [
	'as' => 'accounts.create',
	'uses' => 'HomeController@createAccount'
]);

Route::get('/lang/{locale?}', [
    'as'=>'lang', 
    'uses'=>'HomeController@changeLang'
]);

