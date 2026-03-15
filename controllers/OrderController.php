<?php

require_once "config/database.php";

class OrderController {

    public function checkout(){

        $cart = $_SESSION['cart'] ?? [];

        require "views/checkout.php";
    }

    public function placeOrder(){

        $db = new Database();
        $conn = $db->connect();

        $cart = $_SESSION['cart'];

        if(empty($cart)){
            echo "Cart empty";
            return;
        }

        $total = 0;

        foreach($cart as $item){
            $total += $item['price'] * $item['quantity'];
        }

        $stmt = $conn->prepare("INSERT INTO orders (user_id,total,status) VALUES (?,?,?)");
        $stmt->execute([1,$total,"pending"]);

        $order_id = $conn->lastInsertId();

        foreach($cart as $id => $item){

            $stmt = $conn->prepare("INSERT INTO order_items (order_id,product_id,quantity,price) VALUES (?,?,?,?)");

            $stmt->execute([
                $order_id,
                $id,
                $item['quantity'],
                $item['price']
            ]);

        }

        unset($_SESSION['cart']);

        echo "Order Placed Successfully";
    }
}