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
                                    <select class="selectpicker mainSection_width-select" data-actions-box="true" data-live-search="true" title="Chọn chủ trì..." data-live-search-placeholder="Tìm kiếm..." data-size="3">
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
                                    {{-- <option >Giao ban Ngày</option>
                                    <option>Tuần</option>
                                    <option>Tháng</option>
                                    <option>Quý</option>
                                    <option>Khác</option> --}}
                                    <option value="1">{{ $meeting->type }}</option>
                                </select>
                            </div>
                        </div>

                        <div id="mainSection_width" class="mainSection_thismonth position-relative d-flex align-items-center overflow-hidden">
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
                                                                <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/time.svg') }}" />
                                                            </div>
                                                            {{-- <div id="date_time-hopgiaoban"
                                                                class="d-flex align-items-center justify-content-between datetimepicker_wrapper">
                                                                <input id="datetimepicker" value="<?php// echo date('d/m/Y h:m'); ?> ?> ?> ?> ?> ?> ?> ?> ?> ?> ?> ?> ?> ?> ?> ?> ?>"
                                                                    class="form-control" type="text">
                                                                <div class="datetimepicker_separate">-</div>
                                                                <input id="datetimepicker2" value="<?php //echo date('d/m/Y h:m');
                                                                ?>"
                                                                    class="form-control" type="text">
                                                            </div> --}}
                                                            <input type="text" name="daterange" autocomplete="off" class="form-control" placeholder="Chọn thời gian, thêm giờ" />
                                                        </div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex">
                                                                <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/muiten.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <textarea name="" id="" rows="1" cols="" class="form-control" placeholder="Nhập chủ đề/mục tiêu cuộc họp">{{ $meeting->title }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/pencil.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <select class="selectpicker" multiple data-actions-box="true" data-width="100%" data-live-search="true" title="Chọn thư ký..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-size="3" data-selected-text-format="count > 1" data-count-selected-text="Có {0} Thư ký" data-live-search-placeholder="Tìm kiếm...">
                                                                    @foreach ($listUsers->data as $value)
                                                                        <option value="{{ $value->id }}">
                                                                            {{ $value->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/person-check.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <select class="selectpicker" multiple data-actions-box="true" data-width="100%" data-live-search="true" title="Chọn thành viên..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-size="3" data-selected-text-format="count > 1" data-count-selected-text="Có {0} thành viên" data-live-search-placeholder="Tìm kiếm...">
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
                                                <div class="alert alert-warning border-warning m-0" style="padding: 0 6px">
                                                    <i class="bi bi-exclamation-triangle pe-2"></i><strong>Mã cuộc họp: {{$meeting->code}} </strong>
                                                    
                                                </div>
                                            </div>

                                            <div class="table-responsive rounded">
                                                <table class="table table-responsive table-hover table-bordered m-0 style_disableAll">
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
                                                        @foreach ($pendingReports as $item)
                                                            <tr data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong{{ $item->id }}" role="button">
                                                                <td>
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        {{ $loop->iteration }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="description-problem" style="cursor: pointer;" title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                        {{ $item->problem }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="issuer" title="Đặng Vũ Lam Mai - MTT123">
                                                                        {{ $item->user->name ?? '' }}
                                                                    </div>
                                                                </td>
                                                                <td>{{ date('d/m', strtotime($item->deadline)) }}</td>
                                                                <td>
                                                                    <div>{{ $item->status }}</div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
                                                    <i class="bi bi-journal-check"></i>
                                                    Nội dung trao đổi
                                                </div>
                                                <div class="" style="max-height: 240px; overflow-y: scroll; overflow-x:hidden" id="notes">


                                                </div>
                                                <div class="col-12 mt-4">
                                                    <form id="commentForm">
                                                        <div class="d-flex align-items-center">
                                                            <input type="hidden" name="meeting_id" value="{{ $meeting->id }}">
                                                            <textarea name="note" class="form-control" id="meeting-note" placeholder="Nhập nội dung" rows="1" maxlength="130"></textarea>
                                                            <button type="submit" class="btn btn-outline-danger ms-3">Gửi</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="action_wrapper-upload rounded border p-3 h-100  d-flex flex-column">
                                                <div class="card-title mb-3">
                                                    <i class="bi bi-paperclip"></i>
                                                    File đính kèm
                                                </div>
                                                <form action="/giao-ban/{{ $meeting->id }}" method="POST" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="upload_wrapper-items">
                                                        @if ($meeting -> files && count(explode(',', $meeting -> files)))
                                                            <ul>
                                                                @foreach (explode(',', $meeting ->files) as $file)
                                                                    <li>
                                                                        <span class="fs-5">
                                                                            <a href="{{ $file }}" target="_black">
                                                                                <i class="bi bi-link-45deg"></i> {{ $file }}
                                                                            </a>
                                                                        </span>
                                                                        <input type="hidden" name="uploadedFiles[]" value="{{ $file }}" />
                                                                        <span class="modal_upload-remote" onclick="removeUploaded(event)">
                                                                            <img style="width:18px;height:18px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                        </span>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                        <ul class="modal_upload-list"></ul>
                                                        <div class="alert alert-danger alertNotSupport" role="alert" style="display:none">
                                                            File bạn tải lên hiện tại không hỗ trợ !
                                                        </div>
                                                        <div class="modal_upload-wrapper">
                                                            <label class="modal_upload-label" for="file">
                                                                Tải xuống tệp hoặc đính kèm liên kết ở đây</label>
                                                            <div class="mt-2 text-secondary fst-italic">Hỗ trợ định dạng JPG,
                                                                PNG, PDF, XLSX, DOCX, hoặc PPTX kích
                                                                thước tệp không quá 10MB</div>
                                                            <div class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                                <div class="modal_upload-addFile me-3">
                                                                    <button role="button" type="button" class="btn position-relative pe-4 ps-4">
                                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/upload-file.svg') }}" />
                                                                        Tải file lên
                                                                        <input role="button" type="file" class="modal_upload-input modal_upload-file" name="files[]" multiple onchange="updateList(event)">
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-end"><button type="submit" class="btn btn-outline-danger">Tải file</button></div>
                                                </form>
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
                                                        <th class="text-nowrap" style="width: 2%">STT</th>
                                                        <th class="text-nowrap" style="width: 20%">
                                                            <div class="d-flex justify-content-between">
                                                                Vấn đề tồn đọng
                                                                {{-- <div>
                                                                    <i class="bi bi-chat-right-text" style="font-size:1.4rem"></i>
                                                                </div> --}}

                                                            </div>
                                                        </th>
                                                        <th class="text-nowrap" style="width: 8%">
                                                            Phân loại
                                                        </th>
                                                        <th class="text-nowrap" style="width: 10%">Người nêu</th>
                                                        <th class="text-nowrap" style="width: 20%">Nguyên nhân</th>
                                                        <th class="text-nowrap" style="width: 21%">
                                                            Hướng giải quyết
                                                        </th>
                                                        <th class="text-nowrap" style="width: 4%">
                                                            Người đảm nhiệm
                                                        </th>
                                                        <th class="text-nowrap" style="width: 6%">Thời hạn</th>
                                                        <th colspan="2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($handledReports as $item)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    {{ $loop->iteration }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                    {{ $item->problem }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div type="text-nowrap d-inline-block text-truncate" class="form-control border-0 bg-transparent" value="Giải quyết">Giải quyết</div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div type="text-nowrap d-inline-block text-truncate" class="form-control border-0 bg-transparent" value="Nguyễn Ngọc Bảo">
                                                                        {{ $item->user->name ?? '' }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:230px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                    {{ $item->reason }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-nowrap d-inline-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                                    {{ $item->solution }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    @foreach ($item->pics as $u)
                                                                        {{ $u->name }},
                                                                    @endforeach
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    {{ date('d/m', strtotime($item->deadline)) }}
                                                                </div>
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
                                                                <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#nhiemVuPhatSinh" data-repeater-delete>
                                                                            <i class="bi bi-arrow-right-square-fill"></i>
                                                                            Chuyển thành nhiệm vụ phát sinh
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong{{ $item->id }}">
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh" data-repeater-delete>
                                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                            Xóa
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach



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
                            <a type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#duyetbienbanhop">Duyệt</a>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-end mb-3">
                        <div id='warning_notification' class="alert alert-warning alert-dismissible fade show border-left border-warning" role="alert">
                            <div class='d-flex align-items-center'>
                                <div class='warning_notification-icon'><i class="bi bi-exclamation-triangle pe-2"></i>
                                </div>
                                <div class="warning_notification-body">
                                    <p class='m-0' style="font-size:1.2rem">Nhiệm vụ <strong>Họp giao ban
                                        </strong>ngày
                                        đã quá
                                        hạn!</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                                <div contenteditable="true" readonly class="contenteditable" placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông tin"></div>
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
                                <input id="datetimepicker3" readonly value="<?php echo date('d/m/Y'); ?>" class="form-control" type="text">
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
                            <label for="inputPassword" class="col-form-label" style="padding-right:10px;border-radius:4px">Phản hồi vấn đề</label>
                            <div class="w-100" style="flex:1;overflow:hidden">
                                <div contenteditable="true" class="contenteditable" placeholder="Vui lòng phản hồi vấn đề tại đây"></div>
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
    @foreach ($pendingReports as $item)
        <div class="modal fade" id="suaVanDeTonDong{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100" id="exampleModalLabel">Cập nhật vấn đề tồn đọng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/bao-cao-van-de/{{ $item->id }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="row">
                                <div class="col-sm-12 mb-3">
                                    <input class="form-control" type="text" readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Vấn đề tồn đọng" value="{{ $item->problem }}" name="problem">
                                </div>
                                <div class="col-sm-7 mb-3">
                                    <input class="form-control" type="text" readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Người nêu" value="{{ $item->user->name ?? '' }}">
                                </div>
                                <div class="col-sm-5 mb-3">
                                    <select class="selectpicker" multiple required data-actions-box="true" data-width="100%" data-live-search="true" title="Người đảm nhiệm *" data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-size="3" data-selected-text-format="count > 1" data-count-selected-text="Có {0} người đảm nhiệm" data-live-search-placeholder="Tìm kiếm..." name='pics[]'>
                                        @foreach ($listUsers->data as $value)
                                            <option value="{{ $value->id }}">
                                                {{ $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <textarea rows="1" class="form-control" placeholder="Nguyên nhân" name="reason">{{ $item->reason }}</textarea>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <textarea rows="1" class="form-control" placeholder="Hướng giải quyết" name="solution">{{ $item->solution }}</textarea>
                                </div>
                                <div class="col-sm-6">
                                    <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Thời hạn">
                                        <input id="timeSuaVanDe" value="{{ date('d/m/Y', strtotime($item->deadline)) }}" class="form-control" type="text" name="deadline">
                                        <i class="bi bi-calendar-plus style_pickdate"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Tình trạng">
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option value="0">Đã tiếp nhận</option>
                                            <option value="1">Đã có hướng giải quyết</option>
                                            <option value="2">Đã giải quyết</option>
                                            <option value="3">Không thể giải quyết</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-danger">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal duyệt biên bản họp -->
    <div class="modal fade" id="duyetbienbanhop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl-centered" role="document" style="max-width: 21cm">
            <div class="modal-content">
                <form>
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


                </form>
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
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themThanhVien">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Giao nhiệm vụ phát sinh -->
    <div class="modal fade" id="nhiemVuPhatSinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Giao nhiệm vụ phát sinh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <input type="text" class="form-control" readonly value="Chưa hoàn thành báo cáo do abc ch">
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Thời hạn" data-bs-original-title="Thời hạn">
                                <input id="giaoNhiemVuPhatSinh" value="19/03/2023" class="form-control" type="text">
                                <i class="bi bi-calendar-plus style_pickdate"></i>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <textarea class="form-control" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="number" class="form-control" min="0" step="0.05" oninput="onInput(this)" placeholder="Manday" id="title" name="manday">
                        </div>

                        <div class="col-md-6 mb-3">
                            <select class='selectpicker' title="Người đảm nhiệm" multiple data-live-search="true" data-size="5" name="users[]">
                                <option value="1" selected>Bùi Thị Minh Hoa</option>
                                <option value="2">Trần Minh Thao</option>
                                <option value="3">Cao Thị Thúy Hằng</option>
                                <option value="4">Chu Văn Linh</option>
                                <option value="5">Mai Văn Sơn</option>
                                <option value="6">Đỗ Thị Nhàn</option>
                                <option value="7">Bùi Kim Anh</option>
                                <option value="8">Nguyễn Thị Yến Hoa</option>
                                <option value="9">Phạm Thị Huyền</option>
                                <option value="10">Nguyễn Vũ Nguyệt Minh</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class='selectpicker' title="Người liên quan" multiple data-live-search="true" data-size="5" name="relatedUsers[]">
                                <option value="1">Bùi Thị Minh Hoa</option>
                                <option value="2">Trần Minh Thao</option>
                                <option value="3">Cao Thị Thúy Hằng</option>
                                <option value="4">Chu Văn Linh</option>
                                <option value="5">Mai Văn Sơn</option>
                                <option value="6">Đỗ Thị Nhàn</option>
                                <option value="7">Bùi Kim Anh</option>
                                <option value="8">Nguyễn Thị Yến Hoa</option>
                                <option value="9">Phạm Thị Huyền</option>
                                <option value="10">Nguyễn Vũ Nguyệt Minh</option>
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="repeater">
                                <div data-repeater-list="kpiKeys">
                                    <div class="row" data-repeater-item>
                                        <div class="col-md-9 mb-3">
                                            <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true" name="id">
                                                <option value="" hidden>Chọn chỉ số key</option>
                                                <option value="1">Số hợp đồng nguyên tắc được kí</option>
                                                <option value="2">Số lượt viếng thăm</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <input type="number" min="0" class="form-control" placeholder="Giá trị" name="quantity" />
                                        </div>
                                        <div class="col-md-1 mb-3 d-flex align-items-center">
                                            <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex justify-content-start">
                                        <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Giao</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer-script')
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

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
            $('input[name="daterange"]').attr("placeholder", "Chọn thời gian, thêm giờ");
        });
    </script>

    <script>
        updateList = function(e) {
            const input = e.target;
            const outPut = input.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.modal_upload-list');
            const notSupport = outPut.parentNode.querySelector('.alertNotSupport');

            let children = '';
            console.log(children);
            const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
            const maxFileSize = 10485760; //10MB in bytes

            for (let i = 0; i < input.files.length; ++i) {
                const file = input.files.item(i);
                //allowedTypes.includes(file.type) &&
                if (file.size <= maxFileSize) {
                    children += `<li>
                <span class="fs-5">
                    <i class="bi bi-link-45deg"></i> ${file.name}
                </span>
                <span class="modal_upload-remote" onclick="removeFileFromFileList(event, ${i})">
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
        function removeFileFromFileList(event, index) {
            const deleteButton = event.target;
            //get tag name
            const tagName = deleteButton.tagName.toLowerCase();
            let liEl;
            if (tagName == "img") {
                liEl = deleteButton.parentNode.parentNode;
            }
            if (tagName == "span") {
                liEl = deleteButton.parentNode;
            }

            const inputEl = liEl.parentNode.parentNode.querySelector('.modal_upload-input');
            const dt = new DataTransfer()

            const {
                files
            } = inputEl

            for (let i = 0; i < files.length; i++) {
                const file = files[i]
                if (index !== i)
                    dt.items.add(file) // here you exclude the file. thus removing it.
            }

            inputEl.files = dt.files // Assign the updates list
            liEl.remove();
        }

        function removeUploaded(event) {
            const deleteButton = event.target;
            //get tag name
            const tagName = deleteButton.tagName.toLowerCase();
            let liEl;
            if (tagName == "img") {
                liEl = deleteButton.parentNode.parentNode;
            }
            if (tagName == "span") {
                liEl = deleteButton.parentNode;
            }
            liEl.remove();
        }
    </script>

    <script>
        $(document).ready(function() {
            $.datetimepicker.setLocale('vi');
            $('#hopGiaoBanNgayVanDeTonDong').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
            $('#gioTaoVanDeTonDong').datetimepicker({
                datepicker: false,
                format: 'H:i'
            });
            $('#thoiHanVanDeTonDong').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $.datetimepicker.setLocale('vi');
            $('#giaoNhiemVuPhatSinh').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
        });
    </script>
    <script>
        let jwtToken = "{!! session()->get('token') !!}";

        let user = {!! json_encode(session()->get('user')) !!};
        const meetingId = {!! $meeting->id !!};
        const meetCode = window.location.pathname.split('/')[window.location.pathname.split('/').length - 1];
        const form = document.getElementById('commentForm');
        const notes = document.getElementById('notes');

        const renderListNotes = async () => {
            try {
                notes.innerHTML = '';
                const resp = await fetch('https://sdwtbe.sweetsica.com/api/v1/meetings?code=' + meetCode, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + jwtToken,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                })
                if (!resp.ok) {
                    throw new Error('Error');
                }
                const data = await resp.json();
                const meeting = data.data.data[0];
                console.log(meeting);
                meeting.meeting_logs.forEach(item => {
                    console.log(item);
                    notes.innerHTML += `
                <div class=" mb-3" style="background: #f8f9fa">
                                                        <div class="row d-flex flex-start justify-between">
                                                            <div class="col-md-10 d-flex">
                                                                <i class="bi bi-journal-check mx-3 "></i>
                                                                <div class="d-block text-nowrap text-truncate" style="max-width:435px">
                                                                    <p data-bs-toggle="tooltip" data-bs-placement="top" title="It is a long established fact that a reader will be distracted by the readable content of a page." class="">
                                                                        ${item.note}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                `

                });
            } catch (errr) {
                console.log(errr);
            }
        };
        renderListNotes();
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(form);

            const data = Object.fromEntries(formData);
            //add meeting logs
            try {
                const resp = await fetch('https://sdwtbe.sweetsica.com/api/v1/meeting-logs', {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + jwtToken,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                if (!resp.ok) {
                    throw new Error('Error');
                }
                await resp.json();
                await renderListNotes();
                //clear form
                form.reset();
            } catch (err) {
                console.log(err);
            }
        })
    </script>

    {{-- <script>
    document.getElementById("commenttextarea").addEventListener("keydown", function(e) {
        if (e.keyCode === 13 && !e.shiftKey) {
            e.preventDefault();
            document.querySelector('#commentForm').submit();
        }
    });
</script> --}}
@endsection
