@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách cuộc họp')
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
                                                            <th class="text-nowrap text-center" style="width:2%">Tham gia</th>
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
                                                                    {{$meeting->department->name ?? ""}}
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    {{$meeting->leader->name ?? ""}}
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
                                                                            <div  role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Tham gia cuộc họp">
                                                                                <div  data-bs-toggle="modal" data-bs-target="#thamGiaCuocHop{{ $meeting->id }}">
                                                                                    <i class="bi bi-arrow-right-square fs-5"></i>
                                                                                </div>
                                                                            </div>
                                                                        @elseif($meeting->status == 1)
                                                                            <span></span>
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



@endsection
@section('footer-script')
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/custom-datatable.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>
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
            dom: '<"d-flex justify-content-between align-items-center mb-3"<"card-title-wrapper-left"><"d-flex "f>>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper-left').html(`
                <div class="card-title">Bảng lưu trữ biên bản họp</div>
            `);
    </script>
@endsection
