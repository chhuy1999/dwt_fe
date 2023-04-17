@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Kho chỉ số Key')
<<<<<<< HEAD
=======


@php
$datasDichVu = [['title' => ' Đơn hàng xuất bán', 'number_before' => '64', 'number_after' => '100', 'icon' => 'bi-person-add'], ['title' => 'Tỉ lệ đơn đổi trả', 'number_before' => '15%', 'icon' => 'bi-person-add'], ['title' => 'Doanh thu', 'number_before' => '3.2 tỷ', 'icon' => 'bi-person-add'], ['title' => 'SKU active', 'number_before' => '15', 'number_after' => '20', 'icon' => 'bi-person-add'], ['title' => 'Số TDV hiện có', 'number_before' => '45', 'number_after' => '55', 'icon' => 'bi-person-add'], ['title' => 'Số địa bàn hoàn thành 100% DS', 'number_before' => '7', 'number_after' => '14', 'icon' => 'bi-person-add'], ['title' => 'Số địa bàn hoàn thành < 70% DS', 'number_before' => '2', 'number_after' => '14', 'icon' => 'bi-person-add']];

$datasKeToan = [['title' => 'Doanh thu', 'number_before' => '3.2 tỷ', 'icon' => 'bi-person-add'], ['title' => 'Chi phí', 'number_before' => '1 tỷ', 'number_after' => '20', 'icon' => 'bi-person-add'], ['title' => 'Công nợ phải thu', 'number_before' => 'xx tỷ', 'icon' => 'bi-person-add'], ['title' => 'Nợ vay tài chính', 'number_before' => 'xx tỷ', 'icon' => 'bi-person-add']];

$datasKinhDoanh = [['title' => 'Doanh số', 'number_before' => '3.2 tỷ', 'icon' => 'bi-person-add'], ['title' => 'Đạt chỉ tiêu tháng', 'number_before' => '30%', 'icon' => 'bi-person-add'], ['title' => 'KH active', 'number_before' => '345', 'icon' => 'bi-person-add'], ['title' => 'KH mở mới', 'number_before' => '35', 'icon' => 'bi-person-add'], ['title' => 'SKU active', 'number_before' => '4', 'number_after' => '4', 'icon' => 'bi-person-add'], ['title' => 'Địa bàn hoàn thành doanh số', 'number_before' => '6', 'number_after' => '12', 'icon' => 'bi-person-add']];

@endphp


>>>>>>> theme-branch27
@section('content')
    {{-- @include('template.sidebar.sidebarMaster.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Kho chỉ số Key
                        </h5>
                        @include('template.components.sectionCard')
                    </div>

                    <div class="card mb-3">
<<<<<<< HEAD
                        <div class="card-body col-3">
=======
                        <div class="card-body col-6 col-md-3">
>>>>>>> theme-branch27
                            <select id="preview-select" class="selectpicker" title="Chọn hiển thị">
                                <option value="all">Xem tất cả</option>
                                <option value="preview-1">Chỉ số đơn vị tổng</option>
                                <option value="preview-2">Dịch vụ bán hàng</option>
                                <option value="preview-3">Kế toán</option>
                                <option value="preview-4">Kinh doanh</option>
                                <option value="preview-n">Chỉ số</option>
                            </select>
                        </div>
                    </div>

                    <div class="preview_items-wrapper" id="preview-1">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
=======
                                            <div class="box_code-preview">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>

                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
>>>>>>> theme-branch27
                                                <div class="sidebarBody_card" style="line-height: 26px;">
                                                    <div class="sidebarBody_heading-wrapper">
                                                        <h6 class="sidebarBody_heading">Chỉ số công việc đơn vị</h6>
                                                    </div>

                                                    @php
                                                        $datasTong = [['title' => 'Số ca đào tạo', 'number_before' => '65', 'number_after' => '120', 'icon' => 'bi-person-add'], ['title' => 'Số XNCB', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'], ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'], ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'], ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'], ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add']];
                                                    @endphp

                                                    @foreach ($datasTong as $dataTong)
                                                        @include(
                                                            'template.components.KeyIndex.elementCardMini',
                                                            ['value' => (object) $dataTong]
                                                        )
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_card" style="line-height: 26px;">
                                                        <div class="sidebarBody_heading-wrapper">
                                                            <h6 class="sidebarBody_heading">Chỉ số công việc đơn vị</h6>
                                                        </div>
                                                    
                                                        @foreach ($datasTong as $dataTong)
@include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataTong])
@endforeach
                                                    
                                                    
                                                    </div>
                                                </code>
                                            </pre>

=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <div class="box_code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_card" style="line-height: 26px;">
                                                            <div class="sidebarBody_heading-wrapper">
                                                                <h6 class="sidebarBody_heading">Chỉ số công việc đơn vị</h6>
                                                            </div>
                                                        
                                                            @foreach ($datasTong as $dataTong)
                                                                @include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataTong])
                                                            @endforeach
                                                        
                                                        
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="preview_items-wrapper" id="preview-2">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                @php
                                                    $datasDichVu = [['title' => ' Đơn hàng xuất bán', 'number_before' => '64', 'number_after' => '100', 'icon' => 'bi-person-add'], ['title' => 'Tỉ lệ đơn đổi trả', 'number_before' => '15%', 'icon' => 'bi-person-add'], ['title' => 'Doanh thu', 'number_before' => '3.2 tỷ', 'icon' => 'bi-person-add'], ['title' => 'SKU active', 'number_before' => '15', 'number_after' => '20', 'icon' => 'bi-person-add'], ['title' => 'Số TDV hiện có', 'number_before' => '45', 'number_after' => '55', 'icon' => 'bi-person-add'], ['title' => 'Số địa bàn hoàn thành 100% DS', 'number_before' => '7', 'number_after' => '14', 'icon' => 'bi-person-add'], ['title' => 'Số địa bàn hoàn thành < 70% DS', 'number_before' => '2', 'number_after' => '14', 'icon' => 'bi-person-add']];
                                                @endphp

