<?php require "views/layouts/header.php"; ?>

<h1>Checkout</h1>

<?php if(empty($cart)): ?>

<p>Your cart is empty</p>

<a class="btn" href="/PeachyGlow.in/shop">Go to Shop</a>

<?php else: ?>

<div style="display:flex;gap:40px;align-items:flex-start;">

<!-- Order Summary -->

<div style="flex:1;background:white;padding:20px;border-radius:8px;">

<h2>Order Summary</h2>

<hr>

<?php $total = 0; ?>

<?php foreach($cart as $item): ?>

<p>
<?php echo $item['name']; ?>
<br>
₹<?php echo $item['price']; ?> × <?php echo $item['quantity']; ?>
</p>

<hr>

<?php
$total += $item['price'] * $item['quantity'];
?>

<?php endforeach; ?>

<h2>Total: ₹<?php echo $total; ?></h2>

</div>


<!-- Shipping Form -->

<div style="flex:1;background:white;padding:20px;border-radius:8px;">

<h2>Shipping Details</h2>

<form action="/PeachyGlow.in/order/place" method="POST">

<input type="text" name="name" placeholder="Full Name" required style="width:100%;padding:10px;margin-bottom:10px;">

<input type="text" name="phone" placeholder="Phone Number" required style="width:100%;padding:10px;margin-bottom:10px;">

<input type="text" name="address" placeholder="Address" required style="width:100%;padding:10px;margin-bottom:10px;">

<input type="text" name="city" placeholder="City" required style="width:100%;padding:10px;margin-bottom:10px;">

<input type="text" name="pincode" placeholder="Pincode" required style="width:100%;padding:10px;margin-bottom:10px;">

<br>

<button class="btn" type="submit">
Place Order
</button>

</form>

</div>

</div>

<?php endif; ?>

<?php require "views/layouts/footer.php"; ?>