@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách định mức lao động')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách định mức lao động
                        </h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>Kế toán</strong>
                                </div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>Nguyễn Thị Yến Hoa</strong></div>
                            </div>
                        </div>
                        <div id="thismonth" class="mainSection_thismonth"></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="repeater-hopPhongBan position-relative">
                                                <table class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Mục tiêu/Nhiệm vụ</th>
                                                            <th>Mô tả</th>
                                                            <th>Đơn vị tính</th>
                                                            <th>Vị trí</th>
                                                            <th>Bộ phận</th>
                                                            <th>Manday</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="group-a">
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Chụp ảnh cho ấn phẩm/báo chí</div>
                                                            </td>
                                                            <td>
                                                                <p>
                                                                    Truyền thông nội bộ<br>
                                                                    Ấn phẩm/tạp chí, sổ tay, cẩm nang<br>
                                                                    Báo chí truyền thông<br>
                                                                    Retouch thành sản phẩm hoàn thiện
                                                                </p>
                                                                    
                                                            </td>
                                                            <td>
                                                                Báo cáo
                                                            </td>
                                                            <td>
                                                                Quay dựng
                                                            </td>
                                                            <td>
                                                                Sáng tạo nội dung
                                                            </td>
                                                            <td>
                                                                1.5
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" /> Xóa
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Chụp ảnh cho ấn phẩm/báo chí</div>
                                                            </td>
                                                            <td>
                                                                <p>
                                                                    Truyền thông nội bộ<br>
                                                                    Ấn phẩm/tạp chí, sổ tay, cẩm nang<br>
                                                                    Báo chí truyền thông<br>
                                                                    Retouch thành sản phẩm hoàn thiện
                                                                </p>
                                                                    
                                                            </td>
                                                            <td>
                                                                Báo cáo
                                                            </td>
                                                            <td>
                                                                Quay dựng
                                                            </td>
                                                            <td>
                                                                Sáng tạo nội dung
                                                            </td>
                                                            <td>
                                                                1.5
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" /> Xóa
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Chụp ảnh cho ấn phẩm/báo chí</div>
                                                            </td>
                                                            <td>
                                                                <p>
                                                                    Truyền thông nội bộ<br>
                                                                    Ấn phẩm/tạp chí, sổ tay, cẩm nang<br>
                                                                    Báo chí truyền thông<br>
                                                                    Retouch thành sản phẩm hoàn thiện
                                                                </p>
                                                                    
                                                            </td>
                                                            <td>
                                                                Báo cáo
                                                            </td>
                                                            <td>
                                                                Quay dựng
                                                            </td>
                                                            <td>
                                                                Sáng tạo nội dung
                                                            </td>
                                                            <td>
                                                                1.5
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" /> Xóa
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    4
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Chụp ảnh cho ấn phẩm/báo chí</div>
                                                            </td>
                                                            <td>
                                                                <p>
                                                                    Truyền thông nội bộ<br>
                                                                    Ấn phẩm/tạp chí, sổ tay, cẩm nang<br>
                                                                    Báo chí truyền thông<br>
                                                                    Retouch thành sản phẩm hoàn thiện
                                                                </p>
                                                                    
                                                            </td>
                                                            <td>
                                                                Báo cáo
                                                            </td>
                                                            <td>
                                                                Quay dựng
                                                            </td>
                                                            <td>
                                                                Sáng tạo nội dung
                                                            </td>
                                                            <td>
                                                                1.5
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" /> Xóa
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    5
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Chụp ảnh cho ấn phẩm/báo chí</div>
                                                            </td>
                                                            <td>
                                                                <p>
                                                                    Truyền thông nội bộ<br>
                                                                    Ấn phẩm/tạp chí, sổ tay, cẩm nang<br>
                                                                    Báo chí truyền thông<br>
                                                                    Retouch thành sản phẩm hoàn thiện
                                                                </p>
                                                                    
                                                            </td>
                                                            <td>
                                                                Báo cáo
                                                            </td>
                                                            <td>
                                                                Quay dựng
                                                            </td>
                                                            <td>
                                                                Sáng tạo nội dung
                                                            </td>
                                                            <td>
                                                                1.5
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" /> Xóa
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    6
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Chụp ảnh cho ấn phẩm/báo chí</div>
                                                            </td>
                                                            <td>
                                                                <p>
                                                                    Truyền thông nội bộ<br>
                                                                    Ấn phẩm/tạp chí, sổ tay, cẩm nang<br>
                                                                    Báo chí truyền thông<br>
                                                                    Retouch thành sản phẩm hoàn thiện
                                                                </p>
                                                                    
                                                            </td>
                                                            <td>
                                                                Báo cáo
                                                            </td>
                                                            <td>
                                                                Quay dựng
                                                            </td>
                                                            <td>
                                                                Sáng tạo nội dung
                                                            </td>
                                                            <td>
                                                                1.5
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" /> Xóa
                                                                        </a>
                                                                    </li>
                                                                </ul>
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
            <div class="footer">
                <div class="container">Copyright © 2023 S-Team. All rights reserved.</div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')
    <!-- Modal Phản Hồi Vấn Đề -->
    <div class="modal fade" id="phanHoiVanDe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:700px;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Phản hồi vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex align-items-center">
                            <label for="staticEmail" class="col-form-label" style="padding-right:6px;">Vấn đề tồn đọng
                            </label>
                            <div class="w-100" style="flex:1;overflow:hidden">
                                <div contenteditable="true" readonly class="contenteditable"
                                    placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:18px;">Cấp giải
                                quyết</label>
                            <div class="w-100" style="flex:1">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="2">Phòng ban</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:6px;">Thời hạn</label>
                            <div class="w-100" style="flex:1">
                                <input id="datetimepicker3" readonly value="<?php echo date('d/m/Y'); ?>" class="form-control"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-5 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:6px;">Trạng
                                thái</label>
                            <div class="w-100" style="flex:1">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected hidden>Chọn trạng thái</option>
                                    <option>Đã có hướng giải quyết</option>
                                    <option>Đã giải quyết</option>
                                    <option>Không thể giải quyết</option>
                                    <option>Không xác định được nguyên nhân</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label"
                                style="padding-right:10px;border-radius:4px">Phản hồi vấn đề</label>
                            <div class="w-100" style="flex:1;overflow:hidden">
                                <div contenteditable="true" class="contenteditable"
                                    placeholder="Vui lòng phản hồi vấn đề tại đây"></div>
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
    <!-- Modal Sửa Vấn Đề -->
    <div class="modal fade" id="suaVanDeTonDong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Chỉnh sửa vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Vấn đề tồn đọng <span class="text-danger">*</span></div>
                                &nbsp;<input class="form-control"  style="width:76%" type="text" value="Chưa hoàn thành báo cáo do abc chưa gửi thông">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Người nêu <span class="text-danger">*</span></div>
                                <input class="form-control" style="width:51%" type="text" value="Nguyễn Ngọc Bảo">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Chịu trách nhiệm <span class="text-danger">*</span></div>
                                <input class="form-control" style="width:51%" type="text" value="Nguyễn Ngọc Bảo">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Nguyên nhân</div>
                                <input class="form-control" style="width:76%" type="text" value="Chưa hoàn thành báo cáo do abc chưa gửi thông">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Hướng giải quyết</div>
                                <input class="form-control" style="width:76%" type="text" value="Sẽ gửi trong tuần">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title">Thời hạn <span class="text-danger">*</span></div>
                                    <input id="timeSuaVanDe" value="<?php echo date('d/m/Y'); ?>" class="form-control" style="width:51%" type="text">
                                </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Tình trạng <span class="text-danger">*</span></div>
                                <select class="form-select w-75" aria-label="Default select example">
                                    <option selected hidden>Chọn trạng thái</option>
                                    <option>Đã có hướng giải quyết</option>
                                    <option>Đã giải quyết</option>
                                    <option>Không thể giải quyết</option>
                                    <option>Không xác định được nguyên nhân</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Xóa thuộc tính --}}
    <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa Thuộc tính này</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá thuộc tính đã chọn không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn xóa</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>
@endsection
