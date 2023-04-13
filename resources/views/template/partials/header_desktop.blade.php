<div class="header_menu">
    <ul class="header_menu-list">
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub {{ request()->is('danh-sach-danh-gia', 'giao-viec', 'kho-bien-ban-danh-gia') ? 'active' : '' }}"
                href="#">
                <i class="bi bi-compass"></i>
                <span>Kế hoạch & Giao việc</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->is('danh-sach-danh-gia', 'kho-bien-ban-danh-gia') ? 'active' : '' }}">
                        Đào tạo <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">

                        <li class="header_more-item">
                            <a href="/danh-sach-danh-gia"
                                class="header_more-link {{ request()->is('danh-sach-danh-gia') ? 'active' : '' }}">Danh
                                sách đánh giá</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/kho-bien-ban-danh-gia"
                                class="header_more-link {{ request()->is('kho-bien-ban-danh-gia') ? 'active' : '' }}">Kho
                                biên bản đánh giá</a>
                        </li>
                    </ul>
                </li>
                @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                    <li class="header_submenu-items">
                        <a href="{{ route('assignTask.list') }}"
                            class="header_submenu-link {{ request()->is('giao-viec') ? 'active' : '' }}">
                            Giao Việc
                        </a>
                        {{-- <ul class="header_more">
                            <li class="header_more-item">
                                <a href="#" class="header_more-link">Giao việc định mức</a>
                            </li>
                            <li class="header_more-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#giaoNhiemVuPhatSinhGlobal" class="header_more-link">Giao việc phát sinh</a>
                            </li>
                        </ul> --}}
                    </li>
                @endif

            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub {{ request()->is('kho-luu-tru-bien-ban-hop', 'danh-sach-cuoc-hop/*', 'giao-ban/*') ? 'active' : '' }}"
                href="#">
                <i class="bi bi-people"></i>
                <span>Họp đơn vị</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="/danh-sach-cuoc-hop/cuoc-hop-dang-dien-ra"
                        class="header_submenu-link more_btn {{ request()->is('danh-sach-cuoc-hop/*', 'giao-ban/*') ? 'active' : '' }}">
                        Danh sách cuộc họp
                        {{-- <i class="bi bi-chevron-right"></i> --}}
                    </a>
                    {{-- <ul class="header_more">
                        @if (session('user')['role'] == 'admin' || session('user')['role'] == 'manager')
                            <li class="header_more-item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#taoCuocHop" class="header_more-link">Tạo cuộc họp</a>
                            </li>
                        @endif
                        <li class="header_more-item">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#thamGiaCuocHop" class="header_more-link">Tham gia họp</a>
                        </li>
                        <li class="header_more-item">
                            <a href="/danh-sach-cuoc-hop/cuoc-hop-dang-dien-ra" class="header_more-link {{ request()->is('danh-sach-cuoc-hop/*') ? 'active' : '' }}">Cuộc họp đang
                                diễn ra</a>
                        </li>
                    </ul> --}}
                </li>
                <li class="header_submenu-items">
                    <a href="/kho-luu-tru-bien-ban-hop"
                        class="header_submenu-link {{ request()->is('kho-luu-tru-bien-ban-hop') ? 'active' : '' }}">Kho
                        biên bản họp</a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="quan-ly-nhan-su">
                <i class="bi bi-person-add"></i>
                <span>Quản lý nhân sự</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Tuyển dụng</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Đánh giá nhân viên</a>
                </li>
            </ul>
        </li>

        <li class="header_menu-item">
            <a class="header_menu-link" href="#">
                <i class="bi bi-journal-arrow-up"></i>
                <span>DWT & KPI</span>
            </a>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-shield-lock"></i>
                <span>Kiểm soát NV & CV</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items">
                    <a href="su-co-phat-sinh" class="header_submenu-link">Sự cố phát sinh</a>
                </li>
                <li class="header_submenu-items">
                    <a href="phan-anh" class="header_submenu-link">Phản ánh</a>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-list-check"></i>
                <span>Xét duyệt</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Sự việc và ý
                        kiến</a>
                </li>
                <li class="header_submenu-items">
                    <a href="xet-duyet-chi-tieu-mua-sam" class="header_submenu-link">Chi tiêu mua
                        sắm</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Công tác</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Văn bản</a>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-ui-checks-grid"></i>
                <span>Đề xuất</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Sự việc và ý
                        kiến</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Chi tiêu mua sắm</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Công tác</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Văn bản</a>
                </li>
            </ul>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub" href="#">
                <i class="bi bi-share"></i>
                <span>VBĐH tham khảo</span>
            </a>
        </li>
        <li class="header_menu-item">
            <a class="header_menu-link menu_btn-sub {{ request()->is('ho-so-don-vi', 'danh-sach-vi-tri', 'danh-sach-cap-nhan-su', 'danh-muc-goi-trang-bi', 'danh-sach-thanh-vien', 'danh-muc-dinh-muc', 'danh-muc-nhiem-vu', 'danh-muc-chi-so-key') ? 'active' : '' }}"
                aria-current="page" href="#">
                <i class="bi bi-gear"></i>
                <span>Cấu hình</span>
            </a>
            <ul id="header_submenu">
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->is('ho-so-don-vi', 'danh-sach-vi-tri', 'danh-sach-cap-nhan-su', 'danh-muc-goi-trang-bi') ? 'active' : '' }}">
                        Hồ sơ đơn vị <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('department.list') }}"
                                class="header_more-link {{ request()->is('ho-so-don-vi') ? 'active' : '' }}">Cơ cấu
                                đơn vị</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('position.list') }}"
                                class="header_more-link {{ request()->is('danh-sach-vi-tri') ? 'active' : '' }}">Danh
                                sách vị
                                trí</a>
                        </li>
                        {{-- <li class="header_more-item">
                            <a href="{{ route('positionOri.list') }}" class="header_more-link">Danh sách cấp
                                tổ chức</a>
                        </li> --}}
                        <li class="header_more-item">
                            <a href="{{ route('positionLevel.list') }}"
                                class="header_more-link {{ request()->is('danh-sach-cap-nhan-su') ? 'active' : '' }}">Danh
                                sách cấp
                                nhân sự</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('equimentPack.list') }}"
                                class="header_more-link {{ request()->is('danh-muc-goi-trang-bi') ? 'active' : '' }}">Danh
                                mục gói
                                trang bị</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="ho-so-nhan-vien"
                        class="header_submenu-link more_btn {{ request()->is('danh-sach-thanh-vien') ? 'active' : '' }}">
                        Hồ sơ nhân viên <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('user.list') }}"
                                class="header_more-link {{ request()->is('danh-sach-thanh-vien') ? 'active' : '' }}">Danh
                                sách
                                thành viên</a>
                        </li>
                    </ul>
                </li>
                <li class="header_submenu-items">
                    <a href="mo-ta-cong-viec" class="header_submenu-link">Mô tả công việc</a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#"
                        class="header_submenu-link more_btn {{ request()->is('danh-muc-dinh-muc', 'danh-muc-nhiem-vu', 'danh-muc-chi-so-key') ? 'active' : '' }}">
                        Định mức lao động <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="{{ route('target.list') }}"
                                class="header_more-link {{ request()->is('danh-muc-dinh-muc') ? 'active' : '' }}">Định
                                mức</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('targetDetail.list') }}"
                                class="header_more-link {{ request()->is('danh-muc-nhiem-vu') ? 'active' : '' }}">Mẫu
                                nhiệm vụ</a>
                        </li>
                        <li class="header_more-item">
                            <a href="{{ route('key.list') }}"
                                class="header_more-link {{ request()->is('danh-muc-chi-so-key') ? 'active' : '' }}">Chỉ
                                số kinh
                                doanh</a>
                        </li>
                        {{-- <li class="header_more-item">
                            <a href="#" class="header_more-link">Danh mục đơn
                                vị tính</a>
                        </li> --}}
                    </ul>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Quy trình</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">KPI</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Phân quyền</a>
                </li>
                <li class="header_submenu-items">
                    <a href="#" class="header_submenu-link">Chữ ký</a>
                </li>
                <li class="header_submenu-items more position-relative">
                    <a href="#" class="header_submenu-link more_btn">
                        Biểu đồ <i class="bi bi-chevron-right"></i>
                    </a>
                    <ul class="header_more">
                        <li class="header_more-item">
                            <a href="danh-muc-dinh-muc" class="header_more-link">Danh sách key
                                chart</a>
                        </li>
                        <li class="header_more-item">
                            <a href="danh-muc-dinh-muc" class="header_more-link">Danh sách
                                chart</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
