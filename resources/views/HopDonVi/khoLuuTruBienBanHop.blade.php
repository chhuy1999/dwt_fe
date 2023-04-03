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
                                                <table id="khoLuuTruBienBanHop"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap" style="width:5%">STT</th>
                                                            <th class="text-nowrap" style="width:20%">Tên cuộc họp</th>
                                                            <th class="text-nowrap" style="width:10%">Thời gian tạo</th>
                                                            <th class="text-nowrap" style="width:10%">Phòng ban</th>
                                                            <th class="text-nowrap" style="width:10%">Người chủ trì</th>
                                                            <th class="text-nowrap" style="width:10%">Trạng thái</th>
                                                            {{-- <th class="text-nowrap" style="width:10%">Tham gia</th> --}}
                                                            <th class="text-nowrap" style="width:10%">Xem biên bản họp</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data->data as $value)
                                                            <tr>
                                                                <th scope="row">{{ $value->id }}</th>
                                                                <td>
                                                                    {{ $value->title }}
                                                                </td>
                                                                <td class="text-center">
                                                                    {{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y || H:i:s'); }}
                                                                    {{-- {{ date('d/m/Y', strtotime($value->created_at->format('d-m-Y')) ) }} --}}
                                                                </td>
                                                                <td>
                                                                    @foreach ($listDepartments->data as $dep)
                                                                        @if ($dep->id == $value->departement->id)
                                                                            {{ $dep->name }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach ($listUsers->data as $pos)
                                                                        @if ($pos->id == $value->leader->id)
                                                                            {{ $pos->name }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    Đang diễn ra
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <a href="" data-bs-toggle="modal"data-bs-target="#thamGiaCuocHop{{ $value->id }}" class="header_more-link">
                                                                            Tham gia cuộc họp
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                {{-- <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td> --}}
                                                            </tr>
                                                            {{-- Tham gia cuộc họp --}}
                                                            <div class="modal fade" id="thamGiaCuocHop{{ $value->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100"
                                                                                id="exampleModalLabel">Tham gia cuộc họp
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="/giao-ban/tham-gia" method="POST">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-8 mb-3">
                                                                                        <input type="text"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            title="Mã cuộc họp"
                                                                                            class="form-control"
                                                                                            value="{{ $value->code }}"
                                                                                            name="code"
                                                                                            id="listMeetCode">
                                                                                    </div>
                                                                                    <div class="col-sm-4 mb-3">
                                                                                        <input type="text"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            title="Nhập mật khẩu"
                                                                                            placeholder="Nhập mật khẩu (nếu có)"
                                                                                            class="form-control"
                                                                                            name="password">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-outline-danger"
                                                                                    data-bs-dismiss="modal">Hủy</button>
                                                                                <button type="submit" class="btn btn-danger" id="listJoinMeet">Tham gia cuộc họp</button>
                                                                            </div>
                                                                        </form>
                                                                        {{-- <form action="" method="PUT">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-8 mb-3">
                                                                                        <input type="text"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            title="Mã cuộc họp"
                                                                                            class="form-control"
                                                                                            value="{{ $value->code }}"
                                                                                            id="listMeetCode">
                                                                                    </div>
                                                                                    <div class="col-sm-4 mb-3">
                                                                                        <input type="text"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            title="Nhập mật khẩu"
                                                                                            placeholder="Nhập mật khẩu (nếu có)"
                                                                                            class="form-control"
                                                                                            name="password">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form> --}}
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                data-bs-dismiss="modal">Hủy</button>
                                                                            <button type="button" class="btn btn-danger" id="listJoinMeet">Tham gia cuộc họp</button>
                                                                        </div>

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

    <script>
        ///join meet
        const listJoinMeetBtn = document.getElementById('listJoinMeet');
        const listMeetCodeEL = document.getElementById('listMeetCode');

        listJoinMeetBtn.addEventListener('click', () => {
            const meetCode = listMeetCodeEL.value;
            if (meetCode) {
                window.location = '/giao-ban/' + meetCode;
            }
        })
    </script>
@endsection
