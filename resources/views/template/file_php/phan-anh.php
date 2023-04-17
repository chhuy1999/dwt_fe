<?php $pageTitle='Phản ánh'; ?>
<?php require_once($template_path.'header/header-master.php'); ?>

<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Phản ánh</h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>{{Session::get('department_name')}}</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>{{Session::get('user')['name']}}</strong></div>
                            </div>
                        </div>
                        <div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-3">
                                        <div class="card-title">Nội dung phản ánh</div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="form-control">
                                                <div class="row mt-3">
                                                    <div class="col-md-6 mb-3 ">
                                                        <div class="col">
                                                            <input type="text" class="form-control" placeholder="Nhập tiêu đề phản ánh" id="title"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3 ">
                                                        <select class="selectpicker" data-width="100%" title="Chọn phòng/ban">
                                                            <option>Phòng Marketing</option>
                                                            <option>Phòng Nhân sự</option>
                                                            <option>Phòng Kế toán</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 mb-3 ">
                                                        <div class="col">
                                                            <textarea class="form-control" placeholder="Nhập nội dung phản ánh" rows="5" id="textarea"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-control">
                                                <div class="row mb-3 mt-3">
                                                    <div class="col-md-6 d-flex">
                                                        <div style="padding-right: 18px" for="staticEmail" class="col-form-label"><i class="bi bi-person-workspace"></i> Chủ trì</div>
                                                        <select class="selectpicker" multiple data-actions-box="true"
                                                        data-width="73%" data-live-search="true"
                                                        title="Chọn người chủ trì..."
                                                        data-select-all-text="Chọn tất cả"
                                                        data-deselect-all-text="Bỏ chọn"
                                                        data-size="6"
                                                        data-selected-text-format="count > 6"
                                                        data-count-selected-text="Bạn đang chọn {0} thành viên"
                                                        data-live-search-placeholder="Tìm kiếm...">
                                                            <option>Chủ trì 1</option>
                                                            <option>Chủ trì 2</option>
                                                            <option>Chủ trì 3</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 d-flex justify-content-start">
                                                        <label style="padding-right: 5px" for="staticEmail" class="col-form-label"><i class="bi bi-vector-pen"></i> Thư ký</label>
                                                        <select class="selectpicker" multiple data-actions-box="true"
                                                        data-width="75%" data-live-search="true"
                                                        title="Chọn thư ký..."
                                                        data-select-all-text="Chọn tất cả"
                                                        data-deselect-all-text="Bỏ chọn"
                                                        data-size="6"
                                                        data-selected-text-format="count > 6"
                                                        data-count-selected-text="Bạn đang chọn {0} thành viên"
                                                        data-live-search-placeholder="Tìm kiếm...">
                                                            <option>Thư ký 1</option>
                                                            <option>Thư ký 2</option>
                                                            <option>Thư ký 3</option>
                                                            <option>Thư ký 4</option>
                                                            <option>Thư ký 5</option>
                                                            <option>Thư ký 6</option>
                                                            <option>Thư ký 7</option>
                                                            <option>Thư ký 8</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3 mt-3">
                                                    <div class="col-md-6 d-flex">
                                                        <label style="padding-right: 5px" for="staticEmail" class="col-form-label"><i class="bi bi-person-add"></i> Tham gia</label>
                                                        <select class="selectpicker" multiple data-actions-box="true"
                                                        data-width="73%" data-live-search="true"
                                                        title="Chọn thành viên..."
                                                        data-select-all-text="Chọn tất cả"
                                                        data-deselect-all-text="Bỏ chọn"
                                                        data-size="6"
                                                        data-selected-text-format="count > 0"
                                                        data-count-selected-text="Bạn đang chọn {0} thành viên"
                                                        data-live-search-placeholder="Tìm kiếm...">
                                                            <option>Thành viên 1</option>
                                                            <option>Thành viên 2</option>
                                                            <option>Thành viên 3</option>
                                                            <option>Thành viên 4</option>
                                                            <option>Thành viên 5</option>
                                                            <option>Thành viên 6</option>
                                                            <option>Thành viên 7</option>
                                                            <option>Thành viên 8</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 d-flex  justify-content-start">
                                                        <label style="padding-right: 12px" for="staticEmail" class="col-form-label"><i class="bi bi-person-dash"></i> Vắng </label>
                                                        <select class="selectpicker" multiple data-actions-box="true"
                                                        data-width="75%" data-live-search="true"
                                                        title="Chọn thành viên..."
                                                        data-select-all-text="Chọn tất cả"
                                                        data-deselect-all-text="Bỏ chọn"
                                                        data-size="6"
                                                        data-selected-text-format="count > 0"
                                                        data-count-selected-text="Bạn đang chọn {0} thành viên"
                                                        data-live-search-placeholder="Tìm kiếm...">
                                                            <option>Thành viên 1</option>
                                                            <option>Thành viên 2</option>
                                                            <option>Thành viên 3</option>
                                                            <option>Thành viên 4</option>
                                                            <option>Thành viên 5</option>
                                                            <option>Thành viên 6</option>
                                                            <option>Thành viên 7</option>
                                                            <option>Thành viên 8</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarRight.php'); ?>
</div>

<!--end index page-->

<?php require_once($template_path.'footer/footer-master.php'); ?>
