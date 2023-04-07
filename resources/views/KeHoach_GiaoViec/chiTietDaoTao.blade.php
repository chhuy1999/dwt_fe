@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Chi tiết đào tạo')

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
                                Chi tiết đào tạo
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
                                    <div class="table-responsive">
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
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            1
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap text-center">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            MBB1
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nguyễn Văn ACBabc
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, minus voluptate ratione soluta illo recusandae explicabo suscipit eveniet reprehenderit alias voluptates placeat tenetur, ullam facere debitis itaque accusamus eius at?
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn bán hàng
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn chưa sát
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nhất trí hạn chế
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, doloribus. Tempora, blanditiis! Voluptates aperiam numquam ut placeat dolorum, doloribus odit tenetur delectus similique, sit consectetur ipsa? Voluptates enim obcaecati facilis?
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, harum unde eligendi molestias voluptatibus neque libero pariatur animi sequi commodi aperiam minus eos. Qui deleniti hic iste neque officiis recusandae.
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
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
            @include('template.footer.footer')
        </div>
    </div>
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarRight') --}}

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



@endsection
