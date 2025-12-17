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

-- ตารางหมวดหมู่สินค้า
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ตารางสินค้า
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

-- เพิ่มข้อมูลหมวดหมู่สินค้า
INSERT INTO categories (name, description) VALUES
('Computer Accessories', 'อุปกรณ์เสริมคอมพิวเตอร์'),
('Gaming Gear', 'อุปกรณ์เกมมิ่ง'),
('Office Equipment', 'อุปกรณ์สำนักงาน'),
('Mobile Accessories', 'อุปกรณ์มือถือ'),
('Storage & Cables', 'อุปกรณ์จัดเก็บและสายเคเบิล');

-- เพิ่มข้อมูลสินค้าตัวอย่าง (พร้อม category_id)
INSERT INTO products (name, price, stock, category_id) VALUES
('Gaming Mouse Logi', 1290.00, 10, 2),
('Mechanical Keyboard', 2500.00, 5, 2),
('Monitor 24 Inch', 4500.00, 2, 1),
('Wireless Headset', 3200.00, 8, 2),
('Gaming Chair RGB', 8900.00, 3, 2),
('USB-C Hub 7in1', 890.00, 15, 1),
('Webcam Full HD', 1590.00, 12, 3),
('LED Strip Light 5M', 450.00, 25, 3),
('External SSD 1TB', 3490.00, 7, 5),
('Laptop Stand Aluminum', 650.00, 20, 3),
('Wireless Charger', 590.00, 18, 4),
('Bluetooth Speaker', 1290.00, 14, 4),
('Mouse Pad XXL', 390.00, 30, 2),
('Cable Management Box', 290.00, 22, 3),
('Phone Holder Adjustable', 250.00, 35, 4),
('Power Bank 20000mAh', 890.00, 16, 4),
('HDMI Cable 2M', 180.00, 40, 5),
('Desk Lamp LED', 890.00, 11, 3),
('Cooling Pad Laptop', 690.00, 13, 1),
('Microphone USB', 1890.00, 6, 1),
('Graphics Tablet', 2490.00, 4, 1),
('Smart Watch', 4590.00, 9, 4),
('Ergonomic Mouse', 990.00, 17, 1),
('Keyboard Wrist Rest', 290.00, 28, 2),
('Monitor Arm Mount', 1590.00, 5, 3);
