<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Tuyến web
|--------------------------------------------------------------------------
*/

// Tuyến trang chủ
Route::get('/', function () {
    return view('home'); // "/" trả về view trang chủ
})->name('home');

// Các tuyến sản phẩm nhóm dưới /product
Route::prefix('product')->group(function () {

    // Liệt kê sản phẩm mẫu và bao gồm nút "Thêm sản phẩm mới" sử dụng route đã đặt tên
    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    // Hiển thị form thêm
    Route::get('add', function () {
        return view('product.add');
    })->name('product.add'); // Ví dụ đặt tên route: 'product.add'

    // Hiển thị sản phẩm theo id (kiểu chuỗi, mặc định '123')
    Route::get('{id?}', function ($id = '123') {
        return view('product.show', ['id' => $id]);
    })->where('id', '.*')->name('product.show');
});

// Tuyến giới thiệu sinh viên với giá trị mặc định
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Luong Xuan Hieu', $mssv = '123456') {
    return view('sinhvien', compact('name', 'mssv'));
})->name('sinhvien');

// Tuyến bàn cờ Banco
Route::get('/banco/{n}', function ($n) {
    $n = (int) $n;
    if ($n < 1) $n = 8;
    return view('banco', compact('n'));
})->where('n', '[0-9]+')->name('banco');

// Tuyến đăng ký/đăng nhập
Route::get('/signin', [AuthController::class, 'SignIn'])->name('signin');
Route::post('/signin', [AuthController::class, 'CheckSignIn'])->name('auth.checksignin');

// Tuyến fallback cho 404 - trả về view error.404
Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
