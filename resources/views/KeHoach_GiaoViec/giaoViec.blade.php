@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Giao việc')
@section('header-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.css') }}" />
@endsection
@section('content')
    @include('template.sidebar.sidebarGiaoViec.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Giao Việc</h5>
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
                                    <div class='row'>
                                        <div class="col-md-7">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="danhSachDinhMuc"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>TT</th>
                                                            <th>Tên định mức</th>
                                                            <th>Mô tả</th>
                                                            <th>MD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="clickTable" data-href="#body_content-1"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-2"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-3"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-4"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-5"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-6"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-7"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-8"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                        <tr class="clickTable" data-href="#body_content-9"
                                                            style="cursor: pointer">
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                    Tham gia xây dựng và/hoặc điều phối dự án Marketing theo
                                                                    yêu cầu của Ban Giám đốc</div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate"
                                                                    style="max-width:185px;" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top"
                                                                    title="Mô tả Triển khai các sự kiện nội bộ quy mô lớn">
                                                                    Mô tả Triển khai các sự kiện nội bộ quy mô</div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-center"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="1 manday">1</div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-5 overflow-auto" style="height: 276px">
                                            <div class="body_content-wrapper" id="body_content-1">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-2">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-3">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3" id="cancel_action">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-4">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-5">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-6">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-7">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-8">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="body_content-wrapper" id="body_content-9">
                                                <form action="" method="">
                                                    <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện
                                                        nội
                                                        bộ quy mô"</div>
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-7 mb-3">
                                                            <input type="text" class="form-control"
                                                                value="Triển khai các sự kiện nội bộ quy mô"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-5 mb-3">
                                                            <input type="text" name="daterange" class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" name="" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <input type="text" class="form-control"
                                                                placeholder="Manday"
                                                                id="title" />
                                                        </div>
                                                        <div class="col-md-9 mb-3">
                                                            <textarea class="form-control" rows="1" placeholder="Kế hoạch"></textarea>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <div class="form-check">
                                                                <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh">Lưu thành mẫu</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Phụ trách">
                                                                <option value="">Người phụ trách</option>
                                                                <option value="">Người phụ trách 2</option>
                                                                <option value="">Người phụ trách 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <select class='selectpicker' title="Liên quan">
                                                                <option value="">Người liên quan</option>
                                                                <option value="">Người liên quan 2</option>
                                                                <option value="">Người liên quan 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="repeater">
                                                            <div data-repeater-list="group-a">
                                                                <div class="row" data-repeater-item>
                                                                    <div class="col-md-8 mb-3">
                                                                        <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true">
                                                                                <option>Số lượt khách hàng được chăm sóc</option>
                                                                                <option>Số buổi Activation</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <input type="number" class="form-control" placeholder="Giá trị"/>
                                                                    </div>
                                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-2">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="justify-content-end d-flex">
                                                        <div class="action_btn">
                                                            <div class="btn btn-outline-danger px-4 me-3">Hủy</div>
                                                            <div class="btn btn-danger px-4">Giao</div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                            <div class="body_noContent-wrapper">
                                                Vui lòng chọn định mức để giao việc 
                                                <button type="button" class="btn btn-danger ms-2" id="toggleDinhMuc">tại đây</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">

                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <div class="position-relative">
                                                        <table id="listDanhSach"
                                                            class="table table-responsive table-hover table-bordered  style_table-6">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 2%" class="text-center">STT</th>
                                                                    <th>Tên nhiệm vụ</th>
                                                                    <th>Người được giao</th>
                                                                    <th>Vị trí</th>
                                                                    <th>Thời hạn</th>
                                                                    {{-- <th>Tình trạng</th> --}}
                                                                    <th style="width: 2%"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex align-items-center justify-content-center">1</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                            style="max-width:450px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="triển khai các sự kiện nội bộ quy mô lớn">
                                                                            Triển khai các sự kiện nội bộ quy môTriển khai
                                                                            các sự kiện nội bộ quy môTriển khai các sự kiện
                                                                            nội bộ quy môTriển khai các sự kiện nội bộ quy
                                                                            mô</div>
                                                                    </td>
                                                                    <td>Mai</td>
                                                                    <td>Marketing</td>
                                                                    <td>13/03/2023</td>
                                                                    {{-- <td>
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
                                                                    </td> --}}
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
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
                                                                                data-bs-toggle="modal" data-bs-target="#xoaThuocTinh"    
                                                                                data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
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
                </div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarGiaoViec.sidebarRight')

    <!-- Modal Sửa Vấn Đề -->
    <div class="modal fade" id="suaVanDeTonDong" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:42%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Chỉnh sửa nhiệm vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        
                        <div class="mb-3 row">
                            <div class="col-md-12 mb-3 d-flex">
                                <label for="title" class="col-sm-3 col-form-label">Tên nhiệm vụ
                                    <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"
                                        value="Triển khai các sự kiện nội bộ quy mô"
                                        id="title" />
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 d-flex">
                                <label for="title" class="col-sm-3 col-form-label">Thuộc định mức
                                    <span class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly
                                        value="Triển khai các sự kiện nội bộ quy mô"
                                        id="title" />
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="textarea" class="col-form-label">Mô tả/Diễn giải<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="" id="" placeholder="Nhập mô tả nhiệm vụ"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="textarea" class="col-form-label">Kế hoạch thực
                                    hiện</label>
                                <textarea class="form-control" name="" id="" placeholder="Nhập kê hoạch thực hiẹn"></textarea>
                            </div>

                            <div class="col-md-6 mb-3 d-flex">
                                <label for="textarea" class="col-sm-5 col-form-label">Vị trí đảm
                                    nhiệm <span class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <select class='form-control' name="" id="">
                                        <option value="">Truyền thông nội bộ</option>
                                        <option value="">Truyền thông nội bộ 2</option>
                                        <option value="">Truyền thông nội bộ 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 d-flex">
                                <label for="textarea" class="col-sm-5 col-form-label">Người đảm
                                    nhiệm <span class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <select class='form-control' name="" id="">
                                        <option value="">Người đảm nhiệm</option>
                                        <option value="">Người đảm nhiệm 2</option>
                                        <option value="">Người đảm nhiệm 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3 d-flex">
                                <label for="textarea" class="col-sm-5 col-form-label">Người liên quan<span class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <select class='form-control' name="" id="">
                                        <option value="">Người liên quan</option>
                                        <option value="">Người liên quan 2</option>
                                        <option value="">Người liên quan 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2 mb-3 d-flex">
                                <label for="textarea" class="col-sm-5 col-form-label">MD <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-4 mb-3 d-flex">
                                <label class="col-sm-3 col-form-label">Thời
                                    hạn<span class="text-danger">*</span></label>
                                <div class="col-sm-9 me-2">
                                    <input type="text" name="daterange" class="form-control"
                                        value="<?php echo date('d/m/Y - d/m/Y'); ?>" />
                                </div>
                            </div>

                            <div class="col-md-7 mb-3 d-flex">
                                <label class="col-sm-4 col-form-label" style="margin-right: 6px">Tiêu chí <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-8">
                                    <select class='selectpicker' data-live-search="true" title="Thêm tiêu chí key">
                                        <option>Số lượt khách hàng được chăm sóc</option>
                                        <option>Số buổi Activation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5 mb-3 d-flex">
                                <label for="textarea" class="col-sm-5 col-form-label">Giá trị <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-2">
                                <div class="d-flex justify-content-start">
                                    <button class="form-check_btn btn btn-outline-danger px-3">Thêm tiêu chí</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Xóa thuộc tính --}}
    <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa nhiệm vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá nhiệm vụ đã chọn không?
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

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}"></script>
    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

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

    <script type="text/javascript">
        // SELECT MULTIPLE LEFT SIDEBAR
        const select = document.getElementById('select');
        const elems = document.querySelectorAll('.data_chart-items');
        const obj = {};

        const filtered = [...elems].filter((el) => {
            if (!obj[el.id]) {
                obj[el.id] = true;
                return true;
            } else {
                return false;
            }
        });

        const selectOpt = filtered.map((el) => {
            el.style.display = 'block';
            return `<option> ${el.id} </option>`;
        });

        select.innerHTML = selectOpt.join('');

        select.addEventListener('change', function() {
            for (let i = 0, iLen = select.options.length; i < iLen; i++) {
                const opt = select.options[i];

                const val = opt.value || opt.text;
                if (opt.selected) {
                    document.getElementById(val).style.display = 'block';
                } else {
                    document.getElementById(val).style.display = 'none';
                }
            }
        });

        // BTN SETTINGS
        document.getElementById('sidebarBody_settings-body').addEventListener('click', handleClickSettings, false);

        function handleClickSettings() {
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (sidebarBodySelectWrapper.style.display === 'none') {
                sidebarBodySelectWrapper.style.display = 'block';
                document.addEventListener('click', handleClickOutside);
            } else {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }

        function handleClickOutside(event) {
            const sidebarBodySettings = document.getElementsByClassName('sidebarBody_settings-body')[0];
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (!sidebarBodySettings.contains(event.target) && !sidebarBodySelectWrapper.contains(event.target)) {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }
    </script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            // Change tabs table
            const clickTables = document.querySelectorAll(".clickTable");
            clickTables.forEach((clickTable) => {
                clickTable.addEventListener("click", () => {
                    const id = clickTable.getAttribute("data-href");
                    const element = document.querySelector(id);
                    if (element) {
                        const items = document.querySelectorAll(".body_content-wrapper");
                        items.forEach((item) => {
                            item.style.display = "none";
                        });
                        element.style.display = "block";
                        const noContent = document.querySelector(".body_noContent-wrapper");
                        noContent.style.display = "none";
                    } else {
                        const items = document.querySelectorAll(".body_content-wrapper");
                        items.forEach((item) => {
                            item.style.display = "none";
                        });
                    }
                });
            });

            // Toggle List Table
            const handleBtn = document.querySelector('#toggleDinhMuc');
            handleBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const dataTable = document.querySelector('.dataTables_wrapper')
                dataTable.setAttribute('id', 'bg-blink');
                setTimeout(() => {
                    dataTable.removeAttribute('id', 'bg-blink');
                }, 2000);
            })
        });
    </script>

    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                locale: {
                    format: 'DD/MM/YYYY'
                },
                language: 'ru'
            });
        });
    </script>

    <script type="text/javascript">
        $('#danhSachDinhMuc').DataTable({
            paging: true,
            ordering: false,
            pageLength: 5,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm định mức...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-title-wrapper">f>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper').html(`
            <div class="d-flex align-items-center">
                <div class="card-title me-2">Danh sách định mức</div>
                <div class="select">
                    <select class="selectpicker" title="Chọn phòng ban">
                        <option>Cung ứng</option>
                        <option>Trade Marketing</option>
                        <option>Digital Marketing</option>
                        <option>Truyền thông</option>
                        <option>Quản trị Nhãn/Đào tạo</option>
                        <option>Kho & Giao vận</option>
                        <option>Hành chính nhân sự</option>
                        <option>Kế toán</option>
                        <option>Tài chính</option>
                        <option>Dịch vụ bán hàng</option>
                        <option>Kinh doanh OTC</option>
                        <option>Kinh doanh ETC</option>
                        <option>Kinh doanh MT</option>
                        <option>Kinh doanh online</option>
                    </select>
                </div>
            </div>
        `);

        $('#listDanhSach').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm nhiệm vụ...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-titles-wrapper">f>rt<"dataTables_bottom"ip>',
        });
        $('div.card-titles-wrapper').html(`
            <div class="card-title">Lịch sử giao việc</div>
        `);
       
    </script>

@endsection
