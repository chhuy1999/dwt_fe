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
                                <div class="card-body position-relative">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="dsTrangBi"
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
                                                            <div class="modal-dialog modal-dialog-centered">
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
                                                                                <div class="col-sm-6 mb-3">
                                                                                    <input class="form-control" type="text" value="AMKT">
                                                                                </div>

                                                                                <div class="col-sm-6 mb-3">
                                                                                    <input class="form-control" type="text" name="name" value="Phòng kinh doanh 1">
                                                                                </div>
                                                                                <div class="col-sm-6 mb-3">
                                                                                    <select class="selectpicker" title="Thuộc cấp nhân sự" data-size="5">
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM CẤP NHÂN SỰ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/danh-muc-goi-trang-bi" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <input class="form-control" type="text" placeholder="Nhập gói trang bị">
                                
                            </div>

                            <div class="col-sm-6 mb-3">

                                <input class="form-control" type="text" placeholder="Nhập hạng mục trang bị">
                                

                            </div>
                            <div class="col-sm-6 mb-3">

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

        <script>
            const targetTable = $('#dsTrangBi').DataTable({
                paging: true,
                ordering: false,
                order: [[0, 'desc']],
                pageLength: 5,
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
                dom: '<"d-flex mb-3 justify-content-end"<"card-title-wrapper">f>rt<"dataTables_bottom  justify-content-end"p>',
            });
            $('div.card-title-wrapper').html(`
                <div class="main_search d-flex me-3">
                    <button class="btn btn-danger d-block w-60" data-bs-toggle="modal" data-bs-target="#themTrangBi" style="margin-left: 10px">Thêm trang bị</button>
                </div>
            `);
        </script>
@endsection
