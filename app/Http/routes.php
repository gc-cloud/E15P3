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

Route::get('/textgenerator', function () {
  //  return view('names');
  return 'page to generate text';
});
Route::get('/usergenerator', function () {
    //return view('names');
    return 'page to generate users';
});
Route::get('/passwordgenerator', function () {
    return 'page to generate passwords';
});
