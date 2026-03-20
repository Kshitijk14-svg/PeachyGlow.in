<?php

require_once "config/database.php";

class AdminController {

    public function login(){

        require "views/admin/login.php";
    }

    public function authenticate(){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $db = new Database();
        $conn = $db->connect();

        $stmt = $conn->prepare("SELECT * FROM admins WHERE email=?");
        $stmt->execute([$email]);

        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if($admin && password_verify($password,$admin['password'])){

            $_SESSION['admin'] = $admin['id'];

            header("Location: /PeachyGlow.in/admin/dashboard");

        }else{

            echo "Invalid login";
        }
    }

    public function dashboard(){

if(!isset($_SESSION['admin'])){
header("Location: /PeachyGlow.in/admin/login");
return;
}

$db = new Database();
$conn = $db->connect();

/* total products */
$stmt = $conn->query("SELECT COUNT(*) as total FROM products");
$products = $stmt->fetch();

/* total orders */
$stmt = $conn->query("SELECT COUNT(*) as total FROM orders");
$orders = $stmt->fetch();

/* total revenue */
$stmt = $conn->query("SELECT SUM(total) as revenue FROM orders");
$revenue = $stmt->fetch();

/* total customers */
$stmt = $conn->query("SELECT COUNT(*) as total FROM users");
$customers = $stmt->fetch();

/* recent orders */
$stmt = $conn->query(
"SELECT id,total,status FROM orders ORDER BY id DESC LIMIT 5"
);

$recentOrders = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* top selling products */

$stmt = $conn->query(
"SELECT p.name, SUM(oi.quantity) as total_sold
FROM order_items oi
JOIN products p ON oi.product_id = p.id
GROUP BY oi.product_id
ORDER BY total_sold DESC
LIMIT 5"
);

$topProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* daily revenue (last 7 days) */

$stmt = $conn->query(
"SELECT DATE(created_at) as date, SUM(total) as revenue
FROM orders
WHERE created_at >= CURDATE() - INTERVAL 7 DAY
GROUP BY DATE(created_at)
ORDER BY date ASC"
);

$dailyRevenue = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* low stock products */

$stmt = $conn->query(
"SELECT name, stock FROM products WHERE stock <= 5"
);

$lowStock = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* new order notifications */

$stmt = $conn->query(
"SELECT COUNT(*) as total FROM orders WHERE seen = 0"
);

$newOrders = $stmt->fetch();

require "views/admin/dashboard.php";

}
}