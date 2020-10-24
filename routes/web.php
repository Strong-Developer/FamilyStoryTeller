<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','AuthController@signin')->name('signin')->middleware('guest');
Route::get('/signin', 'AuthController@signin')->name('signin')->middleware('guest');
Route::get('/signup', 'AuthController@signup')->name('signup')->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/story', 'StoryController@index');
    Route::get('/submit', 'SubmitController@index');
    Route::get('/invite','InviteController@index');
    Route::get('/question','QuestionController@index');
    Route::get('/record','RecordController@index');
    Route::get('/account','AccountController@index');
    Route::post('/logout', 'AuthController@logout');    
    Route::post('/invite/sendmail', 'InviteController@sendmail');
    Route::post('/question/getquery', 'QuestionController@getquery');
    Route::post('/question/sendmail', 'QuestionController@sendmail');
    Route::post('/record/getquery', 'RecordController@getquery');
    Route::post('/record/sendmail', 'RecordController@sendmail');
    Route::post('/story/getstory', 'StoryController@getstory');
    Route::post('/story/setchangedtext', 'StoryController@setchangedtext');
    Route::post('/story/setchangedorder', 'StoryController@setchangedorder');
    Route::post('/story/downloadtext', 'StoryController@downloadtext');
    Route::post('/story/downloadaudio', 'StoryController@downloadaudio');    
    Route::post('/story/findtext', 'StoryController@findtext');
    Route::post('/story/deleterecord', 'StoryController@deleterecord');
    Route::post('/account/getdata', 'AccountController@getdata');
    Route::post('/account/getteller', 'AccountController@getteller');
    Route::post('/account/update', 'AuthController@update');
});
Route::post('/signin', 'AuthController@authenticate');
Route::post('/signup', 'AuthController@register');