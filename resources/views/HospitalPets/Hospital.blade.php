
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="jumbotron">
    </div>
    <div class="row">
    @foreach($items as $item)
        <a href="">
        <div class="card" style="margin:40px;">
            <div class="col-sm-4">
                <img src="{{asset('img/abstract.jpg')}}" class="img-responsive" width="450px" height="300px" alt="Image">
                <h5>Current</h5>
            </div>
            </div>
        </a>
    @endforeach
    </div>
    <div style="display:flex;justify-content:center">
    {{ $items->links() }}
    </div>
</div>
@endsection