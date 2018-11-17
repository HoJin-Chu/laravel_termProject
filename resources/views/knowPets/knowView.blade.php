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
                <td>{{$msg['updated_at']}}</a></td>
                <td>{{$msg['hits']}}</td>
                <td>{{$msg['likes']}}</td>
            </tr>
            <tr>
                <th colspan="4"><span class="pull-right">TITLE : {{$msg['title']}}</span></th>
            </tr>
            <tr>
                <th colspan="4" class="text-center">CONTENT</th>
            </tr>
            <tr>
                <td colspan="4" style="font-size:25px">{{$msg['content']}}</td>
            </tr>
            <tr>
                <td colspan="1"><a href="#" class="btn btn-primary btn-block">수정</a></td>
                <td colspan="1"><a href="#" class="pull-right btn btn-danger btn-block">삭제</a></td>
                <td colspan="2"><a href="#" class="pull-right btn btn-success btn-block">목록보기</a></td>
            </tr>
        </tbody>
    </table>    

      <div class="card-footer">
            <div class="pull-right" style="margin: 5px">
              <small>총 댓글수</small> <b>50.00s</b></div><br>
                <div class="coupon col-md-12 col-sm-12 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-10">
                            <input type="text" class="form-control" style="height:50px" placeholder="cupone code">
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-defalut btn-lg" value="Use cupone">
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection