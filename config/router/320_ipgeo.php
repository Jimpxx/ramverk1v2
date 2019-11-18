<?php
/**
 * Load the IP Verifyer as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "Get geotag info about IP.",
            "mount" => "geo",
            "handler" => "\Jiad\Ip\IpMapController",
        ],
    ]
];
