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

Route::get('/','ChartRoomController@index');

Route::auth();

Route::get('/home', 'ChartRoomController@index');
Route::post('/room', 'ChartRoomController@createRoom');
Route::post('/search', 'ChartRoomController@search');
Route::get('/chart/{id}', 'ChartMessageController@message');
Route::post('/sendMessage', 'ChartMessageController@createMessage');
Route::get('/reply/{id}', 'ChartMessageController@reply');
Route::post('/reply', 'ChartMessageController@sendReply');
Route::get('/category/{category}', 'ChartRoomController@category');
Route::get('/profile', 'HomeController@profile');
Route::post('/upload', ['as'=>'upload','uses'=>'HomeController@upload']);