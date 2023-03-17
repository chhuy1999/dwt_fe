@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh mục nhiệm vụ')

@section('header-style')
<style>
    .tooltip-inner {
        max-width: auto;
        text-align: left;
    }
</style>
@endsection
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh mục nhiệm vụ
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
                                        <div class="main_content d-flex">
                                            <div class="main_search d-flex">
                                                <i class="bi bi-search"></i>
                                                <input type="text" class="form-control" placeholder="Tìm kiếm nhiệm vụ">
                                            </div>
                                            <div class="main_content d-flex align-items-center">
                                                    <select class="selectpicker"
                                                        data-actions-box="true" data-width="100%"
                                                        data-live-search="true" title="Chọn phòng ban..."
                                                        data-select-all-text="Chọn tất cả"
                                                        data-deselect-all-text="Bỏ chọn"
                                                        data-live-search-placeholder="Tìm kiếm...">
                                                        <option>Trade Marketing</option>
                                                        <option>Digital Marketing</option>
                                                        <option>Quản trị Nhãn &amp; Đào tạo</option>
                                                        <option>Truyền thông</option>
                                                        <option>Sáng tạo nội dung</option>
                                                        <option>Dịch vụ bán hàng</option>
                                                    </select>
                                            </div>
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
                                                            <th style="width: 16%">Tên nhiệm vụ</th>
                                                            <th style="width: 15%">
                                                                <div class="d-flex justify-content-between">
                                                                    Thuộc định mức 
                                                                    <div role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-filter-right" style="font-size:1.4rem"></i>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item" href="#">Tham gia xây dựng...</a></li>
                                                                        <li><a class="dropdown-item" href="#">Cập nhật, theo...</a></li>
                                                                        <li><a class="dropdown-item" href="#">Giám sát chỉ tiêu...</a></li>
                                                                    </ul>
                                                                </div>
                                                            </th>
                                                            <th style="width: 25%">Mô tả nhiệm vụ</th>
                                                            <th style="width: 10%">Phòng ban</th>
                                                            <th style="width: 12%">
                                                                <div class="d-flex justify-content-between">
                                                                    Vị trí đảm nhiệm 
                                                                    <div role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-filter-right" style="font-size:1.4rem"></i>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item" href="#">Trợ lý marketing</a></li>
                                                                        <li><a class="dropdown-item" href="#">Sales Admin</a></li>
                                                                        <li><a class="dropdown-item" href="#">Quản lý sản phẩm</a></li>
                                                                    </ul>
                                                                </div>
                                                            </th>
                                                            <th style="width: 8%">Đơn vị</th>
                                                            <th style="width: 5%">SL</th>
                                                            <th style="width: 5%">Manday</th>
                                                            <th style="width: 2%"></th>
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
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:300px;" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-html="true" title="Tham gia xây dựng và/hoặc điều phối hoạt động các dự án liên quan đến quảng cáo tiếp thị, bao gồm: - Lên kế hoạch và soạn đề xuất/đề án triển khai - Trực tiếp thực hiện và phối hợp với các bên liên quan để3 điều phối các hoạt động của dự án - Báo cáo kết quả hoạt động của dự án">Tham gia xây dựng và/hoặc điều phối hoạt động các dự án liên quan đến quảng cáo tiếp thị, bao gồm</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Trợ lý marketing</div>
                                                            </td>
                                                            <td>
                                                                <div>Báo cáo</div>
                                                            </td>
                                                            <td>
                                                                <div>1</div>
                                                            </td>
                                                            <td>
                                                                <div>3</div>
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
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Cập nhật, theo dõi & kiểm soát chi phí">Cập nhật, theo dõi & kiểm soát chi phí</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Cập nhật, theo dõi & kiểm soát chi phí">Cập nhật, theo dõi & kiểm soát chi phí</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:300px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Cập nhật, theo dõi & kiểm soát chi phí các hoạt động Marketing trong cơ cấu chi phí hoạt động được phê duyệt, đảm bảo hiệu quả chi phí sử dụng, dự trù và báo cáo chi phí hàng tháng cho GĐ MKT & bộ phận liên quan, bao gồm: 
                                                                - Kế hoạch mua sắm/chi tiêu của các phòng ban Marketing (file excel) 
                                                                - Báo cáo hiệu quả chi phí hàng tháng (file excel)">Cập nhật, theo dõi & kiểm soát chi phí các hoạt động Marketing trong cơ cấu chi phí hoạt động được phê duyệt, đảm bảo hiệu </div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Trợ lý marketing</div>
                                                            </td>
                                                            <td>
                                                                <div>File</div>
                                                            </td>
                                                            <td>
                                                                <div>2</div>
                                                            </td>
                                                            <td>
                                                                <div>1.5</div>
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
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Giám sát chỉ tiêu và kết quả kinh doanh">Giám sát chỉ tiêu và kết quả kinh doanh</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Giám sát chỉ tiêu và kết quả kinh doanh">Giám sát chỉ tiêu và kết quả kinh doanh</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:300px;" data-bs-toggle="tooltip" data-bs-placement="top" title="- Giám sát chỉ tiêu giao dựa trên kế hoạch và hợp đồng cam kết của khách hàng. 
                                                                - Giám sát cài đặt chỉ tiêu trên DMS và báo cáo kết quả theo tuần, tháng">Giám sát chỉ tiêu giao dựa trên kế hoạch và hợp đồng cam kết của khách hàng. </div>
                                                            </td>
                                                            <td>
                                                                <div>Dịch vụ bán hàng</div>
                                                            </td>
                                                            <td>
                                                                <div>Sales Admin</div>
                                                            </td>
                                                            <td>
                                                                <div>Lượt</div>
                                                            </td>
                                                            <td>
                                                                <div>6</div>
                                                            </td>
                                                            <td>
                                                                <div>0.5</div>
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
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    4
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Quản lý chất lượng sản phẩm">Quản lý chất lượng sản phẩm</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Quản lý chất lượng sản phẩm">Quản lý chất lượng sản phẩm</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:300px;" data-bs-toggle="tooltip" data-bs-placement="top" title="- Thực hiện kiểm tra điều kiện bảo quản định kỳ của kho hàng hóa hoặc khi có khiếu nại phát sinh 
                                                                - Thực hiện kiểm nghiệm chất lượng sản phẩm định kỳ theo tiêu chuẩn nhà sản xuất hoặc khi có khiếu nại phát sinh 
                                                                - Thực hiện kiểm tra đánh giá khi có phản hồi hàng lỗi, hàng hỏng trả lại">Thực hiện kiểm tra điều kiện bảo quản định kỳ của kho hàng hóa hoặc khi có khiếu nại phát sinh </div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản lý sản phẩm</div>
                                                            </td>
                                                            <td>
                                                                <div>Báo cáo</div>
                                                            </td>
                                                            <td>
                                                                <div>1</div>
                                                            </td>
                                                            <td>
                                                                <div>1.5</div>
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
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    5
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Soạn thảo hồ sơ xác nhận nội dung quảng cáo">Soạn thảo hồ sơ xác nhận nội dung quảng cáo</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Soạn thảo hồ sơ xác nhận nội dung quảng cáo">Soạn thảo hồ sơ xác nhận nội dung quảng cáo</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:300px;" data-bs-toggle="tooltip" data-bs-placement="top" title="- Đề xuất ý tưởng thiết kế hoặc kịch bản nội dung quảng cáo với team sáng tạo nội dung 
                                                                - Tìm tài liệu chứng minh nội dung quảng cáo (nếu cần) 
                                                                - Hoàn tất các giấy tờ theo quy định của hồ sơ XNQC">Đề xuất ý tưởng thiết kế hoặc kịch bản nội dung quảng cáo với team sáng tạo nội dung </div>
                                                            </td>
                                                            <td>
                                                                <div>Quản trị Nhãn</div>
                                                            </td>
                                                            <td>
                                                                <div>Quản lý sản phẩm</div>
                                                            </td>
                                                            <td>
                                                                <div>Số</div>
                                                            </td>
                                                            <td>
                                                                <div>1</div>
                                                            </td>
                                                            <td>
                                                                <div>3</div>
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

    <!-- Modal Sửa nhiệm vụ -->
    <div class="modal fade" id="suaMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Sửa nhiệm vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-2">Tên nhiệm vụ <span class="text-danger">*</span></div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nhập tên nhiệm vụ">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-2">Thuộc định mức <span class="text-danger">*</span></div>
                                <div class="col-sm-10">
                                    <select class="selectpicker" title="Chọn định mức">
                                        <option>Tham gia xây dựng...</option>
                                        <option>Cập nhật, theo...</option>
                                        <option>Giám sát chỉ tiêu...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-2">Mô tả/Diễn giải <span class="text-danger">*</span></div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Nhập mô tả thực hiện"></textarea>
                                </div>
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
    <!-- Modal Them nhiệm vụ -->
    <div class="modal fade" id="themMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm nhiệm vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-2">Tên nhiệm vụ <span class="text-danger">*</span></div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nhập tên nhiệm vụ">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-2">Thuộc định mức <span class="text-danger">*</span></div>
                                <div class="col-sm-10">
                                    <select class="selectpicker" title="Chọn định mức">
                                        <option>Tham gia xây dựng...</option>
                                        <option>Cập nhật, theo...</option>
                                        <option>Giám sát chỉ tiêu...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title col-sm-2">Mô tả/Diễn giải <span class="text-danger">*</span></div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Nhập mô tả thực hiện"></textarea>
                                </div>
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

    {{-- Xóa đinh mức --}}
    <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa nhiệm vụ</h5>
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
