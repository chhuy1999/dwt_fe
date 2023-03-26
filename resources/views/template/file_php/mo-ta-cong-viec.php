<?php require_once $template_path . 'header/header-master.php';?>

<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once $template_path . 'sidebar/sidebarMaster/sidebarLeft.php';?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid job-offer">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">MÔ TẢ CÔNG VIỆC</h5>
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
                                        <h5 style="color: var(--primary-color)">1. Thông tin cơ bản</h5>
                                    </div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td colspan="5">Vị trí</td>
                                                <td colspan="7">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="2">Bộ phân</td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Loại công việc</td>
                                                <td colspan="4">
                                                    <select class="selectpicker" multiple>
                                                        <option>Toàn thời gian/ Fulltime</option>
                                                        <option>Bán thời gian/ Past-time</option>
                                                        <option>CTV</option>
                                                        <option>Thời vụ</option>
                                                    </select>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td colspan="5">Địa điểm làm việc</td>
                                                <td colspan="13">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>
                                                <td colspan="4">Quản lý</td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>

                                            <tr>
                                                <td colspan="5">Mô tả công việc</td>
                                                <td colspan="21">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                    </table>


                                </div>

                                <div class="card-body">
                                    <div class="row" style="margin-top: 10px">
                                        <h5 style="color: var(--primary-color)">2. Nhiệm vụ cụ thể</h5>
                                    </div>
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col" colspan="21">nhiệm vụ chính</th>
                                                <th scope="col" colspan="4">Ghi chú</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th colspan="2" scope="row">1</th>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" scope="row">2</th>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" scope="row">3</th>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" scope="row">5</th>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" scope="row">6</th>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" scope="row">7</th>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" scope="row">8</th>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                                <td colspan="4">
                                                    <input type="password" class="form-control" id="inputPassword">

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>


                                </div>

                                <div class="card-body">
                                    <div class="row" style="margin-top: 10px">
                                        <h5 style="color: var(--primary-color)">3. Yêu cầu công việc</h5>
                                    </div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td rowspan="5" colspan="4">3.1 Yêu cầu công việc</td>
                                                <td>1</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>

                                            <tr>
                                                <td rowspan="5" colspan="4">3.2 Yêu cầu năng lực làm việc</td>
                                                <td>1</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td colspan="20">
                                                    <input type="password" class="form-control" id="inputPassword">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td rowspan="2" colspan="4">3.3 Chỉ tiêu đo lường hiệu quả công việc
                                                </td>
                                                <td>1</td>
                                                <td colspan="20">Tuỳ theo yêu cầu của từng hạng mục công việc</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td colspan="20">Tuỳ theo yêu cầu của từng hạng mục công việc</td>

                                            </tr>
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