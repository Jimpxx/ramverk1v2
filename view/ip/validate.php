<?php

namespace Anax\View;

?>


<h1>Validate an IP address</h1>

<form method="post">
    <fieldset>
    <legend>Validate</legend>

    <p>
        <label>IP:<br> 
        <input type="text" name="ip" placeholder="0.0.0.0"/>
        </label>
    </p>

    <p>
        <input type="submit" value="Validate" name="doValidate">
    </p>
    </fieldset>
</form>


<?php if ($ip) : ?>
<div class="ip">
    <p>IP: <?= $ip ?></p>
    <p>Result: The IP-address is <?= $result ?></p>
    <p>Hostname: The hostname for this IP-address is <?= $hostname ?></p>
</div>
<?php endif; ?>
