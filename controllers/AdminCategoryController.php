<?php

require_once "config/database.php";

class AdminCategoryController {

public function index(){

$db = new Database();
$conn = $db->connect();

$stmt = $conn->query("
SELECT c.*, COUNT(p.id) as total_products
FROM categories c
LEFT JOIN products p ON p.category_id = c.id
GROUP BY c.id
");

$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "views/admin/categories.php";
}

/* ADD */
public function add(){
require "views/admin/add_category.php";
}

/* STORE */
public function store(){

$name = $_POST['name'];
$slug = strtolower(str_replace(" ","-",$name));

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare(
"INSERT INTO categories (name,slug) VALUES (?,?)"
);

$stmt->execute([$name,$slug]);

header("Location: /PeachyGlow.in/admin/categories");
}

/* EDIT */
public function edit($id){

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("SELECT * FROM categories WHERE id=?");
$stmt->execute([$id]);

$category = $stmt->fetch(PDO::FETCH_ASSOC);

require "views/admin/edit_category.php";
}

/* UPDATE */
public function update($id){

$name = $_POST['name'];
$slug = $_POST['slug'];

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare(
"UPDATE categories SET name=?, slug=? WHERE id=?"
);

$stmt->execute([$name,$slug,$id]);

header("Location: /PeachyGlow.in/admin/categories");
}

/* DELETE */
public function delete($id){

$db = new Database();
$conn = $db->connect();

/* check products */
$stmt = $conn->prepare("SELECT COUNT(*) as total FROM products WHERE category_id=?");
$stmt->execute([$id]);
$count = $stmt->fetch();

if($count['total'] > 0){
echo "Cannot delete category with products";
return;
}

$stmt = $conn->prepare("DELETE FROM categories WHERE id=?");
$stmt->execute([$id]);

header("Location: /PeachyGlow.in/admin/categories");
}

/* VIEW PRODUCTS */
public function products($id){

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("SELECT * FROM products WHERE category_id=?");
$stmt->execute([$id]);

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "views/admin/category_products.php";
}

}