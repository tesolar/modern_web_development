<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Secure Login System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
    <style>
        body {
            font-family: 'Prompt';
        }
    </style>
</head>
<body class="bg-light d-flex align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header text-center bg-success text-white">
                        <h3 class="font-weight-light my-2">สมัครสมาชิก</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger">
                                <?php 
                                    echo $_SESSION['error']; 
                                    unset($_SESSION['error']);
                                ?>
                            </div>
                        <?php endif; ?>
                        
                        <form action="register_process.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Full Name" required>
                                <label for="inputName">ชื่อ-นามสกุล</label>
                            </div>
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
                                <button type="submit" class="btn btn-success btn-lg">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="index.php">มีบัญชีอยู่แล้ว? เข้าสู่ระบบ</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>
