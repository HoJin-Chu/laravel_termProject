@extends('layouts.app')
@section('content')
    <script src="{{ asset('js/hos.js') }}" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEbRlSwgZm0GAlcIET02w2KJOPbRMgYg8&callback=initMap">
    </script>
  	<style type="text/css">
      #wrap{
          display:flex;
          padding:20px;
      }
     .impor{
        width:40%;
        height:750px;
        border:5px solid #6c6c6f;
        padding:20px;
        text-align : center;
    }
    #demo li{
        margin-bottom:7px;
    }
	  #map-canvas {
        width:60%;
        height: 750px;
        margin-left:10px;
      }
      ul li{
        text-align: left;
        list-style:none;
        margin-bottom:2px;
      }
  	</style>
</head>
<body>
    <div id="wrap">
        <div class="impor">
            <div id="demo"></div>
        </div>
        <div id="map-canvas"></div>
    </div>
@endsection
