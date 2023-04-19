@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Form đề nghị thanh toán')

@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid " role="document" style="max-width: 24cm">
                    <div class="">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class='row d-flex'>
                                            <div class="col-2 d-flex fs-6 align-items-center justify-content-center flex-column">
                                                <a class=" ">
                                                    <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                                </a>
                                                <div class="fst-italic">BM001.QT07/20</div>
    
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                                <div class="mainSection_heading-title">Đề nghị thanh toán</div>
                                                <div class="fst-italic fs-6">Request for payment</div>
    
                                            </div>
                                            <div class="col-2 d-flex  fs-6 justify-content-center flex-column">
                                                <div class="d-flex">
                                                    <div class="fst-italic">Số:</div>
                                                    <div class="fst-italic">BM001.QT07/20</div>
                                                </div>
                                                <div class="d-flex mt-1">
                                                    <div class="fst-italic">Ngày:</div>
                                                    <div class="fst-italic">19/04/2023</div>
                                                </div>
                                            </div>
                                        </div>
    
                                        
                                        <div class="" style="margin-top: 20px">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Người đề nghị/
                                                    <div class="fst-italic ">Requester</div>
                                                    : 
                                                    <div class="" style="margin-left: 3px">Nguyen Văn A</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Bộ phận (hoặc địa chỉ)/
                                                    <div class="fst-italic ">Department (or address)</div>
                                                    : 
                                                    <div class="" style="margin-left: 3px">Quản trị Nhãn hàng</div>
                                                </div>
                                            </div>
                                        </div>
                        
    
                                        <div class="mt-3">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Nội dung thanh toán/
                                                    <div class="fst-italic ">Contents of payment</div>
                                                    : 
                                                    <div class="" style="margin-left: 3px">Thanh toán Thỏa thuận Hợp tác</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Số tiền/
                                                    <div class="fst-italic ">Amount</div>
                                                    : 
                                                    <div class="" style="margin-left: 3px">50,000,000 VNĐ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="row d-flex fs-6 fst-italic">
                                                <div class="d-flex" style="font">(Bằng chữ/In words:
                                                    <div class="" style="margin-left: 3px">Năm mươi triệu đồng chẵn)</div>
                                                </div>
                                            </div>
                                        </div>
    
                                        
                                        <div class="mt-3">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Hình thức thanh toán/
                                                    <div class="fst-italic ">Payment method</div>
                                                    : 
                                                    <div class="d-flex" style="margin-left: 20px">Chuyển khoản/
                                                        <div class="fst-italic ">Transfer</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Người nhận tiền/
                                                    <div class="fst-italic ">Receiver</div>
                                                    : 
                                                    <div class="" style="margin-left: 3px">Nguyễn Ngọc B</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="row d-flex fs-6">
                                                <div class="col-6 d-flex" style="font">Số tài khoản/ 
                                                    <div class="fst-italic ">Account number</div>
                                                    : 
                                                    <div class="" style="margin-left: 3px">14710000027328</div>
                                                </div>
                                                <div class="col-6 d-flex" style="font">Tại ngân hàng/ 
                                                    <div class="fst-italic ">with bank</div>
                                                    : 
                                                    <div class="" style="margin-left: 3px">BIDV - Chi nhánh 3/2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row d-flex fs-6 mt-3'>
                                            <div class="col-2">
                                                <div class="fst-italic">File đính kèm:</div>
    
                                            </div>
                                            <div class="col-10 d-flex flex-column">
                                                <a class="">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                                <a class="">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                                <a class="">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
    
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="mt-4">
    
                                            <div class="row fs-6">
                                                <div class="col d-flex align-items-center justify-content-center flex-column">
                                                    <div class="fw-bold ">Người đề nghị/</div>
                                                    <div class="fw-bold">Applicant</div>
                                                    <div class="" style="height: 150px"></div>
                                                </div>
                                                <div class="col d-flex align-items-center justify-content-center flex-column">
                                                    <div class="fw-bold">Phụ trách bộ phận/</div>
                                                    <div class="fw-bold">Head of Department</div>
                                                    <div class="" style="height: 150px"></div>
                                                </div>
                                                <div class="col d-flex align-items-center justify-content-center flex-column">
                                                    <div class="fw-bold">Kế toán trưởng/</div>
                                                    <div class="fw-bold">Chief Accountant</div>
                                                    <div class="" style="height: 150px"></div>
                                                </div>
                                                
                                                <div class="col d-flex align-items-center justify-content-center flex-column">
                                                    <div class="fw-bold">Phê duyệt/</div>
                                                    <div class="fw-bold">Approved by</div>
                                                    <div class="" style="height: 150px"></div>
                                                </div>
                                            </div>
                                        </div>
    
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formycms">
                                            Launch demo modal
                                        </button>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="formycms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h5 class="modal-title w-100" id="exampleModalLabel">ĐỀ NGHỊ THANH TOÁN</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
    
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="">
    
                                                                <div class="row d-flex mt-3">
                                                                    <div class="col-6 col-md-6">
                                                                        <input class="form-control" type="text" placeholder="Người đề nghị">
                                                                    </div>
                                                                    <div class="col-6 col-md-6">
                                                                        <input class="form-control" type="number" placeholder="Bộ phận">
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row d-flex mt-3">
                                                                    <div class="col-12 col-md-12">
                                                                        <input class="form-control" type="text" placeholder="Nội dung thanh toán">
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row d-flex mt-3">
                                                                    <div class="col-4 col-md-4">
                                                                        <input class="form-control" type="text" placeholder="Số tiền">
                                                                    </div>
                                                                    <div class="col-4 col-md-4">
                                                                        <input class="form-control" type="text" placeholder="Bằng chữ" name="">
                                                                    </div>
                                                                    <div class="col-4 col-md-4">
                                                                        <input class="form-control" type="text" placeholder="Hình thức thanh toán" name="">
                                                                    </div>
                                                                </div>

                                                                <div class="row d-flex mt-3">
                                                                    <div class="col-4 col-md-4">
                                                                        <input class="form-control" type="text" placeholder="Người nhận tiền">
                                                                    </div>
                                                                    <div class="col-4 col-md-4">
                                                                        <input class="form-control" type="text" placeholder="Số tài khoản" name="">
                                                                    </div>
                                                                    <div class="col-4 col-md-4">
                                                                        <input class="form-control" type="text" placeholder="Tại ngân hàng" name="">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            
    
                                                            <div class="col-md-12 mt-3">
                                                                <div class="d-flex justify-content-start">
                                                                    <div role="button" class="fs-5 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i> Thêm bảng kê</div>
                                                                </div>
                                                            </div>


                                                            <div class="card mt-3">
                                                                
                                                                <div class="" style="margin: 10px">
                                                                    <div class="card-title">Bảng kê đề nghị</div>
                                                                    <div class="row d-flex mt-3">
                                                                        <div class="col-6 col-md-6">
                                                                            <input class="form-control" type="text" placeholder="Người đề nghị">
                                                                        </div>
                                                                        <div class="col-6 col-md-6">
                                                                            <input class="form-control" type="number" placeholder="Công việc">
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                    <div class="row d-flex mt-3">
                                                                        <div class="col-2 col-md-2">
                                                                            <input class="form-control" type="text" placeholder="Số chứng từ">
                                                                        </div>
                                                                        <div class="col-4 col-md-4">
                                                                            <input class="form-control" type="text" placeholder="Nội dung">
                                                                        </div>
                                                                        <div class="col-2 col-md-2">
                                                                            <input class="form-control" type="text" placeholder="Số tiền">
                                                                        </div>
                                                                        <div class="col-4 col-md-4">
                                                                            <input class="form-control" type="text" placeholder="Ghi chú">
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="d-flex justify-content-start">
                                                                            <div role="button" class="fs-5 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
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
                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                            <button type="submit" class="btn btn-danger">Thêm</button>
                                                        </div>
    
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid " role="document" style="max-width: 24cm">
                    <div class="">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class='row d-flex'>
                                            <div class="col-2 d-flex fs-6 align-items-center justify-content-center flex-column">
                                                <a class=" ">
                                                    <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                                </a>
                                                <div class="fst-italic">BM003.QT07/20</div>
    
                                            </div>
                                            <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                                <div class="mainSection_heading-title">Bảng kê đề nghị</div>
    
                                            </div>
                                            <div class="col-2 d-flex  fs-6 justify-content-center flex-column">
                                                
                                                <div class="d-flex mt-1">
                                                    <div class="fst-italic">Ngày:</div>
                                                    <div class="fst-italic">19/04/2023</div>
                                                </div>
                                            </div>
                                        </div>
    
                                        
                                        <div class="" style="margin-top: 20px">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Người đề nghị:
                                                    <div class="" style="margin-left: 3px">Nguyen Văn A</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <div class="row d-flex fs-6">
                                                <div class="d-flex" style="font">Công việc:
                                                    <div class="" style="margin-left: 3px">Chạy quảng cáo</div>
                                                </div>
                                            </div>
                                        </div>
                        
    
                                        <div class="mt-3 fs-6" >
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Số chứng từ</th>
                                                    <th scope="col">Nội dung</th>
                                                    <th scope="col">Số tiền</th>
                                                    <th scope="col">Ghi chú</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td></td>
                                                    <td>Google Ads</td>
                                                    <td>25,000,000</td>
                                                    <th scope="col"></th>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td></td>
                                                    <td>Facebook Ads</td>
                                                    <td>25,000,000</td>
                                                    <th scope="col"></th>
                                                  </tr>
                                                  <tr>
                                                    <th colspan="3" style="text-align: center;">Tổng</th>
                                                    <td>50,000,000</td>
                                                    <th scope="col"></th>

                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                        
                                        <div class="mt-4">
    
                                            <div class="row fs-6" >
                                                <div class="col"></div>
                                                <div class="col d-flex flex-column align-items-center justify-content-center">
                                                    <div class="fw-bold " >Người đề nghị</div>
                                                    <div class="" style="height: 150px"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                
                            </div>
                        </div>

                        

                    </div>
                </div>

                <div class="container-fluid " role="document" style="max-width: 24cm">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger ps-5 pe-5" style="margin-right: 10px;" data-bs-dismiss="modal">Hủy</button>
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-danger ps-5 pe-5">Gửi</button>
                        </form>
                    </div>
                
                </div>

            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')

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
