@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách đào tạo')

@section('header-style')

<style>
    .mainSection_width-select {
            width: 140px !important;
            border: none;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light {
            padding: 5px 0;
            background-color: transparent;
            outline: none;
            border: none;
        }

        .style_input,
        .style_input:focus {
            border: none!important;
            background-color: transparent;
            font-size: 1.1rem;
            outline: none;
            box-shadow: none !important;
        }

        .mainSection_width-select button.btn.dropdown-toggle.btn-light:hover {
            background-color: transparent;
            outline: none;
            border: none;
            box-shadow: none;
        }
</style>

@endsection
@section('content')
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-3 mainSection_card-left">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Ngày tạo: </div>
                                </div>
                                <div class="col-md-7">
                                    <strong class="text-nowrap">
                                        <input type="text"  value="07/04/2023" class="form-control style_input fs-5">
                                    </strong>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Người hướng dẫn: </div>
                                </div>
                                <div class="col-md-7">
                                    <strong class="text-nowrap">
                                        <input type="text"  value="Nguyễn Văn ABC" class="form-control style_input fs-5">
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mainSection_heading-title">
                                Danh sách đào tạo
                            </h5>
                        </div>
                        <div class="col-md-3 mainSection_card-right">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Họ tên học viên: </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="text-nowrap d-block text-truncate" style="max-width:168px"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nguyễn Văn ABCDXYZABCASD">
                                        <strong class="text-nowrap fs-5">
                                            <input type="text"  value="Nguyễn Văn ABC" class="form-control style_input fs-5">
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Địa bàn: </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="text-nowrap d-block text-truncate" style="max-width:168px"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="66b Nguyễn Sỹ Sách">
                                        <strong class="text-nowrap fs-5">
                                            <input type="text"  value="66b Nguyễn Sỹ Sách" class="form-control style_input fs-5">
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="position-relative">
                                                <table id="dsDaoTao" class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap" style="width:5%">STT</th>
                                                            <th class="text-nowrap" style="width:5%">Mã biên bản</th>
                                                            <th class="text-nowrap" style="width:10%">Khách hàng</th>
                                                            <th class="text-nowrap" style="width:15%">Tình huống</th>
                                                            <th class="text-nowrap" style="width:10%">KN/NV</th>
                                                            <th class="text-nowrap" style="width:10%">Hạn chế</th>
                                                            <th class="text-nowrap" style="width:10%">Hướng dẫn</th>
                                                            <th class="text-nowrap" style="width:15%">Ý kiến kiểm soát</th>
                                                            <th class="text-nowrap" style="width:15%">Ý kiến học viên</th>
                                                            <th class="text-nowrap" style="width:5%">Thời gian</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr href="/danh-sach-dao-tao/chi-tiet" data-bs-toggle="modal" data-bs-target="#thongTinDaoTao" role="button">
                                                            <td class="text-nowrap text-center">
                                                                <div class="text-nowrap d-block text-truncate" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    1
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap text-center">
                                                                <div class="text-nowrap d-block text-truncate" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    MBB1
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style="max-width:100px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    Nguyễn Văn ACBabc
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style="max-width:160px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, minus voluptate ratione soluta illo recusandae explicabo suscipit eveniet reprehenderit alias voluptates placeat tenetur, ullam facere debitis itaque accusamus eius at?
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style="max-width:90px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    Tư vấn bán hàng
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style="max-width:90px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    Tư vấn chưa sát
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style="max-width:90px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    Nhất trí hạn chế
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style="max-width:160px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, doloribus. Tempora, blanditiis! Voluptates aperiam numquam ut placeat dolorum, doloribus odit tenetur delectus similique, sit consectetur ipsa? Voluptates enim obcaecati facilis?
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style="max-width:160px;"  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, harum unde eligendi molestias voluptatibus neque libero pariatur animi sequi commodi aperiam minus eos. Qui deleniti hic iste neque officiis recusandae.
                                                                </div>
                                                            </td>
                                                            <td class="text-nowrap">
                                                                <div class="text-nowrap d-block text-truncate" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                                    07/04/2023
                                                                </div>
                                                            </td>
                                                        </tr>
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
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarRight') --}}

    <!-- Modal Thêm DS Đào Tạo -->
    <div class="modal fade" id="themDsDaoTaoNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Thêm mới đánh giá đào tạo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="" action="">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <input type="text" placeholder="Nhập tên khách hàng" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" placeholder="Nhập tình huống"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select name="" class="selectpicker" multiple data-size="5" data-live-search="true" data-actions-box="true"
                                title="Chọn Kỹ năng/Nghiệp vụ..." data-select-all-text="Chọn tất cả" data-deselect-all-text="Bỏ chọn" data-selected-text-format="count > 2" data-count-selected-text="Có {0} Kỹ năng/Nghiệp vụ" data-live-search-placeholder="Tìm kiếm..." >
                                    <option>Kỹ năng 1</option>
                                    <option>Kỹ năng 2</option>
                                    <option>Kỹ năng 3</option>
                                    <option>Kỹ năng 4</option>
                                    <option>Kỹ năng 5</option>
                                    <option>Kỹ năng 6</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" placeholder="Nhập hạn chế" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" placeholder="Nhập hướng dẫn" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" placeholder="Nhập ý kiến kiểm soát"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea class="form-control" placeholder="Nhập ý kiến thành viên"></textarea>
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
    <!-- ChartJS -->
    {{-- <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>

    <script>
        const targetTable = $('#dsDaoTao').DataTable({
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
            dom: '<"d-flex mb-3 justify-content-between"f<"card-title-wrapper">>rt<"dataTables_bottom  justify-content-end"p>',
        });
        $('div.card-title-wrapper').html(`
            <div class="main_search d-flex me-3">
                @if (session('user')['role'] == 'admin')
                <button class="btn btn-danger me-3" data-bs-toggle="modal"
                    data-bs-target="#themDsDaoTaoNew">
                    Thêm mới đánh giá
                </button>
                @endif
                <button id="exporttable" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Xuất file Excel">
                    <i class="bi bi-download"></i>
                    Xuất Excel
                </button>
            </div>
        `);
    </script>

<script>
    $(document).ready(function() {

        $('#dateDanhGia').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            startDate: new Date(),
            locale: {
                format: 'DD/MM/YYYY '
            }
        });

    });
</script>
@endsection
