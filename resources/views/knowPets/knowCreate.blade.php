@extends('layouts.app')
<link href="{{ asset('css/petKnowCreateForm.css') }}" rel="stylesheet">
@section('content')

<div class="container">
			<div class="formBox">
				<form method="POST" action="{{route('petCreate')}}">
                    @csrf
					<input type="hidden" name="BoardType" value="1"/>  
						<div class="row">
							<div class="col-sm-12">
								<h2>Creates</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<input type="text" name="title" placeholder="제목" class="input" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<textarea class="input" name="content" placeholder="소통할 내용을 적어주세요.." required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<input type="submit" class="button" value="작성하기">
							</div>
						</div>
				</form>
			</div>
		</div>
    </div>
@endsection