<?php

require "layouts/header.php";
require "layouts/sidebar.php";

?>

<h1>Add Product</h1>
<?php
require_once "models/Category.php";
$catModel = new Category();
$categories = $catModel->getAll();
?>

<form method="POST"
action="/PeachyGlow.in/admin/product/store"
enctype="multipart/form-data">

<label>Name</label>
<input type="text" name="name" required>

<label>Price</label>
<input type="number" name="price" required>

<label>Stock</label>
<input type="number" name="stock" required>

<label>Description</label>
<textarea name="description"></textarea>

<label>Image</label>
<input type="file" name="image" required>

<label>Category</label>

<select name="category_id">

<?php foreach($categories as $c): ?>

<option value="<?php echo $c['id']; ?>">
<?php echo $c['name']; ?>
</option>

<?php endforeach; ?>

</select>


<br><br>

<button class="submit-btn">Save</button>

</form>

<?php require "layouts/footer.php"; ?>