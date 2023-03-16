<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Đăng nhập
Route::get('/login', function () {
    return view('login');
});

// Trang chủ
Route::get('/', function () {
    return view('dashboard');
});

// Cấu hình
Route::get('ho-so-don-vi', function () {
    return view('CauHinh.hoSoDonVi');
});
Route::get('dinh-muc-lao-dong', function () {
    return view('CauHinh.dinhMucLaoDong');
});
Route::get('/phong-ban',[\App\Http\Controllers\Api\DepartmentController::class,'search']);

// Quản lý nhân sự

// Họp đơn vị
Route::get('giao-ban', function () {
    return view('HopDonVi.giaoBan');
});
Route::get('tong-ket-tuan', function () {
    return view('HopDonVi.tongKetTuan');
});
Route::get('tong-ket-thang', function () {
    return view('HopDonVi.tongKetThang');
});
Route::get('kho-luu-tru-bien-ban-hop', function () {
    return view('HopDonVi.khoLuuTruBienBanHop');
});
Route::get('bien-ban-hop', function () {
    return view('HopDonVi.bienBanHop');
});
Route::get('khac', function () {
    return ('Nothing');
});

// Kế hoạch & giao việc

// DWT & KPI

// Kiểm soát NV & CV
// Route::get('ke-hoach', function () {
//     return view('KeHoach_GiaoViec.keHoach');
// });
Route::get('giao-viec', function () {
    return view('KeHoach_GiaoViec.giaoViec');
});
// Xết duyệt

// Đề xuất

// VBDH

// Orther