=======
                                            <div class="box_code-preview">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
>>>>>>> theme-branch27
                                                <div class="sidebarBody_card" style="line-height: 26px;">
                                                    <div class="sidebarBody_heading-wrapper">
                                                        <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                    </div>

                                                    @foreach ($datasDichVu as $dataDichVu)
                                                        @include(
                                                            'template.components.KeyIndex.elementCardMini',
                                                            ['value' => (object) $dataDichVu]
                                                        )
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_card" style="line-height: 26px;">
                                                        <div class="sidebarBody_heading-wrapper">
                                                            <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                        </div>
    
                                                        @foreach ($datasDichVu as $dataDichVu)
@include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataDichVu])
@endforeach
                                                    </div>
                                                </code>
                                            </pre>
=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_card" style="line-height: 26px;">
                                                            <div class="sidebarBody_heading-wrapper">
                                                                <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                            </div>
        
                                                            @foreach ($datasDichVu as $dataDichVu)
                                                                @include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataDichVu])
                                                            @endforeach
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="preview_items-wrapper" id="preview-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                @php
                                                    $datasKeToan = [['title' => 'Doanh thu', 'number_before' => '3.2 tỷ', 'icon' => 'bi-person-add'], ['title' => 'Chi phí', 'number_before' => '1 tỷ', 'number_after' => '20', 'icon' => 'bi-person-add'], ['title' => 'Công nợ phải thu', 'number_before' => 'xx tỷ', 'icon' => 'bi-person-add'], ['title' => 'Nợ vay tài chính', 'number_before' => 'xx tỷ', 'icon' => 'bi-person-add']];
                                                @endphp

=======
                                            <div class="box_code-preview">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
>>>>>>> theme-branch27
                                                <div class="sidebarBody_card" style="line-height: 26px;">
                                                    <div class="sidebarBody_heading-wrapper">
                                                        <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                    </div>
                                                    @foreach ($datasKeToan as $dataKeToan)
                                                        @include(
                                                            'template.components.KeyIndex.elementCardMini',
                                                            ['value' => (object) $dataKeToan]
                                                        )
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_card" style="line-height: 26px;">
                                                        <div class="sidebarBody_heading-wrapper">
                                                            <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                        </div>
    
                                                        @foreach ($datasKeToan as $dataKeToan)
@include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataKeToan])
@endforeach
                                                    </div>
                                                </code>
                                            </pre>
