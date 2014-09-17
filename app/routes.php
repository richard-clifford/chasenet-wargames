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

// Home
Route::get('/', [
    'as' => 'chasenet.home',
    'uses' => 'IndexController@getIndex',
]);

Route::post('/login', [
    'as' => 'chasenet.login',
    'uses' => 'UserController@login',
]);
Route::get('/logout', [
    'as' => 'chasenet.logout',
    'uses' => 'UserController@logout',
]);

Route::get('/scoreboard', [
    'as' => 'chasenet.scoreboard',
    'uses' => 'ScoreboardController@getIndex',
]);

Route::get('/wargames', [
    'as' => 'chasenet.wargames.index',
    'uses' => 'LevelsController@index',
]);

// // fault
// Route::get('/', function(){
//     return View::make('hello');
// });

// // seesaw
// Route::get('/', function(){
//     return View::make('hello');
// });

// // task
// Route::get('/', function(){
//     return View::make('hello');
// });

// // sunburn
// Route::get('/', function(){
//     return View::make('hello');
// });

// // altar
// Route::get('/', function(){
//     return View::make('hello');
// });

// // altar
// Route::get('/', function(){
//     return View::make('hello');
// });

// // decay
// Route::get('/', function(){
//     return View::make('hello');
// });

// // Russia
// Route::get('/', function(){
//     return View::make('hello');
// });

// // chart
// Route::get('/', function(){
// 	return View::make('hello');
// });
