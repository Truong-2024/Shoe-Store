<?php
// Kết nối tới cơ sở dữ liệu của bạn ở đây
$host = "localhost";
$User_ID = "root";
$Password = "";
$db = "shoe";

// Tạo kết nối
$conn = mysqli_connect($host, $User_ID, $Password, $db);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
} else {
    echo "Kết nối thành công!";
}

// Xử lý tìm kiếm
if(isset($_GET['query'])) {
    $search_query = $_GET['query'];
    // Sử dụng LIKE để tìm kiếm các sản phẩm có từ "giày" hoặc "dép" trong tên sản phẩm
    $sql = "SELECT * FROM sanpham WHERE TenSanPham LIKE '%$search_query%' OR TenSanPham LIKE '%DÉP%'";
    $result = $conn->query($sql);

    $sanpham = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sanpham[] = $row;
        }
    }

    // Trả về dữ liệu dưới dạng JSON
    header('Content-Type: application/json');
    echo json_encode($sanpham);
}

$conn->close();
?>
