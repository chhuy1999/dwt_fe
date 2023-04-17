@extends('template.master')

@section('title', 'Thông tin')

@section('header-style')

    <style>
        .information_signature {
            position: relative;
            width: 400px;
            height: 200px;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .signature-pad {
            position: absolute;
            left: 0;
            top: 0;
            width: 400px;
            height: 200px;
            background-color: white;
        }
    </style>

@endsection

@section('content')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid job-offer">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Hồ sơ người dùng</h5>
                    </div>
                    <div class="information_wrapper bg-white">
                        <div class="row">
                            <div class="col-6 col-md-6">
                                <div class="card" style="height: 100%;">
                                    <div class="card-body">
                                        <div class="information_image-upload">
                                            <input type="file" name="" id="logo" onchange="fileValue(this)">
                                            <label for="logo" class="information_upload-field" id="file-label">
                                                <div class="information_file-thumbnail">
                                                    <img id="information_image-preview" width="150" height="150"
                                                        src="{{ asset('assets/img/avatar.jpeg') }}" alt="">
                                                </div>
                                            </label>
                                        </div>
                                        <div class="information_signature-wrapper">
                                            <button role="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#taoChuKy">Tạo chữ ký</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="card" style="height: 100%;">
                                    <div class="card-body">
                                        2
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal đổi mật khẩu --}}
    <div class="modal fade" id="thayDoiMatKhau" tabindex="-1" aria-labelledby="layout-thayDoiMatKhau" aria-hidden="true"
        tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-2" id="layout-thayDoiMatKhau" style="margin-left: 16px">
                        <i class="bi bi-file-lock2"></i>
                        Đổi mật khẩu
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="px-4 py-3">
                        <div class="mb-3">
                            <label for="password-old" class="form-label">Mật khẩu cũ</label>
                            <input type="passwor-old" class="form-control" id="password-old" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="password-new" class="form-label">Mật khẩu mới</label>
                            <input type="password-new" class="form-control" id="password-new" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="repeat-password" class="form-label">Nhập lại mật khẩu mới</label>
                            <input type="repeat-password" class="form-control" id="repeat-password" placeholder="">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-fingerprint"></i>
                        Xác nhận
                    </button>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal sửa thông tin cá nhân --}}
    <div class="modal fade" id="suaThongTin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 44%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 mt-2" id="exampleModalLabel">Sửa thông tin cá nhân</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin cá nhân</div>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="image-upload">
                                    <input type="file" name="" id="logo" onchange="fileValue(this)">
                                    <label for="logo" class="upload-field" id="file-label">
                                        <div class="file-thumbnail">
                                            <img id="image-preview" src="{{ asset('assets/img/preview.jpg') }}"
                                                alt="">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Họ và tên <span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="Đặng Vũ Lam Mai">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Ngày sinh<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8 position-relative">
                                        <input id="suaCreateUser" value="<?php echo date('d/m/Y'); ?>" class="form-control"
                                            type="text">
                                        <i class="bi bi-calendar-plus style_pickdate"></i>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Số điện thoại<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class=" col-sm-8">
                                        <input class="form-control" type="text" value="0123456789">
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Giới tính <span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" checked type="radio"
                                                    name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Email<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="vuha@gmail.com">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Địa chỉ<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="219 trung kính">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="create_user-wrapper">
                        <div class="create_user-title mb-2">Thông tin công việc</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Mã nhân viên <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="MTT123">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Email liên kết<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" value="bmtkt1@dopperherz.vn">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Đơn vị công tác <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="selectpicker">
                                            <option checked>CTCP Mastertran</option>
                                            <option>Doppelherz</option>
                                            <option>CTCP Thái Bình Hưng Thịnh</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Vị trí/Chức danh <span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <select id="onchangeViTriCongViecfix" class="selectpicker">
                                            <option>Quản lý phòng</option>
                                            <option>Quản lý sàn TMĐT</option>
                                            <option>Content Website</option>
                                            <option>Content SEO</option>
                                            <option>Google Ads</option>
                                            <option>Content Facebook</option>
                                            <option value="themViTriCongViecfix">Thêm vị trí mới</option>
                                        </select>
                                    </div>
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

    {{-- Modal tạo chữ ký --}}
    <div class="modal fade" id="taoChuKy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 44%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 mt-2" id="exampleModalLabel">Tạo chữ ký cá nhân</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="information_signature" style="height: 200px"; width: 200px;>
                                <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                            </div>
                            <button id="save-png">Save as PNG</button>
                            <button id="save-jpeg">Save as JPEG</button>
                            <button id="save-svg">Save as SVG</button>
                            <button id="draw">Draw</button>
                            <button id="erase">Erase</button>
                            <button id="clear">Clear</button>
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


@endsection

@section('footer-script')

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", event => {
            var canvas = document.getElementById('signature-pad');

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio = Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

var signaturePad = new SignaturePad(canvas, {
    backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
});

document.getElementById('save-png').addEventListener('click', function() {
    if (signaturePad.isEmpty()) {
        return alert("Please provide a signature first.");
    }

    var data = signaturePad.toDataURL('image/png');
    console.log(data);
    window.open(data);
});

document.getElementById('save-jpeg').addEventListener('click', function() {
    if (signaturePad.isEmpty()) {
        return alert("Please provide a signature first.");
    }

    var data = signaturePad.toDataURL('image/jpeg');
    console.log(data);
    window.open(data);
});

document.getElementById('save-svg').addEventListener('click', function() {
    if (signaturePad.isEmpty()) {
        return alert("Please provide a signature first.");
    }

    var data = signaturePad.toDataURL('image/svg+xml');
    console.log(data);
    console.log(atob(data.split(',')[1]));
    window.open(data);
});

document.getElementById('clear').addEventListener('click', function() {
    signaturePad.clear();
});

document.getElementById('draw').addEventListener('click', function() {
    var ctx = canvas.getContext('2d');
    console.log(ctx.globalCompositeOperation);
    ctx.globalCompositeOperation = 'source-over'; // default value
});

document.getElementById('erase').addEventListener('click', function() {
    var ctx = canvas.getContext('2d');
    ctx.globalCompositeOperation = 'destination-out';
});  
        })
        
    </script>
@endsection
