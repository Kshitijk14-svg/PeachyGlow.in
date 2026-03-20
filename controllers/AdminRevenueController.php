<?php

require_once "config/database.php";

class AdminRevenueController {

public function index(){

$db = new Database();
$conn = $db->connect();

$filter = $_GET['filter'] ?? "all";

if($filter == "today"){

$stmt = $conn->query(
"SELECT SUM(total) as revenue
FROM orders
WHERE DATE(created_at) = CURDATE()"
);

}

elseif($filter == "week"){

$stmt = $conn->query(
"SELECT SUM(total) as revenue
FROM orders
WHERE YEARWEEK(created_at,1) = YEARWEEK(CURDATE(),1)"
);

}

elseif($filter == "month"){

$stmt = $conn->query(
"SELECT SUM(total) as revenue
FROM orders
WHERE MONTH(created_at) = MONTH(CURDATE())
AND YEAR(created_at) = YEAR(CURDATE())"
);

}

else{

$stmt = $conn->query(
"SELECT SUM(total) as revenue FROM orders"
);

}

$revenue = $stmt->fetch(PDO::FETCH_ASSOC);

require "views/admin/revenue.php";

}

}