=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_card" style="line-height: 26px;">
                                                            <div class="sidebarBody_heading-wrapper">
                                                                <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                            </div>
        
                                                            @foreach ($datasKeToan as $dataKeToan)
                                                                @include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataKeToan])
                                                            @endforeach
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="preview_items-wrapper" id="preview-4">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                @php
                                                    $datasKinhDoanh = [['title' => 'Doanh số', 'number_before' => '3.2 tỷ', 'icon' => 'bi-person-add'], ['title' => 'Đạt chỉ tiêu tháng', 'number_before' => '30%', 'icon' => 'bi-person-add'], ['title' => 'KH active', 'number_before' => '345', 'icon' => 'bi-person-add'], ['title' => 'KH mở mới', 'number_before' => '35', 'icon' => 'bi-person-add'], ['title' => 'SKU active', 'number_before' => '4', 'number_after' => '4', 'icon' => 'bi-person-add'], ['title' => 'Địa bàn hoàn thành doanh số', 'number_before' => '6', 'number_after' => '12', 'icon' => 'bi-person-add']];
                                                @endphp

=======
                                            <div class="box_code-preview" style="max-height:200px; overflow: auto;">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
>>>>>>> theme-branch27
                                                <div class="sidebarBody_card" style="line-height: 26px;">
                                                    <div class="sidebarBody_heading-wrapper">
                                                        <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                    </div>
                                                    @foreach ($datasKinhDoanh as $dataKinhDoanh)
                                                        @include(
                                                            'template.components.KeyIndex.elementCardMini',
                                                            ['value' => (object) $dataKinhDoanh]
                                                        )
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_card" style="line-height: 26px;">
                                                        <div class="sidebarBody_heading-wrapper">
                                                            <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                        </div>
    
                                                        @foreach ($datasKinhDoanh as $dataKinhDoanh)
@include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataKinhDoanh])
@endforeach
                                                    </div>
                                                </code>
                                            </pre>
=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                           <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_card" style="line-height: 26px;">
                                                            <div class="sidebarBody_heading-wrapper">
                                                                <h6 class="sidebarBody_heading">KPI năm của phòng/ban</h6>
                                                            </div>
        
                                                            @foreach ($datasKinhDoanh as $dataKinhDoanh)
                                                                @include('template.components.KeyIndex.elementCardMini', ['value' => (object) $dataKinhDoanh])
                                                            @endforeach
                                                        </div>
                                                    </code>
                                                </pre>
                                           </div>
>>>>>>> theme-branch27

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="preview_items-wrapper" id="preview-n">

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                <div class="sidebarBody_wrapper mt-4">
=======
                                            <div class="box_code-preview" style="max-height:200px; overflow: auto;">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
                                                <div class="sidebarBody_wrapper">
