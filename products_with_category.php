<?php
session_start();
require_once 'db.php';

// Access Control
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// ใช้ INNER JOIN เพื่อดึงข้อมูลสินค้าพร้อมหมวดหมู่
$sql = "SELECT 
            products.id,
            products.name AS product_name,
            products.price,
            products.stock,
            categories.name AS category_name,
            categories.description AS category_description
        FROM products
        INNER JOIN categories ON products.category_id = categories.id
        ORDER BY categories.name, products.name";

$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();

// จัดกลุ่มสินค้าตามหมวดหมู่
$grouped_products = [];
foreach ($products as $product) {
    $category = $product['category_name'];
    if (!isset($grouped_products[$category])) {
        $grouped_products[$category] = [
            'description' => $product['category_description'],
            'products' => []
        ];
    }
    $grouped_products[$category]['products'][] = $product;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงานสินค้าตามหมวดหมู่ - INNER JOIN Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
    <style>
        body {
            font-family: 'Prompt';
        }
        .category-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-top: 20px;
        }
        .product-card {
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .sql-code {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">สวัสดี, <?php echo htmlspecialchars($_SESSION['fullname']); ?></span>
            <div>
                <a href="dashboard.php" class="btn btn-outline-light me-2">← กลับหน้าหลัก</a>
                <a href="logout.php" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        <!-- แสดงสินค้าแยกตามหมวดหมู่ -->
        <?php foreach ($grouped_products as $category_name => $data): ?>
            <div class="category-header">
                <h3 class="mb-1">🏷️ <?php echo htmlspecialchars($category_name); ?></h3>
                <small><?php echo htmlspecialchars($data['description']); ?></small>
                <span class="badge bg-light text-dark float-end">
                    <?php echo count($data['products']); ?> รายการ
                </span>
            </div>

            <div class="row mt-3 mb-4">
                <?php foreach ($data['products'] as $product): ?>
                    <div class="col-md-4 col-lg-3 mb-3">
                        <div class="card product-card h-100">
                            <div class="card-body">
                                <h6 class="card-title text-primary">
                                    <?php echo htmlspecialchars($product['product_name']); ?>
                                </h6>
                                <p class="card-text mb-1">
                                    <strong>ราคา:</strong> 
                                    <span class="text-success">
                                        <?php echo number_format($product['price'], 2); ?> บาท
                                    </span>
                                </p>
                                <p class="card-text mb-0">
                                    <strong>คงเหลือ:</strong> 
                                    <span class="badge bg-secondary">
                                        <?php echo $product['stock']; ?> ชิ้น
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        <!-- คำอธิบาย INNER JOIN -->
        <div class="card bg-light mt-4 mb-4">
            <div class="card-body">
                <h5 class="card-title">💡 เกี่ยวกับ INNER JOIN</h5>
                <p class="card-text">
                    <strong>INNER JOIN</strong> จะดึงเฉพาะข้อมูลที่มีความสัมพันธ์กันในทั้ง 2 ตาราง
                </p>
                <ul>
                    <li>ตาราง <code>products</code> มีฟิลด์ <code>category_id</code></li>
                    <li>ตาราง <code>categories</code> มีฟิลด์ <code>id</code></li>
                    <li>เงื่อนไข: <code>products.category_id = categories.id</code></li>
                    <li>ผลลัพธ์: ได้สินค้าที่มีหมวดหมู่ชัดเจนเท่านั้น</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
