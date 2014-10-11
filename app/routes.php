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

Route::post('login', [
    'as' => 'chasenet.login',
    'uses' => 'UserController@login',
]);
Route::get('logout', [
    'as' => 'chasenet.logout',
    'uses' => 'UserController@logout',
]);

Route::get('scoreboard', [
    'as' => 'chasenet.scoreboard',
    'uses' => 'ScoreboardController@getIndex',
]);

Route::get('wargames', [
    'as' => 'chasenet.wargames.index',
    'uses' => 'LevelsController@index',
]);

Route::group(['prefix' => 'wargames'],function(){

    // Level 1

    Route::group(['prefix'=>'586cbf6adf67d60ed200e4839d6c3de9f25536ad'], function(){

        Route::get('/', [
            'uses' => 'LevelOneController@index',
            'as'   => 'chasenet.level.one',
        ]);

    });


    // Level 2
    Route::group(['prefix' => 'fa811a4a2363a1e4149c9c7c3e0f2aae84eb68c3'], function() {

        Route::get('/', [
            'uses' => 'LevelTwoController@index',
            'as' => 'chasenet.level.two',
        ]);

        Route::group(['prefix' => 'manage'], function() {

            Route::get('content', [
                'uses' => 'LevelTwoController@manageContent',
                'as'   => 'chasenet.level.two.manage.content',
            ]);

            Route::get('users', [
                'uses' => 'LevelTwoController@manageUsers',
                'as'   => 'chasenet.level.two.manage.users',
            ]);
        });
    });



    // Level 3
    Route::get('/wargames/7fbb727db4b2b6715b092505673cb5922a0d63a8', [
        'uses' => 'LevelThreeController@index',
        'as' => 'chasenet.level.three',
    ]);

    // Level 4
    Route::get('/wargames/3c8497b2c5b6745db91aaaaef31fb37e1671237f', [
        'uses' => 'LevelFourController@index',
        'as' => 'chasenet.level.four'
    ]);

    // Level 5
    Route::get('/wargames/5b0113bfaebc39fb16af6afe12e236eef551791b', 'LevelFiveController@index');

    // Level 6
    Route::get('/wargames/0f99752e3fb1e3326b4997d27cc1cde99b820816', 'LevelSixController@index');

    // Level 7
    Route::get('/wargames/fa329d2ac11e24073f4eb050d96af22d7c324152', 'LevelSevenController@index');

    // Level 8
    Route::get('/wargames/6754fe3cd8310d20ed04b8c7b66abebcdb16d88d', 'LevelEightController@index');

    // Level 9
    Route::get('/wargames/b82b40b84a2f06957ec9caf1768340bd6b929cc4', 'LevelNineController@index');

    // Level 10
    Route::get('/wargames/8339b099f617d3e86621800c5c8a5d785fac3e55', 'LevelTenController@index');
});
