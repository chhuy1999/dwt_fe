@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Biên bản họp Giao Ban')

@section('header-style')
    <style>
        .mainSection_width-select {
            width: 140px !important;
            border: none;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light {
            padding: 5px 0;
            background-color: transparent;
            outline: none;
            border: none;
        }

        .style_input {
            background-color: transparent;
            outline: none;
            border: none;
            box-shadow: none !important;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light:hover {
            background-color: transparent;
            outline: none;
            border: none;
            box-shadow: none;
        }

        .bootstrap-select>.dropdown-toggle:after {
            display: none;
        }

        .style_input {
            border: none;
            background-color: transparent;
            font-size: 1.1rem;
            box-shadow: none;
            outline: none;
        }

    </style>
@endsection

@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading d-flex align-items-center justify-content-between">
                        <div class="mainSection_card position-relative">
                            <div class="mainSection_content row">
                                <div class="col-sm-4">Đơn vị: </div>
                                <div class="col-sm-8">
                                    <strong>Kế toán</strong>
                                </div>
                            </div>
                            <div class="mainSection_content row">
                                <div class="col-sm-4">Chủ trì: </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker mainSection_width-select" data-actions-box="true"
                                        data-live-search="true" title="Chọn chủ trì..."
                                        data-live-search-placeholder="Tìm kiếm...">
                                        <option>Nguyễn Ngọc Bảo</option>
                                        <option>Đặng Nguyễn Lam Mai</option>
                                        <option>Hồ Thị Hồng Vân</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mainSection_heading-title">
                                    Biên bản họp Giao Ban
                                </h5>
                            </div>
                            <div>
                                <select class="form-select form-select-lg ms-2 style_input fw-bolder">
                                    <option>Ngày</option>
                                    <option>Tuần</option>
                                    <option>Tháng</option>
                                    <option>Quý</option>
                                </select>
                            </div>
                        </div>

                        <div id="mainSection_width"
                            class="mainSection_thismonth position-relative d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">

                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title">Tổng quan</div>
                                            </div>
                                            <div class="form-control" style="padding: 0.5rem 0.75rem;">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/time.svg') }}" />
                                                            </div>
                                                            <div id="date_time-hopgiaoban"
                                                                class="d-flex align-items-center justify-content-between datetimepicker_wrapper">
                                                                <input id="datetimepicker" value="<?php echo date('d/m/Y h:m'); ?>"
                                                                    class="form-control" type="text">
                                                                <div class="datetimepicker_separate">-</div>
                                                                <input id="datetimepicker2" value="<?php echo date('d/m/Y h:m'); ?>"
                                                                    class="form-control" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/muiten.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <textarea name="" id="" rows="1" cols="" class="form-control"
                                                                    placeholder="Nhập chủ đề/mục tiêu cuộc họp"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/pencil.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <select class="selectpicker" multiple
                                                                    data-actions-box="true" data-width="100%"
                                                                    data-live-search="true" title="Chọn thư ký..."
                                                                    data-select-all-text="Chọn tất cả"
                                                                    data-deselect-all-text="Bỏ chọn" data-size="3"
                                                                    data-selected-text-format="count > 1"
                                                                    data-count-selected-text="Có {0} Thư ký"
                                                                    data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Nguyễn Ngọc Bảo</option>
                                                                    <option>Đặng Nguyễn Lam Mai</option>
                                                                    <option>Hồ Thị Hồng Vân</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <img style="height:14px; width:14px; margin-right:6px"
                                                                    src="{{ asset('assets/img/person-check.svg') }}" />
                                                            </div>
                                                            <div style="flex:1">
                                                                <select class="selectpicker" multiple
                                                                    data-actions-box="true" data-width="100%"
                                                                    data-live-search="true" title="Chọn thành viên..."
                                                                    data-select-all-text="Chọn tất cả"
                                                                    data-deselect-all-text="Bỏ chọn" data-size="3"
                                                                    data-selected-text-format="count > 1"
                                                                    data-count-selected-text="Có {0} thành viên"
                                                                    data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Nguyễn Ngọc Bảo</option>
                                                                    <option>Đặng Nguyễn Lam Mai</option>
                                                                    <option>Hồ Thị Hồng Vân</option>
                                                                    <option>Nguyễn Thị Ngọc Lan</option>
                                                                    <option>Nguyễn Thị Hồng Oanh</option>
                                                                    <option>Hà Nguyễn Minh Hiếu</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title">Vấn đề tiếp nhận</div>
                                                <div class="alert alert-warning border-warning m-0"
                                                    style="padding: 0 6px">
                                                    <i class="bi bi-exclamation-triangle pe-2"></i><strong>03</strong>
                                                    vấn đề
                                                    tồn đọng
                                                </div>
                                            </div>

                                            <div class="table-responsive rounded">
                                                <table
                                                    class="table table-responsive table-hover table-bordered m-0 style_disableAll">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Vấn đề tồn đọng</th>
                                                            <th>Người nêu</th>
                                                            <th>Thời hạn</th>
                                                            <th>Tình trạng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal"
                                                                    data-bs-target="#phanHoiVanDe">Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="form-select style_input">
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã phản hồi</option>
                                                                    <option>Đã giải quyết</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    2
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal"
                                                                    data-bs-target="#phanHoiVanDe">Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="form-select style_input">
                                                                    <option>Đã phản hồi</option>
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã giải quyết</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    3
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal"
                                                                    data-bs-target="#phanHoiVanDe">Chưa hoàn thành
                                                                    báo cáo do
                                                                    abc chưa
                                                                    gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="form-select style_input">
                                                                    <option>Đã giải quyết</option>
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã phản hồi</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <div class="card-title mb-3">Nội dung trao đổi</div>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-md-12 col-lg-10 col-xl-12">
                                                <div class="row">
                                                    <div class="col-12" style="height: 240px; overflow-y: scroll;" >
                                                            <div class="d-flex flex-start">
                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                    src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar"
                                                                    width="50" height="50" />
                                                                <div class="flex-grow-1 flex-shrink-1">
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <p class="mb-1 fw-bolder fs-5">Nguyễn Ngọc Bảo</p>
                                                                        </div>
                                                                        <p class="mb-0">
                                                                            It is a long established fact that a reader will be
                                                                            distracted by
                                                                            the readable content of a page.
                                                                        </p>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="link-muted text-danger fs-6 me-4"><i
                                                                                    class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                            {{-- <a href="#"
                                                                                class="link-muted text-danger fs-6"><i
                                                                                    class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                            <a href="#" class="text-danger fs-6 me-4"><i
                                                                                    class="bi bi-reply"></i>Trả lời</span></a>
                                                                            <p class="fs-6 mb-1">5 phút trước</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment_replay-wrapper" style="display:none">
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        letters, as opposed to using 'Content here,
                                                                                        content here',
                                                                                        making it look like readable English.
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        the majority have suffered alteration in
                                                                                        some form, by
                                                                                        injected humour, or randomised words.
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
    
                                                            <div class="d-flex flex-start mt-4">
                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                    src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar"
                                                                    width="50" height="50" />
                                                                <div class="flex-grow-1 flex-shrink-1">
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <p class="mb-1 fw-bolder fs-5">
                                                                                Nguyễn Ngọc Bảo 
                                                                            </p>
    
                                                                        </div>
                                                                        <p class="mb-0">
                                                                            The standard chunk of Lorem Ipsum used since the
                                                                            1500s is
                                                                            reproduced below for those interested. Sections
                                                                            1.10.32 and
                                                                            1.10.33.
                                                                        </p>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="link-muted text-danger fs-6 me-4"><i
                                                                                    class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                            {{-- <a href="#"
                                                                                class="link-muted text-danger fs-6"><i
                                                                                    class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                            <a href="#" class="text-danger fs-6 me-4"><i
                                                                                    class="bi bi-reply"></i>Trả lời</span></a>
                                                                            <p class="fs-6 mb-1">5 phút trước</p>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="comment_replay-wrapper" style="display:none">
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        Cras sit amet nibh libero, in gravida nulla.
                                                                                        Nulla vel metus
                                                                                        scelerisque ante sollicitudin commodo. Cras
                                                                                        purus odio,
                                                                                        vestibulum in vulputate at, tempus viverra
                                                                                        turpis.
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        a Latin professor at Hampden-Sydney College
                                                                                        in Virginia,
                                                                                        looked up one of the more obscure Latin
                                                                                        words, consectetur
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        Autem, totam debitis suscipit saepe sapiente
                                                                                        magnam officiis
                                                                                        quaerat necessitatibus odio assumenda,
                                                                                        perferendis quae iusto
                                                                                        labore laboriosam minima numquam impedit
                                                                                        quam dolorem!
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
    
                                                            <div class="d-flex flex-start mt-4">
                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                    src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar"
                                                                    width="50" height="50" />
                                                                <div class="flex-grow-1 flex-shrink-1">
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <p class="mb-1 fw-bolder fs-5">
                                                                                Nguyễn Ngọc Bảo 
                                                                            </p>
    
                                                                        </div>
                                                                        <p class="mb-0">
                                                                            The standard chunk of Lorem Ipsum used since the
                                                                            1500s is
                                                                            reproduced below for those interested. Sections
                                                                            1.10.32 and
                                                                            1.10.33.
                                                                        </p>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="link-muted text-danger fs-6 me-4"><i
                                                                                    class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                            {{-- <a href="#"
                                                                                class="link-muted text-danger fs-6"><i
                                                                                    class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                            <a href="#" class="text-danger fs-6 me-4"><i
                                                                                    class="bi bi-reply"></i>Trả lời</span></a>
                                                                            <p class="fs-6 mb-1">5 phút trước</p>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="comment_replay-wrapper" style="display:none">
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        Cras sit amet nibh libero, in gravida nulla.
                                                                                        Nulla vel metus
                                                                                        scelerisque ante sollicitudin commodo. Cras
                                                                                        purus odio,
                                                                                        vestibulum in vulputate at, tempus viverra
                                                                                        turpis.
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        a Latin professor at Hampden-Sydney College
                                                                                        in Virginia,
                                                                                        looked up one of the more obscure Latin
                                                                                        words, consectetur
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        Autem, totam debitis suscipit saepe sapiente
                                                                                        magnam officiis
                                                                                        quaerat necessitatibus odio assumenda,
                                                                                        perferendis quae iusto
                                                                                        labore laboriosam minima numquam impedit
                                                                                        quam dolorem!
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex flex-start mt-4">
                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                    src="{{ asset('assets/img/avatar.jpeg') }}" alt="avatar"
                                                                    width="50" height="50" />
                                                                <div class="flex-grow-1 flex-shrink-1">
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <p class="mb-1 fw-bolder fs-5">
                                                                                Nguyễn Ngọc Bảo 
                                                                            </p>
    
                                                                        </div>
                                                                        <p class="mb-0">
                                                                            The standard chunk of Lorem Ipsum used since the
                                                                            1500s is
                                                                            reproduced below for those interested. Sections
                                                                            1.10.32 and
                                                                            1.10.33.
                                                                        </p>
                                                                        <div class="d-flex align-items-center">
                                                                            <a href="#"
                                                                                class="link-muted text-danger fs-6 me-4"><i
                                                                                    class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                            {{-- <a href="#"
                                                                                class="link-muted text-danger fs-6"><i
                                                                                    class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                            <a href="#" class="text-danger fs-6 me-4"><i
                                                                                    class="bi bi-reply"></i>Trả lời</span></a>
                                                                            <p class="fs-6 mb-1">5 phút trước</p>
                                                                        </div>
                                                                    </div>
    
                                                                    <div class="comment_replay-wrapper" style="display:none">
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        Cras sit amet nibh libero, in gravida nulla.
                                                                                        Nulla vel metus
                                                                                        scelerisque ante sollicitudin commodo. Cras
                                                                                        purus odio,
                                                                                        vestibulum in vulputate at, tempus viverra
                                                                                        turpis.
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        a Latin professor at Hampden-Sydney College
                                                                                        in Virginia,
                                                                                        looked up one of the more obscure Latin
                                                                                        words, consectetur
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
        
                                                                        <div class="d-flex flex-start mt-4">
                                                                            <a class="me-3" href="#">
                                                                                <img class="rounded-circle shadow-1-strong"
                                                                                    src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                    alt="avatar" width="50"
                                                                                    height="50" />
                                                                            </a>
                                                                            <div class="flex-grow-1 flex-shrink-1">
                                                                                <div>
                                                                                    <div
                                                                                        class="d-flex justify-content-between align-items-center">
                                                                                        <p class="mb-1 fw-bolder fs-5">
                                                                                            Nguyễn Ngọc Bảo 
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="mb-0">
                                                                                        Autem, totam debitis suscipit saepe sapiente
                                                                                        magnam officiis
                                                                                        quaerat necessitatibus odio assumenda,
                                                                                        perferendis quae iusto
                                                                                        labore laboriosam minima numquam impedit
                                                                                        quam dolorem!
                                                                                    </p>
                                                                                    <div class="d-flex align-items-center">
                                                                                        <a href="#"
                                                                                            class="link-muted text-danger fs-6 me-4"><i
                                                                                                class="bi bi-hand-thumbs-up me-1"></i>12</a>
                                                                                        {{-- <a href="#"
                                                                                            class="link-muted text-danger fs-6"><i
                                                                                                class="bi bi-hand-thumbs-down me-1"></i>13</a> --}}
                                                                                        <a href="#" class="text-danger fs-6 me-4"><i
                                                                                                class="bi bi-reply"></i>Trả lời</span></a>
                                                                                        <p class="fs-6 mb-1">5 phút trước</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class=" col-12 mt-4">
                                                            {{-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> --}}
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Nhập bình luận" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body pb-4">
                                    <div class="mb-2">
                                        <div class="card-title">Đã được phản hồi</div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="repeater-hopPhongBan position-relative style_table-3">
                                                <table class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Vấn đề tồn đọng</th>
                                                            <th>Người nêu</th>
                                                            <th>Nguyên nhân</th>
                                                            <th>Hướng giải quyết</th>
                                                            <th>PIC</th>
                                                            <th>Thời hạn</th>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="group-a">
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    1
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</div>
                                                            </td>
                                                            <td>
                                                                <div>Mai</div>
                                                            </td>
                                                            <td>
                                                                NN1
                                                            </td>
                                                            <td>
                                                                Sẽ gửi trong ngày
                                                            </td>
                                                            <td>
                                                                Vân
                                                            </td>
                                                            <td>
                                                                05/04
                                                            </td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper"
                                                                        style="border: 1px solid">
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                        <div class="circle_tracking bg-white">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot" id="dropdownMenuButton1"
                                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                        class="bi bi-three-dots-vertical"></i>
                                                                </div>
                                                                <ul class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton1">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#suaVanDeTonDong">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                            Sửa
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-repeater-delete>
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                            Xóa
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div data-repeater-create class="add-row-btn">
                                                    <i class="bi bi-plus-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12 d-flex justify-content-end">
                            <div class="action_table-wrapper text-end mt-3 mb-3">
                                {{-- <a href="kho-luu-tru-bien-ban-hop"
                                    class="btn btn-outline-danger action_table-btn"
                                    style="margin-right:6px;">
                                    Đến kho lưu trữ
                                </a> --}}
                                {{-- <a href='bien-ban-hop' class="btn btn-danger action_table-btn">
                                    Duyệt 
                                </a> --}}
                                <a type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                                    data-bs-toggle="modal" data-bs-target="#duyetbienbanhop">Duyệt</a>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end">
                            <div id='warning_notification'
                                class="alert alert-warning alert-dismissible fade show border-left border-warning"
                                role="alert">
                                <div class='d-flex align-items-center'>
                                    <div class='warning_notification-icon'><i class="bi bi-exclamation-triangle pe-2"></i>
                                    </div>
                                    <div class="warning_notification-body">
                                        <p class='m-0' style="font-size:1.2rem">Nhiệm vụ <strong>Họp giao ban
                                            </strong>ngày
                                            đã quá
                                            hạn!</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">Copyright © 2023 S-Team. All rights reserved.</div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')
    <!-- Modal Phản Hồi Vấn Đề -->
    <div class="modal fade" id="phanHoiVanDe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:700px;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Phản hồi vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex align-items-center">
                            <label for="staticEmail" class="col-form-label" style="padding-right:6px;">Vấn đề tồn đọng
                            </label>
                            <div class="w-100" style="flex:1;overflow:hidden">
                                <div contenteditable="true" readonly class="contenteditable"
                                    placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông tin"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:18px;">Cấp giải
                                quyết</label>
                            <div class="w-100" style="flex:1">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="2">Phòng ban</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:6px;">Thời hạn</label>
                            <div class="w-100" style="flex:1">
                                <input id="datetimepicker3" readonly value="<?php echo date('d/m/Y'); ?>" class="form-control"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-5 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label" style="padding-right:6px;">Trạng
                                thái</label>
                            <div class="w-100" style="flex:1">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected hidden>Chọn trạng thái</option>
                                    <option>Đã có hướng giải quyết</option>
                                    <option>Đã giải quyết</option>
                                    <option>Không thể giải quyết</option>
                                    <option>Không xác định được nguyên nhân</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex  align-items-center">
                            <label for="inputPassword" class="col-form-label"
                                style="padding-right:10px;border-radius:4px">Phản hồi vấn đề</label>
                            <div class="w-100" style="flex:1;overflow:hidden">
                                <div contenteditable="true" class="contenteditable"
                                    placeholder="Vui lòng phản hồi vấn đề tại đây"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Gửi</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Sửa Vấn Đề -->
    <div class="modal fade" id="suaVanDeTonDong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Chỉnh sửa vấn đề tồn đọng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-3">
                                    <div class="modal_body-title">Vấn đề tồn đọng <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-5" style="margin-right: 6px;">
                                    <div class="modal_body-title">Người nêu <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-7">
                                    <input class="form-control" type="text" value="Nguyễn Ngọc Bảo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">PIC <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Nguyễn Ngọc Bảo">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-3">
                                    <div class="modal_body-title">Nguyên nhân</div>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        value="Chưa hoàn thành báo cáo do abc chưa gửi thông tin">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-3">
                                    <div class="modal_body-title">Hướng giải quyết</div>
                                </div>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" value="Sẽ gửi trong tuần">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-6" style="margin-right: 4px;">
                                    <div class="modal_body-title">Thời hạn <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-6 position-relative">
                                    <input id="timeSuaVanDe" value="<?php echo date('d/m/Y'); ?>" class="form-control"
                                        type="text">
                                    <i class="bi bi-calendar-plus style_pickdate"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Tình trạng <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected hidden>Chọn trạng thái</option>
                                        <option>Đã có hướng giải quyết</option>
                                        <option>Đã giải quyết</option>
                                        <option>Không thể giải quyết</option>
                                        <option>Không xác định được nguyên nhân</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal duyệt biên bản họp -->
    <div class="modal fade" id="duyetbienbanhop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl-centered" role="document" style="max-width: 21cm">
            <div class="modal-content">

                <div class="modal-body" style="padding: 0; margin: 1.5cm 1.5cm 1.5cm 2cm">
                    <div class="d-block text-center mb-3">
                        <h5 class="modal-title w-100 fs-3">BIÊN BẢN HỌP GIAO BAN</h5>
                        <p class="m-0 fs-5 fst-italic">Phòng Marketing</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thời gian:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">23/03/2023 09:03 - 23/03/2023 10:03</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Chủ đề:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Họp báo cáo kết quả tuần 3 tháng 3/2023 phòng Marketing
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Chủ trì:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Nguyễn Vũ Nguyệt Minh - MTT123</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thư kí:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Đặng Vũ Lam Mai - MTT239</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thành viên tham
                                                    gia:</div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Nguyễn Vũ Nguyệt Minh - MTT123, Đặng Vũ Lam Mai -
                                                    MTT239, Hồ Thị Hồng Vân - MTT125, Hồ Thị Hồng Vân - MTT125, Hồ Thị Hồng
                                                    Vân - MTT125</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">Thành viên vắng:
                                                </div>
                                            </td>
                                            <td>
                                                <div class="fs-5">Chu Văn Linh - MTT123, Nguyễn Ngọc Bảo - MTT124</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal-title fw-bolder">I. NỘI DUNG CUỘC HỌP</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="mt-3 modal_body-title">
                                    <p class="" type="text">
                                        1. Chỉnh sửa giao diện Họp giao ban <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        2. Chỉnh sửa giao diện Họp giao ban <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                        - Chuyển lại chữ tiêu đề màu đỏ như các mục khác <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center  justify-content-between">
                                <div class="modal-title fw-bolder">II. VẤN ĐỀ TỒN ĐỌNG</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mt-4 modal_body-title">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Vấn đề</th>
                                            <th scope="col">Người nêu</th>
                                            <th scope="col">Nguyên nhân</th>
                                            <th scope="col">Hướng giải quyết</th>
                                            <th scope="col">PIC</th>
                                            <th scope="col">Thời hạn</th>
                                            <th scope="col">Tình trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tino</td>
                                            <td>Sẽ gửi trong tuần</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>05/04/2023</td>
                                            <td>Có hướng giải quyết</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tino</td>
                                            <td>Sẽ gửi trong tuần</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>05/04/2023</td>
                                            <td>Có hướng giải quyết</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tin</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>Chưa hoàn thành báo cáo do abc chưa gửi thông tino</td>
                                            <td>Sẽ gửi trong tuần</td>
                                            <td>Nguyễn Ngọc Bảo - MTT123</td>
                                            <td>05/04/2023</td>
                                            <td>Có hướng giải quyết</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mt-3 modal_body-title fw-bolder">Trưởng bộ phận</div>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title"></p>
                                <img src="" height="60" alt="" />
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title mb-0">Đặng Vũ Lam Mai</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mt-3 modal_body-title fw-bolder">Thành viên tham gia</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title m-0">
                                    Nguyễn Ngọc Bảo, Hồ Thị Hồng Van, Đặng Lam Mai
                                </p>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title m-0">Chúng tôi xác nhận nội dung cuộc hop</p>
                            </div>

                        </div>
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="mt-3 modal_body-title fw-bolder">Thư ký</div>
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="modal_body-title"></p>
                                <img src="" height="60" alt="" />
                            </div>
                            <div class="d-flex align-items-center  justify-content-center">
                                <p class="modal_body-title mb-0">Đặng Vũ Lam Mai</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger ps-5 pe-5" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    {{-- Xóa thuộc tính --}}
    <div class="modal fade" id="xoaThuocTinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa vấn đề này</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá vấn đề đã chọn không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="deleteRowElement">Có, tôi muốn xóa</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal title other (khác) --}}
    <div class="modal fade" id="orther" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM Vị trí/Chức danh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Đơn vị công tác<span class="text-danger">*</span>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập đơn vị công tác">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#themThanhVien">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer-script')
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>

    <script type="text/javascript">

    </script>
@endsection
