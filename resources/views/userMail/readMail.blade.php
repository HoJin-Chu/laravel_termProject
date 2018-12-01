<link href="{{ asset('css/readMail.css') }}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">

	<div class="row">
		<div class="tab_content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <ul class="sprinkle_types">
                                    <li>TO : {{ $sendView['recv_id'] }}</li>
                                    <li>FROM : {{ $sendView['send_id'] }}</li>
                                    <li>TIME : {{ $sendView['created_at'] }}</li>
                                    <li>FILE : </li>
                                </ul>
                                <hr>
                                <h2 class="sprinkle_types_title">보낸내용</h2>
                                <p class="sprinkle_types_para">{{ $sendView['content'] }}</p>
                            </div>
	</div>
    <br>
    <button href="" class="btn btn-primary">답장</button>
    <button href="" class="btn btn-danger">삭제</button>
    <a href="{{ route('sendMail') }}" class="btn btn-block btn-dark">돌아가기</a>

</div>
