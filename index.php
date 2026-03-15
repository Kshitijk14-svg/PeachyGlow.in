
<?php

session_start();

require_once "core/Router.php";
require_once "routes/web.php";

/* Get URL from .htaccess */
$url = $_GET['url'] ?? "";

/* Clean URL */
$url = trim($url, "/");

/* Remove project folder name */
$url = str_replace("PeachyGlow.in/", "", $url);

/* Homepage route */
if ($url == "") {
    $url = "/";
} else {
    $url = "/" . $url;
}

/* Send URL to router */
Router::route($url, $routes);