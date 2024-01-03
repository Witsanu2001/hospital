<?php
// ตัวอย่าง get.php

// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patong_2023";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// สร้าง SQL query เพื่อดึงข้อมูลจากตาราง service
$sql = "SELECT * FROM index_pag";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response = array();
    while($row = $result->fetch_assoc()) {
        $response[] = $row; // เก็บข้อมูลที่ดึงมาในรูปแบบของ associative array
    }
    
    // ส่งข้อมูลกลับเป็น JSON
    header('Content-Type: application/json');
    echo json_encode(array('RespCode' => 200, 'data' => $response));
} else {
    echo json_encode(array('RespCode' => 404, 'message' => 'ไม่พบข้อมูล'));
}

$conn->close();
?>
