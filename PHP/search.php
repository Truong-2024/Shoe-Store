<?php
session_start(); // Khởi động phiên

$host = "localhost";
$User_ID = "root";
$Password = ""; // Cập nhật với mật khẩu cơ sở dữ liệu thực tế của bạn
$db = "shoe";

$conn = mysqli_connect($host, $User_ID, $Password, $db);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    
    // Sử dụng truy vấn SQL để tìm kiếm các sản phẩm có chứa chuỗi "GIÀY TÂY ĐÔNG HẢI" trong tên sản phẩm
    $query = "SELECT * FROM sanpham WHERE TenSanPham LIKE '%GIÀY TÂY ĐÔNG HẢI%'";
    
    // Thực hiện truy vấn SQL
    $result = mysqli_query($conn, $query);
    
    // Xử lý kết quả tìm kiếm và hiển thị kết quả dưới dạng danh sách sản phẩm
    if(mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li>ID: " . $row['ID'] . " - Tên sản phẩm: " . $row['TenSanPham'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Không tìm thấy kết quả phù hợp.";
    }
}
?>
