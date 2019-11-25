<?php

namespace Anax\View;

?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>


<h1>Weather Results</h1>

<p>SearchType = <?= $searchType ?></p>
<p>Search = <?= $search ?></p>
<p>Time = <?= $time ?></p>
<p>Test = <?= $test ?></p>


<div id="map"></div>

<script>
var map = L.map('map', {
    center: [<?= $ipInfo->latitude ?>, <?= $ipInfo->longitude ?>],
    // center: [51.505, -0.09],
    zoom: 13
    
});
// Creating a Layer object
var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

// Adding layer to the map
// map.addLayer(layer);
</script>


<?php
var_dump($weatherInfo);
var_dump($ipInfo);
?>
