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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// film routes

//Route::get('/films/create', function () {
//    return view('film/filmCreate');
//});

Route::get('/films/create', 'HomeController@returnTags');

//process
Route::post('/processCreate', 'HomeController@processCreate');
Route::post('/saveComment', 'HomeController@saveComment');

Route::get('/films', 'HomeController@allFilms');
Route::get('/films/{slug}', 'HomeController@titleFilm');


