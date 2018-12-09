@extends('layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/[version.number]/[distribution]/ckeditor.js"></script>


<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well well-lg">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> CREATE</legend>
            <form action="{{route('PhotoCreate')}}" method="post">
                @csrf
                <input type="hidden" name="BoardType" value="2"/>
                <input class="form-control" name="title" placeholder="TITLE" type="text" required/>
                <textarea name="content" id="editor">This is some sample content.</textarea>
		        <script>
                    ClassicEditor
				    .create( document.querySelector( '#editor' ),{
                        ckfinder: {
                    uploadUrl: 'ckeditor/uploads.php'
                        }
                        }
                        )
.then( editor => {
    console.log( 'Editor was initialized', editor );
    myEditor = editor;
} )
.catch( err => {
    console.error( err.stack );
} );
		        </script>
                <button style="margin-top:30px;" class="btn btn-lg btn-primary btn-block" type="submit">
                    Crear CREATE</button>
            </form>
        </div>
    </div>

@endsection
