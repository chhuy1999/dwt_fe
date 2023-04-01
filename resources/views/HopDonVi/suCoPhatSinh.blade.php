@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Sự cố phát sinh')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Sự cố phát sinh</h5>
                        @include('template.components.sectionCard')
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
    @include('template.sidebar.sidebarMaster.sidebarRight')
@endsection
@section('footer-script')
    <script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0') }}"></script>

    <!-- Chart Types -->
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>

    <script type="text/javascript" >
        // SELECT MULTIPLE LEFT SIDEBAR
        const select = document.getElementById('select');
        const elems = document.querySelectorAll('.data_chart-items');
        const obj = {};

        const filtered = [...elems].filter((el) => {
            if (!obj[el.id]) {
                obj[el.id] = true;
                return true;
            } else {
                return false;
            }
        });

        const selectOpt = filtered.map((el) => {
            el.style.display = 'block';
            return `<option> ${el.id} </option>`;
        });

        select.innerHTML = selectOpt.join('');

        select.addEventListener('change', function() {
            for (let i = 0, iLen = select.options.length; i < iLen; i++) {
                const opt = select.options[i];
                const noPick = document.getElementById('data_chart-nopick')

                const val = opt.value || opt.text;
                if (opt.selected) {
                    document.getElementById(val).style.display = 'block';
                    noPick.style.display = 'none';

                } else {
                    document.getElementById(val).style.display = 'none';
                    noPick.style.display = 'block';
                }
            }
        });

        // BTN SETTINGS
        document.getElementById('sidebarBody_settings-body').addEventListener('click', handleClickSettings, false);

        function handleClickSettings() {
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (sidebarBodySelectWrapper.style.display === 'none') {
                sidebarBodySelectWrapper.style.display = 'block';
                document.addEventListener('click', handleClickOutside);
            } else {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }

        function handleClickOutside(event) {
            const sidebarBodySettings = document.getElementsByClassName('sidebarBody_settings-body')[0];
            const sidebarBodySelectWrapper = document.getElementById('sidebarBody_select-wrapper');
            if (!sidebarBodySettings.contains(event.target) && !sidebarBodySelectWrapper.contains(event.target)) {
                sidebarBodySelectWrapper.style.display = 'none';
                document.removeEventListener('click', handleClickOutside);
            }
        }
    </script>
@endsection
