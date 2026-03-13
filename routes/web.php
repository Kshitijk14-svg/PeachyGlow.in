<?php

$routes = [

    "/" => ["PageController", "home"],

    "/shop" => ["ProductController", "shop"],

    "/product/{slug}" => ["ProductController", "show"],

    "/category/{slug}" => ["ProductController", "category"],

    "/cart" => ["CartController", "index"],

    "/checkout" => ["OrderController", "checkout"],

    "/login" => ["AuthController", "login"],

    "/register" => ["AuthController", "register"]

];