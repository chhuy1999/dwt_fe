@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Mẫu yêu cầu mua sắm')

@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="card_template-wrapper">
                        <div class="card_template-body">
                            <div class="card_template-body-top">
                                <div class='row mb-3 align-items-center'>
                                    <div class="col-2 d-flex align-items-center justify-content-center flex-column">
                                        <a class=" ">
                                            <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                        </a>
                                        <div class="card_template-title fst-italic">BM013.QT02/12</div>
                                    </div>
                                    <div class="col-8 d-flex align-items-center justify-content-center flex-column" >
                                        <div class="card_template-heading">Yêu cầu mua sắm</div>
                                        <div class="card_template-heading-mini">Purchasing requirement</div>
                                        <div class="card_template-heading-mini">Mã: {{ time() }}</div>
    
                                    </div>
                                    <div class="col-2">
                                        <div class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Số/No:</div>
                                            <div class="card_template-sub with_input d-flex justify-content-center align-items-center"">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Ngày/Date:</div>
                                            <div class="card_template-sub with_input d-flex justify-content-center align-items-center"">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_template-body-middle">
                               
                                    <div class="col-md-12 mb-3">
                                        <div class="table-responsive YCMS_repeater">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center" style="width:3%">STT</th>
                                                        <th scope="col" class="text-center" style="width: 25%">Tên, chủng loại, quy cách hàng hóa (Đính kèm hình ảnh, mô tả nếu có)</th>
                                                        <th scope="col" class="text-center" style="width: 7%">Số lượng</th>
                                                        <th scope="col" class="text-center" style="width: 5%">ĐVT</th>
                                                        <th scope="col" class="text-center" style="width: 15%">MĐ sử dụng & T.gian hoàn thành</th>
                                                        <th scope="col" class="text-center" style="width: 15%">NCC tốt nhất (Tên, sđt, đc)</th>
                                                        <th scope="col" class="text-center" style="width: 15%">Đơn giá (VNĐ)</th>
                                                        <th scope="col" class="text-center" style="width: 15%">Tổng tiền (VNĐ)</th>
                                                        {{-- <th scope="col" style="width:3%"></th> --}}
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody data-repeater-list="YCMS_list">
                                                    <tr data-repeater-item>
                                                        <td scope="row" class="text-center">
                                                            <div>
                                                                1
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="text" value="Hàng thiết yếu" class="form-control" />
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="text-center">
                                                                <input type="text" value="2" class="form-control" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="text" value="Cái" class="form-control" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="text" value="22" class="form-control" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                           <div> 
                                                                <input type="text" value="Nhà cung cấp mẫu"class="form-control" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="text" value="10.000.000"style="text-align: right;" class="form-control" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <input type="text" value="20.000.000"style="text-align: right;"  class="form-control" />
                                                            </div>
                                                        </td>
                                                        {{-- <td>
                                                            <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="15px" height="15px" />
                                                        </td> --}}
                                                    </tr>
                                                    
                                                </tbody>
                                                {{-- <tr>
                                                    <td colspan="9">
                                                        <span role="button" class="fs-5 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></span>
                                                    </td>
                                                </td> --}}
                                                <tr>
                                                    <td colspan="7" class="text-center fw-bold">Tổng (chưa VAT)</td>
                                                    <td colspan="2">
                                                        <div>
                                                            <input type="text" value="10.000.000" class="form-control">
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td colspan="7" class="text-center fw-bold">Tổng (có VAT)</td>
                                                    <td colspan="2">
                                                        <div>
                                                            <input type="text" value="12.000.000" class="form-control">
                                                        </div>
                                                    </td>

                                                </tr>
                                            </table>
                                            
                                        </div>
                                    </div>

                                    <div class="mb-3 col-12">
                                        <div class="card_template-title  with_form">
                                            <div class="text-nowrap">Tệp đính kèm/Attached files:</div>
                                            
                                        </div> 
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <div class="d-flex flex-column">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="upload_wrapper-items">
                                                    <input type="hidden" name="uploadedFiles[]" value="" />
                                                    <button role="button" type="button" class="btn position-relative border d-flex">
                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/upload-file.svg') }}" />
                                                        <span class="ps-2">Chọn file đính kèm</span>
                                                        <input role="button" type="file" class="modal_upload-input modal_upload-file" name="files[]" multiple onchange="updateList(event)" />
                                                    </button>
                                                    <ul class="modal_upload-list" style="max-height: 200px; overflow-y: scroll; overflow-x: hidden;"></ul>
                                                    {{-- <div class="d-flex align-items-center justify-content-end">
                                                        <button type="submit" class="btn btn-outline-danger">Tải
                                                            file
                                                        </button>
                                                    </div> --}}
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="card_template-title text-center">Người đề nghị/</div>
                                        <div class="card_template-title text-center">Applicant</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="card_template-title fw-normal">
                                                {{ Session::get('user')['name'] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phụ trách bộ phận/</div>
                                        <div class="card_template-title text-center">Head of Department</div>

                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-primary fs-6" data-bs-toggle="modal" data-bs-target="#confirmSign">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="card_template-title text-center">Bộ phận mua hàng/</div>
                                        <div class="card_template-title text-center">Purchasing Department</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-primary fs-6" data-bs-toggle="modal" data-bs-target="#confirmSign">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="card_template-title text-center">Người thực hiện mua/</div>
                                        <div class="card_template-title text-center">Purchaser</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-primary fs-6" data-bs-toggle="modal" data-bs-target="#confirmSign">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Phê duyệt/</div>
                                        <div class="card_template-title text-center">Approved by</div>
                                        <div class=" d-flex align-items-center justify-content-center" style="height: 100px; ">
                                            <div class="">
                                                <button type="button" class="btn btn-outline-primary fs-6" data-bs-toggle="modal" data-bs-target="#confirmSign">Chèn chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card_template-footer">
                            <a href="/yeu-cau-mua-sam" type="button" class="btn btn-outline-danger ps-5 pe-5">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarDeXuat.sidebarRight')


    {{-- Modal Confirm --}}
    <div class="modal fade" id="conFirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Xác nhận yêu cầu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="" id="myForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div>Bạn đã chắc chắn với thông tin đề nghị chưa</div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Xem lại</button>
                        <button type="button" class="btn btn-danger">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Sign --}}
    <div class="modal fade" id="confirmSign" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Ý kiến phản hồi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="" id="myForm">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-12 col-md-12 d-flex justify-content-between align-items-center funkyradio">
                                <div class="funkyradio-danger">
                                    <input type="radio" name="radio" id="confirmRadio" />
                                    <label for="confirmRadio">Xác nhận</label>
                                </div>
                                <div class="funkyradio-danger">
                                    <input type="radio" name="radio" id="destroyRadio" />
                                    <label for="destroyRadio">Từ chối</label>
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-md-12">
                                <textarea name="" id="" cols="5" class="form-control" placeholder="Nhập ý kiến"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pe-5 ps-5">Ký</button>
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
        let input = document.getElementById('file-upload');
  let infoArea = document.getElementById('file-upload-filenames');

  input.addEventListener('change', showFileNames);

  function showFileNames(event) {
    // Lấy input đang xử lý
    let input = event.srcElement;
    
    // Lấy danh sách các file đã chọn
    let files = input.files;
    
    // Hiển thị tên các file lên trên giao diện
    for (let i = 0; i < files.length; i++) {
      let fileName = files[i].name;
      let div = document.createElement('div');
      div.textContent = fileName;
      infoArea.appendChild(div);
    }
  }

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
