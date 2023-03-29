<?php $pageTitle='Thông tin cá nhân'; ?>
<?php require_once($template_path.'header/header-master.php'); ?>

<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Thông tin cá nhân
                        </h5>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="card-title">Quản lý thông tin</div>
                                        
                                    </div>
                                    <div class='row'>
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="card-title mb-3">Thông tin cơ bản</div>
                                                    <div class="mb-3">
                                                        <label for="hovaten" class="form-label">Họ và tên</label>
                                                        <input type="text" readonly value ="Nguyễn Thị Yến Hoa" class="form-control" id="hovaten"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gioitinh" class="form-label">Giới tính</label>
                                                        <input type="text" readonly value ="Khác" class="form-control" id="gioitinh" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="ngaysinh" class="form-label">Ngày sinh</label>
                                                        <input type="text" readonly value ="--/--/----" class="form-control" id="ngaysinh" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="card-title mb-3">Thông tin liên hệ</div>
                                                    <div class="mb-3">
                                                        <label for="sdt" class="form-label">Số điện thoại</label>
                                                        <input type="text" readonly value ="0123456789" class="form-control" id="sdt"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" readonly value ="admin@gmail.co" class="form-control" id="email" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="diachilienhe" class="form-label">Địa chỉ liên hệ</label>
                                                        <input type="text" readonly value ="--/--/----" class="form-control" id="diachilienhe" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="card-title mb-3">CMND/CCCD</div>
                                                    <div class="mb-3">
                                                        <label for="sdt" class="form-label">Số CMND/CCCD</label>
                                                        <input type="text" readonly value ="--/--/----" class="form-control" id="sdt"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Ngày cấp</label>
                                                        <input type="text" readonly value ="--/--/----" class="form-control" id="email" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="diachilienhe" class="form-label">Nơi cấp</label>
                                                        <input type="text" readonly value ="------" class="form-control" id="diachilienhe" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="card-title mb-3">Công việc và học vấn</div>
                                                    <div class="mb-3">
                                                        <label for="sdt" class="form-label">Công việc</label>
                                                        <input type="text" readonly value ="------" class="form-control" id="sdt"/>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Học vấn</label>
                                                        <input type="text" readonly value ="------" class="form-control" id="email" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="diachilienhe" class="form-label">Trình độ</label>
                                                        <input type="text" readonly value ="------" class="form-control" id="diachilienhe" />
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
            @include('template.footer.footer')
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarRight.php'); ?>
</div>

<!--end index page-->

<?php require_once($template_path.'footer/footer-master.php'); ?>