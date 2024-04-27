<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="../CSS/giohang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wapper">
        <header>
            <nav class="container">
                <a href="" id="logo">
                    <img src="../Image/LOGO/Remove-bg.ai_1711328789070.png" alt="">
                </a>

                <ul id="main-menu">
                    <li><a href="">Trang chủ</a></li>

                    <li><a href="">Sản phẩm</a>
                        <ul class="sub-menu">
                            <li><a href="">Menu 2.1</a>
                                <ul class="sub-menu">
                                    <li><a href="">Menu 2.2.1</a></li>
                                    <li><a href="">Menu 2.2.2</a></li>
                                    <li><a href="">Menu 2.2.3</a></li>
                                </ul>
                            </li>

                            <li><a href="">Menu 2.2</a>
                                <ul class="sub-menu">
                                    <li><a href="">Menu 2.2.1</a></li>
                                    <li><a href="">Menu 2.2.2</a></li>
                                    <li><a href="">Menu 2.2.3</a></li>
                                </ul>
                            </li>

                            <li><a href="">Menu 2.3</a>
                                <ul class="sub-menu">
                                    <li><a href="">Menu 2.2.1</a></li>
                                    <li><a href="">Menu 2.2.2</a></li>
                                    <li><a href="">Menu 2.2.3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="">Hãng</a>
                        <ul class="sub-menu">
                            <li><a href="">NIKE</a></li>
                            <li><a href="">ADIDAS</a></li>
                        </ul>
                    </li>

                    <li><a href="">Thanh toán</a></li>

                    <li><a href="">Liên hệ</a></li>
                </ul>

                <div class="search-container">
                    <input type="text" placeholder="Tìm kiếm...">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>

                <div class="giohang-dangnhap-dangky">
                    <a href="#"><button><i class="fa-solid fa-user"></i></button></a>
                    <a href="login.php"><button class="logout">Đăng xuất</button></a>
                </div>
                

            </nav>
        </header>

        <section class="cart">
            <div class="container">
                <div class="cart-content">
                    <div class="cart-content-left">
                        <table>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Size</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Xóa</th>
                            </tr>

                            <tr>
                                <td><img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984/ig8984-s1.webp" alt=""></td>
                                <td>Giày Adidas Nam Chính Hãng JapanSport</td>
                                <td><p>XL</p></td>
                                <td><input type="number" value="1" min="1"></td>
                                <td><p>490.000 <sup>đ</sup></p></td>
                                <td><span>X</span></td>
                            </tr>

                            <tr>
                                <td><img src="../Image/GIÀY/ADIDAS/17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106/z-g58106-standard-bottom-view-b07rtoypqq.webp" alt=""></td>
                                <td>Giày Adidas Nam Chính Hãng FLUIDFLOW</td>
                                <td><p>XL</p></td>
                                <td><input type="number" value="1" min="1"></td>
                                <td><p>580.000 <sup>đ</sup></p></td>
                                <td><span>X</span></td>
                            </tr>
                        </table>
                    </div>

                    <div class="cart-content-right">
                        <table>
                            <tr>
                                <th colspan="2">Tổng tiền giỏ hàng</th>
                            </tr>

                            <tr>
                                <td>Tổng sản phẩm</td>
                                <td>2</td>
                            </tr>

                            <tr>
                                <td>Tổng tiền hàng</td>
                                <td><p>1.250.000 <sup>đ</sup></p> </td>
                            </tr>

                            <tr>
                                <td>Thành tiền</td>
                                <td>1.250.000 <sup>đ</sup></td>
                            </tr>
                        </table>
                        <div class="cart-content-right-button">
                            <button>Thanh toán</button>
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