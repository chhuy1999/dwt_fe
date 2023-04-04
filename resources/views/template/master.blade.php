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
    <title>@yield('title') - Mastertran</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.jpg') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />

    <!-- Plugins -->
    <link href="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.css') }}" />

    {{-- toastify --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Base -->
    <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    @yield('header-style')
</head>

<body>
    <div class="wrapper">
        <!-- Pre-Loader Page -->
        {{-- <span id="loader" class="loader"></span> --}}
        <!-- End Pre-Loader Page -->

        <header id="header" class="header fixed-top" data-scrollto-offset="0">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="header_logo">
                    <a href="/" class="navbar-brand d-flex align-items-center scrollto me-auto me-lg-0">
                        <img class="header_logo" src="{{ asset('assets/img/logo-notext.jpg') }}" />
                    </a>
                </div>

                <div class="header_menu-wrapper d-flex">
                    <!-- HEADER_MENU -->
                    <!-- Menu Desktop -->
                    <div class="header_menu">
                        <ul class="header_menu-list">
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="">
                                    <i class="bi bi-compass"></i>
                                    <span>Kế hoạch & Giao việc</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="#" class="header_submenu-link">Kế hoạch</a>
                                        {{--                                        <a href="ke-hoach" class="header_submenu-link">Kế hoạch</a> --}}
                                    </li>
                                    @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                        <li class="header_submenu-items more position-relative">
                                            <a href="#" class="header_submenu-link more_btn">
                                                Giao Việc <i class="bi bi-chevron-right"></i>
                                            </a>
                                            <ul class="header_more">
                                                <li class="header_more-item">
                                                    <a href="{{ route('assignTask.list') }}" class="header_more-link">Giao việc định mức</a>
                                                </li>
                                                <li class="header_more-item">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#giaoNhiemVuPhatSinhGlobal" class="header_more-link">Giao việc phát sinh</a>
                                                </li>

                                            </ul>
                                        </li>
                                    @endif

                                </ul>
                            </li>

                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-people"></i>
                                    <span>Họp đơn vị</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items more position-relative">
                                        <a href="#" class="header_submenu-link more_btn">
                                            Giao ban <i class="bi bi-chevron-right"></i>
                                        </a>
                                        <ul class="header_more">
                                            @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                                                <li class="header_more-item">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#taoCuocHop" class="header_more-link">Tạo cuộc họp</a>
                                                </li>
                                            @endif
                                            <li class="header_more-item">
                                                <a href="" data-bs-toggle="modal" data-bs-target="#thamGiaCuocHop" class="header_more-link">Tham gia họp</a>
                                            </li>
                                            <li class="header_more-item">
                                                <a href="/danh-sach-cuoc-hop/cuoc-hop-dang-dien-ra" class="header_more-link">Cuộc họp đang diễn ra</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="/kho-luu-tru-bien-ban-hop" class="header_submenu-link">Kho biên bản</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="header_menu-item">
                                <a class="header_menu-link" href="quan-ly-nhan-su">
                                    <i class="bi bi-person-add"></i>
                                    <span>Quản lý nhân sự</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="#" class="header_submenu-link">Tuyển dụng</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="#" class="header_submenu-link">Đánh giá nhân viên</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-journal-arrow-up"></i>
                                    <span>DWT & KPI</span>
                                </a>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-shield-lock"></i>
                                    <span>Kiểm soát NV & CV</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="su-co-phat-sinh" class="header_submenu-link">Sự cố phát sinh</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="phan-anh" class="header_submenu-link">Phản ánh</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-list-check"></i>
                                    <span>Xét duyệt</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Sự việc và ý
                                            kiến</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="xet-duyet-chi-tieu-mua-sam" class="header_submenu-link">Chi tiêu mua
                                            sắm</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Công tác</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Văn bản</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-ui-checks-grid"></i>
                                    <span>Đề xuất</span>
                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Sự việc và ý
                                            kiến</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Chi tiêu mua sắm</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Công tác</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Văn bản</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link" href="#">
                                    <i class="bi bi-share"></i>
                                    <span>VBĐH tham khảo</span>
                                </a>
                            </li>
                            <li class="header_menu-item">
                                <a class="header_menu-link active" aria-current="page" href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>Cấu hình</span>

                                </a>
                                <ul id="header_submenu">
                                    <li class="header_submenu-items more position-relative">
                                        <a href="#" class="header_submenu-link more_btn">
                                            Hồ sơ đơn vị <i class="bi bi-chevron-right"></i>
                                        </a>
                                        <ul class="header_more">
                                            <li class="header_more-item">
                                                <a href="{{ route('department.list') }}" class="header_more-link">Cơ cấu đơn vị</a>
                                            </li>
                                            <li class="header_more-item">
                                                <a href="{{ route('position.list') }}" class="header_more-link">Danh sách vị
                                                    trí</a>
                                            </li>
                                            {{-- <li class="header_more-item">
                                                <a href="{{ route('positionOri.list') }}" class="header_more-link">Danh sách cấp
                                                    tổ chức</a>
                                            </li> --}}
                                            <li class="header_more-item">
                                                <a href="{{ route('positionLevel.list') }}" class="header_more-link">Danh sách cấp
                                                    nhân sự</a>
                                            </li>
                                            <li class="header_more-item">
                                                <a href="{{ route('equimentPack.list') }}" class="header_more-link">Danh mục gói
                                                    trang bị</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header_submenu-items more position-relative">
                                        <a href="ho-so-nhan-vien" class="header_submenu-link more_btn">
                                            Hồ sơ nhân viên <i class="bi bi-chevron-right"></i>
                                        </a>
                                        <ul class="header_more">
                                            <li class="header_more-item">
                                                <a href="{{ route('user.list') }}" class="header_more-link">Danh sách
                                                    thành viên</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="mo-ta-cong-viec" class="header_submenu-link">Mô tả công việc</a>
                                    </li>
                                    <li class="header_submenu-items more position-relative">
                                        <a href="#" class="header_submenu-link more_btn">
                                            Định mức lao động <i class="bi bi-chevron-right"></i>
                                        </a>
                                        <ul class="header_more">
                                            <li class="header_more-item">
                                                <a href="{{ route('target.list') }}" class="header_more-link">Định mức</a>
                                            </li>
                                            <li class="header_more-item">
                                                <a href="{{ route('targetDetail.list') }}" class="header_more-link">Mẫu nhiệm vụ</a>
                                            </li>
                                            <li class="header_more-item">
                                                <a href="{{ route('key.list') }}" class="header_more-link">Chỉ số kinh
                                                    doanh</a>
                                            </li>
                                            {{-- <li class="header_more-item">
                                                <a href="" class="header_more-link">Danh mục đơn
                                                    vị tính</a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Quy trình</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">KPI</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Phân quyền</a>
                                    </li>
                                    <li class="header_submenu-items">
                                        <a href="" class="header_submenu-link">Chữ ký</a>
                                    </li>
                                    <li class="header_submenu-items more position-relative">
                                        <a href="#" class="header_submenu-link more_btn">
                                            Biểu đồ <i class="bi bi-chevron-right"></i>
                                        </a>
                                        <ul class="header_more">
                                            <li class="header_more-item">
                                                <a href="danh-muc-dinh-muc" class="header_more-link">Danh sách key
                                                    chart</a>
                                            </li>
                                            <li class="header_more-item">
                                                <a href="danh-muc-dinh-muc" class="header_more-link">Danh sách
                                                    chart</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu Mobile -->
                    <label for="header_mobile-check" class="header_mobile-bars">
                        <i class="bi bi-list"></i>
                    </label>

                    <input type="checkbox" hidden class="header_input" id="header_mobile-check" />

                    <label for="header_mobile-check" class="header_overlay"></label>
                    <div class="header_menu-mobile">
                        <ul class="header_menu-mobile-list">
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link active" aria-current="page" href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>Cấu hình</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-person-add"></i>
                                    <span>Quản lý nhân sự</span>
                                </a>
                            </li>

                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-people"></i>
                                    <span>Họp đơn vị</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-compass"></i>
                                    <span>Kế hoạch & Giao việc</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-journal-arrow-up"></i>
                                    <span>DWT & KPI</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-shield-lock"></i>
                                    <span>Kiểm soát NV & CV</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-list-check"></i>
                                    <span>Xét duyệt</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-ui-checks-grid"></i>
                                    <span>Đề xuất</span>
                                </a>
                            </li>
                            <li class="header_menu-mobile-item">
                                <a class="header_menu-mobile-link" href="#">
                                    <i class="bi bi-share"></i>
                                    <span>VBĐH tham khảo</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END HEADER_MENU -->
                </div>

                <div class="header_actions-wrapper d-flex align-items-center dropdown">
                    <div class="header_actions-chat">
                        <span class="header_icons" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer" id="dropdownActions">
                            <i class="bi bi-question-circle"></i>
                        </span>
                        <ul class="dropdown-menu header_actions-notification-list p-0" aria-labelledby="dropdownActions">
                            <div class="header_actions-notification-heading bg-light">Hỗ trợ</div>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        Công bố nhân viên xuất sắc quý 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        Công bố nhân viên xuất sắc quý 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        Công bố nhân viên xuất sắc quý 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_actions-notification">
                        <span class="header_icons" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer" id="dropdownNotification">
                            <i class="bi bi-bell"></i>
                        </span>
                        <ul class="dropdown-menu header_actions-notification-list" aria-labelledby="dropdownNotification">
                            <div class="header_actions-notification-heading bg-light">Thông báo</div>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        Công bố nhân viên xuất sắc quý 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        Công bố nhân viên xuất sắc quý 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên
                                    </div>
                                </a>
                            </li>
                            <li class="header_actions-notification-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <div class="header_actions-notification-title">
                                        Công bố nhân viên xuất sắc quý 1
                                    </div>
                                    <div class="header_actions-notification-desc">
                                        Nhân viên xuất sắc nhất quý 1 là bạn gì đấy Nhân viên
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header_user dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="header_user-img" src="{{ asset('assets/img/avatar.jpeg') }}" />
                        </button>
                        <ul class="dropdown-menu header_user-list" aria-labelledby="dropdownUser">
                            <li class="header_user-item">
                                <a class="dropdown-item" href="thong-tin-ca-nhan">
                                    <i class="bi bi-person-vcard"></i>
                                    <span>Thông tin</span>
                                </a>
                            </li>
                            <li class="header_user-item">
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-gear"></i>
                                    <span>Cài đặt</span>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li class="header_user-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Đăng xuất</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="pageWithSidebar">
            @yield('content')
        </div>

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
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Vị trí">
                                    <select class="form-select" disabled title="Vị trí" id="report-dp" name="departement_id">

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
    <div class="modal fade" id="taoCuocHop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            </div>
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
    </div>

    {{-- Tham gia cuộc họp --}}
    <div class="modal fade" id="thamGiaCuocHop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>

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
                                <select class="selectpicker" data-live-search="true" data-size="5"  id="" title="Người đảm nhiệm" name="user_id">
                                    @foreach ($global_users as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class='selectpicker' title="Người liên quan" multiple data-live-search="true" data-size="5" name="involedPeople[]">
                                    @foreach ($global_users as $u)
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="repeater">
                                    <div data-repeater-list="kpiKeys">
                                        <div class="row" data-repeater-item>
                                            <div class="col-md-7 mb-3">
                                                <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true" name="id">
                                                    @foreach ($global_kpiKeys as $kpi)
                                                        <option value="{{ $kpi->id }}">{{ $kpi->name }}</option>
                                                    @endforeach
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

    {{-- momemtjs --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/style.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}"></script>

    @yield('footer-script')
    <script>
        let jwtToken2 = "{!! session()->get('token') !!}";


        // get list departments
        const fetchListDeparments = async () => {
            try {
                const resp = await fetch("https://sdwtbe.sweetsica.com/api/v1/departments", {
                    method: "GET",
                    headers: {
                        'Authorization': 'Bearer ' + jwtToken2,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });
                const data = await resp.json();
                const listDp = data.data.data;
                const selectDp = document.getElementById('report-dp');
                console.log(listDp);
                listDp.forEach(dp => {
                    const option = document.createElement('option');
                    option.value = dp.id;
                    option.text = dp.name;
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
                const resp = await fetch("https://sdwtbe.sweetsica.com/api/v1/users", {
                    method: "GET",
                    headers: {
                        'Authorization': 'Bearer ' + jwtToken2,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                });
                const data = await resp.json();
                const listUsers = data.data.data;
                console.log(listUsers)
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

</body>

</html>
