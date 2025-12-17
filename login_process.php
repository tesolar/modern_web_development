<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // ดึงข้อมูล User จาก Email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    // ตรวจสอบรหัสผ่าน (Hash vs Plain Text)
    if ($user && password_verify($password, $user['password'])) {
        // Login ผ่าน: สร้าง Session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['fullname'] = $user['fullname'];
        $_SESSION['role'] = $user['role'];
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
        header("Location: index.php");
        exit();
    }
}
?>
