<?php

require_once "config/database.php";

class AdminProductController {

    public function index(){

        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM products ORDER BY id DESC");
        $stmt->execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require "views/admin/products.php";
    }

    public function create(){

        require "views/admin/add_product.php";
    }

    public function store(){

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$slug = strtolower(str_replace(" ","-",$name));

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$uploadPath = "uploads/products/" . $image;

move_uploaded_file($tmp,$uploadPath);

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("INSERT INTO products (name,slug,price,description,image) VALUES (?,?,?,?,?)");

$stmt->execute([$name,$slug,$price,$description,$image]);

header("Location: /PeachyGlow.in/admin/products");

}

public function edit($id){

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

require "views/admin/edit_product.php";

}


public function update($id){

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$slug = strtolower(str_replace(" ","-",$name));

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("UPDATE products SET name=?,slug=?,price=?,description=? WHERE id=?");

$stmt->execute([$name,$slug,$price,$description,$id]);

header("Location: /PeachyGlow.in/admin/products");

}


public function delete($id){

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->execute([$id]);

header("Location: /PeachyGlow.in/admin/products");

}
}