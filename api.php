<?php
// Cho phép truy cập từ mọi nguồn (CORS) - tùy chỉnh nếu cần bảo mật hơn
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Giả lập dữ liệu trả về từ Database
$data = [
    "message" => "Xin chào! Đây là dữ liệu từ Backend PHP (Shared Hosting)",
    "status" => "success",
    "timestamp" => time()
];

// Trả về định dạng JSON
echo json_encode($data);
?>