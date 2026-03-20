<?php

require_once "config/database.php";

class CategoryController {

public function show($slug){

$db = new Database();
$conn = $db->connect();

/* fetch products by category slug */

$stmt = $conn->prepare(
"SELECT p.* FROM products p
JOIN categories c ON p.category_id = c.id
WHERE c.slug=?"
);

$stmt->execute([$slug]);

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "views/category.php";

}

}