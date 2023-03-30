@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách cấp nhân sự')

@section('content')
    {{-- @include('template.sidebar.sidebardanhSachViTri.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách cấp nhân sự
                        </h5>
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body position-relative">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="dsCapNhanSu"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th style="width: 2%">STT</th>
                                                            <th style="width: 45%">Mã cấp nhân sự</th>
                                                            <th style="width: 45%">Tên cấp nhân sự</th>
                                                            <th style="width: 8%">Hành động</th>
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
                                                            <td>
                                                                <div>AMKT</div>
                                                            </td>
                                                            <td>
                                                                <div>{{ $value->name}}</div>
                                                            </td>
                                                            <td>
                                                                <div class="table_actions d-flex justify-content-center">
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#suacapnhansu{{ $value->id }}">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/edit.svg') }}" />
                                                                    </div>
                                                                    <div class="btn" data-bs-toggle="modal"
                                                                        data-bs-target="#xoacapnhansu{{ $value->id }}">
                                                                        <img style="width:16px;height:16px"
                                                                            src="{{ asset('assets/img/trash.svg') }}" />
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        

                                                        {{-- Xóa cap nhan su--}}
                                                        <div class="modal fade" id="xoacapnhansu{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-danger" id="exampleModalLabel">XÓA CẤP NHÂN SỰ</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Bạn có thực sự muốn xoá cấp nhân sự này không?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                        <form
                                                                            action="/danh-sach-cap-nhan-su/{{ $value->id }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                                                        
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal sua cap nhan su -->
                                                        <div class="modal fade" id="suacapnhansu{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title w-100" id="exampleModalLabel">SỬA CẤP NHÂN SỰ</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>

                                                                    <form method="POST" action="/danh-sach-cap-nhan-su/{{ $value->id }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 mb-3">
                                                                                    <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Mã cấp nhân sự" value="AMKT">
                                                                                </div>

                                                                                <div class="col-sm-6 mb-3">
                                                                                    <input class="form-control" type="text" data-bs-toggle="tooltip" data-bs-placement="top" title="Tên cấp nhân sự" name="name" value="Phòng kinh doanh 1">
                                                                                </div>
                                                                                {{-- <div class="col-sm-6">
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
                                                                                 --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" >Hủy</button>
                                                                            <button type="submit" class="btn btn-danger">Lưu</button>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>

                                                        
                                                    
                                                            @endforeach
                                                        
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

            @include('template.footer.footer')
        </div>
    </div>
    {{-- @include('template.sidebar.sidebardanhSachViTri.sidebarRight') --}}




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
                                <input class="form-control" type="text" placeholder="Mã cấp nhân sự">
                            </div>
    
                            <div class="col-sm-6 mb-3">
                                <input class="form-control" type="text" placeholder="Tên cấp nhân sự" name="name">
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

@endsection
@section('footer-script')
    
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

    <script>
        const targetTable = $('#dsCapNhanSu').DataTable({
            paging: false,
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
            dom: '<"d-flex mb-3 justify-content-end"<"card-title-wrapper">f>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper').html(`
            <div class="main_search d-flex me-3">
                <button class="btn btn-danger d-block w-60" data-bs-toggle="modal" data-bs-target="#themCapNhanSu" style="margin-left: 10px">Thêm cấp nhân sự</button>
            </div>
        `);
    </script>

@endsection
