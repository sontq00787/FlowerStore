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

/**
* Initiate page url
**/
Route::get('/', array('as'=>'home', 'uses'=>'HomeController@getIndex'));
Route::get('store', array('as'=>'store', 'uses'=>'StoreController@getIndex'));

Route::post('findstore', array('as'=>'find-store', 'uses'=>'HomeController@getFindStore'));
// Route::get('hello', array('as'=>'find-store', 'uses'=>'HomeController@hello'));
