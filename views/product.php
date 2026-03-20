<?php

$seo_title = $product['name']." | PeachyGlow";
$seo_description = substr($product['description'],0,150);
$seo_image = "/PeachyGlow.in/uploads/products/".$product['image'];

require "views/layouts/header.php";

?>

<div style="display:flex;gap:40px;align-items:flex-start;justify-content:center;">

<img src="/PeachyGlow.in/uploads/products/<?php echo $product['image']; ?>" width="350">

<div>

<h1><?php echo $product['name']; ?></h1>

<p><?php echo $product['description']; ?></p>

<h2>₹<?php echo $product['price']; ?></h2>

<a class="btn" href="/PeachyGlow.in/cart/add/<?php echo $product['slug']; ?>">
Add to Cart
</a>

</div>

</div>

<?php require "views/layouts/footer.php"; ?>