@extends('layouts.app')
<script src="/TermProject3/ckeditor/ckeditor.js"></script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 well well-lg">
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> CREATE</legend>
            <form action="{{route('PhotoCreate')}}" method="post" class="form" role="form">
            @csrf
            <input type="hidden" name="BoardType" value="2"/>  
            <input class="ckeditor form-control" name="title" placeholder="TITLE" type="text" />
            <textarea name="content" id="content" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
            <button style="margin-top:30px;" class="btn btn-lg btn-primary btn-block" type="submit">
                Crear CREATE</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
CKEDITOR.config.height = 300;
CKEDITOR.replace('content', {
    toolbar: 'Full',
    uiColor: '#eaebe7',
    filebrowserBrowseUrl: '/TermProject3/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files',
    filebrowserImageBrowseUrl: '/TermProject3/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images',
    filebrowserFlashBrowseUrl: '/TermProject3/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash',
    filebrowserUploadUrl: '/TermProject3/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files',
    filebrowserImageUploadUrl: '/TermProject3/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images',
    filebrowserFlashUploadUrl: '/TermProject3/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash'
  });
</script>
@endsection