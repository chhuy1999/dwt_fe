@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh sách key chart')
@section('content')
    @include('template.sidebar.sidebarHopGiaoBan.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách key chart
                        </h5>
                        @include('template.components.sectionCard')
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="position-relative">
                                                <table id="danhSachKeyChart"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap" style="width:5%">STT</th>
                                                            <th class="text-nowrap" style="width:20%">Chỉ số</th>
                                                            <th class="text-nowrap" style="width:40%">Mô tả</th>
                                                            <th class="text-nowrap" style="width:35%">Loại biểu đồ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Doanh số</td>
                                                            <td>Theo thời gian</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Doanh số</td>
                                                            <td>Tỷ trọng vùng</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Doanh số</td>
                                                            <td>Chỉ tiêu vùng</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
    {{-- @include('template.sidebar.sidebarHopGiaoBan.sidebarRight') --}}

@endsection
@section('footer-script')
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>

    <script>
        const targetTable = $('#danhSachKeyChart').DataTable({
            paging: true,
            ordering: false,
            order: [
                [0, 'desc']
            ],
            pageLength: 25,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: "_MENU_ bản ghi trên trang",
            },
            dom: '<"d-flex justify-content-between mb-3"<"card-title-left"><"d-flex "f<"card-title-right justify-content-end">>>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
        });
    </script>

    <script>
        $('tr[data-href]').on("click", function(event) {
            if ($(event.target).closest('td').index() !== $(this).find('td').length - 1) {
                window.location.href = $(this).data('href');
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#dateDanhGia').daterangepicker({
                singleDatePicker: true,
                timePicker: false,
                startDate: new Date(),
                locale: {
                    format: 'DD/MM/YYYY '
                }
            });

        });
    </script>
@endsection