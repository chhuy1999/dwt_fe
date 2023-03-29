<?php $pageTitle='Họp tuần'; ?>
<?php require_once($template_path.'header/header-master.php'); ?>
<!--index page start-->

<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>

<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarHopGiaoBan/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Họp Tuần
                        </h5>
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
                            <input id="thismonth" value="<?php echo date('H:i - d/m/Y'); ?>" class="form-control" type="text" />
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Tổng quan</div>
                                        
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="form-control">
                                                <div class="mt-3 mb-3 row">
                                                     <div id="date_time-hopgiaoban" class="d-flex align-items-center justify-content-between col-sm-12 datetimepicker_wrapper">
                                                        <input type="text" value="<?php echo date('d/m/Y'); ?>" class="form-control date start" />
                                                        <input type="text" value="<?php echo date('h:i'); ?>" class="form-control time start" />
                                                        <div class="datetimepicker_separate">Tới</div>
                                                        <input type="text" value="<?php echo date('h:i'); ?>" class="form-control time end" />
                                                        <input type="text" value="<?php echo date('d/m/Y'); ?>" class="form-control date end" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="col-md-6 d-flex">
                                                        <label style="padding-right: 6px;" for="title" class="col-form-label"><i class="bi bi-file-earmark-font"></i> Chủ đề </label>
                                                        <div class="col">
                                                            <input type="text" class="form-control" placeholder="Nhập chủ đề cuộc họp" id="title"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-flex">
                                                        <label style="padding-right: 6px;" for="textarea" class="col-form-label"><i class="bi bi-file-earmark-text"></i> Mục tiêu </label>
                                                        <div class="col">
                                                            <textarea class="form-control" placeholder="Nhập nội dung cuộc họp" rows="1" id="textarea"></textarea>
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

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">Nội dung chính</div>
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="repeater-hopPhongBan position-relative style_table-3">
                                                <table class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>TT</th>
                                                            <th>Vấn đề tồn đọng</th>
                                                            <th>Người nêu</th>
                                                            <th>Nguyên nhân</th>
                                                            <th>Đề xuất giải quyết</th>
                                                            <th>PIC</th>
                                                            <th>Thời hạn</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="group-a">
                                                        <tr data-repeater-item>
                                                            <th scope="row">1</th>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <th scope="row">2</th>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <th scope="row">3</th>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <th scope="row">4</th>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <th scope="row">5</th>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>Người nêu 1</option>
                                                                    <option>Người nêu 2</option>
                                                                    <option>Người nêu 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                <div data-repeater-create class="add-row-btn">
                                                    <i class="bi bi-plus-circle"></i>
                                                </div>
                                                
                                            </div>
                                            <div class="action_table-wrapper text-end mt-3 mb-3">
                                                <a href="kho-luu-tru-bien-ban-hop" class="btn btn-outline-danger action_table-btn" style="margin-right:10px;">
                                                    <i class="bi bi-airplane"></i>
                                                    Đến kho lưu trữ
                                                </a>
                                                <a href='bien-ban-hop' class="btn btn-danger action_table-btn">
                                                    <i class="bi bi-save"></i>
                                                    Duyệt & Lưu PPF
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end">
                            <div id='warning_notification' class="alert alert-warning alert-dismissible fade show border-left border-warning" style="padding: 10px 8px; line-height:18px" role="alert">
                                <div class='d-flex align-items-center'>
                                    <div class='warning_notification-icon'><i class="bi bi-exclamation-triangle pe-2"></i></div>
                                    <div class="warning_notification-body">
                                        <h3 class="alert-heading m-0" style="font-size:1.6rem">
                                            Cảnh báo
                                        </h3>
                                        <p class='m-0' style="font-size:1.2rem">Nhiệm vụ <strong>Họp giao ban </strong>ngày đã quá hạn!</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
    <?php require_once($template_path.'sidebar/sidebarHopGiaoBan/sidebarRight.php'); ?>
</div>

<!--end index page-->
<?php require_once($template_path.'footer/footer-hopGiaoBan.php'); ?>