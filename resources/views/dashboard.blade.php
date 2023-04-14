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
        
        function findReportTaskLog($task, $date)
        {
            $logs = $task->report_task_logs;
            foreach ($logs as $log) {
                if (strtotime($log->report_date) == strtotime($date)) {
                    return $log;
                }
            }
            return (object) [
                'id' => -1,
                'note' => '',
                'files' => '',
                'kpi_keys' => [],
            ];
        }
        
        function getReportTaskLogFile($task, $date)
        {
            $log = findReportTaskLog($task, $date);
            $files = [];
            if ($log->files != null && strlen($log->files) > 0) {
                $exploded = explode(',', $log->files);
                foreach ($exploded as $file) {
                    if (strlen($file) > 0) {
                        array_push($files, $file);
                    }
                }
            }
            return $files;
        }
        
        function countReportTaskLogFiles($task)
        {
            $count = 0;
            $logs = $task->report_task_logs;
            foreach ($logs as $log) {
                if ($log->files != null && strlen($log->files) > 0) {
                    $exploded = explode(',', $log->files);
                    foreach ($exploded as $file) {
                        if (strlen($file) > 0) {
                            $count++;
                        }
                    }
                }
            }
            return $count;
        }
        
        function countReportTaskLogKpiKeys($task)
        {
            $uniqueKpiKeys = [];
            $logs = $task->report_task_logs;
            foreach ($logs as $log) {
                if (count($log->kpi_keys) > 0) {
                    foreach ($log->kpi_keys as $kpiKey) {
                        if (!in_array($kpiKey, $uniqueKpiKeys)) {
                            array_push($uniqueKpiKeys, $kpiKey);
                        }
                    }
                }
            }
            return count($uniqueKpiKeys);
        }
        
        // function findAllTargetLogDetails($targetDetail)
        // {
        //     $targetLogs = $targetDetail->targetLogs;
        //     $targetLogDetails = [];
        //     foreach ($targetLogs as $targetLog) {
        //         if (count($targetLog->targetLogDetails) > 0) {
        //             foreach ($targetLog->targetLogDetails as $targetLogDetail) {
        //                 array_push($targetLogDetails, $targetLogDetail);
        //             }
        //         }
        //     }
        //     return $targetLogDetails;
        // }
        
        function findTargetLogDetailKpiKeys($targetDetail, $date, $userId)
        {
            $kpiKeys = [];
            $targetLogs = $targetDetail->targetLogs;
            foreach ($targetLogs as $targetLog) {
                if (strtotime($targetLog->reportedDate) == strtotime($date)) {
                    if (count($targetLog->targetLogDetails) > 0) {
                        foreach ($targetLog->targetLogDetails as $targetLogDetail) {
                            if ($targetLogDetail->user->id == $userId) {
                                $kpiKeys = $targetLogDetail->kpiKeys;
                            }
                        }
                    }
                }
            }
            return $kpiKeys;
        }
        
        function findTargetLogDetailFiles($targetDetail, $date, $userId)
        {
            $files = [];
            $targetLogs = $targetDetail->targetLogs;
            foreach ($targetLogs as $targetLog) {
                if (strtotime($targetLog->reportedDate) == strtotime($date)) {
                    if (count($targetLog->targetLogDetails) > 0) {
                        foreach ($targetLog->targetLogDetails as $targetLogDetail) {
                            if ($targetLogDetail->user->id == $userId) {
                                if ($targetLogDetail->files != null) {
                                    $fileArr = explode(',', $targetLogDetail->files);
                                    foreach ($fileArr as $file) {
                                        if (strlen($file)) {
                                            array_push($files, $file);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return $files;
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
        function countKpiKeys($targetDetail)
        {
            $kpiKeys = getAllTargetDetailKpiKeys($targetDetail);
            //remove duplicate
            $uniqueKpiKeys = [];
            foreach ($kpiKeys as $kpi) {
                if (!in_array($kpi, $uniqueKpiKeys)) {
                    array_push($uniqueKpiKeys, $kpi);
                }
            }
            return count($uniqueKpiKeys);
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
        
        function countFiles($task)
        {
            $targetLogs = $task->targetLogs;
            $count = 0;
            foreach ($targetLogs as $targetLog) {
                $targetLogDetails = $targetLog->targetLogDetails;
                foreach ($targetLogDetails as $targetLogDetail) {
                    if ($targetLogDetail->files != null) {
                        $listFiles = explode(',', $targetLogDetail->files);
                        $count += count($listFiles);
                    }
                }
            }
            return $count;
        }
        
        // function mergedKpiKey($kpiKeys)
        // {
        //     return uniqueKpiKeys = [];
        //     //merge kpi keys
        //     foreach ($kpiKeys as $kpiKey) {
        //         $id = $kpiKey['id'];
        //         $quantity = $kpiKey['quantity'];
        //         //if kpi key exist in uniqueKpiKeys
        //         if (isset($uniqueKpiKeys[$id])) {
        //             $uniqueKpiKeys[$id]['quantity'] += $quantity;
        //         } else {
        //             $uniqueKpiKeys[$id] = $kpiKey;
        //         }
        //     }
        //     return array_values($uniqueKpiKeys);
        // }
        
        // function caculatePersonalKpi($listTask, $userId)
        // {
        //     $kpi = 0;
        //     foreach ($listTask as $task) {
        //         $taskKpiKeys = $task->kpiKeys;
        //         //merge kpi keys
        //         $taskKpiKeys = mergedKpiKey($taskKpiKeys);
        
        //     }
        //     return $kpi;
        // }

    @endphp

    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Nhật trình công việc</h5>
                        @include('template.components.sectionCard')
                    </div>

                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="table_wrapper">
                                        <div class="table-responsive">
                                            <table id="main_table" class="table table_style-fix m-0 bg-blue-blur"
                                                   style="width: 100%">
                                                <thead>
                                                <tr>
                                                    <th colspan="4" class="text-center bg-white position-sticky"
                                                        style="left:0">Mục tiêu nhiệm vụ tháng
                                                    </th>
                                                    <th colspan="{{ cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear) }}"
                                                        class="bg-white text-center">Nhật kí công việc
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap text-center bg-blue-blur">
                                                        <div style="width:30px">
                                                            STT
                                                        </div>
                                                    </th>
                                                    <th class="text-nowrap bg-blue-blur">
                                                        <div style="width:160px">
                                                            Mục tiêu nhiệm vụ
                                                        </div>
                                                    </th>
                                                    <th class="text-nowrap bg-blue-blur">
                                                        <div style="width:50px">
                                                            Thời hạn
                                                        </div>
                                                    </th>
                                                    <th class="text-nowrap bg-blue-blur">
                                                        <div style="width:50px">
                                                            Σ Lũy kế
                                                        </div>
                                                    </th>
                                                    @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                        @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6)
                                                            <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                scope="col"
                                                                class="bg-warning bg-opacity-10 text-warning">
                                                                {{ $i + 1 }}
                                                            </th>
                                                        @elseif (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7)
                                                            <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                                {{ $i + 1 }}
                                                            </th>
                                                        @else
                                                            <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                scope="col">{{ $i + 1 }}</th>
                                                        @endif
                                                    @endfor
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($myAssignedTasks->data as $task)
                                                    <tr>
                                                        <td class="text-nowrap bg-blue-blur">
                                                            <div class="content_table">
                                                                {{ $loop->iteration }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap bg-blue-blur">
                                                            <div class="content_table justify-content-start"
                                                                 data-bs-toggle="modal"
                                                                 data-bs-target="#thongTinNhiemVu{{ $task->id }}"
                                                                 role="button">
                                                                <div class="text-nowrap d-block text-truncate"
                                                                     style="max-width:160px;" data-bs-toggle="tooltip"
                                                                     data-bs-placement="top"
                                                                     data-bs-original-title="{{ $task->name }}">
                                                                    {{ $task->name }}
                                                                </div>
                                                            </div>


                                                        </td>
                                                        <td class="text-nowrap bg-blue-blur">
                                                            <div class="content_table">
                                                                {{ date('d/m', strtotime($task->deadline)) }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap fw-bold bg-blue-blur">
                                                            <div class="progress-half">
                                                                <div
                                                                    class="text-dark content_table">{{ $task->keysPassed }}</div>
                                                            </div>
                                                        </td>
                                                        @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                            <td style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7) class="bg-danger bg-opacity-10 text-danger"
                                                                @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6) class="bg-warning bg-opacity-10 text-warning"
                                                                @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) != 7) data-bs-toggle="modal"
                                                                data-bs-target="#baoCaoCongViec-{{ $task->id }}-{{ $i }}"
                                                                role="button" @endif>
                                                                <div class="content_table">
                                                                    @foreach ($task->targetLogs as $targetLog)
                                                                        @if (strtotime($targetLog->reportedDate) == strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1))
                                                                            {{ count($targetLog->targetLogDetails) }}
                                                                            @break
                                                                        @endif
                                                                    @endforeach
                                                                </div>

                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="table_wrapper">
                                        <div class="table-responsive mt-3">
                                            <table id="two_table" class="table table_style-fix m-0 bg-yellow-blur"
                                                   style="width: 100%">
                                                <thead>
                                                <tr>
                                                    <th class="text-nowrap text-center bg-yellow-blur">
                                                        <div style="width:30px">
                                                            STT
                                                        </div>
                                                    </th>
                                                    <th class="text-nowrap bg-yellow-blur">
                                                        <div style="width:160px">
                                                            Mục tiêu nhiệm vụ phát sinh
                                                        </div>
                                                    </th>
                                                    <th class="text-nowrap bg-yellow-blur">
                                                        <div style="width:50px">
                                                            Thời hạn
                                                        </div>
                                                    </th>
                                                    <th class="text-nowrap bg-yellow-blur">
                                                        <div style="width:50px">
                                                            Σ Lũy kế
                                                        </div>
                                                    </th>
                                                    @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                        @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6)
                                                            <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                scope="col"
                                                                class="bg-warning bg-opacity-10 text-warning">
                                                                {{ $i + 1 }}
                                                            </th>
                                                        @elseif (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7)
                                                            <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                                {{ $i + 1 }}
                                                            </th>
                                                        @else
                                                            <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                scope="col">{{ $i + 1 }}</th>
                                                        @endif
                                                    @endfor
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{-- fixed-side bg-yellow-blur --}}
                                                @foreach ($reportTasks->data as $reportTask)
                                                    <tr>
                                                        <td class="text-nowrap bg-yellow-blur">
                                                            <div class="content_table">
                                                                {{ $loop->iteration }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap bg-yellow-blur">
                                                            <div class="content_table justify-content-start"
                                                                 data-bs-toggle="modal"
                                                                 data-bs-target="#thongTinNhiemVuPhatSinh{{ $reportTask->id }}"
                                                                 role="button">
                                                                <div class="text-nowrap d-block text-truncate"
                                                                     style="max-width:160px;" data-bs-toggle="tooltip"
                                                                     data-bs-placement="top"
                                                                     data-bs-original-title="{{ $reportTask->name }}">
                                                                    {{ $reportTask->name }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap bg-yellow-blur">
                                                            <div class="content_table">
                                                                {{ date('d/m', strtotime($reportTask->deadline)) }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap fw-bold bg-yellow-blur">
                                                            <div class="progress-half">
                                                                <div class="text-dark content_table"></div>
                                                            </div>
                                                        </td>
                                                        @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                            <td style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7) class="bg-danger bg-opacity-10 text-danger"
                                                                @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6) class="bg-warning bg-opacity-10 text-warning"
                                                                @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) != 7) data-bs-toggle="modal"
                                                                data-bs-target="#baoCaoCongViecPhatSinh-{{ $reportTask->id }}-{{ $i }}"
                                                                role="button" @endif>
                                                                <div class="content_table">

                                                                    @if (findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->id > 0)
                                                                        1
                                                                    @endif
                                                                </div>

                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>

                        @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="table_wrapper">
                                        <div class="mt-3 bg-white">
                                            <div class="table-responsive">
                                                <table id="three_table"
                                                        class="table table_style-fix m-0 bg-blue-blur"
                                                        style="width: 100%">
                                                    <thead>
                                                    <tr>
                                                        <th colspan="4" class="bg-white text-center position-sticky"
                                                            style="left:0">Mục tiêu nhiệm vụ tháng
                                                        </th>
                                                        <th colspan="{{ cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear) }}"
                                                            class="bg-white text-center">Nhật kí công việc
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap text-center bg-blue-blur">
                                                            <div style="width:30px">
                                                                STT
                                                            </div>
                                                        </th>
                                                        <th class="text-nowrap bg-blue-blur">
                                                            <div style="width:160px">
                                                                Mục tiêu nhiệm vụ
                                                            </div>
                                                        </th>
                                                        <th class="text-nowrap bg-blue-blur">
                                                            <div style="width:50px">
                                                                Thời hạn
                                                            </div>
                                                        </th>
                                                        <th class="text-nowrap bg-blue-blur">
                                                            <div style="width:50px">
                                                                Σ Lũy kế
                                                            </div>
                                                        </th>
                                                        @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                            @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6)
                                                                <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    scope="col"
                                                                    class="bg-warning bg-opacity-10 text-warning">
                                                                    {{ $i + 1 }}
                                                                </th>
                                                            @elseif (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7)
                                                                <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    scope="col"
                                                                    class="bg-danger bg-opacity-10 text-danger">
                                                                    {{ $i + 1 }}
                                                                </th>
                                                            @else
                                                                <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    scope="col">{{ $i + 1 }}</th>
                                                            @endif
                                                        @endfor
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($listAssignedTasks->data as $task)
                                                        <tr>
                                                            <td class="text-nowrap bg-blue-blur">
                                                                <div class="content_table">
                                                                    {{ $loop->iteration }}
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap bg-blue-blur">
                                                                <div class="content_table justify-content-start"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#thongTinNhiemVu{{ $task->id }}"
                                                                        role="button">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                            style="max-width:160px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-original-title="{{ $task->name }}">

                                                                        {{ $task->name }}
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="text-nowrap bg-blue-blur">
                                                                <div class="content_table">
                                                                    {{ date('m/d', strtotime($task->deadline)) }}
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap fw-bold bg-blue-blur">
                                                                <div class="progress-half">
                                                                    <div
                                                                        class="text-dark content_table">{{ $task->keysPassed }}</div>
                                                                </div>
                                                            </td>
                                                            @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                                <td style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7) class="bg-danger bg-opacity-10 text-danger"
                                                                    @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6) class="bg-warning bg-opacity-10 text-warning"
                                                                    @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) != 7) data-bs-toggle="modal"
                                                                    data-bs-target="#baoCaoCongViec-{{ $task->id }}-{{ $i }}"
                                                                    role="button" @endif>
                                                                    <div class="content_table">
                                                                        @foreach ($task->targetLogs as $targetLog)
                                                                            @if (strtotime($targetLog->reportedDate) == strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1))
                                                                                {{ count($targetLog->targetLogDetails) }}
                                                                                @break
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </td>
                                                            @endfor
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="table_wrapper">
                                            <div class="table-responsive mt-3">
                                                <table id="four_table"
                                                        class="table table_style-fix m-0 bg-yellow-blur"
                                                        style="width: 100%">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-nowrap text-center bg-yellow-blur">
                                                            <div style="width:30px">
                                                                STT
                                                            </div>
                                                        </th>
                                                        <th class="text-nowrap bg-yellow-blur">
                                                            <div style="width:160px">
                                                                Mục tiêu nhiệm vụ phát sinh
                                                            </div>
                                                        </th>
                                                        <th class="text-nowrap bg-yellow-blur">
                                                            <div style="width:50px">
                                                                Thời hạn
                                                            </div>
                                                        </th>
                                                        <th class="text-nowrap bg-yellow-blur">
                                                            <div style="width:50px">
                                                                Σ Lũy kế
                                                            </div>
                                                        </th>
                                                        @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                            @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6)
                                                                <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    scope="col"
                                                                    class="bg-warning bg-opacity-10 text-warning">
                                                                    {{ $i + 1 }}
                                                                </th>
                                                            @elseif (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7)
                                                                <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    scope="col"
                                                                    class="bg-danger bg-opacity-10 text-danger">
                                                                    {{ $i + 1 }}
                                                                </th>
                                                            @else
                                                                <th style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    scope="col">{{ $i + 1 }}</th>
                                                            @endif
                                                        @endfor
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {{-- fixed-side bg-yellow-blur --}}
                                                    @foreach ($reportTaskAdmin->data as $reportTask)
                                                        <tr>
                                                            <td class="text-nowrap bg-yellow-blur">
                                                                <div class="content_table">
                                                                    {{ $loop->iteration }}
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap bg-yellow-blur">
                                                                <div class="content_table justify-content-start"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#thongTinNhiemVuPhatSinh{{ $reportTask->id }}"
                                                                        role="button">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                            style="max-width:160px;"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            data-bs-original-title="{{ $reportTask->name }}">
                                                                        {{ $reportTask->name }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap bg-yellow-blur">
                                                                <div class="content_table">
                                                                    {{ date('d/m', strtotime($reportTask->deadline)) }}
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap fw-bold bg-yellow-blur">
                                                                <div class="progress-half">
                                                                    <div class="text-dark content_table">5</div>
                                                                </div>
                                                            </td>
                                                            @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
                                                                <td style="padding: 0 14px; border:1px solid #dee2e6;"
                                                                    @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 7) class="bg-danger bg-opacity-10 text-danger"
                                                                    @endif @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) == 6) class="bg-warning bg-opacity-10 text-warning"
                                                                    @endif
                                                                    @if (date('N', strtotime($searchYear . '-' . $searchMonth . '-' . $i + 1)) != 7) data-bs-toggle="modal"
                                                                    data-bs-target="#baoCaoCongViecPhatSinh-{{ $reportTask->id }}-{{ $i }}"
                                                                    role="button" @endif>
                                                                    <div class="content_table">

                                                                        @if (findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->id > 0)
                                                                            1
                                                                        @endif
                                                                    </div>

                                                                </td>
                                                            @endfor
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

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    {{-- <div class="d-flex justify-content-between align-items-center pb-2">
                                                    <div class="card-title">Danh sách vấn đề</div>

                                                    <div class="action_wrapper d-flex">
                                                        <div class="form-group has-search me-3">
                                                            <span class="bi bi-search form-control-feedback fs-5"></span>
                                                            <input type="text" class="form-control" placeholder="Tìm kiếm vấn đề">
                                                        </div>
                                                        <div class="action_export" data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Xuất file Excel">
                                                            <button class="btn-export"><i class="bi bi-download"></i></button>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                    <div class="table-responsive ">
                                        <table id="dsVanDe" class="table table-hover table-bordered">
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

                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <th class="border-0 text-nowrap" style="width: 5%">Trạng
                                                        thái
                                                    </th>
                                                    <th class="border-start-0"></th>
                                                @else
                                                    <th class="border-start-0"></th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($listReports as $item)
                                                <tr>
                                                    <td>
                                                        <div
                                                            class="d-flex align-items-center justify-content-center">
                                                            {{ $loop->iteration }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:200px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="{{ $item->problem }}">
                                                            {{ $item->problem }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-nowrap d-inline-block text-truncate"
                                                                value="Giải quyết">Giải quyết
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:90px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="{{ $item->user->name ?? '' }}">
                                                            {{ $item->user->name ?? '' }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:100px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="{{ $item->reason }}">
                                                            {{ $item->reason }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:220px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title="{{ $item->solution }}">
                                                            {{ $item->solution }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:150px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" data-bs-html="true"
                                                                data-bs-original-title=" @foreach ($item->pics as $u) {{ $u->name }}, @endforeach">
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
                                                            <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                    class="bi bi-three-dots-vertical"></i>
                                                            </div>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                @if ($item->status != 'Converted')
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#nhiemVuPhatSinh{{ $item->id }}"
                                                                            data-repeater-delete>
                                                                            <i class="bi bi-arrow-right-square-fill"></i>
                                                                            Chuyển thành nhiệm vụ phát sinh
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                                <li>
                                                                    <a class="dropdown-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#suaVanDeTonDong{{ $item->id }}">
                                                                        <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}"/>
                                                                        Sửa
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#xoaVanDe{{ $item->id }}"
                                                                        data-repeater-delete>
                                                                        <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}"/>
                                                                        Xóa
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>
                                                    @else
                                                        <td></td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endif


                        {{-- Chart --}}
                        <div class="col-lg-12 mt-3">
                            <div class="card" style="display: -webkit-box;">
                                <div class="col-lg-3">
                                    <div class="col-md-12 card mb-12">
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
                                    <div class="col-md-12 card mb-3">
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
                                    <div class="col-md-12 card mb-3">
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
                                    <div class="col-md-12 card mb-3">
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
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="card" style="display: -webkit-box;">
                                <div class="col-lg-6">
                                    <div class="col-md-12 card mb-3">

                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between align-items-center pb-3 pt-3">
                                                <div class="card-title">LineChart</div>
                                            </div>
                                            <div class="mainSection_chart-container mt-3">
                                                <canvas id="lineChart"></canvas>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-md-12 card mb-3">
                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between align-items-center pb-3 pt-3">
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

                        
                        @include('template.footer.footer')
                    </div>


                </div>

            </div>
        </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

    <!-- Modal Sửa Vấn Đề -->
        @foreach ($listReports as $item)
            <div class="modal fade" id="suaVanDeTonDong{{ $item->id }}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <input class="form-control" type="text" readonly data-bs-toggle="tooltip"
                                               data-bs-placement="top" title="Vấn đề tồn đọng"
                                               value="{{ $item->problem }}" name="problem">
                                    </div>
                                    <div class="col-sm-7 mb-3">
                                        <input class="form-control" type="text" readonly data-bs-toggle="tooltip"
                                               data-bs-placement="top" title="Người nêu"
                                               value="{{ $item->user->name ?? '' }}">
                                    </div>
                                    <div class="col-sm-5 mb-3">
                                        <select class="selectpicker" multiple required data-actions-box="true"
                                                data-width="100%" data-live-search="true" title="Người đảm nhiệm *"
                                                data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn"
                                                data-size="3" data-selected-text-format="count > 1"
                                                data-count-selected-text="Có {0} người đảm nhiệm"
                                                data-live-search-placeholder="Tìm kiếm..." name='pics[]'>
                                            @if (session('listUsers'))
                                                @foreach (session('listUsers') as $value)
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
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <textarea rows="1" class="form-control" placeholder="Nguyên nhân"
                                                  name="reason">{{ $item->reason }}</textarea>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <textarea rows="1" class="form-control" placeholder="Hướng giải quyết"
                                                  name="solution">{{ $item->solution }}</textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                             title="Thời hạn">
                                            <input value="{{ date('d/m/Y', strtotime($item->deadline)) }}"
                                                   class="form-control timeSuaVanDe" type="text" name="deadline">
                                            <i class="bi bi-calendar-plus style_pickdate"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="Tình trạng">
                                            <select class="form-select" aria-label="Default select example"
                                                    name="status">
                                                <option value="0" @if ($item->status == 'Sent') selected @endif>Đã tiếp
                                                    nhận
                                                </option>
                                                <option value="1"
                                                        @if ($item->status == 'FoundSolution') selected @endif>
                                                    Đã có hướng giải quyết
                                                </option>
                                                <option value="2" @if ($item->status == 'Solved') selected @endif>Đã
                                                    giải
                                                    quyết
                                                </option>
                                                <option value="3" @if ($item->status == 'CantSolve') selected @endif>
                                                    Không thể giải quyết
                                                </option>
                                                <option value="4" @if ($item->status == 'Converted') selected @endif>Đã
                                                    giao
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy
                                </button>
                                <button type="submit" class="btn btn-danger">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="xoaVanDe{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
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
                            <form action="/bao-cao-van-de/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn xóa
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="nhiemVuPhatSinh{{ $item->id }}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <form action="{{ route('reportTask.store') }}" , method="POST">
                        @csrf
                        {{-- to update status report id --}}
                        <input type="hidden" name="report_id" value="{{ $item->id }}">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h5 class="modal-title w-100" id="exampleModalLabel">Giao nhiệm vụ phát sinh</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <input type="text" readonly class="form-control" value="{{ $item->problem }}"
                                               name="name">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
                                             aria-label="Thời hạn" data-bs-original-title="Thời hạn">
                                            <input name="deadline" class="giaonvuphatsinh form-control" type="text">
                                            <i class="bi bi-calendar-plus style_pickdate"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <textarea class="form-control" rows="1" placeholder="Mô tả/Diễn giải"
                                                  name="description"></textarea>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="number" class="form-control" min="0" step="0.05"
                                               oninput="onInput(this)" placeholder="Manday" id="title" name="manDay">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <select class='selectpicker' title="Người đảm nhiệm" multiple
                                                data-live-search="true" data-size="5" name="user_id">
                                            @if (session('listUsers'))
                                                @foreach (session('listUsers') as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <select class='selectpicker' title="Người liên quan" multiple
                                                data-live-search="true" data-size="5" name="relatedUsers[]">
                                            @if (session('listUsers'))
                                                @foreach (session('listUsers') as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <div class="repeater">
                                            <div data-repeater-list="kpiKeys">
                                                <div class="row" data-repeater-item>
                                                    <div class="col-md-9 mb-3">
                                                        <select class='form-select' style="font-size:var(--fz-12)"
                                                                title="Tiêu chí" data-live-search="true" name="id">
                                                            @if (session('listKpiKeys'))
                                                                @foreach (session('listKpiKeys') as $key)
                                                                    <option value="{{ $key->id }}">{{ $key->name }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <input type="number" min="0" class="form-control"
                                                               placeholder="Giá trị" name="quantity"/>
                                                    </div>
                                                    <div class="col-md-1 mb-3 d-flex align-items-center">
                                                        <img data-repeater-delete role="button"
                                                             src="{{ asset('/assets/img/trash.svg') }}" width="20px"
                                                             height="20px"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-start">
                                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i
                                                            class="bi bi-plus-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy
                                </button>
                                <button type="submit" class="btn btn-danger">Giao</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

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
                                <label for="staticEmail" class="col-form-label" style="padding-right:6px;">Vấn đề tồn
                                    đọng
                                </label>
                                <div class="w-100" style="flex:1;overflow:hidden">
                                    <input type="text" class="form-control" class="contenteditable"
                                           value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin"/>
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
                                    <input id="datetimepicker3" readonly value="<?php echo date('d/m/Y'); ?>"
                                           class="form-control" type="text">
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
    @foreach ($listAssignedTasks->data as $task)
        @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
            <!-- Modal Báo cáo công việc -->
                <div class="modal fade text-black" id="baoCaoCongViec-{{ $task->id }}-{{ $i }}" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <div class="d-flex w-100 flex-md-column">
                                    <h5 class="modal-title">Báo cáo công việc</h5>
                                    <h6 class="text-capitalize fw-normal fs-5">Ngày {{ $i + 1 }} -
                                        {{ $searchMonth }} - {{ $searchYear }}</h6>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            {{-- <form action="/bao-cao-cong-viec/{{ $task->id }}" method="POST" --}}
                            <form action="{{ route('targetLog.store', $task->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="reportedDate"
                                       value="{{ $searchYear }}-{{ $searchMonth }}-{{ $i + 1 }}">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3 row">
                                        <div class="col-sm-12 d-flex  align-items-center">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Tên nhiệm
                                                vụ</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" readonly
                                                       value="{{ $task->name }}">
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
                                                <textarea class="form-control" name="note"
                                                          placeholder="Vui lòng nhập nội dung báo cáo vào đây">{{ findTargetLogDetailNote($task, $searchYear . '-' . $searchMonth . '-' . $i + 1) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input role="button" type="checkbox" class="form-check-input fs-5"
                                                       id="form-check_wrapper{{ $task->id }}{{ $i }}"
                                                       onchange="toggleKpiKey(event, {{ $task->id }}, {{ $i }})"
                                                       @if (count(findTargetLogDetailKpiKeys($task, $searchYear . '-' . $searchMonth . '-' . $i + 1, session('user')['id']))) checked @endif>
                                                <label role="button" class="form-check-label user-select-none"
                                                       for="form-check_wrapper{{ $task->id }}{{ $i }}">
                                                    Đạt giá trị kinh doanh
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="kpi-wrapper" id="kpi-wrapper{{ $task->id }}{{ $i }}">
                                            <div class="repeater-datGiaTriKinhDoanh">
                                                <div data-repeater-list="kpiKeys">
                                                    @if (count(findTargetLogDetailKpiKeys($task, $searchYear . '-' . $searchMonth . '-' . $i + 1, session('user')['id'])))
                                                        @foreach (findTargetLogDetailKpiKeys($task, $searchYear . '-' . $searchMonth . '-' . $i + 1, session('user')['id']) as $key)
                                                            <div class="row" data-repeater-item>
                                                                <div class="col-md-6 mb-3">
                                                                    <select class='form-select' data-live-search="true"
                                                                            title="Chọn tiêu chí" name="id">

                                                                        @foreach (session('listKpiKeys') as $kpiKey)
                                                                            @if ($key->id == $kpiKey->id)
                                                                                <option value="{{ $kpiKey->id }}"
                                                                                        selected>
                                                                                    {{ $kpiKey->name }}</option>
                                                                            @else
                                                                                <option value="{{ $kpiKey->id }}">
                                                                                    {{ $kpiKey->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-5 mb-3">
                                                                    <input type="number" class="form-control" min="0"
                                                                           placeholder="Giá trị" name="quantity"
                                                                           value="{{ $key->quantity }}"/>
                                                                </div>
                                                                <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                    <img data-repeater-delete role="button"
                                                                         src="{{ asset('/assets/img/trash.svg') }}"
                                                                         width="20px" height="20px"/>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="row" data-repeater-item>
                                                            <div class="col-md-6 mb-3">
                                                                <select class='form-select' data-live-search="true"
                                                                        title="Chọn tiêu chí" name="id">

                                                                    @foreach ($task->kpiKeys as $kpiKey)
                                                                        <option value="{{ $kpiKey->id }}">
                                                                            {{ $kpiKey->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-5 mb-3">
                                                                <input type="number" class="form-control" min="0"
                                                                       placeholder="Giá trị" name="quantity"/>
                                                            </div>
                                                            <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                <img data-repeater-delete role="button"
                                                                     src="{{ asset('/assets/img/trash.svg') }}"
                                                                     width="20px" height="20px"/>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="d-flex justify-content-start">
                                                        <div role="button" class="fs-4 text-danger"
                                                             data-repeater-create><i class="bi bi-plus-circle"></i>
                                                        </div>
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
                                                <div class="mt-2 text-secondary fst-italic">Hỗ trợ định dạng JPG, PNG
                                                    hoặc
                                                    PDF, kích
                                                    thước tệp không quá 10MB
                                                </div>
                                                <div
                                                    class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                    <div class="modal_upload-addFile me-3">
                                                        <button role="button" type="button"
                                                                class="btn position-relative pe-4 ps-4">
                                                            <img style="width:16px;height:16px"
                                                                 src="{{ asset('assets/img/upload-file.svg') }}"/>
                                                            Tải file lên
                                                            <input role="button" type="file" class="modal_upload-input"
                                                                   name="files[]" class="modal_upload-file" multiple
                                                                   onchange="updateList(event)">
                                                        </button>
                                                    </div>

                                                    {{-- <div class="modal_upload-addLink">
                                                                    <button role="button" type="button" class="btn" id="addLinkOnline">
                                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/add-link.svg') }}" />
                                                                        Thêm liên kết
                                                                    </button>
                                                                </div> --}}
                                                </div>
                                                <div class="modal_upload-inputAddLink mt-3" id="inputAddLink"
                                                     style="display:none">
                                                    <input class="form-control" type="text"
                                                           placeholder="Nhập link tại đây"/>
                                                </div>
                                            </div>
                                            <div class="alert alert-danger alertNotSupport" role="alert"
                                                 style="display:none">
                                                File bạn tải lên hiện tại không hỗ trợ !
                                            </div>

                                            @if (count(findTargetLogDetailFiles($task, $searchYear . '-' . $searchMonth . '-' . $i + 1, session('user')['id'])))
                                                <ul>
                                                    @foreach (findTargetLogDetailFiles($task, $searchYear . '-' . $searchMonth . '-' . $i + 1, session('user')['id']) as $file)
                                                        <li>
                                                <span class="fs-5">
                                                    <a href="{{ $file }}" target="_black">
                                                        <i class="bi bi-link-45deg"></i> {{ $file }}
                                                    </a>
                                                </span>
                                                            <input type="hidden" name="uploadedFiles[]"
                                                                   value="{{ $file }}"/>
                                                            <span class="modal_upload-remote"
                                                                  onclick="removeUploaded(event)">
                                                    <img style="width:18px;height:18px"
                                                         src="{{ asset('assets/img/trash.svg') }}"/>
                                                </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif


                                            <ul class="modal_upload-list">

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Xóa
                                        báo
                                        cáo
                                    </button>
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy
                                    </button>
                                    <button type="submit" class="btn btn-danger">Lưu</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        @endfor
        <!-- Modal Thông tin nhiệm vụ -->
            <div class="modal fade" id="thongTinNhiemVu{{ $task->id }}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title w-100" id="exampleModalLabel">Thông tin nhiệm vụ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/danh-muc-nhiem-vu/{{ $task->id }}" method="POST">
                            @method('PUT')
                            @csrf
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
                                                        <div>{{ date('d/m/Y', strtotime($task->startDate)) }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>Hạn hoàn thành</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ date('d/m/Y', strtotime($task->deadline)) }}</div>
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
                                                Số báo cáo đã lập trong tháng: <span class="text-danger">{{ countFiles($task) }} file</span>
                                            </div>
                                            <div class="modal_items col-sm-6">
                                                Số tiêu chí đạt được trong tháng: <span class="text-danger">{{ countKpiKeys($task) }} tiêu chí</span>
                                            </div>
                                            <div class="modal_items col-sm-6">
                                                Số nhân sự thực hiện: <span class="text-danger">{{ count($task->users) }}
                                        nhân sự</span>
                                            </div>
                                            <div class="modal_items col-sm-6">
                                                Điểm KPI tạm tính: <span
                                                    class="text-danger">{{ $task->kpiValue }} ₫</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="modal-title">Nhận xét nhiệm vụ</div>
                                        </div>
                                        <div class="modal_list row">

                                            <div class="col-sm-10 d-flex  align-items-center">
                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <input class="form-control" placeholder="Nhập nhận xét"
                                                           name="managerComment" value="{{ $task->managerComment }}">
                                                @else
                                                    <input class="form-control" placeholder="Nhập nhận xét" readonly
                                                           name="managerComment" value="{{ $task->managerComment }}">
                                                @endif
                                            </div>
                                            <div class="col-sm-2 d-flex  align-items-center">
                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <input placeholder="Điểm KPI" class="form-control"
                                                           name="managerManDay" value="{{ $task->managerManDay }}">
                                                @else
                                                    <input placeholder="Điểm KPI" class="form-control" readonly
                                                           name="managerManDay" value="{{ $task->managerManDay }}">
                                                @endif
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
                                                @foreach ($task->targetLogs as $taskLog)
                                                    @foreach ($taskLog->targetLogDetails as $logDetail)
                                                        @foreach ($logDetail->kpiKeys as $key)
                                                            <tr>
                                                                <th class="fw-normal">
                                                                    {{ date('d/m/Y', strtotime($taskLog->reportedDate)) }}
                                                                </th>
                                                                <td>{{ $key->name }}</td>
                                                                <td>{{ $key->quantity }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endforeach
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
                                                        <th class="fw-normal">
                                                            {{ date('m/d/Y', strtotime($log->reportedDate)) }}</th>
                                                        <td>{{ $log->note }}</td>
                                                        <td>
                                                            <div class="text-break">
                                                                @if ($log->files && count(explode(',', $log->files)))
                                                                    <span>
                                                                @foreach (explode(',', $log->files) as $file)
                                                                            @if (strlen($file) > 0)
                                                                                <a class="d-flex align-items-center"
                                                                                   href="{{ $file }}" target="_black">
                                                                            <i class="bi bi-link-45deg"></i>
                                                                            {{ $file }}
                                                                        </a> <br/>
                                                                            @endif
                                                                        @endforeach
                                                            </span>
                                                                @endif

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
                            @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Đóng
                                    </button>
                                    <button type="submit" class="btn btn-danger">Lưu</button>

                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
    @endforeach

    @foreach ($reportTaskAdmin->data as $reportTask)
        @for ($i = 0; $i < cal_days_in_month(CAL_GREGORIAN, $searchMonth, $searchYear); $i++)
            <!-- Modal Báo cáo công việc phat sinh -->
                <div class="modal fade text-black" id="baoCaoCongViecPhatSinh-{{ $reportTask->id }}-{{ $i }}"
                     tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <div class="d-flex w-100 flex-md-column">
                                    <h5 class="modal-title">Báo cáo công việc phảt sinh</h5>
                                    <h6 class="text-capitalize fw-normal fs-5">Ngày {{ $i + 1 }} - {{ $searchMonth }}
                                        - {{ $searchYear }}</h6>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="/nhiem-vu-phat-sinh/bao-cao/{{ $reportTask->id }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="report_date"
                                       value="{{ $searchYear }}-{{ $searchMonth }}-{{ $i + 1 }}">
                                @if (findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->id > 0)
                                    <input type="hidden" name="id"
                                           value="{{ findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->id }}">
                                @endif
                                <div class="modal-body">
                                    <div class="mb-3 row">
                                        <div class="col-sm-12 d-flex  align-items-center">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Tên nhiệm
                                                vụ</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" readonly
                                                       value="{{ $reportTask->name }}"></input>
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
                                                <textarea class="form-control" name="note"
                                                          placeholder="Vui lòng nhập nội dung báo cáo vào đây">{{ findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->note ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input role="button" type="checkbox" class="form-check-input fs-5"
                                                       id="form-arise_wrapper{{ $reportTask->id }}{{ $i }}"
                                                       onchange="toggleKpiKeyForArisingTask(event, {{ $reportTask->id }}, {{ $i }})"
                                                       @if (count(findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->kpi_keys)) checked @endif>
                                                <label role="button" class="form-check-label user-select-none"
                                                       for="form-arise_wrapper{{ $reportTask->id }}{{ $i }}">
                                                    Đạt giá trị kinh doanh
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="kpi-wrapper" id="kpi-wrapper-arising{{ $reportTask->id }}{{ $i }}">
                                            <div class="repeater-datGiaTriKinhDoanh">
                                                <div data-repeater-list="kpiKeys">
                                                    @if (count(findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->kpi_keys))
                                                        @foreach (findReportTaskLog($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)->kpi_keys as $key)
                                                            <div class="row" data-repeater-item>
                                                                <div class="col-md-6 mb-3">
                                                                    <select class='form-select' data-live-search="true"
                                                                            title="Chọn tiêu chí" name="id">

                                                                        @foreach (session('listKpiKeys') as $kpiKey)
                                                                            @if ($key->id == $kpiKey->id)
                                                                                <option value="{{ $kpiKey->id }}"
                                                                                        selected>{{ $kpiKey->name }}</option>
                                                                            @else
                                                                                <option
                                                                                    value="{{ $kpiKey->id }}">{{ $kpiKey->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-5 mb-3">
                                                                    <input type="number" class="form-control"
                                                                           placeholder="Giá trị" name="quantity"
                                                                           value="{{ $key->pivot->quantity ?? 0 }}"/>
                                                                </div>
                                                                <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                    <img data-repeater-delete role="button"
                                                                         src="{{ asset('/assets/img/trash.svg') }}"
                                                                         width="20px" height="20px"/>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="row" data-repeater-item>
                                                            <div class="col-md-6 mb-3">
                                                                <select class='form-select' data-live-search="true"
                                                                        title="Chọn tiêu chí" name="id">

                                                                    @foreach ($reportTask->kpi_keys as $kpiKey)
                                                                        <option
                                                                            value="{{ $kpiKey->id }}">{{ $kpiKey->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-5 mb-3">
                                                                <input type="number" class="form-control"
                                                                       placeholder="Giá trị" name="quantity"/>
                                                            </div>
                                                            <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                <img data-repeater-delete role="button"
                                                                     src="{{ asset('/assets/img/trash.svg') }}"
                                                                     width="20px" height="20px"/>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="d-flex justify-content-start">
                                                        <div role="button" class="fs-4 text-danger"
                                                             data-repeater-create><i class="bi bi-plus-circle"></i>
                                                        </div>
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
                                                <div class="mt-2 text-secondary fst-italic">Hỗ trợ định dạng JPG, PNG
                                                    hoặc PDF, kích
                                                    thước tệp không quá 10MB
                                                </div>
                                                <div
                                                    class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                    <div class="modal_upload-addFile me-3">
                                                        <button role="button" type="button"
                                                                class="btn position-relative pe-4 ps-4">
                                                            <img style="width:16px;height:16px"
                                                                 src="{{ asset('assets/img/upload-file.svg') }}"/>
                                                            Tải file lên
                                                            <input role="button" type="file" class="modal_upload-input"
                                                                   name="files[]" class="modal_upload-file" multiple
                                                                   onchange="updateList(event)">
                                                        </button>
                                                    </div>

                                                    {{-- <div class="modal_upload-addLink">
                                                                    <button role="button" type="button" class="btn" id="addLinkOnline">
                                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/add-link.svg') }}" />
                                                                        Thêm liên kết
                                                                    </button>
                                                                </div> --}}
                                                </div>
                                                <div class="modal_upload-inputAddLink mt-3" id="inputAddLink"
                                                     style="display:none">
                                                    <input class="form-control" type="text"
                                                           placeholder="Nhập link tại đây"/>
                                                </div>
                                            </div>
                                            <div class="alert alert-danger alertNotSupport" role="alert"
                                                 style="display:none">
                                                File bạn tải lên hiện tại không hỗ trợ !
                                            </div>

                                            @if (count(getReportTaskLogFile($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1)))
                                                <ul>
                                                    @foreach (getReportTaskLogFile($reportTask, $searchYear . '-' . $searchMonth . '-' . $i + 1) as $file)
                                                        <li>
                                                <span class="fs-5">
                                                    <a href="{{ $file }}" target="_black">
                                                        <i class="bi bi-link-45deg"></i> {{ $file }}
                                                    </a>
                                                </span>
                                                            <input type="hidden" name="uploadedFiles[]"
                                                                   value="{{ $file }}"/>
                                                            <span class="modal_upload-remote"
                                                                  onclick="removeUploaded(event)">
                                                    <img style="width:18px;height:18px"
                                                         src="{{ asset('assets/img/trash.svg') }}"/>
                                                </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                            <input type="hidden" name="uploadedFiles[]" value=""/>

                                            <ul class="modal_upload-list">

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Xóa
                                        báo
                                        cáo
                                    </button>
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy
                                    </button>
                                    <button type="submit" class="btn btn-danger">Lưu</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        @endfor
        <!-- Modal Thông tin nhiệm vụ -->
            <div class="modal fade" id="thongTinNhiemVuPhatSinh{{ $reportTask->id }}" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title w-100" id="exampleModalLabel">Thông tin nhiệm vụ</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/nhiem-vu-phat-sinh/cham-diem/{{ $reportTask->id }}" method="POST">
                            @method('PUT')
                            @csrf

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
                                                        <div>{{ $reportTask->name ?? '' }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>Mô tả</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $reportTask->description ?? '' }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>Người đảm nhiệm</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $reportTask->user->name ?? '' }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>Vị trí đảm nhiệm</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $reportTask->position->name ?? '' }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>Ngày bắt đầu</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ date('d/m/Y', strtotime($reportTask->created_at)) }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>Hạn hoàn thành</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ date('d/m/Y', strtotime($reportTask->deadline)) }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div>Man day</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $reportTask->manDay }} ngày</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <div>
                                                        <td>Ý kiến TPB</td>
                                                        <td>{{ $reportTask->managerComment }}</td>
                                                    </div>
                                                </tr>
                                                <tr>
                                                    <div>
                                                        <td>Chấm điểm</td>
                                                        <td>{{ $reportTask->managerManDay }}</td>
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
                                                Số báo cáo đã lập trong tháng: <span class="text-danger"> {{ countReportTaskLogFiles($reportTask) }} file</span>
                                            </div>
                                            <div class="modal_items col-sm-6">
                                                Số tiêu chí đạt được trong tháng: <span
                                                    class="text-danger">tiêu chí {{ countReportTaskLogKpiKeys($reportTask) }}</span>
                                            </div>
                                            <div class="modal_items col-sm-6">
                                                Số nhân sự thực hiện: <span class="text-danger">1
                                        nhân sự</span>
                                            </div>
                                            <div class="modal_items col-sm-6">
                                                Điểm KPI tạm tính: <span class="text-danger">0 ₫</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="modal-title">Nhận xét nhiệm vụ</div>
                                        </div>
                                        <div class="modal_list row">

                                            <div class="col-sm-10 d-flex  align-items-center">
                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <input class="form-control" placeholder="Nhập nhận xét"
                                                           name="managerComment"
                                                           value="{{ $reportTask->managerComment }}">
                                                @else
                                                    <input class="form-control" placeholder="Nhập nhận xét"
                                                           name="managerComment"
                                                           value="{{ $reportTask->managerComment }}">
                                                @endif
                                            </div>
                                            <div class="col-sm-2 d-flex  align-items-center">
                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                    <input placeholder="Điểm KPI" class="form-control"
                                                           name="managerManDay"
                                                           value="{{ $reportTask->managerManDay }}">
                                                @else
                                                    <input placeholder="Điểm KPI" class="form-control"
                                                           name="managerManDay"
                                                           value="{{ $reportTask->managerManDay }}">
                                                @endif
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
                                                @foreach ($reportTask->report_task_logs as $taskLog)
                                                    @foreach ($taskLog->kpi_keys as $key)
                                                        <tr>
                                                            <th class="fw-normal">
                                                                {{ date('d/m/Y', strtotime($taskLog->report_date)) }}
                                                            </th>
                                                            <td>{{ $key->name }}</td>
                                                            <td>{{ $key->pivot->quantity }}</td>
                                                        </tr>
                                                    @endforeach
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
                                                @foreach ($reportTask->report_task_logs as $log)
                                                    <tr>
                                                        <th class="fw-normal">
                                                            {{ date('m/d/Y', strtotime($log->report_date)) }}</th>
                                                        <td>{{ $log->note }}</td>
                                                        <td>
                                                            <div class="text-break">
                                                                @if ($log->files && count(explode(',', $log->files)))
                                                                    <span>
                                                                @foreach (explode(',', $log->files) as $file)
                                                                            @if (strlen($file) > 0)
                                                                                <a class="d-flex align-items-center"
                                                                                   href="{{ $file }}" target="_black">
                                                                            <i class="bi bi-link-45deg"></i>
                                                                            {{ $file }}
                                                                        </a> <br/>
                                                                            @endif
                                                                        @endforeach
                                                            </span>
                                                                @endif

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
                            @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Đóng
                                    </button>
                                    <button type="submit" class="btn btn-danger">Lưu</button>

                                </div>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
    @endforeach



    @endsection
    @section('footer-script')
        <!-- ChartJS -->
            <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

            <!-- Plugins -->
            <script type="text/javascript" charset="utf-8"
                    src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
            <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
            <script type="text/javascript"
                    src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

            <!-- Chart Types -->
            <script type="text/javascript"
                    src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
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
                //on domload
                $(function () {
                    //display none for kpi key repeater
                    const kpiKeyRepeater = document.querySelectorAll('.kpi-wrapper');
                    console.log("Found " + kpiKeyRepeater.length + " kpi key repeater(s)");
                    kpiKeyRepeater.forEach((item) => {
                        //find checkbox
                        const checkbox = item.parentNode.parentNode.parentNode.parentNode.parentNode.querySelector(
                            '.form-check-input');
                        if (checkbox.checked) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
                const toggleKpiKey = (e, taskId, dayIndex) => {
                    const isChecked = e.target.checked;
                    const kpiKeyRepeater = document.getElementById('kpi-wrapper' + taskId + dayIndex);
                    if (isChecked) {
                        kpiKeyRepeater.style.display = 'block';
                    } else {
                        kpiKeyRepeater.style.display = 'none';
                    }
                }

                const toggleKpiKeyForArisingTask = (e, taskId, dayIndex) => {
                    const isChecked = e.target.checked;
                    const kpiKeyRepeater = document.getElementById('kpi-wrapper-arising' + taskId + dayIndex);
                    if (isChecked) {
                        kpiKeyRepeater.style.display = 'block';
                    } else {
                        kpiKeyRepeater.style.display = 'none';
                    }
                }
            </script>

            <script>
                $("#addLinkOnline").click(function () {
                    $("#inputAddLink").toggle();
                });
            </script>

            <script type="text/javascript">
                updateList = function (e) {
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

                select.addEventListener('change', function () {
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
                $(document).ready(function () {
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
                    $(".form-control.timeSuaVanDe").datetimepicker({
                        format: 'd/m/Y',
                        timepicker: false,
                    })
                    $(".giaonvuphatsinh.form-control").daterangepicker({
                        locale: {
                            format: 'DD/MM/YYYY',
                        },
                        timepicker: false,
                    })

                });
            </script>

            <script>
                $(document).ready(function () {
                    $('#main_table').DataTable({
                        scrollY: "150px",
                        scrollX: true,
                        scrollCollapse: true,
                        paging: false,
                        pageLength: 10,
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
                            searchPlaceholder: 'Tìm kiếm nhiệm vụ',
                            zeroRecords: 'Hiện chưa có nhiệm vụ',
                        },
                        oLanguage: {
                            sLengthMenu: "_MENU_ bản ghi trên trang",
                        },
                        dom: '<"d-flex justify-content-between align-items-center hidden mb-3"<"main-title-wrapper-left"><"d-flex "f<"main-title-wrapper-right justify-content-end">>>rt<"dataTables_bottom  justify-content-end"p>',
                        fixedColumns: {
                            left: 4,
                        }
                    });
                    $('div.main-title-wrapper-left').html(`
            <div class="d-flex justify-content-between align-items-center pb-2">
                <div class="card-title">Mục tiêu nhiệm vụ cá nhân</div>
                <div class="mainSection_total-kpi">
                    Tổng KPI cá nhân tạm tính:
                    <strong>{!! $myTotalKpi !!}</strong>
                    KPI
                </div>

            </div>
            `);
                    $('div.main-title-wrapper-right').html(`
            <div class="action_wrapper d-flex">
                <div class="action_export ms-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                    <button class="btn-export"><i class="bi bi-download"></i></button>
                </div>
            </div>
        `);


                    $('#two_table').DataTable({
                        scrollY: "150px",
                        scrollX: true,
                        scrollCollapse: true,
                        paging: false,
                        pageLength: 10,
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
                            searchPlaceholder: 'Tìm kiếm nhiệm vụ',
                            zeroRecords: 'Hiện chưa có nhiệm vụ',
                        },
                        oLanguage: {
                            sLengthMenu: "_MENU_ bản ghi trên trang",
                        },
                        dom: '<"d-flex justify-content-end align-items-center mb-3"<"two-title-wrapper-left">>rt<"dataTables_bottom  justify-content-end"p>',
                        fixedColumns: {
                            left: 4,
                        }
                    });

                    $('#three_table').DataTable({
                        scrollY: "150px",
                        scrollX: true,
                        scrollCollapse: true,
                        paging: false,
                        pageLength: 10,
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
                            searchPlaceholder: 'Tìm kiếm nhiệm vụ',
                            zeroRecords: 'Hiện chưa có nhiệm vụ',
                        },
                        oLanguage: {
                            sLengthMenu: "_MENU_ bản ghi trên trang",
                        },
                        dom: '<"d-flex justify-content-between align-items-center mb-3"<"three-title-wrapper-left"><"d-flex "f<"three-title-wrapper-right justify-content-end">>>rt<"dataTables_bottom  justify-content-end"p>',
                        fixedColumns: {
                            left: 4,
                        }
                    });
                    $('div.three-title-wrapper-left').html(`
            @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                        <div class="d-flex justify-content-between align-items-center pb-2">
                            <div class="card-title">Báo cáo ngày của đơn vị</div>
                            <div class="mainSection_total-kpi">
                                Tổng KPI bộ phận tạm tính:
                                <strong>{!! $totalKpi !!}</strong>
                    KPI
                </div>
            </div>
            @endif
                        `);
                    $('div.three-title-wrapper-right').html(`
            <div class="action_wrapper d-flex ms-3">
                <div class="action_export" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Xuất file Excel" data-bs-original-title="Xuất file Excel">
                    <button class="btn-export"><i class="bi bi-download"></i></button>
                </div>
            </div>
        `);


                    $('#four_table').DataTable({
                        scrollY: "150px",
                        scrollX: true,
                        scrollCollapse: true,
                        paging: false,
                        pageLength: 10,
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
                            searchPlaceholder: 'Tìm kiếm vấn đề',
                            zeroRecords: 'Hiện chưa có vấn đề',
                        },
                        oLanguage: {
                            sLengthMenu: "_MENU_ bản ghi trên trang",
                        },
                        dom: '<"d-flex justify-content-end align-items-center mb-3">rt<"dataTables_bottom  justify-content-end"p>',
                        fixedColumns: {
                            left: 4,
                        }
                    });


                    $('#dsVanDe').DataTable({
                        paging: true,
                        pageLength: 10,
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
                            searchPlaceholder: 'Tìm kiếm vấn đề',
                            zeroRecords: 'Hiện chưa có vấn đề',
                        },
                        oLanguage: {
                            sLengthMenu: "_MENU_ bản ghi trên trang",
                        },
                        dom: '<"d-flex justify-content-between align-items-center mb-3"<"dsVanDe-title-wrapper-left"><"d-flex "f<"dsVanDe-title-wrapper-right justify-content-end">>>rt<"dataTables_bottom  justify-content-end"p>',
                    });
                    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                    $('div.dsVanDe-title-wrapper-left').html(`
            <div class="card-title">Danh sách vấn đề</div>

        `);
                    $('div.dsVanDe-title-wrapper-right').html(`
            <div class="action_wrapper d-flex ms-3">
                <div class="action_export" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Xuất file Excel" data-bs-original-title="Xuất file Excel">
                    <button class="btn-export"><i class="bi bi-download"></i></button>
                </div>
            </div>
        `);
                    @endif

                });
            </script>

@endsection
