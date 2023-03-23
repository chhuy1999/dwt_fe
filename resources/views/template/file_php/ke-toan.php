<?php $pageTitle='Kế toán'; ?>
<?php require_once($template_path.'header/header-master.php'); ?>
<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarKeToan/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">TP Kế Toán</h5>
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
                            <label class="">Tháng</label>
                            <input id="thismonth" value="<?php echo date('m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                        <div class="card-title">Danh mục nhiệm vụ cá nhân</div>

                                        <div class="mainSection_total-kpi">
                                            Tổng KPI cá nhân tạm tính:
                                            <strong style="color: var(--primary-color); font-weight: 700"
                                                >40</strong
                                            >
                                            KPI
                                        </div>
                                        <div class="main_search d-flex">
                                            <i class="bi bi-search"></i>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Tìm kiếm nhiệm vụ"
                                            />
                                            <button
                                                id="exporttable"
                                                class="btn btn-primary btn-export"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Xuất file Excel"
                                            >
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div
                                            class="table-responsive style_table-1 table-bordered mainSection_table w-50"
                                        >
                                            <table class="table caption-top">
                                                <thead>
                                                    <td
                                                        colspan="4"
                                                        style="
                                                            text-align: center;
                                                            color: inherit;
                                                            font-weight: 700;
                                                            padding: 0;
                                                        "
                                                    >
                                                        Mục tiêu nhiệm vụ tháng
                                                    </td>
                                                    <tr>
                                                        <th scope="col" style="font-weight: bold">TT</th>
                                                        <th
                                                            scope="col"
                                                            style="
                                                                text-align: left;
                                                                font-weight: bold;
                                                                padding-left: 4px;
                                                            "
                                                        >
                                                            Mục tiêu nhiệm vụ
                                                        </th>
                                                        <th scope="col" style="font-weight: bold">
                                                            Thời hạn
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: bold;
                                                            "
                                                        >
                                                            Lũy kế
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">1</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Tìm kiếm nhà cung cấp
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">5</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">2</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Mua hàng nội địa
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">6</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">3</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">21/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">7</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">4</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Thiết kế giao diện
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">13/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">8</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">5</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">23/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">9</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="table-responsive style_table-2 table-bordered mainSection_table w-100"
                                        >
                                            <table class="table">
                                                <thead>
                                                    <td
                                                        colspan="30"
                                                        style="
                                                            text-align: center;
                                                            color: inherit;
                                                            font-weight: 700;
                                                            padding: 0;
                                                        "
                                                    >
                                                        Nhật kí công việc
                                                    </td>
                                                    <tr>
                                                        <th scope="col">1</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">3</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            4
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
                                                            5
                                                        </th>
                                                        <th scope="col">6</th>
                                                        <th scope="col">7</th>
                                                        <th scope="col">8</th>
                                                        <th scope="col">9</th>
                                                        <th scope="col">10</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            11
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
                                                            12
                                                        </th>
                                                        <th scope="col">13</th>
                                                        <th scope="col">14</th>
                                                        <th scope="col">15</th>
                                                        <th scope="col">16</th>
                                                        <th scope="col">17</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            18
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
                                                            19
                                                        </th>
                                                        <th scope="col">20</th>
                                                        <th scope="col">21</th>
                                                        <th scope="col">22</th>
                                                        <th scope="col">23</th>
                                                        <th scope="col">24</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            25
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
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
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
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
                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                        <div class="card-title">Báo cáo ngày của bộ phận</div>

                                        <div class="mainSection_total-kpi">
                                            Tổng KPI bộ phận tạm tính:
                                            <strong style="color: var(--primary-color); font-weight: 700"
                                                >140</strong
                                            >
                                            KPI
                                        </div>
                                        <div class="main_search d-flex">
                                            <i class="bi bi-search"></i>
                                            <input
                                                type="text"
                                                class="form-control"
                                                placeholder="Tìm kiếm nhiệm vụ"
                                            />
                                            <button
                                                id="exporttable"
                                                class="btn btn-primary btn-export"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Xuất file Excel"
                                            >
                                                <i class="bi bi-download"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div
                                            class="table-responsive style_table-1 table-bordered mainSection_table w-50"
                                        >
                                            <table class="table">
                                                <thead>
                                                    <td
                                                        colspan="4"
                                                        style="
                                                            text-align: center;
                                                            color: inherit;
                                                            font-weight: 700;
                                                            padding: 0;
                                                        "
                                                    >
                                                        Mục tiêu nhiệm vụ tháng
                                                    </td>
                                                    <tr>
                                                        <th scope="col" style="font-weight: bold">TT</th>
                                                        <th
                                                            scope="col"
                                                            style="
                                                                text-align: left;
                                                                font-weight: bold;
                                                                padding-left: 4px;
                                                            "
                                                        >
                                                            Mục tiêu nhiệm vụ
                                                        </th>
                                                        <th scope="col" style="font-weight: bold">
                                                            Thời hạn
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: bold;
                                                            "
                                                        >
                                                            Lũy kế
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">1</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Tìm kiếm nhà cung cấp
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">5</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">2</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Mua hàng nội địa
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">31/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">6</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">3</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">21/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">7</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">4</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Thiết kế giao diện
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">13/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">8</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="content_table">5</div>
                                                        </td>
                                                        <td>
                                                            <div
                                                                class="content_table"
                                                                style="justify-content: flex-start"
                                                            >
                                                                Viết bài
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">23/01</div>
                                                        </td>
                                                        <td
                                                            style="
                                                                border-right: 1px solid #e3e3e3;
                                                                font-weight: 700;
                                                            "
                                                        >
                                                            <div class="content_table">9</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="table-responsive style_table-2 table-bordered mainSection_table w-100"
                                        >
                                            <table class="table">
                                                <thead>
                                                    <td
                                                        colspan="30"
                                                        style="
                                                            text-align: center;
                                                            color: inherit;
                                                            font-weight: 700;
                                                            padding: 0;
                                                        "
                                                    >
                                                        Nhật kí công việc
                                                    </td>
                                                    <tr>
                                                        <th scope="col">1</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">3</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            4
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
                                                            5
                                                        </th>
                                                        <th scope="col">6</th>
                                                        <th scope="col">7</th>
                                                        <th scope="col">8</th>
                                                        <th scope="col">9</th>
                                                        <th scope="col">10</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            11
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
                                                            12
                                                        </th>
                                                        <th scope="col">13</th>
                                                        <th scope="col">14</th>
                                                        <th scope="col">15</th>
                                                        <th scope="col">16</th>
                                                        <th scope="col">17</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            18
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
                                                            19
                                                        </th>
                                                        <th scope="col">20</th>
                                                        <th scope="col">21</th>
                                                        <th scope="col">22</th>
                                                        <th scope="col">23</th>
                                                        <th scope="col">24</th>
                                                        <th
                                                            scope="col"
                                                            class="bg-warning bg-opacity-10 text-warning"
                                                        >
                                                            25
                                                        </th>
                                                        <th
                                                            scope="col"
                                                            class="bg-danger bg-opacity-10 text-danger"
                                                        >
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
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">&nbsp;</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-warning bg-opacity-10 text-warning">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td class="bg-danger bg-opacity-10 text-danger">
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
                                                        </td>
                                                        <td>
                                                            <div class="content_table">v</div>
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
                                        <div class="card-title">Doanh thu toàn công ty</div>
                                    </div>
                                    <div class="mainSection_chart-container">
                                        <canvas id="pieChart_doanhThuToanCongTy"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Tồng chi phí tháng</div>
                                    </div>
                                    <div class="mainSection_chart-container">
                                        <canvas id="pieChart_tongChiPhiThang"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Dòng tiền thuần</div>
                                    </div>
                                    <div class="mainSection_chart-container">
                                        <canvas id="lineChart_dongTienThuan"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Tình trạng kho</div>
                                    </div>
                                    <div class="mainSection_chart-container">
                                        <canvas id="pieChart_tinhTrangKho"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Công nợ phải thu</div>
                                    </div>
                                    <div class="mainSection_chart-container">
                                        <canvas id="pieChart_congNoPhaiThu"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Nợ vay tài chính</div>
                                    </div>
                                    <div class="mainSection_chart-container">
                                        <canvas id="pieChart_noVayTaiChinh"></canvas>
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
    <?php require_once($template_path.'sidebar/sidebarKeToan/sidebarRight.php'); ?>
</div>

<!--end index page-->
<?php require_once($template_path.'footer/footer-keToan.php'); ?>