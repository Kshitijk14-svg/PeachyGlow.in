<?php

require "layouts/header.php";
require "layouts/sidebar.php";

?>

<h1>Products</h1>

<div class="search-container">

<form method="GET" action="/PeachyGlow.in/admin/products">

<input
class="search-input"
type="text"
name="search"
placeholder="Search products..."
>

<button class="search-btn">
<i class="fa fa-search"></i>
</button>

</form>

<a class="add-btn" href="/PeachyGlow.in/admin/product/add">
<i class="fa fa-plus"></i> Add Product
</a>

</div>

<table class="product-table">

<tr>
<th>ID</th>
<th>Image</th>
<th>Name</th>
<th>Price</th>
<th>Actions</th>
</tr>

<?php foreach($products as $product): ?>

<tr>

<td><?php echo $product['id']; ?></td>

<td>
<img src="/PeachyGlow.in/uploads/products/<?php echo $product['image']; ?>" width="50">
</td>

<td><?php echo $product['name']; ?></td>

<td>₹<?php echo $product['price']; ?></td>

<td>

<a class="edit-btn"
href="/PeachyGlow.in/admin/product/edit/<?php echo $product['id']; ?>">
<i class="fa fa-edit"></i>
</a>

<a class="delete-btn"
href="/PeachyGlow.in/admin/product/delete/<?php echo $product['id']; ?>">
<i class="fa fa-trash"></i>
</a>

</td>

</tr>

<?php endforeach; ?>

</table>

<?php require "layouts/footer.php"; ?>