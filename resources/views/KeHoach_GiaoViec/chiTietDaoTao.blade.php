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
            border: none !important;
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
                    {{-- <div class="row align-items-center mb-3">
                        <div class="col-md-3 mainSection_card-left">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Ngày tạo: </div>
                                </div>
                                <div class="col-md-7">
                                    <strong class="text-nowrap">
                                        <input type="text" value="07/04/2023" class="form-control style_input fs-5">
                                    </strong>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Người hướng dẫn: </div>
                                </div>
                                <div class="col-md-7">
                                    <strong class="text-nowrap">
                                        <input type="text" value="Nguyễn Văn ABC" class="form-control style_input fs-5">
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
                                    <div class="text-nowrap d-block text-truncate" style="max-width:168px"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Nguyễn Văn ABCDXYZABCASD">
                                        <strong class="text-nowrap fs-5">
                                            <input type="text" value="Nguyễn Văn ABC"
                                                class="form-control style_input fs-5">
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-nowrap fs-5">Địa bàn: </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="text-nowrap d-block text-truncate" style="max-width:168px"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="66b Nguyễn Sỹ Sách">
                                        <strong class="text-nowrap fs-5">
                                            <input type="text" value="66b Nguyễn Sỹ Sách"
                                                class="form-control style_input fs-5">
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dsDaoTao" class="table table-responsive table-bordered">
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
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            1
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            MBB1
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nguyễn Văn ACBabc
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, minus voluptate ratione soluta illo recusandae explicabo suscipit eveniet reprehenderit alias voluptates placeat tenetur, ullam facere debitis itaque accusamus eius at?
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn bán hàng
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn chưa sát
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nhất trí hạn chế
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, doloribus. Tempora, blanditiis! Voluptates aperiam numquam ut placeat dolorum, doloribus odit tenetur delectus similique, sit consectetur ipsa? Voluptates enim obcaecati facilis?
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, harum unde eligendi molestias voluptatibus neque libero pariatur animi sequi commodi aperiam minus eos. Qui deleniti hic iste neque officiis recusandae.
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            07/04/2023
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            1
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            MBB1
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nguyễn Văn ACBabc
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, minus voluptate ratione soluta illo recusandae explicabo suscipit eveniet reprehenderit alias voluptates placeat tenetur, ullam facere debitis itaque accusamus eius at?
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn bán hàng
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn chưa sát
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nhất trí hạn chế
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, doloribus. Tempora, blanditiis! Voluptates aperiam numquam ut placeat dolorum, doloribus odit tenetur delectus similique, sit consectetur ipsa? Voluptates enim obcaecati facilis?
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, harum unde eligendi molestias voluptatibus neque libero pariatur animi sequi commodi aperiam minus eos. Qui deleniti hic iste neque officiis recusandae.
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            07/04/2023
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            1
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="" style=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            MBB1
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nguyễn Văn ACBabc
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, minus voluptate ratione soluta illo recusandae explicabo suscipit eveniet reprehenderit alias voluptates placeat tenetur, ullam facere debitis itaque accusamus eius at?
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn bán hàng
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Tư vấn chưa sát
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""   data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Nhất trí hạn chế
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, doloribus. Tempora, blanditiis! Voluptates aperiam numquam ut placeat dolorum, doloribus odit tenetur delectus similique, sit consectetur ipsa? Voluptates enim obcaecati facilis?
                                                        </div>
                                                    </td>
                                                    <td class="">
                                                        <div class=""  data-bs-toggle="tooltip" data-bs-placement="top" title="demo">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, harum unde eligendi molestias voluptatibus neque libero pariatur animi sequi commodi aperiam minus eos. Qui deleniti hic iste neque officiis recusandae.
                                                        </div>
                                                    </td>
                                                    <td class="">
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
                    </div> --}}

                    <div class="mx-auto" style="max-width: 21cm">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="modal-body" style="padding: 0; margin: 1.5cm 1.5cm 1.5cm 2cm">
                                    <div class="d-block text-center mb-3">
                                        <h5 class="modal-title w-100 fs-3">Chi tiết đào tạo
                                        </h5>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">
                                                                    Ngày đào tạo:
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>07/04/2023</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">
                                                                    Họ tên học viên:
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="fs-5">Nguyễn Văn ABC</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">
                                                                    Người hướng dẫn:
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="fs-5">Chu Văn Linh -
                                                                    Nguyễn Văn ABC
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="fs-5 modal_body-title fw-bolder text-nowrap">
                                                                        Địa bàn:
                                                                    </div>
                                                            </td>
                                                            <td>
                                                                <div class="fs-5"> 
                                                                    66b Nguyễn Sỹ Sách
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="fs-5 modal_body-title fw-bolder text-nowrap">
                                                                    Kỹ năng/Nghiệp vụ:
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="fs-5">
                                                                    Kỹ năng/Nghiệp vụ1 Kỹ năng/Nghiệp vụ2
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div
                                                                    class="fs-5 modal_body-title fw-bolder text-nowrap">
                                                                    Hạn chế:
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="fs-5">
                                                                    Hạn chế 1 - Hạn chế 2
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="modal-title fw-bolder">Tình huống</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="mt-3 modal_body-title">
                                                    <p> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam eum perferendis, veniam incidunt laborum doloremque est deleniti dolorum, veritatis sed distinctio odit odio ipsa ipsum! Nesciunt pariatur dicta libero.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="modal-title fw-bolder">HƯỚNG DẪN</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="mt-3 modal_body-title">
                                                    <p> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam eum perferendis, veniam incidunt laborum doloremque est deleniti dolorum, veritatis sed distinctio odit odio ipsa ipsum! Nesciunt pariatur dicta libero.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="modal-title fw-bolder">Ý KIẾN KIỂM SOÁT</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="mt-3 modal_body-title">
                                                    <p> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni totam eum perferendis, veniam incidunt laborum doloremque est deleniti dolorum, veritatis sed distinctio odit odio ipsa ipsum! Nesciunt pariatur dicta libero.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="modal-title fw-bolder">Ý KIẾN HỌC VIÊN</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="d-flex align-items-center  justify-content-between">
                                                <div class="mt-3 modal_body-title">
                                                    <p> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maiores in illo temporibus, incidunt ut eaque blanditiis molestiae laudantium quasi accusantium eum commodi repudiandae similique debitis dolor reiciendis, quia magnam.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 d-flex flex-column justify-content-between">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="mt-3 modal_body-title fw-bolder">Trưởng bộ phận</div>
                                            </div>
                                            <div class="d-flex align-items-center  justify-content-center">
                                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <p class="modal_body-title"></p>
                                                <img src="" height="60" alt="">
                                            </div>
                                            <div class="d-flex align-items-center  justify-content-center">
                                                <p class="modal_body-title mb-0">Chu Văn Linh</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 d-flex flex-column justify-content-between">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="mt-3 modal_body-title fw-bolder">Thành viên tham gia</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <p class="modal_body-title m-0">
                                                </p>
                                            </div>
                                            <div class="d-flex align-items-center  justify-content-center">
                                                <p class="modal_body-title m-0">Chúng tôi xác nhận nội dung cuộc hop
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-4 d-flex flex-column justify-content-between">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="mt-3 modal_body-title fw-bolder">Thư ký</div>
                                            </div>
                                            <div class="d-flex align-items-center  justify-content-center">
                                                <p class="modal_body-title">(Ký và ghi rõ họ tên)</p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <p class="modal_body-title"></p>
                                                <img src="" height="60" alt="">
                                            </div>
                                            <div class="d-flex align-items-center  justify-content-center">
                                                <p class="modal_body-title mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger ps-5 pe-5 me-3"
                                data-bs-dismiss="modal">Hủy</button>
                            <form action="/giao-ban/54" method="POST">
                                <input type="hidden" name="_token"
                                    value="s7135MNI98m1bWZWGqOn0UgU7GJHxG7PZc1foK71"> <input type="hidden"
                                    name="_method" value="PUT"> <input type="hidden" name="status"
                                    value="1">
                                <button type="submit" class="btn btn-danger">Xác nhận</button>
                            </form>
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
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datetimepicker/custom-datetimepicker.js') }}"></script>



@endsection
