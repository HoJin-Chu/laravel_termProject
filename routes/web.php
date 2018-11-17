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
    return view('start');
});

// 펫지식 사이트
Route::get('/index',function(){
    return view('index');
});

Route::get('petknow','KnowController@KnowBoardIndex')->name('petKnow'); // 펫지식사이트
Route::get('petCreatePage','KnowController@KnowCreateIndex')->name('petCreatePage'); // 펫지식글작성페이지
Route::post('petCreate','KnowController@KnowCreateInsert')->name('petCreate'); // 펫지식글작성
Route::get('petViewPage','KnowController@KnowViewIndex')->name('petViewPage'); // 펫지식글보기페이지
Route::get('petModifyPage','KnowController@KnowModifyIndex')->name('petModifyPage'); // 펫지식글수정페이지
Route::post('petModify','KnowController@KnowModifyInsert')->name('petModify'); // 펫지식글작성
Route::post('petDelete', 'KnowController@knowDelete')->name('petDelete'); // 해당글삭제


//강아지 사이트 
Route::get('petDog','DogController@DogBoardIndex')->name('petDog'); // 강아지사이트

//고양이 사이트 
Route::get('petCat','CatController@CatBoardIndex')->name('petCat'); // 고양이사이트

//병원 사이트 
Route::get('petHos','HospitalController@HosBoardIndex')->name('petHos'); // 고양이사이트

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


