<?php
session_start(); // เริ่มต้น session

// ลบข้อมูล session ทั้งหมด
session_unset();

// ทำลาย session
session_destroy();

// เปลี่ยนเส้นทางไปยังหน้าหลัก หรือหน้า login
header("Location: ../login/login.php");
exit;
?>