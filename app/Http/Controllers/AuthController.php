<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Hiển thị form SignIn
     */
    public function SignIn()
    {
        return view('auth.signin');
    }

    /**
     * Kiểm tra dữ liệu SignIn
     */
    public function CheckSignIn(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'repassword' => 'required',
            'mssv' => 'required',
            'lopmonhoc' => 'required',
            'gioitinh' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        $mssv = $request->input('mssv');
        $lopmonhoc = $request->input('lopmonhoc');
        $gioitinh = $request->input('gioitinh');

        // Dữ liệu sinh viên mẫu để so sánh
        $sample = [
            'username' => 'Nqthien',
            'password' => '240824',
            'mssv' => '0149367',
            'lopmonhoc' => '67PM1',
            'gioitinh' => 'male',
        ];

        // Mật khẩu phải khớp
        if ($password !== $repassword) {
            return response('Đăng ký thất bại', 200);
        }

        // So sánh thông tin
        if ($username === $sample['username']
            && $password === $sample['password']
            && $mssv === $sample['mssv']
            && $lopmonhoc === $sample['lopmonhoc']
            && strtolower($gioitinh) === strtolower($sample['gioitinh'])) {
            return response('Đăng ký thành công!', 200);
        }

        return response('Đăng ký thất bại', 200);
    }
}
