<?php $pageTitle='Cơ cấu tổ chức'; ?>
<?php require_once($template_path.'header/header-master.php'); ?>

<!--index page start-->
<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarCoCauToChuc/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Cơ cấu tổ chức
                        </h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>{{Session::get('department_name')}}</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>{{Session::get('user')['name']}}</strong></div>
                            </div>
                        </div>
                        <div id="thismonth" class="mainSection_thismonth">03/2023</div>
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body position-relative">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="coCauToChuc" class="table table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th>STT</th>
                                                            <th>Họ và tên</th>
                                                            <th>Mã nhân sự</th>
                                                            <th>Email liên hệ</th>
                                                            <th>Vị trí làm việc</th>
                                                            <th>Chức vụ</th>
                                                            <th>CCDC</th>
                                                            <th>Lương kỳ này (VND)</th>
                                                            <th>Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Vũ Thị Hà
                                                            </td>
                                                            <td class="text-center">
                                                                MTT123
                                                            </td>
                                                            <td>
                                                                digital@doppelherz.vn
                                                            </td>
                                                            <td>
                                                                Digital Marketing
                                                            </td>
                                                            <td>
                                                                Trưởng Bộ phận
                                                            </td>
                                                            <td>
                                                                Pack Quản lý
                                                            </td>
                                                            <td>
                                                                20.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-trash3"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                Nguyễn Thị Ngọc Lan
                                                            </td>
                                                            <td class="text-center">
                                                                MTT124
                                                            </td>
                                                            <td>
                                                                content2@doppelherz.vn
                                                            </td>
                                                            <td>
                                                                Content Website
                                                            </td>
                                                            <td>
                                                                Nhân viên
                                                            </td>
                                                            <td>
                                                                Pack Nhân viên
                                                            </td>
                                                            <td>
                                                                10.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-trash3"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                Nguyễn Thị Hồng Oanh
                                                            </td>
                                                            <td class="text-center">
                                                                MTT125
                                                            </td>
                                                            <td>
                                                                content2@doppelherz.vn
                                                            </td>
                                                            <td>
                                                                Sale Online
                                                            </td>
                                                            <td>
                                                                Nhân viên
                                                            </td>
                                                            <td>
                                                                Pack Nhân viên
                                                            </td>
                                                            <td>
                                                                10.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-trash3"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                Đỗ Thị Trang
                                                            </td>
                                                            <td class="text-center">
                                                                MTT125
                                                            </td>
                                                            <td>
                                                                content2@doppelherz.vn
                                                            </td>
                                                            <td>
                                                                Sale Online
                                                            </td>
                                                            <td>
                                                                Nhân viên
                                                            </td>
                                                            <td>
                                                                Pack Nhân viên
                                                            </td>
                                                            <td>
                                                                10.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-trash3"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                Hà Nguyễn Minh Hiếu
                                                            </td>
                                                            <td class="text-center">
                                                                MTT125
                                                            </td>
                                                            <td>
                                                                tmdt@doppelherz.vn
                                                            </td>
                                                            <td>
                                                                Quản lý sàn TMĐT
                                                            </td>
                                                            <td>
                                                                Chuyên viên
                                                            </td>
                                                            <td>
                                                                Pack Nhân viên
                                                            </td>
                                                            <td>
                                                                12.000.000
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe" data-bs-whatever="@mdo">
                                                                        <i class="bi bi-trash3"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('template.footer.footer')
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarCoCauToChuc/sidebarRight.php'); ?>
</div>

<!-- Modal -->
<div class="modal fade" id="phanHoiVanDe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel">Phản hồi vấn đề tồn đọng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <div class="col-sm-12 d-flex align-items-center">
                        <label for="staticEmail" class="col-form-label" style="padding-right:6px;">Vấn đề tồn đọng </label>
                        <div class="w-100" style="flex:1">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" style="text-indent: 8px" value="Chưa hoàn thành báo cáo do abc chưa gửi thông">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:6px;">Cấp giải quyết</label>
                        <div  class="w-100" style="flex:1">
                            <select class="form-select" aria-label="Default select example">
                                <option value="2">Phòng ban</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:6px;">Thời gian</label>
                        <div  class="w-100" style="flex:1">
                            <input id="datetimepicker3" readonly value="<?php echo date('d/m/Y h:m'); ?>" class="form-control"  type="text">
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-6 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:6px;">Phản hồi vấn đề</label>
                        <div class="w-100" style="flex:1">
                            <input type="text" class="form-control-plaintext" id="staticEmail" style="text-indent: 8px" placeholder="Vui lòng phản hồi vấn đề tại đây">
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:6px;">Trạng thái</label>
                        <div class="w-100" style="flex:1">
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Chọn trạng thái</option>
                                <option value="1">Đã có hướng giải quyết</option>
                                <option value="2">Đã hoàn thành</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger">Gửi</button>
            </div>
        </div>
    </div>
</div>
<!--end index page-->
<?php require_once($template_path.'footer/footer-coCauToChuc.php'); ?>
