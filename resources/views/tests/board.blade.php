@extends('test')
@section('content')
    <table class="table">
        <tr>
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
    {{ $items->links() }}

@endsection