>>>>>>> theme-branch27
                                                    <div class="sidebarBody_card bg-pink-blur">
                                                        @include(
                                                            'template.components.KeyIndex.elementCardThree',
                                                            [
                                                                'heading' => 'Sỹ số',
                                                                'title_today' => 'Vắng',
                                                                'title_week' => 'Công tác',
                                                                'title_month' => 'Mới',
                                                                'today_completed' => '2',
                                                                'week_completed' => '3',
                                                                'month_completed' => '4',
                                                            ]
                                                        )
                                                        @include(
                                                            'template.components.KeyIndex.elementCardThree',
                                                            [
                                                                'heading' => 'Số vi phạm hành chính',
                                                                'title_today' => 'Hôm nay',
                                                                'title_week' => 'Tuần này',
                                                                'title_month' => 'Tháng này',
                                                                'today_completed' => '2',
                                                                'week_completed' => '3',
                                                                'month_completed' => '4',
                                                                'color' => 'text-danger',
                                                            ]
                                                        )
                                                        @include(
                                                            'template.components.KeyIndex.elementCardThree',
                                                            [
                                                                'heading' => 'Số vi phạm nghiệp vụ',
                                                                'title_today' => 'Hôm nay',
                                                                'title_week' => 'Tuần này',
                                                                'title_month' => 'Tháng này',
                                                                'today_completed' => '2',
                                                                'week_completed' => '3',
                                                                'month_completed' => '4',
                                                                'color' => 'text-danger',
                                                            ]
                                                        )
                                                        @include(
                                                            'template.components.KeyIndex.elementCard',
                                                            [
                                                                'heading' => 'Số sự cố CCDC',
                                                                'heading_mini' => 'Phát sinh / Đã xử lý',
                                                                'title_today' => 'Hôm nay',
                                                                'title_week' => 'Tuần này',
                                                                'title_month' => 'Tháng này',
                                                                'today_completed' => '2',
                                                                'today_total' => '3',
                                                                'week_completed' => '2',
                                                                'week_total' => '3',
                                                                'month_completed' => '2',
                                                                'month_total' => '3',
                                                                'separate' => '/',
                                                                'space' => 'letter-spacing: -1px;',
                                                            ]
                                                        )
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_wrapper mt-4">
                                                        <div class="sidebarBody_card bg-pink-blur">
                                                            @include(
                                                                'template.components.KeyIndex.elementCardThree',
                                                                [
                                                                    'heading' => 'Sỹ số',
                                                                    'title_today' => 'Vắng',
                                                                    'title_week' => 'Công tác',
                                                                    'title_month' => 'Mới',
                                                                    'today_completed' => '2',
                                                                    'week_completed' => '3',
                                                                    'month_completed' => '4',
                                                                ]
                                                            )
                                                            @include(
                                                                'template.components.KeyIndex.elementCardThree',
                                                                [
                                                                    'heading' => 'Số vi phạm hành chính',
                                                                    'title_today' => 'Hôm nay',
                                                                    'title_week' => 'Tuần này',
                                                                    'title_month' => 'Tháng này',
                                                                    'today_completed' => '2',
                                                                    'week_completed' => '3',
                                                                    'month_completed' => '4',
                                                                    'color' => 'text-danger',
                                                                ]
                                                            )
                                                            @include(
                                                                'template.components.KeyIndex.elementCardThree',
                                                                [
                                                                    'heading' => 'Số vi phạm nghiệp vụ',
                                                                    'title_today' => 'Hôm nay',
                                                                    'title_week' => 'Tuần này',
                                                                    'title_month' => 'Tháng này',
                                                                    'today_completed' => '2',
                                                                    'week_completed' => '3',
                                                                    'month_completed' => '4',
                                                                    'color' => 'text-danger',
                                                                ]
                                                            )
                                                            @include(
                                                                'template.components.KeyIndex.elementCard',
                                                                [
                                                                    'heading' => 'Số sự cố CCDC',
                                                                    'heading_mini' => 'Phát sinh / Đã xử lý',
                                                                    'title_today' => 'Hôm nay',
                                                                    'title_week' => 'Tuần này',
                                                                    'title_month' => 'Tháng này',
                                                                    'today_completed' => '2',
                                                                    'today_total' => '3',
                                                                    'week_completed' => '2',
                                                                    'week_total' => '3',
                                                                    'month_completed' => '2',
                                                                    'month_total' => '3',
                                                                    'separate' => '/',
                                                                    'space' => 'letter-spacing: -1px;',
                                                                ]
                                                            )
                                                        </div>
                                                    </div>
                                                </code>
                                            </pre>

