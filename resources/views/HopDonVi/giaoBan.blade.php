@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Biên bản họp Giao Ban')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Biên bản họp Giao Ban
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
                        <div id="" class="mainSection_thismonth">
                            <input id="thismonth" value="<?php echo date('m/Y'); ?>" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">

                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title">Tổng quan</div>
                                            </div>
                                            <div class="form-control" style="padding: 0.5rem 0.75rem;">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <div class="d-flex align-items-center"><img
                                                                    src="{{ asset('assets/img/time.svg') }}" /> Thời
                                                                gian&nbsp;
                                                            </div>
                                                            <div style="flex:1">
                                                                <div id="date_time-hopgiaoban"
                                                                    class="d-flex align-items-center justify-content-between datetimepicker_wrapper">
                                                                    <input id="datetimepicker" value="<?php echo date('d/m/Y h:m'); ?>"
                                                                        class="form-control" type="text">
                                                                    <div class="datetimepicker_separate">-</div>
                                                                    <input id="datetimepicker2" value="<?php echo date('d/m/Y h:m'); ?>"
                                                                        class="form-control" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex" style="padding-right:10px"><img
                                                                    src="{{ asset('assets/img/muiten.svg') }}" />
                                                                Chủ đề&nbsp;
                                                            </div>
                                                            <div style="flex:1">
                                                                <textarea name="" id="" rows="3" cols="" class="form-control"
                                                                    placeholder="Nhập chủ đề/mục tiêu cuộc họp"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center" style="flex:1">
                                                                <img src="{{ asset('assets/img/person-check.svg') }}" />
                                                                Chủ trì
                                                            </div>
                                                            <div style="flex:2">
                                                                <select class="selectpicker" multiple
                                                                    data-actions-box="true" data-width="100%"
                                                                    data-live-search="true" title="Chọn chủ trì..."
                                                                    data-select-all-text="Chọn tất cả"
                                                                    data-deselect-all-text="Bỏ chọn" data-size="3"
                                                                    data-selected-text-format="count > 1"
                                                                    data-count-selected-text="Có {0} Chủ trì"
                                                                    data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Nguyễn Ngọc Bảo</option>
                                                                    <option>Đặng Nguyễn Lam Mai</option>
                                                                    <option>Hồ Thị Hồng Vân</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mt-3 mb-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center" style="flex:1">
                                                                <img src="{{ asset('assets/img/pencil.svg') }}" />
                                                                Thư ký
                                                            </div>
                                                            <div style="flex:2">
                                                                <select class="selectpicker" multiple
                                                                    data-actions-box="true" data-width="100%"
                                                                    data-live-search="true" title="Chọn thư ký..."
                                                                    data-select-all-text="Chọn tất cả"
                                                                    data-deselect-all-text="Bỏ chọn" data-size="3"
                                                                    data-selected-text-format="count > 1"
                                                                    data-count-selected-text="Có {0} Thư ký"
                                                                    data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Nguyễn Ngọc Bảo</option>
                                                                    <option>Đặng Nguyễn Lam Mai</option>
                                                                    <option>Hồ Thị Hồng Vân</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center" style="flex:1">
                                                                <img src="{{ asset('assets/img/person-check.svg') }}" />
                                                                Thành
                                                                viên
                                                            </div>
                                                            <div style="flex:2">
                                                                <select class="selectpicker" multiple
                                                                    data-actions-box="true" data-width="100%"
                                                                    data-live-search="true" title="Chọn thành viên..."
                                                                    data-select-all-text="Chọn tất cả"
                                                                    data-deselect-all-text="Bỏ chọn" data-size="3"
                                                                    data-selected-text-format="count > 1"
                                                                    data-count-selected-text="Có {0} thành viên"
                                                                    data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Nguyễn Ngọc Bảo</option>
                                                                    <option>Đặng Nguyễn Lam Mai</option>
                                                                    <option>Hồ Thị Hồng Vân</option>
                                                                    <option>Nguyễn Thị Ngọc Lan</option>
                                                                    <option>Nguyễn Thị Hồng Oanh</option>
                                                                    <option>Hà Nguyễn Minh Hiếu</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title">Vấn đề tồn đọng</div>
                                                <div class="alert alert-warning border-warning m-0"
                                                    style="padding: 0 6px">
                                                    <i class="bi bi-exclamation-triangle pe-2"></i><strong>03</strong>
                                                    vấn đề
                                                    tồn đọng
                                                </div>
                                            </div>

                                            <div class="table-responsive rounded">
                                                <table
                                                    class="table table-responsive table-hover table-bordered m-0 style_disableAll">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Vấn đề tồn đọng</th>
                                                            <th>Người nêu</th>
                                                            <th>Thời hạn</th>
                                                            <th>Tình trạng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal"
                                                                    data-bs-target="#phanHoiVanDe">Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="selectpicker" data-width="100%">
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã phản hồi</option>
                                                                    <option>Đã giải quyết</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal"
                                                                    data-bs-target="#phanHoiVanDe">Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="selectpicker" data-width="100%">
                                                                    <option>Đã phản hồi</option>
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã giải quyết</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal"
                                                                    data-bs-target="#phanHoiVanDe">Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="selectpicker" data-width="100%">
                                                                    <option>Đã giải quyết</option>
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã phản hồi</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <div class="card-title mb-2">Nội dung chính</div>
                                        <textarea name="" id="" rows="5" cols="" class="form-control" placeholder="Nhập nội dung cuộc họp"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <div class="card-title">Vấn đề tồn đọng</div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="repeater-hopPhongBan position-relative style_table-3">
                                                <table class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Vấn đề tồn đọng</th>
                                                            <th>Người nêu</th>
                                                            <th>Nguyên nhân</th>
                                                            <th>Hướng giải quyết</th>
                                                            <th>PIC</th>
                                                            <th>Thời hạn</th>
                                                            <th colspan="2"></th>
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
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>
                                                                NN1
                                                            </td>
                                                            <td>
                                                                Sẽ gửi trong ngày
                                                            </td>
                                                            <td>
                                                                Vân
                                                            </td>
                                                            <td>
                                                                05/04
                                                            </td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper"
                                                                        style="border: 1px solid">
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-repeater-delete>
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                            Xóa
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
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông tin
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>
                                                                NN2
                                                            </td>
                                                            <td>
                                                                Sẽ gửi trong tuần
                                                            </td>
                                                            <td>
                                                                Vân
                                                            </td>
                                                            <td>
                                                                03/04
                                                            </td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-success">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-success">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-success">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-success">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-repeater-delete>
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                            Xóa
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
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông tin
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>
                                                                NN3
                                                            </td>
                                                            <td>
                                                                Sẽ gửi trong tuần
                                                            </td>
                                                            <td>
                                                                Vân
                                                            </td>
                                                            <td>
                                                                02/04
                                                            </td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-danger">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-success">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-success">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-success">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-repeater-delete>
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                            Xóa
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
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông tin
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>
                                                                NN4
                                                            </td>
                                                            <td>
                                                                Sẽ gửi trong tuần
                                                            </td>
                                                            <td>
                                                                Vân
                                                            </td>
                                                            <td>
                                                                01/04
                                                            </td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-danger">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-danger">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-danger">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-danger">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-repeater-delete>
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                            Xóa
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
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin
                                                            </td>
                                                            <td>
                                                                Mai
                                                            </td>
                                                            <td>
                                                                NN5
                                                            </td>
                                                            <td>
                                                                Sẽ gửi trong tuần
                                                            </td>
                                                            <td>
                                                                Vân
                                                            </td>
                                                            <td>
                                                                31/03
                                                            </td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-warning">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-warning">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-warning">
                                                                        </div>
                                                                        <div class="circle_tracking opacity-75 bg-warning">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <div class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="dropdown-item" href="#"
                                                                            data-repeater-delete>
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                            Xóa
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div data-repeater-create class="add-row-btn">
                                                    <i class="bi bi-plus-circle"></i>
                                                </div>

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12 d-flex justify-content-end">
                            <div class="action_table-wrapper text-end mt-3 mb-3">
                                <a href="kho-luu-tru-bien-ban-hop"
                                    class="btn btn-outline-danger action_table-btn"
                                    style="margin-right:6px;">
                                    Đến kho lưu trữ
                                </a>
                                <a href='bien-ban-hop' class="btn btn-danger action_table-btn">
                                    Duyệt & Lưu PDF
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end">
                            <div id='warning_notification'
                                class="alert alert-warning alert-dismissible fade show border-left border-warning"
                                role="alert">
                                <div class='d-flex align-items-center'>
                                    <div class='warning_notification-icon'><i class="bi bi-exclamation-triangle pe-2"></i>
                                    </div>
                                    <div class="warning_notification-body">
                                        <p class='m-0' style="font-size:1.2rem">Nhiệm vụ <strong>Họp giao ban
                                            </strong>ngày
                                            đã quá
                                            hạn!</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
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
                                    placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông tin"></div>
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
                                &nbsp;<input class="form-control" style="width:76%" type="text"
                                    value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
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
                                <input class="form-control" style="width:76%" type="text"
                                    value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
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
                                <input id="timeSuaVanDe" value="<?php echo date('d/m/Y'); ?>" class="form-control"
                                    style="width:51%" type="text">
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

    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>
@endsection
