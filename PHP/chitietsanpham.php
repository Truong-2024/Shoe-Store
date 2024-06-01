<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php require "menu.php"; ?>
</head>
<body>
<!-- -----------------------------SẢN PHẨM------------------------- -->
<?php
require "conn.php";
$product_ids = [];
for ($i = 1; $i <= 48; $i++) {
    $product_id = 'SP' . str_pad($i, 2, '0', STR_PAD_LEFT);
    $product_ids[] = "'" . $product_id . "'";
}

$product_ids_string = implode(',', $product_ids);
$query = "SELECT sanpham.*, danhmuc.TenDanhMuc FROM sanpham INNER JOIN danhmuc ON sanpham.MaDanhMuc = danhmuc.MaDanhMuc WHERE sanpham.MaSanPham IN ($product_ids_string)";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>  
        <div class="product-details">
            <div class="product-item" id="product-<?php echo $row['MaSanPham']; ?>">
                <div class="flex-box">
                    <div class="left">
                        <div class="big-img">
                            <img src="<?php echo $row['HinhAnh']; ?>" alt="">
                        </div>
                        <div class="images">
                            <?php
                            $queryImages = "SELECT * FROM quanlyhinhanh WHERE MaSanPham = '{$row['MaSanPham']}'";
                            $resultImages = mysqli_query($conn, $queryImages);
                            while ($rowImage = mysqli_fetch_assoc($resultImages)) {
                            ?>
                                <div class="small-img">
                                    <img src="<?php echo $rowImage['HinhAnh']; ?>" alt="" onclick="showImg(this.src)">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="right">                      
                        <div class="url">
                            <a href="nguoidung.php">TRANG CHỦ</a> \
                            <a href="danhmuc.php?category=<?php echo $row['MaDanhMuc']; ?>"><?php echo $row['TenDanhMuc']; ?></a> \
                            <a href="#" class="product-name"><?php echo $row['TenSanPham']; ?></a>
                        </div>
                        <div class="pname"><?php echo $row['TenSanPham']; ?></div>
                        <div class="ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="price"><?php echo $row['Gia']."đ </div>";?>
                        <div class="size"> 
                            <p>Kích thước:</p>
                            <div class="psize" style="border: 1px solid;" onclick="selectSize(this)">37</div>
                            <div class="psize" style="border: 1px solid;" onclick="selectSize(this)">38</div>
                            <div class="psize" style="border: 1px solid;" onclick="selectSize(this)">39</div>
                            <div class="psize" style="border: 1px solid;" onclick="selectSize(this)">40</div>
                            <div class="psize" style="border: 1px solid;" onclick="selectSize(this)">41</div>             
                        </div>
                        <div class="quantity">
                            <p>Số lượng :</p>
                            <span class="decrease">-</span>
                            <input type="text" class="quantity-input" value="1" readonly>
                            <span class="increase">+</span>
                        </div>
                        <div class="bnt-box">
                            <button class="cart-bnt" onclick="addToCart('<?php echo $row['MaSanPham']; ?>', '<?php echo $row['TenSanPham']; ?>', '<?php echo $row['Gia']; ?>', '<?php echo $row['HinhAnh']; ?>')">Thêm vào giỏ hàng</button>
                            <button class="buy-bnt">Mua ngay</button>
                        </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3>Mô tả sản phẩm</h3>
                    <div class="description">
                        <div class="img"><img src="<?php echo $row['HinhAnh']; ?>" alt=""></div>
                        <p><?php echo $row['MoTa']; ?></p>
                    </div>
                </div>
                <div class="review">
                    <h3>Đánh giá sản phẩm</h3>
                    <?php
                    // Truy vấn cơ sở dữ liệu để lấy đánh giá của sản phẩm có ID cụ thể
                    $productId = $row['MaSanPham']; // Lấy ID sản phẩm hiện tại
                    $queryReviews = "SELECT * FROM dg WHERE MaSanPham = ?";
                    $stmtReviews = mysqli_prepare($conn, $queryReviews);
                    mysqli_stmt_bind_param($stmtReviews, "s", $productId);
                    mysqli_stmt_execute($stmtReviews);
                    $resultReviews = mysqli_stmt_get_result($stmtReviews);

                    // Kiểm tra xem có đánh giá nào không
                    if(mysqli_num_rows($resultReviews) > 0) {
                        while($rowReview = mysqli_fetch_assoc($resultReviews)) {
                            // Hiển thị mỗi đánh giá
                            ?>
                            <div class="review-item">
                                <div class="avatar"><img src="img/11.jpg" alt="Avatar"></div>
                                <div class="info">
                                    <h4><?php echo $rowReview['TenNguoiDung']; ?></h4>
                                    <span class="date">Ngày Đánh Giá: <?php echo date('d/m/Y', strtotime($rowReview['NgayDanhGia'])); ?></span>
                                    <div class="rating">
                                        <?php
                                        // Hiển thị số sao dựa trên số sao lưu trong cơ sở dữ liệu
                                        // Hiển thị số sao dựa trên số sao của từng đánh giá cụ thể
                                    for($j = 1; $j <= 5; $j++) {
                                        if($j <= $rowReview['SoSao']) {
                                            echo '<span class="star" data-value="' . $j . '">&#9733;</span>';
                                        } else {
                                            echo '<span class="star" data-value="' . $j . '">&#9734;</span>';
                                        }
                                    }
                                        ?>
                                    </div>
                                    <div>
                                        <p><?php echo $rowReview['BinhLuan']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    mysqli_stmt_close($stmtReviews);
                    ?>
                    <div class="new-review">
                        <button id="openReviewForm">Thêm đánh giá</button>
                    </div>
                    <div class="from-review" id="reviewFormWrapper" style="display: none;">
                        <form id="reviewForm" action="submit_review.php" method="post">
                            <div class="lb-name">
                                <label for="name">Tên của bạn:</label>
                                <input type="text" id="name" name="name" required>
                                <label id="lb-email" for="email">Email của bạn:</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <br>
                            <div id="starRating">
                                <label for="rating">Đánh giá của bạn:</label>
                                <span class="star" data-value="1">&#9733;</span>
                                <span class="star" data-value="2">&#9733;</span>
                                <span class="star" data-value="3">&#9733;</span>
                                <span class="star" data-value="4">&#9733;</span>
                                <span class="star" data-value="5">&#9733;</span>
                                <input type="hidden" id="rating" name="rating" required>
                            </div>    
                            <br>
                            <div id="comment" class="comment-section">
                                <label for="comment" class="comment-label">Bình luận:</label>
                                <textarea type="text" name="comment" id="commentTextArea" rows="4" cols="50" class="comment-textarea" required></textarea>
                            </div>
                            <br>
                            <div class="anonymous">
                                <input type="checkbox" id="anonymous" name="anonymous" value="1">
                                <label for="anonymous">Đăng ẩn danh</label>
                            </div>
                            <br>
                            <div class="new-review">
                                <button type="submit">Gửi đánh giá</button>
                            </div>
                            <input type="hidden" name="product_id" value="<?php echo $row['MaSanPham']; ?>">
                        </form>
                    </div>
                </div>
     
                <div class="new-sp">
                    <h3>Sản phẩm liên quan</h3>
                    <div class="product">
                        <?php
                        $related_query = "SELECT * FROM sanpham WHERE MaDanhMuc = '{$row['MaDanhMuc']}' AND MaSanPham != '{$row['MaSanPham']}' LIMIT 4";
                        $related_result = mysqli_query($conn, $related_query);
                        
                        if(mysqli_num_rows($related_result) > 0) {
                            while($related_row = mysqli_fetch_assoc($related_result)) {
                                ?>
                                <div class="product-image">
                                    <img src="<?php echo $related_row['HinhAnh']; ?>" alt="Product Image">
                                    <h4 class="product-title"><?php echo $related_row['TenSanPham']; ?></h4>
                                    <p class="product-price">Giá: <?php echo $related_row['Gia']."đ </p>";?>
                                    <button class="btn-buy">Mua Ngay</button>
                                </div>
                                <?php
                            }
                        } else {
                            echo "Không có sản phẩm liên quan nào.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "Không có sản phẩm nào trong danh sách.";
}
?>
<?php require "footer.php"; ?>
<!-- -----------------------------SẢN PHẨM------------------------- -->

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
function showImg(src) {
    document.querySelector('.big-img img').src = src;
}

function selectSize(element) {
    document.querySelectorAll('.psize').forEach(function(btn) {
        btn.classList.remove('active');
    });
    element.classList.add('active');
}

function addToCart(maSanPham, tenSanPham, gia, hinhAnh) {
    const soLuong = document.querySelector('.quantity-input').value;
    const sizeElements = document.querySelectorAll('.psize');
    let size = null;
    sizeElements.forEach(el => {
        if (el.classList.contains('active')) {
            size = el.textContent;
        }
    });

    if (!size) {
        alert('Vui lòng chọn kích thước');
        return;
    }

    const formData = new FormData();
    formData.append('MaSanPham', maSanPham);
    formData.append('TenSanPham', tenSanPham);
    formData.append('Gia', gia);
    formData.append('HinhAnh', hinhAnh);
    formData.append('SoLuong', soLuong);
    formData.append('Size', size);

    fetch('add_to_cart.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        if (result.trim() === 'success') {
            alert('Sản phẩm đã được thêm vào giỏ hàng');
            // Chuyển hướng người dùng sang trang giỏ hàng
            window.location.href = 'giohang.php';
        } else {
            alert('Đã có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

document.addEventListener("DOMContentLoaded", function() {
    const sizeButtons = document.querySelectorAll('.psize');
    const quantityInput = document.querySelector('.quantity-input');
    const decreaseButtons = document.querySelectorAll('.decrease');
    const increaseButtons = document.querySelectorAll('.increase');

    if (sizeButtons) {
        sizeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                sizeButtons.forEach(function(btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
        });
    }

    if (decreaseButtons) {
        decreaseButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                let input = this.nextElementSibling;
                let quantity = parseInt(input.value);
                if (quantity > 1) {
                    quantity--;
                    input.value = quantity;
                }
            });
        });
    }

    if (increaseButtons) {
        increaseButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                let input = this.previousElementSibling;
                let quantity = parseInt(input.value);
                quantity++;
                input.value = quantity;
            });
        });
    }
});
document.getElementById('openReviewForm').addEventListener('click', function() {
    document.getElementById('reviewForm').style.display = 'block';
});

