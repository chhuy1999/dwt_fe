<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper mt-3">
                    <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                        <h6 class="sidebarBody_heading-big m-0">
                            Tổng quan đơn vị
                        </h6>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn
                            đề</button>
                    </div>
                    
                    <div class="sidebarBody_card" style="line-height: 26px;">
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading">Chỉ số công việc đơn vị</h6>
                        </div>

                        @php
                            $datas = [    ['title' => 'Số ca đào tạo', 'number_before' => '65', 'number_after' => '120', 'icon' => 'bi-person-add'],
                                ['title' => 'Số XNCB', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'],
                                ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'],
                                ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'],
                                ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'],
                                ['title' => 'Số GPQC', 'number_before' => '3', 'number_after' => '10', 'icon' => 'bi-person-add'],
                            ];
                        @endphp

                        @foreach($datas as $data)
                            @include('template.components.KeyIndex.elementCardMini', ['value' => (object)$data])
                        @endforeach


                    </div>
                </div>
                
                <div class="sidebarBody_wrapper mt-4">
                    
                    <div class="sidebarBody_card bg-pink-blur">
                        {{-- Sỹ số --}}
                        @include('template.components.KeyIndex.elementCardThree', ['heading' => 'Sỹ số', 'title_today' => 'Vắng', 'title_week' => 'Công tác', 'title_month' => 'Mới', 'today_completed' => '2', 'week_completed' => '3','month_completed' => '4'])

                        {{-- Số vi phạm hành chính --}}
                        @include('template.components.KeyIndex.elementCardThree', ['heading' => 'Số vi phạm hành chính', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'week_completed' => '3','month_completed' => '4', 'color' => 'text-danger'])

                        {{-- Số vi phạm nghiệp vụ --}}
                        @include('template.components.KeyIndex.elementCardThree', ['heading' => 'Số vi phạm nghiệp vụ', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'week_completed' => '3','month_completed' => '4', 'color' => 'text-danger'])

                        {{-- Số sự cố CCDC --}}
                        @include('template.components.KeyIndex.elementCard', ['heading' => 'Số sự cố CCDC', 'heading_mini' => 'Phát sinh / Đã xử lý', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;'])
                    </div>
                </div>

                <div class="sidebarBody_wrapper mt-4">
                    {{-- Số khoản chi tiêu mua sắm --}}
                    @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Số khoản chi tiêu mua sắm', 'heading_mini' => 'Khoản: trị giá', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '3', 'today_total' => '32M', 'week_completed' => '6', 'week_total' => '62M','month_completed' => '9', 'month_total' => '92M', 'separate' => ':', 'color_after' => 'text-black'])
                </div>

                <div class="sidebarBody_wrapper mt-4">
                    {{-- Tuyển dụng --}}
                    @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Tuyển dụng', 'heading_mini' => 'Phát sinh / Đã tuyển', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '22', 'week_total' => '30','month_completed' => '10', 'month_total' => '160', 'separate' => '/'])
                </div>

                <div class="sidebarBody_wrapper mt-4">
                    {{-- Huấn luyện & Đánh giá --}}
                    @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Huấn luyện & Đánh giá', 'heading_mini' => 'Yêu cầu / Hoàn thành', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '1', 'week_completed' => '22', 'week_total' => '20','month_completed' => '40', 'month_total' => '30', 'separate' => '/'])
                </div>

                <div class="sidebarBody_wrapper mt-4">
                    {{-- Kiểm soát NV & CV --}}
                    @include('template.components.KeyIndex.elementCardTwo', ['heading' => 'Kiểm soát NV & CV', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '1', 'week_completed' => '22', 'week_total' => '20','month_completed' => '40', 'month_total' => '30', 'separate' => '/'])
                </div>
            </div>
        </div>
        <span id="btn-right"
            ><i class="bi bi-arrow-bar-right"></i>
        </span>
    </div>
</div>