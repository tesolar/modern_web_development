-- สร้างฐานข้อมูล
CREATE DATABASE IF NOT EXISTS workshop_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE workshop_db;

-- ตารางผู้ใช้งาน
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ตารางสินค้า
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- เพิ่มข้อมูลสินค้าตัวอย่าง
INSERT INTO products (name, price, stock) VALUES
('Gaming Mouse Logi', 1290.00, 10),
('Mechanical Keyboard', 2500.00, 5),
('Monitor 24 Inch', 4500.00, 2),
('Wireless Headset', 3200.00, 8),
('Gaming Chair RGB', 8900.00, 3),
('USB-C Hub 7in1', 890.00, 15),
('Webcam Full HD', 1590.00, 12),
('LED Strip Light 5M', 450.00, 25),
('External SSD 1TB', 3490.00, 7),
('Laptop Stand Aluminum', 650.00, 20),
('Wireless Charger', 590.00, 18),
('Bluetooth Speaker', 1290.00, 14),
('Mouse Pad XXL', 390.00, 30),
('Cable Management Box', 290.00, 22),
('Phone Holder Adjustable', 250.00, 35),
('Power Bank 20000mAh', 890.00, 16),
('HDMI Cable 2M', 180.00, 40),
('Desk Lamp LED', 890.00, 11),
('Cooling Pad Laptop', 690.00, 13),
('Microphone USB', 1890.00, 6),
('Graphics Tablet', 2490.00, 4),
('Smart Watch', 4590.00, 9),
('Ergonomic Mouse', 990.00, 17),
('Keyboard Wrist Rest', 290.00, 28),
('Monitor Arm Mount', 1590.00, 5);
