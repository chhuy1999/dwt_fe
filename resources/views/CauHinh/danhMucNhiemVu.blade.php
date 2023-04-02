@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh mục mẫu nhiệm vụ')

@section('header-style')
    <style>
        .tooltip-inner {
            max-width: auto;
            text-align: left;
        }
    </style>
@endsection
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh mục mẫu nhiệm vụ
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
                                                <table id="dsMauNhiemVu" class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 2%" class="text-center">STT</th>
                                                            <th style="width: 16%">Tên nhiệm vụ</th>
                                                            <th style="width: 15%">
                                                                <div class="d-flex justify-content-between">
                                                                    Thuộc định mức
                                                                    <div role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-filter-right" style="font-size:1.4rem"></i>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item" href="#">Tham gia
                                                                                xây dựng...</a></li>
                                                                        <li><a class="dropdown-item" href="#">Cập
                                                                                nhật, theo...</a></li>
                                                                        <li><a class="dropdown-item" href="#">Giám sát
                                                                                chỉ tiêu...</a></li>
                                                                    </ul>
                                                                </div>
                                                            </th>
                                                            <th style="width: 25%">Mô tả/Diễn giải</th>
                                                            <th style="width: 10%">Đơn vị phụ trách</th>
                                                            <th style="width: 12%">
                                                                <div class="d-flex justify-content-between">
                                                                    Vị trí phụ trách
                                                                    <div role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-filter-right" style="font-size:1.4rem"></i>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item" href="#">Trợ lý
                                                                                marketing</a></li>
                                                                        <li><a class="dropdown-item" href="#">Sales
                                                                                Admin</a></li>
                                                                        <li><a class="dropdown-item" href="#">Quản lý
                                                                                sản phẩm</a></li>
                                                                    </ul>
                                                                </div>
                                                            </th>
                                                            <th style="width: 8%">Chỉ số key</th>
                                                            <th style="width: 5%">Manday</th>
                                                            @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                            <th style="width: 2%"></th>
                                                            @endif
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="group-a">
                                                        @foreach ($data->data as $targetDetail)
                                                            <tr data-repeater-item>
                                                                <td>
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        {{ $loop->iteration }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $targetDetail->name ?? "" }}">
                                                                        {{ $targetDetail->name ?? ""  }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:150px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Tham gia xây dựng và/hoặc điều phối dự án Marketing theo yêu cầu của Ban Giám đốc">
                                                                        {{ $targetDetail->target->name ?? ""  }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:300px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="{{ $targetDetail->description ?? ""  }}">
                                                                        {{ $targetDetail->description ?? ""  }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:110px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="{{ $targetDetail->departement->name ?? ""  }}">
                                                                        {{ $targetDetail->departement->name ?? '' }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:110px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="{{ $targetDetail->position->name ?? "" }}">
                                                                        {{ $targetDetail->position->name ?? '' }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:100px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="@foreach ($targetDetail->kpiKeys as $kpiKey) - {{ $kpiKey->name }} <br> @endforeach">
                                                                        @foreach ($targetDetail->kpiKeys as $kpiKey)
                                                                            {{-- {{ $kpiKey->quantity }} {{ $kpiKey->name }} ({{ $kpiKey->unit->name }}) <br> --}}
                                                                           - {{ $kpiKey->name }} <br>

                                                                        @endforeach
                                                                    </div>
                                                                </td>
                                                                <td>

                                                                    <div class="text-center">
                                                                        {{ $targetDetail->manday }}
                                                                    </div>
                                                                </td>
                                                                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                                <td>
                                                                    <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                                    </div>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaMoiDinhMuc{{ $targetDetail->id }}">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                                Sửa
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh{{ $targetDetail->id }}" data-repeater-delete>
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                Xóa
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                                @endif
                                                            </tr>

                                                            <!-- Modal Sửa nhiệm vụ -->
                                                            <div class="modal fade" id="suaMoiDinhMuc{{ $targetDetail->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100" id="exampleModalLabel">Sửa mẫu nhiệm vụ</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="{{ route('targetDetail.update', $targetDetail->id) }}" method="POST">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <input class="form-control" type="text" name="name" placeholder="Nhập tên nhiệm vụ" data-bs-toggle="tooltip" data-bs-placement="top" title="Tên nhiệm vụ" value="{{ $targetDetail->name }}">
                                                                                    </div>

                                                                                    <div class="col-sm-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Thuộc định mức">
                                                                                        <select name="target_id" class="selectpicker" title="Chọn định mức" data-size="5" data-live-search="true">
                                                                                            @foreach ($listTargets->data as $target)
                                                                                                @if ($targetDetail->target && $targetDetail->target->id == $target->id)
                                                                                                    <option value="{{ $target->id }}" selected>
                                                                                                        {{ $target->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option value="{{ $target->id }}">
                                                                                                        {{ $target->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-3" >
                                                                                        <textarea class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="Mô tả" name="description" placeholder="Nhập mô tả ">{{ $targetDetail->description }}</textarea>
                                                                                    </div>
                                                                                    <div class="col-sm-12 mb-3">
                                                                                        <textarea class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="Kế hoạch thực hiện" name="executionPlan" placeholder="Nhập kế hoạch thực hiện">{{ $targetDetail->executionPlan }}</textarea>

                                                                                    </div>
                                                                                    <div class="col-sm-3 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị">
                                                                                        <select class="selectpicker" name="unit_id">
                                                                                            @foreach ($listUnits->data as $unit)
                                                                                                <option value="{{ $unit->id }}">
                                                                                                    {{ $unit->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="col-sm-7 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Vị trí đảm nhiệm">
                                                                                        <select name="position_id" class="selectpicker" title="Chọn Vị trí" data-size="5" data-live-search="true">

                                                                                            @foreach ($listPositions->data as $position)
                                                                                                @if ($targetDetail->position && $targetDetail->position->id == $position->id)
                                                                                                    <option value="{{ $position->id }}" selected>
                                                                                                        {{ $position->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option value="{{ $position->id }}">
                                                                                                        {{ $position->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="col-sm-2 mb-3">
                                                                                        <input class="form-control" type="number" data-bs-toggle="tooltip" data-bs-placement="top" min="0" step="0.05" oninput="onInput(this)" title="Manday" placeholder="Nhập Manday" name="manday" value="{{ $targetDetail->manday }}">
                                                                                    </div>
                                                                                    <div class="col-sm-12" data-bs-toggle="tooltip" data-bs-placement="top" title="Phòng/Ban">

                                                                                        <select name="departement_id" class="selectpicker" title="Chọn phòng/ban" data-size="5" data-live-search="true">
                                                                                            @foreach ($listDepartments->data as $departement)
                                                                                                @if ($targetDetail->departement && $targetDetail->departement->id == $departement->id)
                                                                                                    <option value="{{ $departement->id }}" selected>
                                                                                                        {{ $departement->name }}
                                                                                                    </option>
                                                                                                @else
                                                                                                    <option value="{{ $departement->id }}">
                                                                                                        {{ $departement->name }}
                                                                                                    </option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
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
                                                            <div class="modal fade" id="xoaThuocTinh{{ $targetDetail->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa mẫu nhiệm vụ</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có thực sự muốn xoá mẫu nhiệm vụ này không?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                            <form action="{{ route('targetDetail.delete', $targetDetail->id) }}" method="POST">
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
                                <div contenteditable="true" readonly class="contenteditable" placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông"></div>
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


    <!-- Modal Them nhiệm vụ -->
    {{-- <div class="modal fade" id="themMoiDinhMuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm nhiệm vụ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/danh-muc-nhiem-vu" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title col-sm-2">Tên nhiệm vụ <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Nhập tên nhiệm vụ"
                                            name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title col-sm-2">Thuộc định mức <span
                                            class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <select class="selectpicker" title="Chọn định mức" name="target_id">
                                            @foreach ($listTargets->data as $target)
                                                <option value="{{ $target->id }}">{{ $target->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title col-sm-2">Mô tả/Diễn giải <span
                                            class="text-danger">*</span>
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="Nhập mô tả thực hiện" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3 d-flex align-items-center  justify-content-between">
                                    <div class="modal_body-title">Đơn vị</div>
                                    <select class="selectpicker" name="unit_id" title="Chọn đơn vị">
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
                                            @foreach ($listPositions->data as $position)
                                                <option value="{{ $position->id }}">{{ $position->name }}</option>
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
                                            @foreach ($listDepartments->data as $departement)
                                                <option value="{{ $departement->id }}">{{ $departement->name }}</option>
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
    </div> --}}


@endsection
@section('footer-script')
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>

    <script>
        const targetTable = $('#dsMauNhiemVu').DataTable({
            paging: true,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            pageLength: 50,
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
            dom: '<"d-flex mb-3 justify-content-end"f<"card-title-wrapper">>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper').html(`
            <div class="main_search d-flex ms-3">
                <button id="exporttable" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                    <i class="bi bi-download"></i>
                    Xuất Excel
                </button>
            </div>
        `);
    </script>
    <script>
        function onInput(event) {
            let value = parseFloat(event.value);
            if (Number.isNaN(value)) {
                document.getElementById('input-1').value = "0.00";
            } else {
                document.getElementById('input-1').value = value.toFixed(2);
            }
        }
    </script>
@endsection
