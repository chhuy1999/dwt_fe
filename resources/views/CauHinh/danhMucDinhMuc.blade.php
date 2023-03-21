@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách định mức lao động')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách định mức lao động
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
                        <div id="" class="mainSection_thismonth">
                            <input id="thismonth" value="<?php echo date('m/Y'); ?>" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="main_search d-flex">
                                            <i class="bi bi-search"></i>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm định mức">
                                        </div>
                                        <div class="main_action">
                                            <button id="exporttable" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#themMoiDinhMuc">
                                                <i class="bi bi-plus"></i>
                                                Thêm mới
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
                                            <div class="repeater-hopPhongBan position-relative">
                                                <table class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Mục tiêu/Nhiệm vụ</th>
                                                            <th>Mô tả</th>
                                                            <th>Đơn vị tính</th>
                                                            <th>Vị trí</th>
                                                            <th>Bộ phận</th>
                                                            <th>Manday</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="group-a">
                                                        @foreach ($listTargets->data as $target)
                                                            <tr data-repeater-item>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-center">
                                                                        {{ $loop->iteration }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div>{{ $target->name }}</div>
                                                                </td>
                                                                <td>
                                                                    <p>
                                                                        {{ $target->description }}
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    {{ $target->unit && $target->unit->name }}
                                                                </td>
                                                                <td>
                                                                    {{ $target->position && $target->position->name }}
                                                                </td>
                                                                <td>
                                                                    {{ $target->departement && $target->departement->name }}
                                                                </td>
                                                                <td>
                                                                    {{ $target->manday }}
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
                                                                                data-bs-target="#suaMoiDinhMuc{{ $target->id }}">
                                                                                <img style="width:16px;height:16px"
                                                                                    src="{{ asset('assets/img/edit.svg') }}" />
                                                                                Sửa
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#xoaThuocTinh{{ $target->id }}"
                                                                                data-repeater-delete>
                                                                                <img style="width:16px;height:16px"
                                                                                    src="{{ asset('assets/img/trash.svg') }}" />
                                                                                Xóa
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <!-- Modal Sửa Định Mức -->
                                                            <div class="modal fade" id="suaMoiDinhMuc{{ $target->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    style="max-width:38%;">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100"
                                                                                id="exampleModalLabel">Sửa định mức</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <form
                                                                            action="/danh-muc-dinh-muc/{{ $target->id }}"
                                                                            method="POST">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <div class="modal-body">

                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
                                                                                        <div
                                                                                            class="mb-3 d-flex align-items-center  justify-content-between">
                                                                                            <div class="modal_body-title">
                                                                                                Tên định mức <span
                                                                                                    class="text-danger">*</span>
                                                                                            </div>
                                                                                            &nbsp;<input
                                                                                                class="form-control"
                                                                                                style="width:80%"
                                                                                                type="text"
                                                                                                value="{{ $target->name }}"
                                                                                                name="name"
                                                                                                placeholder="Nhập tên định mức">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-12">
                                                                                        <div class="mb-3">
                                                                                            <div class="modal_body-title">
                                                                                                Mô
                                                                                                tả/Diễn giải <span
                                                                                                    class="text-danger">*</span>
                                                                                            </div>
                                                                                            <textarea class="form-control" name="description" placeholder="Nhập mô tả thực hiện">
                                                                                                {{ $target->description }}
                                                                                            </textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <div
                                                                                            class="mb-3 d-flex align-items-center  justify-content-between">
                                                                                            <div class="modal_body-title">
                                                                                                Đơn vị</div>
                                                                                            <select name="unit_id"
                                                                                                class="selectpicker">

                                                                                                @foreach ($listUnits->data as $unit)
                                                                                                    @if ($unit->id == $target->unit_id)
                                                                                                        <option
                                                                                                            value="{{ $unit->id }}"
                                                                                                            selected>
                                                                                                            {{ $unit->name }}
                                                                                                        </option>
                                                                                                    @else
                                                                                                        <option
                                                                                                            value="{{ $unit->id }}">
                                                                                                            {{ $unit->name }}
                                                                                                        </option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-3">
                                                                                        <div
                                                                                            class="mb-3 d-flex align-items-center  justify-content-between">
                                                                                            <div class="modal_body-title">
                                                                                                Manday</div>
                                                                                            <input class="form-control"
                                                                                                style="width:76%"
                                                                                                type="text"
                                                                                                name="manday"
                                                                                                value="{{ $target->manday }}"
                                                                                                placeholder="Nhập Manday">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-5">
                                                                                        <div
                                                                                            class="mb-3 d-flex align-items-center  justify-content-between">
                                                                                            <div class="modal_body-title">
                                                                                                Số lượng</div>
                                                                                            <input class="form-control"
                                                                                                style="width:76%"
                                                                                                type="text"
                                                                                                name="quantity"
                                                                                                value="{{ $target->quantity }}"
                                                                                                placeholder="Nhập Số lượng">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-5">
                                                                                        <div
                                                                                            class="mb-3 d-flex align-items-center  justify-content-between">
                                                                                            <div class="col-sm-3">
                                                                                                <div
                                                                                                    class=" modal_body-title">
                                                                                                    Vị trí</div>
                                                                                            </div>
                                                                                            <div class="col-sm-9">
                                                                                                <select
                                                                                                    class="selectpicker"
                                                                                                    name="position_id"
                                                                                                    title="Chọn Vị trí">
                                                                                                    @foreach ($listPositions->data as $pos)
                                                                                                        @if ($pos->id == $target->position_id)
                                                                                                            <option
                                                                                                                value="{{ $pos->id }}"
                                                                                                                selected>
                                                                                                                {{ $pos->name }}
                                                                                                            </option>
                                                                                                        @else
                                                                                                            <option
                                                                                                                value="{{ $pos->id }}">
                                                                                                                {{ $pos->name }}
                                                                                                            </option>
                                                                                                        @endif
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-7">
                                                                                        <div
                                                                                            class="mb-3 d-flex align-items-center  justify-content-between">
                                                                                            <div class="col-sm-4">
                                                                                                <div
                                                                                                    class="modal_body-title">
                                                                                                    Đơn vị phòng ban</div>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <select
                                                                                                    class="selectpicker"
                                                                                                    name="departement_id"
                                                                                                    title="Chọn phòng/ban">
                                                                                                    @foreach ($listDepartments->data as $dep)
                                                                                                        @if ($dep->id == $target->departement_id)
                                                                                                            <option
                                                                                                                value="{{ $dep->id }}"
                                                                                                                selected>
                                                                                                                {{ $dep->name }}
                                                                                                            </option>
                                                                                                        @else
                                                                                                            <option
                                                                                                                value="{{ $dep->id }}">
                                                                                                                {{ $dep->name }}
                                                                                                            </option>
                                                                                                        @endif
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
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
                                                            <div class="modal fade" id="xoaThuocTinh{{ $target->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger"
                                                                                id="exampleModalLabel">Xóa định mức</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có thực sự muốn xoá đinh mức này không?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                data-bs-dismiss="modal">Hủy</button>
                                                                            <form
                                                                                action="/danh-muc-dinh-muc/{{ $target->id }}"
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
            <div class="footer">
                <div class="container">Copyright © 2023 S-Team. All rights reserved.</div>
            </div>
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
                                    placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông"></div>
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



    <!-- Modal Thêm Định Mức -->
    <div class="modal fade" id="themMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm mới định mức</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/danh-muc-dinh-muc" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title">Tên định mức <span class="text-danger">*</span></div>
                                    &nbsp;<input class="form-control" style="width:80%" type="text"
                                        placeholder="Nhập tên định mức" name="name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <div class="modal_body-title">Mô tả/Diễn giải <span class="text-danger">*</span></div>
                                    <textarea class="form-control" placeholder="Nhập mô tả thực hiện" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title">Đơn vị</div>
                                    <select class="selectpicker" title="Chọn đơn vị" name="unit_id" style="width:80%">
                                        @foreach ($listUnits->data as $unit)
                                            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title">Manday</div>
                                    <input class="form-control" style="width:76%" type="text"
                                        placeholder="Nhập Manday" name="manday">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title">Số lượng</div>
                                    <input class="form-control" style="width:76%" type="text"
                                        placeholder="Nhập Số lượng" name="quantity">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="col-sm-3">
                                        <div class=" modal_body-title">Vị trí</div>
                                    </div>
                                    <div class="col-sm-9">
                                        <select class="selectpicker" title="Chọn Vị trí" name="position_id">
                                            @foreach ($listPositions->data as $pos)
                                                <option value="{{ $pos->id }}">{{ $pos->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="col-sm-4">
                                        <div class="modal_body-title">Đơn vị phòng ban</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" title="Chọn phòng/ban" name="departement_id">
                                            @foreach ($listDepartments->data as $dep)
                                                <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
