@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Mẫu đề nghị tạm ứng')

@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="card_template-wrapper">
                        <div class="card-body">
                            <div class='row d-flex'>
                                <div class="col-2 d-flex align-items-center justify-content-center flex-column">
                                    <a class=" ">
                                        <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                    </a>
                                    <div class="fst-italic">BM002.QT07/20</div>
                                </div>
                                <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                    <div class="mainSection_heading-title">Đề nghị tạm ứng</div>
                                    <div class="fst-italic">Request for advance</div>

                                </div>
                                <div class="col-2 d-flex  justify-content-center flex-column">
                                    <div class="d-flex">
                                        <div class="fst-italic">Ngày đề nghị / Request date::</div>
                                        <div class="fst-italic">18/04/2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fs-4">
                                <div class="col-6">
                                    Người đề nghị/Requester: {{ Session::get('user')['name'] }}
                                </div>
                                <div class="col-6">
                                    Bộ phận/Department: Marketing
                                </div>
                                <div class="col-12">
                                    Đề nghị tam ứng số tiền/Amount of Advance: 699,600,485 VNĐ
                                    <span>(Bằng chữ/In words: Sáu trăm chín mươi chín triệu, sắm trăm nghìn, bốn trăm tám mươi lăm đồng)</span>
                                </div>
                                <div class="col-12">
                                    Lý do tạm ứng/ Reason of Advance: Thanh toán giá trị quảng cáo đợt 1: 30% giá trị hợp đồng của Hợp đồng Kinh tes số 01/2023/HĐQC/GFM-MASTERTRAN ký ngày 15/04/2023
                                </div>
                                <div class="col-12">
                                    Hình thức tạm ứng/Advance Method: Chuyển khoản
                                </div>
                                <div class="col-12">
                                    Thời hạn hoàn ứng/Deadline for rembursement: 15/07/2023
                                </div>
                            </div>

                            <div class='row d-flex mt-3'>
                                <div class="col">
                                    <div class="fst-italic">File đính kèm:</div>

                                </div>
                                <div class="col-11 d-flex flex-column">
                                    <a class="#">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                    <a class="#">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                    <a class="#">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                </div>
                                
                            </div>
                            <div class="mt-3">

                                <div class="row">
                                    <div class="col d-flex align-items-center justify-content-center flex-column">
                                        <div class="fw-bold">Người ĐNTU/Applicant</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-center flex-column">
                                        <div class="fw-bold">Phụ trách bộ phận/Head of Department</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-center flex-column">
                                        <div class="fw-bold">Kế toán TT/Payment Accountant</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-center flex-column">
                                        <div class="fw-bold">Kế toán trưởng/Chief Accountant</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-center flex-column">
                                        <div class="fw-bold">Phê duyệt/Approved by</div>
                                        <div class="" style="height: 100px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
