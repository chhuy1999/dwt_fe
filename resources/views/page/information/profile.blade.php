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
                            <div class="col-12 col-md-5">
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
                                            <button role="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#signatureModal">Tạo chữ ký</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="card" style="height: 100%;">
                                    <div class="card-body">
                                        <div class="card-title">Mục tiêu nhiệm vụ cá nhân</div>
                                        <div class="row">
                                            <div class="mb-3 col-6">
                                                <input type="text" readonly value="Đặng Vũ Lam Mai" class="form-control">
                                            </div>
                                            <div class="mb-3 col-3">
                                                <input type="text" readonly value="MTT239" class="form-control">
                                            </div>
                                            <div class="mb-3 col-3">
                                                <input type="text" readonly value="27/04/1999" class="form-control">
                                            </div>
                                            <div class="mb-3 col-7">
                                                <input type="text" readonly value="219 Trung Kính" class="form-control">
                                            </div>
                                            <div class="mb-3 col-5">
                                                <input type="text" readonly value="09123465789" class="form-control">
                                            </div>
                                            <div class="mb-3 col-4">
                                                <input type="text" readonly value="bmtkt1@dopperherz.vn"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3 col-4">
                                                <input type="text" readonly value="Phòng Marketing" class="form-control">
                                            </div>
                                            <div class="mb-3 col-4">
                                                <input type="text" readonly value="Trợ lý Marketing"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <input type="text" readonly value="bmtkt1@dopperherz.vn"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3 col-6">
                                                <input type="text" readonly value="**********" class="form-control">
                                            </div>
                                        </div>
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
                    <div class="row">
                        <div class="mb-3 col-6">
                            <input type="text" readonly value="Đặng Vũ Lam Mai" class="form-control">
                        </div>
                        <div class="mb-3 col-3">
                            <input type="text" readonly value="MTT239" class="form-control">
                        </div>
                        <div class="mb-3 col-3">
                            <input type="text" readonly value="27/04/1999" class="form-control">
                        </div>
                        <div class="mb-3 col-7">
                            <input type="text" readonly value="219 Trung Kính" class="form-control">
                        </div>
                        <div class="mb-3 col-5">
                            <input type="text" readonly value="09123465789" class="form-control">
                        </div>
                        <div class="mb-3 col-4">
                            <input type="text" readonly value="bmtkt1@dopperherz.vn" class="form-control">
                        </div>
                        <div class="mb-3 col-4">
                            <input type="text" readonly value="Phòng Marketing" class="form-control">
                        </div>
                        <div class="mb-3 col-4">
                            <input type="text" readonly value="Trợ lý Marketing" class="form-control">
                        </div>
                        <div class="mb-3 col-6">
                            <input type="text" readonly value="bmtkt1@dopperherz.vn" class="form-control">
                        </div>
                        <div class="mb-3 col-6">
                            <input type="text" readonly value="**********" class="form-control">
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

    <div class="modal fade" id="signatureModal" tabindex="-1" role="dialog" aria-labelledby="signatureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signatureModalLabel">Tạo chữ ký</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <canvas id="signatureCanvas" ></canvas>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="saveSignatureButton">Lưu</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer-script')

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>



    <script>
        // Initialize the signature pad
        var canvas = document.getElementById('signatureCanvas');
        var signaturePad = new SignaturePad(canvas);

        // Save the signature to a variable when the user clicks the save button
        document.getElementById('saveSignatureButton').addEventListener('click', function() {
            var signatureData = signaturePad.toDataURL();
            console.log(signatureData); // You can do whatever you want with the signature data here
        });
    </script>
@endsection
