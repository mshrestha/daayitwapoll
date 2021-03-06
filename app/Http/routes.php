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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/', 'IndexController');
Route::resource('poll', 'PollController');
Route::resource('profile', 'ProfileController');
Route::resource('en', 'EnController');
Route::get('profile', array('before' => 'old', 'uses' => 'ProfileController@show'));
Route::resource('vote/{id}/{userid}', 'VoteController');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
