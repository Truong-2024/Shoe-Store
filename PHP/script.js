// ---------js menu-------------
// Lấy tất cả các phần tử menu
const menuItems = document.querySelectorAll('.menu li a, .menu li a i');

// Thêm sự kiện cho mỗi phần tử menu
menuItems.forEach(item => {
    item.addEventListener('mouseover', () => {
        item.style.color = 'black'; // Thay đổi màu sắc khi di chuột vào
    });

    item.addEventListener('mouseout', () => {
        item.style.color = ''; // Trả lại màu sắc ban đầu khi chuột rời khỏi
    });
});
// ----------js size --------------
document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.psize');
    
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            buttons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
});

// --------------js số lượng------------
function decreaseQuantity() {
    var quantityInput = document.querySelector('.quantity-input');
    var currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}

function increaseQuantity() {
    var quantityInput = document.querySelector('.quantity-input');
    var currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
}

// ------------------- cuộn vầ đầu trang------------------

function scrollToTop() {
    let currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
    if (currentPosition > 0) {
        window.requestAnimationFrame(scrollToTop);
        window.scrollTo(0, currentPosition - currentPosition / 8);
    } else {
        cancelAnimationFrame(scrollToTop); // Dừng requestAnimationFrame khi đã cuộn về đầu trang
    }
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("backToTopBtn").style.display = "block";
    } else {
        document.getElementById("backToTopBtn").style.display = "none";
    }
}



// ------------------------------------------------------------

document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.psize');
    
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            buttons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            this.classList.add('active');
        });
    });

    var buyNowButtons = document.querySelectorAll('.buy-now');
    
    buyNowButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var productLink = button.getAttribute('href');
            window.location.href = productLink;
        });
    });
});

