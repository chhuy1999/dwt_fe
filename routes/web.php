<?php

use App\Http\Controllers\Api\ArisingTaskController;
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
use App\Http\Controllers\Api\ProposeController;
use App\Http\Controllers\Api\ListProposeController;
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
Route::get('/login', [AuthController::class, 'index'])->name('login');
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
    Route::get('danh-sach-thanh-vien', [UsersController::class, 'index'])->name('user.list');
    Route::post('danh-sach-thanh-vien', [UsersController::class, 'store'])->name('user.store');
    Route::put('danh-sach-thanh-vien/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::delete('danh-sach-thanh-vien/{id}', [UsersController::class, 'delete'])->name('users.delete');
    Route::get('/thong-tin-ca-nhan', [UsersController::class, 'me'])->name('users.me');
});

// danh sách vị trí
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('danh-sach-vi-tri', [PositionController::class, 'index'])->name('position.list');
    Route::post('danh-sach-vi-tri', [PositionController::class, 'store'])->name('position.store');
    Route::put('danh-sach-vi-tri/{id}', [PositionController::class, 'update'])->name('position.update');
    Route::delete('danh-sach-vi-tri/{id}', [PositionController::class, 'delete'])->name('position.delete');
});

// hồ sơ đơn vị
Route::group(['middleware' => 'auth.role:user,manager,admin'], function () {
    Route::get('/ho-so-don-vi', [DepartmentController::class, 'index'])->name('department.list');
    Route::post('/ho-so-don-vi', [DepartmentController::class, 'store'])->name('department.store');
    Route::put('ho-so-don-vi/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::delete('ho-so-don-vi/{id}', [DepartmentController::class, 'delete'])->name('department.delete');
});

//kpi key
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('danh-muc-chi-so-key', [KeyController::class, 'index'])->name('key.list');
    Route::post('danh-muc-chi-so-key', [KeyController::class, 'store'])->name('key.store');
    Route::put('danh-muc-chi-so-key/{id}', [KeyController::class, 'update'])->name('key.update');
    Route::delete('danh-muc-chi-so-key/{id}', [KeyController::class, 'delete'])->name('key.delete');
});

//target => danh muc dinh muc
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('danh-muc-dinh-muc', [TargetController::class, 'index'])->name('target.list');
    Route::post('danh-muc-dinh-muc', [TargetController::class, 'store'])->name('target.store');
    Route::put('danh-muc-dinh-muc/{id}', [TargetController::class, 'update'])->name('target.update');
    Route::delete('danh-muc-dinh-muc/{id}', [TargetController::class, 'delete'])->name('target.delete');
});

//target detail => danh muc nhiem vu
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('danh-muc-nhiem-vu', [TargetDetailController::class, 'index'])->name('targetDetail.list');
    Route::post('danh-muc-nhiem-vu', [TargetDetailController::class, 'store'])->name('targetDetail.store');
    Route::put('danh-muc-nhiem-vu/{id}', [TargetDetailController::class, 'update'])->name('targetDetail.update');
    Route::delete('danh-muc-nhiem-vu/{id}', [TargetDetailController::class, 'delete'])->name('targetDetail.delete');
});

//assign target => giao nhiem vu
Route::group(['middleware' => 'auth.role:manager,admin'], function () {
    Route::get('giao-viec', [AssignTaskController::class, 'index'])->name('assignTask.list');
    Route::post('giao-viec', [AssignTaskController::class, 'assignTask'])->name('assignTask.assignTask');
    Route::put('/huy-giao-viec/{id}', [AssignTaskController::class, 'unAssignTask'])->name('assignTask.unAssignTask');
});
//bao cao cv
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::post('bao-cao-cong-viec/{id}', [TargetLogController::class, 'store'])->name('targetLog.store');
    Route::delete('xoa-bao-cao-cong-viec/{id}', [TargetLogController::class, 'delete'])->name('targetLog.delete');
});
//report-tasks
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::post('nhiem-vu-phat-sinh', [ReportTaskController::class, 'store'])->name('reportTask.store');
    Route::put('nhiem-vu-phat-sinh/cham-diem/{id}', [ReportTaskController::class, 'evaluate'])->name('reportTask.evaluate');
    Route::post('nhiem-vu-phat-sinh/bao-cao/{id}', [ReportTaskController::class, 'reportTask'])->name('reportTask.reportTask');
    Route::put('nhiem-vu-phat-sinh/{id}', [ReportTaskController::class, 'update'])->name('reportTask.update');
    //delete
    Route::delete('nhiem-vu-phat-sinh/{id}', [ReportTaskController::class, 'delete'])->name('reportTask.delete');
});

