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

// 펫지식 사이트
Route::get('petknow','KnowController@KnowBoardIndex')->name('petKnow'); // 펫지식사이트
Route::get('petCreatePage','KnowController@KnowCreateIndex')->name('petCreatePage'); // 펫지식글가기
Route::post('petCreate','KnowController@KnowCreateInsert')->name('petCreate'); // 펫지식글작성


//강아지 사이트 
Route::get('petDog','DogController@DogBoardIndex')->name('petDog'); // 강아지사이트

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


