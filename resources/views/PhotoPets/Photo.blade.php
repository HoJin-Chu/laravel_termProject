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
                    <a href="{{ route('PhotoCreatePage') }}" class="btn btn-block btn-outline-secondary pull-right">
                        작성하기
                    </a>
                </div>
                @foreach($items as $item)
	<div class="col-md-7" style="margin-left:20%;margin-bottom:30px;">
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
                                <a href="#" class="anchor-username"><h4 class="media-heading" >{{$item->writer}}</h4></a>
               <small>{{$item->created_at}}</small>

                              </div>
                            </div>
                        </div>
                         <div class="col-md-1">
                             <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                         </div>
                    </div>
               </section>
               <section class="post-body">
               <small><b>TITLE : {{$item->title}} / 좋아요 {{$item->likes}} </b></small>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <br>
               <br>
               </section>
               <section class="post-body">
               <h2>{!! $item->content !!}</h2>
               </section>
               <section class="post-footer">
                   <hr>
                   <div class="post-footer-option container">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i>Like</a></li>
                            <li><a href="{{route('PhotoViewPage',['boardType'=>$item->BoardType,
                'id'=>$item->id])}}">
                            Comment</a></li>
                            <li><a href="/PhotoModifyPage?id={{$item["id"]}}"> Modify</a></li>
                            <li><form action="/PhotoDelete" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $item['id'] }}"/>
                <input type="submit" value="X"/>
                </form></li>
                        </ul>
                   </div>
               </section>
            </div>
        </div>
	</div>
    @endforeach
</div>
<div style="display:flex;justify-content:center">
{{ $items->links() }}
</div>
@endsection
