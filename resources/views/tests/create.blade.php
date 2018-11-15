@extends('test')
@section('content')
    <form action="/complete" method="post">
    @csrf
        <input type="text" name="title" placeholder="title"/>
        <textarea name="content" placeholder="text..."></textarea>
        <input type="submit" value="작성"/>
    </form>
@endsection
