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
    return view('index');
});

Route::get('petknow','processController@firstLinkPet')->name('petKnow'); // 펫지식사이트

Route::get('petDog','processController@secondLinkPet')->name('petDog'); // 강아지사이트


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


