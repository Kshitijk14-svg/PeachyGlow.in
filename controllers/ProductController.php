<?php

require_once "models/Product.php";
require_once "models/Category.php";

class ProductController {

    public function shop() {

        $productModel = new Product();
        $products = $productModel->getAllProducts();

        require "views/shop.php";
    }

    public function show($slug) {

        $productModel = new Product();
        $product = $productModel->getProductBySlug($slug);

        require "views/product.php";
    }

    public function category($slug) {

        $categoryModel = new Category();
        $category = $categoryModel->getCategoryBySlug($slug);

        $productModel = new Product();
        $products = $productModel->getProductsByCategory($category['id']);

        require "views/category.php";
    }

}