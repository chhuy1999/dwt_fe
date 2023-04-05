@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Biên bản họp Giao Ban')
@section('header-style')
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
    @php
        function getListParticipantIds($meeting)
        {
            $listParticipantIds = [];
            if (!$meeting) {
                return [];
            }
            foreach ($meeting->participants as $participant) {
                array_push($listParticipantIds, $participant->id);
            }
            return $listParticipantIds;
        }

        function getListAbsence($meeting, $listUser)
        {
            $listAbsence = [];
            if (!$meeting) {
                return [];
            }
            if (count($meeting->participants) == 0) {
                return $listUser;
            }
            foreach ($listUser as $user) {
                if (!in_array($user->id, getListParticipantIds($meeting))) {
                    $userDepartement_id = $user->departement_id ?? 0;
                    $meetingDepartement_id = $meeting->departement_id ?? 1;
                    if ($userDepartement_id == $meetingDepartement_id) {
                        array_push($listAbsence, $user);
                    }
                }
            }
            return $listAbsence;
        }

        function removeReportFromMeeting($meeting, $reportId)
        {
            $meetingReportIds = [];
            foreach ($meeting->reports as $report) {
                array_push($meetingReportIds, $report->id);
            }
            $newMeetingReportIds = array_diff($meetingReportIds, [$reportId]);
            return $newMeetingReportIds;
        }
    @endphp
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading d-flex align-items-center justify-content-between">
                        <div class="mainSection_card position-relative" style="flex:1">
                            <div class="mainSection_content row">
                                <div class="col-sm-2">
                                    <div class="text-nowrap">Đơn vị: </div>
                                </div>
                                <div class="col-sm-10">
                                    <strong class="text-nowrap">{{ $meeting->departement->name ?? 'Chưa có đơn vị' }}</strong>
                                </div>
                                <div class="col-sm-2">Chủ trì: </div>
                                <div class="col-sm-10">
                                    <select class="selectpicker mainSection_width-select" data-actions-box="true" data-live-search="true" title="Chọn chủ trì..." data-live-search-placeholder="Tìm kiếm..." data-size="5" id="leaderSelect">
                                        @foreach ($listUsers->data as $value)
                                            @if ($meeting->leader_id == $value->id)
                                                <option value="{{ $value->id }}" selected>{{ $value->name }}</option>
                                            @else
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" style="flex:1">
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
                                                <form action="/giao-ban/{{ $meeting->id }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <input type="hidden" name="leader_id" value="{{ $meeting->leader_id ?? 0 }}" id="leaderIdInput">
                                                        <div class="col-md-7">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/time.svg') }}" />
                                                                </div>
                                                                <input type="text" name="daterange" id="meetTime" autocomplete="off" class="form-control" placeholder="Chọn thời gian, thêm giờ" />
                                                            </div>
                                                            <div class="d-flex align-items-start">
                                                                <div class="d-flex">
                                                                    <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/muiten.svg') }}" />
                                                                </div>
                                                                <div style="flex:1">
                                                                    <textarea readonly name="" id="" rows="1" cols="" class="form-control" placeholder="Nhập chủ đề/mục tiêu cuộc họp">{{ $meeting->title }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/pencil.svg') }}" />
                                                                </div>
                                                                <div style="flex:1">
                                                                    <select class="selectpicker" data-width="100%" data-live-search="true" title="Chọn thư ký..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-size="3" name="secretary_id" data-live-search-placeholder="Tìm kiếm...">

                                                                        @foreach ($listUsers->data as $value)
                                                                            @if ($meeting->secretary_id == $value->id)
                                                                                <option value="{{ $value->id }}" selected>
                                                                                    {{ $value->name }}</option>
                                                                            @else
                                                                                <option value="{{ $value->id }}">
                                                                                    {{ $value->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3 d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <img style="height:14px; width:14px; margin-right:6px" src="{{ asset('assets/img/person-check.svg') }}" />
                                                                </div>
                                                                <div style="flex:1">
                                                                    <select class="selectpicker" multiple data-actions-box="true" data-width="100%" data-live-search="true" title="Chọn thành viên..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-size="3" data-selected-text-format="count > 1" data-count-selected-text="Có {0} thành viên" data-live-search-placeholder="Tìm kiếm..." name="participants[]">
                                                                        @foreach ($listUsers->data as $value)
                                                                            @if (in_array($value->id, getListParticipantIds($meeting)))
                                                                                <option value="{{ $value->id }}" selected>
                                                                                    {{ $value->name }}</option>
                                                                            @else
                                                                                <option value="{{ $value->id }}">
                                                                                    {{ $value->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <div class="d-flex align-items-center justify-content-end mt-3"><button type="submit" class="btn btn-outline-danger">Xác nhận</button></div>
                                                    @endif
                                                </form>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title d-flex align-items-center">
                                                    <div>Vấn đề tiếp nhận</div>
                                                    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <div class="card_action-wrapper ms-3">
                                                        <button role="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#vanDeThaoLuan">Chọn
                                                            vấn đề thảo luận</button>
                                                    </div>
                                                    @endif

                                                </div>

                                                <div class="alert alert-warning border-warning m-0" style="padding: 0 6px">
                                                    <i class="bi bi-exclamation-triangle pe-2"></i><strong>Mã cuộc họp:
                                                        {{ $meeting->code }} </strong>
                                                </div>
                                            </div>
                                            <div class="table-responsive rounded"  style="max-height: 100px;overflow-y: scroll;overflow-x: hidden;">
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
                                                        @foreach ($unhandledReports as $item)
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
                                                                    <div>Đã tiếp nhận</div>
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
                                            <div class="action_wrapper-cmt rounded border p-3 h-100">
                                                <div class="card-title mb-3">
                                                    <i class="bi bi-journal-check"></i>
                                                    Nội dung trao đổi
                                                </div>
                                                <div class="" style="max-height: 240px; overflow-y: scroll; overflow-x:hidden" id="notes">


                                                </div>
                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                <div class="col-12 mt-4">
                                                    <form id="commentForm">
                                                        <div class="d-flex align-items-center">
                                                            <input type="hidden" name="meeting_id" value="{{ $meeting->id }}">
                                                            <textarea name="note" class="form-control" id="meeting-note" placeholder="Nhập nội dung" rows="1" maxlength="130"></textarea>
                                                            <button type="submit" class="btn btn-outline-danger ms-3">Gửi</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                @endif
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
                                                        <input type="hidden" name="uploadedFiles[]" value="" />
                                                        @if ($meeting->files && count(explode(',', $meeting->files)))
                                                            <ul class="p-0" style="max-height: 134px; overflow-y: scroll; overflow-x: hidden;">
                                                                @foreach (explode(',', $meeting->files) as $file)
                                                                    @if (strlen($file))
                                                                        <li>
                                                                            <div class="d-flex align-items-center justify-content-between w-100 border-bottom pt-2 pb-2">
                                                                                <span class="fs-5">
                                                                                    <a href="{{ $file }}" target="_black">
                                                                                        <i class="bi bi-link-45deg"></i>
                                                                                        {{ $file }}
                                                                                    </a>
                                                                                </span>
                                                                                <input type="hidden" name="uploadedFiles[]" value="{{ $file }}" />
                                                                                <span class="modal_upload-remote" onclick="removeUploaded(event)">
                                                                                    <img style="width:18px;height:18px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                </span>
                                                                            </div>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                        <ul class="modal_upload-list" style="max-height: 134px; overflow-y: scroll; overflow-x: hidden;"></ul>
                                                        <div class="alert alert-danger alertNotSupport" role="alert" style="display:none">
                                                            File bạn tải lên hiện tại không hỗ trợ !
                                                        </div>
                                                        <div class="modal_upload-wrapper">
                                                            <label class="modal_upload-label" for="file">
                                                                Tải xuống tệp hoặc đính kèm liên kết ở đây</label>
                                                            <div class="mt-2 text-secondary fst-italic">Hỗ trợ định dạng
                                                                JPG,
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
                                                    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <div class="d-flex align-items-center justify-content-end"><button type="submit" class="btn btn-outline-danger">Tải
                                                            file</button></div>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body pb-4">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table id="listDaDuocPhanHoi" class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap" style="width: 2%">STT</th>
                                                            <th class="text-nowrap" style="width: 20%">
                                                                <div class="d-flex justify-content-between">
                                                                    Vấn đề tồn đọng
                                                                </div>
                                                            </th>
                                                            <th class="text-nowrap" style="width: 8%">
                                                                Phân loại
                                                            </th>
                                                            <th class="text-nowrap" style="width: 10%">Người nêu</th>
                                                            <th class="text-nowrap" style="width: 15%">Nguyên nhân</th>
                                                            <th class="text-nowrap" style="width: 15%">
                                                                Hướng giải quyết
                                                            </th>
                                                            <th class="text-nowrap" style="width: 15%">
                                                                Người đảm nhiệm
                                                            </th>
                                                            <th class="text-nowrap" style="width: 5%">Thời hạn</th>
                                                            <th class="border-0 text-nowrap" style="width: 5%">Trạng thái</th>
                                                            @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')

                                                            <th class="border-start-0"></th>
                                                            @endif
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
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ $item->problem }}">
                                                                        {{ $item->problem }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div type="text-nowrap d-block text-truncate" class="form-control border-0 bg-transparent" value="Giải quyết">Giải quyết</div>
                                                                </td>
                                                                <td>
                                                                    <div type="text-nowrap d-block text-truncate" class="form-control border-0 bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ $item->user->name ?? '' }}">
                                                                        {{ $item->user->name ?? '' }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:100px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ $item->reason }}">
                                                                        {{ $item->reason }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ $item->solution }}">
                                                                        {{ $item->solution }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title=" @foreach ($item->pics as $u) {{ $u->name }}, @endforeach">
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
                                                                <td class="text-nowrap">
                                                                    @switch($item->status)
                                                                        @case('Sent')
                                                                            Đã tiếp nhận
                                                                        @break

                                                                        @case('FoundSolution')
                                                                            Đã có hướng giải quyết
                                                                        @break

                                                                        @case('Solved')
                                                                            Đã giải quyết
                                                                        @break

                                                                        @case('Converted')
                                                                            Đã giao
                                                                        @break

                                                                        @case('CantSolve')
                                                                            không thể giải quyết
                                                                        @break

                                                                        @default
                                                                        @break
                                                                    @endswitch

                                                                </td>
                                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                                <td>
                                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        @if ($item->status != 'Converted')
                                                                            <li>
                                                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#nhiemVuPhatSinh{{ $item->id }}" data-repeater-delete>
                                                                                    <i class="bi bi-arrow-right-square-fill"></i>
                                                                                    Chuyển thành nhiệm vụ phát sinh
                                                                                </a>
                                                                            </li>
                                                                        @endif
                                                                        <li>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong{{ $item->id }}">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                                Sửa
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh{{ $item->id }}" data-repeater-delete>
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                Xóa
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </td>
                                                                @endif
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
                    </div>


                    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
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
                    @endif
                    {{-- <div class="col-lg-12 d-flex justify-content-end mb-3">
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
                    </div> --}}
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
    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
    @foreach ($meeting->reports as $item)
        <div class="modal fade" id="suaVanDeTonDong{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100" id="exampleModalLabel">Cập nhật vấn đề tồn đọng</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('report.update', $item->id) }}" method="POST">
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
                                            @if (in_array($value->id, array_column($item->pics, 'id')))
                                                <option value="{{ $value->id }}" selected>
                                                    {{ $value->name }}
                                                </option>
                                            @else
                                                <option value="{{ $value->id }}">
                                                    {{ $value->name }}

                                                </option>
                                            @endif
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
    @endif

    <!-- Modal duyệt biên bản họp -->
    <div class="modal fade" id="duyetbienbanhop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl-centered" role="document" style="max-width: 21cm">
            <div class="modal-content">


                <div class="modal-body" style="padding: 0; margin: 1.5cm 1.5cm 1.5cm 2cm">
                    <div class="d-block text-center mb-3">
                        <h5 class="modal-title w-100 fs-3">BIÊN BẢN HỌP GIAO BAN {{ $meeting->type }}</option>
                        </h5>
                        {{-- <p class="m-0 fs-5 fst-italic">Phòng {{$meeting}}</p> --}}
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="fs-5 modal_body-title fw-bolder text-nowrap">Thời gian:</p>
                                            </td>
                                            <td>
                                                {{ date('d/m/y H:i', strtotime($meeting->start_time)) }} -
                                                {{ date('d/m/y H:i', strtotime($meeting->end_time)) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Chủ đề:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">{{ $meeting->title }}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Chủ trì:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">{{ $meeting->leader->name ?? '' }} -
                                                    {{ $meeting->leader->code ?? '' }}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thư kí:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">{{ $meeting->secretary->name ?? '' }} -
                                                    {{ $meeting->secretary->code ?? '' }}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thành viên tham
                                                    gia:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">
                                                    @if ($meeting->participants)
                                                        @foreach ($meeting->participants as $participant)
                                                            {{ $participant->name }} - {{ $participant->code }}
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thành viên vắng:
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fs-5">
                                                    @foreach (getListAbsence($meeting, $listUsers->data) as $absence)
                                                        {{ $absence->name }} - {{ $absence->code }},&nbsp;
                                                    @endforeach
                                                </div>
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
                                    @foreach ($meeting->meeting_logs as $log)
                                        <p> - {{ $log->note }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal-title fw-bolder">II. FILES ĐÍNH KÈM</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="mt-3 modal_body-title">
                                    @if ($meeting->files != null && count(explode(',', $meeting->files)) > 0)
                                        @foreach (explode(',', $meeting->files) as $file)
                                            @if (strlen($file) > 0)
                                                <a href="{{ $file }}" target="_blank"> - {{ $file }}</a>
                                                <br />
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal-title fw-bolder">III. VẤN ĐỀ TỒN ĐỌNG</div>
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
                                        @foreach ($meeting->reports as $report)
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index + 1 }}
                                                </th>
                                                <td>
                                                    {{ $report->problem }}
                                                </td>
                                                <td>
                                                    {{ $report->user->name ?? '' }} - {{ $report->user->code ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $report->reason }}
                                                </td>
                                                <td>
                                                    {{ $report->solution }}
                                                </td>
                                                <td>
                                                    @foreach ($report->pics as $pic)
                                                        {{ $pic->name ?? '' }} - {{ $pic->code ?? '' }}
                                                    @endforeach
                                                </td>
                                                <td>{{ $report->deadline ? date('d/m/y', strtotime($report->deadline)) : '' }}
                                                </td>
                                                <td>
                                                    @switch($report->status)
                                                        @case('Sent')
                                                            Đã tiếp nhận
                                                        @break

                                                        @case('FoundSolution')
                                                            Đã có hướng giải quyết
                                                        @break

                                                        @case('Solved')
                                                            Đã giải quyết
                                                        @break

                                                        @case('Converted')
                                                            Đã giao
                                                        @break

                                                        @case('CantSolve')
                                                            không thể giải quyết
                                                        @break

                                                        @default
                                                        @break
                                                    @endswitch
                                                </td>
                                            </tr>
                                        @endforeach

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
                                <p class="modal_body-title mb-0">{{ $meeting->leader->name ?? '' }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mt-3 modal_body-title fw-bolder">Thành viên tham gia</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title m-0">
                                    @foreach ($meeting->participants as $participant)
                                        {{ $participant->name }} - {{ $participant->code }}, &nbsp;
                                    @endforeach
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
                                <p class="modal_body-title mb-0">{{ $meeting->secretary->name ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger ps-5 pe-5" data-bs-dismiss="modal">Hủy</button>
                    <form action="/giao-ban/{{ $meeting->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="1">
                        <button type="submit" class="btn btn-danger">Xác nhận</button>
                    </form>
                </div>


            </div>
        </div>
    </div>

    {{-- Modal Chọn vấn đề thảo luận --}}
    <div class="modal fade" id="vanDeThaoLuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="exampleModalLabel">Chọn vấn đề thảo luận</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/giao-ban/{{ $meeting->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <div class="table-responsive">
                            <table id="dsVanDeThaoLuan" class="table table-responsive table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-nowrap text-center" style="width:3%">&nbsp;</th>
                                        <th scope="col" class="text-nowrap text-center" style="width:3%">STT</th>
                                        <th scope="col" class="text-nowrap" style="width:30%">Vấn đề tồn đọng</th>
                                        <th scope="col" class="text-nowrap" style="width:30%">Người nêu</th>
                                        <th scope="col" class="text-nowrap" style="width:14%">Đơn vị</th>
                                        <th scope="col" class="text-nowrap" style="width:10%">Phân loại</th>
                                        <th scope="col" class="text-nowrap" style="width:10%">Thời hạn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendingReports as $rp)
                                        <tr>
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" value="{{ $rp->id }}" name="reports[]" id="report{{ $rp->id }}">
                                            </td>
                                            <th class="text-center" scope="row">
                                                {{ $loop->index + 1 }}
                                            </th>
                                            <td class="text-nowrap">
                                                <div class="form-check text-nowrap text-truncate p-0" style="width:150px;">
                                                    <label class="form-check-label" style="cursor: pointer" for="report{{ $rp->id }}">
                                                        {{ $rp->problem }}
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-nowrap text-truncate" style="width:150px;">
                                                    {{ $rp->user->name ?? '' }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-nowrap text-truncate" style="width:180px;">
                                                    {{ $rp->departement->name ?? '' }}
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                Giải quyết
                                            </td>
                                            <td class="text-nowrap">
                                                {{ date('d/m/Y', strtotime($rp->deadline)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xác nhận</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @foreach ($handledReports as $item)
        {{-- Xóa thuộc tính --}}
        <div class="modal fade" id="xoaThuocTinh{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form action="/giao-ban/{{ $meeting->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            @foreach (removeReportFromMeeting($meeting, $item->id) as $reportId)
                                <input type="hidden" name="reports[]" value="{{ $reportId }}">
                            @endforeach
                            <button type="submit" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
    {{-- {{ dd($handledReports) }} --}}
    @foreach ($handledReports as $item)
        <!-- Modal Giao nhiệm vụ phát sinh -->
        <div class="modal fade" id="nhiemVuPhatSinh{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <form action="{{ route('reportTask.store') }}", method="POST">
                    @csrf
                    {{-- to update status report id --}}
                    <input type="hidden" name="report_id" value="{{ $item->id }}">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title w-100" id="exampleModalLabel">Giao nhiệm vụ phát sinh</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <input type="text" readonly class="form-control" value="{{ $item->problem }}" name="name">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Thời hạn" data-bs-original-title="Thời hạn">
                                        <input id="giaoNhiemVuPhatSinh" name="deadline" value="19/03/2023" class="form-control" type="text">
                                        <i class="bi bi-calendar-plus style_pickdate"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <textarea class="form-control" rows="1" placeholder="Mô tả/Diễn giải" name="description"></textarea>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="number" class="form-control" min="0" step="0.05" oninput="onInput(this)" placeholder="Manday" id="title" name="manDay">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <select class='selectpicker' title="Người đảm nhiệm" multiple data-live-search="true" data-size="5" name="user_id">
                                        @foreach ($listUsers->data as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select class='selectpicker' title="Người liên quan" multiple data-live-search="true" data-size="5" name="relatedUsers[]">
                                        @foreach ($listUsers->data as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <div class="repeater">
                                        <div data-repeater-list="kpiKeys">
                                            <div class="row" data-repeater-item>
                                                <div class="col-md-9 mb-3">
                                                    <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true" name="id">
                                                        @foreach ($kpiKeys->data as $key)
                                                            <option value="{{ $key->id }}">{{ $key->name }}
                                                            </option>
                                                        @endforeach
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
                            <button type="submit" class="btn btn-danger">Giao</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

@endsection
@section('footer-script')
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
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
        let jwtToken = "{!! session()->get('token') !!}";

        let user = {!! json_encode(session()->get('user')) !!};
        const meetingId = {!! $meeting->id !!};
        const meetCode = window.location.pathname.split('/')[window.location.pathname.split('/').length - 1];
        const form = document.getElementById('commentForm');
        const notes = document.getElementById('notes');
        const getThisMeeting = async () => {
            try {
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
                return meeting;

            } catch (e) {
                console.log(e);
                return null;
            }
        }

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
                    <div class="row d-flex flex-start justify-between align-items-center">
                        <div class="col-md-10 d-flex">
                            <i class="bi bi-journal-check mx-3 "></i>
                            <div class="d-block text-nowrap text-truncate" style="max-width:435px">
                                <p data-bs-toggle="tooltip" data-bs-placement="top" title="It is a long established fact that a reader will be distracted by the readable content of a page." class=" m-0">
                                    ${item.note}
                                </p>
                            </div>

                        </div>
                        <div class="col-md-2">
                            <p class="fs-6 m-0">${moment(item.created_at).format('DD/MM/YYYY HH:mm')}</p>
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

    <script>
        const locals = {
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
        $(function() {
            getThisMeeting().then(meet => {
                console.log("meet", meet);
                const startTime = meet.start_time ? moment(meet.start_time) : moment();
                const endTime = meet.endTime ? moment(meet.endTime) : moment(meet.start_time).add(1, 'hours');


                console.log(moment(meet.start_time).format('DD/MM/YYYY HH:mm'));
                $('input[name="daterange"]').daterangepicker({
                    opens: 'left',
                    timePicker: true,
                    locale: {
                        ...locals,
                        format: 'DD/MM/YYYY HH:mm',
                    },
                    startDate: startTime,
                    endDate: endTime,
                });
            }).catch(error => {
                console.log(error);
                $('input[name="daterange"]').daterangepicker({
                    opens: 'left',
                    timePicker: true,
                    locale: {
                        ...locals,
                        format: 'DD/MM/YYYY HH:mm',
                    },
                    startDate: moment(),
                    endDate: moment().add(1, 'hours'),
                });
            })

            $('input[name="daterange"]').attr("placeholder", "Chọn thời gian, thêm giờ");
        });
    </script>

    <script>
        updateList = function(e) {
            const input = e.target;
            const outPut = input.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(
                '.modal_upload-list');
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
        //sync leader
        const leaderSelect = document.getElementById('leaderSelect');
        const leaderInput = document.getElementById('leaderIdInput');
        leaderSelect.addEventListener('change', (e) => {
            leaderInput.value = e.target.value;
        });
    </script>

    <script>
        $('#listDaDuocPhanHoi').DataTable({
            paging: true,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-titles-wrapper">f>rt<"dataTables_bottom"ip>',
        });
        $('div.card-titles-wrapper').html(`
            <div class="card-title">Đã được phản hồi</div>
        `);
    </script>

    <script>
        $('#dsVanDeThaoLuan').DataTable({
            paging: true,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-end align-items-center"f>rt<"dataTables_bottom"ip>',
        });
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
