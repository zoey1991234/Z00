<?php
// 使用 mysqli_connect 函數連接 MySQL 資料庫
$con = mysqli_connect("localhost", "root", "", "zmsdb");

// 檢查連接是否成功
if(mysqli_connect_errno()) {
    // 如果連接失敗，顯示錯誤信息
    echo "Connection Fail: " . mysqli_connect_error();
} else {
    // 如果連接成功，可以顯示成功信息
    echo "Connected successfully";
}
?>
