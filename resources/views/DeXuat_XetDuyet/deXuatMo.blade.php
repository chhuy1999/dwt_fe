@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Đề xuất mở')

@php
    $lists = [['id' => '1', 'code' => 'Đề xuất 1', 'user' => 'Đề xuất tóm tắt', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '2', 'code' => 'Đề xuất 2', 'user' => 'Đề xuất tóm tắt', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036'], ['id' => '3', 'code' => 'Đề xuất 3', 'user' => 'Đề xuất tóm tắt', 'userCode' => 'MTT271', 'student' => 'Nguyễn Ngọc Bảo', 'studentCode' => 'MTT271', 'THVP036']];
@endphp
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Đề xuất mở</h5>
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
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap text-center" style="width:2%">STT</th>
                                                            <th class="text-nowrap text-center" style="width:30%">Tiêu đề
                                                            </th>
                                                            <th class="text-nowrap" style="width:23%">Tóm tắt</th>
                                                            <th class="text-nowrap" style="width:20%">Người gửi</th>
                                                            <th class="text-nowrap" style="width:25%">Xem file</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                        @foreach ($lists as $list)
                                                            <tr data-bs-toggle="modal" data-bs-target="#xemDeXuat{{ $list['id'] }}" role="button">
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
                                <input type="text" placeholder="Nhập tóm tắt" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <select class="selectpicker" title="Chọn người nhận" data-size="5" data-live-search="true">
                                    <option>Tên người nhận 1</option>
                                    <option>Tên người nhận 2</option>
                                    <option>Tên người nhận 3</option>
                                    <option>Tên người nhận 4</option>
                                    <option>Tên người nhận 5</option>
                                    <option>Tên người nhận 6</option>
                                    <option>Tên người nhận 7</option>
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
                                    <ul class="modal_upload-list" style="max-height: 134px; overflow-y: scroll; overflow-x: hidden;"></ul>
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

    <div class="modal fade" id="xemDeXuat{{ $list['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Xem đề xuất</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tiêu đề" readonly value="{{ $list['code'] }}" class="form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tóm tắt"  readonly value="{{ $list['user'] }}" class="form-control">
                                </div>
                                <div class="col-12 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Người gửi">
                                    <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tóm tắt"  readonly value="{{ $list['student'] }}" class="form-control">
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea rows="1" data-bs-toggle="tooltip" data-bs-placement="top" placeholder="Nhập đánh giá" class="form-control"></textarea>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="upload_wrapper-items">
                                        <ul class="modal_upload-list" style="max-height: 134px; overflow-y: scroll; overflow-x: hidden;">
                                            <li>
                                                <span class="fs-5">
                                                    <i class="bi bi-link-45deg"></i> 209-40.json
                                                </span>
                                            </li
                                        ></ul>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <img width="100" src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                                </div>

                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-warning">Xóa phê duyệt</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Phê duyệt</button>
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
            dom: '<"d-flex justify-content-between mb-3"<"card-title-left"><"d-flex "<"card-title-right justify-content-end">f>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
        $('div.card-title-right').html(`
            <div class="action_wrapper">
                @if (session('user')['role'] == 'admin')
                <div class="action_export me-3">
                    <button class="btn btn-danger d-block testCreateUser" data-bs-toggle="modal"
                        data-bs-target="#taoDeXuat">Tạo đề xuất</button>
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
@endsection
