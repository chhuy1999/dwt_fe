@extends('template.master')
{{-- 404 not found --}}
@section('title', 'Bảng điều khiển')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid"></div>
                    <div class="row " style="position: relative;
                    color: #FFF;
                    font-size:5rem;">
    
                        <img style="" src="https://doppelherz.vn/wp-content/uploads/2022/09/dang-ky-dai-ly-29.webp"/> 
                        <div class="text" style=" position: absolute;
                        top: 50%;
                        left: 35%;
                        transform: translate(-50%, -50%), color: #ccc">404 NOT FOUND</div>
                        
    
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">Copyright © 2023 S-Team. All rights reserved.</div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

    
    @include('template.sidebar.sidebarMaster.sidebarRight')


@endsection
@section('footer-script')
            <!-- ChartJS -->
            <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>

            <!-- Chart Types -->
            <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/DoughnutChart.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartThree.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChartTwo.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/BarChart.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/LineChartTwo.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/LineChart.js') }}"></script>
            <script type="text/javascript" src="{{ asset('/assets/js/chart/PieChart.js') }}"></script>

@endsection