=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>
                                            </div>
                                            <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_wrapper">
                                                            <div class="sidebarBody_card bg-pink-blur">
                                                                @include(
                                                                    'template.components.KeyIndex.elementCardThree',
                                                                    [
                                                                        'heading' => 'Sỹ số',
                                                                        'title_today' => 'Vắng',
                                                                        'title_week' => 'Công tác',
                                                                        'title_month' => 'Mới',
                                                                        'today_completed' => '2',
                                                                        'week_completed' => '3',
                                                                        'month_completed' => '4',
                                                                    ]
                                                                )
                                                                @include(
                                                                    'template.components.KeyIndex.elementCardThree',
                                                                    [
                                                                        'heading' => 'Số vi phạm hành chính',
                                                                        'title_today' => 'Hôm nay',
                                                                        'title_week' => 'Tuần này',
                                                                        'title_month' => 'Tháng này',
                                                                        'today_completed' => '2',
                                                                        'week_completed' => '3',
                                                                        'month_completed' => '4',
                                                                        'color' => 'text-danger',
                                                                    ]
                                                                )
                                                                @include(
                                                                    'template.components.KeyIndex.elementCardThree',
                                                                    [
                                                                        'heading' => 'Số vi phạm nghiệp vụ',
                                                                        'title_today' => 'Hôm nay',
                                                                        'title_week' => 'Tuần này',
                                                                        'title_month' => 'Tháng này',
                                                                        'today_completed' => '2',
                                                                        'week_completed' => '3',
                                                                        'month_completed' => '4',
                                                                        'color' => 'text-danger',
                                                                    ]
                                                                )
                                                                @include(
                                                                    'template.components.KeyIndex.elementCard',
                                                                    [
                                                                        'heading' => 'Số sự cố CCDC',
                                                                        'heading_mini' => 'Phát sinh / Đã xử lý',
                                                                        'title_today' => 'Hôm nay',
                                                                        'title_week' => 'Tuần này',
                                                                        'title_month' => 'Tháng này',
                                                                        'today_completed' => '2',
                                                                        'today_total' => '3',
                                                                        'week_completed' => '2',
                                                                        'week_total' => '3',
                                                                        'month_completed' => '2',
                                                                        'month_total' => '3',
                                                                        'separate' => '/',
                                                                        'space' => 'letter-spacing: -1px;',
                                                                    ]
                                                                )
                                                            </div>
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                <div class="sidebarBody_wrapper mt-4">
=======
                                            <div class="box_code-preview" style="max-height:200px; overflow: auto;">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
                                                <div class="sidebarBody_wrapper">
>>>>>>> theme-branch27
                                                    {{-- Số khoản chi tiêu mua sắm --}}
                                                    @include(
                                                        'template.components.KeyIndex.elementCardTwo',
                                                        [
                                                            'heading' => 'Số khoản chi tiêu mua sắm',
                                                            'heading_mini' => 'Khoản: trị giá',
                                                            'title_today' => 'Hôm nay',
                                                            'title_week' => 'Tuần này',
                                                            'title_month' => 'Tháng này',
                                                            'today_completed' => '3',
                                                            'today_total' => '32M',
                                                            'week_completed' => '6',
                                                            'week_total' => '62M',
                                                            'month_completed' => '9',
                                                            'month_total' => '92M',
                                                            'separate' => ':',
                                                            'color_after' => 'text-black',
                                                        ]
                                                    )
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8 mb-3">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
>>>>>>> theme-branch27
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>

                                            </div>
<<<<<<< HEAD
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_wrapper mt-4">
                                                        @include(
                                                            'template.components.KeyIndex.elementCardTwo',
                                                            [
                                                                'heading' => 'Số khoản chi tiêu mua sắm',
                                                                'heading_mini' => 'Khoản: trị giá',
                                                                'title_today' => 'Hôm nay',
                                                                'title_week' => 'Tuần này',
                                                                'title_month' => 'Tháng này',
                                                                'today_completed' => '3',
                                                                'today_total' => '32M',
                                                                'week_completed' => '6',
                                                                'week_total' => '62M',
                                                                'month_completed' => '9',
                                                                'month_total' => '92M',
                                                                'separate' => ':',
                                                                'color_after' => 'text-black',
                                                            ]
                                                        )
                                                    </div>
                                                </code>
                                            </pre>
=======
                                            <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_wrapper">
                                                            @include(
                                                                'template.components.KeyIndex.elementCardTwo',
                                                                [
                                                                    'heading' => 'Số khoản chi tiêu mua sắm',
                                                                    'heading_mini' => 'Khoản: trị giá',
                                                                    'title_today' => 'Hôm nay',
                                                                    'title_week' => 'Tuần này',
                                                                    'title_month' => 'Tháng này',
                                                                    'today_completed' => '3',
                                                                    'today_total' => '32M',
                                                                    'week_completed' => '6',
                                                                    'week_total' => '62M',
                                                                    'month_completed' => '9',
                                                                    'month_total' => '92M',
                                                                    'separate' => ':',
                                                                    'color_after' => 'text-black',
                                                                ]
                                                            )
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                <div class="sidebarBody_wrapper mt-4">
=======
                                            <div class="box_code-preview" style="max-height:200px; overflow: auto;">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
                                                <div class="sidebarBody_wrapper">
