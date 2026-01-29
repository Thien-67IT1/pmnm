<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
</head>
<body>
    <h1>Đăng ký tài khoản</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('auth.checksignin') }}">
        @csrf
        <p>
            <label>Tên đăng nhập:<br>
            <input type="text" name="username" value="Nqthien" required></label>
        </p>
        <p>
            <label>Mật khẩu:<br>
            <input type="password" name="password" value="240824" required></label>
        </p>
        <p>
            <label>Nhập lại mật khẩu:<br>
            <input type="password" name="repassword" value="240824" required></label>
        </p>
        <p>
            <label>MSSV:<br>
            <input type="text" name="mssv" value="0149367" required></label>
        </p>
        <p>
            <label>Lớp:<br>
            <input type="text" name="lopmonhoc" value="67PM1" required></label>
        </p>
        <p>
            <label>Giới tính:<br>
            <select name="gioitinh" required>
                <option value="male" selected>male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select>
            </label>
        </p>

        <p><small>Ví dụ: Nqthien, 240824, 240824, 0149367, 67PM1, male</small></p>

        <p>
            <button type="submit">Sign In</button>
        </p>
    </form>

    <p><a href="{{ url('/') }}">Về trang chủ</a></p>
</body>
</html>