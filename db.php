<?php
$host = 'localhost';
$dbname = 'workshop_db';
$user = 'root';
$pass = ''; // XAMPP Default

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // SQL แจ้ง Error แบบ Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}
?>
