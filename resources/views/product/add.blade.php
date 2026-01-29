<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>

    <form method="POST" action="#">
        @csrf
        <p>
            <label>Tên:<br>
            <input type="text" name="name" required></label>
        </p>
        <p>
            <label>Giá:<br>
            <input type="text" name="price" required></label>
        </p>
        <p>
            <button type="submit">Lưu</button>
            <a href="{{ route('product.index') }}"><button type="button">Hủy</button></a>
        </p>
    </form>

</body>
</html>