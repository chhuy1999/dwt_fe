@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách phòng ban')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách phòng ban
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
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="main_search d-flex">
                                            <i class="bi bi-search"></i>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm phòng ban">
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
                                            <div class="repeater-hopPhongBan position-relative">
                                                <table class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 2%">STT</th>
                                                            <th style="width: 8%">Mã đơn vị</th>
                                                            <th style="width: 8%">Tên đơn vị</th>
                                                            <th style="width: 8%">Đơn vị cha</th>
                                                            <th style="width: 8%">Cấp tổ chức</th>
                                                            <th style="width: 14%">Trưởng đơn vị</th>
                                                            <th style="width: 22%">Chức năng, nhiệm vụ</th>
                                                            <th style="width: 14%">Trụ sở chính</th>
                                                            <th style="width: 6%">Định biên</th>
                                                            <th style="width: 10%">Quỹ lương năm</th>
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
                                                                <div>QTN</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Marketing</div>
                                                            </td>
                                                            <td>
                                                                <div>Tổ/đội/nhóm</div>
                                                            </td>
                                                            <td>
                                                                <div>Nguyễn Vũ Nguyệt Minh</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:250px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi">Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội">219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội</div>
                                                                                                                            </td>
                                                            <td>
                                                                <div>6</div>
                                                            </td>
                                                            <td>
                                                                <div>600.000.000</div>
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
                                                                <div>TMTK</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Marketing</div>
                                                            </td>
                                                            <td>
                                                                <div>Tổ/đội/nhóm</div>
                                                            </td>
                                                            <td>
                                                                <div>Nguyễn Vũ Nguyệt Minh</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:250px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi">Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội">219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội</div>
                                                                                                                            </td>
                                                            <td>
                                                                <div>6</div>
                                                            </td>
                                                            <td>
                                                                <div>600.000.000</div>
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
                                                                <div>DMKT</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Marketing</div>
                                                            </td>
                                                            <td>
                                                                <div>Tổ/đội/nhóm</div>
                                                            </td>
                                                            <td>
                                                                <div>Nguyễn Vũ Nguyệt Minh</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:250px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi">Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội">219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội</div>
                                                                                                                            </td>
                                                            <td>
                                                                <div>6</div>
                                                            </td>
                                                            <td>
                                                                <div>600.000.000</div>
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
                                                                <div>STND</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Marketing</div>
                                                            </td>
                                                            <td>
                                                                <div>Tổ/đội/nhóm</div>
                                                            </td>
                                                            <td>
                                                                <div>Nguyễn Vũ Nguyệt Minh</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:250px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi">Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội">219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội</div>
                                                                                                                            </td>
                                                            <td>
                                                                <div>6</div>
                                                            </td>
                                                            <td>
                                                                <div>600.000.000</div>
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
                                                                <div>HCNS</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Marketing</div>
                                                            </td>
                                                            <td>
                                                                <div>Tổ/đội/nhóm</div>
                                                            </td>
                                                            <td>
                                                                <div>Nguyễn Vũ Nguyệt Minh</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:250px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi">Các hoạt động liên quan đến thương hiệu và sản phẩm: Quản lý sản phẩm, đào tạo, chương trình khuyến mãi</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội">219 Trung Kính, Yên Hoà, Cầu Giấy, Hà Nội</div>
                                                                                                                            </td>
                                                            <td>
                                                                <div>6</div>
                                                            </td>
                                                            <td>
                                                                <div>600.000.000</div>
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

    <!-- Modal Sửa phòng ban -->
    <div class="modal fade" id="suaMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Sửa phòng ban</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Tên phòng ban <span class="text-danger">*</span></div>
                                &nbsp;<input class="form-control"  style="width:80%" type="text" placeholder="Nhập tên phòng ban">
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

    <!-- Modal Thêm phòng ban -->
    <div class="modal fade" id="themMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 40%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm đơn vị</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Tên đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Tên đơn vị">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Mã đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Mã đơn vị">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Thuộc đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn đơn vị">
                                        <option>CTCP Mastertran</option>
                                        <option>CTCP Thái Bình Hưng Thịnh</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Cấp tổ chức <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn cấp tổ chức">
                                        <option>Công ty con</option>
                                        <option>Chi nhánh</option>
                                        <option>Văn phòng đại diện</option>
                                        <option>Văn phòng</option>
                                        <option>Trung tâm</option>
                                        <option>Phòng ban</option>
                                        <option>Nhóm/tổ/đội</option>
                                        <option>Phân xưởng</option>
                                        <option>Nhà máy</option>
                                        <option>Công ty thành viên</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trưởng đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn trưởng đơn vị">
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
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trụ sở chính <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Định biên <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập định biên">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Quỹ lương năm <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập quỹ lương năm">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-2">
                                    <div class="modal_body-title">Chức năng<br> nhiệm vụ<span class="text-danger">*</span>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nhập Chức năng, nhiệm vụ">
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
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa phòng ban</h5>
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
