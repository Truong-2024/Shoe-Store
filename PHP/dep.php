<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/sanpham.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Thêm Font Awesome -->
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="#">TRUONGPHAT</a>
        </div>
        <div class="right-menu">
            <ul class="menu">
                <li><a href="adidas.php">ADIDAS</a></li>
                <li><a href="nike.php">NIKE</a></li>
                <li><a href="giaytay.php">GIÀY TÂY</a></li>
                <li><a href="dep.php">DÉP</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
            </ul>
            <div class="search">
                <input type="text" placeholder="Tìm kiếm...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="account">
                <a href="#"><i class="fas fa-user"></i></a>
                <div class="account-info">
                    <!-- Thông tin đăng nhập và đăng ký sẽ hiển thị ở đây -->
                </div>
            </div>
            <div class="cart">
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <!-- Link đến trang giỏ hàng sẽ được chuyển đến khi nhấp vào icon giỏ hàng -->
            </div>
        </div>
    </nav>

    <div>
        <p>calnclasncaskn</p>
    </div>
    <!-- ---------------------------------------------------------------------------------------- -->
    <div class="new-sp">
        <a href="#"><h3>DÉP</h3></a>
        <div class="product">
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
            <div class="product-image">
                <img src="img/1.jpg" alt="Product Image">
                <h4 class="product-title">Giày adidas Forum Exhibit Low Off White Shadow Navy</h4>
                <p class="product-price">Giá: $99.99</p>
                <button class="btn-buy">Mua Ngay</button>
            </div>
        </div>
        <!-- ------phân trang--------------- -->
        <div class="pagination">
            <a href="#" class="prev">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#" class="next">&raquo;</a>
        </div>        
    </div>


    <!------------------------------------------footer------------------------------------------->

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
    <!-- ----------nút cuộn về trang đầu------ -->
    <button onclick="scrollToTop()" id="backToTopBtn" title="Go to top">
        <i class="fas fa-chevron-up"></i>
    </button>
    <script src="script.js"></script> 
</body>
</html>