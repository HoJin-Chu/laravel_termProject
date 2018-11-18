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