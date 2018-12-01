<table class="table">
        <tr style="background:#EAEAEA">
            <th>#</th>
            <th>title</th>
            <th>writer</th>
            <th>hits</th>
            <th>like</th>
        </tr>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
	        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $message }}
        </div>
        @endif
        @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td><a href="{{route('petViewPage',['boardType'=>$item->BoardType,
                'id'=>$item->id])}}">{{$item->title}}</a></td>
            <td>{{$item->writer}}</td>
            <td>{{$item->hits}}</td>
            <td>{{$item->likes}}</td>
        </tr>
        @endforeach
</table>
<div style="display:flex;justify-content:center">
{{ $items->links() }}
</div>
