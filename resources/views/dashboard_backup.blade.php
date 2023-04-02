@extends('template.master')
{{-- Trang chủ admin --}}
@section('title', 'Bảng điều khiển')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Nhật trình công việc</h5>
                        @include('template.components.sectionCard')
                        <div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table  id="example" class="stripe row-border order-column" style="width:100%">
                                            <thead>
                                                <th class="text-center" colspan="6">Mục tiêu nhiệm vụ tháng</th>
                                                <th class="text-center" colspan="30">Nhật kí công việc</th>
                                              <tr>
                                                <th scope="col" class="text-nowrap bg-yellow-blur">STT</th>
                                                <th scope="col" class="text-nowrap bg-yellow-blur">Mục tiêu nhiệm vụ</th>
                                                <th scope="col" class="text-nowrap bg-yellow-blur">Thời hạn</th>
                                                <th scope="col" class="text-nowrap bg-yellow-blur">Σ Lũy kế</th>
                                                <th class="text-center" scope="col">1</th>
                                                <th class="text-center" scope="col">2</th>
                                                <th class="text-center" scope="col">3</th>
                                                <th scope="col" class="text-center bg-warning bg-opacity-10 text-warning">
                                                    4
                                                </th>
                                                <th scope="col" class="text-center bg-danger bg-opacity-10 text-danger">
                                                    5
                                                </th>
                                                <th class="text-center" scope="col">6</th>
                                                <th class="text-center" scope="col">7</th>
                                                <th class="text-center" scope="col">8</th>
                                                <th class="text-center" scope="col">9</th>
                                                <th class="text-center" scope="col">10</th>
                                                <th scope="col" class="text-center bg-warning bg-opacity-10 text-warning">
                                                    11
                                                </th>
                                                <th scope="col" class="text-center bg-danger bg-opacity-10 text-danger">
                                                    12
                                                </th>
                                                <th class="text-center" scope="col">13</th>
                                                <th class="text-center" scope="col">14</th>
                                                <th class="text-center" scope="col">15</th>
                                                <th class="text-center" scope="col">16</th>
                                                <th class="text-center" scope="col">17</th>
                                                <th scope="col" class="text-center bg-warning bg-opacity-10 text-warning">
                                                    18
                                                </th>
                                                <th scope="col" class="text-center bg-danger bg-opacity-10 text-danger">
                                                    19
                                                </th>
                                                <th class="text-center" scope="col">20</th>
                                                <th class="text-center" scope="col">21</th>
                                                <th class="text-center" scope="col">22</th>
                                                <th class="text-center" scope="col">23</th>
                                                <th class="text-center" scope="col">24</th>
                                                <th scope="col" class="text-center bg-warning bg-opacity-10 text-warning">
                                                    25
                                                </th>
                                                <th scope="col" class="text-center bg-danger bg-opacity-10 text-danger">
                                                    26
                                                </th>
                                                <th class="text-center" scope="col">27</th>
                                                <th class="text-center" scope="col">28</th>
                                                <th class="text-center" scope="col">29</th>
                                                <th class="text-center" scope="col">30</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                              </tr>
                                              <tr>
                                                <th class="bg-yellow-blur" scope="row">1</th>
                                                <td class="bg-yellow-blur">Mark</td>
                                                <td class="bg-yellow-blur">Otto</td>
                                                <td class="bg-yellow-blur">5</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>1</td>
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
    @include('template.sidebar.sidebarMaster.sidebarRight')

@endsection
@section('footer-script')
   
    <script type="text/javascript" charset="utf-8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                scrollY:        "300px",
        scrollX:        "500px",
        scrollCollapse: true,
                paging: false,
                ordering: false,
                order: [[0, 'desc']],
               
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
                    sLengthMenu: 'Hiển thị _MENU_ bản ghi',
                },
                dom: '<"d-flex justify-content-between align-items-center mb-3"<"card-title-wrapper-left"><"d-flex "f<"card-title-wrapper-right justify-content-end">>>rt<"dataTables_bottom  justify-content-end"p>',
                fixedColumns:   {
                    left: 4,
                }
            });
            
        });
        
    </script>
@endsection
