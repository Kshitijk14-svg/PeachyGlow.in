<?php

require "views/layouts/header.php";

?>

<h1>Category Products</h1>

<div class="grid">

<?php if(empty($products)): ?>

<p>No products found</p>

<?php else: ?>

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

<a class="btn"
href="/PeachyGlow.in/product/<?php echo $product['slug']; ?>">
View
</a>

</div>

<?php endforeach; ?>

<?php endif; ?>

</div>

<?php require "views/layouts/footer.php"; ?>