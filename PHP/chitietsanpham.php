<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Thêm Font Awesome -->
</head>
<body>
   
    <!-- --------------thanh menu------------------ -->
    <nav class="navbar">
        <div class="logo">
            <a href="#">TRUONGPHAT</a>
        </div>
        <div class="right-menu">
            <ul class="menu">
                <li><a href="#">ADIDAS</a></li>
                <li><a href="#">NIKE</a></li>
                <li><a href="#">GIÀY TÂY</a></li>
                <li><a href="#">DÉP</a></li>
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
                <a href="#"id="cart-link"><i class="fas fa-shopping-cart"></i></a>
                <!-- Link đến trang giỏ hàng sẽ được chuyển đến khi nhấp vào icon giỏ hàng -->
            </div>
        </div>
    </nav>

    <script src="script.js"></script> 


<!-- -----------------------------SẢN PHẨM------------------------- -->

<div class="product-details">
    <div class="product-item" id="product-1">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/1.GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI/giay-tay-dong-hai-G01B4-den-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/1.GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI/giay-tay-dong-hai-G01B4-den-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/1.GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI\giay-tay-dong-hai-G01B4-den-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/1.GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI\giay-tay-dong-hai-G01B4-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/1.GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI\giay-tay-dong-hai-G01B4-den-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">680.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt" onclick="addToCart()">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-1">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/1.GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI/giay-tay-dong-hai-G01B4-den-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Đông Hải Hiện Đại phối viền chỉ nổi ôm chân người mang cùng thiết kế tổng thể lịch lãm cho mọi quý ông, gam màu đen trên chất liệu da cao cấp phối cùng mũi nhọn sang trọng cho mọi cuộc gặp gỡ.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>
            <script>
            let bigImg = document.querySelector('.big-img img');
            let smallImages = document.querySelectorAll('.small-img');
            let currentIndex = 0;
            
            // Hàm để hiển thị hình ảnh
            function showImg(pic) {
                bigImg.src = pic;
            }
            
            // Hàm tự động chuyển đổi hình ảnh
            function autoChangeImage() {
                currentIndex++;
                if (currentIndex >= smallImages.length) {
                    currentIndex = 0;
                }
                let src = smallImages[currentIndex].querySelector('img').src;
                showImg(src);
            }
            
            // Thực hiện chuyển đổi tự động sau mỗi khoảng thời gian (ví dụ: sau 3 giây)
            setInterval(autoChangeImage, 2000);
            </script>     
    </div>
    <div class="product-item" id="product-2">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (2)\giay-tay-zuciani-GCF42-nau-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (2)\giay-tay-zuciani-GCF42-nau-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (2)\giay-tay-zuciani-GCF42-nau-6_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani gcf42</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">720.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
            
        </div>
            <div class="product-info"id="product-info-2">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani Dáng Bucks Năng Động luôn là chọn lựa được yêu thích bởi tính đa dạng trong thiết kế, dù mang trong mình nét thanh lịch chỉn chu nhưng vẫn rất hợp gu khi mix cùng những trang phục năng động. Thiết kế dây buộc cùng các đường viền chỉ nổi tô điểm thêm chất riêng gần gũi cho bộ suit khô khan của những quý ông lịch thiệp.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-2">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 600.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
    
            </div>
    </div>
    <div class="product-item" id="product-3">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-3_9ffbe4c0-f659-4cc8-82c7-73e8a5eba178_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">GIÀY TÂY ĐÔNG HẢI - G2286 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">680.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-3">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt=""></div>
                <p>
                Giày tây Đông Hải với thiết kế không dây tiện lợi và đường may chắc chắc tạo nên nét thanh lịch cho phái mạnh. Kiểu dáng phù hợp cho mọi độ tuổi và các hoạt động hàng ngày như đi làm, đi tiệc.
                </p>
           </div> 
           <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-3">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 600.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani grd30</h4>
                        <p class="product-price">Giá: 600.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div> 
            </div>    
    </div>
    <div class="product-item" id="product-4">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-3_a74a00c5-cb82-4574-9d25-7f9d08ad0aee_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">giày tây đông hải - g2285 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">760.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-4">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt=""></div>
                <p>
                Giày tây Đông Hải với thiết kế không dây tiện lợi và đường may chắc chắc tạo nên nét thanh lịch cho phái mạnh. Kiểu dáng phù hợp cho mọi độ tuổi và các hoạt động hàng ngày như đi làm, đi tiệc.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-4">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-5">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani gcf35 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">640.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-5">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani với chất da cao cấp mềm êm bền bỉ cho trải nghiệm tuyệt vời khi di chuyển, thiết kế không dây buộc thuận tiện mang vào tháo ra cùng đường may chỉ nổi tinh tế tạo điểm nhấn sang trọng .
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-5">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (8)\giay-tay-zuciani-GCF36-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf36</h4>
                        <p class="product-price">Giá: 870.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-6">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (5)/giay-tay-zuciani-GRD39-den-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (5)/giay-tay-zuciani-GRD39-den-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (5)/giay-tay-zuciani-GRD39-den-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (5)/giay-tay-zuciani-GRD39-den-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (5)/giay-tay-zuciani-GRD39-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">680.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-6">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (5)/giay-tay-zuciani-GRD39-den-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani Derby Thắt Dây Da Dập Vân tạo sự khác biệt nổi bật đầy tinh tế, thiết kế thắt dây chỉn chu thêm phần hoàn thiện phong cách lịch lãm nam tính nhưng không kém phần trẻ trung.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-6">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-7">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (6)/giay-tay-zuciani-GCF41-den-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (6)/giay-tay-zuciani-GCF41-den-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (6)/giay-tay-zuciani-GCF41-den-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (6)/giay-tay-zuciani-GCF41-den-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (6)/giay-tay-zuciani-GCF41-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani gcf41</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">630.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-7">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (6)/giay-tay-zuciani-GCF41-den-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani Da Trơn Đế Bằng với thiết kế độc đáo, tiện lợi mang vào tháo ra, chất liệu da cao cấp mềm mại nhưng vẫn đúng form cùng đường may tinh tế tạo vẻ ngoài lịch lãm chỉnh chu.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-7">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-8">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (7)/giay-tay-zuciani-GCF37-den-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (7)/giay-tay-zuciani-GCF37-den-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (7)/giay-tay-zuciani-GCF37-den-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (7)/giay-tay-zuciani-GCF37-den-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (7)/giay-tay-zuciani-GCF37-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani gcf37</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">870.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-8">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (7)/giay-tay-zuciani-GCF37-den-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani Da Trơn Viền Chỉ mang trong mình sự chỉn chu trong từng chi tiết, thiết kế kết hợp dây quai da đồng màu tạo điểm nhấn tinh tế tôn thêm vẻ nam tính hoàn hảo đậm chất quý ông.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-8">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-9">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (8)/giay-tay-zuciani-GCF36-nau-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (8)/giay-tay-zuciani-GCF36-nau-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (8)/giay-tay-zuciani-GCF36-nau-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (8)/giay-tay-zuciani-GCF36-nau-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (8)/giay-tay-zuciani-GCF36-nau-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani gcf36</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">870.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-9">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (8)/giay-tay-zuciani-GCF36-nau-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani Mũi Nhọn Đế Vuông với chất da mềm êm thoải mái, thiết kế sang trọng tăng thêm phần tự tin trong mọi cuộc gặp gỡ, đế cao su có các rãnh chống trơn trượt an toàn khi di chuyển.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-9">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-10">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (9)\giay-tay-zuciani-GRD38-den-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (9)\giay-tay-zuciani-GRD38-den-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (9)\giay-tay-zuciani-GRD38-den-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (9)\giay-tay-zuciani-GRD38-den-4_400x.jpg" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (9)\giay-tay-zuciani-GRD38-den-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani grd38 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">850.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-10">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (9)\giay-tay-zuciani-GRD38-den-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani Slip-On Loafer Hiện Đại Sang Trọng thể hiện sự lịch lãm của những quý ông trưởng thành, chất liệu da cao cấp mềm mại bảo đảm sự êm ái trong từng bước chân. Thiết kế đơn giản hiện đại phù hợp nhiều độ tuổi và trang phục.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-10">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-11">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (11)\giay-tay-zuciani-GRD35-nau-1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (11)\giay-tay-zuciani-GRD35-nau-1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (11)\giay-tay-zuciani-GRD35-nau-3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (11)\giay-tay-zuciani-GRD35-nau-4_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (11)\giay-tay-zuciani-GRD35-nau-5_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani grd35 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">800.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-11">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (11)\giay-tay-zuciani-GRD35-nau-1_400x.webp" alt=""></div>
                <p>
                Giày Tây Nam Zuciani Derby Thắt Dây Thời Trang là mẫu giày nên có của mọi quý ông, thiết kế trơn phối chỉ cùng mũi nhọn lịch lãm đầy tinh tế nâng tầm phong cách trang phục.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-11">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-12">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_1_400x.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_1_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_2_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_3_400x.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Tây zuciani grd30</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">600.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-12">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY TÂY/New folder (22)\GRD30_Den_1_400x.webp" alt=""></div>
                <p>
                Giày tây zuciani da viền nổi ấn tượng thể hiện sự lịch lãm của những quý ông trưởng thành, chất liệu da cao cấp mềm mại bảo đảm sự êm ái trong từng bước chân. Thiết kế đơn giản hiện đại phù hợp nhiều độ tuổi và trang phục.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-12">
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (2)/giay-tay-zuciani-GCF42-nau-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày Tây zuciani gcf42</h4>
                        <p class="product-price">Giá: 720.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder/giay-tay-dong-hai-G2286-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2286</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (3)/giay-tay-dong-hai-G2285-den-1_34617821-63fe-4091-b541-8e1a24e4bfa0_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây đông hải - G2285</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY TÂY/New folder (4)/giay-tay-zuciani-GCF35-den-1_400x.webp" alt="Product Image">
                        <h4 class="product-title">Giày tây zuciani-GCF35</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-13">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005\nike-pegasus-turbo-dm3413-005-03-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005\nike-pegasus-turbo-dm3413-005-07.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005\nike-pegasus-turbo-dm3413-005-08.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Chính Hãng PEGASUS TURBO JapanSport</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">680.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-13">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt=""></div>
                <p>
                Sau những lần chạy dài với Nike PEGASUS TURBO NEXT NATURE ‘Game Royal Blue’ . Bọt nhẹ và nhạy mang lại cảm giác siêu mềm mại và giúp cung cấp năng lượng cho mỗi bước đi. Thoáng khí và an toàn, đây là một trong những đôi giày được thử nghiệm nhiều nhất của chúng tôi. Ren lên và cảm nhận tiềm năng khi chân của bạn chạm vào mặt đường.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-13">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-14">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/10.Giày Nike Nam Chính Hãng - Air Max SYSTM - Màu Đen  JapanSport DM9537-004/dm9537-004-1.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/10.Giày Nike Nam Chính Hãng - Air Max SYSTM - Màu Đen  JapanSport DM9537-004/dm9537-004-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\10.Giày Nike Nam Chính Hãng - Air Max SYSTM - Màu Đen  JapanSport DM9537-004\dm9537-004-2.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\10.Giày Nike Nam Chính Hãng - Air Max SYSTM - Màu Đen  JapanSport DM9537-004\dm9537-004-4.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\10.Giày Nike Nam Chính Hãng - Air Max SYSTM - Màu Đen  JapanSport DM9537-004\dm9537-004-5.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Chính Hãng Air Max SYSTM JapanSport  </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">720.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-14">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/10.Giày Nike Nam Chính Hãng - Air Max SYSTM - Màu Đen  JapanSport DM9537-004/dm9537-004-1.webp" alt=""></div>
                <p>
                Trông Max, cảm thấy Max. Air Max SYSTM mang lại mọi thứ bạn yêu thích về phong cách thập niên 80 yêu thích của bạn (không cần quần dù). Cặp đệm Nike Air có thể nhìn thấy được đã được thử và kiểm nghiệm với phần trên kiểu dáng đẹp, lấy cảm hứng từ thể thao. Lại là Air Max đang giao hàng nữa.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-14">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-15">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100\dunk-mid-mens-shoes-qvrhs8-3.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100\dunk-mid-mens-shoes-qvrhs8-5.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100\dunk-mid-mens-shoes-qvrhs8-4.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">510.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-15">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt=""></div>
                <p>
                Được tạo ra dành cho gỗ cứng nhưng lại được ưa chuộng trên đường phố, biểu tượng b-ball của thập niên 80 trở lại với chất liệu da sắc nét và kiểu dáng cổ điển "Panda" chặn màu. Thiết kế vòng cổ điển mang hơi hướng cổ điển của thập niên 80 trở lại đường phố trong khi cổ áo có đệm ở giữa trên tạo thêm vẻ cổ điển tạo cảm giác thoải mái. Ra đời từ hàng loạt sự kết hợp, hack và thời hạn chặt chẽ, Nike Dunk đã có mặt trên sân bóng rổ của trường đại học trong mùa giải 85–86. Trong khi các thiết kế College Colors ban đầu giúp bạn trung thành với trường học của mình thì Dunk lại không được ưa chuộng. Nhưng chính sự thiếu phổ biến của đôi giày thể thao khiêm tốn này—và đế phẳng, bám chắc—đã giúp nó nhảy khỏi đường ray để thu hút những người trượt ván. Nhiều thập kỷ sau, màu sắc được yêu thích hàng ngày này tiếp tục được sử dụng với vô số cách phối màu, chứng tỏ tầm ảnh hưởng của nó là không thể phủ nhận.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-15">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính hãng - Air Zoom Pegasus</h4>
                        <p class="product-price">Giá: 800.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-16">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600\1bd10a46-c3eb-4867-acc2-f8c4c2451e98.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600\992a4cdc-3959-4369-9eee-b3b7296d2528.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600\2794809a-9cee-4df0-8a83-70be83a6f90b.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nữ Chính Hãng Air Max INTRLK </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">760.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-16">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt=""></div>
                <p>
                Bạn phải cảm nhận được cảm giác thì mới là cảm giác. Nhập Nike Air Max INTRLK. Lớp đệm khí xếp chồng lật trang một cách thoải mái với khả năng phản hồi nhanh hơn và độ nảy hoàn hảo. Chất liệu nhẹ, dễ tạo kiểu có khả năng chống mài mòn. Hoàn thiện nó, đế ngoài lấy cảm hứng từ bánh Waffle bổ sung thêm niềm say mê thực sự của Nike.Các bộ phận Air xếp chồng lên nhau ở gót chân tạo cảm giác êm ái mà bạn có thể cảm nhận và nhìn thấy khi hoạt động. Tấm giữa các bộ phận Air và lồng nhựa hỗ trợ xung quanh cửa sổ tăng thêm sự ổn định.Hiện đại đáp ứng bền bỉ.Phần trên được giảm bớt tạo ra một cái nhìn hợp lý. Các tính năng của vải dệt giữ cho nó hiện đại trong khi lớp da không có đường may trên đường khâu giúp tăng độ bền.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-16">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính hãng - Air Zoom Pegasus</h4>
                        <p class="product-price">Giá: 800.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-17">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106\nike-air-jordan-1-mid-dq8426-106-04.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106\nike-air-jordan-1-mid-dq8426-106-06.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106\nike-air-jordan-1-mid-dq8426-106-05.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Chính Hãng - Air Jordan</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">640.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-17">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt=""></div>
                <p>
                Nike Jordan mang đến cho bạn những trải nghiệm tuyệt vời.Jordan rất phù hợp để phối đồ.Một trong những điểm cộng thú vị mà bạn không được bỏ qua đó chính là những đôi giày chính hãng Jordan rất dễ phối đồ. Rất nhiều mẫu giày được Nike Jordan thiết kế năng động, form giày đứng và có nhiều màu sắc basic. Chính vì thế, mà bạn trở nên vô cùng đẹp mắt, năng động ngay cả khi phối những món đồ đơn giản.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-17">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính hãng - Air Zoom Pegasus</h4>
                        <p class="product-price">Giá: 800.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-18">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005\nike-pegasus-turbo-dm3413-005-03-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005\nike-pegasus-turbo-dm3413-005-07.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005\nike-pegasus-turbo-dm3413-005-08.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Chính Hãng - PEGASUS TURBO</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">820.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-18">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/17.Giày Nike Nam Chính Hãng - PEGASUS TURBO - Xám  JapanSport DM3413-005/nike-pegasus-turbo-dm3413-005-01-jpeg.webp" alt=""></div>
                <p>
                Đôi giày chạy bộ nike pegasus turbo next nature là  mẫu mới của Nike lãm đồ số thêm bộ sưu tập những đôi giày chạy bộ của hãng! Với sự thừa hưởng của đôi giày đời trước là Tubo rất được mn hưởng ứng! Hiện tại Đôi giày chạy bộ nike pegasus turbo next nature rất đẹp và công năng vượt trội so với bản trước đó! Một đôi giày chạy bộ xứng đáng sở hữu trong năm 2023
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-18">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-19">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001\fb9035-001-03.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001\fb9035-001-06.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001\fb9035-001-02.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Nữ Chính Hãng Air Force </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">630.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-19">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt=""></div>
                <p>
                Các chi tiết cổ điển nâng tầm biểu tượng cho phong cách vượt thời gian, dễ mặc. Da thật và da tổng hợp sắc nét mang lại cho những chiếc AF1 này cảm giác cao cấp, trong khi logo được khâu bằng dây chuyền tạo thêm nét cổ điển. Tất nhiên, có một số điều không bao giờ thay đổi: Nike Air vẫn hỗ trợ từng bước đi của bạn.Từ những đường khâu chắc chắn, chất liệu nguyên sơ cho đến thiết kế đế lót ly, những đôi đá này mang đến phong cách bền bỉ và mịn màng hơn mặt kính sau.Được thiết kế ban đầu cho các vòng thi đấu, đệm Nike Air mang lại sự thoải mái lâu dài.Cổ áo có đệm, cắt thấp trông bóng bẩy và tạo cảm giác thoải mái.Đế ngoài bằng cao su với các vòng tròn xoay vòng di sản giúp tăng thêm lực kéo và độ bền.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-19">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính hãng - Air Zoom Pegasus</h4>
                        <p class="product-price">Giá: 800.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-20">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/31.Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt White Pink - Trắng  JapanSport CW1626-200/cw1626-200-01.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/31.Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt White Pink - Trắng  JapanSport CW1626-200/cw1626-200-01.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\31.Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt White Pink - Trắng  JapanSport CW1626-200\cw1626-200-06.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\31.Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt White Pink - Trắng  JapanSport CW1626-200\cw1626-200-03-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\31.Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt White Pink - Trắng  JapanSport CW1626-200\cw1626-200-02.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">870.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-20">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/31.Giày Nike Nam Nữ Chính Hãng - (GS) Air Max Bolt White Pink - Trắng  JapanSport CW1626-200/cw1626-200-01.webp" alt=""></div>
                <p>
                Thể hiện tình yêu với Big Air. Nike Air Max Bolt nói về bộ phận Air-Sole khổng lồ khó có thể bỏ lỡ. Ngoài ra, những cú đá hàng ngày này còn hỗ trợ và êm ái giúp bạn cảm thấy tự tin khi thi đấu.Lớp phủ lưới và da kết hợp mang lại khả năng thoáng khí và độ bền. Bộ phận Max Air và đệm xốp mềm kết hợp mang lại sự thoải mái nhẹ nhàng. Đế cao su mang lại lực kéo bền bỉ.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-20">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-21">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/12.Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3 - Màu đỏ  JapanSport DD9304-602\nike-elevate-3-basketball-dd9304-602-01.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/12.Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3 - Màu đỏ  JapanSport DD9304-602\nike-elevate-3-basketball-dd9304-602-01.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\12.Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3 - Màu đỏ  JapanSport DD9304-602\nike-elevate-3-basketball-dd9304-602-06.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\12.Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3 - Màu đỏ  JapanSport DD9304-602\nike-elevate-3-basketball-dd9304-602-02.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\12.Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3 - Màu đỏ  JapanSport DD9304-602\nike-elevate-3-basketball-dd9304-602-04.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">700.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-21">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/12.Giày Bóng rổ Nike Nam Chính Hãng - Renew Elevate 3 - Màu đỏ  JapanSport DD9304-602\nike-elevate-3-basketball-dd9304-602-01.webp" alt=""></div>
                <p>
                Gia tăng tốc độ của bạn ở cả hai đầu sân với Nike Renew Elevate 3. Được điều chỉnh cụ thể cho những người chơi 2 chiều muốn tạo ra tác động tấn công và phòng thủ, chiếc giày này giúp bạn tối ưu hóa khả năng của mình với sự hỗ trợ trong mọi trận đấu, trong mọi mùa giải và ổn định. Lực kéo và hỗ trợ vòm được cải thiện giúp tăng cường khả năng cắt và xoay, điều này có thể tạo ra sự khác biệt trong quá trình kéo dài.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-21">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-22">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/28.Giày Nike Nam Chính hãng - Air Force 1 Low - Trắng  JapanSport FJ5440-133\air-force-1-07-shoes-gcqjkk-jpeg.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/28.Giày Nike Nam Chính hãng - Air Force 1 Low - Trắng  JapanSport FJ5440-133\air-force-1-07-shoes-gcqjkk-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\28.Giày Nike Nam Chính hãng - Air Force 1 Low - Trắng  JapanSport FJ5440-133\air-force-1-07-shoes-gcqjkk-5-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\28.Giày Nike Nam Chính hãng - Air Force 1 Low - Trắng  JapanSport FJ5440-133\air-force-1-07-shoes-gcqjkk-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\28.Giày Nike Nam Chính hãng - Air Force 1 Low - Trắng  JapanSport FJ5440-133\air-force-1-07-shoes-gcqjkk-4-jpeg.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">770.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-22">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/28.Giày Nike Nam Chính hãng - Air Force 1 Low - Trắng  JapanSport FJ5440-133\air-force-1-07-shoes-gcqjkk-jpeg.webp" alt=""></div>
                <p>
                Sự rạng rỡ vẫn tồn tại trong Nike Air Force 1 LOW, biểu tượng b-ball mang đến một luồng gió mới mẻ cho những gì bạn biết rõ nhất: chất liệu dệt bền, màu sắc cổ điển và một lượng ánh sáng tinh tế giúp bạn tỏa sáng.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-22">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-23">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/30.Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER - Trắng  JapanSport DQ7558-101\9c58e443-64eb-475f-97e6-a77fa5181b83.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/30.Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER - Trắng  JapanSport DQ7558-101\9c58e443-64eb-475f-97e6-a77fa5181b83.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\30.Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER - Trắng  JapanSport DQ7558-101\32eb7576-43c2-4de9-996c-f1fe009c8263.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\30.Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER - Trắng  JapanSport DQ7558-101\10d6eb9c-5308-4365-8d4c-dd1a853d96a2.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\30.Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER - Trắng  JapanSport DQ7558-101\6360b159-8655-408c-a2e3-b0a480d1d47b.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">670.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-23">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/30.Giày Nike Nam Nữ Chính Hãng - Air Force 1 Low x UNDERCOVER - Trắng  JapanSport DQ7558-101\9c58e443-64eb-475f-97e6-a77fa5181b83.webp" alt=""></div>
                <p>
                Jun Takahashi của UNDERCOVER định nghĩa lại Lực lượng Không quân 1 bằng một bước đột phá sẵn sàng cho đường mòn. Ống bọc vải GORE-TEX không thấm nước giúp tránh điều kiện ẩm ướt, đồng thời hệ thống dây buộc toàn bộ mắt cá chân (lấy cảm hứng từ biểu tượng ACG toàn diện, Air Revaderchi) bổ sung thêm khả năng hỗ trợ. Các chi tiết tiện dụng như miếng đệm kim loại, miếng kéo ở gót chân và logo lưỡi nhựa giúp tăng thêm độ bền chắc chắn giúp đảm bảo thỏa thuận.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-23">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-24">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-06.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-04-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\NIKE\35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-05-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Nike Nam Chính hãng - Air Zoom Pegasus </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">800.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-24">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/NIKE/35.Giày Nike Nam Chính hãng - Air Zoom Pegasus 39 - XanhVàng  JapanSport DR2051-400\nike-air-zoom-pegasus-39-dr2051-400-01.webp" alt=""></div>
                <p>
                Thiết kế tràn đầy năng lượng thích hợp chạy đường dài.Chạy là một thói quen hàng ngày và bạn có thể tiến gần hơn đến mục tiêu của mình mỗi khi bước. Nike Air Zoom Pegasus 39 có thiết kế trực quan, hỗ trợ người chạy bộ rèn luyện và nâng cao tốc độ chạy bộ lên một tầm cao mới. Nhẹ hơn mu bàn chân so với Pegasus 38, hoàn hảo cho bất kỳ mùa giải nào. Nó rất thoải mái khi đeo với sự hỗ trợ tuyệt vời và giữ một cảm giác cố định. Đệm của đế và hai bộ phận Zoom Air (nhiều hơn một chiếc so với Pegasus 38) mang lại khả năng đàn hồi theo từng bước. Pegasus lâu đời đã trở lại. Bây giờ là lúc để cất cánh.Miếng đệm được thêm vào lưỡi và vòng bít giữ cho đôi chân của bạn thoải mái. Ngoài ra, một tấm lưới được chế tạo, chắc chắn và linh hoạt hơn các tấm lưới thông thường, được đặt trên toàn bộ phần trên để tạo sự thoải mái nhẹ và thoáng khí.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-24">
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/14.Giày Nike Nam Nữ Chính Hãng - Air Force 1 LV8 - Xanh  JapanSport FB9035-001/fb9035-001-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Air Force</h4>
                        <p class="product-price">Giá: 630.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/19.Giày Nike Nam Nữ Chính Hãng - Nike Dunk Mid - Đen  JapanSport FQ8784-100/dunk-mid-mens-shoes-qvrhs8-1-738837f9-0264-4a28-9382-01066189dcaa.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Nữ Chính Hãng Nike Dunk Mid</h4>
                        <p class="product-price">Giá: 510.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/38.Giày Nike Nữ Chính Hãng - Air Max INTRLK - Hồng  JapanSport DQ2904-600/8a6e9d0b-accf-498a-b52f-dd6397b5397f.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nữ Chính Hãng Air Max INTRLK</h4>
                        <p class="product-price">Giá: 760.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/NIKE/50.Giày Nike Nam Chính Hãng - Air Jordan 1 Mid - ĐỏĐen  JapanSport DQ8426-106/nike-air-jordan-1-mid-dq8426-106-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Nike Nam Chính Hãng - Air Jordan</h4>
                        <p class="product-price">Giá: 640.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-25">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s3.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s2.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s4.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Chính Hãng - 4D FWD 3 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">500.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-25">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt=""></div>
                <p>
                Bất kể bạn đang tập trung vào sải bước tiếp theo hay vạch đích cuối cùng, chạy bộ chính là quá trình tiến về phía trước. Chính vì vậy, giày chạy bộ 4DFWD 3 có thiết kế mã hóa cho chuyển động tiến bước. Đế giữa adidas 4D in 3D tiên tiến nay sử dụng kết cấu dạng lưới mới, chuyển hóa lực tác động thành chuyển động về phía trước và kết hợp với độ bám vượt trội của đế ngoài Continental™ Rubber. Thân giày sử dụng vải lưới monomesh siêu nhẹ và thoáng khí cùng cổ giày PRIMEKNIT quanh cổ chân giúp đôi chân bạn luôn thoải mái trên từng cây số.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-25">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-26">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s2.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s3.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s4.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Chính hãng - Lite Racer Rebold </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">620.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-26">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt=""></div>
                <p>
                Lấy cảm hứng từ phong cách chạy bộ, đôi giày adidas này mang đến chất thể thao cho outfit hàng ngày của bạn. Lớp đệm siêu nhẹ giúp bạn chinh phục ngày mới đầy thoải mái và luôn sẵn sàng cho bất kỳ điều gì đang chờ đón phía trước.Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-26">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD 3</h4>
                        <p class="product-price">Giá: 500.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-27">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-02.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-03.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-05.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">700.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-27">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt=""></div>
                <p>
                Dòng NMD ra mắt năm 2015 và thống lĩnh đường phố trên khắp thế giới. Đôi giày adidas NMD_R1 V3 này biến hóa dựa trên chính ý tưởng ấy, chơi đùa với hiệu ứng xuyên thấu. Còn các miếng bịt đế giữa đặc trưng mà bạn vốn rất yêu thích? Ở phiên bản này, chất liệu TPU trong mờ đưa thiết kế ấy đến với tương lai. Lớp đệm BOOST bên dưới mang đến cho bạn sự thoải mái cần thiết để chinh phục ngày mới bất chấp mọi thách thức.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-27">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD 3</h4>
                        <p class="product-price">Giá: 500.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-28">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/6.Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS - Trắng  JapanSport HP6021\398361067-793021639341242-9179150466626231635-n.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/6.Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS - Trắng  JapanSport HP6021\398361067-793021639341242-9179150466626231635-n.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\6.Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS - Trắng  JapanSport HP6021\428981368-370641115753536-8365588992788996471-n.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\6.Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS - Trắng  JapanSport HP6021\398440745-1536298690504868-8401964877590145717-n.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\6.Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS - Trắng  JapanSport HP6021\428497508-397940002884979-7162304340255117670-n.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">760.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-28">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/6.Giày Adidas Nam Chính Hãng - BRAVADA 2.0 LIFESTYLE SKATEBOARDING CANVAS - Trắng  JapanSport HP6021\398361067-793021639341242-9179150466626231635-n.webp" alt=""></div>
                <p>
                Trở lại nguyên tắc cơ bản đầu tiên. Đôi giày sneaker adidas này nổi bật nhờ sự đơn giản. Thân giày bằng vải canvas siêu nhẹ có lớp lót thoải mái. Đế ngoài dạng vulcanized, cùng phần toe cap bằng cao su gợi nhớ phong cách trượt ván. Các sản phẩm cotton của chúng tôi hỗ trợ ngành trồng bông bền vững hơn.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-28">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-29">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/11.Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE - Trắng  JapanSport GX1905\z-gx1905-02-bi5xfrfuxz.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/11.Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE - Trắng  JapanSport GX1905\z-gx1905-02-bi5xfrfuxz.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\11.Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE - Trắng  JapanSport GX1905\z-gx1905-05-n4xojui3fe.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\11.Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE - Trắng  JapanSport GX1905\z-gx1905-04-5cgnexjtlb.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\11.Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE - Trắng  JapanSport GX1905\z-gx1905-06-plza8a6yon.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">620.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-29">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/11.Giày Adidas Trẻ Em Chính Hãng - Original LA TRAINER LITE - Trắng  JapanSport GX1905\z-gx1905-02-bi5xfrfuxz.webp" alt=""></div>
                <p>
                Giày trẻ em phong cách thể thao cổ điển được làm từ một số vật liệu tái chế. Điều quan trọng nhất khi nói đến giày trẻ em là sự thoải mái. Sẽ còn tuyệt vời hơn nếu nó thật phong cách và đôi giày Adidas này làm được cả hai điều đó. Đế giữa và đế ngoài EVA nhẹ và linh hoạt, đồng thời lớp lót giày OrthoLite® mang lại sự thoải mái tuyệt vời. 3 Sọc đặc trưng và chi tiết đường viền ở một bên tạo thêm cảm giác vui tươi với mặt lốp độc đáo. Sản phẩm này là một phần trong cam kết của Adidas về một tương lai không có rác thải nhựa, với phần thân giày được làm từ hơn 50% vật liệu tái chế.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-29">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-30">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/8.Giày Adidas Chính hãng - Pureboost go Nam - Màu Đen  JapanSport EF0709\ef0709-02.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/8.Giày Adidas Chính hãng - Pureboost go Nam - Màu Đen  JapanSport EF0709\ef0709-02.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\8.Giày Adidas Chính hãng - Pureboost go Nam - Màu Đen  JapanSport EF0709\ef0709-03.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\8.Giày Adidas Chính hãng - Pureboost go Nam - Màu Đen  JapanSport EF0709\ef0709-04.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\8.Giày Adidas Chính hãng - Pureboost go Nam - Màu Đen  JapanSport EF0709\ef0709-05.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Chính hãng - Pureboost go Nam </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">700.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-30">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/8.Giày Adidas Chính hãng - Pureboost go Nam - Màu Đen  JapanSport EF0709\ef0709-02.webp" alt=""></div>
                <p>
                Được thiết kế để ứng phó với các chướng ngại vật, góc cua và mặt đường không bằng phẳng, mẫu giày chạy tự nhiên này có phần tiếp đất mở rộng và đế sau gót giúp tăng cường độ ổn định. Thân giày nhẹ bằng vải dệt kim có độ co giãn nâng đỡ sải chân tự nhiên của bạn. Công nghệ đệm lót tăng lực với phần đế ngoài mềm dẻo cho bước chạy êm ái và thoải mái.Nguồn năng lượng bất.Boost hiện là công nghệ đệm có độ bật nảy tốt nhất của adidas, cho độ chuyển hồi năng lượng cao đến khó tin: Càng dùng nhiều sức, bạn càng nhận nhiều năng lượng. Ôm tự nhiên. Miếng trợ gót dạng đúc công nghệ Fitcounter ôm tự nhiên giúp tối ưu chuyển động của gót chân
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-30">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-31">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106\z-g58106-standard-side-lateral-center-view-twuoudqdio.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106\z-g58106-standard-side-lateral-center-view-twuoudqdio.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106\z-g58106-standard-bottom-view-b07rtoypqq.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106\z-g58106-standard-top-portrait-view-enn0evahhq.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106\z-g58106-standard-front-lateral-top-view-mqmusitgaz.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">800.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-31">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/17.Giày Adidas Nam Chính hãng - FLUIDFLOW 3.0 - Xanh  JapanSport G58106\z-g58106-standard-side-lateral-center-view-twuoudqdio.webp" alt=""></div>
                <p>
                Cuộc sống không dừng lại. Giờ đây bạn cũng sẽ không cần phải đứng yên khi đã có đôi giày sneaker adidas siêu hiện đại này trong bộ sưu tập của mình. Thân giày bằng vải dệt kim mềm mại có lớp lót thoải mái, cùng đệm Bounce siêu nhẹ giúp bạn vững bước. Năng động mà tinh tế, đôi giày sneaker này đáp ứng mọi dress code.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-31">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-32">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/44.Giày Adidas Chính hãng - NMD_R1 Nam Nữ - Xanh JapanSport GW9477\nmd-r1-shoes-green-gw9477-01-standard-1.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/44.Giày Adidas Chính hãng - NMD_R1 Nam Nữ - Xanh JapanSport GW9477\nmd-r1-shoes-green-gw9477-01-standard-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\44.Giày Adidas Chính hãng - NMD_R1 Nam Nữ - Xanh JapanSport GW9477\nmd-r1-shoes-green-gw9477-03-standard-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\44.Giày Adidas Chính hãng - NMD_R1 Nam Nữ - Xanh JapanSport GW9477\nmd-r1-shoes-green-gw9477-02-standard-hover-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\44.Giày Adidas Chính hãng - NMD_R1 Nam Nữ - Xanh JapanSport GW9477\nmd-r1-shoes-green-gw9477-04-standard-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Chính hãng - NMD_R1 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">820.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-32">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/44.Giày Adidas Chính hãng - NMD_R1 Nam Nữ - Xanh JapanSport GW9477\nmd-r1-shoes-green-gw9477-01-standard-1.webp" alt=""></div>
                <p>
                Điểm giao thoa giữa hai thế giới chạy bộ và phong cách. Với đôi giày adidas NMD_R1 này, bạn sẽ có được cảm giác thoải mái vượt trội cùng phong cách có thể kết hợp với mọi outfit. Vậy nên hãy tự tin để bắt đầu khám phá. Với thân giày bằng vải dệt kim ôm chân thích ứng cùng đế giữa BOOST đàn hồi tạo đà trên từng sải bước, sẽ chẳng có gì cản được bước chân và tầm nhìn của bạn. Đế ngoài bằng cao su bám tốt trên hè phố.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-32">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-33">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/40.Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 - Xám  JapanSport HP2636\giay-joker-2-be-hp2636-01-standard (1).webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/40.Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 - Xám  JapanSport HP2636\giay-joker-2-be-hp2636-01-standard (1).webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\40.Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 - Xám  JapanSport HP2636\giay-joker-2-be-hp2636-01-standard.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\40.Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 - Xám  JapanSport HP2636\giay-joker-2-be-hp2636-02-standard-hover.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\40.Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 - Xám  JapanSport HP2636\giay-joker-2-be-hp2636-09-standard.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">720.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-33">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/40.Giày Adidas Nam Nữ Chính hãng - Alphabounce Beyond 2023 - Xám  JapanSport HP2636\giay-joker-2-be-hp2636-01-standard (1).webp" alt=""></div>
                <p>
                Tinh giản lịch trình của bạn với đôi giày đa năng. Đôi giày chạy bộ adidas này là lựa chọn dành riêng cho các bài tập bổ trợ. Giày có thiết kế ổn định để hỗ trợ chuyển động ngang, cùng lớp đệm Bounce siêu nhẹ tăng cường thoải mái và linh hoạt nhằm tạo đà cho bạn tiến bước trên các đường chạy cự ly ngắn. Thân giày bằng vải lưới có các vùng nâng đỡ và co giãn tập trung cho độ ôm chân tùy chỉnh. Sản phẩm này có sử dụng thành phần tái chế từ rác thải sản xuất, chẳng hạn như vật liệu cắt bỏ, cũng như rác thải sinh hoạt sau tiêu dùng, nhằm giảm thiểu tác động môi trường do sử dụng thành phần nguyên sinh trong sản xuất.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-33">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
              
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-34">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/34.Giày Adidas Nam Chính hãng - Alphabounce Beyond - Đen  JapanSport HQ3648\adidas-alphabounce-beyond-hq3648-01-1.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/34.Giày Adidas Nam Chính hãng - Alphabounce Beyond - Đen  JapanSport HQ3648\adidas-alphabounce-beyond-hq3648-01-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\34.Giày Adidas Nam Chính hãng - Alphabounce Beyond - Đen  JapanSport HQ3648\adidas-alphabounce-beyond-hq3648-03-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\34.Giày Adidas Nam Chính hãng - Alphabounce Beyond - Đen  JapanSport HQ3648\adidas-alphabounce-beyond-hq3648-02-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\34.Giày Adidas Nam Chính hãng - Alphabounce Beyond - Đen  JapanSport HQ3648\adidas-alphabounce-beyond-hq3648-04-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Chính hãng - Alphabounce Beyond</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">720.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-34">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/34.Giày Adidas Nam Chính hãng - Alphabounce Beyond - Đen  JapanSport HQ3648\adidas-alphabounce-beyond-hq3648-01-1.webp" alt=""></div>
                <p>
                Mẫu giày chạy được thiết kế cho các vận động viên chạy bộ muốn trở thành người xuất sắc nhất trong bộ môn của mình. Thân trên bằng lưới không đường may với các vùng tăng cường để hỗ trợ chuyển động đa chiều. Đế giữa đàn hồi hơi bè ở mũi và gót giày, tạo nền tảng rộng và ổn định trong suốt quá trình luyện sức bền. Hỗ trợ ấn định. Thân trên với công nghệ Forgedmesh ấn định được thiết kế để hỗ trợ các chuyển động thẳng và sang hai bên. Công nghệ đệm đàn hồi. Lớp đệm Bounce tăng cường sự thoải mái và linh hoạt
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-34">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-35">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-03-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-02-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-04-1.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Chính Hãng - Lite Racer Adapt </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">700.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-35">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt=""></div>
                <p>
                Phong cách hiện đại cho đường phố. Lấy cảm hứng từ phong cách giày chạy bộ, mẫu giày này có thiết kế slip-on, giống như một chiếc tất ôm sát bàn chân. Hệ thống mui giày trang trí tạo thêm dấu ấn táo bạo. Đế giữa êm ái và lớp đệm đế ngoài mang đến sự thoải mái trên từng bước chạy.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-35">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD 3</h4>
                        <p class="product-price">Giá: 500.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD</h4>
                        <p class="product-price">Giá: 820.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-36">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-04-yr4rtjohdm (1).webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-03-lrar4aq9yt.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/GIÀY\ADIDAS\18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-06-dvu46732bv.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Giày Adidas Nam Chính Hãng - 4D FWD </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">820.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-36">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/GIÀY/ADIDAS/18.Giày Adidas Nam Chính Hãng - 4D FWD - Xám  JapanSport HP3205\z-hp3205-02-lls5esevim.webp" alt=""></div>
                <p>
                adidas 4DFWD 2 tái định nghĩa chuyển động về phía trước bằng cách sử dụng công nghệ cải tiến đột phá, độc đáo tạo nên đế giữa in 3D kết hợp cùng cấu trúc thân giày mới mẻ và đế ngoài Continental cải thiện độ bám. Trong mỗi sải bước, đế giữa adidas 4DFWD 2 nén về phía trước, giảm lực hãm và chuyển hóa năng lượng tác động thành chuyển động về phía trước. Thành quả là sải bước mượt mà với ít những khoảng ngắt nghỉ hơn. Đế ngoài Continental bằng cao su tạo độ bám trên bề mặt khô ráo cũng như ẩm ướt giúp bạn vững bước trong mọi điều kiện thời tiết, cùng thân giày adidas PRIMEKNIT+ ôm chân theo cấu trúc mới giúp hỗ trợ chuyển động. Làm từ một loạt chất liệu tái chế, thân giày có chứa tối thiểu 50% thành phần tái chế. Sản phẩm này đại diện cho một trong số rất nhiều các giải pháp của chúng tôi hướng tới chấm dứt rác thải nhựa.
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-36">
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/3.Giày Adidas Chính hãng - Lite Racer Rebold - Màu xanh Navy - Nam  JapanSport GX4221\gx4221-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Chính hãng - Lite Racer Rebold</h4>
                        <p class="product-price">Giá: 620.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/4.Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3 - Trắng  JapanSport IE6670\ie6670-01.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Nữ Chính Hãng - NMD_R1 V3</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/26.Giày Adidas Nam Chính Hãng - Lite Racer Adapt 4.0 - Xanh  JapanSport GX4319\adidas-lite-racer-adapt-4-0-gx4319-01-1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - Lite Racer Adapt</h4>
                        <p class="product-price">Giá: 700.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/GIÀY/ADIDAS/1.Giày Adidas Nam Chính Hãng - 4D FWD 3 - Màu Xanh  JapanSport IG8984\ig8984-s1.webp" alt="Product Image">
                        <h4 class="product-title">Giày Adidas Nam Chính Hãng - 4D FWD 3</h4>
                        <p class="product-price">Giá: 500.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-37">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\1.Dép quai ngang - S cool EVA Slides\zen_0070__2__1c0d063eaf754abc80078606927123c2_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\1.Dép quai ngang - S cool EVA Slides\zen_0085_877eab6aea1547ffbe0a756229731d36_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\1.Dép quai ngang - S cool EVA Slides\zen_0086_d1e000ffedef407199ea8bf0b5e49c47_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - S cool EVA Slides</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">100.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-37">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt=""></div>
                <p>
                1. Quai: EVA <br> 2. Đế: EVA <br> 3. Mã sản phẩm: SES002 <br> 4. Sản phẩm chính hãng S cool <br> 5. Made in: Việt Nam
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-37">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-38">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\2.Dép quai ngang - Big boat slides\zen_0033_18be4bad9dbb4ab5993e6735bb678cc7_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\2.Dép quai ngang - Big boat slides\zen_0134_1c439c7e8c5e4bb9860f62763750003b_master.jpg" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\2.Dép quai ngang - Big boat slides\zen_0005_f352091b09654174a7c5de6e69651eee_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">GIÀY TÂY NAM ĐÔNG HẢI ÔM CHÂN HIỆN ĐẠI </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">680.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-38">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt=""></div>
                <p>
                1. Nhóm sản phẩm: dép nam, dép quai ngang nam <br> 2. Form size: true size <br> 3. Trọng lượng: 300g (1 đôi size 42-43) <br> 4. Ma sát: trên trung bình <br> 5. Thấm nước: không <br>6. Cảm giác chân: rất êm <br>7. Chất liệu quai: EVA <br>8. Chất liệu đế: EVA<br> 9. Mã sản phẩm: BBS003<br> 10. Made in China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-38">
                    <div class="product-image">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - S cool EVA Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-39">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\3.Dép cá mập - Baby Shark Slides\zen_0713_7f4a8603d4434af3af37ff1bbe4defee_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\3.Dép cá mập - Baby Shark Slides\zen_0716_c85525771140425291d57357a2407c02_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\3.Dép cá mập - Baby Shark Slides\zen_0714_9bcb36a9fece4cb09feb258343197259_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép cá mập - Baby Shark Slides</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">100.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-39">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt=""></div>
                <p>
                1. Quai: EVA <br> 2. Đế: EVA <br> 3. Mã sản phẩm: BSS004 <br> 4. Sản phẩm nhập khẩu  <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-39">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - S cool EVA Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-40">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\4.Dép quai ngang - PV Chill slides 6\zen_0309_d0813803130e461b939f69da502f7ad9_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\4.Dép quai ngang - PV Chill slides 6\zen_0311_328b43b3ea5245589e9a8ef7323d8e3d_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\4.Dép quai ngang - PV Chill slides 6\zen_0308_44d3ebee1bda4b6bae10cf5816335a17_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - PV Chill Slides 6 </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">120.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-40">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt=""></div>
                <p>
                1 Nhóm sản phẩm: dép nam nữ, dép quai ngang nam nữ <br> 2. Form size: true size <br> 3. Trọng lượng: 460g (1 đôi size 42-43) <br> 4. Ma sát: trên trung bình <br> 5. Thấm nước: không <br>6. Cảm giác chân: êm <br>7. Chất liệu quai: PVC <br>8. Chất liệu đế: PVC<br> 9. Mã sản phẩm: PVS061, PVS062, PVS063, PVS064, PVS065, PVS066, PVS067<br> 10. Made in China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-40">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - S cool EVA Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-41">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\15.Dép quai ngang - Basic Fabric strap slides 2\zen_0219_0d903e17947c4e98a09845d7a1ee7085_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\15.Dép quai ngang - Basic Fabric strap slides 2\zen_0222_45997ba692ea416c80c44a1466a13590_master.jpg" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\15.Dép quai ngang - Basic Fabric strap slides 2\zen_0220_b95ef5fe9ad04c55827165694706152a_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - Basic Fabric strap slides </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">90.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-41">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt=""></div>
                <p>
                1. Quai: Sợi tổng hợp <br> 2. Đế: Rubber <br> 3. Mã sản phẩm: BFS003 <br> 4. Sản phẩm nhập khẩu <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-41">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - S cool EVA Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-42">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/14.Dép quai ngang - Italian bread slides 3/zen_0094_d60a41286ffa48e298b15e9c61511061_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/14.Dép quai ngang - Italian bread slides 3/zen_0094_d60a41286ffa48e298b15e9c61511061_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\14.Dép quai ngang - Italian bread slides 3\zen_0097_0d83f7ee31a4438c88e8107a039142ad_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\14.Dép quai ngang - Italian bread slides 3\zen_0098_f3fbdada08254e0b907a2b6199f9e093_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\14.Dép quai ngang - Italian bread slides 3\zen_0096_ad3806e1a8334ea5af66a6b2af9a0fb9_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - Italian bread slides </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-42">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/14.Dép quai ngang - Italian bread slides 3/zen_0094_d60a41286ffa48e298b15e9c61511061_master.webp" alt=""></div>
                <p>
                1. Quai: EVA <br> 2. Đế: EVA <br> 3. Mã sản phẩm: IBS005 <br> 4. Sản phẩm nhập khẩu <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-41">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - S cool EVA Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-43">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/30.Dép quai ngang - Loaf EVA Slides 1/zen03678_3205727d54574c87b77bc0c78db886d6_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/30.Dép quai ngang - Loaf EVA Slides 1/zen03678_3205727d54574c87b77bc0c78db886d6_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\30.Dép quai ngang - Loaf EVA Slides 1\zen03683_5021c13d35ca48aca8f3e7014cbe2499_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\30.Dép quai ngang - Loaf EVA Slides 1\zen03682_da084576537e43aab8b18f447cdf2126_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\30.Dép quai ngang - Loaf EVA Slides 1\zen03681_d53983368701409ca83dbede7bd8a1d9_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - Loaf EVA Slides</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">190.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-43">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/30.Dép quai ngang - Loaf EVA Slides 1/zen03678_3205727d54574c87b77bc0c78db886d6_master.webp" alt=""></div>
                <p>
                1. Quai: EVA <br> 2. Đế: EVA <br> 3. Mã sản phẩm: LES021 <br> 4. Sản phẩm nhập khẩu <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-43">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - S cool EVA Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>     
    <div class="product-item" id="product-44">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/9.Dép quai ngang - S cool Big Rock Slides/zen_0018_ba363ad40c534203b1f9101b546f5166_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/9.Dép quai ngang - S cool Big Rock Slides/zen_0018_ba363ad40c534203b1f9101b546f5166_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\9.Dép quai ngang - S cool Big Rock Slides\zen_0021_c6785408eda4452c991d69e54af22ea3_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\9.Dép quai ngang - S cool Big Rock Slides\zen_0029_49f4be2f4ae64e77ba5f854343024f2a_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\9.Dép quai ngang - S cool Big Rock Slides\zen_0020_e818d8bb3cff40d19be02ece7490912e_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - S cool Big Rock Slides </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">300.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-44">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/9.Dép quai ngang - S cool Big Rock Slides/zen_0018_ba363ad40c534203b1f9101b546f5166_master.webp" alt=""></div>
                <p>
                1. Nhóm sản phẩm: dép nam nữ, dép quai ngang nam nữ  <br> 2. Form size: true size <br> 3. Trọng lượng: 240g (1 đôi size 42-43) <br> 4. Ma sát: trên trung bình <br> 5. Thấm nước: không <br>6. Cảm giác chân: êm <br>7. Chất liệu quai: EVA <br>8. Chất liệu đế: EVA<br> 9. Mã sản phẩm: SBS001<br> 10. Made in China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-44">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/1.Dép quai ngang - S cool EVA Slides\zen_0082_7a599104f2ab4213aca822193bff8cbc_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - S cool EVA Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    
    <div class="product-item" id="product-45">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/23.Dép quai ngang - PV Chill slides\zen_0103_5defa8a562c34d1386044334ea161c14_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/23.Dép quai ngang - PV Chill slides\zen_0103_5defa8a562c34d1386044334ea161c14_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\23.Dép quai ngang - PV Chill slides\zen_0104_feda85d3d8f042a69c286d64e3ad166a_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\23.Dép quai ngang - PV Chill slides\zen_0107_32578ffae6f7415e9881efed59ba5b3c_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\23.Dép quai ngang - PV Chill slides\zen_0105_5cdd3b63882545949a3390a871fc9816_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - PV Chill slides </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">150.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-45">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/23.Dép quai ngang - PV Chill slides\zen_0103_5defa8a562c34d1386044334ea161c14_master.webp" alt=""></div>
                <p>
                1. Quai: PVC <br> 2. Đế: PVC <br> 3. Mã sản phẩm: PVJ001 <br> 4. Sản phẩm nhập khẩu <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-45">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-46">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/24.Dép quai ngang - T-Pineapple Shortcakes slides 3\zen_0148_a03bc076f24d4bdd93ee931d8200d8fc_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/24.Dép quai ngang - T-Pineapple Shortcakes slides 3\zen_0148_a03bc076f24d4bdd93ee931d8200d8fc_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\24.Dép quai ngang - T-Pineapple Shortcakes slides 3\zen_0152_566cf668e2624a4f8e53903b14c3e9cc_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\24.Dép quai ngang - T-Pineapple Shortcakes slides 3\zen_0153_08e91d13bf5148aca234e270e9adb202_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\24.Dép quai ngang - T-Pineapple Shortcakes slides 3\zen_0151_5eb50b0be136460cb7b8aac30195309e_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - T-Pineapple Shortcakes slides </div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">150.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-46">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/24.Dép quai ngang - T-Pineapple Shortcakes slides 3\zen_0148_a03bc076f24d4bdd93ee931d8200d8fc_master.webp" alt=""></div>
                <p>
                1. Quai: EVA <br> 2. Đế: EVA <br> 3. Mã sản phẩm: TSS036 <br> 4. Sản phẩm nhập khẩu <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-46">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-47">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/25.Dép quai ngang - Basic fabric strap slides 4\zen_0008_b38e6c4eb2614b879afb62132160ae39_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/25.Dép quai ngang - Basic fabric strap slides 4\zen_0008_b38e6c4eb2614b879afb62132160ae39_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\25.Dép quai ngang - Basic fabric strap slides 4\zen_0013_3fa9efc7b69f4e60bd66e2854ef964cc_master.jpg" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\25.Dép quai ngang - Basic fabric strap slides 4\zen_0012_5efacc43d4de450fbf19b57188ad1d9e_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\25.Dép quai ngang - Basic fabric strap slides 4\zen_0011_439bc2ebced94727a5ab03aabaf4368f_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - Basic fabric strap slides 4</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">90.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-47">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/25.Dép quai ngang - Basic fabric strap slides 4\zen_0008_b38e6c4eb2614b879afb62132160ae39_master.webp" alt=""></div>
                <p>
                1. Quai: Sợi tổng hợp<br> 2. Đế: Rubber<br> 3. Mã sản phẩm: BFS042 <br> 4. Sản phẩm nhập khẩu <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-47">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
    <div class="product-item" id="product-48">
        <div class="flex-box">
            <div class="left">
                <div class="big-img">
                    <img src="../Image/DÉP/28.Dép quai ngang - Loaf EVA Slides 2\zen03694_a9abd44c47c9425abbdb0c717ba890fe_master.webp" alt="">
                </div>
                <div class="images">
                    <div class="small-img">
                        <img src="../Image/DÉP/28.Dép quai ngang - Loaf EVA Slides 2\zen03694_a9abd44c47c9425abbdb0c717ba890fe_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\28.Dép quai ngang - Loaf EVA Slides 2\zen03699_18add9e5f9704d2a81f03a2259074b05_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\28.Dép quai ngang - Loaf EVA Slides 2\zen03698_ff2fd247c8834ad18185925ae25b97ae_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                    <div class="small-img">
                        <img src="../Image/DÉP\28.Dép quai ngang - Loaf EVA Slides 2\zen03697_b0d620d8b11446afb10a3c477f12d724_master.webp" alt="" onclick="showImg(this.src)">
                    </div>
                </div>
            </div>
            
            <div class="right">
                <div class="url">TRANG CHỦ \ ADIDAS \ Giày adidas Forum Exhibit Low Off White Shadow Navy </div>
                <div class="pname">Dép quai ngang - Loaf EVA Slides 2</div>
                <div class="ratings">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">190.000đ</div>
            
                <div class="size"> 
                    <p>Kích thước:</p>
                    <div class="psize" style="border: 2px solid;">37</div>
                    <div class="psize" style="border: 2px solid;">38</div>
                    <div class="psize" style="border: 2px solid;">39</div>
                    <div class="psize" style="border: 2px solid;">40</div>
                    <div class="psize" style="border: 2px solid;">41</div>             
                </div>
                
                <div class="quantity">
                    <p>Số lượng :</p>
                    <span class="decrease" onclick="decreaseQuantity()">-</span>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <span class="increase" onclick="increaseQuantity()">+</span>
                </div>
                

                <div class="bnt-box">
                    <button class="cart-bnt">Thêm vào giỏ hàng</button>
                    <button class="buy-bnt">Mua ngay</button>
                </div>
            </div>
           
        </div> 
            <div class="product-info product-info-48">
                <h3>Mô tả sản phẩm</h3>
                <div class="description"><img src="../Image/DÉP/28.Dép quai ngang - Loaf EVA Slides 2\zen03694_a9abd44c47c9425abbdb0c717ba890fe_master.webp" alt=""></div>
                <p>
                1. Quai: EVA <br> 2. Đế: EVA <br> 3. Mã sản phẩm: LES021 <br> 4. Sản phẩm nhập khẩu <br> 5. Made in: China
                </p>
            </div>
            <div class="new-sp">
                <h3>Sản phẩm liên quan</h3>
                <div class="product" id="related-products-48">
                    <div class="product-image">
                        <img src="../Image/DÉP/2.Dép quai ngang - Big boat slides\zen_0130_554bf37e7914482b831e3ffe42470499_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Big Boat Slides</h4>
                        <p class="product-price">Giá: 150.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/3.Dép cá mập - Baby Shark Slides/zen_0711_cf04c524642b44be84840de872596801_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép cá mập - Baby Shark Slides</h4>
                        <p class="product-price">Giá: 100.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/4.Dép quai ngang - PV Chill slides 6/fefe.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - PV Chill Slides 6</h4>
                        <p class="product-price">Giá: 120.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                    <div class="product-image">
                        <img src="../Image/DÉP/15.Dép quai ngang - Basic Fabric strap slides 2/zen_0217_020af5ae68134ecc837586dbf06f832d_master.webp" alt="Product Image">
                        <h4 class="product-title">Dép quai ngang - Basic Fabric strap slides</h4>
                        <p class="product-price">Giá: 90.000đ</p>
                        <button class="btn-buy">Mua Ngay</button>
                    </div>
                </div>
        
            </div>     
    </div>
