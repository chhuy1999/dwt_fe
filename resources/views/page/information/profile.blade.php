@extends('template.master')

@section('title', 'Thông tin')

@section('content')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid job-offer">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Hồ sơ người dùng</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td colspan="3" rowspan="3">
                                                    <div class="image-upload">
                                                        <input type="file" name="" id="logo" onchange="fileValue(this)">
                                                        <label for="logo" class="upload-field" id="file-label">
                                                            <div class="file-thumbnail">
                                                                <img id="image-preview" src="{{ asset('assets/img/preview.jpg') }}" alt="">
                                                            </div>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td colspan="9" style="padding: 10px"><strong>Đặng Vũ Lam Mai - MTT239</strong></td>

                                            </tr>
                                            <tr>
                                                <td colspan="9" style="padding: 10px"><strong>bmtkt1@dopperherz.vn</strong></td>
                                            </tr>
                                            <tr>
                                                <td colspan="9" style="padding: 10px"><strong>Admin</strong></td>
                                            </tr>


                                            <tr>
                                                <td colspan="12">
                                                    <div class="" style="display: flex;">
                                                        <div style="padding: 10px" class="create_user-title mb-2 mt-2">Thông tin tài khoản</div>
                                                        <div class="btn mt-3" data-bs-toggle="modal" data-bs-target="#suathongtin">
                                                            <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" style="padding: 10px"><strong>Họ tên</strong></td>
                                                <td colspan="2" style="padding: 10px">Đặng Vũ Lam Mai</td>
                                                <td colspan="2" style="padding: 10px"><strong>Giới tính</strong></td>
                                                <td style="padding: 10px">Nữ</td>
                                                <td colspan="2" style="padding: 10px"><strong>Ngày sinh</strong></td>
                                                <td colspan="2" style="padding: 10px">27/04/1999</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" style="padding: 10px"><strong>Số điện thoại liên hệ</strong></td>
                                                <td colspan="2" style="padding: 10px">123456789</td>
                                                <td colspan="3" style="padding: 10px"><strong>Địa chỉ</strong></td>
                                                <td colspan="4" style="padding: 10px">219 Trung Kính</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" style="padding: 10px"><strong>Đơn vị công tác</strong></td>
                                                <td colspan="2" style="padding: 10px" class="table-active">Phòng Marketing</td>
                                                <td colspan="3" style="padding: 10px"><strong>Vị trí làm việc</strong></td>
                                                <td colspan="4" style="padding: 10px" class="table-active">Trợ lý Marketing</td>
                                            </tr>

                                            {{-- <tr>
                                            <td colspan="12"></td>
                                        </tr> --}}

                                            <tr>
                                                <td colspan="12">
                                                    <div style="padding: 10px" class="create_user-title mb-2 mt-2">Thông tin tài khoản</div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td colspan="3" style="padding: 10px"><strong>Email liên kết</strong></td>
                                                <td colspan="9" style="padding: 10px">bmtkt1@dopperherz.vn</td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" style="padding: 10px"><strong>Mật khẩu</strong></td>
                                                <td colspan="3" style="padding: 10px">**********</td>
                                                <td colspan="6" style="padding: 10px">
                                                    <a class="btn" data-bs-toggle="modal" data-bs-target="#thaydoimatkhau">
                                                        <i class="bi bi-pencil"></i>
                                                        Thay đổi
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>


                                    {{-- Modal đổi mật khẩu --}}

                                    <div class="modal fade" id="thaydoimatkhau" tabindex="-1" aria-labelledby="layout-thaydoimatkhau" aria-hidden="true" tabindex="-1">

                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title mt-2" id="layout-thaydoimatkhau" style="margin-left: 16px">
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

                                    <div class="modal fade" id="suathongtin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                            <img id="image-preview" src="{{ asset('assets/img/preview.jpg') }}" alt="">
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
                                                                        <input id="suaCreateUser" value="<?php echo date('d/m/Y'); ?>" class="form-control" type="text">
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
                                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" checked type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
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


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
