<div class="sidebar">

<h2>PeachyGlow</h2>

<a href="/PeachyGlow.in/admin/dashboard">
<i class="fa fa-chart-line"></i> Dashboard
</a>

<a href="/PeachyGlow.in/admin/products">
<i class="fa fa-box"></i> Products
</a>

<a href="/PeachyGlow.in/admin/orders">
<i class="fa fa-shopping-cart"></i> Orders

<?php if(!empty($newOrders['total'])): ?>
<span style="background:red;color:white;padding:2px 6px;border-radius:10px;font-size:12px;margin-left:10px;">
<?php echo $newOrders['total']; ?>
</span>
<?php endif; ?>

</a>

<a href="/PeachyGlow.in/admin/revenue">
<i class="fa fa-rupee-sign"></i> Revenue
</a>

<a href="/PeachyGlow.in/">
<i class="fa fa-globe"></i> Website
</a>

<a href="/PeachyGlow.in/admin/categories">
<i class="fa fa-layer-group"></i> Categories
</a>

</div>

<div class="main">