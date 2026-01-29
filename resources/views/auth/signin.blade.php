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
            <input type="text" name="username" value="{{ old('username') }}" required></label>
        </p>
        <p>
            <label>Mật khẩu:<br>
            <input type="password" name="password" required></label>
        </p>
        <p>
            <label>Nhập lại mật khẩu:<br>
            <input type="password" name="repassword" required></label>
        </p>
        <p>
            <label>MSSV:<br>
            <input type="text" name="mssv" value="{{ old('mssv') }}" required></label>
        </p>
        <p>
            <label>Lớp:<br>
            <input type="text" name="lopmonhoc" value="{{ old('lopmonhoc') }}" required></label>
        </p>
        <p>
            <label>Giới tính:<br>
            <select name="gioitinh" required>
                <option value="" disabled {{ old('gioitinh') ? '' : 'selected' }}>Chọn giới tính</option>
                <option value="male" {{ old('gioitinh') == 'male' ? 'selected' : '' }}>Nam</option>
                <option value="female" {{ old('gioitinh') == 'female' ? 'selected' : '' }}>Nữ</option>
                <option value="other" {{ old('gioitinh') == 'other' ? 'selected' : '' }}>Khác</option>
            </select>
            </label>
        </p>

        <p>
            <button type="submit">Đăng ký</button>
        </p>
    </form>

    <p><a href="{{ url('/') }}">Về trang chủ</a></p>
</body>
</html>