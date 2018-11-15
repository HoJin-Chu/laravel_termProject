@extends('layouts.app')
@section('content')
    <section class="container">
    <div class="jumbotron">
        <h2 class="text-center">펫지식을 공유하세요</h2>
    </div>
    <div class="jumbotron">
        <p>가장 인기있는 글</p>
    </div>

    <table class="table">
        <tr style="background:#EAEAEA">
            <th>title</th>
            <th>writer</th>
            <th>hits</th>
            <th>like</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td>{{$item->writer}}</td>
            <td>{{$item->hits}}</td>
            <td>{{$item->likes}}</td>
        </tr>
        @endforeach
    </table>
    <div style="display:flex;justify-content:center">
    {{ $items->links() }}
    </div>
    <input class="btn btn-block" type="button" onclick="" value="작성하기"/>
    </section>
@endsection