function addToCart(maSanPham, tenSanPham, gia, hinhAnh) {
    const soLuong = document.querySelector('.quantity-input').value;
    const sizeElements = document.querySelectorAll('.psize');
    let size = null;
    sizeElements.forEach(el => {
        if (el.classList.contains('active')) {
            size = el.textContent;
        }
    });

    if (!size) {
        alert('Vui lòng chọn kích thước');
        return;
    }

    const formData = new FormData();
    formData.append('MaSanPham', maSanPham);
    formData.append('TenSanPham', tenSanPham);
    formData.append('Gia', gia);
    formData.append('HinhAnh', hinhAnh);
    formData.append('SoLuong', soLuong);
    formData.append('Size', size);
    
    // Lấy giá trị số sao
    const rating = document.querySelector('#starRating .star.selected').getAttribute('data-value');
    // Thêm giá trị số sao vào form
    formData.append('rating', rating);

    fetch('submit_review.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        if (result.trim() === 'success') {
            alert('Sản phẩm đã được thêm vào giỏ hàng');
            // Chuyển hướng người dùng sang trang giỏ hàng
            window.location.href = 'giohang.php';
        } else {
            alert('Đã có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
// review.js
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            const value = parseInt(this.getAttribute('data-value'));
            const container = this.parentElement;

            // Xác định và cập nhật giá trị rating vào input ẩn trong form
            container.querySelector('input[type="hidden"]').value = value;

            // Xóa lớp 'selected' của tất cả các ngôi sao trong container
            container.querySelectorAll('.star').forEach(s => s.classList.remove('selected'));

            // Thêm lớp 'selected' cho các ngôi sao có index nhỏ hơn hoặc bằng value
            for (let i = 0; i < value; i++) {
                container.querySelectorAll('.star')[i].classList.add('selected');
            }
        });
    });

    // Thiết lập lắng nghe sự kiện submit của form đánh giá
    document.getElementById('reviewForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn chặn form gửi đi mặc định
        
        // Gửi dữ liệu form bằng AJAX
        var formData = new FormData(this);
        fetch('submit_review.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(result => {
            if (result.status === 'success') {
                // Thêm đánh giá mới vào danh sách đánh giá mà không cần tải lại trang
                const newReview = document.createElement('div');
                newReview.classList.add('review-item');
                newReview.innerHTML = `
                    <div class="avatar"><img src="img/11.jpg" alt="Avatar"></div>
                    <div class="info">
                        <h4>${formData.get('name')}</h4>
                        <span class="date">Ngày Đánh Giá: ${new Date().toLocaleDateString()}</span>
                        <div class="rating">
                            ${'&#9733;'.repeat(formData.get('rating'))}${'&#9734;'.repeat(5 - formData.get('rating'))}
                        </div>
                        <p>${formData.get('comment')}</p>
                    </div>
                `;
                document.querySelector('.review').insertBefore(newReview, document.querySelector('.new-review'));

                // Ẩn form đánh giá và làm trống các trường
                document.getElementById('reviewForm').style.display = 'none';
                document.getElementById('reviewForm').reset();

                // Hiển thị thông báo thành công
                alert(result.message);
            } else {
                // Hiển thị thông báo lỗi
                alert('Lỗi: ' + result.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Đã xảy ra lỗi khi gửi đánh giá của bạn. Vui lòng thử lại sau.');
        });
    });

    // Hiển thị form đánh giá khi bấm vào nút "Thêm đánh giá"
    document.getElementById('openReviewForm').addEventListener('click', function() {
        document.getElementById('reviewFormWrapper').style.display = 'block';
    });
});

</script>
</body>
</html>
