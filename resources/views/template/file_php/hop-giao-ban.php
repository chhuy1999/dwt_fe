<?php $pageTitle='Họp giao ban'; ?>
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
                            Biên bản họp Giao Ban
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
                            <label class="">Tháng</label>
                            <input id="thismonth" value="<?php echo date('m/Y'); ?>" class="form-control" type="text" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    
                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title">Tổng quan</div>
                                            </div>
                                            <div class="form-control" style="padding: 0.5rem 0.75rem;">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <div class="d-flex align-items-center"><img src="<?php echo $template_path?>assets/img/time.svg" /> Thời gian&nbsp;</div>
                                                            <div style="flex:1">
                                                                <div id="date_time-hopgiaoban" class="d-flex align-items-center justify-content-between datetimepicker_wrapper">
                                                                    <input id="datetimepicker" value="<?php echo date('d/m/Y h:m'); ?>" class="form-control"  type="text">
                                                                    <div class="datetimepicker_separate">-</div>
                                                                    <input id="datetimepicker2" value="<?php echo date('d/m/Y h:m'); ?>" class="form-control"  type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex" style="padding-right:10px"><img src="<?php echo $template_path?>assets/img/muiten.svg" /> Chủ đề&nbsp;</div>
                                                            <div style="flex:1">
                                                                <textarea name="" id="" rows="3" cols=""  class="form-control" placeholder="Nhập chủ đề/mục tiêu cuộc họp"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="mb-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center" style="flex:1"><img src="<?php echo $template_path?>assets/img/person-check.svg" /> Chủ trì</div>
                                                            <div style="flex:2">
                                                                <select class="selectpicker" multiple data-actions-box="true"
                                                                data-width="100%" data-live-search="true" 
                                                                title="Chọn chủ trì..."
                                                                data-select-all-text="Chọn tất cả"
                                                                data-deselect-all-text="Bỏ chọn"
                                                                data-size="3"
                                                                data-selected-text-format="count > 2"
                                                                data-count-selected-text="Có {0} Chủ trì"
                                                                data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Chủ trì 1</option>
                                                                    <option>Chủ trì 2</option>
                                                                    <option>Chủ trì 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 mb-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center" style="flex:1"><img src="<?php echo $template_path?>assets/img/pencil.svg" /> Thư ký</div>
                                                            <div style="flex:2">
                                                                <select class="selectpicker" multiple data-actions-box="true"
                                                                data-width="100%" data-live-search="true" 
                                                                title="Chọn thư ký..."
                                                                data-select-all-text="Chọn tất cả"
                                                                data-deselect-all-text="Bỏ chọn"
                                                                data-size="3"
                                                                data-selected-text-format="count > 2"
                                                                data-count-selected-text="Có {0} Thư ký"
                                                                data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Thư ký 1</option>
                                                                    <option>Thư ký 2</option>
                                                                    <option>Thư ký 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mt-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center" style="flex:1"><img src="<?php echo $template_path?>assets/img/person-check.svg" /> Thành viên</div>
                                                            <div style="flex:2">
                                                                <select class="selectpicker" multiple data-actions-box="true"
                                                                data-width="100%" data-live-search="true" 
                                                                title="Chọn thành viên..."
                                                                data-select-all-text="Chọn tất cả"
                                                                data-deselect-all-text="Bỏ chọn"
                                                                data-size="3"
                                                                data-selected-text-format="count > 2"
                                                                data-count-selected-text="Có {0} thành viên"
                                                                data-live-search-placeholder="Tìm kiếm...">
                                                                    <option>Thành viên 1</option>
                                                                    <option>Thành viên 2</option>
                                                                    <option>Thành viên 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2 d-flex justify-content-between align-items-center">
                                                <div class="card-title">Vấn đề tồn đọng</div>
                                                <div class="alert alert-warning border-warning m-0" style="padding: 0 6px">
                                                    <i class="bi bi-exclamation-triangle pe-2"></i><strong>03</strong> vấn đề tồn đọng
                                                </div>
                                            </div>
                                                
                                            <div class="table-responsive rounded">
                                                <table class="table table-bordered border m-0 style_disableAll">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th>Vấn đề tồn đọng</th>
                                                            <th>Người nêu</th>
                                                            <th>Thời hạn</th>
                                                            <th>Tình trạng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">Chưa hoàn thành báo cáo do abc chưa gửi thông</div>
                                                            </td>
                                                            <td><div class="text-center">Mai</div></td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="selectpicker" data-width="100%">
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã phản hồi</option>
                                                                    <option>Đã giải quyết</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">Chưa hoàn thành báo cáo do abc chưa gửi thông</div>
                                                            </td>
                                                            <td><div class="text-center">Mai</div></td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="selectpicker" data-width="100%">
                                                                    <option>Đã phản hồi</option>
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã giải quyết</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>03</td>
                                                            <td>
                                                                <div style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#phanHoiVanDe">Chưa hoàn thành báo cáo do abc chưa gửi thông</div>
                                                            </td>
                                                            <td><div class="text-center">Mai</div></td>
                                                            <td>31/03</td>
                                                            <td>
                                                                <select class="selectpicker" data-width="100%">
                                                                    <option>Đã giải quyết</option>
                                                                    <option>Đã nêu</option>
                                                                    <option>Đã phản hồi</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
                                                            <th>STT</th>
                                                            <th>Vấn đề tồn đọng</th>
                                                            <th>Người nêu</th>
                                                            <th>Nguyên nhân</th>
                                                            <th>Hướng giải quyết</th>
                                                            <th>PIC</th>
                                                            <th>Thời hạn</th>
                                                            <th>Tình trạng</th>
                                                            <th colspan="2"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody data-repeater-list="group-a">
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">1</div>
                                                            </td>
                                                            <td>
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thôngChưa hoàn thành báo cáo do abc chưa gửi thông</div>
                                                            </td>
                                                            <td><div class="text-center">Mai</div></td>
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
                                                                    <option>PCI 1</option>
                                                                    <option>PCI 2</option>
                                                                    <option>PCI 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input id="datetimepicker4" value="<?php echo date('d/m'); ?>" class="form-control"  type="text">
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper" style="border: 1px solid">
                                                                        <div class="circle_tracking bg-white"></div>
                                                                        <div class="circle_tracking bg-white"></div>
                                                                        <div class="circle_tracking bg-white"></div>
                                                                        <div class="circle_tracking bg-white"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item" href="#">Chưa giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Đã giải quyết đúng hạn</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không thể giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không xác định được nguyên nhân</a></li>
                                                                    <li><a class="dropdown-item" href="#">Quá hạn chưa giải quyết</a></li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                            <div class="d-flex align-items-center justify-content-center">2</div>
                                                            </td>
                                                            <td>
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông</div>
                                                            </td>
                                                            <td><div class="text-center">Mai</div></td>
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
                                                                    <option>PCI 1</option>
                                                                    <option>PCI 2</option>
                                                                    <option>PCI 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input id="datetimepicker5" value="<?php echo date('d/m'); ?>" class="form-control"  type="text">
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-success"></div>
                                                                        <div class="circle_tracking opacity-75 bg-success"></div>
                                                                        <div class="circle_tracking opacity-75 bg-success"></div>
                                                                        <div class="circle_tracking opacity-75 bg-success"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item" href="#">Chưa giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Đã giải quyết đúng hạn</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không thể giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không xác định được nguyên nhân</a></li>
                                                                    <li><a class="dropdown-item" href="#">Quá hạn chưa giải quyết</a></li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                            <div class="d-flex align-items-center justify-content-center">3</div>
                                                            </td>
                                                            <td>
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông</div>
                                                            </td>
                                                            <td><div class="text-center">Mai</div></td>
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
                                                                    <option>PCI 1</option>
                                                                    <option>PCI 2</option>
                                                                    <option>PCI 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input id="datetimepicker6" value="<?php echo date('d/m'); ?>" class="form-control"  type="text">
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-danger"></div>
                                                                        <div class="circle_tracking opacity-75 bg-success"></div>
                                                                        <div class="circle_tracking opacity-75 bg-success"></div>
                                                                        <div class="circle_tracking opacity-75 bg-success"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item" href="#">Chưa giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Đã giải quyết đúng hạn</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không thể giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không xác định được nguyên nhân</a></li>
                                                                    <li><a class="dropdown-item" href="#">Quá hạn chưa giải quyết</a></li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">4</div>
                                                            </td>
                                                            <td>
                                                                <div>Chưa hoàn thành báo cáo do abc chưa gửi thông</div>
                                                            </td>
                                                            <td><div class="text-center">Mai</div></td>
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
                                                                    <option>PCI 1</option>
                                                                    <option>PCI 2</option>
                                                                    <option>PCI 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input id="datetimepicker7" value="<?php echo date('d/m'); ?>" class="form-control"  type="text">
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-danger"></div>
                                                                        <div class="circle_tracking opacity-75 bg-danger"></div>
                                                                        <div class="circle_tracking opacity-75 bg-danger"></div>
                                                                        <div class="circle_tracking opacity-75 bg-danger"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item" href="#">Chưa giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Đã giải quyết đúng hạn</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không thể giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không xác định được nguyên nhân</a></li>
                                                                    <li><a class="dropdown-item" href="#">Quá hạn chưa giải quyết</a></li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <div data-repeater-delete class="close-row-btn">
                                                                    <i class="bi bi-trash3"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr data-repeater-item>
                                                            <td>
                                                                <div class="d-flex align-items-center justify-content-center">5</div>
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
                                                                <div contenteditable="true" class="content_table-three-input"></div>
                                                            </td>
                                                            <td>
                                                                <select class="selectpicker"
                                                                data-width="100%"
                                                                title="&nbsp;"
                                                                selectedTextFormat="static">
                                                                <option style="display:none" value=""></option>
                                                                    <option>PCI 1</option>
                                                                    <option>PCI 2</option>
                                                                    <option>PCI 3</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input id="datetimepicker8" value="<?php echo date('d/m'); ?>" class="form-control"  type="text">
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex align-items-center justify-content-center">
                                                                    <div class="circle_tracking-wrapper">
                                                                        <div class="circle_tracking opacity-75 bg-warning"></div>
                                                                        <div class="circle_tracking opacity-75 bg-warning"></div>
                                                                        <div class="circle_tracking opacity-75 bg-warning"></div>
                                                                        <div class="circle_tracking opacity-75 bg-warning"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dotdotdot"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></div>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item" href="#">Chưa giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Đã giải quyết đúng hạn</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không thể giải quyết</a></li>
                                                                    <li><a class="dropdown-item" href="#">Không xác định được nguyên nhân</a></li>
                                                                    <li><a class="dropdown-item" href="#">Quá hạn chưa giải quyết</a></li>
                                                                </ul>
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
                                                    Đến kho lưu trữ
                                                </a>
                                                <a href='bien-ban-hop' class="btn btn-danger action_table-btn">
                                                    Duyệt & Lưu PDF
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-end">
                            <div id='warning_notification' class="alert alert-warning alert-dismissible fade show border-left border-warning" role="alert">
                                <div class='d-flex align-items-center'>
                                    <div class='warning_notification-icon'><i class="bi bi-exclamation-triangle pe-2"></i></div>
                                    <div class="warning_notification-body">
                                        <p class='m-0' style="font-size:1.2rem">Nhiệm vụ <strong>Họp giao ban </strong>ngày đã quá hạn!</p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
    <?php require_once($template_path.'sidebar/sidebarHopGiaoBan/sidebarRight.php'); ?>
