<?php

require_once "core/Router.php";
require_once "routes/web.php";

$url = $_GET['url'] ?? "/";
$url = rtrim($url, "/");

Router::route($url, $routes);