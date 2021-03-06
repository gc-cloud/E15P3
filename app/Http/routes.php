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

Route::match(['get','post'],'textgenerator',
    ['as' => 'textgenerator', 'uses' => 'TextGeneratorController@generateText']);

Route::match(['get','post'],'usergenerator',
    ['as' => 'usergenerator', 'uses' => 'UserGeneratorController@generateUser']);

Route::match(['get','post'],'passwordgenerator',
    ['as' => 'passwordgenerator', 'uses' => 'PasswordGeneratorController@generatePassword']);

/* Show logs only in local environment */

if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};
