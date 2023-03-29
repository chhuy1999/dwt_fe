@extends('template.master')
{{-- Trang chủ admin --}}
@section('title', 'Bảng điều khiển')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')

    @php
        //some helpter function
        function findTargetLogDetail($targetDetail, $date)
        {
            $targetLogs = $targetDetail->targetLogs;
            foreach ($targetLogs as $targetLog) {
                if (strtotime($targetLog->reportedDate) == strtotime($date)) {
                    if (count($targetLog->targetLogDetails) > 0) {
                        return $targetLog->targetLogDetails;
                    }
                }
            }
            return [];
        }

        function findTargetLogDetailNote($targetDetail, $date)
        {
            $targetLogs = $targetDetail->targetLogs;
            foreach ($targetLogs as $targetLog) {
                if (strtotime($targetLog->reportedDate) == strtotime($date)) {
                    if (count($targetLog->targetLogDetails) > 0) {
                        return $targetLog->targetLogDetails[0]->note;
                    }
                }
            }
            return '';
        }

        function getAllTargetDetailKpiKeys($targetDetail)
        {
            $targetLogs = $targetDetail->targetLogs;
            $kpiKeys = [];
            foreach ($targetLogs as $targetLog) {
                if (count($targetLog->targetLogDetails) > 0) {
                    foreach ($targetLog->targetLogDetails as $targetLogDetail) {
                        foreach ($targetLogDetail->kpiKeys as $kpiKey) {
                            array_push($kpiKeys, $kpiKey);
                        }
                    }
                }
            }
            return $kpiKeys;
        }
        function getAllTargetLogDetail($targetDetail)
        {
            $targetLogs = $targetDetail->targetLogs;
            $targetLogDetails = [];
            foreach ($targetLogs as $targetLog) {
                if (count($targetLog->targetLogDetails) > 0) {
                    foreach ($targetLog->targetLogDetails as $targetLogDetail) {
                        $toPush = $targetLogDetail;
                        //add reported date
                        $toPush->reportedDate = $targetLog->reportedDate;

                        array_push($targetLogDetails, $toPush);
                    }
                }
            }
            return $targetLogDetails;
        }

        function getUsers($task)
        {
            $users = $task->users;
            $userNames = [];
            foreach ($users as $user) {
                array_push($userNames, $user->name);
            }
            return implode(', ', $userNames);
        }
    @endphp

    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Nhật trình công việc</h5>
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

                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="card-title">Mục tiêu nhiệm vụ cá nhân</div>
                                        <div class="mainSection_total-kpi">
                                            Tổng KPI cá nhân tạm tính:
                                            <strong>40</strong>
                                            KPI
                                        </div>
                                        <div class="action_wrapper d-flex">
                                            <div class="form-group has-search">
                                                <span class="bi bi-search form-control-feedback fs-5"></span>
                                                <input type="text" class="form-control" placeholder="Tìm kiếm nhiệm vụ">
                                            </div>
                                            <div class="action_export ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                                                <button class="btn-export"><i class="bi bi-download"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table_wrapper">

                                        <div id="table-scroll" class="table-scroll bg-blue-blur">
                                            <div class="table-wrap table-responsive">
                                                <table class="main-table">
                                                    <thead>
                                                        <th colspan="4" class="fixed-side bg-white">Mục tiêu nhiệm vụ tháng
                                                        </th>
                                                        <th colspan="{{ cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear) }}" class="bg-white">Nhật kí công việc</th>
                                                        <tr>
                                                            <th class="fixed-side bg-blue-blur">STT</th>
                                                            <th class="fixed-side bg-blue-blur">Mục tiêu nhiệm vụ</th>
                                                            <th class="fixed-side bg-blue-blur">Thời hạn</th>
                                                            <th class="fixed-side bg-blue-blur">Σ Lũy kế</th>
                                                            @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                                @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6)
                                                                    <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                                        {{ $i + 1 }}
                                                                    </th>
                                                                @elseif (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7)
                                                                    <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                                        {{ $i + 1 }}
                                                                    </th>
                                                                @else
                                                                    <th scope="col">{{ $i + 1 }}</th>
                                                                @endif
                                                            @endfor
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($listAssignedTasks->data as $task)
                                                            <tr>
                                                                <td class="fixed-side bg-blue-blur">
                                                                    <div class="content_table">
                                                                        {{ $loop->iteration }}
                                                                    </div>
                                                                </td>
                                                                <td class="fixed-side bg-blue-blur">
                                                                    <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu{{ $task->id }}" role="button">
                                                                        {{ $task->name }}
                                                                    </div>

                                                                    <!-- Modal Thông tin nhiệm vụ -->
                                                                    <div class="modal fade" id="thongTinNhiemVu{{ $task->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 38%">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header text-center">
                                                                                    <h5 class="modal-title w-100" id="exampleModalLabel">Thông tin nhiệm vụ</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12 ">
                                                                                            <div class="">
                                                                                                <table class="table table-bordered table-hover">
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Tên nhiệm vụ</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ $task->name ?? '' }}</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Thuộc định mức lao động</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ $task->target->name ?? '' }}</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Mô tả</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ $task->description ?? '' }}</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Người đảm nhiệm</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ getUsers($task) }}</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Vị trí đảm nhiệm</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ $task->position->name ?? '' }}</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Ngày bắt đầu</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ $task->startDate }}</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Hạn hoàn thành</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ $task->deadline }}</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <div>Man day</div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div>{{ $task->manday }} ngày</div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <div>
                                                                                                                <td>Kế hoạch thực hiện</td>
                                                                                                                <td>{{ $task->executionPlan }}</td>
                                                                                                            </div>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <div>
                                                                                                                <td>Ý kiến TPB</td>
                                                                                                                <td>{{ $task->managerComment }}</td>
                                                                                                            </div>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <div>
                                                                                                                <td>Chấm điểm</td>
                                                                                                                <td>{{ $task->managerManDay }}</td>
                                                                                                            </div>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="col-sm-12 mt-3">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div class="modal-title">Tổng hợp báo cáo</div>
                                                                                                <span class="modal-title_mini ms-2">
                                                                                                    Kết quả tạm tính
                                                                                                </span>
                                                                                            </div>
                                                                                            <div class="modal_list row">
                                                                                                <div class="modal_items col-sm-6">
                                                                                                    Số báo cáo đã lập trong tháng: <span class="text-danger">0 file</span>
                                                                                                </div>
                                                                                                <div class="modal_items col-sm-6">
                                                                                                    Số tiêu chí đạt được trong tháng: <span class="text-danger">0 tiêu chí</span>
                                                                                                </div>
                                                                                                <div class="modal_items col-sm-6">
                                                                                                    Số nhân sự thực hiện: <span class="text-danger">1 nhân sự</span>
                                                                                                </div>
                                                                                                <div class="modal_items col-sm-6">
                                                                                                    Giá trị doanh thu: <span class="text-danger">0 ₫</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-12 mt-3">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div class="modal-title">Nhận xét nhiệm vụ</div>
                                                                                            </div>
                                                                                            <div class="modal_list row">
                                                                                                
                                                                                                        <div class="col-sm-10 d-flex  align-items-center">
                                                                                                            <input class="form-control" placeholder="Nhập nhận xét">
                                                                                                            
                                                                                                        </div>
                                                                                                        <div class="col-sm-2 d-flex  align-items-center">
                                                                                                            <input placeholder="Điểm KPI" class="form-control">
                                                                                                            
                                                                                                        </div>
                                                                                                    
                                                                                                
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-12 mt-3">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div class="modal-title">Danh sách tiêu chí công việc</div>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <table class="table table-bordered table-hover">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th scope="col">Ngày báo cáo</th>
                                                                                                            <th scope="col">Tiêu chí</th>
                                                                                                            <th scope="col">Giá trị</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        @foreach (getAllTargetDetailKpiKeys($task) as $key)
                                                                                                            <tr>
                                                                                                                <th class="fw-normal">22/03/2023</th>
                                                                                                                <td>{{ $key->name }} {{ $key->unit->name }}</td>
                                                                                                                <td>{{ $key->quantity }}</td>

                                                                                                            </tr>
                                                                                                        @endforeach


                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-12 mt-3">
                                                                                            <div class="d-flex align-items-center">
                                                                                                <div class="modal-title">Danh sách báo cáo công việc</div>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <table class="table table-bordered table-hover">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th scope="col" style="width: 15%">Ngày báo cáo</th>
                                                                                                            <th scope="col" style="width: 45%">Nội dung báo cáo</th>
                                                                                                            <th scope="col" style="width: 40%">File báo cáo</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        @foreach (getAllTargetLogDetail($task) as $log)
                                                                                                            <tr>
                                                                                                                <th class="fw-normal"> {{ $log->reportedDate }}</th>
                                                                                                                <td>{{ $log->note }}</td>
                                                                                                                <td>
                                                                                                                    <div class="text-break">
                                                                                                                        <span class="d-flex align-items-center">
                                                                                                                            <i class="bi bi-link-45deg"></i>
                                                                                                                            {{ $log->files }}
                                                                                                                        </span>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        @endforeach
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Đóng</button>
                                                                                    <button type="button" class="btn btn-danger">Lưu</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="fixed-side bg-blue-blur">
                                                                    <div class="content_table">
                                                                        {{ date('m/d', strtotime($task->deadline)) }}
                                                                    </div>
                                                                </td>
                                                                <td class="fixed-side fw-bold bg-blue-blur">
                                                                    <div class="progress-half">
                                                                        <div class="text-dark content_table">5</div>
                                                                    </div>
                                                                </td>
                                                                @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                                    <td @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7) class="bg-danger bg-opacity-10 text-danger" @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6) class="bg-warning bg-opacity-10 text-warning" @endif>
                                                                        <div class="content_table" @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) != 7) data-bs-toggle="modal" data-bs-target="#baoCaoCongViec-{{ $task->id }}-{{ $i }}" role="button" @endif>
                                                                            @foreach ($task->targetLogs as $targetLog)
                                                                                @if (strtotime($targetLog->reportedDate) == strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1))
                                                                                    x
                                                                                @break
                                                                            @endif
                                                                        @endforeach
                                                                        &nbsp;
                                                                    </div>
                                                                    <!-- Modal Báo cáo công việc -->
                                                                    <div class="modal fade text-black" id="baoCaoCongViec-{{ $task->id }}-{{ $i }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">

                                                                            <div class="modal-content">
                                                                                <div class="modal-header text-center">
                                                                                    <div class="d-flex w-100 flex-md-column">
                                                                                        <h5 class="modal-title">Báo cáo công việc</h5>
                                                                                        <h6 class="text-capitalize fw-normal fs-5">Ngày {{ $i + 1 }} - {{ $searchMonth }} - {{ $searchYear }}</h6>
                                                                                    </div>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <form action="/bao-cao-cong-viec/{{ $task->id }}" method="POST" enctype="multipart/form-data">
                                                                                    <input type="hidden" name="reportedDate" value="{{ $searchYear }}-{{ $searchMonth }}-{{ $i + 1 }}">
                                                                                    @csrf
                                                                                    <div class="modal-body">
                                                                                        <div class="mb-3 row">
                                                                                            <div class="col-sm-12 d-flex  align-items-center">
                                                                                                <label for="inputPassword" class="col-sm-2 col-form-label">Tên nhiệm vụ</label>
                                                                                                <div class="col-sm-10">
                                                                                                    <input class="form-control" type="text" readonly value="{{ $task->name }}"></input>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3 row">
                                                                                            <div class="col-sm-12 d-flex  align-items-center">
                                                                                                <label for="inputPassword" class="col-sm-2 col-form-label">
                                                                                                    Ghi chú
                                                                                                    <span class="text-danger">*</span>
                                                                                                </label>
                                                                                                <div class="col-sm-10">
                                                                                                    <textarea class="form-control" name="note" placeholder="Vui lòng nhập nội dung báo cáo vào đây">{{ findTargetLogDetailNote($task, $searchYear . '-' . $searchMonth . '-' . $i + 1) }}</textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3 row">
                                                                                            <div class="d-flex  align-items-center">
                                                                                                <div class="form-check">
                                                                                                    <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh">
                                                                                                    <label role="button" class="form-check-label user-select-none" for="datGiaTriKinhDoanh">
                                                                                                        Đạt giá trị kinh doanh
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row mb-3">
                                                                                            <div class="form-check_wrapper">
                                                                                                <div class="repeater-datGiaTriKinhDoanh">
                                                                                                    <div data-repeater-list="kpiKeys-edit">
                                                                                                        <div class="row" data-repeater-item>
                                                                                                            <div class="col-md-6 mb-3">
                                                                                                                <select
                                                                                                                    class='selectpicker'
                                                                                                                    data-live-search="true"
                                                                                                                    title="Chọn tiêu chí" name="kpiKeyIds[]">
                                                                                                                    @foreach ($kpiKeys as $kpiKey)
                                                                                                                        <option value="{{ $kpiKey->id }}">{{ $kpiKey->name }}</option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <div class="col-md-5 mb-3">
                                                                                                                <input type="number" class="form-control"
                                                                                                                    placeholder="Giá trị" name="kpiKeyQuantity[]" />
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="col-md-1 mb-3 d-flex align-items-center">
                                                                                                                <img data-repeater-delete role="button"
                                                                                                                    src="{{ asset('/assets/img/trash.svg') }}"
                                                                                                                    width="20px" height="20px" />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                    
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="d-flex justify-content-start">
                                                                                                            <div role="button" class="fs-4 text-danger"
                                                                                                                data-repeater-create><i
                                                                                                                    class="bi bi-plus-circle"></i></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3 row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="modal_upload-wrapper">
                                                                                                    <label class="modal_upload-label" for="file">
                                                                                                        Tải xuống tệp hoặc đính kèm liên kết ở đây</label>
                                                                                                    <div class="mt-2 text-secondary fst-italic">Hỗ trợ định dạng JPG, PNG hoặc PDF, kích
                                                                                                        thước tệp không quá 10MB</div>
                                                                                                    <div class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                                                                        <div class="modal_upload-addFile me-3">
                                                                                                            <button role="button" type="button" class="btn position-relative pe-4 ps-4">
                                                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/upload-file.svg') }}" />
                                                                                                                Tải file lên
                                                                                                                <input role="button" type="file" class="modal_upload-input" name="files[]" class="modal_upload-file" multiple onchange="updateList(event)">
                                                                                                            </button>
                                                                                                        </div>

                                                                                                        <div class="modal_upload-addLink">
                                                                                                            <button role="button" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#themLinkOnline">
                                                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/add-link.svg') }}" />
                                                                                                                Thêm liên kết
                                                                                                            </button>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="alert alert-danger alertNotSupport" role="alert" style="display:none">
                                                                                                    File bạn tải lên hiện tại không hỗ trợ !
                                                                                                </div>
                                                                                                <ul class="modal_upload-list">

                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Xóa báo
                                                                                            cáo</button>
                                                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                                        <button type="submit" class="btn btn-danger">Lưu</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            @endfor


                                                        </tr>
                                                    @endforeach
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <div class="table_wrapper">
                                    <div id="table-scroll-second" class="mt-3 table-scroll bg-yellow-blur">
                                        <div class="table-wrap table-responsive">
                                            <table class="second-table">
                                                <thead>
                                                    <tr>
                                                        <th class="fixed-side bg-yellow-blur">STT</th>
                                                        <th class="fixed-side bg-yellow-blur">Mục tiêu nhiệm vụ</th>
                                                        <th class="fixed-side bg-yellow-blur">Thời hạn</th>
                                                        <th class="fixed-side bg-yellow-blur">Σ Lũy kế</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">3</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            4
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            5
                                                        </th>
                                                        <th scope="col">6</th>
                                                        <th scope="col">7</th>
                                                        <th scope="col">8</th>
                                                        <th scope="col">9</th>
                                                        <th scope="col">10</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            11
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            12
                                                        </th>
                                                        <th scope="col">13</th>
                                                        <th scope="col">14</th>
                                                        <th scope="col">15</th>
                                                        <th scope="col">16</th>
                                                        <th scope="col">17</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            18
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            19
                                                        </th>
                                                        <th scope="col">20</th>
                                                        <th scope="col">21</th>
                                                        <th scope="col">22</th>
                                                        <th scope="col">23</th>
                                                        <th scope="col">24</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            25
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            26
                                                        </th>
                                                        <th scope="col">27</th>
                                                        <th scope="col">28</th>
                                                        <th scope="col">29</th>
                                                        <th scope="col">30</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table">1</div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Tìm kiếm nhà cung cấp
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td class="fixed-side fw-bold bg-yellow-blur">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-yellow-blur" scope="row">
                                                            <div class="content_table">2</div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Mua hàng nội địa
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-yellow-blur">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-yellow-blur" scope="row">
                                                            <div class="content_table">3</div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table">21/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-yellow-blur">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-yellow-blur" scope="row">
                                                            <div class="content_table">4</div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Thiết kế giao diện
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table">13/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-yellow-blur">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-yellow-blur" scope="row">
                                                            <div class="content_table">5</div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-yellow-blur">
                                                            <div class="content_table">23/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-yellow-blur">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-2">
                                    <div class="card-title">Báo cáo ngày của đơn vị</div>

                                    <div class="mainSection_total-kpi">
                                        Tổng KPI bộ phận tạm tính:
                                        <strong>140</strong>
                                        KPI
                                    </div>
                                    <div class="action_wrapper d-flex">
                                        <div class="form-group has-search me-3">
                                            <span class="bi bi-search form-control-feedback fs-5"></span>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm nhiệm vụ">
                                        </div>
                                        <div class="action_export" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                                            <button class="btn-export"><i class="bi bi-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table_wrapper">
                                    <div id="table-scroll-three" class="mt-3 table-scroll bg-white">
                                        <div class="table-wrap table-responsive">
                                            <table class="three-table">
                                                <thead>
                                                    <tr>
                                                        <th class="fixed-side bg-white">STT</th>
                                                        <th class="fixed-side bg-white">Mục tiêu nhiệm vụ</th>
                                                        <th class="fixed-side bg-white">Thời hạn</th>
                                                        <th class="fixed-side bg-white">Σ Lũy kế</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">3</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            4
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            5
                                                        </th>
                                                        <th scope="col">6</th>
                                                        <th scope="col">7</th>
                                                        <th scope="col">8</th>
                                                        <th scope="col">9</th>
                                                        <th scope="col">10</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            11
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            12
                                                        </th>
                                                        <th scope="col">13</th>
                                                        <th scope="col">14</th>
                                                        <th scope="col">15</th>
                                                        <th scope="col">16</th>
                                                        <th scope="col">17</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            18
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            19
                                                        </th>
                                                        <th scope="col">20</th>
                                                        <th scope="col">21</th>
                                                        <th scope="col">22</th>
                                                        <th scope="col">23</th>
                                                        <th scope="col">24</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            25
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            26
                                                        </th>
                                                        <th scope="col">27</th>
                                                        <th scope="col">28</th>
                                                        <th scope="col">29</th>
                                                        <th scope="col">30</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table">1</div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Tìm kiếm nhà cung cấp
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td class="fixed-side fw-bold bg-white">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">
                                                                &nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-white" scope="row">
                                                            <div class="content_table">2</div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Mua hàng nội địa
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-white">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-white" scope="row">
                                                            <div class="content_table">3</div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table">21/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-white">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-white" scope="row">
                                                            <div class="content_table">4</div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Thiết kế giao diện
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table">13/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-white">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fixed-side bg-white" scope="row">
                                                            <div class="content_table">5</div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table justify-content-start" data-bs-toggle="modal" data-bs-target="#thongTinNhiemVu" role="button">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td class="fixed-side bg-white">
                                                            <div class="content_table">23/01</div>
                                                        </td>
                                                        <td class="fw-bold fixed-side bg-white">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" role="button">1</div>
                                                        </td>
                                                    </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-2">
                                    <div class="card-title">Danh sách vấn đề</div>

                                    <div class="action_wrapper d-flex">
                                        <div class="form-group has-search me-3">
                                            <span class="bi bi-search form-control-feedback fs-5"></span>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm vấn đề">
                                        </div>
                                        <div class="action_export" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                                            <button class="btn-export"><i class="bi bi-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative">
                                    <table class="table table-responsive table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 2%">STT</th>
                                                <th style="width: 20%">
                                                    <div class="d-flex justify-content-between">
                                                        Vấn đề tồn đọng
                                                        <div>
                                                            <i class="bi bi-chat-right-text" style="font-size:1.4rem"></i>
                                                        </div>

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
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Giải quyết" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Nguyễn Ngọc Bảo" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:230px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
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
                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                    </div>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">
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
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        1
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Than phiền" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Nguyễn Ngọc Bảo" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:230px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
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
                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                    </div>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">
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
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        1
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Than phiền" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Nguyễn Ngọc Bảo" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:230px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
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
                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                    </div>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">
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
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        1
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Than phiền" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Nguyễn Ngọc Bảo" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:230px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
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
                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                    </div>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">
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
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        1
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Than phiền" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input type="text" class="form-control border-0 bg-transparent" readonly value="Nguyễn Ngọc Bảo" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:230px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                                        Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
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
                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                    </div>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">
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

                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-title">PieChart</div>
                                </div>
                                <div class="mainSection_chart-container mt-3">
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-title">DoughnutChart</div>
                                </div>
                                <div class="mainSection_chart-container mt-3">
                                    <canvas id="doughnutChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-title">BarChart 2</div>
                                </div>
                                <div class="mainSection_chart-container mt-3">
                                    <canvas id="BarChartTwo"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-title">BarChart 3</div>
                                </div>
                                <div class="mainSection_chart-container mt-3">
                                    <canvas id="BarChartThree"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-3 pt-3">
                                    <div class="card-title">LineChart</div>
                                </div>
                                <div class="mainSection_chart-container mt-3">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-3 pt-3">
                                    <div class="card-title">LineChart 2</div>
                                </div>
                                <div class="mainSection_chart-container mt-3">
                                    <canvas id="LineChartTwo"></canvas>
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
@include('template.sidebar.sidebarMaster.sidebarRight')


