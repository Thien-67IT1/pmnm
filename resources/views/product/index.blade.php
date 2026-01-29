<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Sản phẩm</title>
</head>
<body>
    <h1>Sản phẩm</h1>

    <!-- Sample products fixed directly in HTML -->
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr><th>ID</th><th>Tên</th><th>Giá</th><th>Hành động</th></tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Áo</td><td>1.000.000 ₫</td><td><a href="{{ route('product.show', ['id' => '1']) }}">Xem</a></td></tr>
            <tr><td>2</td><td>Quần</td><td>200.000 ₫</td><td><a href="{{ route('product.show', ['id' => '2']) }}">Xem</a></td></tr>
            <tr><td>3</td><td>Mũ</td><td>50.000 ₫</td><td><a href="{{ route('product.show', ['id' => '3']) }}">Xem</a></td></tr>
        </tbody>
    </table>

    <!-- Add New Product button uses a named route example -->
    <p>
        <a href="{{ route('product.add') }}"><button>Thêm sản phẩm mới</button></a>
    </p>

    <p><a href="{{ route('home') ?? url('/') }}">Về trang chủ</a></p>
</body>
</html>