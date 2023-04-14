@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách đánh giá')

@php
    $lists = [['id' => '1', 'code' => 'MBB01', 'user' => 'Nguyễn Thị Thanh Nga', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '2', 'code' => 'MBB02', 'user' => 'Nguyễn Thị Thanh Nga', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '3', 'code' => 'MBB03', 'user' => 'Nguyễn Thị Thanh Nga', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036']];
@endphp
@section('content')
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Danh sách đánh giá</h5>
                        @include('template.components.sectionCard')
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
                                                            <th class="text-nowrap text-center" style="width:2%">STT</th>
                                                            <th class="text-nowrap text-center" style="width:10%">Mã biên bản</th>
                                                            <th class="text-nowrap" style="width:20%">Người hướng dẫn</th>
                                                            <th class="text-nowrap" style="width:20%">Học viên</th>
                                                            <th class="text-nowrap" style="width:41%">Địa bàn</th>
                                                            <th class="text-nowrap" style="width:5%">Thời gian</th>
                                                            <th class="text-nowrap text-center" style="width:10%">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lists as $list)
                                                            <tr data-href="/danh-sach-danh-gia/chi-tiet" role="button">
                                                                <td class="text-nowrap text-center">
                                                                    <div class="text-nowrap d-block text-truncate" style="">
                                                                        {{ $list['id'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap text-center">
                                                                    <div class="text-nowrap d-block text-truncate" style="" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['code'] }}">
                                                                        {{ $list['code'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:350px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['user'] }} - {{ $list['userCode'] }}">
                                                                        {{ $list['user'] }} - {{ $list['userCode'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:565px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $list['student'] }} - {{ $list['studentCode'] }}">
                                                                        {{ $list['student'] }} - {{ $list['studentCode'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:565px;" data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                        demo
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:565px;" data-bs-toggle="tooltip" data-bs-placement="top" title="12/04/2023">
                                                                        12/04/2023
                                                                    </div>
                                                                </td>

                                                                @if (session('user')['role'] == 'admin')
                                                                    <td>
                                                                        <div class="table_actions d-flex justify-content-center">
                                                                            <div class="btn" href="#" data-bs-toggle="modal" data-bs-target="#suaBienBanDaoTao">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            </div>
                                                                            <div class="btn" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                @endif

                                                                <!-- Modal Sửa biên bản đào tạo -->
                                                                <div class="modal fade" id="suaBienBanDaoTao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header text-center">
                                                                                <h5 class="modal-title w-100" id="exampleModalLabel">Sửa biên bản đào
                                                                                    tạo</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <form method="POST" action="">
                                                                                @csrf
                                                                                {{-- @method('PUT') --}}
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-5 mb-3 position-relative">
                                                                                            <input id="dateDanhGia" type="text" placeholder="Ngày tạo" class="form-control">
                                                                                            <i class="bi bi-calendar-plus style_pickdate"></i>
                                                                                        </div>
                                                                                        <div class="col-md-7 mb-3">
                                                                                            <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Chọn học viên..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} học viên" data-live-search-placeholder="Tìm kiếm...">
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
                                                                                            <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Chọn người hướng dẫn..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} người hướng dẫn" data-live-search-placeholder="Tìm kiếm...">
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
                                                                                            <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Chọn địa bàn..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} địa bàn" data-live-search-placeholder="Tìm kiếm...">
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

                                                                {{-- Xóa biên bản đào tạo --}}
                                                                <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa biên bản đào
                                                                                    tạo</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="fs-5">Bạn có thực sự muốn xoá
                                                                                    biên bản đào tạo này không?</div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                                <form action="" method="POST">
                                                                                    @csrf
                                                                                    {{-- @method('DELETE') --}}
                                                                                    <button type="submit" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn
                                                                                        xóa</button>
                                                                                </form>
                                                                            </div>
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
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarRight') --}}

    <!-- Modal Backup -->
    {{-- <div class="modal fade" id="themDsDaoTaoNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm mới đánh giá đào tạo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="text" placeholder="Nhập tên khách hàng" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" placeholder="Nhập tình huống"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true"
                                title="Chọn Kỹ năng/Nghiệp vụ..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} Kỹ năng/Nghiệp vụ" data-live-search-placeholder="Tìm kiếm..." >
                                    <option>Kỹ năng 1</option>
                                    <option>Kỹ năng 2</option>
                                    <option>Kỹ năng 3</option>
                                    <option>Kỹ năng 4</option>
                                    <option>Kỹ năng 5</option>
                                    <option>Kỹ năng 6</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" placeholder="Nhập hạn chế" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" placeholder="Nhập hướng dẫn" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" placeholder="Nhập ý kiến kiểm soát"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" placeholder="Nhập ý kiến thành viên"></textarea>
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
                                <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Chọn học viên..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} học viên" data-live-search-placeholder="Tìm kiếm...">
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
                                <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Chọn người hướng dẫn..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} người hướng dẫn" data-live-search-placeholder="Tìm kiếm...">
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
                                <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true" title="Chọn địa bàn..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} địa bàn" data-live-search-placeholder="Tìm kiếm...">
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

@endsection
@section('footer-script')

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
            dom: '<"d-flex justify-content-between mb-3"<"card-title-left"><"d-flex "f<"card-title-right justify-content-end">>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
        $('div.card-title-right').html(`
            <div class="action_wrapper d-flex">
                @if (session('user')['role'] == 'admin')
                <div class="action_export ms-3" data-bs-toggle="tooltip"
                    data-bs-placement="top" aria-label="Thêm thành viên"
                    data-bs-original-title="Thêm thành viên">
                    <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                        data-bs-target="#themDanhGia">Thêm đánh giá</button>
                </div>
                @endif
            </div>
        `);
    </script>

    <script>
        $('tr[data-href]').on("click", function(event) {
            if ($(event.target).closest('td').index() !== $(this).find('td').length - 1) {
                window.location.href = $(this).data('href');
            }
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
@endsection
