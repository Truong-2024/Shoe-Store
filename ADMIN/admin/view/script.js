// ------------------------------thêm sản phẩm---------------------------------------------------------------------------
document.getElementById("bnt-new-product").addEventListener("click", function() {
    var form = document.querySelector(".formp-new-product");
    if (form.style.display === "none") {
        form.style.display = "block";
    } else {
        form.style.display = "none";
    }
    });
// ------------------------------không cho nhập chữ vào giá---------------------------------------------------------------------------
var priceInput = document.getElementById('price');

priceInput.addEventListener('input', function() {
    var price = priceInput.value;

    var numericPrice = price.replace(/\D/g, '');

    priceInput.value = numericPrice;
});
// ------------------------------chọn size---------------------------------------------------------------------------
function getSelectedSizes() {
    var checkboxes = document.querySelectorAll('input[name="size"]:checked');
    var selectedSizes = [];
    checkboxes.forEach(function(checkbox) {
        selectedSizes.push(checkbox.value);
    });
}
// ------------------------------mô tả---------------------------------------------------------------------------
tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
    { value: 'First.Name', title: 'First Name' },
    { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
});
// ---------------------------------------------------------------------------------------------------------

var priceInput = document.getElementById("price");

    // Thêm sự kiện khi input thay đổi
    priceInput.addEventListener("input", function() {
        // Lấy giá trị hiện tại của input
        var price = parseFloat(priceInput.value);

        // Kiểm tra xem giá trị có phải là số hợp lệ không
        if (!isNaN(price)) {
            // Chuyển đổi giá trị sang định dạng VNĐ và hiển thị lại trong input
            priceInput.value = formatCurrency(price);
        }
    });

    // Hàm chuyển đổi số sang định dạng VNĐ
    function formatCurrency(amount) {
        return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
    }