<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Street View</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #street-view {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="street-view"></div>
    <script>
var panorama;
function initialize() {
  panorama = new google.maps.StreetViewPanorama(
      document.getElementById('street-view'),
      {
        position: {lat: 51.5045245, lng: -0.0857606},
        pov: {heading: 165, pitch: 0},
        zoom: 1
      });
}

    </script>
    <script async defer src="//maps.googleapis.com/maps/api/js?signed_in=true&callback=initialize">
    </script>
  </body>
</html>
