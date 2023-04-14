@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Kho chart')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Kho chart
                        </h5>
                        @include('template.components.sectionCard')
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    
                                    <div class="col-md-3 card-title">Thông số</div>
                                    <div class='row mt-4 d-flex justify-content-start'>
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    @php
                                                        $chartNames = ['KeyBarChart_BorderRadius', 'KeyBarChart_Floating', 'KeyBarChart_Horizontal', 'KeyBarChart_Stacked', 'KeyBarChart_StackedWithGroups', 'KeyBarChart_Vertical'];
                                                        $chartLabels = ['Bar Chart Border Radius', 'Floating Bars', 'Horizontal Bar Chart', 'Stacked Bar Chart', 'Stacked Bar Chart with Groups', 'Vertical Chart'];
                                                    @endphp
                                                    <div class="row d-flex justify-content-start">
                                                        <div class="col-md-4 card-title">Loại biểu đồ</div>
                                                        <div class="col-md-8">
                                                            <select id="select" class="selectpicker" data-live-search="true" title="Chọn chart">
                                                                @foreach($chartNames as $key => $chartName)
                                                                    <option value="{{ $chartName }}" @if($key == 0) selected @endif>{{ $chartLabels[$key] }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                        
                                                <div class="col-md-4">
                                                    <div class="row d-flex justify-content-start">
                                                        <div class="col-md-4 card-title">Mục tiêu</div>
                                                        <div class="col-md-8">
                                                            <select class="selectpicker" id="" name="">
                                                                <option disabled selected value>-</option>
                                                                <option selected value="doanhso">Doanh số</option>
                                                                <option value="khachhang">Khách hàng</option>
                                                                <option value="nhanvien">Nhân viên</option>
                                                                <option value="tyledilamdunggio">Tỉ lệ đi làm đúng giờ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
        
        
                                                <div class="col-md-4">
                                                    <div class="row d-flex justify-content-start" >
                                                        <div class="col-md-4 card-title">Chỉ số key</div>
                                                        <div class="col-md-8">
                                                            <select class="selectpicker" name="doanhsoId">
                                                               <option disabled selected value>-</option>
                                                               <option value="doanhso1">Doanh số tuần</option>
                                                               <option value="doanhso2">Doanh số tháng</option>
                                                               <option value="doanhso3">Doanh số quý</option>
                                                               <option value="doanhso4">Doanh số năm</option>
                                                            </select>
        
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-outline-danger text-align-center px-4">Tìm kiếm</button>

                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12 result card ">
                                            @foreach($chartNames as $chartName)
                                                <div id="{{ $chartName }}Container" class="chart-container" style="display: @if($chartName == $chartNames[0]) block @else none @endif">
                                                    <div class="card-body">
                                                        <div class="mainSection_chart-container mt-3 ">
                                                            <canvas id="{{ $chartName }}" class="chart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        {{-- <div class="col-md-3">
                                            <div id="Doanh số" class="data_chart-items">
                                                <canvas id="pieChart"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div id="Khách hàng mới" class="data_chart-items">
                                                <canvas id="BarChartTwo"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div id="Khách hàng Active" class="data_chart-items">
                                                <canvas id="doughnutChart"></canvas>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                            <div id="Nhân Sự" class="data_chart-items">
                                                <canvas id="BarChartThree"></canvas>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                        
                                            <div id="Số đơn hàng" class="data_chart-items">
                                                <canvas id="LineChartTwo"></canvas>
                                            </div>
                                        </div> --}}
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
    <script type="text/javascript"
            src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    

    <!--Bar Charts JS -->
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyBarChart/KeyBarChart_Floating.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyBarChart/KeyBarChart_BorderRadius.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyBarChart/KeyBarChart_Horizontal.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyBarChart/KeyBarChart_Stacked.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyBarChart/KeyBarChart_StackedWithGroups.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyBarChart/KeyBarChart_Vertical.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartTwo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartThree.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/DoughnutChart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/LineChartTwo.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/assets/js/chart/PieChart.js') }}"></script>

    <script>
            document.addEventListener('DOMContentLoaded', function () {
                const select = document.getElementById('select');
                const chartContainers = document.querySelectorAll('.chart-container');

                select.addEventListener('change', function () {
                    chartContainers.forEach(function (container) {
                        container.style.display = 'none';
                    });

                    const selectedChartContainer = document.getElementById(select.value + 'Container');
                    selectedChartContainer.style.display = 'block';
                });
            });
    </script>

    {{-- <script src="{{ asset('/assets/js/chart_hopgiaoban/doughnutChiSo.js') }}"></script> --}}
    <script>
        $('#khoLuuTruBienBanHop').DataTable({
            paging: false,
            ordering: false,
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
            dom: '<"d-flex justify-content-between align-items-center mb-3"<"card-title-wrapper-left"><"d-flex "f>>rt<"dataTables_bottom  justify-content-end"p>',
        });

        $('div.card-titles-wrapper').html(`
            <div class="card-title">Thông số</div>
        `);

    </script>

@endsection
