<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
margin:0;
font-family:Arial;
background:#FEE0EF;
display:flex;
}

.sidebar{
width:230px;
height:100vh;
background:#E4B1AB;
color:white;
padding-top:30px;
position:fixed;
}

.sidebar h2{
text-align:center;
margin-bottom:30px;
}

.sidebar a{
display:block;
padding:15px 25px;
color:white;
text-decoration:none;
}

.sidebar a:hover{
background:#EBC3BC;
}

.main{
margin-left:230px;
padding:30px;
width:100%;
}

.cards{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
margin-top:20px;
}

.card{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.08);
transition:0.3s;
}

.card:hover{
transform:translateY(-5px);
}

.card i{
font-size:28px;
color:#E4B1AB;
}

/* PRODUCT TABLE */

.product-table{
width:100%;
background:white;
border-collapse:collapse;
border-radius:10px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,0.05);
}

.product-table th{
background:#E4B1AB;
color:white;
padding:12px;
text-align:left;
}

.product-table td{
padding:12px;
border-bottom:1px solid #eee;
}

.product-table tr:hover{
background:#FDE1DE;
}

/* BUTTONS */

.add-btn{
background:#E4B1AB;
color:white;
padding:10px 15px;
border-radius:6px;
text-decoration:none;
}

.add-btn:hover{
background:#EBC3BC;
}

.edit-btn{
color:#E4B1AB;
margin-right:10px;
font-size:18px;
}

.delete-btn{
color:#cc4444;
font-size:18px;
}

.edit-btn:hover,
.delete-btn:hover{
opacity:0.7;
}

/* FORM CARD */

.form-card{
background:white;
padding:30px;
border-radius:10px;
max-width:500px;
box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

.form-card label{
display:block;
margin-top:15px;
font-weight:bold;
}

.form-card input,
.form-card textarea{
width:100%;
padding:10px;
margin-top:5px;
border:1px solid #ddd;
border-radius:6px;
}

.form-card textarea{
height:100px;
resize:none;
}

.submit-btn{
margin-top:20px;
background:#E4B1AB;
border:none;
color:white;
padding:12px 20px;
border-radius:6px;
cursor:pointer;
}

.submit-btn:hover{
background:#EBC3BC;
}

/* ORDERS TABLE */

.order-table{
width:100%;
background:white;
border-collapse:collapse;
border-radius:10px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,0.05);
}

.order-table th{
background:#E4B1AB;
color:white;
padding:12px;
text-align:left;
}

.order-table td{
padding:12px;
border-bottom:1px solid #eee;
}

.order-table tr:hover{
background:#FDE1DE;
}

/* STATUS BADGES */

.status{
padding:5px 10px;
border-radius:20px;
font-size:12px;
color:white;
}

.status-pending{
background:#f39c12;
}

.status-confirmed{
background:#3498db;
}

.status-shipped{
background:#9b59b6;
}

.status-delivered{
background:#2ecc71;
}

.status-cancelled{
background:#e74c3c;
}

/* VIEW BUTTON */

.view-btn{
background:#E4B1AB;
color:white;
padding:6px 10px;
border-radius:6px;
text-decoration:none;
font-size:13px;
}

.view-btn:hover{
background:#EBC3BC;
}

/* SEARCH BAR */

.search-container{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:20px;
}

.search-container form{
display:flex;
align-items:center;
}

.search-input{
padding:10px 14px;
border-radius:8px 0 0 8px;
border:1px solid #E4B1AB;
outline:none;
width:220px;
}

.search-btn{
padding:10px 15px;
border:none;
background:#E4B1AB;
color:white;
border-radius:0 8px 8px 0;
cursor:pointer;
}

.search-btn:hover{
background:#EBC3BC;
}

/* ORDER STATUS */

.status-form{
margin-top:15px;
display:flex;
gap:10px;
}

.status-dropdown{
padding:8px 12px;
border-radius:6px;
border:1px solid #E4B1AB;
background:white;
}

.status-btn{
background:#E4B1AB;
color:white;
border:none;
padding:8px 14px;
border-radius:6px;
cursor:pointer;
}

.status-btn:hover{
background:#EBC3BC;
}

.chart-card{
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.08);
margin-top:20px;
}
</style>

</head>

<body>