{{-- Modal Thêm Link Online --}}
<div class="modal fade" id="themLinkOnline" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Tải file từ link online</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <div class="col-sm-12 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/upload-file-from-link-img.jpg') }}" />
                    </div>
                </div>
                <form action="" method="">
                    @csrf
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex align-items-center">
                            <label for="staticEmail" class="col-sm-3 col-form-label" style="padding-right:6px;">Dán
                                link
                                tại đây
                            </label>
                            <div class="col-sm-9" style="">
                                <input type="text" class="form-control" placeholder="Nhập link báo cáo tại đây" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex align-items-center">
                            <label for="staticEmail" class="col-sm-3 col-form-label" style="padding-right:6px;">Tên
                                hiển
                                thị
                            </label>
                            <div class="col-sm-9" style="">
                                <input type="text" class="form-control" placeholder="Nhập tên hiển thị" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec">Hủy</button>
                <button type="button" class="btn btn-danger" id="deleteRowElement">Lưu</button>
            </div>
        </div>
    </div>
</div>

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
                            <input type="text" class="form-control" class="contenteditable" value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin" />
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
                        <label for="inputPassword" class="col-form-label" style="padding-right:6px;">Thời
                            hạn</label>
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

{{-- Xóa vấn đề --}}
<div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa vấn đề</h5>
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

