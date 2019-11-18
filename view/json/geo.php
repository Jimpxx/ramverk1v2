<?php

namespace Anax\View;

?>


<h1>GeoTag IP address (API)</h1>

<h2>The API</h2>
<p>To use the api you send a post request with the IP as a body-field named "ip" to /json/ip.</p>
<p>Below are some prepared IPs to try?</p>

<form method="post">
<input type="submit" value="4.4.4.4" name="ip">
</form>
<form method="post">
<input type="submit" value="8.8.8.8" name="ip">
</form>
<form method="post">
<input type="submit" value="192.168.1.1" name="ip">
</form>

<p>Below you can enter your own IP adress.</p>

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
