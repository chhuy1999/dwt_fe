<?php $pageTitle='Kế Hoạch Giao việc'; ?>
<?php require_once($template_path.'header/header-master.php'); ?>

<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Giao Việc</h5>
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
                        <div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="card-title mb-2">Danh sách định mức</div>
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="danhSachDinhMuc" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>TT</th>
                                                            <th>Tên định mức</th>
                                                            <th>Mô tả</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Triển khai các sự kiện nội bộ quy mô lớn
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                Tổ chức hoạt động CSR - Từ thiện
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                Tổ chức sự kiện truyền thông công chúng-...
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                Viết bài PR/truyền thông dạng văn bản
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>
                                                                Công việc phát sinh
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>
                                                                Triển khai tập san Dopperllherz
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td>
                                                                Triển khai các sự kiện nội bộ quy mô nhỏ
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td>
                                                            Đăng ký giải thưởng thương hiệu
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">9</th>
                                                            <td>
                                                                Tổ chức hoạt động CSR - Sport marketing
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">10</th>
                                                            <td>
                                                                Thực hiện bài PR/ truyền thông dạng video/...
                                                            </td>
                                                            <td class="text-center">
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện nội bộ quy mô lớn"</div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12  mb-3">
                                                    <label style="padding-right: 6px;" for="title" class="col-form-label">* Tên nhiệm vụ </label>
                                                    <div class="col">
                                                        <input type="text" class="form-control" value="Triển khai các sự kiện nội bộ quy mô lớn" id="title"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  mb-3">
                                                    <label style="padding-right: 6px;" for="textarea" class="col-form-label">* Vị trí đảm nhiệm </label>
                                                    <div class="col">
                                                        <select class='form-control' name="" id="">
                                                            <option value="">Truyền thông nội bộ</option>
                                                            <option value="">Truyền thông nội bộ 2</option>
                                                            <option value="">Truyền thông nội bộ 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label style="padding-right: 6px;" for="textarea" class="col-form-label">* Người đảm nhiệm </label>
                                                    <div class="col">
                                                        <select class='form-control' name="" id="">
                                                            <option value="">Người đảm nhiệm</option>
                                                            <option value="">Người đảm nhiệm 2</option>
                                                            <option value="">Người đảm nhiệm 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label style="padding-right: 6px;" for="textarea" class="col-form-label">* Thời gian làm</label>
                                                    <div class="col">
                                                        <div id="date_time-hopgiaoban" class="d-flex align-items-center justify-content-between col-sm-12 datetimepicker_wrapper">
                                                            <input type="text" value="<?php echo date('d/m/Y'); ?>" class="form-control date start" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label style="padding-right: 6px;" for="textarea" class="col-form-label">* Mô tả</label>
                                                        <textarea class="form-control" name="" id="" placeholder="Nhập mô tả nhiệm vụ"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label style="padding-right: 6px;" for="textarea" class="col-form-label">* Kế hoạch thực hiện</label>
                                                        <textarea class="form-control" name="" id="" placeholder="Nhập kê hoạch thực hiẹn"></textarea>
                                                </div>
                                            </div>
                                            <div class="justify-content-end d-flex">
                                                <div class="btn btn-outline-danger me-3">Đóng</div>
                                                <div class="btn btn-danger">Lưu</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <div class="card-title">Bên giao công việc</div>
                                            </div>
                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <div class="position-relative">
                                                        <table id="listDanhSach" class="table table-responsive table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>TT</th>
                                                                    <th>Tên nhiệm vụ</th>
                                                                    <th>Người giao nhiệm vụ</th>
                                                                    <th>Vị trí</th>
                                                                    <th>Thời hạn</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">4</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">5</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">6</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">7</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">8</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">9</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">10</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">11</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">12</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">13</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">14</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">15</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">16</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">17</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">18</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">19</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">20</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>
                                                                        Kiểm duyệt đơn hàng
                                                                    </td>
                                                                    <td>
                                                                        Lại thị thùy hương
                                                                    </td>
                                                                    <td>
                                                                        Thực tập sinh DVBH
                                                                    </td>
                                                                    <td>
                                                                        31/03/2023
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
                </div>
            </div>
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarRight.php'); ?>
</div>

<!--end index page-->

<?php require_once($template_path.'footer/footer-hopGiaoBan.php'); ?>
