@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Đề xuất theo mẫu')

@php
    $lists = [
        ['id' => '1','template_form' => 'Mẫu Form 1', 'code' => 'Đề xuất 1', 'status_id' => '1', 'status' => 'Đã gửi', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'],
        ['id' => '2','template_form' => 'Mẫu Form 2', 'code' => 'Đề xuất 2', 'status_id' => '2', 'status' => 'Đã duyệt', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'],
        ['id' => '3','template_form' => 'Mẫu Form 3', 'code' => 'Đề xuất 3', 'status_id' => '3', 'status' => 'Từ chối', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'],
        ['id' => '4','template_form' => 'Mẫu Form 4', 'code' => 'Đề xuất 4', 'status_id' => '3', 'status' => 'Từ chối', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Trần Thị Hồng Nhung', 'studentCode' => 'MTT271', 'THVP036'],
        ['id' => '5','template_form' => 'Mẫu Form 5', 'code' => 'Đề xuất 5', 'status_id' => '2', 'status' => 'Đã duyệt', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Trần Thị Hồng Nhung', 'studentCode' => 'MTT271', 'THVP036'],
        ['id' => '6','template_form' => 'Mẫu Form 6', 'code' => 'Đề xuất 6', 'status_id' => '2', 'status' => 'Đã duyệt', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Trần Thị Hồng Nhung', 'studentCode' => 'MTT271', 'THVP036'],
        ['id' => '7','template_form' => 'Mẫu Form 7', 'code' => 'Đề xuất 7', 'status_id' => '1', 'status' => 'Đã gửi', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Lê Thị Thu Trang', 'studentCode' => 'MTT271', 'THVP036'],
        ['id' => '8','template_form' => 'Mẫu Form 8', 'code' => 'Đề xuất 8', 'status_id' => '3', 'status' => 'Từ chối', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Lê Thị Thu Trang', 'studentCode' => 'MTT271', 'THVP036'],
    ];
    $status = [['status_id' => '1', 'status' => 'Đã gửi'], ['status_id' => '2', 'status' => 'Đã duyệt'], ['status_id' => '3', 'status' => 'Từ chối']];
@endphp
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Đề xuất theo mẫu</h5>
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
                                                            <th class="text-nowrap text-center" style="width:2%">STT</th>
                                                            <th class="text-nowrap" style="width:10%">Mẫu Form</th>
                                                            <th class="text-nowrap" style="width:10%">Tiêu đề </th>
                                                            <th class="text-nowrap" style="width:15%">Tóm tắt</th>
                                                            <th class="text-nowrap" style="width:15%">Đề nghị</th>
                                                            <th class="text-nowrap" style="width:10%">Trạng thái</th>
                                                            <th class="text-nowrap" style="width:20%">Xem file</th>
                                                            @if (session('user')['role'] == 'admin')
                                                                <th class="text-nowrap" style="width:3%"><span></span></th>
                                                            @endif

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lists as $list)
                                                            <tr class="table-row" data-status-id="{{ $list['status_id'] }}"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#xemDeXuat{{ $list['id'] }}" role="button">
                                                                <td class="text-nowrap text-center">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="">
                                                                        {{ $list['id'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:195px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="{{ $list['template_form'] }}">
                                                                        {{ $list['template_form'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:195px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="{{ $list['code'] }}">
                                                                        {{ $list['code'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:155px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Tóm tắt đề xuất">
                                                                        Tóm tắt đề xuất
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:155px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Đề nghị">
                                                                        Đề nghị
                                                                    </div>
                                                                </td>
                                                                
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="{{ $list['status'] }}">
                                                                        {{ $list['status'] }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate"
                                                                        style="max-width:215px;" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="file-de-xuat-{{ time() }}.png">
                                                                        file-de-xuat-{{ time() }}.png
                                                                    </div>
                                                                </td>
                                                                @if (session('user')['role'] == 'admin')
                                                                    <td>
                                                                        <div
                                                                            class="table_actions d-flex justify-content-center">
                                                                            <div class="btn" data-bs-toggle="modal"
                                                                                data-bs-target="#suaDeXuat{{ $list['id'] }}">
                                                                                <img style="width:16px;height:16px"
                                                                                    src="{{ asset('assets/img/edit.svg') }}" />
                                                                            </div>
                                                                            <div class="btn" data-bs-toggle="modal"
                                                                                data-bs-target="#xoaDeXuat{{ $list['id'] }}">
                                                                                <img style="width:16px;height:16px"
                                                                                    src="{{ asset('assets/img/trash.svg') }}" />
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                @endif

                                                                {{-- Xóa Vi tri --}}
                                                                <div class="modal fade" id="suaDeXuat{{ $list['id'] }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title text-danger"
                                                                                    id="exampleModalLabel">Sửa đề xuất</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <form method="" action="">
                                                                                @csrf
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-12 col-md-12 mb-3">
                                                                                            <input type="text"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                title="Tiêu đề"
                                                                                                value="{{ $list['code'] }}"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 mb-3">
                                                                                            <input type="text"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                title="Chủ đề"
                                                                                                value="{{ $list['user'] }}"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 mb-3">
                                                                                            <input type="text"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                title="Tóm tắt"
                                                                                                value="Tóm tắt đề xuất"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                        <div class="col-12 col-md-7 mb-3">
                                                                                            <div data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                title="Người gửi">
                                                                                                <select
                                                                                                    class="selectpicker"
                                                                                                    title="Chọn người nhận"
                                                                                                    data-live-search="true"
                                                                                                    data-size="5"
                                                                                                    data-live-search="true">
                                                                                                    {{-- @foreach ($listUsers->data as $users)
                                                                                                        <option
                                                                                                            value="{{ $users->id }}"
                                                                                                            selected>
                                                                                                            {{ $users->name }}
                                                                                                            -
                                                                                                            {{ $users->code }}
                                                                                                        </option>
                                                                                                    @endforeach --}}
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-5 mb-3">
                                                                                            <div data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                title="Trạng thái">
                                                                                                <select
                                                                                                    class="selectpicker"
                                                                                                    title="Chọn người nhận"
                                                                                                    data-live-search="true"
                                                                                                    data-size="5"
                                                                                                    data-live-search="true">
                                                                                                    <option
                                                                                                        value="{{ $list['id'] }}"
                                                                                                        selected>
                                                                                                        {{ $list['status'] }}
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12 col-md-12 mb-3">
                                                                                            <div class="card-title">File đã
                                                                                                tải lên</div>
                                                                                            <div
                                                                                                class="upload_wrapper-items">
                                                                                                <ul class="modal_upload-list"
                                                                                                    style="max-height: 134px; overflow-y: scroll; overflow-x: hidden;">
                                                                                                    <li>
                                                                                                        <a href="#"
                                                                                                            target="_blank">
                                                                                                            <span
                                                                                                                class="fs-5">
                                                                                                                <i
                                                                                                                    class="bi bi-link-45deg"></i>
                                                                                                                209-40.json
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-danger"
                                                                                        data-bs-dismiss="modal">Hủy</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger">Sửa</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- Xóa Vi tri --}}
                                                                <div class="modal fade" id="xoaDeXuat{{ $list['id'] }}"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title text-danger"
                                                                                    id="exampleModalLabel">Xóa đề xuất</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Bạn có thực sự muốn xoá đề xuất này không?
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
    <div class="modal fade" id="taoDeXuat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Tạo đề xuất</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" placeholder="Nhập tiêu đề" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" placeholder="Nhập chủ đề" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" placeholder="Nhập tóm tắt" class="form-control">
                            </div>
                            <div class="col-12 col-md-7 mb-3">
                                <select class="selectpicker" title="Chọn người nhận" data-live-search="true"
                                    data-size="5" data-live-search="true">
                                    {{-- @foreach ($listUsers->data as $users)
                                        <option value="{{ $users->id }}">{{ $users->name }} - {{ $users->code }}
                                        </option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="col-12 col-md-5 mb-3">
                                <select class="selectpicker" title="Chọn trạng thái" data-live-search="true"
                                    data-size="5" data-live-search="true">
                                    @foreach ($lists as $list)
                                        <option value="{{ $list['id'] }}">{{ $list['status'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-12 mb-3">
                                <textarea rows="1" class="form-control" placeholder="Nhập đánh giá"></textarea>
                            </div> --}}
                            <div class="col-12 mb-3">
                                <div class="upload_wrapper-items">
                                    <input type="hidden" name="uploadedFiles[]" value="" />
                                    <div class="alert alert-danger alertNotSupport" role="alert" style="display:none">
                                        File bạn tải lên hiện tại không hỗ trợ !
                                    </div>
                                    <div class="modal_upload-wrapper">
                                        <label class="modal_upload-label" for="file">
                                            Tải xuống tệp hoặc đính kèm liên kết ở đây</label>
                                        <div class="mt-2 text-secondary fst-italic">Hỗ trợ định
                                            dạng
                                            JPG,
                                            PNG, PDF, XLSX, DOCX, hoặc PPTX kích
                                            thước tệp không quá 10MB
                                        </div>
                                        <div
                                            class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                            <div class="modal_upload-addFile me-3">
                                                <button role="button" type="button"
                                                    class="btn position-relative pe-4 ps-4">
                                                    <img style="width:16px;height:16px"
                                                        src="{{ asset('assets/img/upload-file.svg') }}" />
                                                    Tải file lên
                                                    <input role="button" type="file"
                                                        class="modal_upload-input modal_upload-file" name="files[]"
                                                        multiple onchange="updateList(event)">
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <ul class="modal_upload-list"
                                        style="max-height: 134px; overflow-y: scroll; overflow-x: hidden;"></ul>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <img width="100" src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Xem DS biên bản -->
    @foreach ($lists as $list)
        <div class="modal fade" id="xemDeXuat{{ $list['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100" id="exampleModalLabel">Chi tiết đề xuất</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="" action="">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-md-12 mb-3">
                                    <input readonly type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Tiêu đề" value="{{ $list['code'] }}" class="form-control">
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <input readonly type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Chủ đề" value="{{ $list['user'] }}" class="form-control">
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <input readonly type="text" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Tóm tắt" value="Tóm tắt đề xuất" class="form-control">
                                </div>
                                <div class="col-12 col-md-7 mb-3">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Người gửi">
                                        <select class="selectpicker" title="Chọn người gửi" data-size="5">
                                            {{-- <option value="{{ $users->id }}" selected>{{ $users->name }} - {{ $users->code }}</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 mb-3">
                                    <div data-bs-toggle="tooltip" data-bs-placement="top" title="Trạng thái">
                                        <select class="selectpicker" title="Chọn Trạng thái" data-size="5">
                                            <option value="{{ $list['id'] }}" selected>{{ $list['status'] }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <div class="card-title">File đã tải lên</div>
                                    <div class="upload_wrapper-items">
                                        <ul class="modal_upload-list"
                                            style="max-height: 134px; overflow-y: scroll; overflow-x: hidden;">
                                            <li>
                                                <a href="#" target="_blank">
                                                    <span class="fs-5">
                                                        <i class="bi bi-link-45deg"></i> 209-40.json
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <img width="100" src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-warning">Không duyệt</button>
                            <button type="submit" class="btn btn-danger">Ký duyệt</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Trở
                                lại</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

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
                    <select class="selectpicker" title="Mẫu form">
                        <option value="all">Tất cả</option>
                        
                    </select>
                </div>
                <div class="action_wrapper me-3">
                    <select id="filter_status"  class="selectpicker filter_status" title="Trạng thái">
                        <option value="all">Tất cả</option>
                        @foreach ($status as $filter_status)
                            <option value="{{ $filter_status['status_id'] }}">{{ $filter_status['status'] }}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="action_wrapper">
                    <select  class="selectpicker" title="Phòng ban">
                        <option value="all">Tất cả</option>
                        
                    </select>
                </div>
            </div>
        `);
        $('div.card-title-right').html(`
            <div class="action_wrapper">
                @if (session('user')['role'] == 'admin')
                <div class="action_export me-3">
                    <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                        data-bs-target="#taoDeXuat">Thêm đề xuất</button>
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
        const select = document.querySelector('#filter_status');
        const rows = document.querySelectorAll('.table-row');

        select.addEventListener('change', () => {
            const selectedStatusId = select.value;

            rows.forEach(row => {
                const statusId = row.getAttribute('data-status-id');
                if (selectedStatusId === 'all' || selectedStatusId === statusId) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        function filterTable() {
            var input, filter, table, rows, status_id;
            input = document.getElementById("search-input");
            filter = input.value.toUpperCase();
            table = document.getElementById("table");
            rows = table.getElementsByTagName("tr");
            status_id = document.querySelector(".filter_status").value;
            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var cols = row.getElementsByTagName("td");
                var display = false;
                var statusValue = cols[5].innerText;
                if (status_id === "all" || statusValue === status_id) {
                    if (filter === "") {
                        display = true;
                    } else {
                        for (var j = 0; j < cols.length; j++) {
                            var col = cols[j];
                            if (col.innerText.toUpperCase().indexOf(filter) > -1) {
                                display = true;
                                break;
                            }
                        }
                    }
                }
                if (display) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        }
    </script>

@endsection
