<?php
/**
 * Load the IP Verifyer as a controller class.
 */
return [
    "routes" => [
        [
            "info" => "API for verifying IP adresses and answer with JSON.",
            "mount" => "json",
            "handler" => "\Jiad\Json\JsonController",
        ],
    ]
];
