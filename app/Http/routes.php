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

Route::get('/','HomeController@getIndex');

Route::get('/textgenerator', 'TextGeneratorController@getIndex');

Route::get('/usergenerator', 'UserGeneratorController@getIndex');

/*Route::get('passwordgenerator', 'PasswordGeneratorController@getIndex');*/

Route::get('acknowledgements', 'AcknowledgementsController@getIndex');

/* Define route aliases */
Route::get('passwordgenerator',
  ['as' => 'passwordgenerator', 'uses' => 'PasswordGeneratorController@getIndex']);
Route::post('passwordgenerator',
  ['as' => 'passwordgenerator', 'uses' => 'PasswordGeneratorController@store']);
