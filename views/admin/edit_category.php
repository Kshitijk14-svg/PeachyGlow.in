<?php require "layouts/header.php"; ?>
<?php require "layouts/sidebar.php"; ?>

<h1>Edit Category</h1>

<form method="POST"
action="/PeachyGlow.in/admin/category/update/<?php echo $category['id']; ?>">

<input type="text" name="name"
value="<?php echo $category['name']; ?>">

<br><br>

<input type="text" name="slug"
value="<?php echo $category['slug']; ?>">

<br><br>

<button class="submit-btn">Update</button>

</form>

<?php require "layouts/footer.php"; ?>