</div>
<!-- Modal -->
<div class="modal fade" id="phanHoiVanDe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"  style="max-width:700px;">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel">Phản hồi vấn đề tồn đọng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 row">
                    <div class="col-sm-12 d-flex align-items-center">
                        <label for="staticEmail" class="col-form-label" style="padding-right:6px;">Vấn đề tồn đọng </label>
                        <div class="w-100" style="flex:1;overflow:hidden">
                            <div contenteditable="true" readonly class="contenteditable" placeholder="Chưa hoàn thành báo cáo do abc chưa gửi thông"></div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-4 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:18px;">Cấp giải quyết</label>
                        <div  class="w-100" style="flex:1">
                            <select class="form-select" aria-label="Default select example">
                                <option value="2">Phòng ban</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:6px;">Thời hạn</label>
                        <div  class="w-100" style="flex:1">
                            <input id="datetimepicker3" readonly value="<?php echo date('d/m/Y'); ?>" class="form-control"  type="text">
                        </div>
                    </div>
                    <div class="col-sm-5 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:6px;">Trạng thái</label>
                        <div class="w-100" style="flex:1">
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Chọn trạng thái</option>
                                <option>Chưa giải quyết</option>
                                <option>Đã giải quyết đúng hạn</option>
                                <option>Không thể giải quyết</option>
                                <option>Không xác định được nguyên nhân</option>
                                <option>Quá hạn chưa giải quyết</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-12 d-flex  align-items-center">
                        <label for="inputPassword" class="col-form-label"  style="padding-right:10px;border-radius:4px">Phản hồi vấn đề</label>
                        <div class="w-100" style="flex:1;overflow:hidden">
                            <div contenteditable="true" class="contenteditable" placeholder="Vui lòng phản hồi vấn đề tại đây"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger">Gửi</button>
            </div>
        </div>
    </div>
</div>
<!--end index page-->
<?php require_once($template_path.'footer/footer-hopGiaoBan.php'); ?>