<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - สาขาวิทยาการคอมพิวเตอร์ PBRU</title>
    
    <!-- ดึงไฟล์ CSS และฟอนต์หลักของโปรเจกต์มาใช้ -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="shortcut icon" href="images/itlogo.ico" type="image/x-icon">

    <style>
        /* =========================================
           CSS เฉพาะสำหรับหน้า Admin Login
           ========================================= */
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: var(--bg-main);
            padding: 20px;
        }
        .login-card {
            background: var(--white);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 400px;
            text-align: center;
            border: 1px solid var(--border-color);
        }
        .login-logo img {
            height: 70px;
            margin-bottom: 20px;
        }
        .login-card h2 {
            color: var(--primary-blue);
            margin-bottom: 5px;
            font-size: 1.8rem;
        }
        .login-card p {
            color: var(--text-gray);
            margin-bottom: 30px;
            font-size: 0.95rem;
        }
        .input-group {
            position: relative;
            margin-bottom: 20px;
            text-align: left;
        }
        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-gray);
            font-size: 1.1rem;
        }
        .input-group input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-family: 'Kanit', sans-serif;
            font-size: 1rem;
            background-color: var(--bg-main);
            color: var(--text-dark);
            transition: 0.3s;
        }
        .input-group input:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.1);
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: var(--primary-blue);
            color: #ffffff; /* ใช้สีขาวตายตัวให้ตัดกับปุ่ม */
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-family: 'Kanit', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            box-shadow: 0 4px 10px rgba(0, 86, 179, 0.2);
        }
        .btn-login:hover {
            background-color: #004494;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 86, 179, 0.3);
        }
        .back-link {
            display: inline-block;
            margin-top: 25px;
            color: var(--text-gray);
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.3s;
        }
        .back-link:hover {
            color: var(--primary-blue);
        }
        
        /* กล่องข้อความแจ้งเตือนสีแดง + เอฟเฟกต์สั่น */
        .error-message {
            background-color: #fee2e2;
            color: #dc2626;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.95rem;
            border: 1px solid #f87171;
            animation: shake 0.4s ease-in-out;
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25%, 75% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
        }
    </style>
</head>
<body class="login-page">

    <div class="login-card">
        <div class="login-logo">
            <img src="images/itlogoRemovebg.png" alt="IT PBRU Logo">
        </div>
        <h2>สำหรับผู้ดูเเลระบบ</h2>
        <p>กรุณาเข้าสู่ระบบเพื่อจัดการเว็บไซต์</p>

        <!-- แสดงข้อความ Error กรณีรหัสผิด -->
        <?php if (!empty($error_msg)): ?>
            <div class="error-message"><i class="fa-solid fa-circle-exclamation"></i> <?php echo $error_msg; ?></div>
        <?php endif; ?>

        <!-- ฟอร์มเข้าสู่ระบบ -->
        <form action="admin_login.php" method="POST">
            
            <!-- CSRF Token (ป้องกันการโจมตีข้ามไซต์) -->
            <input type="hidden" name="csrf_token" value="generated_secure_token_here">

            <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" placeholder="ชื่อผู้ใช้งาน (Username)" required autocomplete="off">
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="รหัสผ่าน (Password)" required>
            </div>

            <button type="submit" class="btn-login">เข้าสู่ระบบ</button>
        </form>

        <a href="index.php" class="back-link"><i class="fa-solid fa-arrow-left"></i> กลับสู่หน้าหลัก</a>
    </div>

    <!-- ดึงปุ่มสลับธีมมืดและระบบ JS มาทำงานร่วมกัน -->
    <?php include 'php/darkModeToggle.php'; ?>
    <script src="js/darkMode.js"></script>

</body>
</html>