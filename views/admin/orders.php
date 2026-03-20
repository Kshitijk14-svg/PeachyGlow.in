<?php

require "layouts/header.php";
require "layouts/sidebar.php";

?>

<h1>Orders</h1>

<table class="order-table">

<tr>
<th>ID</th>
<th>Total</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php foreach($orders as $order): ?>

<tr>

<td>#<?php echo $order['id']; ?></td>

<td>₹<?php echo $order['total']; ?></td>

<td>

<span class="status status-<?php echo $order['status']; ?>">
<?php echo ucfirst($order['status']); ?>
</span>

</td>

<td>

<a class="view-btn"
href="/PeachyGlow.in/admin/order/<?php echo $order['id']; ?>">
<i class="fa fa-eye"></i> View
</a>

</td>

</tr>

<?php endforeach; ?>

</table>

<?php require "layouts/footer.php"; ?>