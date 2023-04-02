<?php $pageTitle='Sự cố phát sinh'; ?>

<?php require_once($template_path.'header/header-master.php'); ?>

<!--index page start-->

<div class="pageWithSidebar">
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarLeft.php'); ?>
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Sự cố phát sinh</h5>
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
                                        <div class="card-title">Danh sách công việc có sự cố/bất cập/phát sinh</div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered dh-table align-middle">
                                            <thead>
                                                <tr>
                                                    <th>TT</th>
                                                    <th>Phòng / Ban</th>
                                                    <th>Miêu tả sự cố</th>
                                                    <th>Chịu trách nhiệm</th>
                                                    <th>Tình trạng</th>
                                                    <th>Ngày phát sinh</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-warning text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-success">Hoàn thành</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-warning text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-danger">Chậm</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-info text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-warning text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-warning text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">8</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-warning text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">9</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-warning text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center">Phòng Marketing</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ab vel iste corrupti recusandae, debitis .</td>
                                                    <td class="text-center">Nguyễn Thị Yến Hoa</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-warning text-dark">Phát sinh</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php echo date("d/m/Y");?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="table_actions d-flex justify-content-center">
                                                            <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                                                <i class="bi bi-eye"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật sự cố</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Phòng / Ban:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Miêu tả sự cố:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Chịu trách nhiệm:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Tình trạng:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Modal -->
                </div>
            </div>
        </div>
    </div>
    <?php require_once($template_path.'sidebar/sidebarMaster/sidebarRight.php'); ?>
</div>

<!--end index page-->

<?php require_once($template_path.'footer/footer-master.php'); ?>
