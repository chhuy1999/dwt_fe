<div id="aside-right" class="aside-right">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper mt-3">
                    <div class="sidebarBody_heading-wrapper mb-2 d-flex align-items-center justify-content-between">
                        <h6 class="sidebarBody_heading-big m-0">
                            Cấp bộ phận
                        </h6>
                        <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#neuvande">Nêu vấn đề</button>
                    </div>
                    <div class="sidebarBody_card bg-yellow-blur">
                        {{-- Họp giao ban --}}
                        @include('template.components.KeyIndex.elementCard', ['heading' => 'Họp giao ban', 'heading_mini' => 'Đã thực hiện / Chỉ tiêu', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '0', 'today_total' => '1', 'week_completed' => '4', 'week_total' => '6','month_completed' => '2', 'month_total' => '24', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-calendar2-week'])
                    </div>
                </div>

                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card bg-pink-blur">
                        {{-- Vấn đề tồn đọng --}}
                        @include('template.components.KeyIndex.elementCard', ['heading' => 'Vấn đề tồn đọng', 'heading_mini' => 'Đã phản hồi/Phát sinh', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '0', 'today_total' => '0', 'week_completed' => '0', 'week_total' => '0','month_completed' => '0', 'month_total' => '0', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-x-octagon-fill'])
                        
                        {{-- Số nhiệm vụ quá hạn --}}
                        {{-- @include('template.components.KeyIndex.elementCard', ['heading' => 'Số nhiệm vụ quá hạn', 'heading_mini' => 'Quá hạn/Tổng', 'title_today' => 'Hôm nay', 'title_week' => 'Tuần này', 'title_month' => 'Tháng này', 'today_completed' => '2', 'today_total' => '3', 'week_completed' => '2', 'week_total' => '3','month_completed' => '2', 'month_total' => '3', 'separate' => '/', 'space' => 'letter-spacing: -1px;', 'icon' => 'bi-ticket-detailed']) --}}
                    </div>
                </div>
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card bg-blue-blur">
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading mt-2 mb-2">
                                Thông báo
                            </h6>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 mt-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title">
                                        <span
                                            >Thanh toán cho agency thang máy Chicilon</span
                                        >
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text text-success">
                                            Hoàn thành
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">14/02/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title">
                                        <span
                                            >Thanh toán cho agency thang máy Chicilon</span
                                        >
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text text-danger">
                                            Không thể giải quyết
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">14/02/2023</div>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_notification-title">
                                        <span
                                            >Thanh toán cho agency thang máy Chicilon</span
                                        >
                                    </div>
                                    <div class="sidebarBody_notification-status">
                                        <div class="sidebarBody_card-text text-danger">
                                            Không xác định được nguyên nhân
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <div class="sidebarBody_notification-date" href="">14/02/2023</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_card bg-blue-blur">
                        <div class="sidebarBody_heading-wrapper">
                            <h6 class="sidebarBody_heading mt-2 mb-2">
                                Biên bản cuộc họp cấp đơn vị
                            </h6>
                        </div>
                        <div class="sidebarBody_card-items-pdf">
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >Họp giao ban tuần 3 tháng 3/2023</span
                                        >
                                    </div>
                                    <div class="sidebarBody_card-description">
                                        <div class="sidebarBody_card-text">
                                            14/02/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >Họp giao ban tuần 3 tháng 3/2023</span
                                        >
                                    </div>
                                    <div class="sidebarBody_card-description">
                                        <div class="sidebarBody_card-text">
                                            14/02/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >Họp giao ban tuần 3 tháng 3/2023</span
                                        >
                                    </div>
                                    <div class="sidebarBody_card-description">
                                        <div class="sidebarBody_card-text">
                                            14/02/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >Họp giao ban tuần 3 tháng 3/2023</span
                                        >
                                    </div>
                                    <div class="sidebarBody_card-description">
                                        <div class="sidebarBody_card-text">
                                            14/02/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >Họp giao ban tuần 3 tháng 3/2023</span
                                        >
                                    </div>
                                    <div class="sidebarBody_card-description">
                                        <div class="sidebarBody_card-text">
                                            14/02/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                </div>
                            </div>
                            <div class="sidebarBody_card-items-wrapper mb-2 d-flex align-items-start justify-content-between">
                                <div class="sidebarBody_card-items-left">
                                    <div class="sidebarBody_card-posts">
                                        <span
                                            >Họp giao ban tuần 3 tháng 3/2023</span
                                        >
                                    </div>
                                    <div class="sidebarBody_card-description">
                                        <div class="sidebarBody_card-text">
                                            14/02/2023
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebarBody_card-items-right">
                                    <a class="sidebarBody_card-items-links" href="">Đọc thêm</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <span id="btn-right"
            ><i class="bi bi-arrow-bar-right"></i
        ></span>
    </div>
</div>
