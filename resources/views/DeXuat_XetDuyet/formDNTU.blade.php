@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Form yêu cầu mua sắm')

@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
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
                                                <div class="fst-italic">Số:</div>
                                                <div class="fst-italic">BM013.QT02/12</div>
                                            </div>
                                            <div class="d-flex mt-1">
                                                <div class="fst-italic">Ngày:</div>
                                                <div class="fst-italic">19/04/2023</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <td scope="col">STT</td>
                                                <th scope="col">
                                                    Tên, chủng loại, quy cách hàng hóa 
                                                    (Đính kèm hình ảnh, mô tả nếu có)
                                                </th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">ĐVT</th>
                                                <th scope="col">MĐ sử dụng & T.gian hoàn thành</th>
                                                <th scope="col">NCC tốt nhất (Tên, sđt, đc)</th>
                                                <th scope="col">Đơn giá (VNĐ)</th>
                                                <th scope="col">Tổng tiền (VNĐ)</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <td>Găng tay y tế</td>
                                                <td>4</td>
                                                <td>Hộp</td>
                                                <td rowspan="4"> Thực hiện ACT Tháng 12  Vùng 1 + 2 </td>
                                                <td></td>
                                                <td>90.000</td>
                                                <td>360.000</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>Standee chân cuộn ( Mua thêm trong trường hợp gẫy hỏng )</td>
                                                <td>2</td>
                                                <td>Cuốn</td>
                                                <td></td>
                                                <td>300.000</td>
                                                <td>600.000</td>
                                              </tr>
                                              <tr>
                                                <td>3</td>
                                                <td>Standee chương trình đo loãng xương ( Trưng bày tại địa bàn )</td>
                                                <td>4</td>
                                                <td>Tờ</td>
                                                <td>Xưởng in Tam Tân</td>
                                                <td>125.000</td>
                                                <td>500.000</td>
                                              </tr>
                                              <tr>
                                                <td>4</td>
                                                <td>Tờ rơi thông tin chương trình đo loãng xương ( Mỗi nhà thuốc in 1 thiết kế riêng )</td>
                                                <td>2.000</td>
                                                <td>Tờ</td>
                                                <td>Xưởng in Tam Tân</td>
                                                <td>2.000</td>
                                                <td>4.000.000</td>
                                              </tr>
                                              <tr>
                                                <th scope="row" colspan="7" style="text-align: center;">Tổng (chưa VAT)</th>
                                                <td> 5.460.000 </td>
                                              </tr>
                                              <tr>
                                                <th scope="row" colspan="7" style="text-align: center;">Tổng (có VAT)</th>
                                                <th>6.006.000</th>
                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>

                                    <div class='row d-flex mt-3'>
                                        <div class="col">
                                            <div class="fst-italic">File đính kèm:</div>

                                        </div>
                                        <div class="col-11 d-flex flex-column">
                                            <a class="">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                            <a class="">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>
                                            <a class="">https://report.sweetsica.com/storage/report/19-04-2023/KPI thiết kế.xlsx</a>

                                        </div>
                                        
                                    </div>
                                    <div class="mt-3">

                                        <div class="row">
                                            <div class="col d-flex align-items-center justify-content-center flex-column">
                                                <div class="fw-bold">Người yêu cầu</div>
                                                <div class="" style="height: 100px"></div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-center flex-column">
                                                <div class="fw-bold">Trưởng bộ phận</div>
                                                <div class="" style="height: 100px"></div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-center flex-column">
                                                <div class="fw-bold">BP Mua hàng</div>
                                                <div class="" style="height: 100px"></div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-center flex-column">
                                                <div class="fw-bold">Người thực hiện mua</div>
                                                <div class="" style="height: 100px"></div>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-center flex-column">
                                                <div class="fw-bold">Phê duyệt</div>
                                                <div class="" style="height: 100px"></div>
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
                                                    <h5 class="modal-title w-100" id="exampleModalLabel">YÊU CẦU MUA SẮM</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form action="" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="card">

                                                            <div class="row d-flex ">
                                                                <div class="col-8 col-md-8 mt-3">
                                                                    <input class="form-control" type="text" placeholder="Tên, chủng loại, quy cách hàng hóa (Mô tả nếu có)">
                                                                </div>
                                                                <div class="col-2 col-md-2 mt-3">
                                                                    <input class="form-control" type="number" placeholder="Số lượng">
                                                                </div>
                                                                <div class="col-2 col-md-2 mt-3">
                                                                    <input class="form-control" type="text" placeholder="Đơn vị tính">
                                                                </div>
                                                            </div>
                                                            <div class="row d-flex mb-3">
                                                                <div class="col-4 col-md-4 mt-3">
                                                                    <input class="form-control" type="text" placeholder="Mục đích sử dụng">
                                                                </div>
                                                                <div class="col-4 col-md-4 mt-3">
                                                                    <input class="form-control" type="text" placeholder="Nhà cung cấp tốt nhất" name="">
                                                                </div>
                                                                <div class="col-2 col-md-2 mt-3">
                                                                    <input class="form-control" type="text" placeholder="Đơn giá" name="">
                                                                </div>
                                                                <div class="col-2 col-md-2 mt-3">
                                                                    <input class="form-control" type="text" placeholder="Tổng tiền" name="">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>



                                                        <div class="col-md-12 mt-3">
                                                            <div class="d-flex justify-content-start">
                                                                <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
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
