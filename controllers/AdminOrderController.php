<?php

require_once "config/database.php";

class AdminOrderController {

    public function index(){

        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM orders ORDER BY id DESC");
        $stmt->execute();

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
}