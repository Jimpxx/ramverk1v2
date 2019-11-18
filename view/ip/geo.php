<?php

namespace Anax\View;

?>


<h1>GeoTag IP address</h1>

<form method="post">
    <fieldset>
    <legend>Validate</legend>

    <p>
        <label>IP:<br> 
        <input type="text" name="ip" value="<?= $client_ip ?>"/>
        </label>
    </p>

    <p>
        <input type="submit" value="Get info" name="doGeo">
    </p>
    </fieldset>
</form>


<?php
// var_dump($info)
?>
