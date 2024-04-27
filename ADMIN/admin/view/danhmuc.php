<div class="home-admin">
    <div class="name">
        <h1>DANH MỤC</h1>
    </div>
    <div>
        <div class="add-product">
            <div class="bnt-add">
                <button id="bnt-add">Thêm danh mục</button>
            </div>
            
            <form class="formproduct" action="" method="post" style="display: none;">
                <div class="fill-in-product">
                    <input type="text" name="tendanhmuc" id="name-product" placeholder="Tên danh mục...">
                    <input type="submit" name="themmoi" id="add" value="Thêm">
                </div>
            </form>
        </div>
    <script>
        document.getElementById("bnt-add").addEventListener("click", function() {
        var form = document.querySelector(".formproduct");
        if (form.style.display === "none") {
            form.style.display = "block";
        } else {
            form.style.display = "none";
        }
        });

    </script>
        
        
        <br>

        <div class="container">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Ưu tiên</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#">Sửa</a>
                    </td>
                    <td>
                    <a href="#">Xóa</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
