<?php

require "layouts/header.php";
require "layouts/sidebar.php";

?>

<h1>Order #<?php echo $order['id']; ?></h1>

<p>Total: ₹<?php echo $order['total']; ?></p>

<form method="POST"
action="/PeachyGlow.in/admin/order/update/<?php echo $order['id']; ?>"
class="status-form">

<select name="status" class="status-dropdown">

<option value="pending">Pending</option>
<option value="confirmed">Confirmed</option>
<option value="shipped">Shipped</option>
<option value="delivered">Delivered</option>
<option value="cancelled">Cancelled</option>

</select>

<button class="status-btn">
Update
</button>

</form>

<hr>

<h2>Products</h2>

<?php foreach($items as $item): ?>

<p>

<?php echo $item['name']; ?>

× <?php echo $item['quantity']; ?>

</p>

<?php endforeach; ?>

<?php require "layouts/footer.php"; ?>