@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Biên bản họp Giao Ban')
@section('header-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.css') }}" />
    <style>
        .mainSection_width-select {
            width: 140px !important;
            border: none;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light {
            padding: 5px 0;
            background-color: transparent;
            outline: none;
            border: none;
        }

        .style_input {
            border: none;
            background-color: transparent;
            font-size: 1.1rem;
            outline: none;
            box-shadow: none !important;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light:hover {
            background-color: transparent;
            outline: none;
            border: none;
            box-shadow: none;
        }

        .bootstrap-select>.dropdown-toggle:after {
            display: none;
        }

        .style_input {
            border: none;
            background-color: transparent;
            font-size: 1.1rem;
            box-shadow: none;
            outline: none;
        }

        .description-problem {
            width: 210px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .description-problem-responded {
            width: 350px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .issuer {
            width: 110px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .name-issuer {
            width: 76px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .information {
            /* width: 400px; */
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
    </style>
@endsection

@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading d-flex align-items-center justify-content-between">
                        <div class="mainSection_card position-relative">
                            <div class="mainSection_content row">
                                <div class="col-sm-4">Đơn vị: </div>
                                <div class="col-sm-8">
                                    <strong>Kế toán</strong>
                                </div>
                            </div>
                            <div class="mainSection_content row">
                                <div class="col-sm-4">Chủ trì: </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker mainSection_width-select" data-actions-box="true"
                                        data-live-search="true" title="Chọn chủ trì..."
                                        data-live-search-placeholder="Tìm kiếm..." data-size="3">
                                        @foreach ($listUsers->data as $value)
                                            <option value="{{ $value->name }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mainSection_heading-title">
                                    Biên bản họp
                                </h5>
                            </div>
                            <div>
                                <select class="form-select form-select-lg style_input ms-2 fw-bolder">
                                    <option>Giao ban Ngày</option>
                                    <option>Tuần</option>
                                    <option>Tháng</option>
                                    <option>Quý</option>
                                    <option>Khác</option>
                                </select>
                            </div>
                        </div>

                        <div id="mainSection_width"
                            class="mainSection_thismonth position-relative d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
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
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/time.svg') }}" />
                                                            </div>
                                                            {{-- <div id="date_time-hopgiaoban"
                                                                class="d-flex align-items-center justify-content-between datetimepicker_wrapper">
                                                                <input id="datetimepicker" value="<?php// echo date('d/m/Y h:m'); ?> ?> ?>"
                                                                    class="form-control" type="text">
                                                                <div class="datetimepicker_separate">-</div>
                                                                <input id="datetimepicker2" value="<?php //echo date('d/m/Y h:m');
                                                                ?>"
                                                                    class="form-control" type="text">
                                                            </div> --}}
                                                            <input type="text" name="daterange" autocomplete="off"
                                                                class="form-control" placeholder="Thời hạn" />
                                                        </div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/muiten.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <textarea name="" id="" rows="1" cols="" class="form-control"
                                                                    placeholder="Nhập chủ đề/mục tiêu cuộc họp"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/pencil.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <select class="selectpicker" multiple
                                                                    data-actions-box="true" data-width="100%"
                                                                    data-live-search="true" title="Chọn thư ký..."
                                                                    data-select-all-text="Chọn tất cả"
                                                                    data-deselect-all-text="Bỏ chọn" data-size="3"
                                                                    data-selected-text-format="count > 1"
                                                                    data-count-selected-text="Có {0} Thư ký"
                                                                    data-live-search-placeholder="Tìm kiếm...">
                                                                    @foreach ($listUsers->data as $value)
                                                                        <option value="{{ $value->name }}">
                                                                            {{ $value->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/person-check.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <select class="selectpicker" multiple
                                                                    data-actions-box="true" data-width="100%"
                                                                    data-live-search="true" title="Chọn thành viên..."
                                                                    data-select-all-text="Chọn tất cả"
                                                                    data-deselect-all-text="Bỏ chọn" data-size="3"
                                                                    data-selected-text-format="count > 1"
                                                                    data-count-selected-text="Có {0} thành viên"
                                                                    data-live-search-placeholder="Tìm kiếm...">
                                                                    @foreach ($listUsers->data as $value)
                                                                        <option value="{{ $value->name }}">
                                                                            {{ $value->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title">Vấn đề tiếp nhận</div>
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
                                                        <tr data-bs-toggle="modal"
                                                        data-bs-target="#suaVanDeTonDong">
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="description-problem" style="cursor: pointer;"
                                                                    
                                                                    title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                    Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div class="issuer" title="Đặng Vũ Lam Mai - MTT123">Đặng
                                                                    Vũ Lam Mai - MTT123</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <div>Đã giải quyết</div>
                                                            </td>
                                                        </tr>

                                                        <tr data-bs-toggle="modal"
                                                        data-bs-target="#suaVanDeTonDong">
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="description-problem" style="cursor: pointer;"
                                                                    title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                    Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div class="issuer" title="Đặng Vũ Lam Mai - MTT123">Đặng
                                                                    Vũ Lam Mai - MTT123</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <div>Đã tiếp nhận</div>
                                                            </td>
                                                        </tr>

                                                        <tr data-bs-toggle="modal"
                                                        data-bs-target="#suaVanDeTonDong">
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="description-problem" style="cursor: pointer;"
                                                                    title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                    Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div class="issuer" title="Đặng Vũ Lam Mai - MTT123">Đặng
                                                                    Vũ Lam Mai - MTT123</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <div>Đã giải quyết</div>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="action_wrapper-cmt rounded border p-3">
                                                <div class="card-title mb-3">
                                                    <i class="bi bi-journal-check" style="padding-right: 4px"></i>
                                                    Nội dung trao đổi
                                                </div>
                                                <div class="" style="max-height: 240px; overflow-y: scroll;">
                                                    <div class=" mb-3" style="background: #f8f9fa">
                                                        <div class="col-sm-12 d-flex flex-start justify-between">
                                                            <i class="col bi bi-journal-check"
                                                                style="padding-right: 4px; padding-left: 25px"></i>

                                                            <p title="It is a long established fact that a reader will be distracted by the readable content of a page."
                                                                class="information col-sm-10">
                                                                It is a long established fact that a reader will
                                                                bedistracted by the readable content of a page
                                                            </p>
                                                            <div class="col">
                                                                <p class="fs-6">9:58</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=" mb-3" style="background: #f8f9fa">
                                                        <div class="col-sm-12 d-flex flex-start justify-between">
                                                            <i class="col bi bi-journal-check"
                                                                style="padding-right: 4px; padding-left: 25px"></i>

                                                            <p title="It is a long established fact that a reader will be distracted by the readable content of a page."
                                                                class="col-sm-10">
                                                                It is a long established fact that a reader will
                                                                bedistracted by the readable content of a page.
                                                            </p>
                                                            <div class="col">
                                                                <p class="fs-6">9:58</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=" mb-3" style="background: #f8f9fa">
                                                        <div class="col-sm-12 d-flex flex-start justify-between">
                                                            <i class="col bi bi-journal-check"
                                                                style="padding-right: 4px; padding-left: 25px"></i>

                                                            <p title="It is a long established fact that a reader will be distracted by the readable content of a page."
                                                                class="col-sm-10">
                                                                It is a long established fact that a reader will
                                                                bedistracted by the readable content of a page.
                                                            </p>
                                                            <div class="col">
                                                                <p class="fs-6">9:58</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=" mb-3" style="background: #f8f9fa">
                                                        <div class="col-sm-12 d-flex flex-start justify-between">
                                                            <i class="col bi bi-journal-check"
                                                                style="padding-right: 4px; padding-left: 25px"></i>

                                                            <p title="It is a long established fact that a reader will be distracted by the readable content of a page."
                                                                class="col-sm-10">
                                                                It is a long established fact that a reader will
                                                                bedistracted by the readable content of a page.
                                                            </p>
                                                            <div class="col">
                                                                <p class="fs-6">9:58</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 mt-4">
                                                    <form action="/giao-ban" method="" id="commentForm">
                                                        <textarea id="commenttextarea" class="form-control" id="exampleFormControlTextarea1" placeholder="Nhập nội dung"
                                                        rows="3"></textarea>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div
                                                class="action_wrapper-upload rounded border p-3 h-100  d-flex flex-column">
                                                <div class="card-title mb-3">
                                                    <i class="bi bi-paperclip" style="padding-right: 4px"></i>
                                                    File đính kèm
                                                </div>
                                                <div class="upload_wrapper-items">
                                                    <ul class="modal_upload-list"></ul>
                                                    <div class="alert alert-danger alertNotSupport" role="alert"
                                                        style="display:none" >
                                                        File bạn tải lên hiện tại không hỗ trợ !
                                                    </div>
                                                    <div class="modal_upload-wrapper">
                                                        <label class="modal_upload-label" for="file">
                                                            Tải xuống tệp hoặc đính kèm liên kết ở đây</label>
                                                        <div class="mt-2 text-secondary fst-italic">Hỗ trợ định dạng JPG,
                                                            PNG, PDF, XLSX, DOCX, hoặc PPTX kích
                                                            thước tệp không quá 10MB</div>
                                                        <div
                                                            class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                            <div class="modal_upload-addFile me-3">
                                                                <button role="button" type="button"
                                                                    class="btn position-relative pe-4 ps-4">
                                                                    <img style="width:16px;height:16px"
                                                                        src="{{ asset('assets/img/upload-file.svg') }}" />
                                                                    Tải file lên
                                                                    <input role="button" type="file"
                                                                        class="modal_upload-input" name="files[]"
                                                                        class="modal_upload-file" multiple
                                                                        onchange="updateList(event)">
                                                                </button>
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
                        <div class="card">
                            <div class="card-body pb-4">
                                <div class="mb-2">
                                    <div class="card-title">Đã được phản hồi</div>
                                </div>
                                <div class='row'>
                                    <div class="col-md-12">
                                        <div class="repeater-hopPhongBan position-relative style_table-3">
                                            <table class="table table-responsive table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 2%">STT</th>
                                                        <th style="width: 20%">
                                                            <div class="d-flex justify-content-between">
                                                                Vấn đề tồn đọng
                                                                {{-- <div>
                                                                    <i class="bi bi-chat-right-text" style="font-size:1.4rem"></i>
                                                                </div> --}}

                                                            </div>
                                                        </th>
                                                        <th style="width: 10%">
                                                            Phân loại
                                                        </th>
                                                        <th style="width: 12%">Người nêu</th>
                                                        <th style="width: 22%">Nguyên nhân</th>
                                                        <th style="width: 21%">
                                                            Hướng giải quyết
                                                        </th>
                                                        <th style="width: 6%">Thời hạn</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:200px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text-nowrap d-inline-block text-truncate"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Giải quyết">Giải quyết</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text-nowrap d-inline-block text-truncate"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Nguyễn Ngọc Bảo">Nguyễn Ngọc Bảo</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:230px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:220px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>19/03</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
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
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThuocTinh"
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
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:200px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Giải quyết">Giải quyết</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Nguyễn Ngọc Bảo">Nguyễn Ngọc Bảo</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:230px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:220px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>18/03</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
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
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThuocTinh"
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
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:200px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Than phiên">Than phiền</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Nguyễn Ngọc Bảo">Nguyễn Ngọc Bảo</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:230px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:220px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>19/03</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
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
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThuocTinh"
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
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:200px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Than phiền">Than phiền</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <div type="text"
                                                                    class="form-control border-0 bg-transparent"
                                                                    value="Nguyễn Ngọc Bảo">Nguyễn Ngọc Bảo</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:230px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:220px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>17/03</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
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
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThuocTinh"
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
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:200px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="text"
                                                                    class="form-control border-0 bg-transparent" readonly
                                                                    value="Than phiền" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="text"
                                                                    class="form-control border-0 bg-transparent" readonly
                                                                    value="Nguyễn Ngọc Bảo" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:230px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-inline-block text-truncate"
                                                                style="max-width:220px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                        </td>
                                                        <td>
                                                            <div>19/03</div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-center">
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
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#xoaThuocTinh"
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

                    <div class="col-lg-12 d-flex justify-content-end">
                        <div class="action_table-wrapper text-end mt-3 mb-3">
                            {{-- <a href="kho-luu-tru-bien-ban-hop"
                                    class="btn btn-outline-danger action_table-btn"
                                    style="margin-right:6px;">
                                    Đến kho lưu trữ
                                </a> --}}
                            {{-- <a href='bien-ban-hop' class="btn btn-danger action_table-btn">
                                    Duyệt 
                                </a> --}}
                            <a type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                                data-bs-toggle="modal" data-bs-target="#duyetbienbanhop">Duyệt</a>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-end mb-3">
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
        @include('template.footer.footer')
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Cập nhật vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Vấn đề tồn đọng" value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                        </div>
                        <div class="col-sm-7 mb-3">
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Người nêu" value="Nguyễn Ngọc Bảo">
                        </div>
                        <div class="col-sm-5 mb-3">
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="PCI" value="Nguyễn Ngọc Bảo">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Nguyên nhân" value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Hướng giải quyết" value="Sẽ gửi trong tuần">
                        </div>
                        <div class="col-sm-6">
                            <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Thời hạn">
                                <input id="timeSuaVanDe" value="<?php echo date('d/m/Y'); ?>" class="form-control"
                                    type="text">
                                <i class="bi bi-calendar-plus style_pickdate"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div data-bs-toggle="tooltip" data-bs-placement="top" title="Tình trạng">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal duyệt biên bản họp -->
    <div class="modal fade" id="duyetbienbanhop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl-centered" role="document" style="max-width: 21cm">
            <div class="modal-content">

                <div class="modal-body" style="padding: 0; margin: 1.5cm 1.5cm 1.5cm 2cm">
                    <div class="d-block text-center mb-3">
                        <h5 class="modal-title w-100 fs-3">BIÊN BẢN HỌP GIAO BAN</h5>
                        <p class="m-0 fs-5 fst-italic">Phòng Marketing</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thời gian:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">23/03/2023 09:03 - 23/03/2023 10:03</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Chủ đề:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Họp báo cáo kết quả tuần 3 tháng 3/2023 phòng Marketing
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Chủ trì:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Nguyễn Vũ Nguyệt Minh - MTT123</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thư kí:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Đặng Vũ Lam Mai - MTT239</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thành viên tham
                                                    gia:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Nguyễn Vũ Nguyệt Minh - MTT123, Đặng Vũ Lam Mai -
                                                    MTT239, Hồ Thị Hồng Vân - MTT125, Hồ Thị Hồng Vân - MTT125, Hồ Thị Hồng
                                                    Vân - MTT125</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thành viên vắng:
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Chu Văn Linh - MTT123, Nguyễn Ngọc Bảo - MTT124</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal-title fw-bolder">I. NỘI DUNG TRAO ĐỔI</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="mt-3 modal_body-title">
                                    <p class="" type="text">
                                        1. Chỉnh sửa giao diện Họp giao ban <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        2. Chỉnh sửa giao diện Họp giao ban <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal-title fw-bolder">II. VẤN ĐỀ TỒN ĐỌNG</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mt-4 modal_body-title">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Vấn đề</th>
                                            <th scope="col">Người nêu</th>
                                            <th scope="col">Nguyên nhân</th>
                                            <th scope="col">Hướng giải quyết</th>
                                            <th scope="col">PIC</th>
                                            <th scope="col">Thời hạn</th>
                                            <th scope="col">Tình trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tino</td>
                                            <td>Sẽ gửi trong tuần</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>05/04/2023</td>
                                            <td>Có hướng giải quyết</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tino</td>
                                            <td>Sẽ gửi trong tuần</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>05/04/2023</td>
                                            <td>Có hướng giải quyết</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tino</td>
                                            <td>Sẽ gửi trong tuần</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>05/04/2023</td>
                                            <td>Có hướng giải quyết</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mt-3 modal_body-title fw-bolder">Trưởng bộ phận</div>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title"></p>
                                <img src="" height="60" alt="" />
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title mb-0">Đặng Vũ Lam Mai</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mt-3 modal_body-title fw-bolder">Thành viên tham gia</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title m-0">
                                    Nguyễn Ngọc Bảo, Hồ Thị Hồng Van, Đặng Lam Mai
                                </p>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title m-0">Chúng tôi xác nhận nội dung cuộc hop</p>
                            </div>

                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mt-3 modal_body-title fw-bolder">Thư ký</div>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title"></p>
                                <img src="" height="60" alt="" />
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title mb-0">Đặng Vũ Lam Mai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger ps-5 pe-5" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    {{-- Xóa thuộc tính --}}
    <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa vấn đề này</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá vấn đề đã chọn không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn xóa</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal title other (khác) --}}
    <div class="modal fade" id="orther" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM Vị trí/Chức danh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Đơn vị công tác<span class="text-danger">*</span>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập đơn vị công tác">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#themThanhVien">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer-script')
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}">
    </script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}">
    </script>

    <script type="text/javascript" src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>

    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                locale: {
                    format: 'DD/MM/YYYY'
                },
                language: 'ru',
                timePicker: true,
                locale: {
                    "separator": " - ",
                    "applyLabel": "Áp dụng",
                    "cancelLabel": "Hủy bỏ",
                    "fromLabel": "Từ",
                    "toLabel": "Đến",
                    "customRangeLabel": "Custom",
                    "daysOfWeek": [
                        "Th2",
                        "Th3",
                        "Th4",
                        "Th5",
                        "Th6",
                        "Th7",
                        "CN"
                    ],
                    "monthNames": [
                        "Tháng 1",
                        "Tháng 2",
                        "Tháng 3",
                        "Tháng 4",
                        "Tháng 5",
                        "Tháng 6",
                        "Tháng 7",
                        "Tháng 8",
                        "Tháng 9",
                        "Tháng 10",
                        "Tháng 11",
                        "Tháng 12",
                    ],
                }
            });
            $('input[name="daterange"]').val('');
            $('input[name="daterange"]').attr("placeholder", "Chọn thời hạn");
        });
    </script>

    <script>
        document.getElementById("commenttextarea").addEventListener("keydown", function(e) {
            if (e.keyCode === 13 && !e.shiftKey) {
                e.preventDefault();
                document.querySelector('#commentForm').submit();
            }
        });
    </script>

    <script>
        updateList = function(e) {
            const input = e.target;
            const outPut = input.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(
                '.modal_upload-list');
            const notSupport = outPut.parentNode.querySelector('.alertNotSupport');

            let children = outPut.innerHTML;
            console.log(children);
            const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
            const maxFileSize = 10485760; //10MB in bytes

            for (let i = 0; i < input.files.length; ++i) {
                const file = input.files.item(i);
                if (allowedTypes.includes(file.type) && file.size <= maxFileSize) {
                    children += `<li>
                <span class="fs-5">
                    <i class="bi bi-link-45deg"></i> ${file.name}
                </span>
                <span class="modal_upload-remote" onclick="return this.parentNode.remove()">
                    <img style="width:18px;height:18px" src="{{ asset('assets/img/trash.svg') }}" />
                </span>
            </li>`;
                } else {

                    notSupport.style.display = 'block';
                    setTimeout(() => {
                        notSupport.style.display = 'none';
                    }, 3500);
                }
            }
            outPut.innerHTML = children;
        }
        //delete file from input
        function removeFileFromFileList(input, index) {
            const dt = new DataTransfer()

            const {
                files
            } = input

            for (let i = 0; i < files.length; i++) {
                const file = files[i]
                if (index !== i)
                    dt.items.add(file) // here you exclude the file. thus removing it.
            }

            input.files = dt.files // Assign the updates list
        }
    </script>

    <script>
        $(document).ready(function () {
            $.datetimepicker.setLocale('vi');
                $('#hopGiaoBanNgayVanDeTonDong').datetimepicker({
                    format: 'd/m/Y',
                    timepicker: false,
                });
                $('#gioTaoVanDeTonDong').datetimepicker({
                    datepicker:false,
                    format:'H:i'
                });
                $('#thoiHanVanDeTonDong').datetimepicker({
                    format: 'd/m/Y',
                    timepicker: false,
                });
            });
    </script>
@endsection
