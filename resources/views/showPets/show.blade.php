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
            <div class="card-body">
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>Product Name</strong></h4>
                            <h4>
                                <small>Product description</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class="col-4 col-sm-4 col-md-4">
                                <label for="">조회수</label>
                                <label for="">추천수</label>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <label for="">조회수</label>
                                <label for="">추천수</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                   
                <div class="pull-right">
                    <a href="" class="btn btn-block btn-outline-secondary pull-right">
                        뽐내기
                    </a>
                </div>
            </div>
        </div>
</div>
@endsection