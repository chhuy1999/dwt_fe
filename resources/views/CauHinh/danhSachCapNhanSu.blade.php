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
                                <div class="card-body position-relative body_content-wrapper" style="display:block" id="body_content-1">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        {{-- <div class="pb-2 d-flex align-items-center">
                                            <div class="card-title">Toàn Công Ty</div>
                                            
                                        </div> --}}
                                        <div class="main_search d-flex mt-2">
                                            <i class="bi bi-search" style="top: 4px;left: 8px;"></i>
                                            <form action="/danh-sach-cap-nhan-su" method="GET">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm..." name="q" value="{{request()->q}}">
                                            </form>
                                            <button class="btn btn-danger d-block w-60" data-bs-toggle="modal"
                                                data-bs-target="#themCapNhanSu" style="margin-left: 10px">Thêm cấp nhân sự</button>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="coCauToChuc"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th style="width: 2%">STT</th>
                                                            <th style="width: 45%">Mã cấp cấp nhân sự</th>
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
                                                        

                                                        {{-- Xóa Vi tri--}}
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

                                                        <!-- Modal Sua Vi Tri chức danh -->
                                                        <div class="modal fade" id="suacapnhansu{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title w-100" id="exampleModalLabel">SỬA CẤP NHÂN SỰC</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>

                                                                    <form method="POST" action="/danh-sach-cap-nhan-su/{{ $value->id }}">
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
                </div>
            </div>

            @include('template.footer.footer')
        </div>
    </div>
    {{-- @include('template.sidebar.sidebardanhSachViTri.sidebarRight') --}}




    <!-- Modal Them cấp nhân sự-->
    <div class="modal fade" id="themCapNhanSu" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 38%">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM CẤP NHÂN SỰ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="/danh-sach-cap-nhan-su" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Mã cấp nhân sự<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập mã cấp nhân sự">
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Tên cấp nhân sự<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" placeholder="Nhập tên cấp nhân sự" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="d-flex col-sm-4">
                                        <div class="modal_body-title">Cấp tổ chức trực thu<span class="text-danger">*</span></div>
                                    </div>
                                    <div class="col-sm-8 d-flex align-items-center" >
                                        <select class="selectpicker" title="Chọn cấp tổ chức trục thuộc">
                                            <option>Toàn công ty</option>
                                            <option>công ty con</option>
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
    </div>

@endsection
@section('footer-script')
    
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

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

@endsection