>>>>>>> theme-branch27
                                                    {{-- Tuyển dụng --}}
                                                    @include(
                                                        'template.components.KeyIndex.elementCardTwo',
                                                        [
                                                            'heading' => 'Tuyển dụng',
                                                            'heading_mini' => 'Phát sinh / Đã tuyển',
                                                            'title_today' => 'Hôm nay',
                                                            'title_week' => 'Tuần này',
                                                            'title_month' => 'Tháng này',
                                                            'today_completed' => '2',
                                                            'today_total' => '3',
                                                            'week_completed' => '22',
                                                            'week_total' => '30',
                                                            'month_completed' => '10',
                                                            'month_total' => '160',
                                                            'separate' => '/',
                                                        ]
                                                    )
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8 mb-3">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
>>>>>>> theme-branch27
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>

                                            </div>
<<<<<<< HEAD
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_wrapper mt-4">
                                                        {{-- Tuyển dụng --}}
                                                        @include(
                                                            'template.components.KeyIndex.elementCardTwo',
                                                            [
                                                                'heading' => 'Tuyển dụng',
                                                                'heading_mini' => 'Phát sinh / Đã tuyển',
                                                                'title_today' => 'Hôm nay',
                                                                'title_week' => 'Tuần này',
                                                                'title_month' => 'Tháng này',
                                                                'today_completed' => '2',
                                                                'today_total' => '3',
                                                                'week_completed' => '22',
                                                                'week_total' => '30',
                                                                'month_completed' => '10',
                                                                'month_total' => '160',
                                                                'separate' => '/',
                                                            ]
                                                        )
                                                    </div>
                                                </code>
                                            </pre>

=======
                                            <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_wrapper">
                                                            {{-- Tuyển dụng --}}
                                                            @include(
                                                                'template.components.KeyIndex.elementCardTwo',
                                                                [
                                                                    'heading' => 'Tuyển dụng',
                                                                    'heading_mini' => 'Phát sinh / Đã tuyển',
                                                                    'title_today' => 'Hôm nay',
                                                                    'title_week' => 'Tuần này',
                                                                    'title_month' => 'Tháng này',
                                                                    'today_completed' => '2',
                                                                    'today_total' => '3',
                                                                    'week_completed' => '22',
                                                                    'week_total' => '30',
                                                                    'month_completed' => '10',
                                                                    'month_total' => '160',
                                                                    'separate' => '/',
                                                                ]
                                                            )
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                <div class="sidebarBody_wrapper mt-4">
=======
                                            <div class="box_code-preview" style="max-height:200px; overflow: auto;">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
                                                <div class="sidebarBody_wrapper">
>>>>>>> theme-branch27
                                                    {{-- Huấn luyện & Đánh giá --}}
                                                    @include(
                                                        'template.components.KeyIndex.elementCardTwo',
                                                        [
                                                            'heading' => 'Huấn luyện & Đánh giá',
                                                            'heading_mini' => 'Yêu cầu / Hoàn thành',
                                                            'title_today' => 'Hôm nay',
                                                            'title_week' => 'Tuần này',
                                                            'title_month' => 'Tháng này',
                                                            'today_completed' => '2',
                                                            'today_total' => '1',
                                                            'week_completed' => '22',
                                                            'week_total' => '20',
                                                            'month_completed' => '40',
                                                            'month_total' => '30',
                                                            'separate' => '/',
                                                        ]
                                                    )
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8 mb-3">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
>>>>>>> theme-branch27
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>

                                            </div>
<<<<<<< HEAD
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_wrapper mt-4">
                                                        {{-- Huấn luyện & Đánh giá --}}
                                                        @include(
                                                            'template.components.KeyIndex.elementCardTwo',
                                                            [
                                                                'heading' => 'Huấn luyện & Đánh giá',
                                                                'heading_mini' => 'Yêu cầu / Hoàn thành',
                                                                'title_today' => 'Hôm nay',
                                                                'title_week' => 'Tuần này',
                                                                'title_month' => 'Tháng này',
                                                                'today_completed' => '2',
                                                                'today_total' => '1',
                                                                'week_completed' => '22',
                                                                'week_total' => '20',
                                                                'month_completed' => '40',
                                                                'month_total' => '30',
                                                                'separate' => '/',
                                                            ]
                                                        )
                                                    </div>
                                                </code>
                                            </pre>

