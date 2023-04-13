@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Kho danh sách đánh giá')
@section('header-style')

{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/r-2.2.7/datatables.min.css"/> --}}

    
@endsection
@php
    $lists = [['id' => '1', 'code' => 'MBB01', 'user' => 'Nguyễn Thị Thanh Nga', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '2', 'code' => 'MBB02', 'user' => 'Nguyễn Thị Thanh Nga', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '3', 'code' => 'MBB03', 'user' => 'Nguyễn Thị Thanh Nga', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036']];
    
    $listsModal = [['id' => 1, 'code' => 'BB001', 'customer' => 'Nguyễn Văn A', 'situation' => 'Sự cố máy móc', 'expert' => 'Nguyễn Thị B', 'restrictions' => 'Không được tắt máy', 'guidance' => 'Kiểm tra máy móc', 'instructor_comment' => 'Đã giải quyết sự cố', 'student_comment' => 'Cảm ơn người hướng dẫn'], ['id' => 2, 'code' => 'BB002', 'customer' => 'Trần Thị C', 'situation' => 'Sự cố phần mềm', 'expert' => 'Lê Văn D', 'restrictions' => 'Không được đổi password', 'guidance' => 'Cài đặt lại phần mềm', 'instructor_comment' => 'Đã giải quyết sự cố', 'student_comment' => 'Cảm ơn người hướng dẫn'], ['id' => 3, 'code' => 'BB003', 'customer' => 'Phạm Văn E', 'situation' => 'Sự cố kết nối', 'expert' => 'Trần Thị F', 'restrictions' => 'Không được restart router', 'guidance' => 'Thay đổi mạng kết nối', 'instructor_comment' => 'Đã giải quyết sự cố', 'student_comment' => 'Cảm ơn người hướng dẫn']];
@endphp
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Kho danh sách đánh giá</h5>
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
                                                    class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap text-center" style="width:2%">STT</th>
                                                            <th class="text-nowrap text-center" style="width:10%">Mã biên
                                                                bản</th>
                                                            <th class="text-nowrap" style="width:20%">Người hướng dẫn</th>
                                                            <th class="text-nowrap" style="width:20%">Học viên</th>
                                                            <th class="text-nowrap" style="width:41%">Địa bàn</th>
                                                            <th class="text-nowrap" style="width:5%">Thời gian</th>
                                                            <th class="text-nowrap text-center" style="width:10%">Hành động
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lists as $list)
                                                            <tr>
                                                                <td class="text-nowrap text-center">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="">
                                                                        {{ $list['id'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap text-center">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="{{ $list['code'] }}">
                                                                        {{ $list['code'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:350px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="{{ $list['user'] }} - {{ $list['userCode'] }}">
                                                                        {{ $list['user'] }} - {{ $list['userCode'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:565px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="{{ $list['student'] }} - {{ $list['studentCode'] }}">
                                                                        {{ $list['student'] }} - {{ $list['studentCode'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:565px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="demo">
                                                                        demo
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:565px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="12/04/2023">
                                                                        12/04/2023
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div role="button" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        aria-label="Xem biên bản đánh giá"
                                                                        data-bs-original-title="Xem biên bản đánh giá">
                                                                        <div data-bs-toggle="modal"
                                                                            data-bs-target="#duyetBienBanDaoTao">
                                                                            <i class="bi bi-arrow-right-square fs-5"></i>
                                                                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')

    <!-- Modal Thêm DS biên bản -->
    <div class="modal fade" id="themDanhGia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Biên bản đào tạo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 mb-3 position-relative">
                                <input id="dateDanhGia" type="text" placeholder="Ngày tạo" class="form-control">
                                <i class="bi bi-calendar-plus style_pickdate"></i>
                            </div>
                            <div class="col-md-7 mb-3">
                                <select name="" class="selectpicker" multiple data-size="5"
                                    data-live-search="true" data-actions-box="true" title="Chọn học viên..."
                                    data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn"
                                    data-selected-text-format="count > 2" data-count-selected-text="Có {0} học viên"
                                    data-live-search-placeholder="Tìm kiếm...">
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="col-md-5 mb-3">
                                <select name="" class="selectpicker" multiple data-size="5"
                                    data-live-search="true" data-actions-box="true" title="Chọn người hướng dẫn..."
                                    data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn"
                                    data-selected-text-format="count > 2"
                                    data-count-selected-text="Có {0} người hướng dẫn"
                                    data-live-search-placeholder="Tìm kiếm...">
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="col-md-7 mb-3">
                                <select name="" class="selectpicker" multiple data-size="5"
                                    data-live-search="true" data-actions-box="true" title="Chọn địa bàn..."
                                    data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn"
                                    data-selected-text-format="count > 2" data-count-selected-text="Có {0} địa bàn"
                                    data-live-search-placeholder="Tìm kiếm...">
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
                                    <option>1</option>
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

    <!-- Modal duyệt biên bản đào tạo -->
    <div class="modal fade" id="duyetBienBanDaoTao" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl-centered" role="document" style="max-width: 24cm">
            <div class="modal-content">


                <div class="modal-body" style="padding: 0; margin: 1.5cm 1.5cm 1.5cm 2cm">
                    <div class="row mb-3">
                        <div class="col-md-3 mb-3 text-center modal_body-title">
                            <div class="text-nowrap">
                                Mã biên bản:
                            </div>
                            <div class="text-nowrap">
                                <strong class="text-nowrap">MBB01</strong>
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <div class="text-center">
                                {{-- <img class="header_logo" src="{{ env('LOGO_URL', ''); }}" /> --}}
                            </div>

                        </div>
                        <div class="col-md-4 mb-3 text-center modal_body-title">
                            <div class="text-nowrap fw-bold">
                                Công hòa xã hội chủ nghĩa Việt Nam<br>
                                <span class="text-decoration-underline">Độc lập - Tự do - Hạnh phúc</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5 class="modal-title w-100 fs-3 text-center mt-3 mb-3">Biên bản đào tạo
                            </h5>
                        </div>
                        <div class="col-md-4 mb-3 modal_body-title">
                            <div>
                                Họ và tên :
                                <strong>Nguyễn Ngọc Bảo</strong>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 modal_body-title">
                            <div>
                                Người hướng dẫn:
                                <strong>Nguyễn Thị Thanh Nga</strong>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 modal_body-title">
                            <div>
                                Địa bàn:
                                <strong>66b Nguyễn Sỹ Sách</strong>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <div class="modal-title fw-bolder text-uppercase">I. Chi tiết đào tạo</div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="table-responsive">
                                <table id="dsDaoTao" class="table table-responsive table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap" style="width:5%">STT</th>
                                            <th class="text-nowrap" style="width:10%">Khách hàng</th>
                                            <th class="text-nowrap" style="width:20%">Tình huống</th>
                                            <th class="text-nowrap" style="width:10%">KN/NV</th>
                                            <th class="text-nowrap" style="width:10%">Hạn chế</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listsModal as $list)
                                            <tr>
                                                <td class="text-nowrap text-center">
                                                    <div class="text-nowrap d-block text-truncate" style="">
                                                        {{ $list['id'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate"
                                                        style="max-width:120px;" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="{{ $list['customer'] }}">
                                                        {{ $list['customer'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate"
                                                        style="max-width:230px;" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="{{ $list['situation'] }}">
                                                        {{ $list['situation'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate"
                                                        style="max-width:115px;" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="{{ $list['expert'] }}">
                                                        {{ $list['expert'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate"
                                                        style="max-width:135px;" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="{{ $list['restrictions'] }}">
                                                        {{ $list['restrictions'] }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="modal-title fw-bolder text-uppercase">II. Người hướng dẫn đánh giá</div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="fs-5">
                                <p class="m-0">
                                    - Chưa có nhiều kinh nghiệm
                                    - Chưa có nhiều kinh nghiệm
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="modal-title fw-bolder text-uppercase">III. Ý kiến học viên</div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="fs-5">
                                <p class="m-0">
                                    - Buổi đào tạo bổ ích
                                    - Buổi đào tạo bổ ích
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column justify-content-between">
                            <div class="text-center fw-bold modal_body-title">&nbsp;<br>&nbsp;</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="modal_body-title fw-bolder">Người hướng dẫn</div>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title"></p>
                                <img src="" height="60" alt="" />
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title mb-0">Nguyên Ngọc Bảo</p>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-between">
                            <div class="text-center fw-bold modal_body-title">
                                @php
                                    echo 'Ngày ' . date('j') . ' tháng ' . date('n') . ' năm ' . date('Y');
                                @endphp
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="modal_body-title fw-bolder">Học viên</div>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title"></p>
                                <img src="" height="60" alt="" />
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title mb-0">Nguyên Ngọc Bảo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="btnPrint">In</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
{{-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/r-2.2.7/datatables.min.js"></script> --}}

    <script>
        const targetTable = $('#dsDaoTao').DataTable({
            rowReorder: {
            selector: 'td:nth-child(3)'
        },
        responsive: true,
            paging: true,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            pageLength: 25,
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
                sLengthMenu: "_MENU_ bản ghi trên trang",
            },
            dom: '<"d-flex justify-content-between mb-3"<"card-title-left"><"d-flex "f<"card-title-right justify-content-end">>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#dateDanhGia').daterangepicker({
                singleDatePicker: true,
                timePicker: false,
                startDate: new Date(),
                locale: {
                    format: 'DD/MM/YYYY '
                }
            });

        });
    </script>

    <script>
        document.getElementById("btnPrint").onclick = function() {
            window.print();
        }
    </script>

@endsection
