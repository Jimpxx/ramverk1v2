<?php

namespace Anax\View;

?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>


<h1>Weather Results</h1>

<p>Here you can see the weather for the near comming future</p>

<h4>Short summary for the week</h4>
<p><?= $weatherInfo->daily->summary ?></p>

<p>SearchType = <?= $searchType ?></p>
<p>Search = <?= $search ?></p>
<p>Time = <?= $time ?></p>
<p>Test = <?= $test ?></p>

<?php if ($time == "future"){ ?>

<h2>Summary of the weather for the future:</h2>

<?php foreach($weatherInfo->daily->data as $key=>$value): ?>
    <div>
        <h4><?= gmdate("Y-m-d\ H:i:s", $value->time) ?></h4>
        <p>Summary: <?= $value->summary; ?></p>
        <p>Sunrise: <?= gmdate("H:i:s", $value->sunriseTime) ?></p>
        <p>Sunset: <?= gmdate("H:i:s", $value->sunsetTime) ?></p>
        <p>Temperature High: <?= $value->temperatureHigh; ?></p>
        <p>Temperature Low: <?= $value->temperatureLow; ?></p>
    </div>
<?php endforeach; ?>

<?php } ?>



<?php if ($time == "past"){ ?>

<h2>The weather for the past 30</h2>

<?php foreach($weatherInfo as $key=>$value): ?>
    <div>
        <h4><?= gmdate("Y-m-d\ H:i:s", $value->time) ?></h4>
        <p>Summary: <?= $value->summary; ?></p>
        <p>Sunrise: <?= gmdate("H:i:s", $value->sunriseTime) ?></p>
        <p>Sunset: <?= gmdate("H:i:s", $value->sunsetTime) ?></p>
        <p>Temperature High: <?= $value->temperatureHigh; ?></p>
        <p>Temperature Low: <?= $value->temperatureLow; ?></p>
    </div>
<?php endforeach; ?>

<?php } ?>


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
