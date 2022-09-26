<form id="myForm" action="./store_comics.php" method="POST" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
            <label for="category_name">Tên loại sản phẩm</label>
            <input name="comics_name" type="text" class="form-control"placeholder="Nhập tên sản phẩm">
            <input type="file" name="comics_image">
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Thêm</button>
    </div>
</form>