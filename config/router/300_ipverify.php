<?php
/**
 * Load the IP Verifyer as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "Verify IP adresses.",
            "mount" => "ip",
            "handler" => "\Jiad\Ip\IpController",
        ],
    ]
];
