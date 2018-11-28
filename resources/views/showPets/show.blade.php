@extends('layouts.app')
<link href="{{ asset('css/cat.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="jumbotron"></div>

   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                SHOW PLACE
                <div class="clearfix"></div>
            </div>
    @foreach($items as $item)

            <div class="card-body">
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img src="{{ asset('img/'.$item->imgPath) }}" alt="titleImg" width="100%" height="15%">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>{{$item->writer}}</strong></h4>
                            <h4>
                                <small><a href="{{route('ShowViewPage',['boardType'=>$item->BoardType,
                'id'=>$item->id])}}">{{$item->title}}</a></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-4 col-sm-4 col-md-4">
                            </div>
                            <div class="col-10 col-sm-10 col-md-10">
                                <label for="">조회수{{$item->hits}}</label>
                                <label for="">추천수{{$item->likes}}</label>
                        </div>
                        </div>
                    </div>
                    <hr>
            </div>
            @endforeach
            <a href="{{ route('ShowCreatePage') }}" class="btn btn-lg btn-block btn-outline-secondary pull-right">
            뽐내기</a>
        </div>
        <br>
</div>
<div style="display:flex;justify-content:center">
{{ $items->links() }}    
</div>
@endsection