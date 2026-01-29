<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nhập tuổi</title>
</head>
<body>
    <h1>Nhập tuổi của bạn</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('age.store') }}">
        @csrf
        <label for="age">Tuổi:</label>
        <input type="text" id="age" name="age" value="{{ old('age') }}">
        <button type="submit">Gửi</button>
    </form>

</body>
</html>
