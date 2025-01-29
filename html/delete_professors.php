<?php
include_once '../con.db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM professors WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: /project/api/admin_dashbord/html/manage_professors.php");
    } else {
        echo "เกิดข้อผิดพลาด: " . $stmt->error;
    }
}
?>