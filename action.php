<?php
session_start();
require_once 'db.php';

// เช็คสิทธิ์
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// CREATE
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'create') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    
    $stmt = $conn->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
    $stmt->execute([$name, $price, $stock]);
    header("Location: dashboard.php");
    exit();
}

// DELETE
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: dashboard.php");
    exit();
}
?>
