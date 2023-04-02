@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh mục chỉ số key')
@section('content')
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh mục chỉ số key
                        </h5>
                        @include('template.components.sectionCard')
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="position-relative">
                                                <table id="dsChiSoKey" class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 2%" class="text-center">STT</th>
                                                            <th style="width: 20%">Tên chỉ số key</th>
                                                            <th style="width: 66%">Mô tả</th>
                                                            <th style="width: 10%">Đơn vị tính</th>
                                                            <th style="width: 2%"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data->data as $key)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        {{ $key->id }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        {{ $key->name }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        {{ $key->description }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        {{ $key->unit->name ?? '' }}
                                                                    </div>

                                                                </td>
                                                                <td>
                                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target={{ '#suaChiSoKey' . $key->id }}>
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                                Sửa
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh{{ $key->id }}" data-repeater-delete>
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                Xóa
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal Sửa chỉ số key -->
                                                            <div class="modal fade" id="{{ 'suaChiSoKey' . $key->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100" id="exampleModalLabel">Sửa chỉ số key</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form method="POST" action="{{ route('key.update', $key->id) }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-8 mb-3">
                                                                                        <input class="form-control" required type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tên chỉ số key" name="name" value="{{ $key->name }}">
                                                                                    </div>
                                                                                    <div class="col-sm-4 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị">

                                                                                        <select class="selectpicker" title="Chọn đơn vị" name="unit_id">
                                                                                            @foreach ($listUnits->data as $unit)
                                                                                                @if ($unit->id != $key->unit_id)
                                                                                                    <option value="{{ $unit->id }}">
                                                                                                        {{ $unit->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option value="{{ $unit->id }}" selected>
                                                                                                        {{ $unit->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                        {{-- <input type="text" class="form-control" name="unit_id" value="đơn vị"> --}}
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                        <textarea class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="Mô tả chỉ số" name="description">{{ $key->description }}</textarea>
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

                                                            {{-- Xóa đinh mức --}}
                                                            <div class="modal fade" id="xoaThuocTinh{{ $key->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa chỉ số key</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có thực sự muốn xoá chỉ số key này không?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                            <form action="{{ route('key.delete', $key->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn
                                                                                    xóa</button>
                                                                            </form>
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
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarRight') --}}
    <!-- Modal Thêm chỉ số key -->
    <div class="modal fade" id="themChiSoKey" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm chỉ số key</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="/danh-muc-chi-so-key">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-8 mb-3">
                                <input class="form-control" type="text" required placeholder="Nhập tên chỉ số key *" name="name">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <select class="selectpicker" required title="Chọn đơn vị" name="unit_id" data-size="5" data-live-search="true">
                                    
                                    @foreach ($listUnits->data as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" class="form-control" name="unit_id" placeholder="Nhập đơn vị"> --}}
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" placeholder="Nhập mô tả chỉ số" name="description"></textarea>
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






@endsection
@section('footer-script')
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>

    <script>
        const targetTable = $('#dsChiSoKey').DataTable({
            paging: true,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            pageLength: 30,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm chỉ số key...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"d-flex mb-3 justify-content-between"f<"card-title-wrapper">>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper').html(`
            <div class="main_search d-flex me-3">
                @if (session('user')['role'] == 'admin')
                <button class="btn btn-danger me-3" data-bs-toggle="modal"
                    data-bs-target="#themChiSoKey">
                    Thêm chỉ số key
                </button>
                @endif
                <button id="exporttable" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                    <i class="bi bi-download"></i>
                    Xuất Excel
                </button>
            </div>
        `);
    </script>
@endsection
