<?php require "views/layouts/header.php"; ?>

<h1>Your Cart</h1>

<?php if(empty($cart)): ?>

<p>Your cart is empty</p>

<a class="btn" href="/PeachyGlow.in/shop">Continue Shopping</a>

<?php else: ?>

<table style="width:100%;background:white;border-radius:6px;padding:20px;">

<tr style="text-align:left;border-bottom:1px solid #ddd;">
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Action</th>
</tr>

<?php $total = 0; ?>

<?php foreach($cart as $id => $item): ?>

<tr style="border-bottom:1px solid #eee;">

<td><?php echo $item['name']; ?></td>

<td>₹<?php echo $item['price']; ?></td>

<td><?php echo $item['quantity']; ?></td>

<td>
₹<?php echo $item['price'] * $item['quantity']; ?>
</td>

<td>
<a href="/PeachyGlow.in/cart/remove/<?php echo $id; ?>">
Remove
</a>
</td>

</tr>

<?php
$total += $item['price'] * $item['quantity'];
?>

<?php endforeach; ?>

</table>

<br>

<h2>Total: ₹<?php echo $total; ?></h2>

<br>

<a class="btn" href="/PeachyGlow.in/checkout">
Proceed to Checkout
</a>

<?php endif; ?>

<?php require "views/layouts/footer.php"; ?>