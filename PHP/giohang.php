<?php
session_start();

// Kiểm tra nếu giỏ hàng không tồn tại hoặc rỗng, hiển thị thông báo và kết thúc script
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Giỏ hàng của bạn hiện đang trống.";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../CSS/giohang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        const SERVER_URL = 'remove_from_cart.php';

        // Hàm tính toán và cập nhật tổng số sản phẩm và tổng thành tiền
        function updateSummary() {
            let totalQuantity = 0;
            let totalPrice = 0;

            document.querySelectorAll("#cart-table tbody tr").forEach(row => {
                const checkbox = row.querySelector("input[type='checkbox']");
                if (checkbox && checkbox.checked) {
                    const quantityElement = row.querySelector(".quantity");
                    const quantity = quantityElement ? parseInt(quantityElement.innerText) : 0;
                    const priceElement = row.querySelector(".price");
                    const price = priceElement ? parseFloat(priceElement.innerText.replace("đ", "").replace(/\./g, "").replace(",", ".")) : 0;
                    totalQuantity += quantity;
                    totalPrice += quantity * price;
                }
            });

            document.getElementById("total-quantity").innerText = totalQuantity;
            document.getElementById("total-price").innerText = formatCurrency(totalPrice);
            document.getElementById("final-price").innerText = formatCurrency(totalPrice);
        }

        function formatCurrency(number) {
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(number);
        }

        function addToCheckout(maSanPham) {
            updateSummary();
        }

        function removeFromCart(maSanPham) {
            fetch(SERVER_URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'MaSanPham=' + encodeURIComponent(maSanPham),
            })
            .then(response => response.text())
            .then(result => {
                if (result.trim() === 'success') {
                    alert('Sản phẩm đã được xóa khỏi giỏ hàng');
                    location.reload();
                } else {
                    alert('Đã có lỗi xảy ra khi xóa sản phẩm khỏi giỏ hàng');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        function updateQuantity(maSanPham, change) {
            const row = document.getElementById(maSanPham).closest("tr");
            const quantityElement = row.querySelector(".quantity");
            let quantity = parseInt(quantityElement.innerText) + change;

            if (quantity < 1) quantity = 1;

            quantityElement.innerText = quantity;

            const priceElement = row.querySelector(".price");
            const price = priceElement ? parseFloat(priceElement.innerText.replace("đ", "").replace(/\./g, "").replace(",", ".")) : 0;
            const totalElement = row.querySelector(".total-price");
            const total = price * quantity;
            totalElement.innerText = formatCurrency(total);

            updateSummary();
        }

        // Cập nhật số lượng sản phẩm trên biểu tượng giỏ hàng
        function updateCartIconQuantity() {
            let totalQuantity = <?php echo count($_SESSION['cart']); ?>;
            document.getElementById("total-quantity-display").innerText = totalQuantity;
        }

        document.addEventListener("DOMContentLoaded", function() {
            updateSummary();
            document.querySelectorAll("#cart-table tbody input[type='checkbox']").forEach(checkbox => {
                checkbox.addEventListener('change', updateSummary);
            });
            updateCartIconQuantity(); // Update the cart icon quantity only once when the page loads
        });
        document.addEventListener("DOMContentLoaded", function() {
        const selectAllCheckbox = document.getElementById("select-all");
        const productCheckboxes = document.querySelectorAll("#cart-table tbody input[type='checkbox']");

        selectAllCheckbox.addEventListener('change', function() {
            productCheckboxes.forEach(checkbox => {
                checkbox.checked = selectAllCheckbox.checked;
            });
            updateSummary();
        });

        productCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (!checkbox.checked) {
                    selectAllCheckbox.checked = false;
                } else if (Array.from(productCheckboxes).every(cb => cb.checked)) {
                    selectAllCheckbox.checked = true;
                }
                updateSummary();
            });
        });
        updateSummary();
        updateCartIconQuantity(); // Update the cart icon quantity only once when the page loads
    });
    </script>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="container">
                <a href="" id="logo">
                    <img src="../Image/LOGO/Remove-bg.ai_1711328789070.png" alt="">
                </a>
                <ul id="main-menu">
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Sản phẩm</a>
                        <ul class="sub-menu">
                                    <li><a href="">Giày Tây</a></li>
                                    <li><a href="">Dép</a></li>
                        </ul>
                    </li>
                    <li><a href="">Hãng</a>
                        <ul class="sub-menu">
                            <li><a href="">NIKE</a></li>
                            <li><a href="">ADIDAS</a></li>
                        </ul>
                    </li>
                    <li><a href="">Liên hệ</a></li>
                </ul>

                <form id="searchForm" action="#" method="GET">
                    <div class="search-container">
                        <input type="text" name="query" placeholder="Tìm kiếm...">
                        <button type="submit"class="pk" style="padding: 11px 11px; font-size: 12px;"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <div id="noResultsMessage" style="display: none;">Không tìm thấy sản phẩm phù hợp.</div>
                    </div>
                </form>

                <div class="giohang-dangnhap-dangky">
                    <a href="#"><button><i class="fa-solid fa-user"></i></button></a>
                    <a href="login.php"><button class="logout">logout</button></a>
                </div>
                <!-- Icon giỏ hàng -->
                <div class="cart-icon">
                    <a href="giohang.php">
                        <i class="fas fa-shopping-cart"></i>
                        <span id="total-quantity-display">0</span>
                    </a>
                </div>
            </nav>
        </header>
        <section class="cart">
            <div class="container">
                <div class="cart-content">
                    <div class="cart-content-left">
                        <table id="cart-table">
                            <thead>
                                <tr>                                    
                                    <th></th>
                                    <th>Sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Size</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($_SESSION['cart'] as $product) {
                                if (isset($product['MaSanPham'])) {
                                    $product['Gia'] = str_replace(".", "", $product['Gia']); // Chuyển đổi giá trị giá thành số
                                    $formattedPrice = number_format($product['Gia'], 0, '.', '.') . "đ"; // Định dạng lại giá trị
                                    $thanhTien = $product['SoLuong'] * $product['Gia'];
                                    $formattedTotalPrice = number_format($thanhTien, 0, '.', '.') . "đ";

                                    echo "<tr>";
                                    echo "<td><input type='checkbox' id='{$product['MaSanPham']}'></td>";
                                    echo "<td><img src='{$product['HinhAnh']}' alt='{$product['TenSanPham']}'></td>";
                                    echo "<td>{$product['TenSanPham']}</td>";
                                    echo "<td>{$product['Size']}</td>";
                                    echo "<td class='quantity-container'>
                                            <button onclick='updateQuantity(\"{$product['MaSanPham']}\", -1)'>-</button>
                                            <span class='quantity'>{$product['SoLuong']}</span>
                                            <button onclick='updateQuantity(\"{$product['MaSanPham']}\", 1)'>+</button>
                                          </td>";
                                    echo "<td class='price'>{$formattedPrice}</td>";
                                    echo "<td class='total-price'>{$formattedTotalPrice}</td>";
                                    echo "<td><button onclick='removeFromCart(\"{$product['MaSanPham']}\")'><i class='fas fa-times'></i></button></td>";
                                    echo "</tr>";
                                } else {
                                    echo "<tr><td colspan='8'>Undefined MaSanPham key in product array.</td></tr>";
                                }
                            }
                            ?>
                            </tbody>
                            <tfoot> <!-- Thêm phần tfoot để chứa nút "Chọn tất cả" -->
                                <tr>
                                    <td colspan="8"> <!-- Sử dụng colspan="8" để nút chiếm hết bề rộng của bảng -->
                                        <label class="checkbox-label" for="select-all">
                                            <input type="checkbox" id="select-all">
                                            CHỌN TẤT CẢ
                                        </label>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="cart-content-right">
                        <table>
                            <tr>
                                <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                            </tr>
                            <tr>
                                <td>TỔNG SẢN PHẨM</td>
                                <td id="total-quantity">0</td>
                            </tr>
                            <tr>
                                <td>TỔNG TIỀN HÀNG</td>
                                <td id="total-price">0</td>
                            </tr>
                            <tr>
                                <td>THÀNH TIỀN</td>
                                <td id="final-price">0</td>
                            </tr>
                        </table>
                        <div class="cart-content-right-button">
                            <form action="thanhtoan.php" method="POST">
                                <button type="submit">Thanh toán</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Thông tin</h4>
                        <ul>
                            <li><a href="#">Về chúng tôi</a></li>
                            <li><a href="#">Quy định</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>
                  
                    <div class="col-md-3">
                        <h4>Hỗ trợ</h4>
                        <ul>
                        <li><a href="#">Trung tâm trợ giúp</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div> 
        
                    <div class="col-md-3">
                        <h4>Theo dõi chúng tôi</h4>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </div>        
                      
                    <div class="col-md-3">
                        <h4>Đăng ký nhận tin</h4>
                        <p>Nhận thông tin mới nhất về sản phẩm và khuyến mãi.</p>
                        <form action="#">
                            <input type="email" placeholder="Nhập email của bạn">
                            <button type="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
