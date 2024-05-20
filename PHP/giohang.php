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
                            <div class="name" id="name"><?php echo $name; ?></div>
                            <div class="name" id="phoneNumber"><?php echo $phoneNumber; ?></div>
                            <div class="name" id="address"><?php echo $address; ?></div>
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
    const choice = prompt("Chọn 'ten' để thay đổi tên, 'sdt' để thay đổi số điện thoại, hoặc 'diachi' để thay đổi địa chỉ:");
    if (choice === 'ten') {
        changeName();
    } else if (choice === 'sdt') {
        changePhoneNumber();
    } else if (choice === 'diachi') {
        changeAddress();
    } else {
        alert("Lựa chọn không hợp lệ.");
    }
}

function changeName() {
    const newName = prompt("Nhập tên mới:");
    if (newName !== null && newName.trim() !== "") {
        localStorage.setItem("name", newName);
        const nameElement = document.getElementById("name");
        nameElement.innerText = newName;
    }
}

function changePhoneNumber() {
    const newPhoneNumber = prompt("Nhập số điện thoại mới:");
    if (newPhoneNumber !== null && newPhoneNumber.trim() !== "") {
        localStorage.setItem("phoneNumber", newPhoneNumber);
        const phoneNumberElement = document.getElementById("phoneNumber");
        phoneNumberElement.innerText = newPhoneNumber;
    }
}

function changeAddress() {
    const newAddress = prompt("Nhập địa chỉ mới:");
    if (newAddress !== null && newAddress.trim() !== "") {
        localStorage.setItem("address", newAddress);
        const addressElement = document.getElementById("address");
        addressElement.innerText = newAddress;
    }
}

window.onload = function() {
    const storedName = localStorage.getItem("name");
    if (storedName) {
        const nameElement = document.getElementById("name");
        nameElement.innerText = storedName;
    }

    const storedPhoneNumber = localStorage.getItem("phoneNumber");
    if (storedPhoneNumber) {
        const phoneNumberElement = document.getElementById("phoneNumber");
        phoneNumberElement.innerText = storedPhoneNumber;
    }

    const storedAddress = localStorage.getItem("address");
    if (storedAddress) {
        const addressElement = document.getElementById("address");
        addressElement.innerText = storedAddress;
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
