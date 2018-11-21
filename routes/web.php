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

//마이페이지
Route::get('myPage',function(){
    return view('myPage');
});

Route::get('petKnow/{boardType}','KnowController@KnowBoardIndex')->name('petKnow'); // 펫지식사이트
Route::get('petCreatePage','KnowController@KnowCreateIndex')->name('petCreatePage'); // 펫지식글작성페이지
Route::post('petCreate','KnowController@KnowCreateInsert')->name('petCreate'); // 펫지식글작성
Route::get('petViewPage/{boardType}','KnowController@KnowViewIndex')->name('petViewPage'); // 펫지식글보기페이지
Route::get('petModifyPage','KnowController@KnowModifyIndex')->name('petModifyPage'); // 펫지식글수정페이지
Route::post('petModify/{boardType}','KnowController@KnowModifyInsert')->name('petModify'); // 펫지식글작성
Route::post('petDelete', 'KnowController@knowDelete')->name('petDelete'); // 해당글삭제
// pagenations
Route::get('petknow/fetch_data','KnowController@fetch_data');
// KnowReply
Route::post('petViewPage','KnowController@KnowReplyInsert')->name('KnowReply');

//이미지게시판 사이트 
Route::get('petPhoto/{boardType}','PhotoController@PetBoardIndex')->name('petPhoto'); // 이미지게시판사이트

//병원 사이트 
Route::get('petHos','HospitalController@HosBoardIndex')->name('petHos'); // 병원

//뽐내기 사이트
Route::get('petShow/{boardType}','ShowController@ShowBoardIndex')->name('petShow');

Auth::routes();

// 구글
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

// GIT
Route::get('social/{provider}',[
    'as' => 'social.login',
    'uses' => 'SocialController@execute',
]);

Route::get('/home', 'HomeController@index')->name('home');


