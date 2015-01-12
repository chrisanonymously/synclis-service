<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>A simple map</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox.js/v2.1.4/mapbox.css' rel='stylesheet' />
<style>
  body { margin:0; padding:0; }
  #map { position:absolute; top:0; bottom:0; width:100%; }
</style>
</head>
<body>
<div id='map'></div>
<script>
L.mapbox.accessToken = 'pk.eyJ1Ijoib25lY3Vwb2ZqYXZhIiwiYSI6Il9VOUNPS0EifQ.BvNONBuxvbUkMcYReb-Jww';
var map = L.mapbox.map('map', 'onecupofjava.kdhp584g')
    .setView([40, -74.50], 9);
</script>
</body>
</html>