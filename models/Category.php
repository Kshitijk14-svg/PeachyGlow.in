<?php

require_once "config/database.php";

class Category {

public function getAll(){

$db = new Database();
$conn = $db->connect();

$stmt = $conn->query("SELECT * FROM categories");

return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}