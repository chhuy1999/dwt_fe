@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Quản lý nhân sự')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <!-- <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Quản lý nhân sự</h5>
                        <div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 style="color: var(--primary-color); padding: 0">Kho lưu trữ hồ sơ tuyển
                                        dụng</h5>
                                </div>
                                <div class="card-body">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search"
                                            placeholder="Vị trí, chức danh ..." aria-label="Search">
                                        <input class="form-control me-2" type="search" placeholder="Đơn vị"
                                            aria-label="Search">
                                        <input class="form-control me-2" type="search" placeholder="Khu vực"
                                            aria-label="Search">
                                        <button class="btn btn-outline-danger search" type="submit">Search</button>
                                    </form>

                                    <div class="d-flex p-2 bd-highlight mt-6">Kết quả tìm kiếm theo từ khoá trong</div>

                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="table-secondary">STT</th>
                                                <th scope="col" class="table-secondary">
                                                    Mã tài liệu
                                                    <i class="fa-duotone fa-filters"></i>
                                                </th>
                                                <th scope="col" class="table-secondary">Tên tài liệu</th>
                                                <th scope="col" class="table-secondary">Đơn vị ban hành</th>
                                                <th scope="col" class="table-secondary">Phiên bản</th>
                                                <th scope="col" class="table-secondary">Ngày hiệu lực</th>
                                                <th scope="col" class="table-secondary">Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>04-QT/LD/HDCV/</td>
                                                <td style="color: var(--primary-color)">Mô tả quá trình tuyển dụng</td>
                                                <td class="text-center">DWT</td>
                                                <td class="text-center">1/3</td>
                                                <td class="text-center">12/06/1022</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>1.1-QT/NS/HDCV/DWT</td>
                                                <td style="color: var(--primary-color)">Phụ lục Quy trình tuyển dụng
                                                </td>
                                                <td class="text-center">DWT</td>
                                                <td class="text-center">5/3</td>
                                                <td class="text-center">12/06/1022</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>1.2-QT/NS/HDCV/DWT</td>
                                                <td style="color: var(--primary-color)">Kho lưu trữ hồ sơ tuyển dụng
                                                </td>
                                                <td class="text-center">DWT</td>
                                                <td class="text-center">5/3</td>
                                                <td class="text-center">12/06/1022</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>1.3-QT/NS/HDCV/DWT</td>
                                                <td style="color: var(--primary-color)">Đề nghị tuyển dụng</td>
                                                <td class="text-center">DWT</td>
                                                <td class="text-center">5/3</td>
                                                <td class="text-center">12/06/1022</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>1.4-QT/NS/HDCV/DWT</td>
                                                <td style="color: var(--primary-color)">Tuyển dụng</td>
                                                <td class="text-center">DWT</td>
                                                <td class="text-center">5/3</td>
                                                <td class="text-center">12/06/1022</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>1.5-QT/NS/HDCV/DWT</td>
                                                <td style="color: var(--primary-color)">Đào tạo nhân sự</td>
                                                <td class="text-center">DWT</td>
                                                <td class="text-center">5/3</td>
                                                <td class="text-center">12/06/1022</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>1.1-QT/NS/HDCV/DWT</td>
                                                <td style="color: var(--primary-color)">Vị trí cần tuyển</td>
                                                <td class="text-center">DWT</td>
                                                <td class="text-center">5/3</td>
                                                <td class="text-center">12/06/1022</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-top: 20px">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-home" type="button" role="tab"
                                                aria-controls="nav-home" aria-selected="true">TUYỂN DỤNG MỚI</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-profile" type="button" role="tab"
                                                aria-controls="nav-profile" aria-selected="false">TIN TUYỂN DỤNG
                                                HOT</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-contact" type="button" role="tab"
                                                aria-controls="nav-contact" aria-selected="false">VỊ TRÍ QUẢN
                                                LÝ</button>
                                        </div>
                                    </nav>

                                    <div class="tab-content container" id="nav-tabContent">
                                        <div class="tab-pane fade show active justify-content-md-center"
                                            style="margin-top: 10px" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <div class="row row-cols-2">

                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area col" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area col" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>

                                            </div>

                                            <nav aria-label="Page navigation example" style="margin-top: 20px">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>

                                        <div class="tab-pane fade" style="margin-top: 10px" id="nav-profile"
                                            role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <div class="row row-cols-2">

                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area col" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area col" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>

                                            </div>

                                            <nav aria-label="Page navigation example" style="margin-top: 20px">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="tab-pane fade" style="margin-top: 10px" id="nav-contact"
                                            role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="row row-cols-2">

                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area col" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area col" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>
                                                <a class="col" style="color: var(--black-color)">
                                                    Trưởng phòng kinh doanh
                                                    <div class="area" style="margin-left: 10px">
                                                        <i class="bi bi-vector-pen"
                                                            style="color: var(--grey-color)"></i>
                                                        Hà Nội
                                                    </div>
                                                </a>

                                            </div>

                                            <nav aria-label="Page navigation example" style="margin-top: 20px">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->





            <!-- FORM Đề  nghị tuyển dụng -->
            <div class="main">
                <div class="container-fluid job-offer">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">FORM ĐỀ NGHỊ TUYỂN DỤNG</h5>
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
                                    <div class="infomation">
                                        <div class="row" style="margin-top: 10px">
                                            <h5 style="color: var(--primary-color)">Thông tin người yêu cầu</h5>
                                        </div>
                                        <div class='row '>
                                            <div class="col-md-4 d-flex justify-content-between align-items-center">
                                                <label for="name" class="col-form-label">Họ
                                                    và tên</label>
                                                <input style="width: 65%" type="text" class="form-control" id="name" />
                                            </div>
                                            <div class="col-md-4 d-flex justify-content-between align-items-center">
                                                <label style="padding-right: 18px" for="staticEmail"
                                                    class="col-form-label">Khối đơn vị</label>
                                                <select data-width="55%" class="selectpicker" multiple>
                                                    <option>Kinh doanh</option>
                                                    <option>Hành chính</option>
                                                    <option>Marketting</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 d-flex justify-content-between align-items-center">
                                                <label style="padding-left: 10px" for="staticEmail"
                                                    class="col-form-label">Trưởng bộ phận</label>
                                                <select data-width="55%" class="selectpicker" multiple>
                                                    <option>Nhân viên A</option>
                                                    <option>Nhân viên B</option>
                                                    <option>Nhân viên C</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class='row mt-3'>
                                            <div id="date_time-hopgiaoban"
                                                class=" col-md-4 d-flex align-items-center justify-content-between datetimepicker_wrapper">
                                                <label for="reason">Ngày yêu cầu</label>
                                                <input style="width: 65%" type="text"
                                                    value="<?php echo date('d/m/Y'); ?>"
                                                    class="form-control date start" />
                                            </div>
                                            <div
                                                class="col-md-8 form-group d-flex align-items-center justify-content-between">
                                                <label for="reason">Mô tả công việc</label>
                                                <textarea style="width: 78%" class="form-control"
                                                    aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <div class="infomation">
                                        <div class="row" style="margin-top: 10px">
                                            <h5 style="color: var(--primary-color)">Thông tin yêu cầu tuyển dụng</h5>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-3 d-flex justify-content-between align-items-center">
                                                <label for="inputZip" class="form-label">Vị trí</label>
                                                <input style="width: 60%" type="text" class="form-control"
                                                    id="inputZip">
                                            </div>
                                            <div class="col-md-3 d-flex justify-content-between align-items-center">
                                                <label for="staticEmail" class="col-form-label">Bộ phận</label>
                                                <select data-width="60%" class="selectpicker" multiple>
                                                    <option>Kinh doanh</option>
                                                    <option>Hành chính</option>
                                                    <option>Marketting</option>
                                                </select>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <div class="form-check d-flex align-items-center">
                                                    <input style="margin-right: 6px" class="form-check-input"
                                                        type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Bổ sung
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <div class="form-check d-flex align-items-center">
                                                    <input style="margin-right: 6px" class="form-check-input"
                                                        type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Mở rộng
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 d-flex align-items-center">
                                                <div
                                                    class="form-check d-flex justify-content-between align-items-center">
                                                    <input style="margin-right: 6px" class="form-check-input"
                                                        type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Thay thế
                                                    </label>
                                                    <input style="width: 60%" type="text" class="form-control"
                                                        id="inputZip">
                                                </div>
                                            </div>


                                        </div>


                                        <div class='row' style="margin-top: 18px">
                                            <div class="col-md-3 d-flex justify-content-between align-items-center">
                                                <label for="staticEmail" class="col-form-label">Cấp bậc</label>
                                                <select data-width="60%" class="selectpicker" multiple>
                                                    <option>Nhân viên</option>
                                                    <option>Chuyên viên</option>
                                                    <option>Team Leader/option>
                                                    <option>Trưởng bộ phân</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 d-flex justify-content-between align-items-center">
                                                <label for="staticEmail" class="col-form-label">Hình thức</label>
                                                <select data-width="60%" class="selectpicker" multiple>
                                                    <option>Toàn thời gian/ Fulltime</option>
                                                    <option>Bán thời gian/ Past-time</option>
                                                    <option>CTV</option>
                                                    <option>Thời vụ</option>
                                                </select>
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <label for="inputZip" class="form-label"
                                                    style="margin-right: 4px">SL</label>
                                                <input style="width: 40%" type="text" class="form-control"
                                                    id="inputZip">
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <label for="inputZip" class="form-label" style="margin-right: 4px">Chỉ
                                                    tiêu</label>
                                                <input style="width: 40%" type="text" class="form-control"
                                                    id="inputZip">
                                            </div>
                                            <div class="col d-flex align-items-center">
                                                <label for="inputZip" style="margin-right: 4px" class="form-label">SL
                                                    hiện tại</label>
                                                <input style="width: 40%" type="text" class="form-control"
                                                    id="inputZip">
                                            </div>
                                        </div>

                                        <div class='row' style="margin-top: 18px">

                                            <div class="col d-flex justify-content-between align-items-center">
                                                <label for="inputZip" class="form-label">Mức lương</label>
                                                <input style="width: 60%" type="text" class="form-control"
                                                    id="inputZip">
                                            </div>
                                            <div class="col d-flex justify-content-between align-items-center">
                                                <label for="inputZip" class="form-label">Đến</label>
                                                <input style="width: 60%" type="text" class="form-control"
                                                    id="inputZip">
                                            </div>


                                            <div class="col d-flex justify-content-between align-items-center">
                                                <div class="form-check d-flex align-items-center">
                                                    <input style="margin-right: 6px" class="form-check-input"
                                                        type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Lương thoả thuận
                                                    </label>
                                                </div>
                                            </div>

                                            <div id="date_time-hopgiaoban"
                                                class="col d-flex align-items-center justify-content-between datetimepicker_wrapper">
                                                <label for="reason">Ngày cần NS</label>
                                                <input style="width: 56%" type="text"
                                                    value="<?php echo date('d/m/Y'); ?>"
                                                    class="form-control date start" />
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="row card-body">
                                    <div class="col form-group mt-6">
                                        <h5 style="color: var(--primary-color)">Mô tả công việc</h5>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>
                                    <div class="col form-group mt-6">
                                        <h5 style="color: var(--primary-color)">Yêu cầu tuyển dụng</h5>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div>

                                </div>

                                <div class="action_table-wrapper text-end mt-3 mb-3">
                                    <a class="btn btn-outline-danger action_table-btn" style="margin-right:10px;">
                                        Huỷ bỏ
                                    </a>
                                    <a class="btn btn-danger action_table-btn" style="margin-right:10px;">
                                        Lưu & Gửi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')
@endsection
@section('footer-script')
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <!-- ChartJS -->
    
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>

    <!-- Chart Types -->
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/DoughnutChart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartThree.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartTwo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/LineChartTwo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/LineChart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/PieChart.js') }}"></script>
@endsection