// Danh sách cấp tổ chức
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('danh-sach-cap-to-chuc', [PositionOrganizationController::class, 'index'])->name('positionOri.list');
    Route::post('danh-sach-cap-to-chuc', [PositionOrganizationController::class, 'store'])->name('positionOri.store');
    Route::put('danh-sach-cap-to-chuc/{id}', [PositionOrganizationController::class, 'update'])->name('positionOri.update');
    Route::delete('danh-sach-cap-to-chuc/{id}', [PositionOrganizationController::class, 'delete'])->name('positionOri.delete');
});

// Danh sách cấp nhân sự
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('danh-sach-cap-nhan-su', [PositionLevelController::class, 'index'])->name('positionLevel.list');
    Route::post('danh-sach-cap-nhan-su', [PositionLevelController::class, 'store'])->name('positionLevel.store');
    Route::put('danh-sach-cap-nhan-su/{id}', [PositionLevelController::class, 'update'])->name('positionLevel.update');
    Route::delete('danh-sach-cap-nhan-su/{id}', [PositionLevelController::class, 'delete'])->name('positionLevel.delete');
});

// Route::get('danh-muc-don-vi-tinh', function () {
//     return view('CauHinh.danhMucDonViTinh');
// });


//hop giao ban
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {

    Route::get('giao-ban/{code}', [MeetingController::class, 'index'])->name('joinMeeting');
    Route::put('giao-ban/{id}', [MeetingController::class, 'update']);
    //    Route::post('giao-ban/tham-gia',[MeetingController::class, 'join'])->name('checkJoinMeeting');
    Route::post('giao-ban', [MeetingController::class, 'store'])->name('createMeeting');
    Route::post('giao-ban/tham-gia', [MeetingController::class, 'join']);

    Route::get('/danh-sach-cuoc-hop/danh-sach', [MeetingListController::class, 'index'])->name('meeting.list');
    Route::get('/danh-sach-cuoc-hop/cuoc-hop-dang-dien-ra', [MeetingListController::class, 'openingMeeting'])->name('meeting.open');
});


// Kho lưu trữ biên bản họp
Route::get('/kho-luu-tru-bien-ban-hop', [MeetingListController::class, 'closedMeeting']);

//bao cao van de
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::post('bao-cao-van-de', [ReportController::class, 'store'])->name('report.store');
    Route::put('bao-cao-van-de/{id}', [ReportController::class, 'update'])->name('report.update');
    Route::delete('bao-cao-van-de/{id}', [ReportController::class, 'delete'])->name('report.delete');
});

// Danh mục gói trang bị
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('danh-muc-goi-trang-bi', [EquimentPackController::class, 'index'])->name('equimentPack.list');
    Route::post('danh-muc-goi-trang-bi', [EquimentPackController::class, 'store'])->name('equimentPack.store');
    Route::put('danh-muc-goi-trang-bi/{id}', [EquimentPackController::class, 'update'])->name('equimentPack.update');
    Route::delete('danh-muc-goi-trang-bi/{id}', [EquimentPackController::class, 'delete'])->name('equimentPack.delete');
});
// Đề xuất
Route::group(['middleware' => 'auth.role:manager,admin,user'], function () {
    Route::get('de-xuat-mo', [ProposeController::class, 'index'])->name('propose.list');
    Route::post('de-xuat-mo', [ProposeController::class, 'store'])->name('propose.store');
    Route::put('de-xuat-mo/{id}', [ProposeController::class, 'update'])->name('propose.update');
    Route::delete('de-xuat-mo/{id}', [ProposeController::class, 'delete'])->name('propose.delete');
});

// Danh sách Đề xuất

