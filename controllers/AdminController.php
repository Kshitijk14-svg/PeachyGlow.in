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

        require "views/admin/dashboard.php";
    }
}