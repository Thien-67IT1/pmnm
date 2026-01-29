<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Banco (Bàn cờ)</title>
    <style>
        .banco { border-collapse: collapse; }
        .banco td { width: 30px; height: 30px; }
        .black { background: #333; }
        .white { background: #fff; }
    </style>
</head>
<body>
    <h1>Bàn cờ - {{ $n }} x {{ $n }}</h1>

    <table class="banco" border="1">
        @for ($i = 0; $i < $n; $i++)
            <tr>
                @for ($j = 0; $j < $n; $j++)
                    <td class="{{ ($i + $j) % 2 === 0 ? 'black' : 'white' }}"></td>
                @endfor
            </tr>
        @endfor
    </table>

    <p><a href="{{ url('/') }}">Về trang chủ</a></p>
</body>
</html>