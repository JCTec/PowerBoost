<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addPost', 'HomeController@addPost')->name('addPost');

Route::get('/postTweet/{player}', 'PICController@postTweet')->name('postTweet');
Route::get('/start', 'PICController@start')->name('start');

Route::get('/redirect', 'SocialAuthTwitterController@redirect');
Route::get('/callback', 'SocialAuthTwitterController@callback');

