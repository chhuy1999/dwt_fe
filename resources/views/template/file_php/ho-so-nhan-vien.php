<?php $pageTitle='Hồ sơ nhân viên'; ?>

<?php require_once $template_path . 'header/header-master.php';?>

<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once $template_path . 'sidebar/sidebarMaster/sidebarLeft.php';?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid job-offer">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">HỒ SƠ NHÂN VIÊN</h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>Kế toán</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>Nguyễn Thị Yến Hoa</strong></div>
                            </div>
                        </div>
                        <div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row" style="margin-top: 10px">
                                        <h5 style="color: var(--primary-color)">Thông tin cá nhân</h5>
                                    </div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td colspan="5" rowspan="5">
                                                    <img src="..." class="card-img-top" alt="...">
                                                </td>
                                                <td colspan="8">Họ và tên</td>
                                                <td colspan="8">Đơn vị công tác</td>
                                                <td colspan="9">Phòng ban</td>
                                            </tr>
                                            <tr>
                                                <td colspan="8">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="8">
                                                    <select class="selectpicker" multiple>
                                                        <option>Nhân viên A</option>
                                                        <option>Nhân viên B</option>
                                                        <option>Nhân viên C</option>
                                                    </select>
                                                </td>
                                                <td colspan="9">
                                                    <select class="selectpicker" multiple>
                                                        <option>Kinh doanh</option>
                                                        <option>Hành chính</option>
                                                        <option>Kế toán</option>
                                                    </select>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="5">Chức danh</td>
                                                <td colspan="7">
                                                    <select class="selectpicker" multiple>
                                                        <option>Kinh doanh</option>
                                                        <option>Hành chính</option>
                                                        <option>Kế toán</option>
                                                    </select>
                                                </td>
                                                <td colspan="4">Vị trí công việc</td>
                                                <td colspan="9">
                                                    <select class="selectpicker" multiple>
                                                        <option>Kinh doanh</option>
                                                        <option>Hành chính</option>
                                                        <option>Kế toán</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">Giới tính</td>
                                                <td style="text-align: center;">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                </td>
                                                <td colspan="2" style="text-align: center;">Nam</td>
                                                <td style="text-align: center;">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                </td>
                                                <td colspan="2" style="text-align: center;">Nữ</td>
                                                <td colspan="3">Ngày sinh</td>
                                                <td colspan="5">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="5">MST cá nhân</td>
                                                <td colspan="3">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="4">Tôn giáo</td>
                                                <td colspan="5">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="2">Dân tộc</td>
                                                <td colspan="6">
                                                    <select class="selectpicker" multiple>
                                                        <option>Kinh</option>
                                                        <option>Dao</option>
                                                        <option>Thái</option>
                                                    </select>
                                                </td>
                                                <td colspan="4">Quốc tịch</td>
                                                <td colspan="4">
                                                    <select class="selectpicker" multiple>
                                                        <option>Việt Nam</option>
                                                        <option>Lào</option>
                                                        <option>Campuchia</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Số CCCD</td>
                                                <td colspan="5">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="2">Ngày cấp</td>
                                                <td colspan="3">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="5">Số hộ chiếu</td>
                                                <td colspan="5">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="2">Ngày cấp</td>
                                                <td colspan="3">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Nơi cấp</td>
                                                <td colspan="5">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="2">Ngày hết hạn</td>
                                                <td colspan="3">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="5">Nơi cấp</td>
                                                <td colspan="5">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="2">Ngày hết hạn</td>
                                                <td colspan="3">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Trình độ văn hoá</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Trình độ đào tạo</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Chỗ ở hiện này</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Mã khu vực</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">SĐT cá nhân</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Email cá nhân</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">SĐT công ty</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Email công ty</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Vị trí</td>
                                                <td colspan="9">
                                                    <select data-width="60%" class="selectpicker" multiple>
                                                        <option>Nhân viên</option>
                                                        <option>Chuyên viên</option>
                                                        <option>Team Leader/option>
                                                        <option>Trưởng bộ phân</option>
                                                    </select>
                                                </td>
                                                <td colspan="4">Phòng ban</td>
                                                <td colspan="12">
                                                    <select data-width="60%" class="selectpicker" multiple>
                                                        <option>Kinh doanh</option>
                                                        <option>Hành chính</option>
                                                        <option>Marketting</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Chức danh</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Quản lý trực tiếp</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Bậc lương</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Số công chuẩn</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Lương cơ bản</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Bằng chữ</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Lương đóng BH</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Bằng chữ</td>
                                                <td colspan="12">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="5">Số TK ngân hàng</td>
                                                <td colspan="9">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Ngân hàng</td>
                                                <td colspan="6">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="2" style="text-align: center;">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                </td>
                                                <td colspan="4">Tham gia công đoàn</td>
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
<?php require_once $template_path . 'sidebar/sidebarMaster/sidebarRight.php';?>
</div>

<!--end index page-->

<?php require_once $template_path . 'footer/footer-hopGiaoBan.php';?>