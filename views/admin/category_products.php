<?php require "layouts/header.php"; ?>
<?php require "layouts/sidebar.php"; ?>

<h1>Category Products</h1>

<table class="product-table">

<tr>
<th>Name</th>
<th>Price</th>
</tr>

<?php foreach($products as $p): ?>

<tr>
<td><?php echo $p['name']; ?></td>
<td>₹<?php echo $p['price']; ?></td>
</tr>

<?php endforeach; ?>

</table>

<?php require "layouts/footer.php"; ?>