@extends('layouts.app')
<link href="{{ asset('css/petKnowCreateForm.css') }}" rel="stylesheet">
@section('content')

<div class="container">
			<div class="formBox">
				<form method="POST" action="/petModify?id={{$msg["id"]}}">
                    @csrf
						<div class="row">
							<div class="col-sm-12">
								<h2>MODIFYS</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<input type="text" name="title" placeholder="제목" class="input" value="{{ $msg['title'] }}" readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<textarea class="input" name="content" placeholder="소통할 내용을 적어주세요.." required>{{ $msg['content'] }}</textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<input type="submit" class="button" value="작성하기">
							</div>
						</div>
				</form>
				<a href="/petViewPage?id={{$msg["id"]}}" class="btn btn btn-block">돌아가기</a>
			</div>
		</div>
    </div>
@endsection