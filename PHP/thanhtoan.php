<?php
session_start();
require "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selected_products']) && is_array($_POST['selected_products'])) {
    $selectedProducts = $_POST['selected_products'];
    $paymentMethod = $_POST['payment_method'];
    
    // Lưu thông tin đơn hàng vào cơ sở dữ liệu
    $maDonHang = uniqid('DH'); // Tạo mã đơn hàng duy nhất
    $tenKhachHang = isset($_SESSION['name_phone']) ? $_SESSION['name_phone'] : "Nguyễn Thành Phát";
    $diaChi = isset($_SESSION['address']) ? $_SESSION['address'] : "256 Đường Nguyễn Văn Cừ, phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ";
    
    $tongTienHang = 0;
    foreach ($selectedProducts as $maSanPham) {
        foreach ($_SESSION['cart'] as $product) {
            if ($product['MaSanPham'] == $maSanPham) {
                $tongTienHang += $product['Gia'] * $product['SoLuong'];
                // Lưu từng sản phẩm vào bảng chi tiết đơn hàng
                $sqlChiTiet = "INSERT INTO ChiTietDonHang (MaDonHang, MaSanPham, SoLuong, Gia) VALUES ('$maDonHang', '{$product['MaSanPham']}', '{$product['SoLuong']}', '{$product['Gia']}')";
                mysqli_query($conn, $sqlChiTiet);
                break;
            }
        }
    }

    // Tính phí vận chuyển
    $phiVanChuyen = 0;
    if ($tongTienHang < 1000) {
        $phiVanChuyen = 30;
    } elseif ($tongTienHang < 5000) {
        $phiVanChuyen = 50;
    } elseif ($tongTienHang < 10000) {
        $phiVanChuyen = 70;
    } else {
        $phiVanChuyen = 100;
    }
    
    $tongThanhToan = $tongTienHang + $phiVanChuyen;
    
    // Lưu thông tin đơn hàng vào bảng đơn hàng
    $sqlDonHang = "INSERT INTO DonHang (MaDonHang, TenKhachHang, DiaChi, TongTienHang, PhiVanChuyen, TongThanhToan, PhuongThucThanhToan) VALUES ('$maDonHang', '$tenKhachHang', '$diaChi', '$tongTienHang', '$phiVanChuyen', '$tongThanhToan', '$paymentMethod')";
    mysqli_query($conn, $sqlDonHang);
    
    // Chuyển hướng đến trang hóa đơn
    header("Location: hoadon.php?maDonHang=$maDonHang");
    exit();
} else {
    echo "Có lỗi xảy ra. Vui lòng thử lại.";
    exit();
}
?>
