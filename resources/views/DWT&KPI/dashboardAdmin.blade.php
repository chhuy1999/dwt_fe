@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Kho chart')
@section('header-style')
    <style>
        /* .mainSection_chart-container {
        width: 100%;
        height: 100%;
        }

        .mainSection_chart-container canvas {
        width: 100%;
        height: 100%;
        } */
    </style>
@endsection
@section('content')
    <div id="mainWrap" class="mainWrap m-0">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    {{-- <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Kho chart
                        </h5>
                        @include('template.components.sectionCard')
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="mainSection_heading d-flex row" style="max-height: 60px; border-bottom: 2px solid var(--primary-color);">
                                            
                                            <div class="col-md-6">
                                            <h5 class="mainSection_heading-title">
                                                Dashboard Admin
                                            </h5>
                                            </div>
                                            <div class="col d-flex">
                                                <div class="">
                                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/htcv.jpg') }}" />
                                                    
                                                </div>
                                                <div class="">
                                                    <p>190%</p>
                                                    <p >Tỉ lệ hoàn thành CV</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex">
                                                <div class="">
                                                    
                                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/kinhlup.jpg') }}" />
                                                </div>
                                                <div class="">
                                                    <p>41</p>
                                                    <p>Doanh thu</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex">
                                                <div class="">
                                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/nhanvien.jpg ') }}" />
                                                </div>
                                                <div class="">
                                                    <p>300</p>
                                                    <p>Nhân viên</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex">
                                                <div class="">
                                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/ruiro.jpg') }}" />
                                                </div>
                                                <div class="">
                                                    <p>37</p>
                                                    <p>Rủi ro</p>
                                                </div>
                                            </div>
                                            <div class="col d-flex">
                                                <div class="">
                                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/clock.jpg') }}" />
                                                </div>
                                                <div class="">
                                                    <p>90%</p>
                                                    <p>Tỷ lệ đi làm đúng giờ</p>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                            {{-- @include('template.components.sectionCard') --}}
                                        </div>

                                        <div class="mainSection_heading row">
                                            <div class="col-6">
                                                <div class="row">

                                                    <div class="col-4">
                                                        <div class="" >
                                                            <div class="d-flex mb-3" >
                                                                <div class="card-title me-auto" style="font-size: 28px; ">27.7m</div>
                                                                <div class="">
                                                                    <i class="bi bi-caret-up-fill"></i> 2.7% Prior Yr
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" style="border-bottom: 2px solid var(--primary-color)"></div>
                                                        <div class="card-title" style="text-align: center;"> YTD Sales East Coast</div>     
                                                 
                                                        <div class="d-flex" >
                                                            <div class="me-auto">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/1.jpg') }}" />

                                                            </div>
                                                            <div class="">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/2.jpg') }}" />

                                                            </div>
                                                        </div>
    
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="" >
                                                            <div class="d-flex mb-3" >
                                                                <div class="card-title me-auto" style="font-size: 28px; ">27.7m</div>
                                                                <div class="">
                                                                    <i class="bi bi-caret-up-fill"></i> 2.7% Prior Yr
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" style="border-bottom: 2px solid var(--primary-color)"></div>
                                                        <div class="card-title" style="text-align: center;"> YTD Sales East Coast</div>     
                                                 
                                                        <div class="d-flex" >
                                                            <div class="me-auto">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/1.jpg') }}" />

                                                            </div>
                                                            <div class="">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/2.jpg') }}" />

                                                            </div>
                                                        </div>
    
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="" >
                                                            <div class="d-flex mb-3" >
                                                                <div class="card-title me-auto" style="font-size: 28px; ">27.7m</div>
                                                                <div class="">
                                                                    <i class="bi bi-caret-up-fill"></i> 2.7% Prior Yr
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" style="border-bottom: 2px solid var(--primary-color)"></div>
                                                        <div class="card-title" style="text-align: center;"> YTD Sales East Coast</div>     
                                                 
                                                        <div class="d-flex" >
                                                            <div class="me-auto">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/1.jpg') }}" />

                                                            </div>
                                                            <div class="">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/2.jpg') }}" />

                                                            </div>
                                                        </div>
    
                                                    </div>


                                                    
                                                    
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="row">

                                                    <div class="col-4">
                                                        <div class="" >
                                                            <div class="d-flex mb-3" >
                                                                <div class="card-title me-auto" style="font-size: 28px; ">27.7m</div>
                                                                <div class="">
                                                                    <i class="bi bi-caret-up-fill"></i> 2.7% Prior Yr
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" style="border-bottom: 2px solid var(--primary-color)"></div>
                                                        <div class="card-title" style="text-align: center;"> YTD Sales East Coast</div>     
                                                 
                                                        <div class="d-flex" >
                                                            <div class="me-auto">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/1.jpg') }}" />

                                                            </div>
                                                            <div class="">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/2.jpg') }}" />

                                                            </div>
                                                        </div>
    
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="" >
                                                            <div class="d-flex mb-3" >
                                                                <div class="card-title me-auto" style="font-size: 28px; ">27.7m</div>
                                                                <div class="">
                                                                    <i class="bi bi-caret-up-fill"></i> 2.7% Prior Yr
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" style="border-bottom: 2px solid var(--primary-color)"></div>
                                                        <div class="card-title" style="text-align: center;"> YTD Sales East Coast</div>     
                                                 
                                                        <div class="d-flex" >
                                                            <div class="me-auto">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/1.jpg') }}" />

                                                            </div>
                                                            <div class="">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/2.jpg') }}" />

                                                            </div>
                                                        </div>
    
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="" >
                                                            <div class="d-flex mb-3" >
                                                                <div class="card-title me-auto" style="font-size: 28px; ">27.7m</div>
                                                                <div class="">
                                                                    <i class="bi bi-caret-up-fill"></i> 2.7% Prior Yr
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="" style="border-bottom: 2px solid var(--primary-color)"></div>
                                                        <div class="card-title" style="text-align: center;"> YTD Sales East Coast</div>     
                                                 
                                                        <div class="d-flex" >
                                                            <div class="me-auto">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/1.jpg') }}" />

                                                            </div>
                                                            <div class="">
                                                                <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/2.jpg') }}" />

                                                            </div>
                                                        </div>
    
                                                    </div>


                                                    
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="mainSection_heading row">
                                            <div class="card col-sm-4 ">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="card-title">KeyBarChart_Floating</div>
                                                    </div>
                                                    <div class="mainSection_chart-container mt-3">
                                                        <canvas id="KeyBarChart_Floating"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-sm-4 ">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="card-title">KeyLineChart_InterpolationModes</div>
                                                    </div>
                                                    <div class="mainSection_chart-container mt-3">
                                                        <canvas id="KeyLineChart_InterpolationModes"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-sm-4 ">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="card-title">KeyLineChart_SteppedLineCharts</div>
                                                    </div>
                                                    <div class="mainSection_chart-container mt-3">
                                                        <canvas id="KeyLineChart_SteppedLineCharts"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mainSection_heading row">
                                            <div class="card col-sm-4 ">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="card-title">KeyBarChart_BorderRadius</div>
                                                    </div>
                                                    <div class="mainSection_chart-container mt-3">
                                                        <canvas id="KeyBarChart_BorderRadius"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-sm-4 ">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="card-title">KeyLineChart_LineChart</div>
                                                    </div>
                                                    <div class="mainSection_chart-container mt-3">
                                                        <canvas id="KeyLineChart_LineChart"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-sm-2 ">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="card-title">KeyOtherChart_Doughnut</div>
                                                    </div>
                                                    <div class="mainSection_chart-container mt-3">
                                                        <canvas id="KeyOtherChart_Doughnut"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card col-sm-2 ">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="card-title">KeyOtherChart_Pie</div>
                                                    </div>
                                                    <div class="mainSection_chart-container mt-3">
                                                        <canvas id="KeyOtherChart_Pie"></canvas>
                                                    </div>
                                                </div>
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
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyLineChart/KeyLineChart_InterpolationModes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyLineChart/KeyLineChart_SteppedLineCharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyBarChart/KeyBarChart_BorderRadius.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyLineChart/KeyLineChart_LineChart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyOtherChart/KeyOtherChart_Doughnut.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/KeyOtherChart/KeyOtherChart_Pie.js') }}"></script>



    


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