</div>
    <!-- ------ -->



    <!-- ------------------MÔ TA SẢN PHẨM------------------------------- -->
    
   
<!-- ----------------đánh giá ----------------------- -->
    <div class="review">        
        <h3>Đánh giá sản phẩm</h4>
        <div class="review-item">
            <div class="avatar"><img src="img/11.jpg" alt="Avatar"></div>
            <div class="info">
                <h4>Trần Nhật Trường</h4>
                <span class="date">Ngày Đánh Giá: 25/04/2024</span>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
                <div>
                    <p>Mọi giá cả trong bài viết này đều đề cập tới giá dự kiến của sản phẩm chính hãng. 
                        Nếu bạn có nhu cầu muốn mua một đôi giày với chất lượng tương đương và giá tốt 
                        như tại H&S Sneaker thì vui lòng đợi trong thời gian sắp tới nghe!!!</p>
                </div>
            </div>
        </div>
        <div class="review-item">
            <div class="avatar"><img src="img/11.jpg" alt="Avatar"></div>
            <div class="info">
                <h4>Trần Nhật Trường</h4>
                <span class="date">Ngày Đánh Giá: 25/04/2024</span>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
                <div>
                    <p>Mọi giá cả trong bài viết này đều đề cập tới giá dự kiến của sản phẩm chính hãng. 
                        Nếu bạn có nhu cầu muốn mua một đôi giày với chất lượng tương đương và giá tốt 
                        như tại H&S Sneaker thì vui lòng đợi trong thời gian sắp tới nghe!!!</p>
                </div>
            </div>
        </div>
        <div class="new-review">
            <button id="openReviewForm">Thêm đánh giá</button>
        </div>
        <div class="from-review">
            <form id="reviewForm" action="/submit_review" method="post" style="display: none;">
                <div class="lb-name">
                    <label  for="name">Tên của bạn:</label>
                    <input type="text" id="name" name="name">
                    <label id="lb-email" for="email">Email của bạn:</label>
                    <input type="email" id="email" name="email">
                </div>
                <br>
        
                <div id="starRating">
                    <label for="rating">Đánh giá của bạn:</label>
                    <span class="star" data-value="1">&#9733;</span>
                    <span class="star" data-value="2">&#9733;</span>
                    <span class="star" data-value="3">&#9733;</span>
                    <span class="star" data-value="4">&#9733;</span>
                    <span class="star" data-value="5">&#9733;</span>
                    <input type="hidden" id="rating" name="rating">
                </div>    
                <br>
                <div id="comment" class="comment-section">
                    <label for="comment" class="comment-label">Bình luận:</label>
                    <textarea name="comment" id="commentTextArea" rows="4" cols="50" class="comment-textarea"></textarea>
                </div>
                
                <br>
                <div class="anonymous">
                    <input type="checkbox" id="anonymous" name="anonymous" value="anonymous">
                    <label for="anonymous">Đăng ẩn danh</label>
                </div>
                <br>
                <div class="new-review">
                    <button id="openReviewForm">Gửi đánh giá</button>
                </div>
            </form>
        </div>
        
