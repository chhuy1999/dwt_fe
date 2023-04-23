@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách văn bản điều hành')

@php
    $lists = [
        ['id' => '1', 'code' => '04-QT/LD/HDCV', 'title' => 'Mô tả quá trình đề xuất đào tạo', 'type' => 'Quy đinh nội bộ', 'deparatment' => 'Phòng đào tạo', 'deadline' => '21/04/2023'],
        ['id' => '2', 'code' => '1.1-QT/NS/HDCV', 'title' => 'Bổ nhiệm Giám đốc vùng', 'type' => 'Quyết định', 'deparatment' => 'Ban giám đốc', 'deadline' => '21/04/2023'],
        ['id' => '3', 'code' => '04-QT/LD/HDCV', 'title' => 'Nội quy văn phòng', 'type' => 'Thông báo', 'deparatment' => 'Phòng kiểm soát', 'deadline' => '21/04/2023'],

    ];
@endphp
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Danh sách văn bản điều hành</h5>
                        @include('template.components.sectionCard')
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table id="dsDaoTao"
                                                    class="table table-responsive table-hover table-bordered filter">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap text-center" style="width:5%">STT</th>
                                                            <th class="text-nowrap" style="width:15%">Mã hiệu</th>
                                                            <th class="text-nowrap" style="width:25%">Tên văn bản</th>
                                                            <th class="text-nowrap" style="width:15%">Loại</th>
                                                            <th class="text-nowrap" style="width:15%">Đơn vị</th>
                                                            <th class="text-nowrap" style="width:15%">Hiệu lực</th>
                                                            <th class="text-nowrap" style="width:5%"><span></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lists as $list)
                                                    <tr class="table-row" role="button" data-bs-toggle="modal" data-bs-target="#chiTietVanBan{{ $list['id'] }}">
                                                        <td class="text-nowrap text-center">
                                                            <div class="text-nowrap d-block text-truncate"
                                                                style="">
                                                                {{ $list['id'] }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:145px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="{{ $list['code'] }}">
                                                                {{ $list['code'] }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:265px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="{{ $list['title'] }}">
                                                                {{ $list['title'] }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:150px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="{{ $list['type'] }}">
                                                                {{ $list['type'] }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:155px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                title="{{ $list['deparatment'] }}">
                                                                {{ $list['deparatment'] }}
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap">
                                                            <div class="text-nowrap d-block text-truncate"
                                                                style="max-width:140px;" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="{{ $list['deadline'] }}">
                                                                {{ $list['deadline'] }}
                                                            </div>
                                                        </td>
                                                        <td onmousedown="event.stopPropagation();">
                                                            <div
                                                                class="table_actions d-flex justify-content-center">
                                                                <div class="btn" data-bs-toggle="modal" data-bs-target="#suaVanBan{{ $list['id'] }}">
                                                                    <img style="width:16px;height:16px"
                                                                        src="{{ asset('assets/img/edit.svg') }}" />
                                                                </div>
                                                                <div class="btn" data-bs-toggle="modal" data-bs-target="#xoaVanBan{{ $list['id'] }}">
                                                                    <img style="width:16px;height:16px"
                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                </div>
                                                            </div>
                                                        </td>

                                                        {{-- Sửa văn bản --}}
                                                        <div class="modal fade" id="suaVanBan{{ $list['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title w-100" id="exampleModalLabel">Sửa văn bản</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <form method="" action="">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-6 mb-3">
                                                                                    <input name="" type="text" value="{{ $list['code'] }}" class="form-control">
                                                                                </div>
                                                                                <div class="col-6 mb-3">
                                                                                    <input name="" type="text" value="{{ $list['title'] }}" class="form-control">
                                                                                </div>
                                                                                
                                                                                <div class="col-6 mb-3">
                                                                                    <select name="" class="selectpicker" title="Chọn đơn vị ban hành" multiple data-size="5" data-live-search="true">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                                <div class="col-6 mb-3">
                                                                                    <select name="" class="selectpicker" title="Chọn đơn vị nhận" multiple data-size="5" data-live-search="true">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                                <div class="col-6 mb-3">
                                                                                    <select name="" class="selectpicker" title="Chọn loại văn bản" data-size="5">
                                                                                        <option value="1">Quyết định nội bộ</option>
                                                                                        <option value="2">Quyết định</option>
                                                                                        <option value="3">Thông báo</option>
                                                                                        <option value="4">Thông báo cộng tác bán hàng</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-6 mb-3 position-relative">
                                                                                    <input type="text" class="form-control datePicker">
                                                                                    <i class="bi bi-calendar-plus style_pickdate"></i>
                                                                                </div>
                                                                                <div class="mb-3 col-12">
                                                                                    <div class="card_template-title  with_form">
                                                                                        <div class="text-nowrap">Tệp đính kèm/Attached files:</div>
                                                                                    </div>
                                                                                    <div class="d-flex flex-column">
                                                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                                                            @method('PUT')
                                                                                            @csrf
                                                                                            <div class="upload_wrapper-items">
                                                                                                <input type="hidden" name="uploadedFiles[]" value="" />
                                                                                                <button role="button" type="button"
                                                                                                    class="btn position-relative border d-flex">
                                                                                                    <img style="width:16px;height:16px"
                                                                                                        src="{{ asset('assets/img/upload-file.svg') }}" />
                                                                                                    <span class="ps-2">Chọn file đính kèm</span>
                                                                                                    <input role="button" type="file"
                                                                                                        class="modal_upload-input modal_upload-file" name="files[]"
                                                                                                        multiple onchange="updateList(event)">
                                                                                                </button>
                                                                                                <ul class="modal_upload-list"
                                                                                                    style="max-height: 200px; overflow-y: scroll; overflow-x: hidden;">
                                                                                                </ul>
                                                                                                {{-- <div class="d-flex align-items-center justify-content-end">
                                                                                                    <button type="submit" class="btn btn-outline-danger">Tải
                                                                                                        file
                                                                                                    </button>
                                                                                                </div> --}}
                                                                                            </div>
                                                                                        </form>
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
                                                        
                                                        {{-- Xóa văn bản --}}
                                                        <div class="modal fade" id="xoaVanBan{{ $list['id'] }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-danger"
                                                                            id="exampleModalLabel">Xóa văn bản</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Bạn có thực sự muốn xoá văn bản này không?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-outline-danger"
                                                                            data-bs-dismiss="modal">Hủy</button>
                                                                        <form action="" method="POST">
                                                                            @csrf
                                                                            {{-- @method('DELETE') --}}
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Xóa</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal Chi tiết De Xuat -->
                                                        <div class="modal fade" id="chiTietVanBan{{ $list['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title w-100" id="exampleModalLabel">Quy trình đào tạo nhân sự mới</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <form method="" action="">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-6 mb-3">
                                                                                    <input name="" type="text" value="{{ $list['code'] }}" class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã văn bản">
                                                                                </div>
                                                                                <div class="col-6 mb-3">
                                                                                    <input name="" type="text" value="{{ $list['title'] }}" class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['title'] }}">
                                                                                </div>
                                                                                
                                                                                <div class="col-6 mb-3">
                                                                                    <select name="" class="selectpicker" title="Chọn đơn vị ban hành" multiple data-size="5" data-live-search="true">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                                <div class="col-6 mb-3">
                                                                                    <select name="" class="selectpicker" title="Chọn đơn vị nhận" multiple data-size="5" data-live-search="true">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                    </select>
                                                                                </div>
                                                                                
                                                                                <div class="col-6 mb-3">
                                                                                    <select name="" class="selectpicker" title="Chọn loại văn bản" data-size="5">
                                                                                        <option value="1">Quyết định nội bộ</option>
                                                                                        <option value="2">Quyết định</option>
                                                                                        <option value="3">Thông báo</option>
                                                                                        <option value="4">Chương trình bán hàng</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-6 mb-3 position-relative">
                                                                                    <input type="text" class="form-control datePicker">
                                                                                    <i class="bi bi-calendar-plus style_pickdate"></i>
                                                                                </div>
                                                                                <div class="mb-3 col-12">
                                                                                    <div class="card_template-title  with_form">
                                                                                        <div class="text-nowrap">Tệp đính kèm/Attached files:</div>
                                                                                    </div>
                                                                                    <div class="d-flex flex-column">
                                                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                                                            @method('PUT')
                                                                                            @csrf
                                                                                            <div class="upload_wrapper-items">
                                                                                                <input type="hidden" name="uploadedFiles[]" value="" />
                                                                                                <button role="button" type="button"
                                                                                                    class="btn position-relative border d-flex">
                                                                                                    <img style="width:16px;height:16px"
                                                                                                        src="{{ asset('assets/img/upload-file.svg') }}" />
                                                                                                    <span class="ps-2">Chọn file đính kèm</span>
                                                                                                    <input role="button" type="file"
                                                                                                        class="modal_upload-input modal_upload-file" name="files[]"
                                                                                                        multiple onchange="updateList(event)">
                                                                                                </button>
                                                                                                <ul class="modal_upload-list"
                                                                                                    style="max-height: 200px; overflow-y: scroll; overflow-x: hidden;">
                                                                                                </ul>
                                                                                                {{-- <div class="d-flex align-items-center justify-content-end">
                                                                                                    <button type="submit" class="btn btn-outline-danger">Tải
                                                                                                        file
                                                                                                    </button>
                                                                                                </div> --}}
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                            <button type="submit" class="btn btn-danger">Tạo</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>


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
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

    <!-- Modal Thêm Tao De Xuat -->
    <div class="modal fade" id="taoVanBan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Tạo mới văn bản</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <input name="" type="text" placeholder="Mã văn bản" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <input name="" type="text" placeholder="Tên văn bản" class="form-control">
                            </div>
                            
                            <div class="col-6 mb-3">
                                <select name="" class="selectpicker" title="Chọn đơn vị ban hành" multiple data-size="5" data-live-search="true">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            
                            <div class="col-6 mb-3">
                                <select name="" class="selectpicker" title="Chọn đơn vị nhận" multiple data-size="5" data-live-search="true">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            
                            <div class="col-6 mb-3">
                                <select name="" class="selectpicker" title="Chọn loại văn bản" data-size="5">
                                    <option value="1">Quyết định nội bộ</option>
                                    <option value="2">Quyết định</option>
                                    <option value="3">Thông báo</option>
                                    <option value="4">Chương trình bán hàng</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3 position-relative">
                                <input type="text" class="form-control datePicker">
                                <i class="bi bi-calendar-plus style_pickdate"></i>
                            </div>
                            <div class="mb-3 col-12">
                                <div class="card_template-title  with_form">
                                    <div class="text-nowrap">Tệp đính kèm/Attached files:</div>
                                </div>
                                <div class="d-flex flex-column">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="upload_wrapper-items">
                                            <input type="hidden" name="uploadedFiles[]" value="" />
                                            <button role="button" type="button"
                                                class="btn position-relative border d-flex">
                                                <img style="width:16px;height:16px"
                                                    src="{{ asset('assets/img/upload-file.svg') }}" />
                                                <span class="ps-2">Chọn file đính kèm</span>
                                                <input role="button" type="file"
                                                    class="modal_upload-input modal_upload-file" name="files[]"
                                                    multiple onchange="updateList(event)">
                                            </button>
                                            <ul class="modal_upload-list"
                                                style="max-height: 200px; overflow-y: scroll; overflow-x: hidden;">
                                            </ul>
                                            {{-- <div class="d-flex align-items-center justify-content-end">
                                                <button type="submit" class="btn btn-outline-danger">Tải
                                                    file
                                                </button>
                                            </div> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Tạo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('footer-script')

    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

    <!-- Chart Js -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>

    <script>
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
        const targetTable = $('#dsDaoTao').DataTable({
            paging: true,
            ordering: true,
            order: [
                [0, 'desc']
            ],
            pageLength: 25,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: "_MENU_ bản ghi trên trang",
            },
            dom: '<"d-flex justify-content-between mb-3"<"card-title-left"><"d-flex "<"card-title-right justify-content-end">f>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
        $('div.card-title-left').html(`
            <div class="d-flex">
                <div class="action_wrapper me-3">
                    <select class="selectpicker" title="Đơn vị">
                        <option value="all">Tất cả</option>
                    </select>
                </div>
            </div>
        `);
        $('div.card-title-right').html(`
            <div class="action_wrapper">
                <div class="action_export me-3">
                    <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                        data-bs-target="#taoVanBan">Thêm văn bản</button>
                </div>
            </div>
        `);
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

            $('.datePicker').daterangepicker({
                singleDatePicker: true,
                timePicker: false,
                locale: {
                    format: 'DD/MM/YYYY '
                }
            });

        });
    </script>

    <script>
        // $('tr[data-href]').on("click", function(event) {
        //     if ($(event.target).closest('td').index() !== $(this).find('td').length - 1) {
        //         window.location.href = $(this).data('href');
        //     }
        // });
    </script>
@endsection
