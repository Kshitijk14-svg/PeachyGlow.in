<h1>Checkout</h1>

<?php if(empty($cart)): ?>

<p>Cart empty</p>

<?php else: ?>

<?php $total = 0; ?>

<?php foreach($cart as $item): ?>

<p>
<?php echo $item['name']; ?> 
- ₹<?php echo $item['price']; ?> 
x <?php echo $item['quantity']; ?>
</p>

<?php 
$total += $item['price'] * $item['quantity']; 
?>

<?php endforeach; ?>

<h2>Total: ₹<?php echo $total; ?></h2>

<a href="/PeachyGlow.in/order/place">Place Order</a>

<?php endif; ?>