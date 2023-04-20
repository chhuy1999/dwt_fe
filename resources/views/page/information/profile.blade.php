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
                                        <div class="card-title text-center pt-3 pb-3">{{ $user->name }} - {{ $user->code }}</div>
                                        <div class="information_signature-wrapper">
                                            <div class="signature_wrapper">
                                                <img class="signature_img" style="height:200px;width:100%" src="{{ $user->signature ?? asset('assets/img/noSignature.jpg') }}" />
                                            </div>
                                            <div class="signature_actions">
                                                <button role="button" class="btn btn-outline-danger" id="clearSignatureButton">Xóa chữ ký</button>
                                                <button role="button" class="btn btn-outline-warning" id="editSignatureButton">Sửa chữ ký</button>
                                                <button role="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signatureModal">Tạo chữ ký</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title mb-3" style="display: flex; justify-content: space-between">
                                            Thông tin cơ bản
                                            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#thongTinCoBan">Thay đổi</button>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-4">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label fs-5">Họ và tên</label>
                                                    <input type="text" id="name" readonly value="{{ $user->name }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-4">
                                                <div class="mb-3">
                                                    <label for="sex" class="form-label fs-5">Giới tính</label>
                                                    <input type="text" id="sex" readonly value="{{ $user->sex == 'male' ? 'Nam' : 'Nữ' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-4">
                                                <div class="mb-3">
                                                    <label for="bd" class="form-label fs-5">Ngày sinh</label>
                                                    <input type="text" id="bd" readonly value="{{ date('d/m/Y', strtotime($user->dob)) }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-4">
                                                <div class="mb-3">
                                                    <label for="bd" class="form-label fs-5">Số điện thoại liên
                                                        hệ</label>
                                                    <input type="text" id="bd" readonly value="{{ $user->phone }}" class="form-control">
                                                </div>
                                            </div>

                                            <div class="mb-3 col-4">
                                                <div class="mb-3">
                                                    <label for="bd" class="form-label fs-5">Đơn vị công tác</label>
                                                    <input type="text" id="bd" readonly value="{{ $user->departement->name ?? '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-4">
                                                <div class="mb-3">
                                                    <label for="bd" class="form-label fs-5">Vị trí làm việc</label>
                                                    <input type="text" id="bd" readonly value="{{ $user->position->name ?? '' }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-12">
                                                <div class="mb-3">
                                                    <label for="bd" class="form-label fs-5">Địa chỉ</label>
                                                    <input type="text" id="bd" readonly value="{{ $user->address }}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title mb-3" style="display: flex; justify-content: space-between">
                                            Thông tin tài khoản
                                            {{-- <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#thongTinLienHe">Thay đổi</button> --}}
                                        </div>
                                        <div class="row">

                                            <div class="mb-3 col-6">
                                                <div class="mb-3">
                                                    <label for="sex" class="form-label fs-5">Email liên kết</label>
                                                    <input type="text" id="sex" readonly value="{{ $user->email }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-6">
                                                <div class="mb-3">
                                                    <label for="bd" class="form-label fs-5">Mật khẩu</label>
                                                    <input type="password" id="bd" readonly value="*********" class="form-control">
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
    </div>

    {{-- Modal Thay đổi thông tin cơ bản --}}
    <div class="modal fade" id="thongTinCoBan" tabindex="-1" aria-labelledby="layout-thayDoiMatKhau" aria-hidden="true" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-2" id="layout-thayDoiMatKhau">
                        <i class="bi bi-file-lock2"></i>
                        Thay đổi thông tin cơ bản
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-4">
                                <div class="mb-3">
                                    <label for="name" class="form-label fs-5">Họ và tên</label>
                                    <input type="text" id="name" value="{{ $user->name }} - {{ $user->code }}" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-4">
                                <div class="mb-3">
                                    <label for="sex" class="form-label fs-5">Giới tính</label>
                                    <input type="text" id="sex" value="{{ $user->sex == 'male' ? 'Nam' : 'Nữ' }}" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-4">
                                <div class="mb-3">
                                    <label for="bd" class="form-label fs-5">Ngày sinh</label>
                                    <input type="text" id="bd" value="{{ date('d/m/Y', strtotime($user->dob)) }}" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-4">
                                <div class="mb-3">
                                    <label for="bd" class="form-label fs-5">Số điện thoại liên
                                        hệ</label>
                                    <input type="text" id="bd" value="0123456" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3 col-4">
                                <div class="mb-3">
                                    <label for="bd" class="form-label fs-5">Đơn vị công tác</label>
                                    <input type="text" id="bd" value="Phòng Marketing" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-4">
                                <div class="mb-3">
                                    <label for="bd" class="form-label fs-5">Vị trí làm việc</label>
                                    <input type="text" id="bd" value="Trợ lý Marketing" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <div class="mb-3">
                                    <label for="bd" class="form-label fs-5">Địa chỉ</label>
                                    <input type="text" id="bd" value="Khu 3 phú thọ" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-danger">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Modal Thay đổi thông tin liên hệ --}}
    {{-- <div class="modal fade" id="thongTinLienHe" tabindex="-1" aria-labelledby="layout-thayDoiMatKhau" aria-hidden="true"
        tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-2" id="layout-thayDoiMatKhau">
                        <i class="bi bi-file-lock2"></i>
                        Thay đổi thông tin tài khoản
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">

                            <div class="mb-3 col-6">
                                <div class="mb-3">
                                    <label for="sex" class="form-label fs-5">Email liên kết</label>
                                    <input type="text" id="sex" readonly
                                        value="{{ $user->email }}" class="form-control">
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                                <div class="mb-3">
                                    <label for="bd" class="form-label fs-5">Mật khẩu</label>
                                    <input type="password" id="bd" readonly
                                        value="#########" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                            <button type="button" class="btn btn-danger">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}


    {{-- Modal sửa thông tin cá nhân --}}
    <div class="modal fade" id="suaThongTin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 mt-2" id="exampleModalLabel">Sửa thông tin cá nhân</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-6">
                            <input type="text" readonly value="{{ Session::get('user')['name'] }}" class="form-control">
                        </div>
                        <div class="mb-3 col-3">
                            <input type="text" readonly value="{{ Session::get('user')['code'] ?? '' }}" class="form-control">
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
    <div class="modal fade" id="signatureModal" tabindex="-1" role="dialog" aria-labelledby="signatureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signatureModalLabel">Tạo chữ ký</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <canvas id="signatureCanvas"></canvas>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger" id="saveSignatureButton">Lưu</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer-script')

    {{-- <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script> --}}
    <script src="{{ asset('/assets/plugins/signature_pad/signature_pad.umd.min.js') }}"></script>

    <script>
        // Initialize the signature pad
        var canvas = document.getElementById('signatureCanvas');
        var signaturePad = new SignaturePad(canvas);

        // Save the signature to a variable when the user clicks the save button
        document.getElementById('saveSignatureButton').addEventListener('click', async function(e) {
            // Get the data URL of the signature image (with a low resolution)
      
            try {
                var signatureData = signaturePad.toDataURL({
                    minWidth: 0.1,
                    maxWidth: 2,
                    throttle: 16
                });

                // Update the src of the signature image
                var signatureImg = document.querySelector('.signature_img');
                signatureImg.src = signatureData;
                //create signature image file
                const blob = await fetch(signatureData);
                const blobData = await blob.blob();
                const signatureFile = new File([blobData], "{!! session('user')['id'] !!}" + `_${new Date().getTime()}_signature.png`, {
                    type: 'image/png'
                });
                // console.log(signatureFile);
                //upload signature to server
                const apiUrl = "https://report.sweetsica.com/api/report/upload"
                const formData = new FormData();
                formData.append('files', signatureFile);
                formData.append('userId', '{!! session('user')['id'] !!}');
                const data = new URLSearchParams();
                for (const pair of formData) {
                    data.append(pair[0], pair[1]);
                }
                const resp = await fetch(apiUrl, {
                    method: 'POST',
                    body: formData,

                })
                if (!resp.ok) {
                    throw new Error('Network response was not ok');
                }
                const jsonData = await resp.json();
                const signatureUrl = jsonData.downloadLink;
                //update signature url to database

                const updateUserApiurl = API_URL + '/users/' + "{!! session('user')['id'] !!}"
                await fetch(updateUserApiurl, {
                    method: 'PUT',
                    headers: {
                        'Authorization': 'Bearer ' + JWT_TOKEN,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        signature: signatureUrl
                    })

                })

                //show success message
                Toastify({

                    text: "Tạo chữ ký thành công",
                    duration: 3000,
                    stopOnFocus: true,

                }).showToast();


            } catch (err) {
                console.log(err)
                Toastify({

                    text: "Tạo chữ ký thất bại: " + err.message,
                    duration: 3000,
                    stopOnFocus: true,
                    style: {
                        background: "#FE6244",
                    },

                }).showToast();
            } finally {
                // Hide the signature pad modal
                var signatureModal = document.getElementById('signatureModal');
                var modalInstance = bootstrap.Modal.getInstance(signatureModal);
                modalInstance.hide();
                canvas.clear();

            }
        });

        // Clear the signature when the user clicks the clear button
        document.getElementById('clearSignatureButton').addEventListener('click', async function() {
            signaturePad.clear();
            const apiUrl = API_URL + '/users/' + "{!! session('user')['id'] !!}"
            await fetch(apiUrl, {
                method: 'PUT',
                headers: {
                    'Authorization': 'Bearer ' + JWT_TOKEN,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    signature: ""
                })

            })
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

    <script>
        $("#signatureModal").on("hidden.bs.modal", function() {
            var canvas = $(this).find("canvas")[0];
            var signaturePad = new SignaturePad(canvas);
            signaturePad.clear();
        });
    </script>

@endsection
