<?php
session_start();
require "conn.php"; // kết nối CSDL

// Kiểm tra nếu giỏ hàng không tồn tại hoặc rỗng, hiển thị thông báo và kết thúc script
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Giỏ hàng của bạn hiện đang trống.";
    exit();
}

// Lấy danh sách các sản phẩm đã chọn từ giỏ hàng
$selectedProducts = [];
if (isset($_POST['selected_products']) && is_array($_POST['selected_products'])) {
    foreach ($_POST['selected_products'] as $maSanPham) {
        foreach ($_SESSION['cart'] as $product) {
            if ($product['MaSanPham'] == $maSanPham) {
                $selectedProducts[] = $product;
                break;
            }
        }
    }
}

// Tính tổng tiền
$totalPrice = 0;
foreach ($selectedProducts as $product) {
    $totalPrice += $product['Gia'] * $product['SoLuong'];
}

// Tính phí vận chuyển dựa trên tổng giá trị của đơn hàng
if ($totalPrice < 1000) {
    $shippingFee = 30;
} elseif ($totalPrice < 5000) {
    $shippingFee = 50;
} elseif ($totalPrice < 10000) {
    $shippingFee = 70;
} else {
    $shippingFee = 100;
}

// Kiểm tra xem có dữ liệu tên và địa chỉ mới được gửi từ form không
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_name_phone']) && isset($_POST['new_address'])) {
    // Lưu dữ liệu mới vào session
    $_SESSION['name_phone'] = htmlspecialchars($_POST['new_name_phone'], ENT_QUOTES, 'UTF-8');
    $_SESSION['address'] = htmlspecialchars($_POST['new_address'], ENT_QUOTES, 'UTF-8');
}

$namePhone = isset($_SESSION['name_phone']) ? $_SESSION['name_phone'] : "Nguyễn Thành Phát (+84) 489316025";
$address = isset($_SESSION['address']) ? $_SESSION['address'] : "256 Đường Nguyễn Văn Cừ, phường An Hòa, quận Ninh Kiều, thành phố Cần Thơ";

// Đặt hàng khi nhấn nút "Đặt hàng"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['place_order'])) {
    // Lưu thông tin đơn hàng vào CSDL
    foreach ($selectedProducts as $product) {
        $maSanPham = $product['MaSanPham'];
        $tenSanPham = $product['TenSanPham'];
        $gia = $product['Gia'];
        $soLuong = $product['SoLuong'];
        $tong = $gia * $soLuong;
        
        // Thực hiện truy vấn INSERT vào bảng chitietdonhang
        $sql = "INSERT INTO chitietdonhang (MaDonHang, MaSanPham, TenSanPham, Gia, SoLuong, Tong) 
                VALUES ('$maDonHang', '$maSanPham', '$tenSanPham', $gia, $soLuong, $tong)";
        if ($conn->query($sql) !== TRUE) {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "<script>alert('Đặt hàng thành công!');</script>";
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
                            <div class="name-phone" id="namePhone"><?php echo $namePhone; ?></div>
                            <div class="name-diachi"><?php echo $address; ?></div>
                        </div>
                        <button class="change-info" onclick="changeInfo()">Thay đổi</button>
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
            <div class=" wp-content3">
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
                        <form id="paymentForm" action="xulythanhtoan.php" method="POST">
                            <!-- Include necessary input fields here -->
                            <input type="hidden" name="selected_products" value="<?php echo htmlspecialchars(json_encode($_SESSION['cart'])); ?>">
                            <input type="hidden" name="total_price" value="<?php echo $totalPrice; ?>">
                            <!-- Other input fields such as name, address, etc. -->
                            <button class="btn-dathang" type="button" id="placeOrderBtn">Đặt hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "footer.php"; ?>
    <script>
    // Lưu thông tin mới (tên và địa chỉ) vào localStorage khi thay đổi
    function changeInfo() {
        const choice = prompt("Chọn 'ten' để thay đổi tên và số điện thoại hoặc 'diachi' để thay đổi địa chỉ:");
        if (choice === 'ten') {
            changeNameAndPhoneNumber();
        } else if (choice === 'diachi') {
            changeAddress();
        } else {
            alert("Lựa chọn không hợp lệ.");
        }
    }

    function changeNameAndPhoneNumber() {
        const newNamePhone = prompt("Nhập tên mới và số điện thoại mới (Ví dụ: Trần Nhật 0368611471):");
        if (newNamePhone !== null && newNamePhone.trim() !== "") {
            const parts = newNamePhone.split(" ");
            const newName = parts.shift();
            const newPhoneNumber = parts.join(" ");
            localStorage.setItem("userInfo", JSON.stringify({ name: newName, phoneNumber: newPhoneNumber }));
            const namePhoneElement = document.getElementById("namePhone");
            namePhoneElement.innerText = newName + " " + newPhoneNumber;
        }
    }

    function changeAddress() {
        const newAddress = prompt("Nhập địa chỉ mới:");
        if (newAddress !== null && newAddress.trim() !== "") {
            localStorage.setItem("address", newAddress);
            const addressElement = document.querySelector(".name-diachi");
            addressElement.innerText = newAddress;
            const userInfo = JSON.parse(localStorage.getItem("userInfo"));
            if (userInfo) {
                const namePhoneElement = document.getElementById("namePhone");
                namePhoneElement.innerText = userInfo.name + " " + userInfo.phoneNumber;
            }
        }
    }

    window.onload = function() {
        const storedAddress = localStorage.getItem("address");
        if (storedAddress) {
            const addressElement = document.querySelector(".name-diachi");
            addressElement.innerText = storedAddress;
        }

        const userInfo = JSON.parse(localStorage.getItem("userInfo"));
        if (userInfo) {
            const namePhoneElement = document.getElementById("namePhone");
            namePhoneElement.innerText = userInfo.name + " " + userInfo.phoneNumber;
        }

        // Thêm sự kiện "click" cho nút "Đặt hàng"
        document.getElementById("placeOrderBtn").addEventListener("click", function() {
            // Thực hiện các xử lý khác nếu cần

            // Chuyển hướng người dùng đến trang xử lý thanh toán
            redirectToXulythanhtoanPage();
        });
    };

    function redirectToXulythanhtoanPage() {
        window.location.href = 'xulythanhtoan.php'; // Thay 'xulythanhtoan.php' bằng đường dẫn tới trang xử lý thanh toán của bạn
    }
</script>

</body>
</html>


