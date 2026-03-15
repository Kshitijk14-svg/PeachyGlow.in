<?php

require_once "models/Product.php";

class CartController {

    public function index() {

        $cart = $_SESSION['cart'] ?? [];

        require "views/cart.php";
    }

    public function add($slug) {

    $productModel = new Product();
    $product = $productModel->getProductBySlug($slug);

    if (!$product) {
        echo "Product not found";
        return;
    }

    $id = $product['id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {

        $_SESSION['cart'][$id]['quantity'] += 1;

    } else {

        $_SESSION['cart'][$id] = [
            "name" => $product['name'],
            "price" => $product['price'],
            "quantity" => 1
        ];
    }

    header("Location: /PeachyGlow.in/cart");
}

    public function remove($id) {

        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }

        header("Location: /PeachyGlow.in/cart");
    }

}