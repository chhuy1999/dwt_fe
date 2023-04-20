@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách đề nghị')

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
                        <h5 class="mainSection_heading-title">Danh sách đề nghị</h5>
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
                                                            <th class="text-nowrap" style="width:15%">Người đề nghị</th>
                                                            <th class="text-nowrap" style="width:10%">Trạng thái</th>
                                                            <th class="text-nowrap" style="width:20%">Xem file</th>
                                                            @if (session('user')['role'] == 'admin')
                                                                <th class="text-nowrap" style="width:3%"><span></span></th>
                                                            @endif

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lists as $list)
                                                            <tr class="table-row" data-status-id="{{ $list['status_id'] }}">
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
                                                                        data-bs-placement="top" title="Người đề nghị">
                                                                        Người đề nghị
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
                                                                    <div class="text-nowrap d-block text-truncate">
                                                                        <ul class="list_table">
                                                                            <li class="list_table-items">
                                                                                <a href="file-de-xuat-{{ time() }}.png">Link 1</a>
                                                                            </li>
                                                                            <li class="list_table-items">
                                                                                <a href="file-de-xuat-{{ time() }}.png">Link 2</a>
                                                                            </li>
                                                                            <li class="list_table-items">
                                                                                <a href="file-de-xuat-{{ time() }}.png">Link 3</a>
                                                                            </li>
                                                                        </ul>
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
                                                                                <h5 class="modal-title text-danger w-100 text-center"
                                                                                    id="exampleModalLabel">Sửa đề xuất</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <form method="" action="">
                                                                                @csrf
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-6 col-md-3 mb-3">
                                                                                            <input type="text"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                title="Mẫu form"
                                                                                                value="{{ $list['template_form'] }}"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                        <div class="col-6 col-md-9 mb-3">
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
                                                                                                title="Tóm tắt"
                                                                                                value="Tóm tắt đề xuất"
                                                                                                class="form-control">
                                                                                        </div>
                                                                                        <div class="col-12 col-md-7 mb-3">
                                                                                            <div data-bs-toggle="tooltip"
                                                                                                data-bs-placement="top"
                                                                                                title="Người đề nghị">
                                                                                                <select
                                                                                                    class="selectpicker"
                                                                                                    title="Chọn người đề nghị"
                                                                                                    data-live-search="true"
                                                                                                    data-size="5"
                                                                                                    data-live-search="true">
                                                                                                    <option>Người đề nghị</option>
                                                                                                    <option>Người đề nghị</option>
                                                                                                    <option>Người đề nghị</option>
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
                                                                                <h5 class="modal-title text-danger w-100 text-center"
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

    <!-- Modal Thêm Tao De Xuat -->
    <div class="modal fade" id="taoDeXuat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Chọn mẫu đề xuất</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <select name="" class="selectpicker" title="Chọn người gửi" data-size="5" data-live-search="true">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <input  name="" type="text" placeholder="Tiêu đề" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <select name="" class="selectpicker" title="Chọn người nhận" data-size="5" data-live-search="true">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <input  name=""  type="text" placeholder="Tóm tắt"class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <select class="selectpicker" title="Chọn mẫu đề xuất" data-size="5">
                                    <option value="ycms">Yêu cầu mua sắm</option>
                                    <option value="dntt">Đề nghị thanh toán</option>
                                    <option value="dntu2">Đề nghị tạm ứng</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <div>Mã VB: {{ time() }}</div>
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

    {{-- Modal Yêu Cầu Mua Sắm --}}
    <div class="modal fade" id="ycms-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">YÊU CẦU MUA SẮM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="YCMS_repeater">
                            <div data-repeater-list="ycmsList">
                                <div class="repeater_wrapper d-flex" style="position: relative; align-items:center; justify-content: space-between;" data-repeater-item>
                                    <div class="row">
                                        <div class="col-6 col-md-6 mb-3">
                                            <input class="form-control" type="text" placeholder="Tiêu đề">
                                        </div>
                                        <div class="col-6 col-md-6 mb-3">
                                            <input class="form-control" type="text" placeholder="Tóm tắt">
                                        </div>
                                        <div class="col-8 col-md-8 mb-3">
                                            <input class="form-control" type="text" placeholder="Tên, chủng loại, quy cách hàng hóa (Mô tả nếu có)">
                                        </div>
                                        <div class="col-2 col-md-2 mb-3">
                                            <input class="form-control" type="number" placeholder="Số lượng">
                                        </div>
                                        <div class="col-2 col-md-2 mb-3">
                                            <input class="form-control" type="text" placeholder="Đơn vị tính">
                                        </div>
    
                                        <div class="col-4 col-md-4 mb-3">
                                            <input class="form-control" type="text" placeholder="Mục đích sử dụng">
                                        </div>
                                        <div class="col-4 col-md-4 mb-3">
                                            <input class="form-control" type="text" placeholder="Nhà cung cấp tốt nhất" name="">
                                        </div>
                                        <div class="col-2 col-md-2 mb-3">
                                            <input class="form-control" type="text" placeholder="Đơn giá" name="">
                                        </div>
                                        <div class="col-2 col-md-2 mb-3">
                                            <input class="form-control" type="text" placeholder="Tổng tiền" name="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="d-flex justify-content-start">
                                    <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 margin-t-res mt-3">
                            <div class="action_wrapper-upload rounded border p-3 h-30  d-flex flex-column">
                                <div class="card-title mb-3">
                                    <i class="bi bi-paperclip"></i>
                                    File đính kèm
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="upload_wrapper-items">
                                        <input type="hidden" name="uploadedFiles[]" value="" />
                                        
                                        <ul class="modal_upload-list" style="max-height: 20px; overflow-y: scroll; overflow-x: hidden;"></ul>
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
                                                <div class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                    <div class="modal_upload-addFile me-3">
                                                        <button role="button" type="button" class="btn position-relative pe-4 ps-4">
                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/upload-file.svg') }}" />
                                                            Tải file lên
                                                            <input role="button" type="file" class="modal_upload-input modal_upload-file" name="files[]" multiple onchange="updateList(event)">
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="submit" class="btn btn-outline-danger">Tải
                                                file
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#taoDeXuat">Hủy</button>
                        <a href="/mau-yeu-cau-mua-sam" class="btn btn-danger">Thêm</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Modal BM01_ĐNTU2 -->
    <div class="modal fade" id="dntu-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Đề nghị tạm ứng 02</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 col-md-6 mb-3">
                                <input class="form-control" type="text" placeholder="Tiêu đề">
                            </div>
                            <div class="col-6 col-md-6 mb-3">
                                <input class="form-control" type="text" placeholder="Tóm tắt">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" placeholder="Người đề nghị" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" placeholder="Đề nghị tạm ứng số tiền" class="form-control">
                            </div>
                            <div class="mb-3 col-12">
                                <input type="text" placeholder="Lý do tạm ứng" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" placeholder="Hình thức tạm ứng" class="form-control">
                            </div>
                            <div class="mb-3 col-6">
                                <input type="text" placeholder="Thời hạn hoàn ứng" class="form-control">
                            </div>
                            <div class="mb-3 col-4">
                                <input type="text" placeholder="Người nhận tiền" class="form-control">
                            </div>
                            <div class="mb-3 col-4">
                                <input type="text" placeholder="Số tài khoản" class="form-control">
                            </div>
                            <div class="mb-3 col-4">
                                <input type="text" placeholder="Tại ngân hàng" class="form-control">
                            </div>

                        </div>

                        <div class="col-md-12 mb-3 kiemKe_wrapper">
                            <div class="d-flex justify-content-start">
                                <div role="button" class="fs-5 text-danger showKiemKe"><i class="bi bi-file-earmark-spreadsheet"></i> Thêm bảng kê</div>
                            </div>
                            <div class="card mt-3 formKiemKe" style="display:none;">
                                <div class="" style="margin: 10px">
                                    <div class="card-title">Bảng kê đề nghị</div>
                                    <div class="row d-flex mt-3">
                                        <div class="mb-3 col-6 col-md-6">
                                            <input class="form-control" type="text" placeholder="Người đề nghị">
                                        </div>
                                        <div class="mb-3 col-6 col-md-6">
                                            <input class="form-control" type="text" placeholder="Công việc">
                                        </div>
                                    </div>
                                    <div class="DNTU_repeater">
                                        <div data-repeater-list="DNTU_list">
                                            <div class="repeater_wrapper d-flex" style="position: relative; align-items:center; justify-content: space-between;" data-repeater-item>
                                                <div class="row">
                                                    <div class="mb-3 col-2 col-md-2">
                                                        <input class="form-control" type="text" placeholder="Số chứng từ">
                                                    </div>
                                                    <div class="mb-3 col-4 col-md-4">
                                                        <input class="form-control" type="text" placeholder="Nội dung">
                                                    </div>
                                                    <div class="mb-3 col-2 col-md-2">
                                                        <input class="form-control" type="text" placeholder="Số tiền">
                                                    </div>
                                                    <div class="mb-3 col-4 col-md-4">
                                                        <input class="form-control" type="text" placeholder="Ghi chú">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="d-flex justify-content-start">
                                                <div role="button" class="fs-5 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 margin-t-res mt-3">
                            <div class="action_wrapper-upload rounded border p-3 h-30  d-flex flex-column">
                                <div class="card-title mb-3">
                                    <i class="bi bi-paperclip"></i>
                                    File đính kèm
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="upload_wrapper-items">
                                        <input type="hidden" name="uploadedFiles[]" value="" />
                                        
                                        <ul class="modal_upload-list" style="max-height: 20px; overflow-y: scroll; overflow-x: hidden;"></ul>
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
                                                <div class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                    <div class="modal_upload-addFile me-3">
                                                        <button role="button" type="button" class="btn position-relative pe-4 ps-4">
                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/upload-file.svg') }}" />
                                                            Tải file lên
                                                            <input role="button" type="file" class="modal_upload-input modal_upload-file" name="files[]" multiple onchange="updateList(event)">
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="submit" class="btn btn-outline-danger">Tải
                                                file
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#taoDeXuat">Hủy</button>
                        <a href="/mau-de-nghi-tam-ung" class="btn btn-danger">Thêm</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Modal DNTT -->
    <div class="modal fade" id="dntt-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Đề nghị thanh toán</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 col-md-6 mb-3">
                                <input class="form-control" type="text" placeholder="Tiêu đề">
                            </div>
                            <div class="col-6 col-md-6 mb-3">
                                <input class="form-control" type="text" placeholder="Tóm tắt">
                            </div>
                            <div class="mb-3 col-6 col-md-6">
                                <input class="form-control" type="text" placeholder="Người đề nghị">
                            </div>
                            <div class="mb-3 col-6 col-md-6">
                                <input class="form-control" type="number" placeholder="Bộ phận">
                            </div>
                            
                            <div class="mb-3 col-12 col-md-12">
                                <input class="form-control" type="text" placeholder="Nội dung thanh toán">
                            </div>
                            
                            <div class="mb-3 col-4 col-md-4">
                                <input class="form-control" type="text" placeholder="Số tiền">
                            </div>
                            <div class="mb-3 col-4 col-md-4">
                                <input class="form-control" type="text" placeholder="Bằng chữ" name="">
                            </div>
                            <div class="mb-3 col-4 col-md-4">
                                <input class="form-control" type="text" placeholder="Hình thức thanh toán" name="">
                            </div>
                            <div class="mb-3 col-4 col-md-4">
                                <input class="form-control" type="text" placeholder="Người nhận tiền">
                            </div>
                            <div class="mb-3 col-4 col-md-4">
                                <input class="form-control" type="text" placeholder="Số tài khoản" name="">
                            </div>
                            <div class="mb-3 col-4 col-md-4">
                                <input class="form-control" type="text" placeholder="Tại ngân hàng" name="">
                            </div>
                        </div>
                        
                        <div class="col-md-12 mb-3 kiemKe_wrapper">
                            <div class="d-flex justify-content-start">
                                <div role="button" class="fs-5 text-danger showKiemKe"><i class="bi bi-file-earmark-spreadsheet"></i> Thêm bảng kê</div>
                            </div>
                            <div class="card mt-3 formKiemKe" style="display:none;">
                                <div class="" style="margin: 10px">
                                    <div class="card-title">Bảng kê đề nghị</div>
                                    <div class="row d-flex mt-3">
                                        <div class="mb-3 col-6 col-md-6">
                                            <input class="form-control" type="text" placeholder="Người đề nghị">
                                        </div>
                                        <div class="mb-3 col-6 col-md-6">
                                            <input class="form-control" type="text" placeholder="Công việc">
                                        </div>
                                    </div>
                                    <div class="DNTT_repeater">
                                        <div data-repeater-list="DNTU_list">
                                            <div class="repeater_wrapper d-flex" style="position: relative; align-items:center; justify-content: space-between;" data-repeater-item>
                                                <div class="row">
                                                    <div class="mb-3 col-2 col-md-2">
                                                        <input class="form-control" type="text" placeholder="Số chứng từ">
                                                    </div>
                                                    <div class="mb-3 col-4 col-md-4">
                                                        <input class="form-control" type="text" placeholder="Nội dung">
                                                    </div>
                                                    <div class="mb-3 col-2 col-md-2">
                                                        <input class="form-control" type="text" placeholder="Số tiền">
                                                    </div>
                                                    <div class="mb-3 col-4 col-md-4">
                                                        <input class="form-control" type="text" placeholder="Ghi chú">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="d-flex justify-content-start">
                                                <div role="button" class="fs-5 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-md-12 margin-t-res mt-3">
                            <div class="action_wrapper-upload rounded border p-3 h-30  d-flex flex-column">
                                <div class="card-title mb-3">
                                    <i class="bi bi-paperclip"></i>
                                    File đính kèm
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="upload_wrapper-items">
                                        <input type="hidden" name="uploadedFiles[]" value="" />
                                        
                                        <ul class="modal_upload-list" style="max-height: 20px; overflow-y: scroll; overflow-x: hidden;"></ul>
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
                                                <div class="modal_upload-action mt-3 d-flex align-items-center justify-content-center">
                                                    <div class="modal_upload-addFile me-3">
                                                        <button role="button" type="button" class="btn position-relative pe-4 ps-4">
                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/upload-file.svg') }}" />
                                                            Tải file lên
                                                            <input role="button" type="file" class="modal_upload-input modal_upload-file" name="files[]" multiple onchange="updateList(event)">
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="submit" class="btn btn-outline-danger">Tải
                                                file
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#taoDeXuat">Hủy</button>
                        <a href="/mau-de-nghi-thanh-toan" class="btn btn-danger">Thêm</a>
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

    {{-- <script>
        $('select.selectpicker').on('change', function() {
            var target = $(this).find(":selected").data("target");
            $(target).modal("show");
            $("#taoDeXuat").modal("hide");
        });

    </script>

    <script>
        $(document).ready(function() {
            $('.kiemKe_wrapper').each(function() {
                var button = $(this).find('.showKiemKe');
                var form = $(this).find('.formKiemKe');

                button.click(function() {
                form.slideToggle('fast');
                });
            });
        });
    </script> --}}

@endsection
