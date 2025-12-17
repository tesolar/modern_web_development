# Modern Web Development
**18-19, 20-21 December 2025**

**ผู้สอน:** Thanakrit Kraising
**Email:** thanakritk24001@gmail.com  
**ประสบการณ์:** +7 years Software Developer

---

## เกี่ยวกับผู้สอน

- **Candid GRC CO., LTD.** - Senior Developer & Project Manager
- **CSIT, Naresuan University** - Research Assistant

---

## วัตถุประสงค์ของหลักสูตร

### Why This Course?

- **Coding for Grade** (เขียนส่งอาจารย์) vs **Coding for Production** (ใช้งานจริง)
- **Security Awareness** - SQL Injection, XSS
- **Career Path** - สิ่งที่บริษัทมองหา

### เครื่องมือที่ใช้

- VS Code
- XAMPP
- Google Chrome
- Bootstrap CDN

---

## สารบัญ (Table of Contents)

### Day 1: HTML, CSS, JavaScript, Bootstrap
- [Introduction to Website](#introduction-to-website)
  - [เว็บไซต์คืออะไร?](#เว็บไซต์คืออะไร)
  - [Static vs. Dynamic Websites](#static-vs-dynamic-websites)
- [Web Anatomy (ร่างกายของเว็บไซต์)](#web-anatomy-ร่างกายของเว็บไซต์)
- [Client-side vs Server-side](#client-side-vs-server-side)
- [HTML5 Structure & Semantic Tags](#html5-structure--semantic-tags)
- [CSS คืออะไร](#css-คืออะไร)
  - [วิธีการเพิ่ม CSS เข้าใน HTML](#วิธีการเพิ่ม-css-เข้าใน-html)
  - [ตัวอย่าง CSS พื้นฐาน](#ตัวอย่าง-css-พื้นฐาน)
- [JavaScript คืออะไร](#javascript-คืออะไร)
- [Bootstrap & CDN](#bootstrap-คืออะไร)
  - [The Grid System](#the-grid-system-หัวใจของ-bootstrap)
  - [Bootstrap Components](#bootstrap-components)
  - [Adding Images and Buttons](#adding-images-and-buttons)
- [โครงสร้างโปรเจกต์เว็บไซต์ 5 หน้า](#โครงสร้างโปรเจกต์เว็บไซต์-5-หน้า)


### Day 2: PHP + MySQL
- [Workshop: สร้างระบบ Login ที่ปลอดภัย](#workshop-สร้างระบบ-login-ที่ปลอดภัย)
- [PHP คืออะไร และทำงานอย่างไร](#php-คืออะไร-และทำงานอย่างไร)
- [PHP Logic & Syntax](#php-logic--syntax)
  - [Syntax, Variables & Output](#1-syntax-variables--output)
  - [Control Structures (If-Else & Switch)](#2-control-structures-if-else--switch)
  - [Loops & Arrays](#3-loops--arrays)
- [MySQL & SQL Queries](#mysql--sql-queries)
  - [Database & Table Creation](#database--table-creation)
  - [Basic CRUD](#basic-crud-create-read-update-delete)
  - [Advanced Queries](#advanced-queries-filtering--ordering)
  - [SQL JOIN - การรวมตาราง](#sql-join---การรวมตาราง)
- [แบบฝึกหัดทดสอบความเข้าใจ (Challenge)](#แบบฝึกหัดทดสอบความเข้าใจ-challenge)

### Advanced Back-End & Database
- [Database Architecture](#database-architecture)
- [Secure Registration](#secure-registration-สมัครสมาชิกแบบปลอดภัย)
- [Login System & Session](#login-system--session-ระบบยืนยันตัวตน)
- [CRUD Operations & Security](#crud-operations--security)
- [CRUD Logic - Create, Update, Delete](#crud-logic---create-update-delete)
- [Destroy Session (Logout)](#destroy-session-logout)

### สรุป
- [สรุปหลักสูตร](#สรุป)
- [ติดต่อ](#ติดต่อ)

---

## Day 1: HTML, CSS, JavaScript, Bootstrap

### Introduction to Website

#### เว็บไซต์คืออะไร?

เว็บไซต์คือชุดของหน้าเว็บที่เชื่อมโยงกันผ่านทางอินเทอร์เน็ต ทำงานผ่านโปรโตคอล HTTP หรือ HTTPS

**องค์ประกอบพื้นฐาน:**
- โครงสร้าง (HTML)
- การตกแต่ง (CSS)
- ฟังก์ชันการทำงาน (JavaScript)

#### Static vs. Dynamic Websites

**Web Static:**
- แสดงเนื้อหาเดียวกันสำหรับผู้ใช้ทุกคน
- ข้อมูลไม่เปลี่ยนแปลงอัตโนมัติ
- ตัวอย่าง: เว็บไซต์ข้อมูลส่วนตัว, หน้าแสดงเนื้อหาคงที่

**Web Dynamic:**
- เนื้อหาปรับเปลี่ยนได้ตามการโต้ตอบของผู้ใช้
- ดึงข้อมูลจากฐานข้อมูล
- ตัวอย่าง: เว็บอีคอมเมิร์ซ, เว็บแอปพลิเคชัน

---

### Web Anatomy (ร่างกายของเว็บไซต์)

เปรียบเทียบส่วนประกอบของเว็บไซต์กับร่างกายมนุษย์:

- **HTML (โครงกระดูก)**: เนื้อหา ข้อความ รูปภาพ โครงสร้าง (Header, Body, Footer)
- **CSS/Bootstrap (เสื้อผ้าหน้าผม)**: ความสวยงาม สีสัน การจัดวาง (Layout)
- **JavaScript (สมอง/กล้ามเนื้อ)**: การคำนวณ การขยับ การโต้ตอบกับผู้ใช้

### Client-side vs Server-side

**Client-side:**
- HTML, CSS, JavaScript
- ทำงานบน Browser

**Server-side:**
- PHP, Python, Node.js
- ทำงานบน Server

```
Client (Browser) --request--> Server
Client (Browser) <--response-- Server
```

---

### HTML5 Structure & Semantic Tags

#### โครงสร้างมาตรฐาน
```html
<!DOCTYPE html>
<html>
<head>
</head>
<body>
</body>
</html>
```

#### Semantic Tags (สำคัญต่อ SEO)

- `<nav>` - เมนูนำทาง
- `<section>` - แบ่งส่วนเนื้อหา
- `<article>` - เนื้อหาบทความ
- `<footer>` - ส่วนท้ายเว็บ

#### Tag ที่ใช้บ่อย

- `h1–h6` - หัวข้อ (Headings)
- `p` - ย่อหน้า (Paragraph)
- `a` - ลิงก์เชื่อมโยง
- `img` - รูปภาพ
- `ul / ol / li` - รายการ (Lists)
- `div / span` - กล่องจัดกลุ่มองค์ประกอบ

#### ตัวอย่าง HTML Structure

```html
<!DOCTYPE html>
<html>
<head>
    <title>My First Web Page</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <p>This is a paragraph.</p>
    <a href="https://example.com">Click here</a>
    <img src="image.jpg" alt="My Image" />
</body>
</html>
```

---

### CSS คืออะไร

**CSS = Cascading Style Sheets**

- ใช้ตกแต่ง HTML
- แยกโครงสร้างออกจากการแสดงผล

#### วิธีการเพิ่ม CSS เข้าใน HTML

**1. Inline CSS:**
- ใส่ CSS ภายในแท็ก HTML
```html
<h1 style="color:blue;">หัวข้อสีน้ำเงิน</h1>
```

**2. Internal CSS:**
- ใส่ CSS ภายใน `<style>` ในส่วน `<head>`
```html
<head>
    <style>
        h1 { color: blue; }
    </style>
</head>
```

**3. External CSS:**
- ใส่ CSS ในไฟล์แยกออกมา (ไฟล์ .css) และเชื่อมโยงใน `<head>`
```html
<head>
    <link rel="stylesheet" href="styles.css">
</head>
```

#### การตกแต่งสี, ข้อความ และพื้นหลัง

- **สี (color):** เปลี่ยนสีข้อความ เช่น `color: red;`
- **พื้นหลัง (background-color):** เปลี่ยนสีพื้นหลัง เช่น `background-color: lightblue;`
- **ฟอนต์ (font-family):** เปลี่ยนฟอนต์ข้อความ เช่น `font-family: Arial;`

#### ตัวอย่าง CSS พื้นฐาน

```css
body {
    font-family: Prompt;
}

h1 {
    color: blue;
    text-align: center;
}

p {
    font-size: 18px;
    line-height: 1.5;
    color: gray;
}
```

---

### JavaScript คืออะไร

- ภาษา Programming สำหรับเว็บ
- เพิ่มความโต้ตอบให้เว็บ
- ทำงานบน Browser

#### Bootstrap คืออะไร?

CSS Framework ที่ช่วยให้จัดหน้าเว็บง่ายและรองรับมือถือ (Responsive)

#### CDN (Content Delivery Network)

การเรียกไฟล์จาก Server กลาง ไม่ต้องโหลดเก็บไว้ที่เครื่อง

**ข้อดี:**
- เร็ว
- ไม่หนักเครื่อง
- Browser อาจจะ Cache ไว้แล้วทำให้เว็บโหลดไวขึ้น

#### การนำ Bootstrap มาใช้ใน HTML

**วิธีที่ 1: Download**
- ดาวน์โหลดจาก [https://getbootstrap.com/](https://getbootstrap.com/)

**วิธีที่ 2: ใช้ CDN (แนะนำ)**
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
```

ใช้คลาสที่กำหนดไว้ล่วงหน้า เช่น `.container`, `.row`, `.col` สำหรับการจัดเลย์เอาท์

---

### The Grid System (หัวใจของ Bootstrap)

Bootstrap ใช้ระบบ Grid แบบ **12 คอลัมน์** ซึ่งช่วยในการจัดเลย์เอาท์ให้ตอบสนองต่อขนาดหน้าจอ (responsive)

- สูตร: **Container > Row > Column**

#### Class พื้นฐาน

- `.container` - กล่องเนื้อหาหลัก (มีขอบซ้ายขวา)
- `.row` - แถวแนวนอน
- `.col-6` - กินพื้นที่ครึ่งจอ (6/12)
- `.col-4` - กินพื้นที่ 1 ใน 3 (4/12)

#### Breakpoints (ทำให้เว็บรองรับมือถือ)

- `.col-12` - มือถือ (เต็มจอ)
- `.col-md-6` - แท็บเล็ต/จอคอม (ครึ่งจอ)

```html
<div class="row">
    <div class="col-12 col-md-6">เนื้อหาซ้าย</div>
    <div class="col-12 col-md-6">เนื้อหาขวา</div>
</div>
```

#### ตัวอย่าง Bootstrap Layout

```html
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>Some text about our company.</p>
        </div>
        <div class="col-md-6">
            <img src="image.jpg" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
```

---

### Bootstrap Components

#### การสร้าง Navbar, Card และ Button

**Navbar:**
- ใช้คลาส `.navbar`, `.navbar-light`, `.navbar-expand-lg`

**Card:**
- ใช้คลาส `.card`, `.card-body`, `.card-title` สำหรับการสร้างบล็อกเนื้อหา

**Button:**
- ใช้คลาส `.btn`, `.btn-primary`, `.btn-secondary` สำหรับปุ่ม

---

### Adding Images and Buttons

#### การเพิ่มรูปภาพในเว็บ

- ใช้แท็ก `<img>` ใน HTML
- การปรับขนาดรูปภาพด้วย CSS หรือ Bootstrap
- ใช้คลาส `.img-fluid` ของ Bootstrap เพื่อทำให้รูปภาพตอบสนองต่อหน้าจอ (responsive)

#### การสร้างปุ่มใน Bootstrap

- ใช้คลาส `.btn`, `.btn-primary`, `.btn-secondary` เพื่อสร้างปุ่มต่างๆ

**ตัวอย่าง:**

```html
<img src="image.jpg" class="img-fluid" alt="Responsive image">
<button class="btn btn-primary">Click me</button>
```

---

### โครงสร้างโปรเจกต์เว็บไซต์ 5 หน้า

โครงสร้างมาตรฐานของเว็บไซต์ที่สมบูรณ์:

1. **หน้าแรก (Home)** - แนะนำเว็บไซต์
2. **หน้าข้อมูล (About)** - ข้อมูลเกี่ยวกับเว็บไซต์หรือบริษัท
3. **หน้าบริการ (Services)** - รายการบริการหรือผลิตภัณฑ์
4. **หน้าบทความ (Blog)** - บทความหรือข้อมูลเพิ่มเติม
5. **หน้าติดต่อ (Contact)** - ข้อมูลการติดต่อ

---

## Day 2: PHP + MySQL

## Workshop: สร้างระบบ Login ที่ปลอดภัย

### 1. HTML Structure + Bootstrap CDN

สร้างไฟล์ `index.php`:

```html
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center vh-100">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

### 2. เพิ่ม Font "Prompt"

เพิ่มในส่วน `<head>`:

```html
<head>
    <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
    <style>
        body {
            font-family: 'Prompt';
        }
    </style>
</head>
```

### 3. Login Card (Bootstrap Components)

ใส่ใน `<body>`:

```html
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="font-weight-light my-2">เข้าสู่ระบบ</h3>
                </div>
                <div class="card-body">
                    <form action="login_process.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="name@example.com" required>
                            <label for="inputEmail">อีเมล</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                            <label for="inputPassword">รหัสผ่าน</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="showPassBtn">
                            <label class="form-check-label" for="showPassBtn">แสดงรหัสผ่าน</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="register.php">ยังไม่มีบัญชี? สมัครสมาชิก</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
```

### 4. JavaScript Logic (Password Toggle)

ใส่ก่อนปิดแท็ก `</body>`:

```html
<script>
// เลือก Checkbox และ Input Password
const showPassBtn = document.getElementById('showPassBtn');
const passwordInput = document.getElementById('inputPassword');

// สั่งให้ฟังเหตุการณ์ 'change' (ติ๊ก/ไม่ติ๊ก)
showPassBtn.addEventListener('change', function() {
    if (this.checked) {
        passwordInput.type = 'text'; // เปลี่ยนเป็น Text เพื่อโชว์
    } else {
        passwordInput.type = 'password'; // เปลี่ยนกลับเป็น Password
    }
});
</script>
```

### 5. Create Register Page

**การสร้าง register.php:**

1. Copy โค้ดทั้งหมดจาก `index.php` ไปวางในไฟล์ใหม่ชื่อ `register.php`
2. เปลี่ยนหัวข้อเป็น "สมัครสมาชิก"
3. เปลี่ยน action เป็น `register_process.php`
4. เพิ่ม Input "ชื่อ-นามสกุล" ไว้ด้านบนสุดของ Form

```html
<div class="form-floating mb-3">
    <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Full Name" required>
    <label for="inputName">ชื่อ-นามสกุล</label>
</div>
```

5. เปลี่ยนปุ่มเป็น "Register" และเปลี่ยนสีปุ่ม `btn-success`

---

### PHP คืออะไร และทำงานอย่างไร

- Server-side language
- ทำงานบน Server
- ประมวลผลก่อนส่ง HTML

```
Client --request--> Server (PHP) --response (HTML)--> Client
```

```php
<?php
echo "Hello World";
?>
```

---

### PHP Logic & Syntax

#### 1. Syntax, Variables & Output

สร้างไฟล์ `basic.php`:

```php
<?php
// 1. การแสดงผล
echo "<h1>Hello PHP World!</h1>";
print "Basic PHP Class<br>";

// 2. ตัวแปร (Variables) - ขึ้นต้นด้วย $ เสมอ
$name = "Somchai"; // String
$age = 20; // Integer
$gpa = 3.50; // Float
$is_student = true; // Boolean

// 3. การต่อ String (Concatenation) ใช้จุด (.)
echo "สวัสดีคุณ ". $name . " อายุ ". $age . " ปี";

// 4. Double Quotes vs Single Quotes
echo "<br>";
echo "แบบ Double: $name"; // ดึงค่าตัวแปรได้เลย
echo '<br>แบบ Single: $name'; // ออกมาเป็น text $name
?>
```

#### 2. Control Structures (If-Else & Switch)

สร้างไฟล์ `grade.php` - ระบบตัดเกรด:

```php
<?php
$score = 75;
echo "<h3>คะแนนของคุณคือ: $score</h3>";

// If-Else
if ($score >= 80) {
    echo "เกรด A";
} elseif ($score >= 70) {
    echo "เกรด B";
} elseif ($score >= 60) {
    echo "เกรด C";
} else {
    echo "เกรด F (สอบตก)";
}
?>
```

#### 3. Loops & Arrays

```php
<?php
// 1. Indexed Array
$fruits = ["Apple", "Banana", "Orange"];
echo "ผลไม้ชิ้นแรกคือ: ". $fruits[0] . "<br>";

// 2. Associative Array
$student = [
    "id" => "63001",
    "name" => "Somsri",
    "major" => "IT"
];
echo "นักศึกษาชื่อ: ". $student["name"] . "<br><hr>";

// 3. Foreach Loop
$products = ["Mouse", "Keyboard", "Monitor", "Speaker"];
echo "<ul>";
foreach ($products as $item) {
    echo "<li>สินค้า: $item</li>";
}
echo "</ul>";
?>
```

---

### MySQL & SQL Queries

#### Database & Table Creation

เปิด phpMyAdmin -> tab SQL:

```sql
-- 1. สร้างฐานข้อมูล
CREATE DATABASE IF NOT EXISTS school_db;
USE school_db;

-- 2. สร้างตาราง students
CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    age INT,
    gender ENUM('Male', 'Female', 'Other'),
    enroll_date DATE
);
```

**หมายเหตุ:**
- `PRIMARY KEY` - ห้ามซ้ำ
- `AUTO_INCREMENT` - รันเลขเองอัตโนมัติ
- `VARCHAR` - ข้อความสั้น
- `INT` - ตัวเลขจำนวนเต็ม

#### Basic CRUD (Create, Read, Update, Delete)

```sql
-- 1. INSERT (เพิ่มข้อมูล)
INSERT INTO students (firstname, lastname, age, gender, enroll_date)
VALUES ('Somchai', 'Jaidee', 20, 'Male', '2024-01-15');

INSERT INTO students (firstname, lastname, age, gender, enroll_date)
VALUES ('Somsri', 'Rakrian', 19, 'Female', '2024-02-01');

INSERT INTO students (firstname, lastname, age, gender, enroll_date)
VALUES ('John', 'Doe', 22, 'Male', '2023-12-01');

-- 2. SELECT (ดึงข้อมูล)
SELECT * FROM students;
SELECT firstname, lastname FROM students;

-- 3. UPDATE (แก้ไขข้อมูล)
UPDATE students
SET age = 21
WHERE firstname = 'Somchai';

-- 4. DELETE (ลบข้อมูล)
DELETE FROM students WHERE firstname = 'John';
```

#### Advanced Queries (Filtering & Ordering)

```sql
-- หาคนที่อายุมากกว่า 19 ปี
SELECT * FROM students WHERE age > 19;

-- หาคนที่ชื่อขึ้นต้นด้วย Som... (LIKE)
SELECT * FROM students WHERE firstname LIKE 'Som%';

-- เรียงลำดับตามอายุ จากมากไปน้อย (ORDER BY)
SELECT * FROM students ORDER BY age DESC;

-- แสดงแค่ 1 คนแรก (LIMIT) - ใช้บ่อยเวลาทำ Pagination
SELECT * FROM students LIMIT 1;
```

---

### SQL JOIN - การรวมตาราง

#### ทำไมต้องใช้ JOIN?

ในฐานข้อมูลจริง เราแยกข้อมูลออกเป็นหลายตารางเพื่อลดความซ้ำซ้อน (Normalization) แต่เวลาดึงข้อมูลมาใช้ เราต้อง **รวม (JOIN)** ตารางเหล่านั้นเข้าด้วยกัน

#### ตัวอย่างโครงสร้างตาราง

**ตาราง categories (หมวดหมู่สินค้า):**
```sql
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT
);
```

**ตาราง products (สินค้า):**
```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
```

---

#### 1. INNER JOIN (ใช้บ่อยที่สุด)

ดึงเฉพาะข้อมูลที่มีความสัมพันธ์กันในทั้ง 2 ตาราง

```sql
-- ดึงสินค้าพร้อมหมวดหมู่
SELECT 
    products.name AS product_name,
    products.price,
    categories.name AS category_name
FROM products
INNER JOIN categories ON products.category_id = categories.id;
```

**ผลลัพธ์:** ได้เฉพาะสินค้าที่มี `category_id` ตรงกับ `categories.id`

---

#### 2. LEFT JOIN (LEFT OUTER JOIN)

ดึงข้อมูลทั้งหมดจากตารางซ้าย แม้ไม่มีข้อมูลที่ตรงกันในตารางขวา

```sql
-- ดึงสินค้าทั้งหมด (รวมสินค้าที่ไม่มีหมวดหมู่)
SELECT 
    products.name AS product_name,
    products.price,
    categories.name AS category_name
FROM products
LEFT JOIN categories ON products.category_id = categories.id;
```

**ผลลัพธ์:** ได้สินค้าทั้งหมด ถ้าสินค้าไหนไม่มีหมวดหมู่จะแสดง `NULL`

---

#### 3. RIGHT JOIN (RIGHT OUTER JOIN)

ดึงข้อมูลทั้งหมดจากตารางขวา แม้ไม่มีข้อมูลที่ตรงกันในตารางซ้าย

```sql
-- ดึงหมวดหมู่ทั้งหมด (รวมหมวดหมู่ที่ไม่มีสินค้า)
SELECT 
    categories.name AS category_name,
    products.name AS product_name
FROM products
RIGHT JOIN categories ON products.category_id = categories.id;
```

**ผลลัพธ์:** ได้หมวดหมู่ทั้งหมด ถ้าหมวดหมู่ไหนไม่มีสินค้าจะแสดง `NULL`

---

#### 4. FULL OUTER JOIN (MySQL ไม่รองรับโดยตรง)

ดึงข้อมูลทั้งหมดจากทั้ง 2 ตาราง (ใน MySQL ต้องใช้ UNION)

```sql
-- วิธีทำ FULL OUTER JOIN ใน MySQL
SELECT 
    products.name AS product_name,
    categories.name AS category_name
FROM products
LEFT JOIN categories ON products.category_id = categories.id
UNION
SELECT 
    products.name AS product_name,
    categories.name AS category_name
FROM products
RIGHT JOIN categories ON products.category_id = categories.id;
```

---

#### 5. CROSS JOIN

สร้างชุดข้อมูลทุกคู่ที่เป็นไปได้ (Cartesian Product)

```sql
-- ทุกสินค้าจับคู่กับทุกหมวดหมู่
SELECT 
    products.name AS product_name,
    categories.name AS category_name
FROM products
CROSS JOIN categories;
```

**คำเตือน:** ใช้ระวัง! ถ้ามีสินค้า 100 รายการ และหมวดหมู่ 5 หมวด จะได้ 500 แถว

---

#### สรุปความแตกต่าง

| ประเภท JOIN | ผลลัพธ์ |
|-------------|---------|
| **INNER JOIN** | เฉพาะข้อมูลที่มีความสัมพันธ์กันในทั้ง 2 ตาราง |
| **LEFT JOIN** | ข้อมูลทั้งหมดจากตารางซ้าย + ข้อมูลที่ตรงกันจากตารางขวา |
| **RIGHT JOIN** | ข้อมูลทั้งหมดจากตารางขวา + ข้อมูลที่ตรงกันจากตารางซ้าย |
| **FULL OUTER JOIN** | ข้อมูลทั้งหมดจากทั้ง 2 ตาราง |
| **CROSS JOIN** | ทุกคู่ที่เป็นไปได้ (Cartesian Product) |

---

#### ตัวอย่างการใช้งานจริง

```sql
-- นับจำนวนสินค้าในแต่ละหมวดหมู่
SELECT 
    categories.name AS category_name,
    COUNT(products.id) AS product_count,
    SUM(products.stock) AS total_stock
FROM categories
LEFT JOIN products ON categories.id = products.category_id
GROUP BY categories.id, categories.name
ORDER BY product_count DESC;
```

**ทดสอบด้วยตัวคุณเอง:**
- ไปที่หน้า Dashboard → คลิกปุ่ม "📊 ดูรายงานตามหมวดหมู่ (INNER JOIN)"
- ดูตัวอย่างการใช้ INNER JOIN ในการแสดงสินค้าตามหมวดหมู่

---

### แบบฝึกหัดทดสอบความเข้าใจ (Challenge)

**โจทย์:**

1. สร้างไฟล์ PHP ชื่อ `challenge.php`
2. สร้าง Array เก็บรายชื่อเพื่อน 3 คน (ชื่อ, เบอร์โทร)
3. วนลูปแสดงรายชื่อเพื่อนออกมาเป็นตาราง HTML (Table)

---

## Advanced Back-End & Database

### Database Architecture

#### สร้าง Database (รันใน phpMyAdmin)

```sql
CREATE DATABASE workshop_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
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

-- ตารางสินค้า (มี Foreign Key เชื่อมกับ categories)
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
('Laptop Stand Aluminum', 650.00, 20, 3);
```

**หมายเหตุ:**
- สร้างตาราง `categories` ก่อนเพื่อให้สามารถอ้างอิงได้
- `FOREIGN KEY` เชื่อมโยง `products.category_id` กับ `categories.id`
- `ON DELETE SET NULL` หมายความว่าถ้าลบหมวดหมู่ สินค้าจะยังอยู่แต่ `category_id` จะเป็น `NULL`

#### ไฟล์เชื่อมต่อ Database

สร้างไฟล์ `db.php` (ใช้ PDO และการดักจับ Error แบบ Exception):

```php
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
```

---

### Secure Registration (สมัครสมาชิกแบบปลอดภัย)

สร้างไฟล์ `register_process.php`:

```php
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
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "มีอีเมลนี้ในระบบแล้ว หรือเกิดข้อผิดพลาด";
        header("Location: register.php");
    }
}
?>
```

---

### Login System & Session (ระบบยืนยันตัวตน)

สร้างไฟล์ `login_process.php`:

```php
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
    } else {
        $_SESSION['error'] = "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
        header("Location: index.php");
    }
}
?>
```

---

### CRUD Operations & Security

#### สร้างหน้า Dashboard

สร้างไฟล์ `dashboard.php`:

```php
<?php
session_start();
require_once 'db.php';

// Access Control
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Logic การค้นหา (ใช้ LEFT JOIN เพื่อแสดงหมวดหมู่ด้วย)
$search = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT 
            products.*,
            categories.name AS category_name
        FROM products
        LEFT JOIN categories ON products.category_id = categories.id
        WHERE products.name LIKE ? 
        ORDER BY products.id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute(["%$search%"]);
$products = $stmt->fetchAll();

// ดึงข้อมูลหมวดหมู่สำหรับ dropdown
$categories = $conn->query("SELECT * FROM categories ORDER BY name")->fetchAll();
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">สวัสดี, <?php echo htmlspecialchars($_SESSION['fullname']); ?></span>
            <a href="logout.php" class="btn btn-outline-light">Logout</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>จัดการสินค้า</h2>
            <a href="products_with_category.php" class="btn btn-info">
                📊 ดูรายงานตามหมวดหมู่ (INNER JOIN)
            </a>
        </div>
        
        <!-- Search Form -->
        <form method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="ค้นหาสินค้า..." value="<?php echo htmlspecialchars($search); ?>">
                <button class="btn btn-primary" type="submit">ค้นหา</button>
            </div>
        </form>
        
        <!-- Add Product Button -->
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">+ เพิ่มสินค้า</button>
        
        <!-- Products Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อสินค้า</th>
                    <th>หมวดหมู่</th>
                    <th>ราคา</th>
                    <th>จำนวน</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($products) > 0): ?>
                    <?php foreach ($products as $product): ?>
    <!-- Add Product Modal -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มสินค้าใหม่</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="action.php" method="POST">
                    <input type="hidden" name="action" value="create">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>ชื่อสินค้า</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>หมวดหมู่</label>
                            <select name="category_id" class="form-control">
                                <option value="">-- เลือกหมวดหมู่ --</option>
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat['id']; ?>">
                                        <?php echo htmlspecialchars($cat['name']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>ราคา</label>
                            <input type="number" step="0.01" name="price" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>จำนวน</label>
                            <input type="number" name="stock" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>lass="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มสินค้าใหม่</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="action.php" method="POST">
                    <input type="hidden" name="action" value="create">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>ชื่อสินค้า</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>ราคา</label>
                            <input type="number" step="0.01" name="price" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>จำนวน</label>
                            <input type="number" name="stock" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

---

### CRUD Logic - Create, Update, Delete

สร้างไฟล์ `action.php` (Centralized Controller) สำหรับจัดการ CRUD Operations:

```php
<?php
session_start();
require_once 'db.php';

// เช็คสิทธิ์
if (!isset($_SESSION['user_id'])) {
    exit();
}

// CREATE - เพิ่มสินค้าใหม่
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'create') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category_id = !empty($_POST['category_id']) ? $_POST['category_id'] : null;
    
    $stmt = $conn->prepare("INSERT INTO products (name, price, stock, category_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $price, $stock, $category_id]);
    header("Location: dashboard.php");
    exit();
}

// UPDATE - แก้ไขสินค้า
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'update') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $category_id = !empty($_POST['category_id']) ? $_POST['category_id'] : null;
    
    $stmt = $conn->prepare("UPDATE products SET name = ?, price = ?, stock = ?, category_id = ? WHERE id = ?");
    $stmt->execute([$name, $price, $stock, $category_id, $id]);
    header("Location: dashboard.php");
    exit();
}

#### การเพิ่มปุ่ม Edit ในตาราง

แก้ไขส่วน Table Cell ใน `dashboard.php`:

```php
<td>
    <button class="btn btn-warning btn-sm" 
            data-bs-toggle="modal" 
            data-bs-target="#editModal" 
            onclick="editProduct(<?php echo $product['id']; ?>, '<?php echo htmlspecialchars($product['name'], ENT_QUOTES); ?>', <?php echo $product['price']; ?>, <?php echo $product['stock']; ?>, <?php echo $product['category_id'] ?? 'null'; ?>)">แก้ไข</button>
    <a href="action.php?action=delete&id=<?php echo $product['id']; ?>" 
       class="btn btn-danger btn-sm" 
       onclick="return confirm('ต้องการลบสินค้านี้?')">ลบ</a>
</td>
```
```php
#### Edit Modal (Bootstrap)

เพิ่ม Modal สำหรับแก้ไขสินค้าใน `dashboard.php`:

```html
<!-- Edit Product Modal -->
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">แก้ไขสินค้า</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="action.php" method="POST">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" id="editId">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>ชื่อสินค้า</label>
                        <input type="text" name="name" id="editName" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>หมวดหมู่</label>
                        <select name="category_id" id="editCategoryId" class="form-control">
                            <option value="">-- เลือกหมวดหมู่ --</option>
                            <?php foreach ($categories as $cat): ?>
                                <option value="<?php echo $cat['id']; ?>">
                                    <?php echo htmlspecialchars($cat['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>ราคา</label>
                        <input type="number" step="0.01" name="price" id="editPrice" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>จำนวน</label>
                        <input type="number" name="stock" id="editStock" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-warning">บันทึกการแก้ไข</button>
                </div>
            </form>
        </div>
    </div>
</div>
```                     <input type="number" name="stock" id="editStock" class="form-control" required>
                    </div>
#### JavaScript สำหรับเติมข้อมูลใน Edit Modal

เพิ่ม JavaScript Function ใน `dashboard.php`:

```javascript
<script>
// ฟังก์ชันสำหรับเติมข้อมูลใน Edit Modal
function editProduct(id, name, price, stock, categoryId) {
    document.getElementById('editId').value = id;
    document.getElementById('editName').value = name;
    document.getElementById('editPrice').value = price;
    document.getElementById('editStock').value = stock;
    document.getElementById('editCategoryId').value = categoryId || '';
}
</script>
```

**หลักการทำงาน:**
1. เมื่อคลิกปุ่ม "แก้ไข" จะเรียกฟังก์ชัน `editProduct()` พร้อมส่งข้อมูลสินค้า (รวม `category_id`)
2. JavaScript จะเติมข้อมูลลงในฟอร์มของ Modal (รวมการเลือกหมวดหมู่)
3. เมื่อกด Submit จะส่งข้อมูลไปที่ `action.php` พร้อม `action=update`
4. PHP จะรัน UPDATE Query พร้อมอัปเดต `category_id` และ redirect กลับมาที่ Dashboard
    document.getElementById('editPrice').value = price;
    document.getElementById('editStock').value = stock;
}
</script>
```

**หลักการทำงาน:**
1. เมื่อคลิกปุ่ม "แก้ไข" จะเรียกฟังก์ชัน `editProduct()` พร้อมส่งข้อมูลสินค้า
2. JavaScript จะเติมข้อมูลลงในฟอร์มของ Modal
3. เมื่อกด Submit จะส่งข้อมูลไปที่ `action.php` พร้อม `action=update`
4. PHP จะรัน UPDATE Query และ redirect กลับมาที่ Dashboard

---

### Destroy Session (Logout)

สร้างไฟล์ `logout.php`:

```php
<?php
session_start();
session_destroy();
header("Location: index.php");
?>
```

---

## สรุป

หลักสูตรนี้ครอบคลุม:

### Day 1
- HTML5 & Semantic Tags
- CSS & Bootstrap Framework
- Grid System & Responsive Design
- JavaScript & DOM Manipulation
- สร้างหน้า Login/Register UI

### Day 2
- PHP Syntax & Logic
- MySQL Database Design
- CRUD Operations
- Security (SQL Injection Prevention, Password Hashing)
- Session Management
- Full-Stack Web Application

---

## ติดต่อ

**Candid GRC**  
Website: [www.candidgrc.com](https://www.candidgrc.com)  
Email: succeed@candidgrc.com

---

© 2025 Modern Web Development Course by Thanakrit Kraising
