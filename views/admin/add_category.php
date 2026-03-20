<?php

require "layouts/header.php";
require "layouts/sidebar.php";

?>

<h1>Add Category</h1>

<form method="POST" action="/PeachyGlow.in/admin/category/store">

<input type="text" name="name" placeholder="Category Name" required>

<br><br>

<button>Add</button>

</form>

<?php require "layouts/footer.php"; ?>