<!-- ----------------------js---------------------- -->
        <script>
            document.getElementById("openReviewForm").addEventListener("click", function() {
                document.getElementById("reviewForm").style.display = "block";
            });

            const stars = document.querySelectorAll("#starRating .star");
            const ratingInput = document.getElementById("rating");

            stars.forEach((star) => {
                star.addEventListener("click", function() {
                    const value = this.getAttribute("data-value");
                    ratingInput.value = value;

                    stars.forEach((s) => {
                        if (parseInt(s.getAttribute("data-value")) <= parseInt(value)) {
                            s.classList.add("selected");
                        } else {
                            s.classList.remove("selected");
                        }
                    });
                });
            });
        </script>
        
    </div>
<!---------------------------------sản phẩm liên quan--------------------------------------------->
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
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Lấy tham số id từ URL
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('id');

    // Nếu có id sản phẩm được chọn từ URL, chỉ hiển thị sản phẩm có id tương ứng
    if (productId) {
        const product = document.getElementById('product-' + productId);
        if (product) {
            // Ẩn tất cả các sản phẩm trước khi hiển thị sản phẩm được chọn
            const allProducts = document.querySelectorAll('.product-item');
            allProducts.forEach(function(item) {
                item.style.display = 'none';
            });
            // Hiển thị sản phẩm được chọn
            product.style.display = 'block';
        }
    }
});
</script>
<script>
    // Lấy ra các phần tử có class là "product-info"
    const productInfos = document.querySelectorAll('.product-info');

    // Duyệt qua từng phần tử và thêm id tương ứng với chỉ số của sản phẩm
    productInfos.forEach((productInfo, index) => {
        const productId = index + 1; // Tính toán id dựa trên chỉ số bắt đầu từ 1
        productInfo.id = `product-info-${productId}`; // Gán id cho phần tử
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const relatedProducts = document.querySelectorAll('.product-image');

    relatedProducts.forEach((product, index) => {
        const relatedProductId = index + 1; 
        product.id = `related-product-${relatedProductId}`; 
    });
});

</script>
<!-- JavaScript -->
<script>
function addToCart() {
    var productName = document.querySelector('.pname').textContent;
    var price = document.querySelector('.price').textContent;
    var sizeElement = document.querySelector('.psize.selected');
    var size = sizeElement ? sizeElement.textContent : ""; // Nếu sizeElement tồn tại, lấy nội dung của nó, ngược lại gán giá trị rỗng

    var quantity = parseInt(document.querySelector('.quantity-input').value);

    // Lưu thông tin sản phẩm vào Local Storage
    var product = {
        productName: productName,
        price: price,
        size: size,
        quantity: quantity
    };
    localStorage.setItem('cartProduct', JSON.stringify(product));

    // Chuyển hướng đến trang giỏ hàng và truyền thông tin sản phẩm qua URL
    window.location.href = "giohang.php";
}



</script>
</body>
</html>
