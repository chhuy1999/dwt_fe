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
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>Kế toán</strong>
                                </div>
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
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="action_wrapper d-flex">
                                            <div class="form-group has-search">
                                                <span class="bi bi-search form-control-feedback fs-5"></span>
                                                <form action="/danh-muc-chi-so-key" method="GET">
                                                    <input type="text" class="form-control" placeholder="Tìm kiếm chỉ số key" name="q" value="{{request()->q}}">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="main_action">
                                            <button id="exporttable" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#themMoiDinhMuc">
                                                <i class="bi bi-plus"></i>
                                                Thêm chỉ số key
                                            </button>
                                            <button id="exporttable" class="btn btn-outline-danger" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Xuất file Excel">
                                                <i class="bi bi-download"></i>
                                                Xuất Excel
                                            </button>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="position-relative">
                                                <table class="table table-responsive table-hover table-bordered">
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
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
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
                                                                        {{ $key->unit && $key->unit->name }}
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
                                                                                data-bs-target={{ '#suaMoiDinhMuc' . $key->id }}>
                                                                                <img style="width:16px;height:16px"
                                                                                    src="{{ asset('assets/img/edit.svg') }}" />
                                                                                Sửa
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#xoaThuocTinh{{ $key->id }}"
                                                                                data-repeater-delete>
                                                                                <img style="width:16px;height:16px"
                                                                                    src="{{ asset('assets/img/trash.svg') }}" />
                                                                                Xóa
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal Sửa chỉ số key -->
                                                            <div class="modal fade" id="{{ 'suaMoiDinhMuc' . $key->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100"
                                                                                id="exampleModalLabel">Sửa chỉ số key</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form method="POST"
                                                                            action="/danh-muc-chi-so-key/{{ $key->id }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-8 mb-3">
                                                                                        <input class="form-control"
                                                                                                    type="text"
                                                                                                    name="name"
                                                                                                    value="{{ $key->name }}">
                                                                                    </div>
                                                                                    <div class="col-sm-4 mb-3">
                                                                                        
                                                                                        <select
                                                                                            class="selectpicker"
                                                                                            title="Chọn đơn vị"
                                                                                            name="unit_id">
                                                                                            @foreach ($listUnits->data as $unit)
                                                                                                @if ($unit->id != $key->unit_id)
                                                                                                    <option
                                                                                                        value="{{ $unit->id }}">
                                                                                                        {{ $unit->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option
                                                                                                        value="{{ $unit->id }}"
                                                                                                        selected>
                                                                                                        {{ $unit->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                        <textarea class="form-control" name="description">{{ $key->description }}</textarea>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-outline-danger"
                                                                                    data-bs-dismiss="modal">Hủy</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Lưu</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- Xóa đinh mức --}}
                                                            <div class="modal fade" id="xoaThuocTinh{{ $key->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger"
                                                                                id="exampleModalLabel">Xóa chỉ số key</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có thực sự muốn xoá chỉ số key này không?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                data-bs-dismiss="modal">Hủy</button>
                                                                            <form
                                                                                action="/danh-muc-chi-so-key/{{ $key->id }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger"
                                                                                    id="deleteRowElement">Có, tôi muốn
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
    <div class="modal fade" id="themMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input class="form-control" type="text" required placeholder="Nhập tên chỉ số key *"
                                            name="name">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <select class="selectpicker" required title="Chọn đơn vị" name="unit_id">
                                    @foreach ($listUnits->data as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
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

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>

@endsection
