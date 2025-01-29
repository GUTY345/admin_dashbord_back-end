<?php
$servername = "localhost";  // หรือใส่ชื่อเซิร์ฟเวอร์ที่ใช้ 
    $username = "root";         // ชื่อผู้ใช้ของฐานข้อมูล
    $password = "";             // รหัสผ่านของฐานข้อมูล
    $dbname = "school_management";        // ชื่อฐานข้อมูล

    // สร้างการเชื่อมต่อ
    $conn = new mysqli($servername, $username, $password, $dbname);

    // ตรวจสอบการเชื่อมต่อ
    if ($conn->connect_error) {
        die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
    }
    ?>