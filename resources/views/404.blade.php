@extends('template.master')
{{-- 404 not found --}}
@section('title', 'Trang không tồn tại')
@section('header-style')
    <style>
        .mainSection {
            position: initial
        }

        .main {
            height: initial;
        }

        .mainWrap {
            display: flex;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .main::before {
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(../assets/img/bg-404.jpg);
            background-size: cover;
            background-position: center center;
            bottom: -5px;
            content: '';
            -webkit-filter: blur(5px);
            filter: blur(5px);
            left: -5px;
            position: absolute;
            right: -5px;
            top: -5px;
        }

        .notFound_container {
            align-items: center;
            display: flex;
            flex-direction: column;
            position: relative;
            text-align: center;
            /* z-index: 2; */
        }

        .notFound_content {
            --width: 500px;
            background-color: rgb(80 80 80 / 26%);
            border-radius: var(--border-radius-main);
            max-width: calc(100vw - 32px);
            min-height: 400px;
            padding: 30px 16px 48px;
            position: relative;
            width: var(--width);
        }

        .notFound_header {
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .notFound_body {
            margin-top: var(--border-radius-main);
        }
    </style>
@endsection
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="notFound_container">
                    <div class="notFound_content">
                        <div class="notFound_header">
                            <a href="/">
                                <img src="{{ asset('assets/img/404.png') }}" alt="404" width="400px">
                            </a>
                        </div>
                        <div class="notFound_body">
                            <div class="d-flex align-items-center justify-content-center">
                                <h1 class="me-3 text-danger">404</h1>
                                <h1 class="text-white">Không tìm thấy nội dung</h1>
                            </div>
                            <h5 class="text-white">Trang bạn tìm kiếm hiện đang phát triển hoặc không tồn tại</h5>
                            <a href="/" class="btn btn-danger">Quay lại trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

@endsection
@section('footer-script')
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <!-- Chart Types -->
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>

@endsection
