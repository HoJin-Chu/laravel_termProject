@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well well-lg">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> CREATE</legend>
            <form action="{{route('PhotoCreate')}}" method="post">
                @csrf
                <input type="hidden" name="BoardType" value="2"/>
                <input class="form-control" name="title" placeholder="TITLE" type="text" />

                <textarea name="content" id="content" required></textarea>
                        <script type="text/javascript">
                            CKEDITOR.replace('content', {
                                'filebrowserUploadUrl': "{{URL::to('/')}}/ckeditor/upload.php"
                            });
                        </script>
                <button style="margin-top:30px;" class="btn btn-lg btn-primary btn-block" type="submit">
                    Crear CREATE</button>
            </form>
        </div>
    </div>

@endsection