=======
                                            <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_wrapper">
                                                            {{-- Huấn luyện & Đánh giá --}}
                                                            @include(
                                                                'template.components.KeyIndex.elementCardTwo',
                                                                [
                                                                    'heading' => 'Huấn luyện & Đánh giá',
                                                                    'heading_mini' => 'Yêu cầu / Hoàn thành',
                                                                    'title_today' => 'Hôm nay',
                                                                    'title_week' => 'Tuần này',
                                                                    'title_month' => 'Tháng này',
                                                                    'today_completed' => '2',
                                                                    'today_total' => '1',
                                                                    'week_completed' => '22',
                                                                    'week_total' => '20',
                                                                    'month_completed' => '40',
                                                                    'month_total' => '30',
                                                                    'separate' => '/',
                                                                ]
                                                            )
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="box_code-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
<<<<<<< HEAD
                                            <div class="box_code-preview" style="max-height:246px; overflow: auto;">
                                                <div class="box_code-title">Xem trước</div>
                                                <div class="sidebarBody_wrapper mt-4">
=======
                                            <div class="box_code-preview" style="max-height:200px; overflow: auto;">
                                                <div class="box_code-title d-flex justify-content-between">
                                                    Xem trước
                                                    <button class="btn-edit btn btn-outline-danger">
                                                        <i class="bi bi-pencil-square"></i> Sửa
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box_code-preview-content" style="max-height:200px; overflow: auto;" contenteditable="false">
                                                <div class="sidebarBody_wrapper">
>>>>>>> theme-branch27
                                                    {{-- Kiểm soát NV & CV --}}
                                                    @include(
                                                        'template.components.KeyIndex.elementCardTwo',
                                                        [
                                                            'heading' => 'Kiểm soát NV & CV',
                                                            'title_today' => 'Hôm nay',
                                                            'title_week' => 'Tuần này',
                                                            'title_month' => 'Tháng này',
                                                            'today_completed' => '2',
                                                            'today_total' => '1',
                                                            'week_completed' => '22',
                                                            'week_total' => '20',
                                                            'month_completed' => '40',
                                                            'month_total' => '30',
                                                            'separate' => '/',
                                                        ]
                                                    )
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8 mb-3">
                                            <div class="box_code-title d-flex justify-content-between">
                                                Code
<<<<<<< HEAD
                                                <button id="copy-button" class="btn-copy btn btn-outline-danger">
=======
                                                <button id="copy-button" class="btn-copy btn btn-danger">
>>>>>>> theme-branch27
                                                    <i class="bi bi-clipboard"></i> Sao chép
                                                </button>

                                            </div>
<<<<<<< HEAD
                                            <pre rel="HTML & Blade" class="trim_pre">
                                                <code class="my-code">
                                                    <div class="sidebarBody_wrapper mt-4">
                                                        @include(
                                                            'template.components.KeyIndex.elementCardTwo',
                                                            [
                                                                'heading' => 'Kiểm soát NV & CV',
                                                                'title_today' => 'Hôm nay',
                                                                'title_week' => 'Tuần này',
                                                                'title_month' => 'Tháng này',
                                                                'today_completed' => '2',
                                                                'today_total' => '1',
                                                                'week_completed' => '22',
                                                                'week_total' => '20',
                                                                'month_completed' => '40',
                                                                'month_total' => '30',
                                                                'separate' => '/',
                                                            ]
                                                        )
                                                    </div>
                                                </code>
                                            </pre>
=======
                                            <div class="box-code">
                                                <pre rel="HTML & Blade" class="trim_pre">
                                                    <code class="my-code">
                                                        <div class="sidebarBody_wrapper">
                                                            @include(
                                                                'template.components.KeyIndex.elementCardTwo',
                                                                [
                                                                    'heading' => 'Kiểm soát NV & CV',
                                                                    'title_today' => 'Hôm nay',
                                                                    'title_week' => 'Tuần này',
                                                                    'title_month' => 'Tháng này',
                                                                    'today_completed' => '2',
                                                                    'today_total' => '1',
                                                                    'week_completed' => '22',
                                                                    'week_total' => '20',
                                                                    'month_completed' => '40',
                                                                    'month_total' => '30',
                                                                    'separate' => '/',
                                                                ]
                                                            )
                                                        </div>
                                                    </code>
                                                </pre>
                                            </div>
>>>>>>> theme-branch27

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
    @include('template.sidebar.sidebarMaster.sidebarRight')



