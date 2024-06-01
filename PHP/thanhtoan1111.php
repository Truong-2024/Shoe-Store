<?php
session_start();
require "conn.php"; // Kết nối CSDL
// Kiểm tra xem session có tồn tại không và hiển thị các giá trị từ session
$name = isset($_SESSION['fullname']) ? htmlspecialchars($_SESSION['fullname']) : "";
$phoneNumber = isset($_SESSION['sdt']) ? htmlspecialchars($_SESSION['sdt']) : "";
$diachi = isset($_SESSION['diachi']) ? htmlspecialchars($_SESSION['diachi']) : "";

// Kiểm tra giỏ hàng
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Giỏ hàng của bạn đang trống.";
    exit();
}

// Lấy danh sách sản phẩm từ giỏ hàng
// Lấy danh sách sản phẩm từ giỏ hàng
$selectedProducts = [];
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        // Kiểm tra nếu sản phẩm được chọn nằm trong giỏ hàng
        if (in_array($product['MaSanPham'], $_POST['selected_products'])) {
            $selectedProducts[] = $product;
        }
    }
}

// Tính tổng tiền
$totalPrice = 0;
foreach ($selectedProducts as $product) {
    $totalPrice += $product['Gia'] * $product['SoLuong'];
}

if ($totalPrice < 1000) {
    $shippingFee = 30;
} elseif ($totalPrice < 5000) {
    $shippingFee = 50;
} elseif ($totalPrice < 10000) {
    $shippingFee = 70;
} else {
    $shippingFee = 100;
}

