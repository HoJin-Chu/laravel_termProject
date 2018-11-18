@extends('layouts.app')
@section('content')
    <section class="container">
    <div class="jumbotron">
        <h2 class="text-center">펫지식을 공유하세요</h2>
    </div>
    <div id="table_data">
        @include('knowPets.knowPageData')
    </div>
    <input class="btn btn-block" type="button" onclick="location.href='{{ route('petCreatePage') }}'" value="작성하기"/>
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
                url:"petknow/fetch_data?page="+page,
                success:function(data){
                    $('#table_data').html(data);
                }
            });
        }
    });
</script>

@endsection
