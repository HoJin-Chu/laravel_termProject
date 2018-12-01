<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEbRlSwgZm0GAlcIET02w2KJOPbRMgYg8&callback=initMap">
    </script>
  	<style type="text/css">
	  .wrap{
			display:flex;
		}
		.impormation{
			width:30%;
			height:650px;
			border:1px solid black;
		}
    	#mymap {
      border:1px solid red;
    	width: 70%;
    	height: 650px;
    	}
  	</style>
</head>
<body>
			{{ $hos[0]["시도명"] }}
  <h2 style="text-align:center;">대구광역시 북구 동물병원 정보</h2>
	<div class="wrap">
		<div class="impormation"></div>
		<div id="mymap"></div>
	</div>

  <script type="text/javascript">
    var locations = <?php print_r(json_encode($locations)) ?>;
    var mymap = new GMaps({
      el: '#mymap',
      lat: 35.8857114,
      lng: 128.5828073,
      zoom:12
    });
    $.each( locations, function( index, value ){
	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      title: value.city,
	      click: function(e) {
	        alert('This is '+value.city+', gujarat from India.');
	      }
	    });
   });
  </script>

</body>
</html>
