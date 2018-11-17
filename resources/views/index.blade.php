@extends('layouts.app')

@section('content')

<div id="wrapper" class="animate" style="padding:3%;">
    <div class="container-fluid">
    <img src="{{asset('img/abstract.jpg')}}" width="100%" height="400px" alt="img"><br><br><br><br>
          <div class="row" style="margin-bottom:40px">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">펫 지식</h5>
              <h6 class="card-subtitle mb-2 text-muted">다양한 동물들의 모든 지식을 공유 해보자 </h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
              <a href="{{ route('petKnow') }}" class="card-link">link</a>
              <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">펫이스북</h5>
              <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
              <a href="{{ route('petPhoto') }}" class="card-link">link</a>
              <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">자랑하기</h5>
              <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
              <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
              <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom:40px">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">전문가들의 지식</h5>
              <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
              <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
              <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">동물병원</h5>
              <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
              <a href="{{ route('petHos') }}" class="card-link">link</a>
              <a href="http://websitedesigntamilnadu.com" class="card-link">Another link</a>
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
              <a href="">+더보기</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <div class="col">
          <div class="card">
            <div class="card-body"><div style="display:flex;justify-content:space-between">
              <h5 class="card-title">인기있는 게시글</h5>
              <a href="">+더보기</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
