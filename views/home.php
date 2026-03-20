<?php

$seo_title = "PeachyGlow | Self Care Essentials";
$seo_description = "Discover natural self care and beauty products";

require "views/layouts/header.php";

require_once "models/Product.php";

$productModel = new Product();
$products = $productModel->getAllProducts();

?>

<div class="hero">
Glow Naturally
</div>

<h2>Featured Products</h2>

<div class="grid">

<?php foreach($products as $product): ?>

<div class="product-card">

<img src="/PeachyGlow.in/uploads/products/<?php echo $product['image']; ?>">

<div class="product-title">

<a href="/PeachyGlow.in/product/<?php echo $product['slug']; ?>">
<?php echo $product['name']; ?>
</a>

</div>

<div class="price">
₹<?php echo $product['price']; ?>
</div>

<a class="btn" href="/PeachyGlow.in/product/<?php echo $product['slug']; ?>">
View Product
</a>

</div>

<?php endforeach; ?>

</div>

<?php require "views/layouts/footer.php"; ?>