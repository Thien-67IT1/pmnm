<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Trang chủ</h1>
    <nav>
        <ul>
            <li><a href="{{ route('product.index') }}">Sản phẩm</a></li>
            <li><a href="{{ route('sinhvien') }}">Giới thiệu sinh viên (mặc định)</a></li>
            <li><a href="{{ route('banco', ['n' => 8]) }}">Banco (8x8)</a></li>
        </ul>
    </nav>
</body>
</html>