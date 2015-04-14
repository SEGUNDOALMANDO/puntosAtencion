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

//Route::get('/', 'WelcomeController@index');
//Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('home', 'HomeController@index');
//Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@destroy'));
Route::get( '/logout' , [
    'as' => 'logout' ,
    'uses' => 'Auth\AuthController@getLogout'
] );
//show form register new activity
Route::get('new/activity', array('as' => 'new/activity', 'uses' => 'ActivityController@index'));

Route::post('activity/register', array('as' => 'activity/register', 'uses' => 'ActivityController@store'));


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//get Responsables
Route::get('ajax/getResponsables',
    array('as' => 'ajax/getResponsables',
        'uses'=>'ActivityController@getResponsables'));

