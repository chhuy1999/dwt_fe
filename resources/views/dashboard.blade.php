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
                        <div id="thismonth" class="mainSection_thismonth"></div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="card-title">Danh mục nhiệm vụ cá nhân</div>
                                        <div class="mainSection_total-kpi">
                                            Tổng KPI cá nhân tạm tính:
                                            <strong style="color: var(--primary-color); font-weight: 700">40</strong>
                                            KPI
                                        </div>
                                        <div class="main_search d-flex">
                                            <i class="bi bi-search"></i>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm nhiệm vụ" />
                                            <button id="exporttable" class="btn btn-primary btn-export"
                                                data-toggle="tooltip" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Xuất file Excel">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="table-responsive style_table-1 table-bordered mainSection_table w-50">
                                            <table class="table">
                                                <thead>
                                                    <td colspan="4"
                                                        style="
                                                        text-align: center;
                                                        color: inherit;
                                                        font-weight: 700;
                                                        padding: 0;
                                                    ">
                                                        Mục tiêu nhiệm vụ tháng
                                                    </td>
                                                    <tr>
                                                        <th scope="col" style="font-weight: bold">TT</th>
                                                        <th scope="col"
                                                            style="
                                                            text-align: left;
                                                            font-weight: bold;
                                                            padding-left: 4px;
                                                        ">
                                                            Mục tiêu nhiệm vụ
                                                        </th>
                                                        <th scope="col" style="font-weight: bold">
                                                            Thời hạn
                                                        </th>
                                                        <th scope="col" style="font-weight: bold">
                                                            SL
                                                        </th>
                                                        <th scope="col"
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: bold;
                                                        ">
                                                            Σ Lũy kế
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" style="justify-content: flex-start">
                                                                Tìm kiếm nhà cung cấp
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" style="justify-content: flex-start">
                                                                Mua hàng nội địa
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">3</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" style="justify-content: flex-start">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">21/01</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">4</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" style="justify-content: flex-start">
                                                                Thiết kế giao diện
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">13/01</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">5</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" style="justify-content: flex-start">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">23/01</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="table-responsive style_table-2 table-bordered mainSection_table w-100 overflow-scroll">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <td colspan="30"
                                                        style="
                                                        text-align: center;
                                                        color: inherit;
                                                        font-weight: 700;
                                                        padding: 0;
                                                    ">
                                                        Nhật kí công việc
                                                    </td>
                                                    <tr>
                                                        <th scope="col">1</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">3</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            4
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            5
                                                        </th>
                                                        <th scope="col">6</th>
                                                        <th scope="col">7</th>
                                                        <th scope="col">8</th>
                                                        <th scope="col">9</th>
                                                        <th scope="col">10</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            11
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            12
                                                        </th>
                                                        <th scope="col">13</th>
                                                        <th scope="col">14</th>
                                                        <th scope="col">15</th>
                                                        <th scope="col">16</th>
                                                        <th scope="col">17</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            18
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            19
                                                        </th>
                                                        <th scope="col">20</th>
                                                        <th scope="col">21</th>
                                                        <th scope="col">22</th>
                                                        <th scope="col">23</th>
                                                        <th scope="col">24</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            25
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            26
                                                        </th>
                                                        <th scope="col">27</th>
                                                        <th scope="col">28</th>
                                                        <th scope="col">29</th>
                                                        <th scope="col">30</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-2">
                                        <div class="card-title">Báo cáo ngày của bộ phận</div>

                                        <div class="mainSection_total-kpi">
                                            Tổng KPI bộ phận tạm tính:
                                            <strong style="color: var(--primary-color); font-weight: 700">140</strong>
                                            KPI
                                        </div>
                                        <div class="main_search d-flex">
                                            <i class="bi bi-search"></i>
                                            <input type="text" class="form-control" placeholder="Tìm kiếm nhiệm vụ" />
                                            <button id="exporttable" class="btn btn-primary btn-export"
                                                data-toggle="tooltip" data-placement="top" title="Xuất file Excel">
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="table-responsive style_table-1 table-bordered mainSection_table w-50">
                                            <table class="table">
                                                <thead>
                                                    <td colspan="4"
                                                        style="
                                                        text-align: center;
                                                        color: inherit;
                                                        font-weight: 700;
                                                        padding: 0;
                                                    ">
                                                        Mục tiêu nhiệm vụ tháng
                                                    </td>
                                                    <tr>
                                                        <th scope="col" style="font-weight: bold;width:5%;">TT</th>
                                                        <th scope="col"
                                                            style="
                                                            text-align: left;
                                                            font-weight: bold;
                                                            padding-left: 4px;
                                                            width:40%;
                                                        ">
                                                            Mục tiêu nhiệm vụ
                                                        </th>
                                                        <th scope="col" style="font-weight: bold;width:10%;">
                                                            SL
                                                        </th>
                                                        <th scope="col"
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: bold;
                                                            width:14%;
                                                        ">
                                                            Σ Lũy kế
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">1</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table"
                                                                style="justify-content: flex-start">
                                                                Tìm kiếm nhà cung cấp
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">2</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table"
                                                                style="justify-content: flex-start">
                                                                Mua hàng nội địa
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">3</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table"
                                                                style="justify-content: flex-start">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">4</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table"
                                                                style="justify-content: flex-start">
                                                                Thiết kế giao diện
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">5</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table"
                                                                style="justify-content: flex-start">
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">10</div>
                                                        </td>
                                                        <td
                                                            style="
                                                            border-right: 1px solid #e3e3e3;
                                                            font-weight: 700; ">
                                                            <div  class="progress-half" >
                                                                <div class="text-dark content_table">5</div>
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive style_table-2 table-bordered mainSection_table w-100">
                                            <table class="table">
                                                <thead>
                                                    <td colspan="30"
                                                        style="
                                                        text-align: center;
                                                        color: inherit;
                                                        font-weight: 700;
                                                        padding: 0;
                                                    ">
                                                        Nhật kí công việc
                                                    </td>
                                                    <tr>
                                                        <th scope="col">1</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">3</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            4
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            5
                                                        </th>
                                                        <th scope="col">6</th>
                                                        <th scope="col">7</th>
                                                        <th scope="col">8</th>
                                                        <th scope="col">9</th>
                                                        <th scope="col">10</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            11
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            12
                                                        </th>
                                                        <th scope="col">13</th>
                                                        <th scope="col">14</th>
                                                        <th scope="col">15</th>
                                                        <th scope="col">16</th>
                                                        <th scope="col">17</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            18
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            19
                                                        </th>
                                                        <th scope="col">20</th>
                                                        <th scope="col">21</th>
                                                        <th scope="col">22</th>
                                                        <th scope="col">23</th>
                                                        <th scope="col">24</th>
                                                        <th scope="col" class="bg-warning bg-opacity-10 text-warning">
                                                            25
                                                        </th>
                                                        <th scope="col" class="bg-danger bg-opacity-10 text-danger">
                                                            26
                                                        </th>
                                                        <th scope="col">27</th>
                                                        <th scope="col">28</th>
                                                        <th scope="col">29</th>
                                                        <th scope="col">30</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table" data-bs-toggle="modal" data-bs-target="#baoCaoCongViec" style="cursor: pointer">v</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">PieChart</div>
                                    </div>
                                    <div class="mainSection_chart-container mt-3">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">DoughnutChart</div>
                                    </div>
                                    <div class="mainSection_chart-container mt-3">
                                        <canvas id="doughnutChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">BarChart 2</div>
                                    </div>
                                    <div class="mainSection_chart-container mt-3">
                                        <canvas id="BarChartTwo"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">BarChart 3</div>
                                    </div>
                                    <div class="mainSection_chart-container mt-3">
                                        <canvas id="BarChartThree"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-3 pt-3">
                                        <div class="card-title">LineChart</div>
                                    </div>
                                    <div class="mainSection_chart-container mt-3">
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-3 pt-3">
                                        <div class="card-title">LineChart 2</div>
                                    </div>
                                    <div class="mainSection_chart-container mt-3">
                                        <canvas id="LineChartTwo"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">Copyright © 2023 S-Team. All rights reserved.</div>
            </div>
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')

    <!-- Modal Báo cáo công việc -->
    <div class="modal fade" id="baoCaoCongViec" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:34%;">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <div class="d-flex w-100 flex-md-column">
                        <h5 class="modal-title">Báo cáo công việc</h5>
                        <h6 class="text-capitalize fw-normal fs-5">Ngày 16/03/2023</h6>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <div class="col-sm-12 d-flex  align-items-center">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Ghi chú</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="" id="" placeholder="Nhập ghi chú"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-6 d-flex  align-items-center">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Số lượng</label>
                            <div class="col-sm-8" style="padding-left:3px">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex  align-items-center">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Trạng thái</label>
                            <div class="col-sm-8">
                                <select class="selectpicker" title="Chọn trạng thái">
                                    <option>Đã nhận</option>
                                    <option>Đã hoàn thành</option>
                                    <option>Đã nhắc nhở</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-12">
                            <form action="" method="" enctype="multipart/for-data">
                                <input type="file" id="files" name="files[]" multiple class="form-control" />
                            </form>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Xóa báo cáo</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger">Lưu</button>
                </div>
            </div>
        </div>
    </div>

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

    <script type="text/javascript">
        // SELECT MULTIPLE LEFT SIDEBAR
        const select = document.getElementById('select');
        const elems = document.querySelectorAll('.data_chart-items');
        const obj = {};

        const filtered = [...elems].filter((el) => {
            if (!obj[el.id]) {
                obj[el.id] = true;
                return true;
            } else {
                return false;
            }
        });

        const selectOpt = filtered.map((el) => {
            el.style.display = 'block';
            return `<option> ${el.id} </option>`;
        });

        select.innerHTML = selectOpt.join('');

        select.addEventListener('change', function() {
            for (let i = 0, iLen = select.options.length; i < iLen; i++) {
                const opt = select.options[i];

                const val = opt.value || opt.text;
                if (opt.selected) {
                    document.getElementById(val).style.display = 'block';
                } else {
                    document.getElementById(val).style.display = 'none';
                }
            }
        });

        // BTN SETTINGS
        document.getElementById('sidebarBody_settings-body').addEventListener('click', handleClickSettings, false);

        function handleClickSettings() {
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (sidebarBodySelectWrapper.style.display === 'none') {
                sidebarBodySelectWrapper.style.display = 'block';
                document.addEventListener('click', handleClickOutside);
            } else {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }

        function handleClickOutside(event) {
            const sidebarBodySettings = document.getElementsByClassName('sidebarBody_settings-body')[0];
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (!sidebarBodySettings.contains(event.target) && !sidebarBodySelectWrapper.contains(event.target)) {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }
        // Upload file
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                        var file = e.target;
                        $("<div class=\"img-thumb-wrapper card shadow\">" +
                            "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file
                            .name + "\"/>" +
                            "<br/><span class=\"remove\">Xóa</span>" +
                            "</div>").insertAfter("#files");
                        $(".remove").click(function() {
                            $(this).parent(".img-thumb-wrapper").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
                console.log(files);
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
    </script>
@endsection
