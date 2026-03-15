<h1>Your Cart</h1>

<?php if(empty($cart)): ?>

<p>Cart is empty</p>

<?php else: ?>

<?php $total = 0; ?>

<?php foreach($cart as $id => $item): ?>

<div style="margin-bottom:20px">

<h3><?php echo $item['name']; ?></h3>

<p>Price: ₹<?php echo $item['price']; ?></p>

<p>Quantity: <?php echo $item['quantity']; ?></p>

<a href="/PeachyGlow.in/cart/remove/<?php echo $id; ?>">
Remove
</a>

</div>

<?php
$total += $item['price'] * $item['quantity'];
?>

<?php endforeach; ?>

<h2>Total: ₹<?php echo $total; ?></h2>

<a href="/PeachyGlow.in/checkout">
Proceed to Checkout
</a>

<?php endif; ?>