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
            <tr><td>100</td><td>Sample Widget</td><td>$10.00</td><td><a href="{{ route('product.show', ['id' => '100']) }}">Xem</a></td></tr>
            <tr><td>200</td><td>Another Gadget</td><td>$25.50</td><td><a href="{{ url('/product/200') }}">Xem</a></td></tr>
            <tr><td>abc-xyz</td><td>String ID Product</td><td>$7.99</td><td><a href="{{ route('product.show', ['id' => 'abc-xyz']) }}">Xem</a></td></tr>
        </tbody>
    </table>

    <!-- Add New Product button uses a named route example -->
    <p>
        <a href="{{ route('product.add') }}"><button>Thêm sản phẩm mới</button></a>
    </p>

    <p><a href="{{ route('product.show', ['id' => '123']) }}">Ví dụ: Hiển thị sản phẩm mặc định (id=123)</a></p>

    <p><a href="{{ route('home') ?? url('/') }}">Về trang chủ</a></p>
</body>
</html>