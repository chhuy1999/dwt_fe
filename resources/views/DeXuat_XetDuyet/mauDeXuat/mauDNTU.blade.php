@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Mẫu đề nghị tạm ứng')

@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
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
                                        <div class="card_template-title fst-italic">BM002.QT07/20</div>
                                    </div>
                                    <div class="col-8 d-flex align-items-center justify-content-center flex-column">
                                        <div class="card_template-heading">Đề nghị tạm ứng</div>
                                        <div class="card_template-heading-mini">Request for advance</div>
                                        <div class="card_template-heading-mini">Mã: {{ time() }}</div>

                                    </div>
                                    <div class="col-2">
                                        <div
                                            class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Số/No:</div>
                                            <div
                                                class="card_template-sub with_input d-flex justify-content-center align-items-center"">
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div
                                            class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Ngày/Date:</div>
                                            <div
                                                class="card_template-sub with_input d-flex justify-content-center align-items-center"">
                                                <input type="text" placeholder="" class="form-control datePicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_template-body-middle">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Người đề nghị/Requester:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Bộ phận/Department:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Đề nghị tam ứng số tiền/Amount of Advance:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                        <div class="card_template-mini with_form mt-3">

                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Lý do tạm ứng/ Reason of Advance</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Hình thức tạm ứng/Advance Method:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Thời hạn hoàn ứng/Deadline for rembursement:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Người nhận tiền/Receiver:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Số tài khoản/Account number:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Tại ngân hàng/with bank:</div>
                                            <span class="card_template-sub with_input">
                                                <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                    class="form-control">
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

                                    <div class="mb-3 col-12">
                                        <div class="card_template-title  with_form">
                                            <div class="text-nowrap">Tệp đính kèm/Attached files:</div>

                                        </div>
                                    </div>

                                    <div class="col-md-5 mt-3 mb-3">
                                        <div class="d-flex flex-column">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="upload_wrapper-items">
                                                    <input type="hidden" name="uploadedFiles[]" value="" />
                                                    <button role="button" type="button"
                                                        class="btn position-relative border d-flex">
                                                        <img style="width:16px;height:16px"
                                                            src="{{ asset('assets/img/upload-file.svg') }}" />
                                                        <span class="ps-2">Chọn file đính kèm</span>
                                                        <input role="button" type="file"
                                                            class="modal_upload-input modal_upload-file" name="files[]"
                                                            multiple onchange="updateList(event)">
                                                    </button>
                                                    <ul class="modal_upload-list"
                                                        style="max-height: 200px; overflow-y: scroll; overflow-x: hidden;">
                                                    </ul>
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
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col">
                                        <div class="card_template-title text-center mb-3">Người đề nghị tam ứng</div>
                                        <div class=" d-flex align-items-center justify-content-center"
                                            style="height: 100px; ">
                                            <div class="">
                                                <button id="showImageBtn" type="button"
                                                    class="btn btn-outline-primary fs-6">Chèn chữ ký</button>
                                                <img id="signatureImg" width="100" style="display: none;"
                                                    src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center mb-3">Phụ trách bộ phận</div>
                                        <div class=" d-flex align-items-center justify-content-center"
                                            style="height: 100px; ">
                                            <div class="">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center mb-3">Kế toán thanh toán</div>
                                        <div class=" d-flex align-items-center justify-content-center"
                                            style="height: 100px; ">
                                            <div class="">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center mb-3">Kế toán trưởng</div>
                                        <div class=" d-flex align-items-center justify-content-center"
                                            style="height: 100px; ">
                                            <div class="">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card_template-title text-center mb-3">Phê duyệt</div>
                                        <div class=" d-flex align-items-center justify-content-center"
                                            style="height: 100px; ">
                                            <div class="">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <div class="col-8 d-flex align-items-center justify-content-center flex-column">
                                        <div class="card_template-heading">Bảng kê đề nghị</div>
                                        <div class="card_template-heading-mini">Mã: {{ time() }}-BK</div>
                                    </div>
                                    <div class="col-2 card_template-topRight">
                                        <div
                                            class="card_template-title fst-italic d-flex align-items-center justify-content-center">
                                            <div class="text-nowrap">Ngày/Date:</div>
                                            <div
                                                class="card_template-sub with_input d-flex justify-content-center align-items-center">
                                                <input type="text" placeholder="" class="form-control datePicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card_template-body-middle">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Người đề nghị/Requester:</div>
                                            <span class="card_template-sub  with_input">
                                                <input type="text" placeholder="" class="form-control">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <div class="card_template-title with_form">
                                            <div class="text-nowrap">Công việc:</div>
                                            <span class="card_template-sub  with_input">
                                                <input type="text" placeholder="" class="form-control">
                                            </span>
                                        </div>
                                    </div>

                                    <div class="table-responsive DNTU_repeater">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" style="width:2%">STT</th>
                                                    <th scope="col" class="text-center" style="width:10%">Số chứng từ
                                                    </th>
                                                    <th scope="col" class="text-center" style="width:33%">Nội dung
                                                    </th>
                                                    <th scope="col" class="text-center" style="width:17%">Số tiền</th>
                                                    <th scope="col" class="text-center" style="width:36%">Ghi chú</th>
                                                    <th scope="col" class="text-center" style="width:2%">
                                                        <span></span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody data-repeater-list="DNTU_list">
                                                <tr data-repeater-item>
                                                    <td scope="row" class="text-center">
                                                        <div>
                                                            1
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                                class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                                class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                                class="form-control text-end">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <input type="text" placeholder="(Vui lòng nhập nội dung)"
                                                                class="form-control">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <img data-repeater-delete role="button"
                                                                src="{{ asset('/assets/img/trash.svg') }}" width="15px"
                                                                height="15px" />
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
                                        <div class="d-flex justify-content-start">
                                            <div role="button" class="fs-5 text-danger" data-repeater-create><i
                                                    class="bi bi-plus-circle"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card_template-body-bottom">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="card_template-title text-center">Người đề nghị</div>
                                        <div class=" d-flex align-items-center justify-content-center"
                                            style="height: 100px; ">
                                            <div class="">
                                                <button id="showImageBtn" type="button"
                                                    class="btn btn-outline-primary fs-6">Chèn chữ ký</button>
                                                <img id="signatureImg" width="100" style="display: none;"
                                                    src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card_template-footer">
                            <a href="/de-xuat-theo-mau" type="button"
                                class="btn btn-outline-danger ps-5 pe-5 me-3">Hủy</a>
                            <button type="button" class="btn btn-danger ps-5 pe-5" data-bs-toggle="modal"
                                data-bs-target="#conFirm">Gửi</button>
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
                        <a href="/xem/de-nghi-tam-ung/id" type="button" class="btn btn-danger">Gửi</a>
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
                            <div
                                class="mb-3 col-12 col-md-12 d-flex justify-content-between align-items-center funkyradio">
                                <div class="funkyradio-danger">
                                    <input type="radio" name="radio" id="confirmRadio" />
                                    <label for="confirmRadio">Xác nhận</label>
                                </div>
                                <div class="funkyradio-danger">
                                    <input type="radio" name="radio" id="destroyRadio" />
                                    <label for="destroyRadio">Từ chối</label>
                                </div>
                            </div>

                            <div class="mb-3 col-12 col-md-12 showSign">
                                <img width="100" src="{{ asset('/assets/img/sign-temp.jpg') }}" />
                            </div>

                            <div class="mb-3 col-12 col-md-12 showFormYKien">
                                <textarea name="" id="" cols="5" class="form-control" placeholder="Nhập ý kiến"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pe-5 ps-5">Xác nhận</button>
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

    <script>
        $(document).ready(function() {

            $('.datePicker').daterangepicker({
                singleDatePicker: true,
                timePicker: false,
                startDate: new Date(),
                locale: {
                    format: 'DD/MM/YYYY '
                }
            });

        });
    </script>


    <script>
        const showImageBtn = document.getElementById('showImageBtn');
        const signatureImg = document.getElementById('signatureImg');

        showImageBtn.addEventListener('click', () => {
            showImageBtn.style.display = 'none';
            signatureImg.style.display = 'block';
        });
    </script>


    <script>
        $(document).ready(function() {
            // Hide the text areas initially
            $('.showSign, .showFormYKien').hide();

            // Attach event listeners to radio buttons using a loop
            $('input[type="radio"][name="radio"]').each(function() {
                $(this).click(function() {
                    var selectedRadio = $(this).attr('id');

                    if (selectedRadio === 'confirmRadio') {
                        $('.showSign').show();
                        $('.showFormYKien').hide();
                    } else if (selectedRadio === 'destroyRadio') {
                        $('.showFormYKien').show();
                        $('.showSign').hide();
                    }
                });
            });
        });
    </script>
@endsection
