<div id="aside-left" class="aside-left">
    <div class="sidebar">
        <div class="sidebarBody">
            <div class="container">
                <div class="sidebarBody_wrapper mt-4">
                    <div class="sidebarBody_heading-wrapper d-flex align-items-center justify-content-between pb-3"
                        style="border-bottom: 1px solid">
                        <h6 class="sidebarBody_heading-big m-0">
                            Cơ cấu đơn vị
                        </h6>
                    </div>

                    <div class="main_search mb-3 mt-3">
                        <i class="bi bi-search" style="top: 6px;left: 8px;"></i>
                        <input type="text" id="search_tree" autocomplete="off" class="form-control" placeholder="Tìm kiếm">
                    </div>

                    <ul class="tree_list">
                        <li class="section ps-0 tree_list-item">
                            <input type="checkbox" id="all">
                            <label class="d-flex" for="all"></label>
                            <span class="clicktree d-block" style="padding-left: 20px" data-href="#body_content-1"> Toàn
                                Công Ty</span>
                            <ul class="tree_sublist">
                                <li class="section tree_sublist-item">
                                    <input type="checkbox" id="groupA">
                                    <label class="d-flex" for="groupA"></label>
                                    <span class="clicktree d-block" data-href="#body_content-2">Phòng kinh doanh</span>
                                    <ul class="tree_sublist-more">
                                        <li class="tree_sublist-more-item">Kinh doanh OTC</li>
                                        <li class="tree_sublist-more-item">Kinh doanh ETC</li>
                                        <li class="tree_sublist-more-item">Kinh doanh MT</li>
                                        <li class="tree_sublist-more-item">Kinh doanh Online</li>
                                    </ul>
                                </li>
                                <li class="section tree_sublist-item">
                                    <input type="checkbox" id="groupB">
                                    <label class="d-flex" for="groupB"></label>
                                    <span class="clicktree d-block" data-href="#body_content-3"> Phòng Marketing</span>
                                    <ul class="tree_sublist-more">
                                        <li class="tree_sublist-more-item">Quản trị nhãn & Đào tạo</li>
                                        <li class="tree_sublist-more-item">Digital Marketing</li>
                                        <li class="tree_sublist-more-item">Trade Marketing</li>
                                        <li class="tree_sublist-more-item">Truyền thông nội bộ</li>
                                    </ul>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Kế toán</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Tài chính</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Hành chính nhân sự</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Cung ứng</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Kho & Giao vận</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Dịch vụ bán hàng</span>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        <span id="btn-left"><i class="bi bi-arrow-bar-left"></i></span>
    </div>
</div>

<!-- Modal Them Co Cau -->
<div class="modal fade" id="themCoCau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 40%">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel">THÊM Cơ Cấu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex col-sm-4">
                                <div class="modal_body-title">Tên đơn vị <span class="text-danger">*</span></div>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="Nhập Tên đơn vị">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex col-sm-4">
                                <div class="modal_body-title">Mã đơn vị <span class="text-danger">*</span></div>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="Nhập Mã đơn vị">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex col-sm-4">
                                <div class="modal_body-title">Thuộc đơn vị <span class="text-danger">*</span></div>
                            </div>
                            <div class="col-sm-8">
                                <select class="selectpicker" title="Chọn đơn vị mẹ">
                                    <option>CTCP Mastertran</option>
                                    <option>CTCP Thái Bình Hưng Thịnh</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex col-sm-4">
                                <div class="modal_body-title">Cấp tổ chức <span class="text-danger">*</span></div>
                            </div>
                            <div class="col-sm-8 d-flex align-items-center">
                                <select class="selectpicker" title="Chọn cấp tổ chức">
                                    <option>Công ty con</option>
                                    <option>Chi nhánh</option>
                                    <option>Văn phòng đại diện</option>
                                    <option>Văn phòng</option>
                                    <option>Trung tâm</option>
                                    <option>Phòng ban</option>
                                    <option>Nhóm/tổ/đội</option>
                                    <option>Phân xưởng</option>
                                    <option>Nhà máy</option>
                                    <option>Công ty thành viên</option>
                                </select>
                                <div class="modal_list-more" data-bs-toggle="modal" data-bs-target="#danhsachCapToChuc">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex col-sm-4">
                                <div class="modal_body-title">Trưởng đơn vị <span class="text-danger">*</span></div>
                            </div>
                            <div class="col-sm-8">
                                <select class="selectpicker" title="Chọn trưởng đơn vị">
                                    <option>Nguyễn Ngọc Bảo</option>
                                    <option>Đặng Nguyễn Lam Mai</option>
                                    <option>Hồ Thị Hồng Vân</option>
                                    <option>Nguyễn Thị Ngọc Lan</option>
                                    <option>Nguyễn Thị Hồng Oanh</option>
                                    <option>Hà Nguyễn Minh Hiếu</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center">
                            <div class="d-flex col-sm-4">
                                <div class="modal_body-title">Trụ sở chính <span class="text-danger">*</span></div>
                            </div>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="Nhập địa chỉ">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="d-flex align-items-center">
                            <div class="d-flex col-sm-2">
                                <div class="modal_body-title">Chức năng<br> nhiệm vụ<span class="text-danger">*</span>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Nhập chức năng, nhiệm vụ đơn vị">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger">Lưu</button>
            </div>
        </div>
    </div>
</div>
