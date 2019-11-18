<?php

namespace Anax\View;

?>


<h1>Geo Results</h1>

<p>IP: <?= $info->ip ?></p>
<p>Type: <?= $info->type ?></p>
<p>Country: <?= $info->country_name ?></p>
<p>Region: <?= $info->region_name ?></p>
<p>City: <?= $info->city ?></p>
<p>Latitude: <?= $info->latitude ?></p>
<p>Longitude: <?= $info->longitude ?></p>


<?php
// var_dump($info)
?>
