<?php

// define("URL_BASE", "http://10.120.1.125/WatchTracker");
define("URL_BASE", "http://localhost/WatchTracker");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "WatchTracker",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * @param string $path
 * @return string
 */

function url(string $path): string
{
    if ($path) {
        return URL_BASE . "{$path}";
    }
    return URL_BASE;
}

function getRoute()
{
    return $_SERVER["QUERY_STRING"];
}