Route::prefix('de-xuat-xet-duyet')->middleware('auth.role:manager,admin,user')->group(function () {
    Route::get('danh-sach-de-xuat', [ListProposeController::class, 'index'])->name('listPropose.list');
    Route::post('danh-sach-de-xuat', [ListProposeController::class, 'store'])->name('listPropose.store');
    Route::put('danh-sach-de-xuat/{id}', [ListProposeController::class, 'update'])->name('listPropose.update');
    Route::delete('danh-sach-de-xuat/{id}', [ListProposeController::class, 'delete'])->name('listPropose.delete');
});

Route::get('de-xuat-theo-mau', function () { return view('DeXuat_XetDuyet.deXuatTheoMau'); })->middleware('auth.role:manager,admin,user');


// Form danh sách đề nghị
Route::get('mau-yeu-cau-mua-sam', function () {
    return view('DeXuat_XetDuyet.mauDeXuat.mauYCMS');
})->middleware('auth.role:manager,admin,user');
Route::get('mau-de-nghi-tam-ung', function () {
    return view('DeXuat_XetDuyet.mauDeXuat.mauDNTU');
})->middleware('auth.role:manager,admin,user');



// Route::get('kho-luu-tru-bien-ban-hop', function () {
//     return view('HopDonVi.khoLuuTruBienBanHop');
// });
//Đào tạo
Route::get('danh-sach-danh-gia', function () {
    return view('KeHoach_GiaoViec.danhSachDanhGia');
})->middleware('auth.role:manager,admin,user');
Route::get('kho-bien-ban-danh-gia', function () {
    return view('KeHoach_GiaoViec.khoDanhSachDanhGia');
})->middleware('auth.role:manager,admin,user');
Route::get('danh-sach-danh-gia/chi-tiet', function () {
    return view('KeHoach_GiaoViec.chiTietBienBan');
})->middleware('auth.role:manager,admin,user');


Route::get('bien-ban-hop', function () {
    return view('HopDonVi.bienBanHop');
})->middleware('auth.role:manager,admin,user');
Route::get('su-co-phat-sinh', function () {
    return view('HopDonVi.suCoPhatSinh');
})->middleware('auth.role:manager,admin,user');
Route::get('quan-ly-nhan-su', function () {
    return view('HopDonVi.quanLyNhanSu');
})->middleware('auth.role:manager,admin,user');
Route::get('ho-so-nhan-vien', function () {
    return view('HopDonVi.hoSoNhanVien');
})->middleware('auth.role:manager,admin,user');
// Route::get('de-xuat-mo', function () {
//     return view('DeXuat_XetDuyet.deXuatMo');
// })->middleware('auth.role:manager,admin,user');

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


Route::get('kpi-nhan-vien', function () {
    return view('page.staff.kpiStaff');
})->middleware('auth.role:manager,admin,user');

// Biểu đồ
Route::get('danh-sach-key-chart', function () {
    return view('CauHinh.danhSachKeyChart');
})->middleware('auth.role:manager,admin,user');
Route::get('kho-chart', function () {
    return view('CauHinh.khoChart');
})->middleware('auth.role:manager,admin,user');
Route::get('kho-key', function () {
    return view('CauHinh.khoKey');
})->middleware('auth.role:manager,admin,user');


// DWT&KPI
Route::get('dashboard_admin', function () {
    return view('DWT&KPI.dashboardAdmin');
})->middleware('auth.role:manager,admin,user');


// Trang Dịch vụ Bán Hàng
Route::get('dich-vu-ban-hang', function () {
    return view('page.sell.serviceSell');
})->middleware('auth.role:manager,admin,user');

// Trang Kế Toán
Route::get('ke-toan', function () {
    return view('page.sell.ketoan');
})->middleware('auth.role:manager,admin,user');

// Trang kinh doanh
Route::get('kinh-doanh', function () {
    return view('page.sell.kinhdoanh');
})->middleware('auth.role:manager,admin,user');

// 404
Route::fallback(function () {
    return view('404');
})->middleware('auth.role:managermanager,admin,user');

// Quy trinhf
Route::get('ky-nang-nghiep-vu', function () {
    return view('CauHinh.kyNangNghiepVu');
})->middleware('auth.role:manager,admin,user');
