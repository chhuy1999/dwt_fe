@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách chỉ số key')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách chỉ số key
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
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="main_search d-flex">
                                            <i class="bi bi-search"></i>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm chỉ số key">
                                        </div>
                                        <div class="main_action">
                                            <button id="exporttable" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#themMoiDinhMuc">
                                                <i class="bi bi-plus"></i>
                                                Thêm mới
                                            </button>
                                            <button id="exporttable" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                                                <i class="bi bi-download"></i>
                                                Xuất Excel
                                            </button>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="position-relative">
                                                <table class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 2%">STT</th>
                                                            <th style="width: 20%">Tên chỉ số key</th>
                                                            <th style="width: 10%">Đơn vị</th>
                                                            <th style="width: 66%">Mô tả</th>
                                                            <th style="width: 2%"></th>
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
                                                                <div>Số lượt khách hàng được chăm sóc</div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    Lượt
                                                                </div>
                                                                    
                                                            </td>
                                                            <td>
                                                                <div></div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
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
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Số lượt khách hàng được chăm sóc</div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    Lượt
                                                                </div>
                                                                    
                                                            </td>
                                                            <td>
                                                                <div></div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
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
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Số lượt cấp phát vật tư trong ngày</div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    Lượt
                                                                </div>
                                                                    
                                                            </td>
                                                            <td>
                                                                <div></div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
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
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    4
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Số buổi Activation</div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    Buổi
                                                                </div>
                                                                    
                                                            </td>
                                                            <td>
                                                                <div></div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
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
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    5
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Doanh thu từ Activation</div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    Triệu VND
                                                                </div>
                                                                    
                                                            </td>
                                                            <td>
                                                                <div></div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc">
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

    <!-- Modal Sửa chỉ số key -->
    <div class="modal fade" id="suaMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Sửa chỉ số key</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Tên chỉ số key <span class="text-danger">*</span></div>
                                &nbsp;<input class="form-control"  style="width:80%" type="text" placeholder="Nhập tên chỉ số key">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <div class="modal_body-title">Mô tả/Diễn giải <span class="text-danger">*</span></div>
                                <textarea class="form-control" placeholder="Nhập mô tả thực hiện"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <div class="modal_body-title">Kế hoạch thực hiện <span class="text-danger">*</span></div>
                                <textarea class="form-control" placeholder="Nhập kế hoạch thực hiện"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Đơn vị</div>
                                <input class="form-control" style="width:76%" type="text" placeholder="Nhập Đơn vị">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Manday</div>
                                <input class="form-control" style="width:76%" type="text" placeholder="Nhập Manday">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Số lượng</div>
                                <input class="form-control" style="width:76%" type="text" placeholder="Nhập Số lượng">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="col-sm-3"><div class=" modal_body-title">Vị trí</div></div>
                                <div class="col-sm-9">
                                    <select class="selectpicker" title="Chọn Vị trí">
                                        <option>Quản lý phòng</option>
                                        <option>Quản lý sàn TMĐT</option>
                                        <option>Content Website</option>
                                        <option>Content SEO</option>
                                        <option>Google Ads</option>
                                        <option>Content Facebook</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="col-sm-4"><div class="modal_body-title">Đơn vị phòng ban</div></div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn phòng/ban">
                                        <option>Trade Marketing</option>
                                        <option>Digital Marketing</option>
                                        <option>Quản trị Nhãn &amp; Đào tạo</option>
                                        <option>Truyền thông</option>
                                        <option>Sáng tạo nội dung</option>
                                        <option>Dịch vụ bán hàng</option>
                                    </select>
                                </div>
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

    <!-- Modal Thêm chỉ số key -->
    <div class="modal fade" id="themMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm mới chỉ số key</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-3">
                                    Tên chỉ số key <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="Nhập tên chỉ số key">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-3">
                                    Đơn vị <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-9">
                                    <select class="selectpicker" title="Chọn đơn vị">
                                        <option>Trade Marketing</option>
                                        <option>Digital Marketing</option>
                                        <option>Quản trị Nhãn & Đào tạo</option>
                                        <option>Truyền thông</option>
                                        <option>Sáng tạo nội dung</option>
                                        <option>Dịch vụ bán hàng</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-2">
                                    Mô tả chỉ số <span class="text-danger">*</span>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Nhập mô tả chỉ số"></textarea>
                                </div>
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

    {{-- Xóa đinh mức --}}
    <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa chỉ số key</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá đinh mức này không?
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
