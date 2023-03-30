@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách thành viên')

@section('content')
    @include('template.sidebar.sidebardanhSachViTri.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách thành viên
                        </h5>
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body position-relative body_content-wrapper" id="body_content-1"
                                    style="display:block">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="dsToanCongTy"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th class="text-nowrap text-center">STT</th>
                                                            <th class="text-nowrap">Họ và tên</th>
                                                            <th class="text-nowrap">Mã nhân viên</th>
                                                            <th class="text-nowrap">Đơn vị công tác</th>
                                                            <th class="text-nowrap">Vị trí/chức danh</th>
                                                            <th class="text-nowrap">Cấp nhân sự</th>
                                                            <th class="text-nowrap">Email công ty</th>
                                                            <th class="text-nowrap">SĐT liên hệ</th>
                                                            <th class="text-nowrap">Hình thức</th>
                                                            <th class="text-nowrap">Trạng thái</th>
                                                            <th class="text-nowrap">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data->data as $value)
                                                            <tr>
                                                                <th scope="row">
                                                                    <div
                                                                        class="d-flex justify-content-center align-items-center">
                                                                        {{ $loop->iteration }}
                                                                    </div>
                                                                </th>
                                                                <td class="text-nowrap">
                                                                    <div>{{ $value->name }}</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>{{ $value->code }}</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>{{ $value->departement->name ?? ''}}</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>{{ $value->position->name ?? ''}}</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>{{ $value->position_level->name ?? ''}}</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>{{ $value->email }}</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>{{ $value->phone }}</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>Chính thức</div>
                                                                </td>
                                                                <td class="text-nowrap">
                                                                    <div>Đang làm việc</div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="table_actions d-flex justify-content-center">
                                                                        <div class="btn" data-bs-toggle="modal"
                                                                            data-bs-target="#suaThanhVien{{ $value->id }}">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                        </div>
                                                                        <div class="btn" data-bs-toggle="modal"
                                                                            data-bs-target="#xoaThanhVien{{ $value->id }}">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            {{-- Modal Sua thanh vien --}}
                                                            <div class="modal fade" id="suaThanhVien{{ $value->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header text-center">
                                                                            <h5 class="modal-title w-100"
                                                                                id="exampleModalLabel">Sửa thành viên</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                            
                                                                        <form method="POST"
                                                                            action="/danh-sach-thanh-vien/{{ $value->id }}">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="modal-body">
                                                                                <div class="create_user-wrapper">
                                                                                    <div class="create_user-title mb-2">
                                                                                        Thông tin cá nhân</div>
                                                                                    <div class="row align-items-center">
                                                                                        <div class="col-sm-2">
                                                                                            <div class="image-upload">
                                                                                                <input type="file"
                                                                                                    name=""
                                                                                                    id="logo"
                                                                                                    onchange="editImg(this)">
                                                                                                <label for="logo"
                                                                                                    class="upload-field"
                                                                                                    id="file-label">
                                                                                                    <div
                                                                                                        class="file-thumbnail">
                                                                                                        <img id="edit_image-preview"
                                                                                                            src="{{ asset('assets/img/avatar.jpeg') }}"
                                                                                                            alt="">
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-5">
                                                                                            <div class="col-sm-12 mb-2">
                                                                                                <input class="form-control"
                                                                                                    type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Họ và Tên"
                                                                                                    value="{{ $value->name }}"
                                                                                                    name="name">
                                                                                            </div>
                                                            
                                                                                            <div class="col-sm-12 mb-2">
                                                                                                <input class="form-control"
                                                                                                    type="password" data-bs-toggle="tooltip" data-bs-placement="top" title="Mật khẩu"
                                                                                                    value="123456"
                                                                                                    name="password">
                                                                                            </div>
                                                                                            <div class="col-sm-12 mb-2">
                                                                                                <input class="form-control"
                                                                                                    type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="SĐT cá nhân"
                                                                                                    value="{{ $value->phone }}"
                                                                                                    name="phone">
                                                                                            </div>
                                                            
                                                                                        </div>
                                                                                        <div class="col-sm-5">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-5 mb-2">
                                                                                                    <select
                                                                                                        class="selectpicker">
                                                                                                        <option>Nam</option>
                                                                                                        <option selected>Nữ
                                                                                                        </option>
                                                                                                        <option>Khác
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                            
                                                                                                <div
                                                                                                    class="col-sm-7 mb-2 position-relative">
                                                                                                    <input
                                                                                                        id="suaCreateUser"
                                                                                                        value="26/03/2023"
                                                                                                        class="form-control"
                                                                                                        type="text">
                                                                                                    <i
                                                                                                        class="bi bi-calendar-plus style_pickdate"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-12 mb-2">
                                                                                                <input class="form-control"
                                                                                                    type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Email liên hệ"
                                                                                                    value="vuha@gmail.com">
                                                                                            </div>
                                                                                            <div class="col-sm-12 mb-2">
                                                                                                <input class="form-control"
                                                                                                    type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Địa chỉ liên hệ"
                                                                                                    value="{{ $value->address }}"
                                                                                                    name="address">
                                                                                            </div>
                                                            
                                                                                        </div>
                                                            
                                                                                    </div>
                                                                                </div>
                                                            
                                                                                <div class="create_user-wrapper">
                                                                                    <div class="create_user-title mb-2">
                                                                                        Thông tin công việc</div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4 mb-2">
                                                                                            <input class="form-control"
                                                                                                type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã nhân viên"
                                                                                                value="{{ $value->code }}"
                                                                                                name="code">
                                                                                        </div>
                                                            
                                                                                        <div class="col-sm-4 mb-2">
                                                                                            <input class="form-control"
                                                                                                type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="SĐT liên hệ"
                                                                                                value="0123456789">
                                                                                        </div>
                                                            
                                                                                        <div class="col-sm-4 mb-2">
                                                                                            <input class="form-control"
                                                                                                type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Email công ty" 
                                                                                                value="{{ $value->email }}"
                                                                                                name="email">
                                                                                        </div>
                                                            
                                                                                        <div class="col-sm-6 mb-2"  data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị công tác">
                                                                                            <select class="selectpicker"
                                                                                                name="departement">
                                                                                                <option>Chủ tịch HĐQT
                                                                                                </option>
                                                                                                <option>Tổng Giám đốc
                                                                                                </option>
                                                                                                <option>Phó Tổng Giám đốc
                                                                                                </option>
                                                                                                <option>Giám đốc điều hành
                                                                                                </option>
                                                                                                <option>Quản lý cấp cao
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                            
                                                                                        <div class="col-sm-6 mb-2"  data-bs-toggle="tooltip" data-bs-placement="top" title="Cấp nhân sự">
                                                                                            <div
                                                                                                class="d-flex align-items-center">
                                                                                                <select
                                                                                                    class="selectpicker">
                                                                                                    <option>Chủ tịch HĐQT
                                                                                                    </option>
                                                                                                    <option>Tổng Giám đốc
                                                                                                    </option>
                                                                                                    <option>Phó Tổng Giám
                                                                                                        đốc</option>
                                                                                                    <option>Giám đốc điều
                                                                                                        hành</option>
                                                                                                    <option>Quản lý cấp cao
                                                                                                    </option>
                                                                                                    <option>Quản lý cấp
                                                                                                        trung</option>
                                                                                                    <option selected>Trưởng
                                                                                                        phòng</option>
                                                                                                    <option>Phó phòng
                                                                                                    </option>
                                                                                                    <option>Trưởng nhóm
                                                                                                    </option>
                                                                                                    <option>Chuyên viên
                                                                                                    </option>
                                                                                                    <option>Nhân viên
                                                                                                    </option>
                                                                                                </select>
                                                                                                {{-- <div class="modal_list-more"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#danhsachChucDanh">
                                                                                                    <i
                                                                                                        class="bi bi-three-dots-vertical"></i>
                                                                                                </div> --}}
                                                                                            </div>
                                                                                        </div>
                                                            
                                                                                        <div class="col-sm-6 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Vị trí/Chức danh">
                                                                                            <select
                                                                                                id="onchangeViTriCongViec"
                                                                                                class="selectpicker">
                                                                                                <option selected>Quản lý
                                                                                                    phòng</option>
                                                                                                <option>Quản lý sàn TMĐT
                                                                                                </option>
                                                                                                <option>Content Website
                                                                                                </option>
                                                                                                <option>Content SEO</option>
                                                                                                <option>Google Ads</option>
                                                                                                <option>Content Facebook
                                                                                                </option>
                                                                                                <option
                                                                                                    value="themViTriCongViec"
                                                                                                    class="text-danger">+
                                                                                                    Thêm vị trí mới
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                            
                                                                                        <div class="col-sm-6 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Quản lý trực tiếp">
                                                                                            <select class="selectpicker">
                                                                                                <option selected>Bùi Thị
                                                                                                    Minh Hoa - GĐĐH</option>
                                                                                                <option>Nguyễn Ngọc Bảo
                                                                                                </option>
                                                                                                <option>Đặng Nguyễn Lam Mai
                                                                                                </option>
                                                                                                <option>Hồ Thị Hồng Vân
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-sm-6 mb-2">
                                                                                            <input type="text" readonly
                                                                                                class="form-control"
                                                                                                readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Quỹ lương năm"
                                                                                                placeholder="Quỹ lương năm" />
                                                                                        </div>
                                                                                        <div class="col-sm-6 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Gói trang bị">
                                                                                            <select class="selectpicker"
                                                                                                title="Chọn gói trang bị">
                                                                                                <option selected>Trang bị
                                                                                                    hành chính</option>
                                                                                                <option>Trang bị cơ bản
                                                                                                </option>
                                                                                                <option>Trang bị Nhân viên
                                                                                                </option>
                                                                                                <option>Trang bị Chuyên viên
                                                                                                </option>
                                                                                                <option>Trang bị Quản lý
                                                                                                </option>
                                                                                                <option>Trang bị Giám đốc
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                            
                                                                                        <div class="col-sm-6 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Hình thức làm việc" >
                                                                                            <select class="selectpicker"
                                                                                                title="Hình thức làm việc">
                                                                                                <option selected>Chính thức
                                                                                                </option>
                                                                                                <option>Thử việc</option>
                                                                                                <option>Cộng tác viên
                                                                                                </option>
                                                                                                <option>Thực tập sinh
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-sm-6 mb-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Trạng thái">
                                                                                            <select class="selectpicker"
                                                                                                title="Chọn trạng thái">
                                                                                                <option selected>Đang làm
                                                                                                    việc</option>
                                                                                                <option>Đã nghỉ việc
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-outline-danger"
                                                                                    data-bs-dismiss="modal">Hủy</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Lưu</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- Xóa Thanh vien --}}
                                                            <div class="modal fade" id="xoaThanhVien{{ $value->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title text-danger"
                                                                                id="exampleModalLabel">XOÁ THÀNH VIÊN</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Bạn có thực sự muốn xoá thành viên này không?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                data-bs-dismiss="modal">Hủy</button>
                                                                            <form
                                                                                action="/danh-sach-thanh-vien/{{ $value->id }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger"
                                                                                    id="deleteRowElement">Xóa</button>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="signature_wrapper">
                                        <div class="signature_con">
                                            <div class="signature_items">
                                                <div class="signature_title"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body position-relative body_content-wrapper" id="body_content-2">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            Chưa có dữ liệu
                                        </div>
                                    </div>
                                    <div class="signature_wrapper">
                                        <div class="signature_con">
                                            <div class="signature_items">
                                                <div class="signature_title"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebardanhSachViTri.sidebarRight')

    {{-- Xóa Cơ cấu tổ chức --}}
    <div class="modal fade" id="xoaCoCauToChuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">XOÁ CƠ CẤU TỔ CHỨC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá cơ cấu tổ chức đã chọn không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xóa</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Sửa Cơ cấu tổ chức --}}
    <div class="modal fade" id="suaCoCauToChuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Sửa Cơ cấu tổ chức</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Tên đơn vị<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Digital Marketing">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Mã đơn vị<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="DMKT">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Thuộc đơn vị<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="CTCP Mastertran">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Cấp tổ chức<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Tổ/Đội/Nhóm">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trưởng đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Vũ Thị Hà - MTT123">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trụ sở chính<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="219 Trung Kính, Yên Hoà, Cầu...">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-2">
                                    <div class="modal_body-title">Chức năng <br> nhiệm vụ*<span
                                            class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" type="text">Xây dựng chiến lược truyền thông và chiến lược Marketing để tiếp cận với nhóm khách hàng trên các nền tảng kỹ thuật số.</textarea>
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

    <!-- Modal Them Co Cau -->
    <div class="modal fade" id="suaCoCauToChuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 40%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Sửa cơ cấu tốt chức</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Tên đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="Digital Marketing">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Mã đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="DMKT">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Thuộc đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn đơn vị mẹ">
                                        <option selected>CTCP Mastertran</option>
                                        <option>CTCP Thái Bình Hưng Thịnh</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Cấp tổ chức <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8 d-flex align-items-center">
                                    <select class="selectpicker" title="Chọn cấp tổ chức">
                                        <option selected>Công ty con</option>
                                        <option>Chi nhánh</option>
                                        <option>Văn phòng đại diện</option>
                                        <option>Văn phòng</option>
                                        <option>Trung tâm</option>
                                        <option>Phòng ban</option>
                                        <option>Nhóm/tổ/đội</option>
                                        <option>Phân xưởng</option>
                                        <option>Nhà máy</option>
                                        <option>Công ty thành viên</option>
                                    </select>
                                    <div class="modal_list-more" data-bs-toggle="modal"
                                        data-bs-target="#danhsachCapToChuc">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trưởng đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn trưởng đơn vị">
                                        <option selected>Nguyễn Ngọc Bảo</option>
                                        <option>Đặng Nguyễn Lam Mai</option>
                                        <option>Hồ Thị Hồng Vân</option>
                                        <option>Nguyễn Thị Ngọc Lan</option>
                                        <option>Nguyễn Thị Hồng Oanh</option>
                                        <option>Hà Nguyễn Minh Hiếu</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trụ sở chính <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text"
                                        value="219 Trung Kính, Yên Hòa, Cầu Giấy, Hà Nội">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-2">
                                    <div class="modal_body-title">Chức năng<br> nhiệm vụ<span class="text-danger">*</span>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        value="Xây dựng chiến lược truyền thông và chiến lược Marketing để tiếp cận với nhóm khách hàng.">
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

    {{-- Modal Them thanh vien --}}
    <div class="modal fade" id="themThanhVien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm thành viên</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/danh-sach-thanh-vien" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="create_user-wrapper">
                            <div class="create_user-title mb-2">Thông tin cá nhân</div>
                            <div class="row align-items-center">
                                <div class="col-sm-2">
                                    <div class="image-upload">
                                        <input type="file" name="" id="logo" onchange="createImg(this)">
                                        <label for="logo" class="upload-field" id="file-label">
                                            <div class="file-thumbnail">
                                                <img id="create_image-preview"
                                                    src="{{ asset('assets/img/preview-image.svg') }}" alt="">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="col-sm-12 mb-2">
                                        <input class="form-control" required autocomplete="off" type="text" name="name"
                                            placeholder="Họ và tên *">
                                    </div>

                                    <div class="col-sm-12 mb-2">
                                        <input class="form-control" required autocomplete="off"  type="password" name="password"
                                            placeholder="Mật khẩu *">
                                    </div>
                                    <div class="col-sm-12 mb-2">
                                        <input class="form-control" autocomplete="off"  type="tel"
                                            required placeholder="SĐT cá nhân" name="phone">
                                    </div>

                                </div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        {{-- <div class="col-sm-5 mb-2">
                                            <select class="selectpicker" title="Giới tính" name="sex">
                                                <option value="male">Nam</option>
                                                <option value="female">Nữ</option>
                                                <option value="other">Khác</option>
                                            </select>
                                        </div> --}}

                                        <div class="col-sm-5 mb-2">
                                            <select class="selectpicker"placeholder="Giới tính" title="Giới tính"
                                                name="sex">
                                                <option value="male">Nam</option>
                                                <option value="female">Nữ</option>
                                                <option value="other">Khác</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-7 mb-2 position-relative">
                                            <input id="createUser" autocomplete="off"  placeholder="Ngày sinh" class="form-control"
                                                type="text" name="dob" autocomplete="off">
                                            <i class="bi bi-calendar-plus style_pickdate"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-2">
                                        <input class="form-control" autocomplete="off"  type="text" placeholder="Email liên hệ">
                                    </div>
                                    <div class="col-sm-12 mb-2">
                                        <input class="form-control" autocomplete="off"  type="text" placeholder="Địa chỉ liên hệ"
                                            name="address">
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="create_user-wrapper">
                            <div class="create_user-title mb-2">Thông tin công việc</div>
                            <div class="row">
                                <div class="col-sm-4 mb-2">
                                    <input class="form-control" autocomplete="off" required  type="text" placeholder="Mã nhân viên *"
                                        name="code">
                                </div>

                                <div class="col-sm-4 mb-2">
                                    <input class="form-control" autocomplete="off"  type="tel"
                                        required placeholder="SĐT liên hệ *">
                                </div>

                                <div class="col-sm-4 mb-2">
                                    <input class="form-control" autocomplete="off" required  type="email" placeholder="Email công ty *"
                                        name="email">
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <select id="onchangeDonViCongTac" class="selectpicker" required data-live-search="true" name="departement"
                                        data-width="100%" title="Đơn vị công tác *"
                                        data-live-search-placeholder="Tìm kiếm..." data-size="3">
                                        @foreach ($listDepartments->data as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                        <option value="themDonViCongTac" class="text-danger">+ Thêm mới</option>
                                    </select>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="d-flex align-items-center">
                                        <select id="onchangeCapNhanSu" class="selectpicker" required title="Cấp nhân sự *" name="position_level"
                                            data-width="100%" data-live-search="true"
                                            data-live-search-placeholder="Tìm kiếm..." data-size="3">
                                            @foreach ($listPositionLevel->data as $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                            <option value="themCapNhanSu" class="text-danger">+ Thêm mới</option>
                                        </select>
                                        {{-- <div class="modal_list-more" data-bs-toggle="modal"
                                            data-bs-target="#danhsachCapToChuc">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="">
                                        <div class="d-flex align-items-center">

                                            <select required class="selectpicker"
                                                title="Vị trí/Chức danh *" name="position" data-width="100%"
                                                data-live-search="true" data-live-search-placeholder="Tìm kiếm..."
                                                data-size="3">
                                                @foreach ($listPositions->data as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <div class="modal_list-more" data-bs-toggle="modal"
                                                data-bs-target="#danhsachVitriChucdanh">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <select class="selectpicker" title="Quản lý trực tiếp" data-live-search="true">
                                        @foreach ($listUsers->data as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <input type="text" readonly class="form-control" placeholder="Quỹ lương năm" />
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="d-flex align-items-center">

                                        <select class="selectpicker" title="Gói trang bị" data-width="100%"
                                            data-live-search="true" data-live-search-placeholder="Tìm kiếm..."
                                            data-size="3">
                                            <option>Trang bị hành chính</option>
                                            <option>Trang bị cơ bản</option>
                                            <option>Trang bị Nhân viên</option>
                                            <option>Trang bị Chuyên viên</option>
                                            <option>Trang bị Quản lý</option>
                                            <option>Trang bị Giám đốc</option>
                                        </select>
                                        {{-- <div class="modal_list-more" data-bs-toggle="modal"
                                            data-bs-target="#danhsachtrangbi">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <select class="selectpicker" title="Hình thức làm việc" data-width="100%"
                                        data-live-search="true" data-live-search-placeholder="Tìm kiếm..."
                                        data-size="3">
                                        <option>Chính thức</option>
                                        <option>Thử việc</option>
                                        <option>Cộng tác viên</option>
                                        <option>Thực tập sinh</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <select class="selectpicker" title="Trạng thái">
                                        <option>Đang làm việc</option>
                                        <option>Đã nghỉ việc</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Danh sach phong ban -->
    <div class="modal fade" id="danhsachPhongBan" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Danh sách phòng ban</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label ms-3" for="flexRadioDefault1">
                                        Cung ứng
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label ms-3" for="flexRadioDefault2">
                                        Trade Marketing
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label ms-3" for="flexRadioDefault3">
                                        Digital Marketing
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4">
                                    <label class="form-check-label ms-3" for="flexRadioDefault4">
                                        Truyền thông
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label ms-3" for="flexRadioDefault5">
                                        Quản trị Nhãn/Đào tạo
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6">
                                    <label class="form-check-label ms-3" for="flexRadioDefault6">
                                        Kho & Giao vận
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault7">
                                    <label class="form-check-label ms-3" for="flexRadioDefault7">
                                        Hành chính nhân sự
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault8">
                                    <label class="form-check-label ms-3" for="flexRadioDefault8">
                                        Kế toán
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault9">
                                    <label class="form-check-label ms-3" for="flexRadioDefault9">
                                        Tài chính
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Dịch vụ bán hàng
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault11">
                                    <label class="form-check-label ms-3" for="flexRadioDefault11">
                                        Kinh doanh OTC
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault12">
                                    <label class="form-check-label ms-3" for="flexRadioDefault12">
                                        Kinh doanh ETC
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault13">
                                    <label class="form-check-label ms-3" for="flexRadioDefault13">
                                        Kinh doanh MT
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault14">
                                    <label class="form-check-label ms-3" for="flexRadioDefault14">
                                        Kinh doanh online
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <div class="btn text-primary" data-bs-toggle="modal" data-bs-target="#themPhongBan">
                                <i class="bi bi-plus"></i>
                                Thêm mới
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#themViTriCongViec">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Danh sach vị trí/chức danh -->
    <div class="modal fade" id="danhsachVitriChucdanh" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">DANH SÁCH VỊ TRÍ/ CHỨC DANH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="repeater-dsViTri">
                        <div class="row" data-repeater-list="kpiKeys">
                            @foreach ($listPositions->data as $value)
                            
                                <div class="col-md-6" data-repeater-item>
                                    <div
                                        class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3">
                                            <label value="{{ $value->id }}" class="form-check-label ms-3"
                                                for="flexRadioDefault1">
                                                {{ $value->name }}
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            @endforeach

                            
                        </div>
                        <div class="col-md-6 btn text-primary" {{-- data-bs-toggle="modal" data-bs-target="#themChucDanh" --}}>
                            <div role="button" class="fs-4 text-danger"
                                                                                                            data-repeater-create><i
                                                                                                                class="bi bi-plus-circle"></i></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#themPhongBan">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Danh sach cap to chuc -->
    <div class="modal fade" id="danhsachCapToChuc" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">DANH SÁCH CẤP Nhân sự</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label ms-3" for="flexRadioDefault1">
                                        Công ty con
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label ms-3" for="flexRadioDefault2">
                                        Chi nhánh
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label ms-3" for="flexRadioDefault3">
                                        Văn phòng đại diện
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4">
                                    <label class="form-check-label ms-3" for="flexRadioDefault4">
                                        Văn phòng
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label ms-3" for="flexRadioDefault5">
                                        Trung tâm
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6">
                                    <label class="form-check-label ms-3" for="flexRadioDefault6">
                                        Phòng ban
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault7">
                                    <label class="form-check-label ms-3" for="flexRadioDefault7">
                                        Nhóm/tổ/đội
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault8">
                                    <label class="form-check-label ms-3" for="flexRadioDefault8">
                                        Phân xưởng
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault9">
                                    <label class="form-check-label ms-3" for="flexRadioDefault9">
                                        Nhà máy
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Công ty thành viên
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="btn text-primary mt-3" data-bs-toggle="modal" data-bs-target="#themPhongBan">
                                <i class="bi bi-plus"></i>
                                Thêm mới
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#themPhongBan">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Danh sach chuc danh -->
    <div class="modal fade" id="danhsachChucDanh" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">DANH SÁCH CHỨC DANH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label ms-3" for="flexRadioDefault1">
                                        Chủ tịch HĐQT
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label ms-3" for="flexRadioDefault2">
                                        Tổng Giám đốc
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault3">
                                    <label class="form-check-label ms-3" for="flexRadioDefault3">
                                        Phó Tổng Giám đốc
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault4">
                                    <label class="form-check-label ms-3" for="flexRadioDefault4">
                                        Giám đốc điều hành
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault5">
                                    <label class="form-check-label ms-3" for="flexRadioDefault5">
                                        Quản lý cấp cao
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault6">
                                    <label class="form-check-label ms-3" for="flexRadioDefault6">
                                        Quản lý cấp trung
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault7">
                                    <label class="form-check-label ms-3" for="flexRadioDefault7">
                                        Trưởng phòng
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault8">
                                    <label class="form-check-label ms-3" for="flexRadioDefault8">
                                        Phó phòng
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault9">
                                    <label class="form-check-label ms-3" for="flexRadioDefault9">
                                        Trưởng nhóm
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Chuyên viên
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Nhân viên
                                    </label>
                                </div>
                                <div class="form-check_actions">
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/edit.svg') }}" />
                                    </div>
                                    <div class="btn">
                                        <img style="width:16px;height:16px"
                                            src="{{ asset('assets/img/trash.svg') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="btn text-primary mt-3" {{-- data-bs-toggle="modal" data-bs-target="#themChucDanh" --}}>
                                <i class="bi bi-plus"></i>
                                Thêm mới
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#themThanhVien">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Danh sach trang bị -->
    <div class="modal fade" id="danhsachtrangbi" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">DANH SÁCH TRANG BỊ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div
                            class="col-md-6 form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label ms-3" for="flexRadioDefault1">
                                    Trang bị hành chính
                                </label>
                            </div>
                            <div class="form-check_actions">
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                </div>
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-md-6 form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label ms-3" for="flexRadioDefault2">
                                    Trang bị cơ bản
                                </label>
                            </div>
                            <div class="form-check_actions">
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                </div>
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                </div>
                            </div>
                        </div>

                        <div
                            class=" col-md-6 form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault3">
                                <label class="form-check-label ms-3" for="flexRadioDefault3">
                                    Trang bị Nhân viên
                                </label>
                            </div>
                            <div class="form-check_actions">
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                </div>
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                </div>
                            </div>
                        </div>

                        <div
                            class=" col-md-6 form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault4">
                                <label class="form-check-label ms-3" for="flexRadioDefault4">
                                    Trang bị Chuyên viên
                                </label>
                            </div>
                            <div class="form-check_actions">
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                </div>
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                </div>
                            </div>
                        </div>

                        <div
                            class="col-md-6 form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault5">
                                <label class="form-check-label ms-3" for="flexRadioDefault5">
                                    Quản lý cấp cao
                                </label>
                            </div>
                            <div class="form-check_actions">
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                </div>
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                </div>
                            </div>
                        </div>

                        <div
                            class=" col-md-6 form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault6">
                                <label class="form-check-label ms-3" for="flexRadioDefault6">
                                    Quản lý cấp trung
                                </label>
                            </div>
                            <div class="form-check_actions">
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                </div>
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                </div>
                            </div>
                        </div>

                        <div
                            class=" col-md-6 form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault7">
                                <label class="form-check-label ms-3" for="flexRadioDefault7">
                                    Trưởng phòng
                                </label>
                            </div>
                            <div class="form-check_actions">
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                </div>
                                <div class="btn">
                                    <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 btn text-primary" {{-- data-bs-toggle="modal" data-bs-target="#themChucDanh" --}}>
                            <i class="bi bi-plus"></i>
                            Thêm mới
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#themThanhVien">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Them phong ban -->
    <div class="modal fade" id="themPhongBan" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM ĐƠN VỊ/PHÒNG BAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Tên đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Tên đơn vị">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Mã đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập Mã đơn vị">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Thuộc đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn đơn vị">
                                        <option>Doppelherz</option>
                                        <option>CTCP Mastertran</option>
                                        <option>CTCP Thái Bình Hưng Thịnh</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Cấp tổ chức <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8 d-flex align-items-center">
                                    <select class="selectpicker" title="Chọn cấp tổ chức">
                                        <option>Công ty con</option>
                                        <option>Chi nhánh</option>
                                        <option>Văn phòng đại diện</option>
                                        <option>Văn phòng</option>
                                        <option>Trung tâm</option>
                                        <option>Phòng ban</option>
                                        <option>Nhóm/tổ/đội</option>
                                        <option>Phân xưởng</option>
                                        <option>Nhà máy</option>
                                        <option>Công ty thành viên</option>
                                    </select>
                                    <div class="modal_list-more" data-bs-toggle="modal"
                                        data-bs-target="#danhsachCapToChuc">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trưởng đơn vị <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <select class="selectpicker" title="Chọn trưởng đơn vị">
                                        <option>Nguyễn Ngọc Bảo</option>
                                        <option>Đặng Nguyễn Lam Mai</option>
                                        <option>Hồ Thị Hồng Vân</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Trụ sở chính <span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập địa chỉ">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-2">
                                    <div class="modal_body-title">Chức năng <br> nhiệm vụ<span
                                            class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nhập Chức năng, nhiệm vụ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#themViTriCongViec">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Them Vi Tri Cong Viec -->
    <div class="modal fade" id="themViTriCongViec" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                                    <div class="modal_body-title">Mã vị trí<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập mã vị trí">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Tên vị trí<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Nhập tên vị trí">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Phòng ban<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8 d-flex align-items-center">
                                    <select class="selectpicker" title="Chọn phòng ban">
                                        <option>Cung ứng</option>
                                        <option>Trade Marketing</option>
                                        <option>Digital Marketing</option>
                                        <option>Truyền thông</option>
                                        <option>Quản trị Nhãn/Đào tạo</option>
                                        <option>Kho & Giao vận</option>
                                        <option>Hành chính nhân sự</option>
                                        <option>Kế toán</option>
                                        <option>Tài chính</option>
                                        <option>Dịch vụ bán hàng</option>
                                        <option>Kinh doanh OTC</option>
                                        <option>Kinh doanh ETC</option>
                                        <option>Kinh doanh MT</option>
                                        <option>Kinh doanh online</option>
                                    </select>
                                    <div class="modal_list-more" data-bs-toggle="modal"
                                        data-bs-target="#danhsachPhongBan">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex col-sm-4">
                                    <div class="modal_body-title">Cấp nhân sự<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-8 d-flex align-items-center">
                                    <select class="selectpicker" title="Chọn cấp nhân sự">
                                        <option>Chủ tịch HĐQT</option>
                                        <option>Tổng Giám đốc</option>
                                        <option>Phó Tổng Giám đốc</option>
                                        <option>Giám đốc điều hành</option>
                                        <option>Quản lý cấp cao</option>
                                        <option>Quản lý cấp trung</option>
                                        <option>Trưởng phòng</option>
                                        <option>Phó phòng</option>
                                        <option>Trưởng nhóm</option>
                                        <option>Chuyên viên</option>
                                        <option>Nhân viên</option>
                                    </select>
                                    <div class="modal_list-more" data-bs-toggle="modal"
                                        data-bs-target="#danhsachChucDanh">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#themThanhVien">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal TRANG BỊ HÀNH CHÍNH -->
    <div class="modal fade" id="trangBiHanhChinh" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">TRANG BỊ HÀNH CHÍNH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab"
                                aria-controls="v-pills-home" aria-selected="true">Trang bị cơ bản</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Trang bị nhân viên</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">Trang bị chuyên viên</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Trang bị quản lý</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings2" type="button" role="tab"
                                aria-controls="v-pills-settings2" aria-selected="false">Trang bị Giám đốc</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="3" checked>
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="4" checked>
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="5" checked>
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="3">
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="4">
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="5">
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="3" checked>
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="4">
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="5">
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="1">
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="2">
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="3">
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="4" checked>
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="5" checked>
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="3" checked>
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="4" checked>
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="5" checked>
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault"
                                        id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
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

    <!-- Modal Them Vi Tri chức danh -->
    <div class="modal fade" id="themViTriChucDanh" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM Vị trí/Chức danh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/danh-sach-vi-tri" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Mã vị trí<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập mã vị trí">
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Tên vị trí<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập tên vị trí" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Đơn vị công tác<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8 d-flex align-items-center" >
                                        <select class="selectpicker" title="Chọn đơn vị công tác">
                                            <option>Cung ứng</option>
                                            <option>Trade Marketing</option>
                                            <option>Digital Marketing</option>
                                            <option>Truyền thông</option>
                                            <option>Quản trị Nhãn/Đào tạo</option>
                                            <option>Kho & Giao vận</option>
                                            <option>Hành chính nhân sự</option>
                                            <option>Kế toán</option>
                                            <option>Tài chính</option>
                                            <option>Dịch vụ bán hàng</option>
                                            <option>Kinh doanh OTC</option>
                                            <option>Kinh doanh ETC</option>
                                            <option>Kinh doanh MT</option>
                                            <option>Kinh doanh online</option>
                                        </select>
                                        <div class="modal_list-more" data-bs-toggle="modal"
                                            data-bs-target="#danhsachPhongBan">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Cấp nhân sự<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8 d-flex align-items-center">
                                        <select class="selectpicker" title="Chọn cấp nhân sự">
                                            <option>Chủ tịch HĐQT</option>
                                            <option>Tổng Giám đốc</option>
                                            <option>Phó Tổng Giám đốc</option>
                                            <option>Giám đốc điều hành</option>
                                            <option>Quản lý cấp cao</option>
                                            <option>Quản lý cấp trung</option>
                                            <option>Trưởng phòng</option>
                                            <option>Phó phòng</option>
                                            <option>Trưởng nhóm</option>
                                            <option>Chuyên viên</option>
                                            <option>Nhân viên</option>
                                        </select>
                                        <div class="modal_list-more" data-bs-toggle="modal"
                                            data-bs-target="#danhsachChucDanh">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Định biên<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" name="max_employees">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Quỹ lương năm<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="salary_fund"  />
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Gói trang bị<span class="text-danger">*</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" >Hủy</button>
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Modal Them cấp nhân sự-->
    <div class="modal fade" id="themCapNhanSu" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM CẤP NHÂN SỰ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/danh-sach-cap-nhan-su" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <input class="form-control" type="text" placeholder="Nhập mã cấp nhân sự">
                            </div>
    
                            <div class="col-sm-6 mb-3">
                                <input class="form-control" type="text" placeholder="Nhập tên cấp nhân sự" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themThanhVien">Hủy</button>
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')

    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

    <script>
        $(document).ready(function() {
            $.datetimepicker.setLocale('vi');
            $('#ngayThuViec').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
            $('#ngayChinhThuc').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
            $('#suaNgayThuViec').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
            $('#suaNgayChinhThuc').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
            $('#createUser').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
            $('#suaCreateUser').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });

            $('#onchangeViTriCongViec').change(function() {
                var opval = $(this).val();
                if (opval == "themViTriCongViec") {
                    $('#themViTriCongViec').modal("show");
                    $('#themThanhVien').modal("hide");
                }
            });
            $('#onchangeViTriChucDanh').change(function() {
                var opval = $(this).val();
                if (opval == "themViTriChucDanh") {
                    $('#themViTriChucDanh').modal("show");
                    $('#themThanhVien').modal("hide");
                }
            });
            $('#onchangeCapNhanSu').change(function() {
                var opval = $(this).val();
                if (opval == "themCapNhanSu") {
                    $('#themCapNhanSu').modal("show");
                    $('#themThanhVien').modal("hide");
                }
            });
        });
    </script>
    <script>
        function editImg(value) {
            var path = value.value;
            var extenstion = path.split('.').pop();
            if (extenstion == "jpg" || extenstion == "svg" || extenstion == "jpeg" || extenstion == "png" || extenstion ==
                "gif") {
                document.getElementById('edit_image-preview').src = window.URL.createObjectURL(value.files[0]);
            } else {
                alert("Không hỗ trợ định dạng này. ")
            }
        }

        function createImg(value) {
            var path = value.value;
            var extenstion = path.split('.').pop();
            if (extenstion == "jpg" || extenstion == "svg" || extenstion == "jpeg" || extenstion == "png" || extenstion ==
                "gif") {
                document.getElementById('create_image-preview').src = window.URL.createObjectURL(value.files[0]);
            } else {
                alert("Không hỗ trợ định dạng này. ")
            }
        }
    </script>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", () => {
            // Click Tree
            const clickTrees = document.querySelectorAll(".clicktree");
            clickTrees.forEach((clickTree) => {
                clickTree.addEventListener("click", () => {
                    const id = clickTree.getAttribute("data-href");
                    const element = document.querySelector(id);
                    if (element) {
                        const items = document.querySelectorAll(".body_content-wrapper");
                        items.forEach((item) => {
                            item.style.display = "none";
                        });
                        element.style.display = "block";
                        const noContent = document.querySelector(".body_noContent-wrapper");
                        noContent.style.display = "none";
                    } else {
                        const items = document.querySelectorAll(".body_content-wrapper");
                        items.forEach((item) => {
                            item.style.display = "none";
                        });
                    }
                });
            });

            // Search Tree
            document.querySelector("#search_tree").addEventListener("keyup", function() {
                var value = this.value.toLowerCase();
                var lis = document.querySelectorAll(".tree li");
                for (var i = 0; i < lis.length; i++) {
                    var li = lis[i];
                    var text = li.textContent.toLowerCase();
                    if (text.indexOf(value) > -1) {
                        li.style.display = "";
                    } else {
                        li.style.display = "none";
                    }
                }
            });
        });
    </script>

    <script>
        const targetTable = $('#dsToanCongTy').DataTable({
            paging: true,
            ordering: false,
            order: [[0, 'desc']],
            pageLength: 10,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"d-flex justify-content-between"<"card-title-left"><"d-flex "f<"card-title-right justify-content-end">>>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-left').html(`
        <div class="title_wrapper d-flex align-items-center justify-content-between mb-3">
            <div class="d-flex align-items-center">
                <div class="card-title me-3">Toàn công ty</div>
                <div class="title_filter d-flex align-items-center" style="gap:10px">
                    <div class="title_filter-item">
                        <select class="selectpicker" data-live-search="true"
                        multiple    
                        title="Chọn hình thức làm việc..."
                            data-selected-text-format="count > 1"
                            data-count-selected-text="Có {0} thành viên"
                            data-actions-box="true"
                            data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn"
                            data-size="3"
                            data-live-search-placeholder="Tìm kiếm...">
                            <option>Chính thức</option>
                            <option>Thử việc</option>
                            <option>Cộng tác viên</option>
                            <option>Thực tập sinh</option>
                        </select>
                    </div>
                    <div class="title_filter-item">
                        <select class="selectpicker" data-width="100%"
                        multiple    
                        data-live-search="true" title="Chọn trạng thái..."
                            data-selected-text-format="count > 1"
                            data-count-selected-text="Có {0} thành viên"
                            data-actions-box="true"
                            data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn"
                            data-size="3"
                            data-live-search-placeholder="Tìm kiếm...">
                            <option>Đã nghỉ việc</option>
                            <option>Đang làm việc</option>
                        </select>
                    </div>
                    <div class="title_filter-item">
                        <select class="selectpicker" data-width="100%"
                        multiple    
                        data-live-search="true" title="Chọn Vị trí..."
                            data-selected-text-format="count > 1"
                            data-count-selected-text="Có {0} thành viên"
                            data-actions-box="true"
                            data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn"
                            data-size="3"
                            data-live-search-placeholder="Tìm kiếm...">
                            <option>Giám đốc</option>
                            <option>Trưởng phòng</option>
                            <option>Thư kí</option>
                        </select>
                    </div>
                </div>
            </div>

            
        </div>
        `);
        $('div.card-title-right').html(`
            <div class="action_wrapper d-flex">
                <div class="action_export ms-3" data-bs-toggle="tooltip"
                    data-bs-placement="top" aria-label="Thêm thành viên"
                    data-bs-original-title="Thêm thành viên">
                    <button class="btn btn-danger d-block" data-bs-toggle="modal"
                        data-bs-target="#themThanhVien">Thêm thành viên</button>
                </div>
            </div>
        `);
    </script>

@endsection
