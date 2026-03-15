<h1>Products</h1>

<a href="/PeachyGlow.in/admin/product/add">Add Product</a>

<br><br>

<?php foreach($products as $product): ?>

<div>

<img src="/PeachyGlow.in/uploads/products/<?php echo $product['image']; ?>" width="80">

<h3><?php echo $product['name']; ?></h3>

<p>₹<?php echo $product['price']; ?></p>

<a href="/PeachyGlow.in/admin/product/edit/<?php echo $product['id']; ?>">
Edit
</a>

|

<a href="/PeachyGlow.in/admin/product/delete/<?php echo $product['id']; ?>">
Delete
</a>

</div>

<hr>

<?php endforeach; ?>
