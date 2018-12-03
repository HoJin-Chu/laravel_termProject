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
    $days = App\knowBoard::
    orderBy('created_at','desc')->paginate(5);
    $hitsBoards = App\knowBoard::
    orderBy('hits','desc')->paginate(5);
    return view('index')->with('days',$days)->with('hitsBoards',$hitsBoards);
});

//마이페이지
Route::get('myPage',function(){
    return view('myPage');
});

// 받은메일함
Route::get('recvMail','RecvMailController@RecvMailBoardIndex')->name('recvMail'); // 펫지식사이트

// 보낸메일함
Route::get('sendMail','SendMailController@SendMailBoardIndex')->name('sendMail'); // 펫지식사이트
Route::post('WriteSend','SendMailController@SendMailInsert')->name('WriteSend'); // 보내기
Route::get('readMail','SendMailController@SendMailView')->name('readMail'); // 보내기

// 글 커뮤니티사이트
Route::get('petKnow/{boardType}','KnowController@KnowBoardIndex')->name('petKnow'); // 펫지식사이트
Route::get('petCreatePage','KnowController@KnowCreateIndex')->name('petCreatePage'); // 펫지식글작성페이지
Route::post('petCreate','KnowController@KnowCreateInsert')->name('petCreate'); // 펫지식글작성
Route::get('petViewPage/{boardType}','KnowController@KnowViewIndex')->name('petViewPage'); // 펫지식글보기페이지
Route::get('petModifyPage','KnowController@KnowModifyIndex')->name('petModifyPage'); // 펫지식글수정페이지
Route::post('petModify/{boardType}','KnowController@KnowModifyInsert')->name('petModify'); // 펫지식글수정
Route::post('petDelete', 'KnowController@knowDelete')->name('petDelete'); // 해당글삭제
Route::get('petknow/fetch_data','KnowController@fetch_data');// pagenations
Route::post('petViewPage','KnowController@KnowReplyInsert')->name('KnowReply');// KnowReply

//이미지게시판 사이트
Route::get('petPhoto/{boardType}','PhotoController@PhotoBoardIndex')->name('petPhoto'); // 이미지게시판사이트
Route::get('PhotoCreatePage','PhotoController@PhotoCreateIndex')->name('PhotoCreatePage'); // 펫이스북글작성페이지
Route::post('PhotoCreate','PhotoController@PhotoCreateInsert')->name('PhotoCreate'); // 펫이스북글작성
Route::get('PhotoViewPage/{boardType}','PhotoController@PhotoViewIndex')->name('PhotoViewPage'); // 펫이스북글보기페이지
Route::get('PhotoModifyPage','PhotoController@PhotoModifyIndex')->name('PhotoModifyPage'); // 펫이스북수정페이지
Route::post('PhotoModify/{boardType}','PhotoController@PhotoModifyInsert')->name('PhotoModify'); // 펫지식글수정
Route::post('PhotoDelete', 'PhotoController@PhotoDelete')->name('PhotoDelete'); // 해당글삭제
Route::post('PhotoViewPage','PhotoController@PhotoReplyInsert')->name('PhotoReply'); // 해당댓글

//뽐내기 사이트
Route::get('petShow/{boardType}','ShowController@ShowBoardIndex')->name('petShow'); // 뽐내기
Route::get('ShowCreatePage','ShowController@ShowCreateIndex')->name('ShowCreatePage'); // 뽐내기글작성페이지
Route::post('ShowCreate','ShowController@ShowCreateInsert')->name('ShowCreate'); // 뽐내기글작성
Route::get('ShowViewPage/{boardType}','ShowController@ShowViewIndex')->name('ShowViewPage'); // 뽐내기글보기페이지
Route::get('ShowModifyPage','ShowController@ShowModifyIndex')->name('ShowModifyPage'); // 뽐내기수정페이지
Route::post('ShowModify/{boardType}','ShowController@ShowModifyInsert')->name('ShowModify'); // 뽐내기글수정
Route::post('ShowDelete', 'ShowController@ShowDelete')->name('ShowDelete'); // 뽐내기글삭제
Route::post('showViewPage','ShowController@ShowReplyInsert')->name('ShowReply');


//병원 사이트
Route::get('petHos','HospitalController@HosBoardIndex')->name('petHos'); // 병원

// auth
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


//마이페이지
Route::get('map',function(){
    return view('maps');
});
