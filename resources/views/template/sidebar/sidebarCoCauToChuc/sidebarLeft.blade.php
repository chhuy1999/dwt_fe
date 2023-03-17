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
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#themCoCau">Thêm cơ
                            cấu</button>


                    </div>

                    <div class="main_search mb-3 mt-3">
                        <i class="bi bi-search"></i>
                        <input type="text" id="search_tree" class="form-control" placeholder="Tìm kiếm">
                    </div>

                    <ul class="tree">
                        <li class="section ps-0">
                            <input type="checkbox" checked id="all">
                                <label class="d-flex" for="all"></label>
                                <span class="clicktree d-block" style="padding-left: 20px" data-href="#body_content-1"> Toàn Công Ty</span>
                            <ul>
                                <li class="section">
                                        <input type="checkbox" id="groupA">
                                        <label class="d-flex" for="groupA"></label>
                                        <span class="clicktree d-block" data-href="#body_content-2"> Khối kinh doanh</span>
                                    <ul>
                                        <li>Kênh OTC</li>
                                        <li>Kênh ETC</li>
                                        <li>Kênh MT</li>
                                        <li>Kênh Online</li>
                                    </ul>
                                </li>
                                <li class="section">
                                    <input type="checkbox" id="groupB">
                                    <label class="d-flex" for="groupB"></label>
                                    <span class="d-block"> Marketing</span>
                                    <ul>
                                        <li>Quản trị nhãn & Đào tạo</li>
                                        <li class="clicktree" data-href="#body_content-3">Digital Marketing</li>
                                        <li>Trade Marketing</li>
                                        <li>Truyền thông nội bộ</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="clicktree d-block">Kế toán</span>
                                </li>
                                <li>
                                    <span class="clicktree d-block">Hành chính nhân sự</span>
                                </li>
                                <li>
                                    <span class="clicktree d-block">Kho & Giao vận</span>
                                </li>
                                <li>
                                    <span class="clicktree d-block">Dịch vụ bán hàng</span>
                                </li>
                                <li>
                                    <span class="clicktree d-block">Cung ứng</span>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        {{-- <span id="btn-left"
            ><i class="bi bi-arrow-bar-left"></i
        ></span> --}}
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
                                <select class="selectpicker" title="Chọn đơn vị">
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
                            <div class="col-sm-8">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex col-sm-4">
                                <div class="modal_body-title">Trưởng đơn vị <span class="text-danger">*</span></div>
                            </div>
                            <div class="col-sm-8">
                                <select class="selectpicker" title="Chọn cấp tổ chức">
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
                                <input class="form-control" type="text" placeholder="Nhập Chức năng, nhiệm vụ">
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
