@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách biên bản')

@php
    $lists = [['id' => 1, 'code' => 'BB001', 'customer' => 'Nguyễn Văn A', 'situation' => 'Sự cố máy móc', 'expert' => 'Nguyễn Thị B', 'restrictions' => 'Không được tắt máy', 'guidance' => 'Kiểm tra máy móc', 'instructor_comment' => 'Đã giải quyết sự cố', 'student_comment' => 'Cảm ơn người hướng dẫn'], ['id' => 2, 'code' => 'BB002', 'customer' => 'Trần Thị C', 'situation' => 'Sự cố phần mềm', 'expert' => 'Lê Văn D', 'restrictions' => 'Không được đổi password', 'guidance' => 'Cài đặt lại phần mềm', 'instructor_comment' => 'Đã giải quyết sự cố', 'student_comment' => 'Cảm ơn người hướng dẫn'], ['id' => 3, 'code' => 'BB003', 'customer' => 'Phạm Văn E', 'situation' => 'Sự cố kết nối', 'expert' => 'Trần Thị F', 'restrictions' => 'Không được restart router', 'guidance' => 'Thay đổi mạng kết nối', 'instructor_comment' => 'Đã giải quyết sự cố', 'student_comment' => 'Cảm ơn người hướng dẫn']];
@endphp