// Xử lý đặt hàng khi nhấn nút "Đặt hàng"
$error_message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['place_order'])) {

    $email = "test@example.com"; // Cập nhật email phù hợp
    $thoiGianDatHang = date("Y-m-d H:i:s");
    $trangThai = "Đã đặt hàng";

    $sqlDonHang = $conn->prepare("INSERT INTO donhang (HoVaTen, Email, Sdt, DiaChi, ThoiGianDatHang, TrangThai) VALUES (?, ?, ?, ?, ?, ?)");
    $sqlDonHang->bind_param("ssssss", $namePhone, $email, $phoneNumber, $address, $thoiGianDatHang, $trangThai);

    if ($sqlDonHang->execute()) {
        $orderID = $conn->insert_id;

        // Vòng lặp foreach để thêm chi tiết đơn hàng
        $sqlChiTietDonHang = $conn->prepare("INSERT INTO chitietdonhang (MaDonHang, MaSanPham, HinhAnh, TenSanPham, Gia, Size, SoLuong, Tong) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $sqlChiTietDonHang->bind_param("iisdissd", $orderID, $maSanPham, $hinhanh, $tenSanPham, $gia, $size, $soLuong, $tong);

        foreach ($selectedProducts as $product) {
            $maSanPham = $product['MaSanPham'];
            $tenSanPham = $product['TenSanPham'];
            $gia = $product['Gia'];
            $soLuong = $product['SoLuong'];
            $tong = $gia * $soLuong;
            $hinhanh = $product['HinhAnh'];
            $size = $product['Size'];

            // In ra các giá trị để kiểm tra
            echo "Thông tin chi tiết đơn hàng: MaSanPham={$maSanPham}, TenSanPham={$tenSanPham}, Gia={$gia}, SoLuong={$soLuong}, Tong={$tong}, HinhAnh={$hinhanh}, Size={$size}<br>";

            // Thực hiện bind các tham số và thực thi câu lệnh SQL
            if (!$sqlChiTietDonHang->execute()) {
                $error_message .= "Lỗi khi thêm chi tiết đơn hàng cho sản phẩm {$maSanPham}: " . $sqlChiTietDonHang->error . "<br>";
            }
        }
        if (empty($error_message)) {
            echo "<script>alert('Đặt hàng thành công!'); window.location.href='nguoidung.php';</script>";
        }
    } else {
        $error_message = "Lỗi khi thêm đơn hàng: " . $conn->error;
    }
}

// Lưu thông tin mới từ form khi người dùng thay đổi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_name_phone']) && isset($_POST['new_address'])) {
    $_SESSION['order_info']['name'] = htmlspecialchars($_POST['new_name_phone'], ENT_QUOTES, 'UTF-8');
    $_SESSION['order_info']['phoneNumber'] = htmlspecialchars($_POST['new_phone'], ENT_QUOTES, 'UTF-8');
    $_SESSION['order_info']['address'] = htmlspecialchars($_POST['new_address'], ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/thanhtoan.css">
    <title>Thanh toán</title>
    <?php require "menu.php"; ?>
</head>
<body>
    <div class="wapper">
        <header>
            <div class="logo">
                <a href="#">
                    <p class="web-name">TRUONGPHAT</p>
                    <p class="page-name">Thanh Toán</p>
                </a>
            </div>
        </header>
        <div class="wp-content">
            <div class="wp-content1">
                <div class="diachinhanhang">
                    <div class="name-diachinhanhang">
                        <i class="fa-solid fa-location-dot"></i>
                        <h2>Địa chỉ nhận hàng</h2>
                    </div>   
                    <div class="wp-content-diachi">
                        <div class="diachi">
                            <div class="name">Họ và Tên: <?php echo $name; ?></div>
                            <div class="name">Số Điện Thoại: <?php echo $phoneNumber; ?></div>
                            <div class="name">Địa Chỉ: <?php echo $diachi; ?></div>
                        </div>
                        <form action="edit_thanhtoan.php" method="post">
                            <button class="change-info" type="submit">Thay đổi</button>
                        </form>
                    </div>

                </div>
            </div>
    
            <div class="wp-content2">
                <div class="wp-content2-heading">
                    <div class="header">
                        <div class="header-content title">
                            <h2 class="sanpham">Sản phẩm</h2>
                        </div>
                        <div class="header-content">Đơn giá</div>
                        <div class="header-content">Số lượng</div>
                        <div class="header-content">Size</div>
                        <div class="header-content thanhtien">Thành tiền</div>
                    </div>
                </div>

                <div class="wp-content2-content">
                    <?php
                    foreach ($selectedProducts as $product) {
                        $formattedPrice = number_format($product['Gia'], 3, '.', '.') . "đ";
                        $thanhTien = $product['SoLuong'] * $product['Gia'];
                        $formattedTotalPrice = number_format($thanhTien, 3, '.', '.') . "đ";
                        
                        echo "<div class='noidungsanpham'>";
                        echo "<div class='content-noidungsanpham'>";
                        echo "<div class='chitietsanpham content1-noidungsanpham'>";
                        echo "<img class='img' src='" . htmlspecialchars($product['HinhAnh'], ENT_QUOTES, 'UTF-8') . "' alt=''>";
                        echo "<span class='title-img'>" . htmlspecialchars($product['TenSanPham'], ENT_QUOTES, 'UTF-8') . "</span>";
                        echo "</div>";

                        echo "<div class='chitietsanpham'>{$formattedPrice}</div>";
                        echo "<div class='chitietsanpham'>{$product['SoLuong']}</div>";
                        echo "<div class='chitietsanpham'>{$product['Size']}</div>"; 
                        echo "<div class='chitietsanpham content2-noidungsanpham'>{$formattedTotalPrice}</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='underline'></div>";
                    }
                    ?>
                    <div class="thanhtien">
                        <div class="content-thanhtien">
                            <h3 class="title-content-thanhtien">Tổng số tiền:</h3>
                            <div class="tien"><?php echo number_format($totalPrice, 3, '.', '.'); ?> <sup>đ</sup></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wp-content3">
                <div class="phuongthucthanhtoan">
                    <div class="content-phuongthucthanhtoan"> 
                        <div class="title-phuongthucthanhtoan"><p>Phương thức thanh toán</p></div>
                        <div class="radio-phuongthucthanhtoan">
                            <form class="radiogroup" action="xuly_thanhtoan.php" method="POST">
                                <?php
                                foreach ($selectedProducts as $product) {
                                    echo "<input type='hidden' name='selected_products[]' value='" . htmlspecialchars($product['MaSanPham'], ENT_QUOTES, 'UTF-8') . "'>";
                                }
                                ?>
                                <input class="inp" name="payment_method" type="radio" value="COD" checked/><span>Thanh toán khi nhận hàng</span>
                                <input class="inp" name="payment_method" type="radio" value="Other"/><span>Khác</span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="cmt-phuongthucthanhtoan">
                    <div class="content-cmt-phuongthucthanhtoan">
                        <div class="content1-cmt-phuongthucthanhtoan">Thanh toán khi nhận hàng</div>
                        <div class="content2-cmt-phuongthucthanhtoan">
                            <div class="children-content2-cmt-phuongthucthanhtoan">
                                Phí thu hộ: 0VNĐ. Ưu đãi về phí vận chuyển (nếu có) áp dụng cả với phí thu hộ. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dathang">
                    <h3 class="content-dathang CT1 CM1">Tổng tiền hàng</h3>
                    <div class="content-dathang CT2 CM1"><?php echo number_format($totalPrice, 3, '.', '.'); ?> <sup>đ</sup></div>
                    <h3 class="content-dathang CT1 CM2">Phí vận chuyển</h3>
                    <div class="content-dathang CT2 CM2"><?php echo number_format($shippingFee, 3, '.', '.'); ?> <sup>đ</sup></div>
                    <h3 class="content-dathang CT1 CM3">Tổng thanh toán</h3>
                    <div class="content-dathang tongtien CT2 CM3"><?php echo number_format($totalPrice + $shippingFee, 3, '.', '.'); ?> <sup>đ</sup></div>
                    <div class="last-dathang">
                        <div class="content-last-dathang">
                            <div class="mota-content-last-dathang">
                                Nhấn "Đặt hàng" đồng nghĩa với việc bạn đồng ý với điều khoản của Shop
                            </div>
                        </div>
                        <!-- Form submission to processing page -->
                        <form id="paymentForm" action="" method="POST">
                            <?php
                            // Lặp qua các sản phẩm trong giỏ hàng để tạo các trường ẩn
                            foreach ($selectedProducts as $product) {
                                echo "<input type='hidden' name='selected_products[]' value='" . htmlspecialchars($product['MaSanPham'], ENT_QUOTES, 'UTF-8') . "'>";
                                echo "<input type='hidden' name='selected_images[]' value='" . htmlspecialchars($product['HinhAnh'], ENT_QUOTES, 'UTF-8') . "'>"; // Thêm ảnh
                                echo "<input type='hidden' name='selected_sizes[]' value='" . htmlspecialchars($product['Size'], ENT_QUOTES, 'UTF-8') . "'>"; // Thêm size
                            }
                            ?>
                            <input type="hidden" name="new_name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="hidden" name="new_phone" value="<?php echo htmlspecialchars($phoneNumber, ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="hidden" name="new_address" value="<?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="hidden" name="total_price" value="<?php echo $totalPrice; ?>">
                            <input type="hidden" name="shipping_fee" value="<?php echo $shippingFee; ?>">
                            <button class="btn-dathang" type="submit" name="place_order">Đặt hàng</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "footer.php"; ?> 
</body>
</html>
