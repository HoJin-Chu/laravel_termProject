@extends('layouts.app')
    <link href="{{ asset('css/imgUpload.css') }}" rel="stylesheet">
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well well-lg">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> CREATE</legend>
            <form action="{{route('ShowCreate')}}" method="post" class="form" role="form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="BoardType" value="3"/>  
            <input class="form-control" name="title" placeholder="TITLE" type="text" />


        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    이미지업로드 : <input type="file" id="imgInp" name="imgPath">
                </span>
            </span>
            <input type="text" class="form-control" name="imgPath" readonly>
        </div>
        <img id='img-upload'/>


            <textarea name="content" id="content" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
            <button style="margin-top:30px;" class="btn btn-lg btn-primary btn-block" type="submit">
                Crear CREATE</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/imgUpload.js') }}"></script>
@endsection