@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Kho lưu trữ Biên bản họp')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Kho lưu trữ Biên bản họp
                        </h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>Kế toán</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>Nguyễn Thị Yến Hoa</strong></div>
                            </div>
                        </div>
                        <div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Bảng lưu trữ biên bản họp</div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper style_table-4">
                                                <table id="khoLuuTruBienBanHop" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Phân loại</th>
                                                            <th>Ngày cập nhật</th>
                                                            <th>Nội dung</th>
                                                            <th>Xem biên bản họp</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">9</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">10</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">11</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">12</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">13</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">14</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">15</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">16</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">17</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">18</th>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur.
                                                            </td>
                                                            <td class="text-center">
                                                                05-03-2023
                                                            </td>
                                                            <td>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Officiis autem placeat delectus
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="#" class="text-success"><u>Xem chi
                                                                        tiết</u></a>
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
    @include('template.sidebar.sidebarHopGiaoBan.sidebarRight')
@endsection
@section('footer-script')
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/custom-datatable.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script>
    <script>
        $('#khoLuuTruBienBanHop').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ biên bản họp',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm biên bản họp...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"dataTables_top justify-content-end"f>rt<"dataTables_bottom  justify-content-end"p>',
        });
    </script>
@endsection
