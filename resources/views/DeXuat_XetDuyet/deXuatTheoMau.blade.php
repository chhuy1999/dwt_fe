@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách đề nghị')

@php
    $lists = [['id' => '1', 'code' => '123456', 'title' => 'Đề xuất yêu cầu mua sắm máy tính', 'form' => 'Đề xuất yêu cầu mua sắm', 'status_id' => '1', 'status' => 'Đã gửi', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Nguyễn Văn A', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '2', 'code' => '129371', 'title' => 'Đề nghị thanh toán phí dịch vụ toà nhà', 'form' => 'Đề nghị thanh toán', 'status_id' => '2', 'status' => 'Đã duyệt', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Trần Văn B', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '3', 'code' => '129761', 'title' => 'Đề nghị tạm ứng tiền chạy quảng cáo', 'form' => 'Đề nghị tạm ứng', 'status_id' => '3', 'status' => 'Từ chối', 'user' => 'Chủ đề đề xuất', 'userCode' => 'MTT271', 'student' => 'Đinh Văn C', 'studentCode' => 'MTT271', 'THVP036']];
    $status = [['status_id' => '1', 'status' => 'Đã tạo'], ['status_id' => '2', 'status' => 'Đã gửi'], ['status_id' => '3', 'status' => 'Đã mua']];
    function getFormName($formInt)
    {
        //cast to int
        $formInt = (int) $formInt;
        switch ($formInt) {
            case 1:
                return 'Yêu cầu mua sắm';
                break;
            case 2:
                return 'Đề nghị thanh toán';
                break;
            case 3:
                return 'Đề nghị tạm ứng';
                break;
            default:
                return '';
                break;
        }
    }

    function getStatusName($statusInt)
    {
        //cast to int
        $statusInt = (int) $statusInt;
        switch ($statusInt) {
            case 0:
                return 'Đã tạo';
                break;
            case 1:
                return 'Đã gửi';
                break;
            case 2:
                return 'Đã duyệt';
                break;
            case 3:
                return 'Từ chối';
                break;
            default:
                return '';
                break;
        }
    }

    function getProposalRelatedPeople($proposal)
    {
        $data = $proposal->data;
        $data = json_decode($data);
        if (!isset($data->relatedPeople)) {
            return [];
        }
        return $data->relatedPeople;
    }

    function isRelatedToProposal($proposal, $userId)
    {
        $related = getProposalRelatedPeople($proposal);
        if (count($related) == 0) {
            return false;
        }
        foreach ($related as $item) {
            if ($item == $userId) {
                return true;
            }
        }
    }

@endphp


