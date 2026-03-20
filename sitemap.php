<?php

require_once "config/database.php";

header("Content-Type: application/xml; charset=utf-8");

$db = new Database();
$conn = $db->connect();

$stmt = $conn->prepare("SELECT slug FROM products");
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<url>
<loc>http://localhost/PeachyGlow.in/</loc>
</url>

<url>
<loc>http://localhost/PeachyGlow.in/shop</loc>
</url>

<?php foreach($products as $product): ?>

<url>
<loc>http://localhost/PeachyGlow.in/product/<?php echo $product['slug']; ?></loc>
</url>

<?php endforeach; ?>

</urlset>