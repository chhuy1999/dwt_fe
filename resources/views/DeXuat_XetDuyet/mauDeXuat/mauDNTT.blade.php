@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Mẫu đề nghị thanh toán')

@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="card_template-wrapper mb-3">
                        <div class="card_template-body">
                            <div class="card_template-body-top">
                                <div class='row mb-3'>
                                    <div class="col-2 d-flex align-items-center justify-content-center flex-column">
                                        <a class=" ">
                                            <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                        </a>
                                        <div class="card_template-title fst-italic">BM001.QT07/20</div>
                                    </div>
                                    <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                        <div class="card_template-heading">Đề nghị thanh toán</div>
                                        <div class="card_template-heading-mini">Request for payment</div>
    
                                    </div>
                                    <div class="col-2 card_template-topRight">
                                            <div class="card_template-title fst-italic">Ngày đề nghị /<br> Request date:</div>
                                            <div class="card_template-title fst-italic">18/04/2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_template-body-middle">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Người đề nghị/Requester:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="{{ Session::get('user')['name'] }}" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Bộ phận/Department:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="Marketing" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Nội dung thanh toán/Contents of payment:    </div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="Nhập nội dung thanh toán" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Số tiền/Amount</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="Nhập số tiền" class="form-control">
                                            </span>
                                        </div> 
                                        <div class="card_template-mini with_form mt-3">
                                            <input type="text" placeholder="Nhập số tiền ghi bằng chữ" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Người nhận tiền/Reciver:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="{{ Session::get('user')['name'] }}" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title  with_form">
                                            <div class="text-nowrap">Số tài khoản/Account number:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="Nhập số tài khoản" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title  with_form">
                                            <div class="text-nowrap">Tại ngân hàng/with bank:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="Nhập chi nhánh ngân hàng" class="form-control">
                                            </span>
                                        </div> 
                                    </div>

                                    {{-- <div class="mb-3 col-12">
                                        <div class="card_template-title">File đính kèm:</div>
                                        <ul class="card_template-list">
                                            <li class="card_template-items">
                                                <a href="#" target="_blank">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                            </li>
                                            <li class="card_template-items">
                                                <a href="#" target="_blank">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                            </li>
                                            <li class="card_template-items">
                                                <a href="#" target="_blank">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                            </li>
                                        </ul>
                                    </div> --}}

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
                                                    
                                                    <ul class="modal_upload-list" style="max-height: 200px; overflow-y: scroll; overflow-x: hidden;"></ul>
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
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="card_template-title text-center">Người ĐNTT<br>Applicant</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-danger fs-6">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phụ trách bộ phận<br>Head of Department</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-danger fs-6">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="card_template-title text-center">Kế toán trưởng<br>Chief Accountant</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-danger fs-6">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phê duyệt<br>Approved by</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-danger fs-6">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card_template-footer">
                            <button type="button" class="btn btn-outline-danger ps-5 pe-5" style="margin-right: 10px;" data-bs-dismiss="modal">Hủy</button>
                            <form action="" method="POST">
                                @csrf
                                {{-- @method('PUT') --}}
                                <input type="hidden" name="status" value="1">
                                <button type="submit" class="btn btn-danger ps-5 pe-5">Gửi</button>
                            </form>
                        </div>
                        
                    </div>
                    
                    <div class="card_template-wrapper mb-3">
                        <div class="card_template-body">
                            <div class="card_template-body-top">
                                <div class='row mb-3'>
                                    <div class="col-2 d-flex align-items-center justify-content-center flex-column">
                                        <a class=" ">
                                            <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                        </a>
                                        <div class="card_template-title fst-italic">BM003.QT07/20</div>
                                    </div>
                                    <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                        <div class="card_template-heading">Bảng kê đề nghị</div>
    
                                    </div>
                                    <div class="col-2 card_template-topRight">
                                            <div class="card_template-title fst-italic">Ngày:18/04/2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_template-body-middle">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                             <div class="text-nowrap">Người đề nghị/Requester:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="{{ Session::get('user')['name'] }}" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                             <div class="text-nowrap">Công việc:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="Chạy quảng cáo" class="form-control">
                                            </span>
                                        </div> 
                                    </div>
                                    
                                    <div class="table-responsive DNTT_repeater">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:2%">STT</th>
                                                    <th scope="col" style="width:10%">Số chứng từ</th>
                                                    <th scope="col" style="width:40%">Nội dung</th>
                                                    <th scope="col" style="width:10%">Số tiền</th>
                                                    <th scope="col" style="width:36%">Ghi chú</th>
                                                    <th scope="col" style="width:2%">
                                                        <span></span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody data-repeater-list="DNTT_list">
                                                <tr data-repeater-item>
                                                    <td scope="row"  class="text-center">
                                                        <div>
                                                            1
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" placeholder="Google Ads" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" placeholder="25,000,000" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" placeholder="Ghi chú" class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="15px" height="15px" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                               
                                        </table>
                                        <div class="d-flex justify-content-start">
                                            <div role="button" class="fs-5 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="card_template-title">Người đề nghị</div>
                                        <div class=" d-flex align-items-center justify-content-start" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-danger fs-6">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card_template-footer">
                            <button type="button" class="btn btn-outline-danger ps-5 pe-5" style="margin-right: 10px;" data-bs-dismiss="modal">Hủy</button>
                            <form action="" method="POST">
                                @csrf
                                {{-- @method('PUT') --}}
                                <input type="hidden" name="status" value="1">
                                <button type="submit" class="btn btn-danger ps-5 pe-5">Gửi</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')

@endsection
@section('footer-script')
    
    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

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
            <div class="action_wrapper">
                <select id="filter_status"  class="selectpicker filter_status" title="Lọc chủ đề">
                    <option value="all">Tất cả</option>
                </select>
            </div>
        `);
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
