<?php

require_once "config/database.php";

class AdminOrderController {

    public function index(){

$db = new Database();
$conn = $db->connect();

/* mark all orders as seen */
$conn->query("UPDATE orders SET seen = 1");

/* fetch orders */
$stmt = $conn->query("SELECT * FROM orders ORDER BY id DESC");

$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "views/admin/orders.php";

}

    public function show($id){

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("SELECT * FROM orders WHERE id=?");
$stmt->execute([$id]);

$order = $stmt->fetch(PDO::FETCH_ASSOC);


$stmt = $conn->prepare("
SELECT order_items.*, products.name
FROM order_items
JOIN products ON order_items.product_id = products.id
WHERE order_items.order_id=?
");

$stmt->execute([$id]);

$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "views/admin/order_details.php";

}

public function updateStatus($id){

$status = $_POST['status'];

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare(
"UPDATE orders SET status=? WHERE id=?"
);

$stmt->execute([$status,$id]);

header("Location: /PeachyGlow.in/admin/orders");

}
}