@section('header-style')
    <style>
        .mainSection_width-select {
            width: 140px !important;
            border: none;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light {
            padding: 5px 0;
            background-color: transparent;
            outline: none;
            border: none;
        }

        .style_input,
        .style_input:focus {
            border: none !important;
            background-color: transparent;
            font-size: 1.1rem;
            outline: none;
            box-shadow: none !important;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light:hover {
            background-color: transparent;
            outline: none;
            border: none;
            box-shadow: none;
        }
    </style>

@endsection
@section('content')
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-3 mainSection_card-left">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Ngày tạo: </div>
                                </div>
                                <div class="col-md-7">
                                    <strong class="text-nowrap">
                                        <input type="text" value="07/04/2023" class="form-control style_input fs-5">
                                    </strong>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Người hướng dẫn: </div>
                                </div>
                                <div class="col-md-7">
                                    <strong class="text-nowrap">
                                        <input type="text" value="Nguyễn Văn ABC" class="form-control style_input fs-5">
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mainSection_heading-title">
                                Biên bản đào tạo
                            </h5>
                        </div>
                        <div class="col-md-3 mainSection_card-right">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Họ tên học viên: </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="text-nowrap d-block text-truncate" style="max-width:168px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nguyễn Văn ABCDXYZABCASD">
                                        <strong class="text-nowrap fs-5">
                                            <input type="text" value="Nguyễn Văn ABC" class="form-control style_input fs-5">
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Địa bàn: </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="text-nowrap d-block text-truncate" style="max-width:168px" data-bs-toggle="tooltip" data-bs-placement="bottom" title="66b Nguyễn Sỹ Sách">
                                        <strong class="text-nowrap fs-5">
                                            <input type="text" value="66b Nguyễn Sỹ Sách" class="form-control style_input fs-5">
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table id="dsDaoTao" class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap" style="width:5%">STT</th>
                                                            <th class="text-nowrap" style="width:15%">Khách hàng</th>
                                                            <th class="text-nowrap" style="width:20%">Tình huống</th>
                                                            <th class="text-nowrap" style="width:10%">KN/NV</th>
                                                            <th class="text-nowrap" style="width:10%">Hạn chế</th>
                                                            <th class="text-nowrap" style="width:10%">Hướng dẫn</th>
                                                            <th class="text-nowrap" style="width:15%">Ý kiến người hướng dẫn
                                                            </th>
                                                            <th class="text-nowrap" style="width:15%">Ý kiến học viên</th>
                                                            <th class="text-nowrap" style="width:5%">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lists as $list)
                                                            <tr>
                                                                <td class="text-nowrap text-center">
                                                                    <div class="text-nowrap d-block text-truncate" style="">
                                                                        {{ $list['id'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:100px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['customer'] }}">
                                                                        {{ $list['customer'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:160px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['situation'] }}">
                                                                        {{ $list['situation'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:90px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['expert'] }}">
                                                                        {{ $list['expert'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:90px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['restrictions'] }}">
                                                                        {{ $list['restrictions'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:90px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['guidance'] }}">
                                                                        {{ $list['guidance'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:160px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['instructor_comment'] }}">
                                                                        {{ $list['instructor_comment'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:160px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['student_comment'] }}">
                                                                        {{ $list['student_comment'] }}
                                                                    </div>
                                                                </td>
                                                                @if (session('user')['role'] == 'admin')
                                                                    <td>
                                                                        <div class="table_actions d-flex justify-content-center">
                                                                            <div class="btn" data-bs-toggle="modal" data-bs-target="#suaBienBanDaoTao">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            </div>
                                                                            <div class="btn" data-bs-toggle="modal" data-bs-target="#xoaBienBanDaoTao">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                @endif
                                                            </tr>
                                                            {{-- Xóa Biên bản đào tạo --}}
                                                            <div class="modal fade" id="xoaBienBanDaoTao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa biên bản đào tạo
                                                                            </h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có thực sự muốn xóa biên bản đào tạo đã chọn
                                                                            không?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                            <form action="" method="POST">
                                                                                @csrf
                                                                                {{-- @method('DELETE') --}}
                                                                                <button type="submit" class="btn btn-danger" id="deleteRowElement">Xóa</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- Sửa Biên bản đào tạo --}}
                                                            <div class="modal fade" id="suaBienBanDaoTao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger" id="exampleModalLabel">Sửa biên bản đào tạo
                                                                            </h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Khách hàng">
                                                                                    <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Khách hàng" data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} khách hàng" data-live-search-placeholder="Tìm kiếm...">
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Kỹ năng/Nghiệp vụ">
                                                                                    <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Kỹ năng/Nghiệp vụ" data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} Kỹ năng/Nghiệp vụ" data-live-search-placeholder="Tìm kiếm...">
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                        <option>1</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-12 mb-3">
                                                                                    <textarea data-bs-toggle="tooltip" data-bs-placement="top" title="Tình huống" placeholder="Nhập tình huống" class="form-control"></textarea>
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <input type="text" name="" data-bs-toggle="tooltip" data-bs-placement="top" title="Hạn chế" placeholder="Nhập hạn chế" class="form-control" />
                                                                                </div>
                                                                                <div class="col-md-6 mb-3">
                                                                                    <input type="text" name="" data-bs-toggle="tooltip" data-bs-placement="top" title="Hướng dẫn" placeholder="Nhập hướng dẫn" class="form-control" />
                                                                                </div>
                                                                                <div class="col-md-12 mb-3">
                                                                                    <textarea data-bs-toggle="tooltip" data-bs-placement="top" title="Ý kiến người hướng dẫn" placeholder="Nhập ý kiến người hướng dẫn" class="form-control"></textarea>
                                                                                </div>
                                                                                <div class="col-md-12 mb-3">
                                                                                    <textarea data-bs-toggle="tooltip" data-bs-placement="top" title="Ý kiến học viên" placeholder="Nhập ý kiến học viên" class="form-control"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                            <form action="" method="POST">
                                                                                @csrf
                                                                                {{-- @method('DELETE') --}}
                                                                                <button type="submit" class="btn btn-danger" id="deleteRowElement">Xóa</button>
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

    <!-- Modal duyệt biên bản đào tạo -->
    <div class="modal fade" id="duyetBienBanDaoTao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        @foreach ($lists as $list)
                                            <tr>
                                                <td class="text-nowrap text-center">
                                                    <div class="text-nowrap d-block text-truncate" style="">
                                                        {{ $list['id'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate" style="max-width:120px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['customer'] }}">
                                                        {{ $list['customer'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate" style="max-width:230px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['situation'] }}">
                                                        {{ $list['situation'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate" style="max-width:115px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['expert'] }}">
                                                        {{ $list['expert'] }}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="text-nowrap d-block text-truncate" style="max-width:135px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['restrictions'] }}">
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
                    <button type="button" class="btn btn-outline-danger ps-5 pe-5" data-bs-dismiss="modal">Hủy</button>
                    <form action="" method="POST">
                        @csrf
                        {{-- @method('PUT') --}}
                        <input type="hidden" name="status" value="1">
                        <button type="submit" class="btn btn-danger ps-5 pe-5">Lưu</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>

    <script>
        const targetTable = $('#dsDaoTao').DataTable({
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
            dom: '<"d-flex justify-content-between mb-3"<"card-title-left"><"d-flex "<"card-title-right justify-content-end">>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
        $('div.card-title-left').html(`
            <div class="card-title">
                Mã biên bản:
                <span class="text-uppercase">Mbb001</span>
            </div>
        `);
        $('div.card-title-right').html(`
<<<<<<< HEAD
            <div class="action_wrapper d-flex">
=======
            <div class="action_wrapper">
>>>>>>> theme-branch27
                <div class="action_export ms-3">
                    <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                        data-bs-target="#duyetBienBanDaoTao">Duyệt</button>
                </div>
            </div>
        `);
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
@endsection
