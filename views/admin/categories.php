<?php require "layouts/header.php"; ?>
<?php require "layouts/sidebar.php"; ?>

<h1>Categories</h1>

<a class="add-btn" href="/PeachyGlow.in/admin/category/add">Add Category</a>

<table class="product-table">

<tr>
<th>ID</th>
<th>Name</th>
<th>Slug</th>
<th>Products</th>
<th>Actions</th>
</tr>

<?php foreach($categories as $c): ?>

<tr>

<td><?php echo $c['id']; ?></td>
<td><?php echo $c['name']; ?></td>
<td><?php echo $c['slug']; ?></td>
<td><?php echo $c['total_products']; ?></td>

<td>

<a href="/PeachyGlow.in/admin/category/products/<?php echo $c['id']; ?>">
<i class="fa fa-eye"></i>
</a>

<a href="/PeachyGlow.in/admin/category/edit/<?php echo $c['id']; ?>">
<i class="fa fa-edit"></i>
</a>

<a href="/PeachyGlow.in/admin/category/delete/<?php echo $c['id']; ?>">
<i class="fa fa-trash"></i>
</a>

</td>

</tr>

<?php endforeach; ?>

</table>

<?php require "layouts/footer.php"; ?>