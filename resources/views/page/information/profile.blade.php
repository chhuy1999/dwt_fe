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
                                        <div class="information_avatar">
                                            <img src="{{ asset('assets/img/avatar.jpeg') }}" alt="" class="information_avatar-img">
                                        </div>
                                        <div class="card-title text-center pt-3 pb-3">Đặng Vũ Lam Mai - MTT239</div>
                                        <div class="information_signature-wrapper">
                                            <div class="signature_wrapper">
                                                <img class="signature_img" style="height:200px;width:100%"
                                                    src="{{ asset('assets/img/noSignature.jpg') }}" />
                                            </div>
                                            <div class="signature_actions">
                                                <button role="button" class="btn btn-outline-danger"
                                                    id="clearSignatureButton">Xóa chữ ký</button>
                                                <button role="button" class="btn btn-outline-warning"
                                                    id="editSignatureButton">Sửa chữ ký</button>
                                                <button role="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#signatureModal">Tạo chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="card" style="height: 100%;">
                                    <div class="card-body">
                                        <div class="card-title">Thông tin người dùng</div>
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
                    <canvas id="signatureCanvas"></canvas>
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
            // Get the data URL of the signature image (with a low resolution)
            var signatureData = signaturePad.toDataURL({
                minWidth: 0.1,
                maxWidth: 2,
                throttle: 16
            });

            // Update the src of the signature image
            var signatureImg = document.querySelector('.signature_img');
            signatureImg.src = signatureData;

            // Hide the signature pad modal
            var signatureModal = document.getElementById('signatureModal');
            var modalInstance = bootstrap.Modal.getInstance(signatureModal);
            modalInstance.hide();
            canvas.clear();
        });

        // Clear the signature when the user clicks the clear button
        document.getElementById('clearSignatureButton').addEventListener('click', function() {
            signaturePad.clear();
            document.querySelector('.signature_img').src = '{{ asset('assets/img/noSignature.jpg') }}';
        });

        // Show the signature pad modal and load the previous signature when the user clicks the edit button
        document.getElementById('editSignatureButton').addEventListener('click', function() {
            // Show the signature pad modal
            var signatureModal = document.getElementById('signatureModal');
            var modalInstance = bootstrap.Modal.getInstance(signatureModal);
            modalInstance.show();

            // Load the previous signature (if it exists)
            var signatureImg = document.querySelector('.signature_img');
            var signatureData = signatureImg.src;
            if (signatureData) {
                var image = new Image();
                image.onload = function() {
                    signaturePad.clear();
                    signaturePad.fromDataURL(signatureData);
                };
                image.src = signatureData;
            }
        });
    </script>
@endsection