@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Danh sách đề xuất</h5>
                        @include('template.components.sectionCard')
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table id="dsDaoTao" class="table table-responsive table-hover table-bordered filter">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap text-center" style="width:2%">STT</th>
                                                            <th class="text-nowrap" style="width:10%">Mã văn bản</th>
                                                            <th class="text-nowrap" style="width:25%">Tiêu đề</th>
                                                            <th class="text-nowrap" style="width:20%">Tóm tắt</th>
                                                            <th class="text-nowrap" style="width:15%">Người tạo</th>
                                                            <th class="text-nowrap" style="width:15%">Loại mẫu</th>
                                                            <th class="text-nowrap" style="width:10%">Trạng thái</th>
                                                            <th class="text-nowrap" style="width:3%"><span></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($proposals->data as $item)
                                                            <tr class="table-row" data-status-id="{{ $item->id }}" data-href="{{ route('proposal.show', $item->id) }}" role="button">
                                                                <td class="text-nowrap text-center">
                                                                    <div class="text-nowrap d-block text-truncate" style="">
                                                                        {{ $loop->iteration }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:80px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->code }}">
                                                                        {{ $item->code }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:220px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->title }}">
                                                                        {{ $item->title }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:200px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->description }}">
                                                                        {{ $item->description }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:140px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $item->sender->name ?? '' }} - {{ $item->sender->code ?? '' }}">
                                                                        {{ $item->sender->name ?? '' }} - {{ $item->sender->code ?? '' }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="max-width:155px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ getFormName($item->form) }}">
                                                                        {{ getFormName($item->form) }}
                                                                    </div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div class="text-nowrap d-block text-truncate" style="" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ getStatusName($item->status) }}">
                                                                        {{ getStatusName($item->status) }}
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="table_actions d-flex justify-content-center">
                                                                        @if ($item->status == 0)
                                                                            <div class="btn" data-bs-toggle="modal" data-bs-target="#suaDeXuat{{ $item->id }}">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                            </div>
                                                                            <div class="btn" data-bs-toggle="modal" data-bs-target="#xoaDeXuat{{ $item->id }}">
                                                                                <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                            </div>
                                                                        @endif
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
    @include('template.sidebar.sidebarDeXuat.sidebarRight')

    @foreach ($proposals->data as $item)
        {{-- Sửa đề xuất --}}
        <div class="modal fade" id="suaDeXuat{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100" id="exampleModalLabel">Sửa đề xuất</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('proposal.updateBasic', $item->id) }}">
                        @csrf
                        @method('PUT');
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <input name="title" type="text" placeholder="Tiêu đề" class="form-control" value={{ $item->title }}>
                                </div>
                                <div class="col-6 mb-3">
                                    <input name="description" type="text" placeholder="Tóm tắt" class="form-control" value="{{ $item->description }}">
                                </div>

                                <div class="col-6 mb-3">
                                    <select name="receiver_id" class="selectpicker" title="Chọn người nhận" data-size="5" data-live-search="true">
                                        @foreach (session('listUsers') as $u)
                                            @if ($item->receiver_id == $u->id)
                                                <option value="{{ $u->id }}" selected>{{ $u->name }}</option>
                                            @else
                                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6 mb-3">
                                    <select name="related_people[]" class="selectpicker" title="Chọn người liên quan" data-size="5" data-live-search="true" multiple>
                                        @foreach (session('listUsers') as $u)
                                            @if (isRelatedToProposal($item, $u->id))
                                                <option value="{{ $u->id }}" selected>{{ $u->name }}</option>
                                            @else
                                                <option value="{{ $u->id }}">{{ $u->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-6 mb-3">
                                    <select name="form" class="selectpicker" title="Chọn mẫu đề xuất" data-size="5">
                                        <option value="1" @if ($item->form == 1) selected @endif>Yêu cầu mua sắm</option>
                                        <option value="2" @if ($item->form == 2) selected @endif>Đề nghị thanh toán</option>
                                        <option value="3" @if ($item->form == 3) selected @endif>Đề nghị tạm ứng</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="card_template-title">Mã VB: {{ $item->code }}</div>
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

        {{-- Xóa đề xuất --}}
        <div class="modal fade" id="xoaDeXuat{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa đề xuất</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có thực sự muốn xoá đề xuất này không?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <form action="{{ route('proposal.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Thêm Tao De Xuat -->
    <div class="modal fade" id="taoDeXuat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Chọn mẫu đề xuất</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('proposal.create') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <input name="title" type="text" placeholder="Tiêu đề" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <input name="description" type="text" placeholder="Tóm tắt" class="form-control">
                            </div>

                            <div class="col-6 mb-3">
                                <select name="receiver_id" class="selectpicker" title="Chọn người nhận" data-size="5" data-live-search="true">
                                    @foreach (session('listUsers') as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6 mb-3">
                                <select name="related_people[]" class="selectpicker" title="Chọn người liên quan" data-size="5" data-live-search="true" multiple>
                                    @foreach (session('listUsers') as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6 mb-3">
                                <select name="form" class="selectpicker" title="Chọn mẫu đề xuất" data-size="5">
                                    <option value="1">Yêu cầu mua sắm</option>
                                    <option value="2">Đề nghị thanh toán</option>
                                    <option value="3">Đề nghị tạm ứng</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card_template-title">Mã VB: {{ time() }}</div>
                                <input type="hidden" name="code" value="{{ time() }}">
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
                <div class="action_export me-3">
                    <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                        data-bs-target="#taoDeXuat">Thêm đề xuất</button>
                </div>
            </div>
        `);
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

    <script>
        $('tr[data-href]').on("click", function(event) {
            if ($(event.target).closest('td').index() !== $(this).find('td').length - 1) {
                window.location.href = $(this).data('href');
            }
        });
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
