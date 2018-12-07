@extends('layouts.app')
@section('content')

<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10 text-center"> <h1><b>MY PROFILE</b></h1></div>
          @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block">
	        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
        </div>
        @endif
    </div><br>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      <div class="text-center">
      </div></hr><br><br><br>

          <ul class="list-group">
            <li class="list-group-item text-muted">My Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item"><span class="pull-left"><a href="{{ route('myWrited') }}"><strong> 내 게시글</strong></a></span>{{count($items)}}</li>

          </ul>

        </div><!--/col-3-->
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="{{ route('userModify') }}" method="post" id="registrationForm">
                  @csrf
                      <div class="form-group">

                      </div>
                      <div class="form-group">
                        <div class="col-xs-6">
                            <label for="email"><h4>Email</h4></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="{{Illuminate\Support\Facades\Auth::user()['email']}}" readonly>
                        </div>
                        </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="name" id="name" value="{{Illuminate\Support\Facades\Auth::user()['name']}}">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success btn-block" type="submit"><i class="glyphicon glyphicon-ok-sign"
                                ></i> Save</button>
                            </div>
                      </div>
              	</form>
              <hr>
             </div><!--/tab-pane-->
          </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->
@endsection
