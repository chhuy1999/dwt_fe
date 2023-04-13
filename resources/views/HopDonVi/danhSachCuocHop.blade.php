@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách cuộc họp')

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
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách cuộc họp
                        </h5>
                        @include('template.components.sectionCard')
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="khoLuuTruBienBanHop" class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap text-center" style="width:2%">STT</th>
                                                            <th class="text-nowrap text-center" style="width:20%">Tên cuộc họp</th>
                                                            <th class="text-nowrap text-center" style="width:4%">Mã cuộc họp</th>
                                                            <th class="text-nowrap text-center" style="width:8%">Thời gian tạo</th>
                                                            <th class="text-nowrap text-center" style="width:10%">Phòng ban</th>
                                                            <th class="text-nowrap text-center" style="width:10%">Người chủ trì</th>
                                                            <th class="text-nowrap text-center" style="width:2%">Trạng thái</th>
                                                            <th class="text-nowrap text-center" style="width:2%">
                                                                @if ($isClosed)
                                                                    Xem biên bản
                                                                @else
                                                                    Tham gia
                                                                @endif
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($listMeeting->data as $meeting)
                                                            <tr>
                                                                <th class="text-center" scope="row">{{ $meeting->id }}</th>
                                                                <td>
                                                                    {{ $meeting->title }}
                                                                </td>
                                                                <td class="text-center">
                                                                    {{ $meeting->code }}
                                                                </td>
                                                                <td class="text-center text-nowrap">
                                                                    {{ \Carbon\Carbon::parse($meeting->created_at)->format('d-m-Y || H:i:s') }}
                                                                    {{-- {{ date('d/m/Y', strtotime($value->created_at->format('d-m-Y')) ) }} --}}
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    {{ $meeting->departement->name ?? '' }}
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    {{ $meeting->leader->name ?? '' }}
                                                                </td>
                                                                <td class="text-center">
                                                                    @switch($meeting->status)
                                                                        @case(0)
                                                                            <span class="badge bg-success">Đang diễn ra</span>
                                                                        @break

                                                                        @case(1)
                                                                            <span class="badge bg-danger">Đã kết thúc</span>
                                                                        @break

                                                                        @default
                                                                            <span></span>
                                                                    @endswitch
                                                                </td>
                                                                <td class="text-center">
                                                                    <div>
                                                                        @if ($meeting->status == 0)
                                                                            <div role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Tham gia cuộc họp">
                                                                                <div data-bs-toggle="modal" data-bs-target="#thamGiaCuocHop{{ $meeting->id }}">
                                                                                    <i class="bi bi-arrow-right-square fs-5"></i>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($meeting->status == 1)
                                                                            <div role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Xem biên bản">
                                                                                <div data-bs-toggle="modal" data-bs-target="#bienban{{ $meeting->id }}">
                                                                                    <i class="bi bi-arrow-right-square fs-5"></i>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <span></span>
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            {{-- Tham gia cuộc họp --}}
                                                            <div class="modal fade" id="thamGiaCuocHop{{ $meeting->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100" id="exampleModalLabel">Tham gia cuộc họp
                                                                            </h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="/giao-ban/tham-gia" method="POST">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-8 mb-3">
                                                                                        <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cuộc họp" class="form-control" value="{{ $meeting->code }}" name="code" id="listMeetCode">
                                                                                    </div>
                                                                                    <div class="col-sm-4 mb-3">
                                                                                        <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Nhập mật khẩu" placeholder="Nhập mật khẩu (nếu có)" class="form-control" name="password">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                                <button type="submit" class="btn btn-danger" id="listJoinMeet">Tham gia cuộc họp</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
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
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')
    @foreach ($listMeeting->data as $meeting)
        <!-- Modal duyệt biên bản họp -->
        <div class="modal fade" id="bienban{{ $meeting->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger ps-5 pe-5" data-bs-dismiss="modal">Hủy</button>
                        <form action="/giao-ban/{{ $meeting->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-danger">Xác nhận</button>
                        </form>
                    </div> --}}


                </div>
            </div>
        </div>
    @endforeach


    {{-- Tạo cuộc họp --}}
    <div class="modal fade" id="taoCuocHop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Tạo cuộc họp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/giao-ban" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" placeholder="Tên cuộc họp" name="title">
                            </div>
                            <div class="col-sm-3 mb-3">
                                <select class="selectpicker" data-size="5" title="Loại cuộc họp" name="type">
                                    <option value="Ngày">Ngày</option>
                                    <option value="Tuần">Tuần</option>
                                    <option value="Tháng">Tháng</option>
                                    <option value="Quý">Quý</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị">
                                <select class="form-select" data-size="5" title="Đơn vị" id="meet-dp-list" name="departement_id">

                                </select>
                            </div>
                            <div class="col-sm-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Chủ trì">
                                <select class="form-select" data-size="5" title="Chủ trì" name="leader_id" id="user-select">

                                </select>
                            </div>
                            <div class="col-sm-4 mb-3 position-relative">
                                <input id="thoiGianCuoCHop" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cuộc họp" class="form-control" placeholder="Thời gian" name="start_time">
                                <i class="bi bi-calendar-plus style_pickdate"></i>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cuộc họp" readonly class="form-control" value="{{ time() }}" name="code">
                                {{-- <p>Mã cuộc họp: {{ time() }}</p> --}}
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Đặt mật khẩu" placeholder="Đặt mật khẩu (nếu có)" class="form-control" name="password">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Tạo cuộc họp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Tham gia cuộc họp --}}
    <div class="modal fade" id="thamGiaCuocHop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Tham gia cuộc họp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/giao-ban/tham-gia" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-8 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cuộc họp" class="form-control" placeholder="Nhập mã cuộc họp" id="meetCode" name="code">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Nhập mật khẩu" placeholder="Nhập mật khẩu (nếu có)" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger" id="joinMeet">Tham gia cuộc họp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('footer-script')
    <script src="{{ secure_asset('assets/plugins/datatables/custom-datatable.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ secure_asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ secure_asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ secure_asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <script src="{{ secure_asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>
    <script>
        $('#khoLuuTruBienBanHop').DataTable({
            paging: false,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ biên bản họp',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm biên bản họp...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"d-flex justify-content-between mb-3"<"card-title-wrapper-left"><"d-flex "<"card-title-wrapper-right justify-content-end">f>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
        $('div.card-title-wrapper-left').html(`
                <div class="card-title">Bộ lọc</div>
        `);
        $('div.card-title-wrapper-right').html(`
                <div class="action_wrapper d-flex">
                    <div class="action_export me-3">
                        <button class="btn btn-outline-danger d-block" data-bs-toggle="modal" data-bs-target="#thamGiaCuocHop">Tham gia cuộc họp</button>
                    </div>
                    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                    <div class="action_export me-3">
                        <button class="btn btn-danger d-block" data-bs-toggle="modal" data-bs-target="#taoCuocHop">Tạo cuộc họp</button>
                    </div>
                    @endif
                </div>
        `);
    </script>
@endsection
