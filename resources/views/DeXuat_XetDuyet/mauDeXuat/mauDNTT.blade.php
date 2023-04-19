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
                                        <div class="card_template-title">
                                            Người đề nghị/Requester:
                                            <span class="card_template-sub">{{ Session::get('user')['name'] }}</span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title">
                                            Bộ phận/Department:
                                            <span class="card_template-sub">Marketing</span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title">
                                            Nội dung thanh toán/Contents of payment:
                                            <span class="card_template-sub">Thanh toán Thỏa thuận Hợp tác</span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title">
                                            Số tiền/Amount
                                            <span class="card_template-sub">50,000,000 VNĐ</span>
                                        </div> 
                                        <div class="card_template-mini">(Bằng chữ/In words:Năm mươi triệu đồng chẵn)</div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title">
                                            Người nhận tiền/Reciver:
                                            <span class="card_template-sub">{{ Session::get('user')['name'] }}</span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title">
                                            Số tài khoản/Account number:
                                            <span class="card_template-sub">069 7040 6868 6666</span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title">
                                            Tại ngân hàng/with bank:
                                            <span class="card_template-sub">TMCP Quốc Tế Việt Nam - CN Cầu Giấy</span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-12">
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
                                    </div>
                                </div>
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="card_template-title text-center">Người ĐNTT/Applicant</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phụ trách bộ phận/Head of Department</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="card_template-title text-center">Kế toán trưởng/Chief Accountant</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phê duyệt/Approved by</div>
                                        <div class="" style="height: 100px"></div>
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
                                        <div class="card_template-title">
                                            Người đề nghị/Requester:
                                            <span class="card_template-sub">{{ Session::get('user')['name'] }}</span>
                                        </div> 
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title">
                                            Công việc:
                                            <span class="card_template-sub">Chạy quảng cáo</span>
                                        </div> 
                                    </div>
                                    
                                    <div class="table-responsive">
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
                                </div>
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="card_template-title">Người đề nghị</div>
                                        <div class="" style="height: 100px"></div>
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
