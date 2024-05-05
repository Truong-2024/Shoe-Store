<?php
session_start(); // Khởi động lại phiên

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['user_id'])) {
    header("location: login.php"); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
    exit;
}

// Xử lý đăng xuất
if (isset($_GET['logout'])) {
    // Xóa tất cả các biến phiên
    $_SESSION = array();

    // Hủy phiên
    session_destroy();

    // Chuyển hướng về trang đăng nhập
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../CSS/nguoidung.css">
    <link rel="stylesheet" href="../CSS/reset.css">
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

                            <li><a href="">Giày</a></li>

                            <li><a href="">Giày tây</a></li>

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

                <div class="search-container">
                    <input type="text" placeholder="Tìm kiếm...">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>

                <div class="giohang-dangnhap-dangky">
                    <a href="#"><button><i class="fa-solid fa-cart-shopping"></i></button></a>
                    <a href="#"><button><i class="fa-solid fa-user"></i></button></a>
                    <a href="login.php"><button class="logout">Đăng xuất</button></a>
                </div>
            </nav>
        </header>

        <div class="logo-body">
            <img src="../Image/LOGO/20240221_SRHDip8f.jpg" alt="">
        </div>

        <div id="wp-content">
            <!-- Giày tây -->

            <div class="headline">
                <h3>Giày Tây</h3>
            </div>

            <ul class="products">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=1" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/1.GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI/giay-tay-dong-hai-G01B4-den-1_400x.webp" alt="">
                            </a>
                            <a href="chitietsanpham.php?id=1" class="buy-now">Mua ngay</a>                            
                        </div>

                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=1" class="product-cat">Giày Tây</a>
                            <a href="chitietsanpham.php?id=1" class="product-name">GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI</a>
                            <div class="product-price">680.000đ</div> 

                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=2" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=2" class="product-cat">giày tây</a>
                            <a href="" class="product-name">Giày Tây zuciani gcf42</a>
                            <div class="product-price">720.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=3" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=3" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=3" class="product-cat">giày tây</a>
                            <a href="chitietsanpham.php?id=3" class="product-name">giày tây đông hải - G2286</a>
                            <div class="product-price">510.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=4" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=4" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=4" class="product-cat">giày tây</a>
                            <a href="chitietsanpham.php?id=4" class="product-name">giày tây đông hải - g2285</a>
                            <div class="product-price">760.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=5" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=5" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=5" class="product-cat">giày tây</a>
                            <a href="chitietsanpham.php?id=5" class="product-name">Giày Tây zuciani gcf35</a>
                            <div class="product-price">640.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=6" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (5)/giay-tay-zuciani-GRD39-den-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=6" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=6" class="product-cat">giày tây</a>
                            <a href="chitietsanpham.php?id=6" class="product-name">Giày Tây zuciani grd39</a>
                            <div class="product-price">820.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=7" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (6)/giay-tay-zuciani-GCF41-den-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=7" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=7" class="product-cat">Giày tây</a>
                            <a href="chitietsanpham.php?id=7" class="product-name">Giày Tây zuciani gcf41</a>
                            <div class="product-price">630.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=8" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (7)/giay-tay-zuciani-GCF37-den-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=8" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=8" class="product-cat">Giày tây</a>
                            <a href="chitietsanpham.php?id=8" class="product-name">Giày Tây zuciani gcf37</a>
                            <div class="product-price">870.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=9" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (8)\giay-tay-zuciani-GCF36-nau-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=9" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=9" class="product-cat">Giày tây</a>
                            <a href="chitietsanpham.php?id=9" class="product-name">Giày Tây zuciani gcf36</a>
                            <div class="product-price">870.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=10" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (9)\giay-tay-zuciani-GRD38-den-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=10" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=10" class="product-cat">Giày tây</a>
                            <a href="chitietsanpham.php?id=10" class="product-name">Giày Tây zuciani grd38</a>
                            <div class="product-price">850.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=11" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (11)\giay-tay-zuciani-GRD35-nau-1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=11" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=11" class="product-cat">Giày tây</a>
                            <a href="chitietsanpham.php?id=11" class="product-name">Giày Tây zuciani grd35</a>
                            <div class="product-price">800.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=12" class="product-thumb">
                                <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_1_400x.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=12" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=12" class="product-cat">Giày tây</a>
                            <a href="chitietsanpham.php?id=12" class="product-name">Giày Tây zuciani grd30</a>
                            <div class="product-price">600.000đ</div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- NIKE -->

            <div class="headline">
                <h3>nike</h3>
            </div>

            <ul class="products">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=13" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=13" class="buy-now">Mua ngay</a>
                        </div>

                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=13" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=13" class="product-name">Giày Nike Nam Chính Hãng PEGASUS TURBO JapanSport</a>
                            <div class="product-price">680.000đ</div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=14" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/10.Giày Nike Nam Chính Hãng - Air Max SYSTM - Màu Đen  JapanSport DM9537-004/dm9537-004-1.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=14" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=14" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=14" class="product-name">Giày Nike Nam Chính Hãng Air Max SYSTM JapanSport </a>
                            <div class="product-price">720.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=15" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=15" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=15" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=15" class="product-name">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</a>
                            <div class="product-price">510.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=16" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=16" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=16" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=16" class="product-name">Giày Nike Nữ Chính Hãng Air Max INTRLK</a>
                            <div class="product-price">760.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=17" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=17" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=17" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=17" class="product-name">Giày Nike Nam Chính Hãng - Air Jordan</a>
                            <div class="product-price">640.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=18" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=18" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=18" class="product-cat">Nike</a>
                            <a href="chitietsanpham.php?id=18" class="product-name">Giày Nike Nam Chính Hãng - PEGASUS TURBO</a>
                            <div class="product-price">820.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=19" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=19" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=19" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=19" class="product-name">Giày Nike Nam Nữ Chính Hãng Air Force</a>
                            <div class="product-price">630.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=20" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/31.Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt White Pink - Trắng  JapanSport CW1626-200/cw1626-200-01.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=20" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=20" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=20" class="product-name">Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt</a>
                            <div class="product-price">870.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=21" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/12.Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3 - Màu đỏ  JapanSport DD9304-602\nike-elevate-3-basketball-dd9304-602-01.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=21" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=21" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=21" class="product-name">Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3</a>
                            <div class="product-price">700.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=22" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/28.Giày Nike Nam Chính hãng - Air Force 1 Low - Trắng  JapanSport FJ5440-133\air-force-1-07-shoes-gcqjkk-jpeg.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=22" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=22" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=22" class="product-name">Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low</a>
                            <div class="product-price">770.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=23" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/30.Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER - Trắng  JapanSport DQ7558-101\9c58e443-64eb-475f-97e6-a77fa5181b83.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=23" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=23" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=23" class="product-name">Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER</a>
                            <div class="product-price">670.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=24" class="product-thumb">
                                <img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=24" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=24" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=24" class="product-name">Giày Nike Nam Chính hãng - Air Zoom Pegasus</a>
                            <div class="product-price">800.000đ</div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- ADIDAS -->

            <div class="headline">
                <h3>adidas</h3>
            </div>

            <ul class="products">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=25" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=25" class="buy-now">Mua ngay</a>
                        </div>

                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=25" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=25" class="product-name">Giày Adidas Nam Chính Hãng - 4D FWD 3</a>
                            <div class="product-price">500.000đ</div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=26" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=26" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=26" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=26" class="product-name">Giày Adidas Chính hãng - Lite Racer Rebold </a>
                            <div class="product-price">620.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=27" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=27" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=27" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=27" class="product-name">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</a>
                            <div class="product-price">700.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=28" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/6.Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS - Trắng  JapanSport HP6021\398361067-793021639341242-9179150466626231635-n.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=28" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=28" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=28" class="product-name">Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS</a>
                            <div class="product-price">760.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=29" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/11.Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE - Trắng  JapanSport GX1905\z-gx1905-02-bi5xfrfuxz.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=29" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=29" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=29" class="product-name">Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE</a>
                            <div class="product-price">620.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=30" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/8.Giày Adidas Chính hãng - Pureboost go Nam - Màu Đen  JapanSport EF0709\ef0709-02.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=30" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=30" class="product-cat">Nike</a>
                            <a href="chitietsanpham.php?id=30" class="product-name">Giày Adidas Chính hãng - Pureboost go Nam</a>
                            <div class="product-price">700.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=31" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106\z-g58106-standard-side-lateral-center-view-twuoudqdio.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=31" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=31" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=31" class="product-name">Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0</a>
                            <div class="product-price">800.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=32" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/44.Giày Adidas Chính hãng - NMD_R1 Nam Nữ - Xanh JapanSport GW9477\nmd-r1-shoes-green-gw9477-01-standard-1.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=32" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=32" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=32" class="product-name">Giày Adidas Chính hãng - NMD_R1</a>
                            <div class="product-price">820.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=33" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/40.Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 - Xám  JapanSport HP2636\giay-joker-2-be-hp2636-01-standard (1).webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=33" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=33" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=33" class="product-name">Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023</a>
                            <div class="product-price">720.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=34" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/34.Giày Adidas Nam Chính hãng - Alphabounce Beyond - Đen  JapanSport HQ3648\adidas-alphabounce-beyond-hq3648-01-1.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=34" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=34" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=34" class="product-name">Giày Adidas Nam Chính hãng - Alphabounce Beyond</a>
                            <div class="product-price">720.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=35" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=35" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=35" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=35" class="product-name">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</a>
                            <div class="product-price">700.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=36" class="product-thumb">
                                <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=36" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=36" class="product-cat">nike</a>
                            <a href="chitietsanpham.php?id=36" class="product-name">Giày Adidas Nam Chính Hãng - 4D FWD</a>
                            <div class="product-price">820.000đ</div>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- DÉP -->

            <div class="headline">
                <h3>Dép</h3>
            </div>

            <ul class="products">
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=37" class="product-thumb">
                                <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=37" class="buy-now">Mua ngay</a>
                        </div>

                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=37" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=37" class="product-name">Dép quai ngang - S cool EVA Slides</a>
                            <div class="product-price">100.000đ</div>
                        </div>
                    </div>
                </li>
                
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=38" class="product-thumb">
                                <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=38" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=38" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=38" class="product-name">Dép quai ngang - Big Boat Slides</a>
                            <div class="product-price">150.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=39" class="product-thumb">
                                <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=39" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=39" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=39" class="product-name">Dép cá mập - Baby Shark Slides</a>
                            <div class="product-price">100.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=40" class="product-thumb">
                                <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=40" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=40" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=40" class="product-name">Dép quai ngang - PV Chill Slides 6</a>
                            <div class="product-price">120.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=41" class="product-thumb">
                                <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=41" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=41" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=41" class="product-name">Dép quai ngang - Basic Fabric strap slides</a>
                            <div class="product-price">90.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=42" class="product-thumb">
                                <img src="../Image/DÉP/14.Dép quai ngang - Italian bread slides 3/zen_0094_d60a41286ffa48e298b15e9c61511061_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=42" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=42" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=42" class="product-name">Dép quai ngang - Italian bread slides</a>
                            <div class="product-price">200.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=43" class="product-thumb">
                                <img src="../Image/DÉP/30.Dép quai ngang - Loaf EVA Slides 1/zen03678_3205727d54574c87b77bc0c78db886d6_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=43" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=43" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=43" class="product-name">Dép quai ngang - Loaf EVA Slides</a>
                            <div class="product-price">190.000đ</div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=44" class="product-thumb">
                                <img src="../Image/DÉP/9.Dép quai ngang - S cool Big Rock Slides/zen_0018_ba363ad40c534203b1f9101b546f5166_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=44" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=44" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=44" class="product-name">Dép quai ngang - S cool Big Rock Slides</a>
                            <div class="product-price">300.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=45" class="product-thumb">
                                <img src="../Image/DÉP/23.Dép quai ngang - PV Chill slides\zen_0103_5defa8a562c34d1386044334ea161c14_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=45" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=45" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=45" class="product-name">Dép quai ngang - PV Chill slides</a>
                            <div class="product-price">150.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=46" class="product-thumb">
                                <img src="../Image/DÉP/24.Dép quai ngang - T-Pineapple Shortcakes slides 3\zen_0148_a03bc076f24d4bdd93ee931d8200d8fc_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=46" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=46" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=46" class="product-name">Dép quai ngang - T-Pineapple Shortcakes slides</a>
                            <div class="product-price">150.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=47" class="product-thumb">
                                <img src="../Image/DÉP/25.Dép quai ngang - Basic fabric strap slides 4\zen_0008_b38e6c4eb2614b879afb62132160ae39_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=47" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=47" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=47" class="product-name">Dép quai ngang - Basic fabric strap slides 4</a>
                            <div class="product-price">90.000đ</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="chitietsanpham.php?id=48" class="product-thumb">
                                <img src="../Image/DÉP/28.Dép quai ngang - Loaf EVA Slides 2\zen03694_a9abd44c47c9425abbdb0c717ba890fe_master.webp" alt="">
                            </a>

                            <a href="chitietsanpham.php?id=48" class="buy-now">Mua ngay</a>
                        </div>
                        
                        <div class="product-infor">
                            <a href="chitietsanpham.php?id=48" class="product-cat">Dép</a>
                            <a href="chitietsanpham.php?id=48" class="product-name">Dép quai ngang - Loaf EVA Slides 2</a>
                            <div class="product-price">190.000đ</div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/JS/trangchu.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var loginButton = document.querySelector(".giohang-dangnhap-dangky .login-logout");
        var registerButton = document.querySelectorAll(".giohang-dangnhap-dangky .login-logout")[1]; // Sử dụng index 1 vì nút "Đăng ký" là nút thứ hai trong danh sách
    
        loginButton.addEventListener("click", function() {
            window.location.href = "login.php"; // Chuyển hướng đến trang đăng nhập (login.php)
        });

        registerButton.addEventListener("click", function() {
            window.location.href = "signup.php"; // Chuyển hướng đến trang đăng ký (signup.php)
        });
    });
    </script>
    <script>
        $(document).ready(function(){
            //Tìm tất cả các li có sub-menu và thêm vào nó class has-child
            $('.sub-menu').parent('li').addClass('has-child');
        });
        //Cuộn trang giữ menu 
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    $("header").addClass('sticky');
                }
                else{
                    $("header").removeClass('sticky');
                 }
            });
        });  
    </script>
<script>
   // Lắng nghe sự kiện khi trang tải hoàn tất
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy tham số id từ URL
        const urlParams = new URLSearchParams(window.location.search);
        const productId = urlParams.get('id');

        // Nếu có id sản phẩm được chọn từ URL, ẩn tất cả sản phẩm khác và chỉ hiển thị sản phẩm được chọn
        if (productId) {
            const products = document.querySelectorAll('.product-item');
            products.forEach(product => {
                // Lấy id sản phẩm từ id của phần tử li
                const id = product.getAttribute('id').split('-')[1];
                if (id !== productId) {
                    product.style.display = 'none';
                }
            });
        }
    });

</script>
</body>
</html>