<!-- Modal Vấn đề tồn đọng -->
<div class="modal fade" id="neuvande" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel">Vấn đề tồn đọng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-7 mb-3">
                        <input type="text" class="form-control form-control-plaintext" id="staticEmail" style="text-indent: 8px" placeholder="Họ và tên">
                    </div>
                    <div class="col-sm-5 mb-3 position-relative">
                        <input id="gioTaoVanDeTonDong" placeholder="Giờ tạo" class="form-control" type="text" />
                        <i class="bi bi-alarm style_pickdate-two"></i>
                    </div>
                    <div class="col-sm-7 mb-3">
                        <select class="selectpicker" title="Vị trí">
                            <option value="2">Phòng ban 1</option>
                            <option value="2">Phòng ban 2</option>
                            <option value="2">Phòng ban 3</option>
                        </select>
                    </div>
                    <div class="col-sm-5 mb-3 position-relative">
                        <input id="hopGiaoBanNgayVanDeTonDong" placeholder="Thời gian" class="form-control" type="text" />
                        <i class="bi bi-calendar-plus style_pickdate-two"></i>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <textarea name="" class="form-control" placeholder="Vấn đề tồn đọng"></textarea>
                    </div>
                    <div class="col-sm-7 mb-3">
                        <select class="selectpicker" title="Cấp giải quyết">
                            <option value="1">Giải quyết</option>
                            <option value="2">Than phiền</option>
                        </select>
                    </div>
                    <div class="col-sm-5 mb-3 position-relative">
                        <input id="thoiHanVanDeTonDong" placeholder="Thời hạn" class="form-control" type="text" />
                        <i class="bi bi-calendar-plus style_pickdate-two"></i>
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



