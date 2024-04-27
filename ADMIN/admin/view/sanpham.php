
<script src="https://cdn.tiny.cloud/1/bv4l41wa6gocyrfx78hj2s1ry23gf9dcccm8c6fswqcfmevu/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<div class="home-admin">
    <div class="name">
        <h1>SẢN PHẨM</h1>
    </div>
    <div>
        <div class="new-product">
            <div class="bnt-new-product">
                <button id="bnt-new-product">Thêm sản phẩm</button>
            </div>
            
            <form class="formp-new-product" action="" method="post" style="display: none;">
                <div class="fill-in-new-product">
                    <input type="text" name="tendanhmuc" id="new-text-product" placeholder="Tên danh mục...">

                    <input type="text" name="tendanhmuc" id="new-text-product" placeholder="Mã sản phẩm...">

                    <input type="text" name="tendanhmuc" id="new-text-product" placeholder="Tên sản phẩm..."> <br>
                    
                    <div class="fr-new-img">
                        <form class="fr-new-img" action="/upload" method="post" enctype="multipart/form-data">
                            <label class="new-img" for="images-upload">Chọn hình ảnh:</label>
                            <input type="file" id="images-upload" name="images-upload" multiple accept="image/*">
                        </form>
                        <br>
                        <label class="price" for="">Giá:</label>
                        <input type="text" name="tendanhmuc" id="price" placeholder="Nhập giá...">
                    </div>
                    
        
                    <form id="sizeForm">
                        <div class="size-container">
                            <label class="size-label" for="">Chọn size:</label>
                            <label class="number"><input class="number" type="checkbox" name="size" value="37">37</label>
                            <label class="number"><input class="number" type="checkbox" name="size" value="38">38</label>
                            <label class="number"><input class="number" type="checkbox" name="size" value="39">39</label>
                            <label class="number"><input class="number" type="checkbox" name="size" value="40">40</label>
                            <label class="number"><input class="number" type="checkbox" name="size" value="41">41</label>
                        </div>
                    </form>
                    <div class="describe">
                        <label for="">Mô tả</label>
                    </div>
                   
                    <textarea class="new-comment"></textarea> 
                    <input type="submit" name="themmoi" id="add-new-product" value="Thêm">
                </div>
            </form>
        </div>
<script src="view/script.js"></script>
        
        
        <br>

        <div class="container">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Kích thước</th>
                    <th>Mô tả</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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