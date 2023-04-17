@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách vị trí')

@section('header-style')
    {{-- <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-treeSelect/cbtree.css') }}"> --}}
@endsection

@section('content')
    @include('template.sidebar.sidebardanhSachViTri.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách vị trí
                        </h5>
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body position-relative body_content-wrapper" style="display:block" id="body_content-1">
                                    <div class="table-responsive dataTables_wrapper">
                                        <table id="danhSachViTri" class="table table-responsive table-hover table-bordered">
                                            <thead>
                                                <tr class="bg-light">
                                                    <th class="text-nowrap" style="width: 2%">STT</th>
                                                    <th class="text-nowrap" style="width: 5%">Mã vị trí</th>
                                                    <th class="text-nowrap" style="width: 12%">Tên vị trí/chức danh</th>
                                                    <th class="text-nowrap" style="width: 10%">Cấp nhân sự</th>
                                                    <th class="text-nowrap" style="width: 10%">Đơn vị công tác</th>
                                                    <th class="text-nowrap" style="width: 32%">Mô tả Công việc (Tóm tắt)</th>
                                                    <th class="text-nowrap" style="width: 6%">Định biên</th>
                                                    <th class="text-nowrap" style="width: 10%">Quỹ lương năm</th>
                                                    <th class="text-nowrap" style="width: 8%">Gói trang bị</th>
                                                    @if (session('user')['role'] == 'admin')
                                                        <th class="text-nowrap" style="width: 5%">Hành động</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data->data as $value)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                {{ $loop->iteration }}
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="text-nowrap d-block text-truncate" style="max-width:47px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="AMKT">AMKT</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-block text-truncate" style="max-width:140px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{ $value->name }}">{{ $value->name }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-block text-truncate" style="max-width:100px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                @foreach ($listPositionLevel->data as $level)
                                                                    @if ($level->id == $value->position_level)
                                                                        {{ $level->name }}
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-block text-truncate" style="max-width:100px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="">
                                                                @foreach ($listDepartments->data as $dep)
                                                                    @if ($dep->id == $value->department_id)
                                                                        {{ $dep->name }}
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-block text-truncate" style="max-width:330px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $value->description }}">
                                                                {{ $value->description }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-block text-truncate text-center" style="max-width:50px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $value->max_employees }}">
                                                                {{ $value->max_employees }}</div>

                                                        </td>
                                                        <td>
                                                            <div class="text-nowrap d-block text-truncate text-center" style="max-width:100px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $value->salary_fund }}">
                                                                {{ $value->salary_fund }}</div>
                                                        </td>
                                                        <td>
                                                            <div data-bs-toggle="modal" data-bs-target="#trangBiHanhChinh">
                                                                Pack Quản lý
                                                            </div>
                                                        </td>
                                                        @if (session('user')['role'] == 'admin')
                                                            <td>
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <div class="btn" data-bs-toggle="modal" data-bs-target="#suaDSThemViTri{{ $value->id }}">
                                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal" data-bs-target="#xoaViTri{{ $value->id }}">
                                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        @endif
                                                    </tr>

                                                    {{-- Xóa Vi tri --}}
                                                    <div class="modal fade" id="xoaViTri{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa vị trí</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Bạn có thực sự muốn xoá vị trí này không?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                    <form action="{{ route('position.delete', $value->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Xóa</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal Sua Vi Tri chức danh -->
                                                    <div class="modal fade" id="suaDSThemViTri{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header text-center">
                                                                    <h5 class="modal-title w-100" id="exampleModalLabel">Sửa Vị trí/Chức danh
                                                                    </h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <form method="POST" action="{{ route('position.update', $value->id) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mb-3">
                                                                                <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã vị trí" value="AMKT">
                                                                            </div>

                                                                            <div class="col-sm-6 mb-3">
                                                                                <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tên vị trí" name="name" value="{{ $value->name }}">
                                                                            </div>
                                                                            <div class="col-sm-6 mb-3">
                                                                                <select class="selectpicker" required data-live-search="true" name="parent" data-width="100%" title="Đơn vị công tác *" data-live-search-placeholder="Tìm kiếm..." data-size="3">
                                                                                    @foreach ($listDepartments->data as $dep)
                                                                                        @if ($dep->id != $value->parent)
                                                                                            <option value="{{ $value->parent }}">
                                                                                                {{ $dep->name }}
                                                                                            </option>
                                                                                        @else
                                                                                            <option value="{{ $value->parent }}" selected>
                                                                                                {{ $dep->name }}
                                                                                            </option>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </select>

                                                                            </div>
                                                                            <div class="col-sm-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Cấp nhân sự">
                                                                                <select id="onchangeCapNhanSu" class="selectpicker" required title="Cấp nhân sự *" name="position_level" data-width="100%" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="3">
                                                                                    @foreach ($listPositionLevel->data as $pl)
                                                                                        @if ($pl->id != $value->position_level)
                                                                                            <option value="{{ $value->position_level }}">
                                                                                                {{ $pl->name }}
                                                                                            </option>
                                                                                        @else
                                                                                            <option value="{{ $value->position_level }}" selected>
                                                                                                {{ $pl->name }}
                                                                                            </option>
                                                                                        @endif
                                                                                    @endforeach

                                                                                    <option value="themCapNhanSu" class="text-danger">+ Thêm mới</option>
                                                                                </select>

                                                                                {{-- <div class="modal_list-more" data-bs-toggle="modal"
                                                                                data-bs-target="#danhsachChucDanh">
                                                                                <i class="bi bi-three-dots-vertical"></i>
                                                                            </div> --}}

                                                                            </div>

                                                                            <div class="col-sm-12 mb-3">
                                                                                <textarea data-bs-toggle="tooltip" name="description" data-bs-placement="top" title="Mô tả công việc" class="form-control">{{ $value->description }}</textarea>
                                                                            </div>

                                                                            <div class="col-sm-4 mb-3">
                                                                                <input class="form-control" type="number" min="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Định biên" name="max_employees" value="{{ $value->max_employees }}">
                                                                            </div>
                                                                            <div class="col-sm-4 mb-3">
                                                                                <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Quỹ lương năm" name="salary_fund" value="{{ $value->salary_fund }}" />
                                                                            </div>
                                                                            <div class="col-sm-4 mb-3">
                                                                                <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Gói trang bị" readonly value="2 gói" />
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
                                                @endforeach
                                            </tbody>
                                        </table>
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
    {{-- Xóa Vi tri --}}
    <div class="modal fade" id="xoaViTri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa vị trí</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có thực sự muốn xoá vị trí này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Xóa</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Them Co Cau -->
    <div class="modal fade" id="suaDonViPhongBan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <div class="modal_list-more" data-bs-toggle="modal" data-bs-target="#danhsachCapToChuc">
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
                                    <input class="form-control" type="text" value="219 Trung Kính, Yên Hòa, Cầu Giấy, Hà Nội">
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
                                    <input class="form-control" type="text" value="Xây dựng chiến lược truyền thông và chiến lược Marketing để tiếp cận với nhóm khách hàng.">
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

    <!-- Modal Danh sach phong ban -->
    <div class="modal fade" id="danhsachPhongBan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Danh sách phòng ban</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label ms-3" for="flexRadioDefault1">
                                        Cung ứng
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label ms-3" for="flexRadioDefault2">
                                        Trade Marketing
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label ms-3" for="flexRadioDefault3">
                                        Digital Marketing
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                    <label class="form-check-label ms-3" for="flexRadioDefault4">
                                        Truyền thông
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                    <label class="form-check-label ms-3" for="flexRadioDefault5">
                                        Quản trị Nhãn/Đào tạo
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                    <label class="form-check-label ms-3" for="flexRadioDefault6">
                                        Kho & Giao vận
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                    <label class="form-check-label ms-3" for="flexRadioDefault7">
                                        Hành chính nhân sự
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                                    <label class="form-check-label ms-3" for="flexRadioDefault8">
                                        Kế toán
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                                    <label class="form-check-label ms-3" for="flexRadioDefault9">
                                        Tài chính
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Dịch vụ bán hàng
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault11">
                                    <label class="form-check-label ms-3" for="flexRadioDefault11">
                                        Kinh doanh OTC
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault12">
                                    <label class="form-check-label ms-3" for="flexRadioDefault12">
                                        Kinh doanh ETC
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault13">
                                    <label class="form-check-label ms-3" for="flexRadioDefault13">
                                        Kinh doanh MT
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault14">
                                    <label class="form-check-label ms-3" for="flexRadioDefault14">
                                        Kinh doanh online
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
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themDSThemViTri">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Danh sach cap to chuc -->
    <div class="modal fade" id="danhsachCapToChuc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">DANH SÁCH CẤP TỔ CHỨC</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label ms-3" for="flexRadioDefault1">
                                        Công ty con
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label ms-3" for="flexRadioDefault2">
                                        Chi nhánh
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label ms-3" for="flexRadioDefault3">
                                        Văn phòng đại diện
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                    <label class="form-check-label ms-3" for="flexRadioDefault4">
                                        Văn phòng
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                    <label class="form-check-label ms-3" for="flexRadioDefault5">
                                        Trung tâm
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                    <label class="form-check-label ms-3" for="flexRadioDefault6">
                                        Phòng ban
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                    <label class="form-check-label ms-3" for="flexRadioDefault7">
                                        Nhóm/tổ/đội
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                                    <label class="form-check-label ms-3" for="flexRadioDefault8">
                                        Phân xưởng
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                                    <label class="form-check-label ms-3" for="flexRadioDefault9">
                                        Nhà máy
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Công ty thành viên
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
                            <div class="btn text-primary mt-3" data-bs-toggle="modal" data-bs-target="#themPhongBan">
                                <i class="bi bi-plus"></i>
                                Thêm mới
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themPhongBan">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Danh sach chuc danh -->
    <div class="modal fade" id="danhsachChucDanh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">DANH SÁCH CHỨC DANH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label ms-3" for="flexRadioDefault1">
                                        Chủ tịch HĐQT
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label ms-3" for="flexRadioDefault2">
                                        Tổng Giám đốc
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label ms-3" for="flexRadioDefault3">
                                        Phó Tổng Giám đốc
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                    <label class="form-check-label ms-3" for="flexRadioDefault4">
                                        Giám đốc điều hành
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                                    <label class="form-check-label ms-3" for="flexRadioDefault8">
                                        Phó phòng
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                                    <label class="form-check-label ms-3" for="flexRadioDefault9">
                                        Trưởng nhóm
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Chuyên viên
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
                            <div class="form-check_wrapper d-flex justify-content-between align-items-center border-bottom">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                                    <label class="form-check-label ms-3" for="flexRadioDefault10">
                                        Nhân viên
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
                            <div class="btn text-primary mt-3" {{-- data-bs-toggle="modal" data-bs-target="#themChucDanh" --}}>
                                <i class="bi bi-plus"></i>
                                Thêm mới
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themDSThemViTri">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Them phong ban -->
    <div class="modal fade" id="themPhongBan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
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
                                    <div class="modal_list-more" data-bs-toggle="modal" data-bs-target="#danhsachCapToChuc">
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
                                    <div class="modal_body-title">Chức năng <br> nhiệm vụ<span class="text-danger">*</span></div>
                                </div>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Nhập Chức năng, nhiệm vụ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themViTriCongViec">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Them Vi Tri chức danh -->
    <div class="modal fade" id="themDSThemViTri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM Vị trí/Chức danh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('position.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <input class="form-control" type="text" required placeholder="Nhập mã vị trí *">
                            </div>

                            <div class="col-sm-6 mb-3">
                                <input class="form-control" required type="text" placeholder="Nhập tên vị trí *" name="name">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <select class="selectpicker" required name="parent" title="Chọn đơn vị công tác *" data-width="100%" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="5">
                                    @foreach ($listDepartments->data as $dep)
                                        @if ($dep->id == $value->parent)
                                            <option value="{{ $value->parent }}">
                                                {{ $dep->name }}
                                            </option>
                                        @else
                                            <option value="{{ $value->parent }}">
                                                {{ $dep->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <select id="onchangeCapNhanSu" class="selectpicker" required placeholder="Chọn cấp nhân sự *" name="position_level" title="Chọn cấp nhân sự " data-width="100%" data-live-search="true" data-live-search-placeholder="Tìm kiếm..." data-size="5">
                                    @foreach ($listPositionLevel->data as $level)
                                        @if ($level->id != $value->position_level)
                                            <option value="{{ $value->position_level }}">
                                                {{ $level->name }}
                                            </option>
                                        @else
                                            <option value="{{ $value->position_level }}">
                                                {{ $level->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                    <option value="themCapNhanSu" class="text-danger">+ Thêm mới</option>
                                </select>
                            </div>
                            <div class="col-sm12 mb-3">
                                <textarea class="form-control" name="description" placeholder="Nhập mô tả công việc"></textarea>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input class="form-control" required type="number" min="0" name="max_employees" placeholder="Định biên *">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input class="form-control" required type="number" min="0" name="salary_fund" placeholder="Quỹ lương năm *" />
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input class="form-control" placeholder="Gói trang bị" type="text" readonly />
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

    <!-- Modal TRANG BỊ HÀNH CHÍNH -->
    <div class="modal fade" id="trangBiHanhChinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">TRANG BỊ HÀNH CHÍNH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Trang bị cơ bản</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Trang bị nhân viên</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Trang bị chuyên viên</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Trang bị quản lý</button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings2" type="button" role="tab" aria-controls="v-pills-settings2" aria-selected="false">Trang bị Giám đốc</button>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" checked>
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" checked>
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" checked>
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3">
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4">
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5">
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" checked>
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4">
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5">
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1">
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2">
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3">
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" checked>
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" checked>
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
                                    <label class="form-check-label" for="8">
                                        Ô tô
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="1" checked>
                                    <label class="form-check-label" for="1">
                                        Hộp đựng bút
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="2" checked>
                                    <label class="form-check-label" for="2">
                                        Bàn ghế
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="3" checked>
                                    <label class="form-check-label" for="3">
                                        Áo phông Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="4" checked>
                                    <label class="form-check-label" for="4">
                                        Áo sơ mi Doppelherz
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="5" checked>
                                    <label class="form-check-label" for="5">
                                        Sổ tay
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="6" checked>
                                    <label class="form-check-label" for="6">
                                        Tủ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="7" checked>
                                    <label class="form-check-label" for="7">
                                        Máy tính
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="8" checked>
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

    <!-- Modal Them cấp nhân sự-->
    <div class="modal fade" id="themCapNhanSu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#themDSThemViTri">Hủy</button>
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer-script')
    {{-- <script src="{{ asset('assets/plugins/jquery-treeSelect/cbtree.js') }}" type="text/javascript"></script> --}}

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
            $('#onchangePhongBan').change(function() {
                var opval = $(this).val();
                if (opval == "themPhongBan") {
                    $('#themPhongBan').modal("show");
                    $('#themThanhVien').modal("hide");
                }
            });
            $('#onchangeViTriCongViec').change(function() {
                var opval = $(this).val();
                if (opval == "themViTriCongViec") {
                    $('#themViTriCongViec').modal("show");
                    $('#themThanhVien').modal("hide");
                }
            });
            $('#onchangeCapNhanSu').change(function() {
                var opval = $(this).val();
                if (opval == "themCapNhanSu") {
                    $('#themCapNhanSu').modal("show");
                    $('#themDSThemViTri').modal("hide");
                }
            });
        });
    </script>
    <script>
        function fileValue(value) {
            var path = value.value;
            var extenstion = path.split('.').pop();
            if (extenstion == "jpg" || extenstion == "svg" || extenstion == "jpeg" || extenstion == "png" || extenstion ==
                "gif") {
                document.getElementById('image-preview').src = window.URL.createObjectURL(value.files[0]);
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
        $(document).ready(function() {
            $('#danhSachViTri').DataTable({
                paging: true,
                ordering: false,
                order: [
                    [0, 'desc']
                ],
                pageLength: 30,
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
                    sLengthMenu: "_MENU_ bản ghi trên trang",
                },
                dom: '<"d-flex justify-content-between align-items-center mb-3"<"card-title-wrapper-left"><"d-flex "f<"card-title-wrapper-right justify-content-end">>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
            });
            $('div.card-title-wrapper-left').html(`
                <div class="card-title">Toàn Công Ty</div>
            `);
            $('div.card-title-wrapper-right').html(`
                @if (session('user')['role'] == 'admin')
                <div class="main_search d-flex ms-3">
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#themDSThemViTri">Thêm vị trí</button>
                </div>
                @endif
            `);
        });
    </script>

    <script type="text/javascript">
        var data = [{
            id: 0,
            title: 'Công ty Cổ phần Mastertran',
            subs: [{
                    id: 00,
                    title: 'Khối Kinh doanh',
                    subs: [{
                        id: 000,
                        title: 'Kênh OTC',
                        subs: [{
                            id: 0000,
                            title: 'Vùng 1: Hà Nội và Tây Bắc'
                        }, {
                            id: 0001,
                            title: 'Vùng 2: Duyên Hải + Đông Bắc'
                        }, {
                            id: 0002,
                            title: 'Vùng 3: Miền Trung'
                        }, {
                            id: 0003,
                            title: 'Vùng 4: Tây Nguyên'
                        }, {
                            id: 0004,
                            title: 'Vùng 5: HCM và Miền Đông'
                        }, {
                            id: 0005,
                            title: 'Vùng 6: Miền Tây'
                        }]
                    }, {
                        id: 001,
                        title: 'Kênh ETC',
                        subs: [{
                            id: 0010,
                            title: 'ETC miền Bắc'
                        }, {
                            id: 0011,
                            title: 'ETC miền Trung'
                        }, {
                            id: 0012,
                            title: 'ETC miền Nam'
                        }]
                    }, {
                        id: 002,
                        title: 'Kênh MT',
                        subs: [{
                            id: 0020,
                            title: 'MT miền Bắc'
                        }, {
                            id: 0021,
                            title: 'MT miền Trung'
                        }, {
                            id: 0022,
                            title: 'MT miền Nam'
                        }]
                    }, {
                        id: 003,
                        title: 'Kênh online',
                        subs: [{
                            id: 0030,
                            title: 'Đại lý online'
                        }, {
                            id: 0031,
                            title: 'Bán lẻ online'
                        }]
                    }, {
                        id: 004,
                        title: 'Kênh TMĐT'
                    }]

                },
                {
                    id: 01,
                    title: 'Khối Marketing',
                    subs: [{
                        id: 010,
                        title: 'Quản tri Nhãn & Đào tạo'
                    }, {
                        id: 011,
                        title: 'Digital Marketing'
                    }, {
                        id: 012,
                        title: 'Trade Marketing'
                    }, {
                        id: 013,
                        title: 'Truyền thông & Sáng tạo nội dung'
                    }]
                },
                {
                    id: 02,
                    title: 'Khối văn phòng',
                    subs: [{
                        id: 020,
                        title: 'Kế toán'
                    }, {
                        id: 021,
                        title: 'Tài chính'
                    }, {
                        id: 022,
                        title: 'Hành chính nhân sự',
                        subs: [{
                            id: 0220,
                            title: 'Hành chính'
                        }, {
                            id: 0221,
                            title: 'Nhân sự'
                        }, {
                            id: 0222,
                            title: 'Công nghệ thông tin (IT)'
                        }]
                    }, {
                        id: 023,
                        title: 'Dịch vụ bán hàng'
                    }, {
                        id: 024,
                        title: 'Cung ứng/Mua hàng'
                    }, {
                        id: 025,
                        title: 'Kho & giao vận',
                        subs: [{
                            id: 0250,
                            title: 'Kho'
                        }, {
                            id: 0251,
                            title: 'Giao vận'
                        }]
                    }]
                }
            ]

        }];
        var comboTree1

        $(document).ready(function($) {
            comboTree1 = $('#thuocDonVi').comboTree({
                source: data,
                isMultiple: false,
                cascadeSelect: true
            });

        });
    </script>


@endsection
