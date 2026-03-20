<?php
echo "UPDATED DASHBOARD";
require "layouts/header.php";
require "layouts/sidebar.php";

?>

<h1>Admin Dashboard</h1>

<div class="cards">

<div class="card">
<i class="fa fa-box"></i>
<h3><?php echo $products['total']; ?></h3>
<p>Total Products</p>
</div>

<div class="card">
<i class="fa fa-shopping-cart"></i>
<h3><?php echo $orders['total']; ?></h3>
<p>Total Orders</p>
</div>

<div class="card">
<i class="fa fa-rupee-sign"></i>
<h3>₹<?php echo $revenue['revenue'] ?? 0; ?></h3>
<p>Total Revenue</p>
</div>

<div class="card">
<i class="fa fa-users"></i>
<h3><?php echo $customers['total']; ?></h3>
<p>Total Customers</p>
</div>

</div>

<h2 style="margin-top:40px;">Low Stock Alert</h2>

<table class="product-table">

<tr>
<th>Product</th>
<th>Stock</th>
</tr>

<?php foreach($lowStock as $p): ?>

<tr>

<td><?php echo $p['name']; ?></td>

<td style="color:red;font-weight:bold;">
<?php echo $p['stock']; ?>
</td>

</tr>

<?php endforeach; ?>

</table>

<!-- TOP PRODUCTS -->

<h2 style="margin-top:40px;">Top Selling Products</h2>

<table class="product-table">

<tr>
<th>Product</th>
<th>Sold</th>
</tr>

<?php foreach($topProducts as $p): ?>

<tr>
<td><?php echo $p['name']; ?></td>
<td><?php echo $p['total_sold']; ?></td>
</tr>

<?php endforeach; ?>

</table>

<!-- RECENT ORDERS -->

<h2 style="margin-top:40px;">Recent Orders</h2>

<table class="order-table">

<tr>
<th>ID</th>
<th>Total</th>
<th>Status</th>
</tr>

<?php foreach($recentOrders as $order): ?>

<tr>
<td>#<?php echo $order['id']; ?></td>
<td>₹<?php echo $order['total']; ?></td>
<td>
<span class="status status-<?php echo $order['status']; ?>">
<?php echo ucfirst($order['status']); ?>
</span>
</td>
</tr>

<?php endforeach; ?>

</table>

<!-- DAILY REVENUE GRAPH -->

<h2 style="margin-top:40px;">Last 7 Days Revenue</h2>

<div class="chart-card">
<canvas id="dailyChart"></canvas>
</div>

<script>

const labels = [
<?php foreach($dailyRevenue as $d): ?>
'<?php echo $d['date']; ?>',
<?php endforeach; ?>
];

const data = [
<?php foreach($dailyRevenue as $d): ?>
<?php echo $d['revenue']; ?>,
<?php endforeach; ?>
];

new Chart(document.getElementById('dailyChart'), {

type: 'line',

data: {
labels: labels,

datasets: [{
label: 'Revenue ₹',
data: data,
borderColor: '#E4B1AB',
backgroundColor: 'rgba(228,177,171,0.2)',
tension: 0.4,
fill: true
}]
},

options: {
plugins:{
legend:{display:false}
},
scales:{
y:{beginAtZero:true}
}
}

});

</script>

<?php require "layouts/footer.php"; ?>