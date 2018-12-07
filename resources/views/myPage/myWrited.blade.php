@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@section('content')
<section class="container">
        <h5 class="text-center">내가 작성한 게시글</h5>
        <hr>
    <div id="table_data">
        @include('myPage.noneLoading')

    </div>
    </section>

<script>
    $(document).ready(function(){
        $(document).on('click','.pagination a',function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page){
            $.ajax({
                url:"myWrited/fetch_data?page="+page,
                success:function(data){
                    $('#table_data').html(data);
                }
            });
        }
    });
</script>
@endsection
