<?php

require_once "config/database.php";

class Category {

    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllCategories() {

        $stmt = $this->conn->prepare("SELECT * FROM categories");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategoryBySlug($slug) {

        $stmt = $this->conn->prepare("SELECT * FROM categories WHERE slug = ?");
        $stmt->execute([$slug]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}