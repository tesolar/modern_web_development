<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Security: Hash Password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    try {
        // Security: Prepared Statement (ป้องกัน SQL Injection)
        $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
        if ($stmt->execute([$fullname, $email, $hashed_password])) {
            $_SESSION['success'] = "สมัครสมาชิกสำเร็จ!";
            header("Location: index.php"); // ส่งกลับหน้า Login
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "มีอีเมลนี้ในระบบแล้ว หรือเกิดข้อผิดพลาด";
        header("Location: register.php");
        exit();
    }
}
?>
