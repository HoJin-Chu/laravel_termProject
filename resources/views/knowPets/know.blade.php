@extends('layouts.app')
@section('content')
    <section class="container">
    <div class="jumbotron">
        <h2 class="text-center">펫지식을 공유하세요</h2>
    </div>
   

    <table class="table">
        <tr style="background:#EAEAEA">
            <th>#</th>
            <th>title</th>
            <th>writer</th>
            <th>hits</th>
            <th>like</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td><a href="/petViewPage?id={{$item["id"]}}">{{$item->title}}</a></td>
            <td>{{$item->writer}}</td>
            <td>{{$item->hits}}</td>
            <td>{{$item->likes}}</td>
        </tr>
        @endforeach
    </table>
    <div style="display:flex;justify-content:center">
    {{ $items->links() }}
    </div>
    <input class="btn btn-block" type="button" onclick="location.href='{{ route('petCreatePage') }}'" value="작성하기"/>
    </section>
@endsection