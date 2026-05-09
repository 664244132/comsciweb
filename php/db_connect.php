<?php
// กำหนดค่าการเชื่อมต่อฐานข้อมูล
$host = "localhost";
$username = "root"; // ค่าเริ่มต้นของ XAMPP มักจะเป็น root
$password = ""; // ค่าเริ่มต้นของ XAMPP มักจะไม่มีรหัสผ่าน
$dbname = "pbru_db"; // ชื่อฐานข้อมูลที่คุณต้องไปสร้างใน phpMyAdmin

// ทำการเชื่อมต่อ
$conn = new mysqli($host, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// ตั้งค่าภาษาให้เป็น UTF-8 เพื่อรองรับภาษาไทย
$conn->set_charset("utf8");
?>