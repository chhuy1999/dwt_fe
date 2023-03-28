<?php

use App\Http\Controllers\Api\AssignTaskController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\KeyController;
use App\Http\Controllers\Api\TargetController;
use App\Http\Controllers\Api\TargetDetailController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\ReportsController;
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
Route::get('/', [DashboardController::class, 'index'])->middleware('auth.role:user,admin,manager');

// Cấu hình
// Route::get('ho-so-don-vi', function () {
//     return view('CauHinh.hoSoDonVi');
// });
// Route::get('danh-sach-phong-ban', function () {
//     return view('CauHinh.danhSachPhongBan');
// });
// Route::get('danh-sach-vi-tri', function () {
//     return view('CauHinh.danhSachViTri');
// });
// Route::get('danh-sach-thanh-vien', function () {
//     return view('CauHinh.danhSachThanhVien');
// });



// user => danh sách thành viên
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('danh-sach-thanh-vien', [UsersController::class, 'index']);
    Route::post('danh-sach-thanh-vien', [UsersController::class, 'store']);
    Route::put('danh-sach-thanh-vien/{id}', [UsersController::class, 'update']);
    Route::delete('danh-sach-thanh-vien/{id}', [UsersController::class, 'delete']);
});

// position => danh sách vị trí
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('danh-sach-vi-tri', [PositionController::class, 'index']);
    Route::post('danh-sach-vi-tri', [PositionController::class, 'store']);
    Route::put('danh-sach-vi-tri/{id}', [PositionController::class, 'update']);
    Route::delete('danh-sach-vi-tri/{id}', [PositionController::class, 'delete']);
});


//department => hồ sơ đơn vị
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('ho-so-don-vi', [DepartmentController::class, 'index']);
    Route::post('ho-so-don-vi', [DepartmentController::class, 'store']);
    Route::put('ho-so-don-vi/{id}', [DepartmentController::class, 'update']);
    Route::delete('ho-so-don-vi/{id}', [DepartmentController::class, 'delete']);
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

//assign target => giao nhiem vu
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('giao-viec', [AssignTaskController::class, 'index']);
    Route::post('giao-viec', [AssignTaskController::class, 'assignTask']);
});








// Route::get('danh-muc-dinh-muc', function () {
//     return view('CauHinh.danhMucDinhMuc');
// });
// Route::get('danh-muc-nhiem-vu', function () {
//     return view('CauHinh.danhMucNhiemVu');
// });



// Route::get('/phong-ban', [\App\Http\Controllers\Api\DepartmentController::class, 'search']);


// Quản lý nhân sự

// Họp đơn vị
// Route::get('giao-ban', function () {
//     return view('HopDonVi.giaoBan');
// });

//Reports => Họp đơn vị

Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('giao-ban', [ReportsController::class, 'index']);
    Route::post('giao-ban', [ReportsController::class, 'store']);
    Route::put('giao-ban/{id}', [ReportsController::class, 'update']);
    Route::delete('giao-ban/{id}', [ReportsController::class, 'delete']);
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

// Xết duyệt

// Đề xuất

// VBDH

// Orther
Route::get('thong-tin-ca-nhan', function () {
    return view('page.information.profile');
});

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

// 404
Route::fallback(function () {
    return view('404');
});
