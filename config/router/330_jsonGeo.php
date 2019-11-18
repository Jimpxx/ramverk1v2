<?php
/**
 * Load the IP Verifyer as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "API for Geotagging IP adresses and answer with JSON.",
            "mount" => "apigeo",
            "handler" => "\Jiad\Json\JsonMapController",
        ],
    ]
];
