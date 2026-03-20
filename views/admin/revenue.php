<?php

require "layouts/header.php";
require "layouts/sidebar.php";

?>

<h1>Revenue</h1>

<div style="margin-bottom:20px;">

<a class="filter-btn" href="/PeachyGlow.in/admin/revenue?filter=today">Today</a>

<a class="filter-btn" href="/PeachyGlow.in/admin/revenue?filter=week">This Week</a>

<a class="filter-btn" href="/PeachyGlow.in/admin/revenue?filter=month">This Month</a>

<a class="filter-btn" href="/PeachyGlow.in/admin/revenue">All Time</a>

</div>

<h2>Total Revenue: ₹<?php echo $revenue['revenue'] ?? 0; ?></h2>

<div class="chart-card">

<canvas id="revenueChart"></canvas>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('revenueChart');

new Chart(ctx, {

type: 'bar',

data: {
labels: ['Revenue'],

datasets: [{
label: 'Revenue ₹',
data: [<?php echo $revenue['revenue'] ?? 0; ?>],
backgroundColor: '#E4B1AB',
borderRadius: 8,
barThickness: 60
}]
},

options:{
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