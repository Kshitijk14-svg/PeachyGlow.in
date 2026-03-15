<h1>Add Product</h1>

<form method="POST" action="/PeachyGlow.in/admin/product/store" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Product Name" required>

<br><br>

<input type="number" name="price" placeholder="Price" required>

<br><br>

<textarea name="description" placeholder="Description"></textarea>

<br><br>

<input type="file" name="image" required>

<br><br>

<button type="submit">Save Product</button>

</form>