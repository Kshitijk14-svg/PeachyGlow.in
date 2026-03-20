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
"/sitemap.xml" => ["SeoController","sitemap"],
"/admin/order/update/{id}" => ["AdminOrderController","updateStatus"],
"/admin/revenue" => ["AdminRevenueController","index"],
"/admin/orders" => ["AdminOrderController","index"],
"/admin/categories" => ["AdminCategoryController","index"],
"/admin/category/add" => ["AdminCategoryController","add"],
"/admin/category/store" => ["AdminCategoryController","store"],
"/category/{slug}" => ["CategoryController","show"],
"/category/{slug}" => ["CategoryController","show"],
"/admin/category/edit/{id}" => ["AdminCategoryController","edit"],
"/admin/category/update/{id}" => ["AdminCategoryController","update"],
"/admin/category/delete/{id}" => ["AdminCategoryController","delete"],
"/admin/category/products/{id}" => ["AdminCategoryController","products"],

];