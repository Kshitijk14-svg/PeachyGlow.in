<h1>Order #<?php echo $order['id']; ?></h1>

<p>Status: <?php echo $order['status']; ?></p>

<p>Total: ₹<?php echo $order['total']; ?></p>

<hr>

<h2>Products</h2>

<?php foreach($items as $item): ?>

<div>

<p>Product: <?php echo $item['name']; ?></p>

<p>Quantity: <?php echo $item['quantity']; ?></p>

<p>Price: ₹<?php echo $item['price']; ?></p>

</div>

<hr>

<?php endforeach; ?>