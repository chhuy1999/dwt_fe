<?php

//$template_path

date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

    <title>@yield('title') - {{ env('SLOGAN_URL', '') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ env('FAVICON_URL', '') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />

    <!-- Plugins -->
    <link href="{{ asset('/assets/plugins/jquery-datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.css') }}" />

    {{-- toastify --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Base -->
    <link href="{{ asset('/assets/css/normalize.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/variables.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet" />
    @yield('header-style')
</head>

<body>
    <div class="wrapper">
        <!-- Pre-Loader Page -->
        {{-- <span id="loader" class="loader"></span> --}}
        <!-- End Pre-Loader Page -->

        <div class="pageWithSidebar">
            @yield('content')
        </div>

        @include('template.components.sectionMenuMobile')

    </div><!-- End Wrapper -->

    <!-- Modal Vấn đề tồn đọng -->
    <div class="modal fade" id="neuvande" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('report.store') }}" method="POST">
                    @csrf

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-9 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Họ và tên" class="form-control form-control-plaintext" readonly id="staticEmail" style="text-indent: 8px" value="{{ session('user')['name'] }}">
                            </div>
                            <div class="col-sm-3 mb-3 position-relative">
                                <input data-bs-toggle="tooltip" data-bs-placement="top" title="Giờ tạo" value="<?php echo date('H:i'); ?>" readonly class="form-control" type="text" />
                                <i class="bi bi-alarm style_pickdate-two"></i>
                            </div>
                            <div class="col-sm-9 mb-3">
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị">
                                    <select class="form-select" title="Chọn đơn vị" id="report-dp" name="departement_id">

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-3 position-relative">
                                <input data-bs-toggle="tooltip" data-bs-placement="top" title="Thời gian" readonly value="<?php echo date('d/m/Y'); ?>" class="form-control" type="text" />
                                <i class="bi bi-calendar-plus style_pickdate-two"></i>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <textarea name="problem" class="form-control" placeholder="Vấn đề tồn đọng"></textarea>
                            </div>
                            <div class="col-sm-7 mb-3">
                                <select class="selectpicker" title="Phân loại">
                                    <option value="1">Giải quyết</option>
                                    <option value="2">Than phiền</option>
                                </select>
                            </div>
                            <div class="col-sm-5 mb-3 position-relative">
                                <input id="thoiHanVanDeTonDong" placeholder="Thời hạn" class="form-control" type="text" name="deadline" />
                                <i class="bi bi-calendar-plus style_pickdate-two"></i>
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

    {{-- Tạo cuộc họp --}}
    {{-- <div class="modal fade" id="taoCuocHop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Tạo cuộc họp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/giao-ban" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-9 mb-3">
                                <input type="text" class="form-control" placeholder="Tên cuộc họp" name="title">
                            </div>
                            <div class="col-sm-3 mb-3">
                                <select class="selectpicker" data-size="5" title="Loại cuộc họp" name="type">
                                    <option value="Ngày">Ngày</option>
                                    <option value="Tuần">Tuần</option>
                                    <option value="Tháng">Tháng</option>
                                    <option value="Quý">Quý</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị">
                                <select class="form-select" data-size="5" title="Đơn vị" id="meet-dp-list" name="departement_id">

                                </select>
                            </div>
                            <div class="col-sm-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Chủ trì">
                                <select class="form-select" data-size="5" title="Chủ trì" name="leader_id" id="user-select">

                                </select>
                            </div>
                            <div class="col-sm-4 mb-3 position-relative">
                                <input id="thoiGianCuoCHop" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cuộc họp" class="form-control" placeholder="Thời gian" name="start_time">
                                <i class="bi bi-calendar-plus style_pickdate"></i>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cuộc họp" readonly class="form-control" value="{{ time() }}" name="code">
                                {{-- <p>Mã cuộc họp: {{ time() }}</p> --}}
    {{-- </div>
                            <div class="col-sm-4 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Đặt mật khẩu" placeholder="Đặt mật khẩu (nếu có)" class="form-control" name="password">
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Tạo cuộc họp</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    {{-- Tham gia cuộc họp --}}
    {{-- <div class="modal fade" id="thamGiaCuocHop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Tham gia cuộc họp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/giao-ban/tham-gia" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-8 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cuộc họp" class="form-control" placeholder="Nhập mã cuộc họp" id="meetCode" name="code">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Nhập mật khẩu" placeholder="Nhập mật khẩu (nếu có)" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger" id="joinMeet">Tham gia cuộc họp</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <!-- Modal Giao việc phát sinh -->
    <div class="modal fade" id="giaoNhiemVuPhatSinhGlobal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Giao nhiệm vụ phát sinh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('reportTask.store') }}", method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <input type="text" class="form-control" placeholder="Tên nhiệm vụ" name="name">
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Thời hạn" data-bs-original-title="Thời hạn">
                                    <input id="giaoNhiemVuPhatSinhGiaoViecGlobal" placeholder="Thời hạn" class="form-control" type="text" name="deadline">
                                    <i class="bi bi-calendar-plus style_pickdate"></i>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <textarea class="form-control" rows="1" placeholder="Mô tả/Diễn giải" name="description"></textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="number" class="form-control" min="0" step="0.05" oninput="onInput(this)" placeholder="Manday" id="title" name="manDay">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="selectpicker" data-live-search="true" data-size="5" id="" title="Người đảm nhiệm" name="user_id">
                                    @if (session('listUsers'))
                                        @foreach (session('listUsers') as $u)
                                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class='selectpicker' title="Người liên quan" multiple data-live-search="true" data-size="5" name="involedPeople[]">
                                    @if (session('listUsers'))
                                        @foreach (session('listUsers') as $u)
                                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="repeater">
                                    <div data-repeater-list="kpiKeys">
                                        <div class="row" data-repeater-item>
                                            <div class="col-md-7 mb-3">
                                                <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true" name="id">
                                                    @if (session('listKpiKeys'))
                                                        @foreach (session('listKpiKeys') as $kpi)
                                                            <option value="{{ $kpi->id }}">{{ $kpi->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <input type="number" min="0" class="form-control" placeholder="Giá trị" name="quantity" />
                                            </div>
                                            <div class="col-md-1 mb-3 d-flex align-items-center">
                                                <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-start">
                                            <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Giao</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        //IMPORTANT: GLOBAL VARIABLE CAN USE EVERY WHERE
        const JWT_TOKEN = "{!! session()->get('token') !!}";
        const USER = {!! json_encode(session()->get('user')) !!};
        const API_URL = "{!! env('API_URL') !!}";
    </script>

    {{-- momemtjs --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/style.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/style-mobile.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>


    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}"></script>

    @yield('footer-script')
    <script>
        // const API_URL
        // get list departments
        const fetchListDeparments = async () => {
            try {
                const resp = await fetch(API_URL + "/departments", {
                    method: "GET",
                    headers: {
                        'Authorization': 'Bearer ' + JWT_TOKEN,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });
                const data = await resp.json();
                const listDp = data.data.data;
                const selectDp = document.getElementById('report-dp');
                listDp.forEach(dp => {
                    const option = document.createElement('option');
                    option.value = dp.id;
                    option.text = dp.name;
                    if (dp.id === USER.departement_id) {
                        console.log("selected", dp.name, dp.id, USER.departement_id);
                        option.selected = true;
                    }
                    selectDp.appendChild(option);
                });

                const selectDp2 = document.getElementById('meet-dp-list');

                listDp.forEach(dp => {
                    const option = document.createElement('option');
                    option.value = dp.id;
                    option.text = dp.name;
                    selectDp2.appendChild(option);
                });
            } catch (err) {
                console.log(err);
                return []
            }
        }

        const userSelect = document.getElementById('user-select');
        const fetchUsers = async () => {
            try {
                const resp = await fetch(API_URL + "/users", {
                    method: "GET",
                    headers: {
                        'Authorization': 'Bearer ' + JWT_TOKEN,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });
                const data = await resp.json();
                const listUsers = data.data.data;

                listUsers.forEach(user => {
                    const option = document.createElement('option');
                    option.value = user.id;
                    option.text = user.name;
                    userSelect.appendChild(option);
                });
            } catch (err) {
                console.log(err);
                return []
            }
        }
        $(document).ready(function() {
            fetchListDeparments();
            fetchUsers();
        });
    </script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    {{-- show toastify --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        @if (Session::has('success'))
            Toastify({

                text: "{!! session('success') !!}",
                duration: 3000,
                stopOnFocus: true,

            }).showToast();
        @endif

        @if (Session::has('error'))
            Toastify({

                text: "{!! session('error') !!}",
                // gravity: "top", // `top` or `bottom`
                // position: "center"
                duration: 3000,
                stopOnFocus: true,
                style: {
                    background: "#FE6244",
                },

            }).showToast();
        @endif

        @if (isset($error))
            Toastify({

                text: "{!! $error !!}",
                // gravity: "top", // `top` or `bottom`
                // position: "center"
                duration: 3000,
                stopOnFocus: true,
                style: {
                    background: "#FE6244",
                },

            }).showToast();
        @endif
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var elements = document.getElementsByTagName("INPUT");
            for (var i = 0; i < elements.length; i++) {
                elements[i].oninvalid = function(e) {
                    e.target.setCustomValidity("");
                    if (!e.target.validity.valid) {
                        e.target.setCustomValidity("Trường này không được để trống");
                    }
                };
                elements[i].oninput = function(e) {
                    e.target.setCustomValidity("");
                };
            }
        })
    </script>

    <script>
        $(document).ready(function() {
            $.datetimepicker.setLocale('vi');
            $('#thoiGianCuoCHop').datetimepicker({
                format: 'd/m/Y H:i',
                timepicker: true,
            });
            $('#giaoNhiemVuPhatSinhGiaoViecGlobal').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $('#thismonth').daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                startDate: new Date(),
                locale: {
                    format: 'H:mm - DD/MM/YYYY '
                }
            });

        });
    </script>

    <script>
        // Tắt gợi ý trong form
        $(document).ready(function() {
            $('form').attr('autocomplete', 'off');
        });
    </script>
</body>

</html>
