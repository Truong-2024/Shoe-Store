<?php
$host = "localhost";
$User_ID = "root";
$Password = "";
$db = "shoe";
$conn = mysqli_connect($host, $User_ID, $Password, $db);
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công!";
}
?>
