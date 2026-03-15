<?php

$routes = [

"/" => ["PageController","home"],

"/shop" => ["ProductController","shop"],
"/product/{slug}" => ["ProductController","show"],
"/category/{slug}" => ["ProductController","category"],

"/cart" => ["CartController","index"],
"/cart/add/{slug}" => ["CartController","add"],
"/cart/remove/{id}" => ["CartController","remove"],
"/checkout" => ["OrderController","checkout"],
"/order/place" => ["OrderController","placeOrder"],
"/admin/login" => ["AdminController","login"],
"/admin/auth" => ["AdminController","authenticate"],
"/admin/dashboard" => ["AdminController","dashboard"],
"/admin/products" => ["AdminProductController","index"],
"/admin/product/add" => ["AdminProductController","create"],
"/admin/product/store" => ["AdminProductController","store"],

"/admin/orders" => ["AdminOrderController","index"],
"/admin/product/edit/{id}" => ["AdminProductController","edit"],
"/admin/product/update/{id}" => ["AdminProductController","update"],
"/admin/product/delete/{id}" => ["AdminProductController","delete"],
"/admin/order/{id}" => ["AdminOrderController","show"],

];