@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Board View</h1><hr>
	<table class="table table-striped table-hover table-bordered">
        <tbody>
            <tr>
                <th>WRITER</th>
                <th>DATE</th>
                <th>HIT</th>
                <th>LIKE</th>
            </tr>
            <tr>
                <td>{{$msg['writer']}}</td>
                <td>{{$msg['updated_at']}}</a></td>s
                <td>{{$msg['hits']}}</td>
                <td>{{$msg['likes']}}</td>
            </tr>
            <tr>
            
                <th colspan="4"><span class="pull-right">TITLE : {{$msg['title']}}</span></th>
            </tr></tr><tr>
            <tr>
                <th colspan="4" class="text-center">CONTENT</th>
            </tr>
            <tr>
                <td colspan="4" style="font-size:25px">{{$msg['content']}}</td>
            </tr>
            <tr>
                <td colspan="1">
                <a href="{{ route('petKnow',['boardType'=>$msg['BoardType']]) }}" class="pull-right btn btn-success btn-block ">목록보기</a>
                </td>
                
                <td colspan="3">
                <div style="display:flex;">
                <a href="/petModifyPage?id={{$msg["id"]}}" class="btn btn-primary">수정</a>
                <form action="/petDelete" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $msg['id'] }}"/>
                <input type="submit" class="pull-right btn btn-danger" value="삭제"/>
                </form>
                </div>
                </td>
            </tr>
        </tbody>
    </table>    

    <div class="card-footer">
            <div class="pull-right" style="margin: 5px">
              <small>총 댓글수</small> <b>50.00s</b></div><br>
            @if(Auth::check())
                <div class="coupon col-md-12 col-sm-12 no-padding-left pull-left">
                <form action="{{ route('KnowReply') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $msg['id'] }}">
                    <div class="row">
                        <div class="col-10">
                            <input type="text" name="reContent" class="form-control" style="height:50px" placeholder="cupone code">
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-defalut btn-lg" value="Use cupone">
                        </div>
                    </div>
                </form>
                </div>
            @else
            <div class="text-center"><small>로그인한 회원만 댓글을 작성 할수있습니다</small></div>
            @endif
            <hr>
            <table class="table table">
            <tr>
            <td>작성자</td>
            <td>댓글내용</td>
            <td>등록날짜</td>
            <td>컨텐츠</td>
            </tr>
            @foreach($items as $item)
			<tr>
				<td>
            <input type="button" class="btn btn-primary btn-sm" value="{{$item->writer}}"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>{{$item->reContent}}</td>
                <td><small>{{$item->created_at}}</small></td>
                <td>
                <a href="" class="btn btn-sm btn-dark">수정</a>
                <a href="" class="btn btn-sm btn-dark">삭제</a>
                </td>
			</tr>
            @endforeach
		
			</table>
    </div>
</div>
@endsection