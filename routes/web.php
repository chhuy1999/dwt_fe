<?php

use App\Http\Controllers\Api\AssignTaskController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\KeyController;
use App\Http\Controllers\Api\TargetController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\PositionController;
use App\Http\Controllers\Api\TargetDetailController;
use App\Http\Controllers\Api\TargetLogController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\PositionLevelController;
use App\Http\Controllers\Api\EquimentPackController;
use App\Http\Controllers\Api\MeetingController;
use App\Http\Controllers\Api\ReportController;
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
Route::post('/logout', [AuthController::class, 'logout']);


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
    Route::put('danh-sach-thanh-vien/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::delete('danh-sach-thanh-vien/{id}', [UsersController::class, 'delete']);
});

// danh sách vị trí
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('danh-sach-vi-tri', [PositionController::class, 'index']);
    Route::post('danh-sach-vi-tri', [PositionController::class, 'store']);
    Route::put('danh-sach-vi-tri/{id}', [PositionController::class, 'update']);
    Route::delete('danh-sach-vi-tri/{id}', [PositionController::class, 'delete']);
});


// hồ sơ đơn vị
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('/ho-so-don-vi', [DepartmentController::class, 'index']);
    Route::post('/ho-so-don-vi', [DepartmentController::class, 'store']);
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

Route::get('danh-muc-don-vi-tinh', function () {
    return view('CauHinh.danhMucDonViTinh');
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
    Route::put('/huy-giao-viec/{id}', [AssignTaskController::class, 'unAssignTask']);
});
//bao cao cv
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::post('bao-cao-cong-viec/{id}', [TargetLogController::class, 'store']);
});






// Route::get('danh-muc-dinh-muc', function () {
//     return view('CauHinh.danhMucDinhMuc');
// });
// Route::get('danh-muc-nhiem-vu', function () {
//     return view('CauHinh.danhMucNhiemVu');
// });



// Route::get('/phong-ban', [\App\Http\Controllers\Api\DepartmentController::class, 'search']);


// Danh sách cấp tổ chức
Route::get('danh-sach-cap-to-chuc', function () {
    return view('CauHinh.danhSachCapToChuc');
});



// Danh sách cấp nhân sự
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-sach-cap-nhan-su', [PositionLevelController::class, 'index']);
    Route::post('danh-sach-cap-nhan-su', [PositionLevelController::class, 'store']);
    Route::put('danh-sach-cap-nhan-su/{id}', [PositionLevelController::class, 'update']);
    Route::delete('danh-sach-cap-nhan-su/{id}', [PositionLevelController::class, 'delete']);
});




//hop giao ban
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('giao-ban/{code}', [MeetingController::class, 'index']);
});




//bao cao van de
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::post('bao-cao-van-de', [ReportController::class, 'store']);
    Route::put('bao-cao-van-de/{id}', [ReportController::class, 'update']);
});




// Danh mục gói trang bị
// Route::get('danh-muc-goi-trang-bi', function () {
//     return view('CauHinh.danhMucGoiTrangBi');
// });

Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-goi-trang-bi', [EquimentPackController::class, 'index']);
    Route::post('danh-muc-goi-trang-bi', [EquimentPackController::class, 'store']);
    Route::put('danh-muc-goi-trang-bi/{id}', [EquimentPackController::class, 'update']);
    Route::delete('danh-muc-goi-trang-bi/{id}', [EquimentPackController::class, 'delete']);
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
