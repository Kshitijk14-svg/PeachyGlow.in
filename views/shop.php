<h1>Shop Page</h1>

<?php foreach($products as $product): ?>

<div style="margin-bottom:20px">

<h3>
<a href="/PeachyGlow.in/product/<?php echo $product['slug']; ?>">
<?php echo $product['name']; ?>
</a>
</h3>

<p>Price: ₹<?php echo $product['price']; ?></p>

</div>

<?php endforeach; ?>