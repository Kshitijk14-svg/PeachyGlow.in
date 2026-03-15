<h1>Edit Product</h1>

<form method="POST" action="/PeachyGlow.in/admin/product/update/<?php echo $product['id']; ?>">

<input type="text" name="name" value="<?php echo $product['name']; ?>" required>

<br><br>

<input type="number" name="price" value="<?php echo $product['price']; ?>" required>

<br><br>

<textarea name="description"><?php echo $product['description']; ?></textarea>

<br><br>

<button type="submit">Update Product</button>

</form>