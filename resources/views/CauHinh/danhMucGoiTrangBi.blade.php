@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh mục gói trang bị')

@section('content')
    {{-- @include('template.sidebar.sidebardanhSachViTri.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách trang bị
                        </h5>
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body position-relative body_content-wrapper" style="display:block"
                                    id="body_content-1">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        {{-- <div class="pb-2 d-flex align-items-center">
                                            <div class="card-title">Toàn Công Ty</div>
                                            
                                        </div> --}}
                                        <div class="main_search d-flex mt-2">
                                            <i class="bi bi-search" style="top: 4px;left: 8px;"></i>
                                            <form action="/danh-sach-cap-nhan-su" method="GET">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm..."
                                                    name="q" value="{{ request()->q }}">
                                            </form>
                                        </div>
                                        <button class="btn btn-danger d-block w-60" data-bs-toggle="modal"
                                            data-bs-target="#themTrangBi" style="margin-left: 10px">Thêm trang bị</button>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="coCauToChuc"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th style="width: 2%">STT</th>
                                                            <th style="width: 40%">Gói trang bị</th>
                                                            <th style="width: 40%">Hạng mục trang bị</th>
                                                            <th style="width: 10%">Đơn vị</th>
                                                            <th style="width: 8%">Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center">
                                                                    1
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div>Trang bị hành chính</div>
                                                            </td>
                                                            <td>
                                                                <div>Tủ đồ cá nhân</div>
                                                            </td>
                                                            <td>
                                                                <div>Cái</div>
                                                            </td>
                                                            <td>
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#suatrangbi">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#xoatrangbi">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                        {{-- Xóa trang bị--}}
                                                        <div class="modal fade" id="xoatrangbi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title text-danger" id="exampleModalLabel">XÓA TRANG BỊ</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Bạn có thực sự muốn xoá trang bị này không?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                        <form
                                                                            action="/danh-muc-goi-trang-bi/"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                                                        
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal Sua Vi Tri chức danh -->
                                                        <div class="modal fade" id="suatrangbi" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title w-100" id="exampleModalLabel">SỬA TRANG BỊ</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>

                                                                    <form method="POST" action="/danh-muc-goi-trang-bi/">
                                                                    @csrf
                                                                    @method('PUT')
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="d-flex align-items-center mb-3">
                                                                                        <div class="d-flex col-sm-4">
                                                                                            <div class="modal_body-title">Mã cấp tổ chức<span class="text-danger">*</span></div>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <input class="form-control" type="text" value="AMKT">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-6">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <div class="d-flex col-sm-4">
                                                                                            <div class="modal_body-title">Tên cấp nhân sự<span class="text-danger">*</span></div>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <input class="form-control" type="text" name="name" value="Phòng kinh doanh 1">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="d-flex align-items-center">
                                                                                        <div class="d-flex col-sm-4">
                                                                                            <div class="modal_body-title"> Thuộc cấp nhân sự<span class="text-danger">*</span></div>
                                                                                        </div>
                                                                                        <div class="col-sm-8 d-flex align-items-center">
                                                                                            <select class="selectpicker" title="Thuộc cấp nhân sự">
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

                                                        
                                                    
                                                           
                                                        
                                                    
                                                        </tbody>

                                                </table>
                                            </div>
                                        </div>
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
    {{-- @include('template.sidebar.sidebardanhSachViTri.sidebarRight') --}}




    <!-- Modal Them trang bị-->
    <div class="modal fade" id="themTrangBi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM CẤP NHÂN SỰ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/danh-muc-goi-trang-bi" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" placeholder="Nhập gói trang bị">
                                
                            </div>

                            <div class="col-sm-6">

                                <input class="form-control" type="text" placeholder="Nhập hạng mục trang bị">
                                

                            </div>
                            <div class="col-sm-6 mt-3">

                                <input class="form-control" type="text" placeholder="Nhập đơn vị">
                                
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

@endsection
@section('footer-script')

    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>


@endsection
