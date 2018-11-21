@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well well-lg">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> MODIFYS</legend>
            <form action="{{route('ShowModify',['boardType'=>$msg->BoardType,
                'id'=>$msg->id])}}" method="post" class="form" role="form">
            @csrf
            <input type="hidden" name="BoardType" value="2"/>  
            <input class="form-control" name="title" placeholder="TITLE" type="text" value="{{$msg->title}}" readonly/>
            <textarea name="content" id="content" class="form-control" rows="9" cols="25" required="required" placeholder="Message">{{$msg->content}}</textarea>
            <button style="margin-top:30px;" class="btn btn-lg btn-primary btn-block" type="submit">
                Crear MODIFY</button>
            </form>
            <a href="{{route('petShow',['boardType'=>$msg->BoardType,
                'id'=>$msg->id])}}" class="btn btn btn-block">돌아가기</a>
        </div>
    </div>
@endsection