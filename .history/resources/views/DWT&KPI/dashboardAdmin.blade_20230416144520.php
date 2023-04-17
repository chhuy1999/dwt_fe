@extends('template.masterNoHeader')
{{-- Trang chủ GIao Ban --}}
@section('content')
    <div id="mainWrap" class="mainWrap m-0">
        <div class="mainSection">
            <div class="main p-0">
                <div class="card mb-3">
                    <div class="" style="margin: 2px">
                        <div class="container-fluid mainSection_heading d-flex row" style="max-height: 60px; border-bottom: 3px solid var(--primary-color);">
                            <div class="col header_logo d-flex">
                                <a href="/" class="navbar-brand d-flex align-items-center scrollto me-auto me-lg-0">
                                    <img class="header_logo" src="{{ env('LOGO_URL', '') }}" />
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h5 class="mainSection_heading-title">
                                    Dashboard Admin
                                </h5>
                            </div>
                            <div class="col d-flex">
                                <div class="">
                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/htcv.jpg') }}" />
                                    
                                </div>
                                <div class="">
                                    <p style="margin-bottom: 0">190%</p>
                                    <p class="card-title mt-1 " style="text-align: center; font-size: 10px;" >Tỉ lệ hoàn thành CV</p>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="">
                                    
                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/kinhlup.jpg') }}" />
                                </div>
                                <div class="">
                                    <p style="margin-bottom: 0">41</p>
                                    <p class="card-title mt-1 " style="text-align: center; font-size: 10px;" >Doanh thu</p>
                                </div>
                            </div>
                            <div class="col d-flex" >
                                <div class="">
                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/nhanvien.jpg ') }}" />
                                </div>
                                <div class="">
                                    <p  style="margin-bottom: 0">300</p>
                                    <p class="card-title mt-1 " style="text-align: center; font-size: 10px;">Nhân viên</p>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="">
                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/ruiro.jpg') }}" />
                                </div>
                                <div class="">
                                    <p  style="margin-bottom: 0">37</p>
                                    <p class="card-title mt-1 " style="text-align: center; font-size: 10px;">Rủi ro</p>
                                </div>
                            </div>
                            <div class="col d-flex">
                                <div class="">
                                    <img class="" style="width: 50px; height: 50px" src="{{ asset('assets/img/clock.jpg') }}" />
                                </div>
                                <div class="">
                                    <p  style="margin-bottom: 0">90%</p>
                                    <p class="card-title mt-1 " style="text-align: center; font-size: 10px;">Tỷ lệ đi làm đúng giờ</p>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <a href="/" class="btn btn-outline-danger btn-lg">Tới Trang chủ</a>
                            </div>
                            
                            
                            
                        </div>
                            {{-- @include('template.components.sectionCard') --}}
                    </div>

                        <div class="mainSection_heading row">
                            <div class="col-6">
                                <div class="row" >

                                    <div class="col-3" style="border-right: 2px solid var(--primary-color)" >
                                        <div class="" >
                                            <div class="d-flex mb-3 row" style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px; color: #3E54AC">27.7m</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 2.7% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #3E54AC"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px; color: #3E54AC "> YTD Sales East Coast</div>     
                                    
                                        <div class="d-flex" style="margin: 10px" >
                                            <div class="me-auto">
                                                <img class="" style="width: 70px; height: 50px" src="{{ asset('assets/img/1.jpg') }}" />

                                            </div>
                                            <div class="">
                                                <img class="" style="width: 70px; height: 50px" src="{{ asset('assets/img/2.jpg') }}" />

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        <div class="" >
                                            <div class="d-flex mb-3 row"  style="margin: 10px" >
                                                <div class="card-title col-8 me-auto" style="font-size: 28px; color: #0B2447 ">12.6m</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 6.0% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #0B2447"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px; color: #0B2447 "> YTD Expenses East Coast</div>     
                                    
                                        <div class="d-flex justify-content-end"  style="margin: 10px" >
                                            <div class="">
                                                <img class="align-items: center" style="width: 80px; height: 50px" src="{{ asset('assets/img/tenlua.jpg') }}" />

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        <div class="" >
                                            <div class="d-flex mb-3 row"  style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px;color:  #F7DB6A ">1.8%</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-down-fill"></i> 39% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #F7DB6A"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px;color:  #F7DB6A"> YOY Change Bad Debts</div>     
                                    
                                        <div class="d-flex justify-content-end "  style="margin: 10px">
                                            <div class="">
                                                <img class="" style="width: 70px; height: 50px" src="{{ asset('assets/img/3.jpg') }}" />

                                            </div>
                                        
                                        </div>

                                    </div>
                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        <div class="" >
                                            <div class="d-flex row mb-3"  style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px;color:  #E8A0BF ">911</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 09% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #E8A0BF"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px;color:  #E8A0BF;"> YTD Fresh Leads</div>     
                                    
                                        <div class="d-flex justify-content-end"  style="margin: 10px">
                                            <div class="">
                                                <img class="" style="width: 90px; height: 50px" src="{{ asset('assets/img/8.jpg') }}" />

                                            </div>
                                        
                                        </div>

                                    </div>


                                    
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row" >

                                    <div class="col-3" style="border-right: 2px solid var(--primary-color)" >
                                        <div class="" >
                                            <div class="d-flex mb-3 row" style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px; color: #3E54AC ">42.2m</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 01% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #3E54AC"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px; color: #3E54AC "> YTD Net Assets</div>     
                                    
                                        <div class="d-flex" style="margin: 10px" >
                                            <div class="me-auto">
                                                <img class="" style="width: 80px; height: 50px" src="{{ asset('assets/img/4.jpg') }}" />

                                            </div>
                                            <div class="">
                                                <img class="" style="width: 70px; height: 50px" src="{{ asset('assets/img/5.jpg') }}" />

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        <div class="" >
                                            <div class="d-flex mb-3 row"  style="margin: 10px" >
                                                <div class="col-8 card-title me-auto" style="font-size: 28px; color: #0B2447 ">8,480m</div>
                                                <div class="col-4 " style="font-size: 12px; ">
                                                    <i class="bi bi-caret-down-fill"></i> 15% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #0B2447"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px; color: #0B2447 "> YTD Cash Balance</div>     
                                    
                                        <div class="d-flex "  style="margin: 10px" >
                                            <div class="">
                                                <img class="align-items: center" style="width: 80px; height: 50px" src="{{ asset('assets/img/6.jpg') }}" />

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        <div class="" >
                                            <div class="d-flex mb-3 row"  style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px; color:  #F7DB6A">97.4%</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 05% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #F7DB6A"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px;color:  #F7DB6A"> YOY Change Bad Debts</div>     
                                    
                                        <div class="d-flex justify-content-end"  style="margin: 10px">
                                            <div class="">
                                                <img class="" style="width: 100px; height: 50px" src="{{ asset('assets/img/7.jpg') }}" />

                                            </div>
                                        
                                        </div>

                                    </div>
                                    <div class="col-3" >
                                        <div class="" >
                                            <div class="d-flex mb-3 row"  style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px; color:  #E8A0BF">35</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 05% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #E8A0BF"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px; color:  #E8A0BF"> YTD Creditor Days</div>     
                                    
                                        <div class="d-flex"  style="margin: 10px">
                                            <div class="me-auto">
                                                <img class="" style="width: 60px; height: 50px" src="{{ asset('assets/img/9.jpg') }}" />

                                            </div>
                                        
                                        </div>

                                    </div>


                                    
                                    
                                </div>
                            </div>
                            {{-- <div class="col-6">
                                <div class="row">

                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        <div class="" >
                                            <div class="d-flex mb-3 row" style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px; color: #3E54AC ">42.2m</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 01% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #3E54AC"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px; color: #3E54AC "> YTD Net Assets</div>     
                                    
                                        <div class="d-flex" style="margin: 10px" >
                                            <div class="me-auto">
                                                <img class="" style="width: 80px; height: 50px" src="{{ asset('assets/img/4.jpg') }}" />

                                            </div>
                                            <div class="">
                                                <img class="" style="width: 70px; height: 50px" src="{{ asset('assets/img/5.jpg') }}" />

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        

                                    </div>
                                    <div class="col-3" style="border-right: 3px solid var(--primary-color)">
                                        <div class="" >
                                            <div class="d-flex mb-3 row"  style="margin: 10px">
                                                <div class="card-title col-8 me-auto" style="font-size: 28px; color:  #F7DB6A">97.4%</div>
                                                <div class="col-4" style="font-size: 12px; ">
                                                    <i class="bi bi-caret-up-fill"></i> 05% Prior Yr
                                                </div>
                                            </div>
                                        </div>
                                        <div class="" style="border-bottom: 3px solid #F7DB6A"></div>
                                        <div class="card-title mt-3" style="text-align: center; font-size: 20px; color:  #F7DB6A"> YOY Efficiency</div>     
                                    
                                        <div class="d-flex"  style="margin: 10px">
                                            <div class="me-auto">
                                                <img class="" style="width: 100px; height: 50px" src="{{ asset('assets/img/7.jpg') }}" />

                                            </div>
                                        
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        

                                    </div>


                                    
                                    
                                </div>
                            </div> --}}

                            
                        </div>

                        <div class="mainSection_heading row mt-3">
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

                        <div class="mainSection_heading row" style="margin: 0">
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

                        
                        <div class="mainSection_heading row" style="margin: 0">
                            <div class="card col-sm-4 ">
                                {{-- <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">KeyBarChart_BorderRadius</div>
                                    </div>
                                    <div class="mainSection_chart-container mt-3">
                                        <canvas id="KeyBarChart_BorderRadius"></canvas>
                                    </div>
                                </div> --}}
                                
                                    <div class="row d-flex">

                                        <div class="card-title col-6 me-auto">Revenue Trend Qtr YTD</div>
                                        <div class="col-6 d-flex">
                                            <div class="">
                                                <img class="" style="width: 40px; height: 40px" src="{{ asset('assets/img/sua.png') }}" />
    
                                            </div>
                                            <div class="">
                                                <img class="" style="width: 40px; height: 40px" src="{{ asset('assets/img/kinhlup.png') }}" />
    
                                            </div>
                                            <div class="">
                                                <img class="" style="width: 40px; height: 40px" src="{{ asset('assets/img/10.png') }}" />
    
                                            </div>
                                            <div class="">
                                                <img class="" style="width: 40px; height: 40px" src="{{ asset('assets/img/11.png') }}" />
    
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="">
                                        <table class="table table-hover">
                                            <thead>
                                              <tr>
                                                <th scope="col">Trend</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Q1</th>
                                                <th scope="col">Q2</th>
                                                <th scope="col">Q3</th>
                                                <th scope="col">Q4</th>
                                                <th scope="col">YTD</th>
                                                <th scope="col">PYTD</th>

                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td></td>
                                                <td>Womens Clothing</td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                              </tr>
                                              <tr>
                                                <td></td>
                                                <td>Womens Clothing</td>
                                                <td><i class="bi bi-exclamation-triangle" style="color: var(--primary-color)"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                              </tr>
                                              <tr>
                                                <td></td>
                                                <td>Mens Clothing</td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                              </tr>
                                              <tr>
                                                <td></td>
                                                <td>Manchester</td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                              </tr>
                                              <tr>
                                                <td></td>
                                                <td>Hardware</td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                              </tr>
                                              <tr>
                                                <td></td>
                                                <td>Elecronics</td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                              </tr>
                                              <tr>
                                                <td></td>
                                                <th>Total</th>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                                <td><i class="bi bi-exclamation-triangle"></i></td>
                                              </tr>
                                              
                                            </tbody>
                                          </table>
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



    


    {{-- <script>
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
    </script> --}}

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
