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
use App\Http\Controllers\Api\PositionOrganizationController;
use App\Http\Controllers\Api\EquimentPackController;
use App\Http\Controllers\Api\MeetingController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\ReportTaskController;
use App\Http\Controllers\Api\MeetingListController;
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
Route::get('/test', function () {
    return view('dashboard_backup');
});


// Cấu hình
// danh sách thành viên
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('danh-sach-thanh-vien/danh-sach', [UsersController::class, 'index'])->name('user.list');
    Route::post('danh-sach-thanh-vien/create', [UsersController::class, 'store'])->name('user.store');
    Route::put('danh-sach-thanh-vien/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::delete('danh-sach-thanh-vien/delete/{id}', [UsersController::class, 'delete'])->name('users.delete');
});

// danh sách vị trí
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('danh-sach-vi-tri/danh-sach', [PositionController::class, 'index'])->name('position.list');
    Route::post('danh-sach-vi-tri/create', [PositionController::class, 'store'])->name('position.store');
    Route::put('danh-sach-vi-tri/update/{id}', [PositionController::class, 'update'])->name('position.update');
    Route::delete('danh-sach-vi-tri/delete/{id}', [PositionController::class, 'delete'])->name('position.delete');
});

// hồ sơ đơn vị
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('/ho-so-don-vi/danh-sach', [DepartmentController::class, 'index'])->name('department.list');
    Route::post('/ho-so-don-vi/create', [DepartmentController::class, 'store'])->name('department.store');
    Route::put('ho-so-don-vi/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::delete('ho-so-don-vi/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');
});

//kpi key
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-chi-so-key/danh-sach', [KeyController::class, 'index'])->name('key.list');
    Route::post('danh-muc-chi-so-key/create', [KeyController::class, 'store'])->name('key.store');
    Route::put('danh-muc-chi-so-key/update/{id}', [KeyController::class, 'update'])->name('key.update');
    Route::delete('danh-muc-chi-so-key/delete/{id}', [KeyController::class, 'delete'])->name('key.delete');
});

//target => danh muc dinh muc
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-dinh-muc/danh-sach', [TargetController::class, 'index'])->name('target.list');
    Route::post('danh-muc-dinh-muc/create', [TargetController::class, 'store'])->name('target.store');
    Route::put('danh-muc-dinh-muc/update/{id}', [TargetController::class, 'update'])->name('target.update');
    Route::delete('danh-muc-dinh-muc/delete/{id}', [TargetController::class, 'delete'])->name('target.delete');
});

//target detail => danh muc nhiem vu
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-nhiem-vu/danh-sach', [TargetDetailController::class, 'index'])->name('targetDetail.list');
    Route::post('danh-muc-nhiem-vu/create', [TargetDetailController::class, 'store'])->name('targetDetail.store');
    Route::put('danh-muc-nhiem-vu/update/{id}', [TargetDetailController::class, 'update'])->name('targetDetail.update');
    Route::delete('danh-muc-nhiem-vu/delete/{id}', [TargetDetailController::class, 'delete'])->name('targetDetail.delete');
});

//assign target => giao nhiem vu
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('giao-viec/danh-sach', [AssignTaskController::class, 'index'])->name('assignTask.list');
    Route::post('giao-viec', [AssignTaskController::class, 'assignTask'])->name('assignTask.assignTask');
    Route::put('/huy-giao-viec/{id}', [AssignTaskController::class, 'unAssignTask'])->name('assignTask.unAssignTask');
});
//bao cao cv
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::post('bao-cao-cong-viec/{id}', [TargetLogController::class, 'store'])->name('targetLog.store');
});
//report-tasks
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::post('nhiem-vu-phat-sinh', [ReportTaskController::class, 'store'])->name('reportTask.store');
    Route::post('nhiem-vu-phat-sinh/bao-cao/{id}', [ReportTaskController::class, 'reportTask'])->name('reportTask.reportTask');
});

// Danh sách cấp tổ chức
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-sach-cap-to-chuc/danh-sach', [PositionOrganizationController::class, 'index'])->name('positionOri.list');
    Route::post('danh-sach-cap-to-chuc/create', [PositionOrganizationController::class, 'store'])->name('positionOri.store');
    Route::put('danh-sach-cap-to-chuc/update/{id}', [PositionOrganizationController::class, 'update'])->name('positionOri.update');
    Route::delete('danh-sach-cap-to-chuc/delete/{id}', [PositionOrganizationController::class, 'delete'])->name('positionOri.delete');
});

// Danh sách cấp nhân sự
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-sach-cap-nhan-su/danh-sach', [PositionLevelController::class, 'index'])->name('positionLevel.list');
    Route::post('danh-sach-cap-nhan-su/create', [PositionLevelController::class, 'store'])->name('positionLevel.store');
    Route::put('danh-sach-cap-nhan-su/update/{id}', [PositionLevelController::class, 'update'])->name('positionLevel.update');
    Route::delete('danh-sach-cap-nhan-su/delete/{id}', [PositionLevelController::class, 'delete'])->name('positionLevel.delete');
});

// Route::get('danh-muc-don-vi-tinh', function () {
//     return view('CauHinh.danhMucDonViTinh');
// });


//hop giao ban
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {

    Route::get('giao-ban/{code}', [MeetingController::class, 'index'])->name('joinMeeting');
//    Route::put('giao-ban/tham-gia', [MeetingController::class, 'update'])->name('checkJoinMeeting');
//    Route::post('giao-ban/tham-gia',[MeetingController::class, 'join'])->name('checkJoinMeeting');
    Route::post('giao-ban/tao-moi', [MeetingController::class, 'store'])->name('createMeeting');


    Route::get('/danh-sach-cuoc-hop/danh-sach', [MeetingListController::class, 'index'])->name('meeting.list');
    Route::get('/danh-sach-cuoc-hop/cuoc-hop-dang-dien-ra', [MeetingListController::class, 'meetingOpen'])->name('meeting.open');
});

// Kho lưu trữ biên bản họp
Route::get('/kho-luu-tru-bien-ban-hop', [MeetingListController::class, 'index'])->name('');

//bao cao van de
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::post('bao-cao-van-de/create', [ReportController::class, 'store'])->name('report.store');
    Route::put('bao-cao-van-de/update/{id}', [ReportController::class, 'update'])->name('report.update');
});

// Danh mục gói trang bị
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('danh-muc-goi-trang-bi/danh-sach', [EquimentPackController::class, 'index'])->name('equimentPack.list');
    Route::post('danh-muc-goi-trang-bi/create', [EquimentPackController::class, 'store'])->name('equimentPack.store');
    Route::put('danh-muc-goi-trang-bi/update/{id}', [EquimentPackController::class, 'update'])->name('equimentPack.update');
    Route::delete('danh-muc-goi-trang-bi/delete/{id}', [EquimentPackController::class, 'delete'])->name('equimentPack.delete');
});


// Route::get('kho-luu-tru-bien-ban-hop', function () {
//     return view('HopDonVi.khoLuuTruBienBanHop');
// });
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
