<?php

require_once "config/database.php";

class SeoController {

    public function sitemap(){

        header("Content-Type: application/xml; charset=utf-8");

        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT slug FROM products");
        $stmt->execute();

        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        echo '<url>';
        echo '<loc>http://localhost/PeachyGlow.in/</loc>';
        echo '</url>';

        echo '<url>';
        echo '<loc>http://localhost/PeachyGlow.in/shop</loc>';
        echo '</url>';

        foreach($products as $product){

            echo '<url>';
            echo '<loc>http://localhost/PeachyGlow.in/product/'.$product['slug'].'</loc>';
            echo '</url>';

        }

        echo '</urlset>';
    }
}