{{-- Modal Nhận Xét Nhiệm Vụ --}}
{{-- <div class="modal fade" id="nhanXetNhiemVu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel">Nhận xét nhiệm vụ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mb-3">
                        <div class="col-sm-12 d-flex  align-items-center">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nhận xét</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Nhập nhận xét"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-sm-4 d-flex  align-items-center">
                            <label for="inputPassword" class="col-sm-6 col-form-label">Điểm KPI</label>
                            <div class="col-sm-6">
                                <input class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger">Gửi nhận xét</button>
            </div>
        </div>
    </div>
</div> --}}

@endsection
@section('footer-script')
<!-- ChartJS -->
<script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>

<!-- Plugins -->
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

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

<script>
    $(function() {
        $('#datGiaTriKinhDoanh').on('change', function() {
            $('.form-check_wrapper').toggle(this.checked);
        });
    });
</script>

<script type="text/javascript">
    updateList = function(e) {
        const input = e.target;
        const outPut = input.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector('.modal_upload-list');
        const notSupport = outPut.parentNode.querySelector('.alertNotSupport');

        let children = outPut.innerHTML;
        console.log(children);
        const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
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
            const noPick = document.getElementById('data_chart-nopick')

            const val = opt.value || opt.text;
            if (opt.selected) {
                document.getElementById(val).style.display = 'block';
                noPick.style.display = 'none';

            } else {
                document.getElementById(val).style.display = 'none';
                noPick.style.display = 'block';
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

<script>
    $(document).ready(function() {
        $.datetimepicker.setLocale('vi');
        $('#vanDeTonDong').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
        $('#gioTaoVanDeTonDong').datetimepicker({
            format: 'H:i',
            datepicker: false,
        });
        $('#thoiHanVanDeTonDong').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
        $('#hopGiaoBanNgayVanDeTonDong').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');
        $(".second-table").clone(true).appendTo('#table-scroll-second').addClass('clone-second');
        $(".three-table").clone(true).appendTo('#table-scroll-three').addClass('clone-three');
    });
</script>
@endsection
