<h1>Orders</h1>

<?php foreach($orders as $order): ?>

<div>

Order ID: <?php echo $order['id']; ?>

<br>

Total: ₹<?php echo $order['total']; ?>

<br>

Status: <?php echo $order['status']; ?>


<a href="/PeachyGlow.in/admin/order/<?php echo $order['id']; ?>">
View Details
</a>
</div>

<hr>

<?php endforeach; ?>