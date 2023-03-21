<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\KeyController;
use App\Http\Controllers\Api\TargetController;
use App\Http\Controllers\Api\TargetDetailController;
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
Route::post('/login', [AuthController::class, 'login']);


// Trang chủ
Route::get('/', function () {
    return view('dashboard');
})->middleware('auth.role:user,admin,manager');

// Cấu hình
Route::get('ho-so-don-vi', function () {
    return view('CauHinh.hoSoDonVi');
});
Route::get('danh-sach-phong-ban', function () {
    return view('CauHinh.danhSachPhongBan');
});
Route::get('danh-sach-vi-tri', function () {
    return view('CauHinh.danhSachViTri');
});
Route::get('danh-sach-thanh-vien', function () {
    return view('CauHinh.danhSachThanhVien');
});


Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('/phong-ban', [\App\Http\Controllers\Api\DepartmentController::class, 'search']);
    Route::post('/phong-ban', [\App\Http\Controllers\Api\DepartmentController::class, 'create']);
    Route::get('/phong-ban', [\App\Http\Controllers\Api\DepartmentController::class, 'index']);
    Route::put('/phong-ban/{id}', [\App\Http\Controllers\Api\DepartmentController::class, 'update']);
});

//kpi key
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-chi-so-key', [KeyController::class, 'index']);
    Route::post('danh-muc-chi-so-key', [KeyController::class, 'store']);
    Route::put('danh-muc-chi-so-key/{id}', [KeyController::class, 'update']);
    Route::delete('danh-muc-chi-so-key/{id}', [KeyController::class, 'delete']);

});

//target => danh muc dinh muc

Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-dinh-muc', [TargetController::class, 'index']);
    Route::post('danh-muc-dinh-muc', [TargetController::class, 'store']);
    Route::put('danh-muc-dinh-muc/{id}', [TargetController::class, 'update']);
    Route::delete('danh-muc-dinh-muc/{id}', [TargetController::class, 'delete']);
});

//target detail => danh muc nhiem vu

Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-nhiem-vu', [TargetDetailController::class, 'index']);
    Route::post('danh-muc-nhiem-vu', [TargetDetailController::class, 'store']);
    Route::put('danh-muc-nhiem-vu/{id}', [TargetDetailController::class, 'update']);
    Route::delete('danh-muc-nhiem-vu/{id}', [TargetDetailController::class, 'delete']);
});








// Route::get('dinh-muc-lao-dong', function () {
//     return view('CauHinh.dinhMucLaoDong');
// });
// Route::get('danh-muc-dinh-muc', function () {
//     return view('CauHinh.danhMucDinhMuc');
// });
// Route::get('danh-muc-nhiem-vu', function () {
//     return view('CauHinh.danhMucNhiemVu');
// });



Route::get('/phong-ban', [\App\Http\Controllers\Api\DepartmentController::class, 'search']);


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
Route::get('su-co-phat-sinh', function () {
    return view('HopDonVi.suCoPhatSinh');
});
Route::get('quan-ly-nhan-su', function () {
    return view('HopDonVi.quanLyNhanSu');
});
Route::get('ho-so-nhan-vien', function () {
    return view('HopDonVi.hoSoNhanVien');
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
// Route::get('thong-tin-ca-nhan', function () {
//     return view('page.information');
// });
Route::get('kpi-nhan-vien', function () {
    return view('page.staff.kpiStaff');
});


// Trang Dịch vụ Bán Hàng
Route::get('dich-vu-ban-hang', function () {
    return view('page.sell.serviceSell');
});

// Trang Kế Toán
Route::get('ke-toan', function () {
    return view('page.sell.ketoan');
});

// Trang kinh doanh
Route::get('kinh-doanh', function () {
    return view('page.sell.kinhdoanh');
});
