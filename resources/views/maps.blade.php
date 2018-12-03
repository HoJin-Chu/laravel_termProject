<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>

body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Poppins', sans-serif; letter-spacing: 0px; font-size: 16px; color: #777b80; font-weight: 400; line-height: 1.8; }
h1, h2, h3, h4, h5, h6 { letter-spacing: 0px; font-weight: 500; color: #2e3133; margin: 0px 0px 15px 0px; font-family: 'Poppins', sans-serif; }
h1 { font-size: 40px; line-height: 52px; }
h2 { font-size: 32px; line-height: 42px; }
h3 { font-size: 24px; line-height: 34px; }
h4 { font-size: 22px; line-height: 32px; }
h5 { font-size: 16px; line-height: 20px; }
h6 { font-size: 14px; line-height: 18px; }
p { margin: 0 0 20px; line-height: 1.7; }
p:last-child { margin: 0px; }
ul, ol { list-style: none; margin: 0; padding: 0; }
a { text-decoration: none; color: #777b80; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
a:focus, a:hover { text-decoration: none; color: #023981; }
.btn-link { color: #304496; font-size: 14px; font-weight: 700; text-transform: uppercase; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; position: relative; letter-spacing: 0px; border-bottom: 1px solid #304496; }
.btn-link:hover { color: #263679; text-decoration: none; border-bottom: 1px solid #263679; }

#map_wrapper { height: 400px; }
#map_canvas { width: 100%; height: 100%; }
.location-block { margin-bottom: 20px; }
.location-content { font-size: 14px; font-weight: 500; }
.location-head { margin-bottom: 20px; }
.location-icon { font-size: 18px; color: #023981; padding-right: 6px; }
.location-title { font-weight: 600; color: #023981; font-size: 18px; text-transform: uppercase; letter-spacing: 2px; }

.info_content{background-color: #fff; padding: 10px;}
.info_location_name{color: #023981; font-size: 16px; font-weight: 700; text-transform:uppercase; margin-bottom: 10px; }
.info_location_text{ margin-bottom: 10px; color: #767a7f; font-size: 13px; font-weight:500; line-height: 20px;}
.info_location_call{ font-size: 14px; color: #2e3133; font-weight: 600; }
.info_location_call span{padding-right: 8px; font-size: 14px; color: #023981;}
.mt30{margin-top:20px;}
</style>
    <title>Document</title>
</head>
<body>

<div id="map_wrapper">
    <div id="map_canvas" class="mapping"></div>

</div>
<div class="container">
 <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center mt20">Created for <a href="https://goo.gl/NPfPMk" target="_blank">easetemplate</a></div>
  </div>
</div>

<script>

    jQuery(function($) {
        // Asynchronously Load the map API
        var script = document.createElement('script');
        script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBZib4Lvp0g1L8eskVBFJ0SEbnENB6cJ-g&callback=initialize";
        document.body.appendChild(script);
    });a

    function initialize() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        // Display a map on the page
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        map.setTilt(45);

        // Multiple Markers
        var markers = [
            ['Ahmedabad, Gujarat', 23.0201818, 72.4396589],
            ['Baroda,Gujarat', 22.3220876, 73.1030464],
            ['Surat, Gujarat', 21.1591857, 72.7522564],
            ['Jamnagar, Gujarat', 22.4743153, 69.9883737]
        ];

        // Info Window Content
        var infoWindowContent = [
            ['<div class="info_content">' +
                '<h3 class="info_location_name">Ahmedabad</h3>' +
                '<p class="info_location_text">758, Shady Pines Drive Martinsville, Ahmedabad</p>' +
                '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>(800) 123-4567</p>' +
                '<a href="#" class="btn-link">View Location</a>' +


                '</div>'
            ],
            ['<div class="info_content">' +
                '<h3 class="info_location_name">Baroda</h3>' +
                '<p class="info_location_text">2105, Daylene Drive Southfield,Baroda</p>' +
                '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>(800) 123-1314</p>' +
                '<a href="#" class="btn-link">View Location</a>' +


                '</div>'
            ],
            ['<div class="info_content">' +
                '<h3 class="info_location_name">Surat</h3>' +
                '<p class="info_location_text">1012, Matthews StreetSterling, Surat</p>' +
                '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>(800) 123-1112</p>' +
                '<a href="#" class="btn-link">View Location</a>' +


                '</div>'
            ],
            ['<div class="info_content">' +
                '<h3 class="info_location_name">Jamnagar</h3>' +
                '<p class="info_location_text">1537, Rosewood Court Holland, Jamnagar</p>' +
                '<p class="info_location_call"><span><i class="fa fa-phone"></i></span>(800) 123-8910</p>' +
                '<a href="#" class="btn-link">View Location</a>' +


                '</div>'
            ]
        ];
        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow({ maxWidth: 280 }),
            marker, i;

        // Loop through our array of markers & place each one on the map
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1],
                markers[i][2], markers[i][3], markers[i][4]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });

            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var  tilesloadedListener = google.maps.event.addListener((map),  'tilesloaded', function(event) {
            this.setZoom(5);
            google.maps.event.removeListener(tilesloadedListener);
        });

    }

</script>
</body>
</html>
