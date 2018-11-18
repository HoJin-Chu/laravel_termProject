@extends('layouts.app')
<link href="{{ asset('css/photo.css') }}" rel="stylesheet">
<style>
    html{
        font-size : 15px;
    }
</style>
@section('content')
<div class="container">
       <div class="pull-right"  style="width:55%;margin-left:21%;padding:20px;">
                    <a href="" class="btn btn-block btn-outline-secondary pull-right">
                        작성하기
                    </a>
                </div>
	<div class="col-md-7" style="margin-left:20%;">
        <div class="card card-default">
            <div class="card-body" >
               <section class="post-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="40" height="40" alt="...">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="#" class="anchor-username"><h4 class="media-heading">Bayu Darmantra</h4></a> 
                                <a href="#" class="anchor-time">51 mins</a>
                              </div>
                            </div>
                        </div>
                         <div class="col-md-1">
                             <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                         </div>
                    </div>             
               </section>
               <section class="post-body">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras 
                   turpis sem, dictum id bibendum eget, malesuada ut massa. Ut scel
                   erisque nulla sed luctus dapibus. Nulla sit amet mi vitae purus sol
                   licitudin venenatis. Praesent et sem urna. Integer vitae lectus nis
                   l. Fusce sapien ante, tristique efficitur lorem et, laoreet ornare lib
                   ero. Nam fringilla leo orci. Vivamus semper quam nunc, sed ornare magna dignissim sed. Etiam interdum justo quis risus
                   efficitur dictum. Nunc ut pulvinar quam. N
                   unc mollis, est a dapibus dignissim, eros elit tempor diam, eu tempus quam felis eu velit.</p> 
               </section>
               <section class="post-footer">
                   <hr>
                   <div class="post-footer-option container">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Comment</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                        </ul>
                   </div>
               </section>
            </div>
        </div>   
	</div>
</div>

@endsection