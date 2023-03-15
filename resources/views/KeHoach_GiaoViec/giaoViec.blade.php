@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Giao việc')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Giao Việc</h5>
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
                        <div id="thismonth" class="mainSection_thismonth"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-6">

                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="danhSachDinhMuc"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>TT</th>
                                                            <th>Tên định mức</th>
                                                            <th>Mô tả</th>
                                                            <th>Manday</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Triển khai các sự kiện nội bộ quy mô lớn
                                                            </td>
                                                            <td>
                                                                Mô tả Triển khai các sự kiện nội bộ quy mô lớn
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-title mb-2">Giao việc cho định mức "Triển khai các sự kiện nội
                                                bộ quy mô lớn"</div>
                                            <div class="mb-3 row">
                                                <div class="col-md-12 mb-2">
                                                    <label for="title" class="col-form-label">* Tên nhiệm vụ </label>
                                                    <div class="col">
                                                        <input type="text" class="form-control"
                                                            value="Triển khai các sự kiện nội bộ quy mô lớn"
                                                            id="title" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="textarea" class="col-form-label">* Mô tả</label>
                                                    <textarea class="form-control" name="" id="" placeholder="Nhập mô tả nhiệm vụ"></textarea>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <label for="textarea" class="col-form-label">* Kế hoạch thực
                                                        hiện</label>
                                                    <textarea class="form-control" name="" id="" placeholder="Nhập kê hoạch thực hiẹn"></textarea>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea" class="col-form-label">* Vị trí đảm nhiệm </label>
                                                    <div class="col">
                                                        <select class='form-control' name="" id="">
                                                            <option value="">Truyền thông nội bộ</option>
                                                            <option value="">Truyền thông nội bộ 2</option>
                                                            <option value="">Truyền thông nội bộ 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea" class="col-form-label">* Người đảm nhiệm </label>
                                                    <div class="col">
                                                        <select class='form-control' name="" id="">
                                                            <option value="">Người đảm nhiệm</option>
                                                            <option value="">Người đảm nhiệm 2</option>
                                                            <option value="">Người đảm nhiệm 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea" class="col-form-label">* Thời gian làm</label>
                                                    <div class="col">
                                                        <div id="datepickerThoiGianLam"
                                                            class="d-flex align-items-center justify-content-between col-sm-12 datetimepicker_wrapper">
                                                            <input type="text" value="<?php echo date('d/m/Y'); ?>"
                                                                class="form-control date start" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <label for="textarea" class="col-form-label">* Thời gian kết
                                                        thúc</label>
                                                    <div class="col">
                                                        <div id="datepickerThoiGianKetThuc"
                                                            class="d-flex align-items-center justify-content-between col-sm-12 datetimepicker_wrapper">
                                                            <input type="text" value="<?php echo date('d/m/Y'); ?>"
                                                                class="form-control date start" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="justify-content-end d-flex">
                                                <div class="btn btn-outline-danger me-3">Hủy</div>
                                                <div class="btn btn-danger ps-2">Lưu</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">

                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <div class="position-relative">
                                                        <table id="listDanhSach"
                                                            class="table table-responsive table-hover table-bordered  style_table-6">
                                                            <thead>
                                                                <tr>
                                                                    <th>STT</th>
                                                                    <th>Tên nhiệm vụ</th>
                                                                    <th>Người được giao</th>
                                                                    <th>Vị trí</th>
                                                                    <th>Thời hạn</th>
                                                                    <th>Tình trạng</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-center">
                                                                            <div class="circle_tracking-wrapper"
                                                                                style="border: 1px solid">
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="dotdotdot" id="dropdownMenuButton1"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i
                                                                                class="bi bi-three-dots-vertical"></i>
                                                                        </div>
                                                                        <ul class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuButton1">
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#suaVanDeTonDong">
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/edit.svg') }}" />
                                                                                    Sửa
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="dropdown-item" href="#"
                                                                                    data-repeater-delete>
                                                                                    <img style="width:16px;height:16px"
                                                                                        src="{{ asset('assets/img/trash.svg') }}" />
                                                                                    Xóa
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

    <!-- Modal Sửa Vấn Đề -->
    <div class="modal fade" id="suaVanDeTonDong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:38%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Chỉnh sửa vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Vấn đề tồn đọng <span class="text-danger">*</span></div>
                                &nbsp;<input class="form-control" style="width:76%" type="text"
                                    value="Chưa hoàn thành báo cáo do abc chưa gửi thông">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Người nêu <span class="text-danger">*</span></div>
                                <input class="form-control" style="width:51%" type="text" value="Nguyễn Ngọc Bảo">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Chịu trách nhiệm <span class="text-danger">*</span></div>
                                <input class="form-control" style="width:51%" type="text" value="Nguyễn Ngọc Bảo">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Nguyên nhân</div>
                                <input class="form-control" style="width:76%" type="text"
                                    value="Chưa hoàn thành báo cáo do abc chưa gửi thông">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Hướng giải quyết</div>
                                <input class="form-control" style="width:76%" type="text" value="Sẽ gửi trong tuần">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="mb-3 d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Thời hạn <span class="text-danger">*</span></div>
                                <input id="timeSuaVanDe" value="<?php echo date('d/m/Y'); ?>" class="form-control"
                                    style="width:51%" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal_body-title">Tình trạng <span class="text-danger">*</span></div>
                                <select class="form-select w-75" aria-label="Default select example">
                                    <option selected hidden>Chọn trạng thái</option>
                                    <option>Đã có hướng giải quyết</option>
                                    <option>Đã giải quyết</option>
                                    <option>Không thể giải quyết</option>
                                    <option>Không xác định được nguyên nhân</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Xóa thuộc tính --}}
    <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa Thuộc tính này</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá thuộc tính đã chọn không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn xóa</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>

    <!-- Chart Types -->
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>
    <script type="text/javascript">
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

                const val = opt.value || opt.text;
                if (opt.selected) {
                    document.getElementById(val).style.display = 'block';
                } else {
                    document.getElementById(val).style.display = 'none';
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
    <script type="text/javascript">
        $(document).ready(function() {
            $.datetimepicker.setLocale('vi');
            $('#datepickerThoiGianLam').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
        });
        $(document).ready(function() {
            $.datetimepicker.setLocale('vi');
            $('#datepickerThoiGianKetThuc').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
        });
    </script>

    <script type="text/javascript">
        $('#danhSachDinhMuc').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm định mức...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-title-wrapper">f>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper').html(`
            <div class="card-title">Danh sách định mức</div>
        `);

        $('#listDanhSach').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm nhiệm vụ...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-titles-wrapper">f>rt<"dataTables_bottom"ip>',
        });
        $('div.card-titles-wrapper').html(`
            <div class="card-title">Lịch sử giao việc</div>
        `);
    </script>
@endsection
