<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Traffic layer</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: {lat: 4.7155781, lng: -74.0529183},
      disableDefaultUI: true
    });

    initGeolocation( map );

    var trafficLayer = new google.maps.TrafficLayer();
    trafficLayer.setMap(map);
  }

  function initGeolocation( map ){
    var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?&callback=initMap&signed_in=true" async defer>
    </script>
  </body>
</html>
