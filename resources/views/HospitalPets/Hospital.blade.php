<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5 - Multiple markers in google map using gmaps.js</title>
    <script src="{{ asset('js/hos.js') }}" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEbRlSwgZm0GAlcIET02w2KJOPbRMgYg8&callback=initMap">
    </script>
  	<style type="text/css">
	  html, body, #map-canvas {
        height: 100%;
        margin: 0;
        padding: 0;
      }
  	</style>
</head>
<body>
<div id="map-canvas"></div>

</body>
</html>
