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

Route::get('/', 'ResumeController@index');

Route::get('technology', 'ResumeController@technology');

Route::get('history', 'ResumeController@history');

Route::get('education', 'ResumeController@education');

Route::get('music', 'ResumeController@music');

Route::get('contact',
    ['as' => 'contact', 'uses' => 'ResumeController@contact']);

Route::post('send',
    ['as' => 'send', 'uses' => 'ResumeController@send']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
