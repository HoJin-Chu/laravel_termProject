@extends('layouts.app')

@section('content')

<div id="wrapper" class="animate" style="padding:3%;">
    <div class="container-fluid">
    <img src="{{asset('img/abstract.jpg')}}" width="100%" height="400px" alt="img"><br><br><br><br>
          <div class="row" style="margin-bottom:40px">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">펫 지식<a href="{{ url('petKnow') }}/{{'1'}}" class="card-link"> Click</a></h5>
              <h6 class="card-subtitle mb-2 text-muted">다양한 동물들의 모든 지식을 공유 해보자 </h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">펫이스북<a href="{{ url('petPhoto') }}/{{'2'}}" class="card-link"> Click</a></h5>
              <h6 class="card-subtitle mb-2 text-muted">다양한 사람들과 소통을 해보자 </h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title">자랑하기<a href="{{ url('petShow') }}/{{'3'}}" class="card-link"> Click</a></h5>
              <h6 class="card-subtitle mb-2 text-muted">우리집 애완동물을 자랑해보자 </h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom:40px">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">전국동물보호센터<a href="{{ route('petHos') }}" class="card-link"> Click</a></h5>

              <h6 class="card-subtitle mb-2 text-muted">전국의 동물 보호센터를 한눈에 보자</h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col">
          <div class="card">
            <div class="card-body">
            <div style="display:flex;justify-content:space-between">
              <h5 class="card-title">최근에 올라온 게시글</h5>
                  </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">작성자</th>
                    <th scope="col">제목</th>
                    <th scope="col">조회수</th>
                  </tr>
                </thead><br>
                <tbody>
                <input type="hidden" value="{{ $num = 1 }}">
                @foreach($days as $day)
                  <tr>
                    <th scope="row">{{$num}}</th>
                    <td>{{$day->writer}}</td>
                    <td>{{$day->title}}</td>
                    <td>{{$day->hits}}</td>
                  </tr>
                  <input type="hidden" value="{{ $num = $num+1 }}">
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div> <div class="col">
          <div class="card">
            <div class="card-body"><div style="display:flex;justify-content:space-between">
              <h5 class="card-title">인기있는 게시글</h5>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">작성자</th>
                    <th scope="col">제목</th>
                    <th scope="col">조회수</th>
                  </tr><br>
                </thead>
                <tbody>
                <input type="hidden" value="{{ $num = 1 }}">
                @foreach($hitsBoards as $hitsBoard)
                  <tr>
                    <th scope="row">{{$num}}</th>
                    <td>{{$hitsBoard->writer}}</td>
                    <td>{{$hitsBoard->title}}</td>
                    <td>{{$hitsBoard->hits}}</td>
                  </tr>
                  <input type="hidden" value="{{ $num = $num+1 }}">
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
