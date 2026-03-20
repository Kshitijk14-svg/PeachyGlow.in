<?php

require_once "config/database.php";

class OrderController {

    public function checkout(){

        $cart = $_SESSION['cart'] ?? [];

        require "views/checkout.php";
    }

    public function placeOrder(){

session_start();

if(empty($_SESSION['cart'])){
echo "Cart is empty";
return;
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];

$db = new Database();
$conn = $db->connect();

/* calculate total */

$total = 0;

foreach($_SESSION['cart'] as $item){
$total += $item['price'] * $item['quantity'];
}

/* insert order (IMPORTANT: seen = 0) */

$stmt = $conn->prepare(
"INSERT INTO orders (total,name,phone,address,city,pincode,seen)
VALUES (?,?,?,?,?,?,0)"
);

$stmt->execute([
$total,
$name,
$phone,
$address,
$city,
$pincode
]);

$order_id = $conn->lastInsertId();

/* insert order items */

foreach($_SESSION['cart'] as $item){

$stmt = $conn->prepare(
"INSERT INTO order_items (order_id,product_id,quantity)
VALUES (?,?,?)"
);

$stmt->execute([
$order_id,
$item['id'],
$item['quantity']
]);

}

/* clear cart */

unset($_SESSION['cart']);

echo "Order placed successfully";

}
}