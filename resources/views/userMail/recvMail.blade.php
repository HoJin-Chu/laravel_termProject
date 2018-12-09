@extends('layouts.app')
@section('content')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{ asset('css/mail.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">
            @include('layouts.mail')
                  <aside class="lg-side">
                      <div class="inbox-head">
                          <h3>쪽지함</h3>
                      </div>
                      <div id="table_data">
                      <div class="inbox-body">
                          <table class="table table-inbox table-hover">
                            <tbody>
                            <tr class="">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"></td>
                                  <td class="view-message  dont-show">보낸사람</td>
                                  <td class="view-message ">제목</td>
                                  <td class="view-message  inbox-small-cells">첨부파일</i></td>
                                  <td class="view-message  text-right">보낸일자</td>
                              </tr>
                              <tr class="unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message  dont-show">PET PLACEs</td>
                                  <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                  <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                  <td class="view-message  text-right">9:27 AM</td>
                              </tr>
                              <tr class="unread">
                                  <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">Google Webmaster </td>
                                  <td class="view-message">Improve the search presence of WebSite</td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">March 15</td>
                              </tr>
                              @foreach($recv as $msg)
                              <tr>
                              <td class="inbox-small-cells">
                                      <input type="checkbox" class="mail-checkbox">
                                  </td>
                                  <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                  <td class="view-message dont-show">{{$msg->send_id}}</td>
                                  <td class="view-message"><a href="{{ route('readMail',[
                                'id'=>$msg->id]) }}">{{$msg->title}}</a></td>
                                  <td class="view-message inbox-small-cells"></td>
                                  <td class="view-message text-right">{{$msg->created_at}}</td>
                                  <td class="view-message text-right">{{$msg->recv_chk}}</td>
                            </tr>
                              @endforeach
                          </tbody>
                          </table>
                      </div>
                      </div>
                  </aside>
              </div>
</div>

@endsection
