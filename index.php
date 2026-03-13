<?php

require_once "core/Router.php";
require_once "routes/web.php";

$url = $_GET['url'] ?? "";
$url = trim($url, "/");

/* remove project folder name */
$url = str_replace("PeachyGlow.in/", "", $url);

if ($url == "") {
    $url = "/";
} else {
    $url = "/" . $url;
}

Router::route($url, $routes);