@endsection
@section('footer-script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

    <script>
        const previewSelect = document.getElementById('preview-select');
        const previews = document.querySelectorAll('.preview_items-wrapper');

        previewSelect.addEventListener('change', () => {
            // Lấy giá trị của option được chọn
            const selectedPreview = previewSelect.value;

            // Kiểm tra nếu người dùng chọn option "Xem tất cả"
            if (selectedPreview === 'all') {
                // Hiển thị tất cả các preview
                previews.forEach(preview => {
                    preview.style.display = 'block';
                });
            } else {
                // Ẩn tất cả các preview
                previews.forEach(preview => {
                    preview.style.display = 'none';
                });

                // Hiển thị preview được chọn
                const selectedPreviewElement = document.getElementById(selectedPreview);
                if (selectedPreviewElement) {
                    selectedPreviewElement.style.display = 'block';
                }
            }
        });
    </script>

    <script>
<<<<<<< HEAD
        var preElements = document.querySelectorAll('pre');
        for (var i = 0; i < preElements.length; i++) {
            var pre = preElements[i];
            var code = pre.querySelector('code');
            pre.textContent = code.innerHTML.trim();
        }
=======
        var preElements = document.querySelectorAll('pre code');
        // var editButton = document.querySelector('.btn-edit');
        var previewContent = document.querySelector('.box_code-preview-content');
        var codePreview = document.querySelector('.trim_pre code.my-code');

        for (var i = 0; i < preElements.length; i++) {
            var code = preElements[i];
            code.textContent = code.innerHTML.trim();
        }

        var editButtons = document.querySelectorAll('.btn-edit');
for (var i = 0; i < editButtons.length; i++) {
    editButtons[i].addEventListener('click', function () {
        var codeBlock = this.closest('.box_code-wrapper');
        var previewContent = codeBlock.querySelector('.box_code-preview-content');
        var codePreview = codeBlock.querySelector('.trim_pre code.my-code');
        if (previewContent.getAttribute('contenteditable') === 'false') {
            // Chuyển sang chế độ chỉnh sửa
            previewContent.setAttribute('contenteditable', 'true');
            this.innerHTML = '<i class="bi bi-save2"></i> Lưu';
            previewContent.setAttribute('id', 'leftRight');
            setTimeout(function() {
                previewContent.removeAttribute('id');
            }, 1000);
        } else {
            // Chuyển sang chế độ xem trước và lưu nội dung đã chỉnh sửa
            previewContent.setAttribute('contenteditable', 'false');
            this.innerHTML = '<i class="bi bi-pencil-square"></i> Sửa';
            // Lưu nội dung mới vào database hoặc thực hiện các thao tác khác tùy vào nhu cầu
            var editedContent = previewContent.innerHTML.trim();
            // Cập nhật nội dung mới vào phần tử <code> trong <pre>
            codePreview.textContent = editedContent;
            previewContent.setAttribute('id', 'upDown');
            setTimeout(function() {
                previewContent.removeAttribute('id');
            }, 1000);
        }
    });
}

>>>>>>> theme-branch27
    </script>

    <script>
        var copyButtons = document.querySelectorAll('.btn-copy');
        for (var i = 0; i < copyButtons.length; i++) {
            var copyButton = copyButtons[i];
<<<<<<< HEAD
            copyButton.addEventListener('click', function() {
=======
            copyButton.addEventListener('click', function () {
>>>>>>> theme-branch27
                var currentPre = this.parentNode.nextElementSibling;
                if (currentPre) {
                    var content = currentPre.textContent;
                    var input = document.createElement('textarea');
                    input.value = content;
                    document.body.appendChild(input);
                    input.select();
                    document.execCommand('copy');
                    document.body.removeChild(input);

                    // Thay đổi văn bản của nút "Sao chép" thành "Đã sao chép"
                    this.innerHTML = '<i class="bi bi-check"></i> Đã sao chép';

                    // Sau 3 giây đổi lại thành "Sao chép"
                    var self = this;
<<<<<<< HEAD
                    setTimeout(function() {
=======
                    setTimeout(function () {
>>>>>>> theme-branch27
                        self.innerHTML = '<i class="bi bi-clipboard"></i> Sao chép';
                    }, 3000);
                }
            });
        }
    </script>
@endsection
