@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Danh mục gói trang bị')

@section('content')
    {{-- @include('template.sidebar.sidebardanhSachViTri.sidebarLeft') --}}
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Danh sách trang bị
                        </h5>
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body position-relative">
                                    <div class='row'>
                                        <div class="col-md-12">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="dsTrangBi"
                                                    class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th style="width: 2%">STT</th>
                                                            <th style="width: 40%">Gói trang bị</th>
                                                            <th style="width: 40%">Hạng mục trang bị</th>
                                                            <th style="width: 10%">Đơn vị</th>
                                                            @if (session('user')['role'] == 'admin')
                                                            <th style="width: 8%">Hành động</th>
                                                            @endif
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data->data as $value)
                                                        <tr>
                                                            <th scope="row">
                                                                <div
                                                                    class="d-flex justify-content-center align-items-center">
                                                                    {{ $loop->iteration }}
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div >
                                                                    @foreach ($listEquimentPack->data as $eq)
                                                                    @if ($eq->id == $value->parent_id)
                                                                            {{ $eq->name }}
                                                                    @endif
                                                                    @endforeach

                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>{{ $value->name }}</div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    @foreach ($listUnits->data as $un)
                                                                    @if ($un->id == $value->unit_id)
                                                                            {{ $un->name }}
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </td>
                                                            @if (session('user')['role'] == 'admin')

                                                                <td>
                                                                    <div class="table_actions d-flex justify-content-center">
                                                                        <div class="btn" data-bs-toggle="modal"
                                                                            data-bs-target="#suatrangbi{{ $value->id }}">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/edit.svg') }}" />
                                                                        </div>
                                                                        <div class="btn" data-bs-toggle="modal"
                                                                            data-bs-target="#xoatrangbi{{ $value->id }}">
                                                                            <img style="width:16px;height:16px"
                                                                                src="{{ asset('assets/img/trash.svg') }}" />
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            @endif
                                                        </tr>


                                                        {{-- Xóa trang bị--}}
                                                        <div class="modal fade" id="{{ 'xoatrangbi' . $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title text-danger" id="exampleModalLabel">XÓA TRANG BỊ</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Bạn có thực sự muốn xoá trang bị này không?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                        <form
                                                                            action="{{ route('equimentPack.delete', $value->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger">Xóa</button>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal Sua Vi Tri chức danh -->
                                                        <div class="modal fade" id="{{ 'suatrangbi' . $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header text-center">
                                                                        <h5 class="modal-title w-100" id="exampleModalLabel">SỬA TRANG BỊ</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>

                                                                    <form method="POST" action="{{ route('equimentPack.update', $value->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                            <div class="row">

                                                                                <div class="col-sm-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Gói trang bị">
                                                                                    <select name="parent_id" class="selectpicker" title="Nhập gói trang bị" data-size="3" data-live-search="true">
                                                                                        @foreach ($listEquimentPack->data as $value)
                                                                                            <option value="{{ $value->parent_id}}" selected>
                                                                                                {{ $value->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-sm-6 mb-3">
                                                                                    <input class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="Hạng muc gói trang bị" type="text" name="p" value="{{ $value->name}}">
                                                                                </div>
                                                                                <div class="col-sm-6 mb-3"  data-bs-toggle="tooltip" data-bs-placement="top" title="Đơn vị">
                                                                                    <select class="selectpicker" title="Chọn đơn vị" name="unit_id">
                                                                                        @foreach ($listUnits->data as $unit)
                                                                                            @if ($unit->id != $value->unit_id)
                                                                                                <option value="{{ $unit->id }}">
                                                                                                    {{ $unit->name }}
                                                                                                </option>
                                                                                            @else
                                                                                                <option value="{{ $unit->id }}" selected>
                                                                                                    {{ $unit->name }}
                                                                                                </option>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" >Hủy</button>
                                                                            <button type="submit" class="btn btn-danger">Lưu</button>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>

                                                            @endforeach
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

            <div class="footer">
                <div class="container">Copyright © 2023 S-Team. All rights reserved.</div>
            </div>
        </div>
    </div>
    {{-- @include('template.sidebar.sidebardanhSachViTri.sidebarRight') --}}




    <!-- Modal Them trang bị-->
    <div class="modal fade" id="themTrangBi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">THÊM TRANG BỊ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('equimentPack.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <select name="parent_id" class="selectpicker" title="Nhập gói trang bị" data-size="3" data-live-search="true" placeholder="Nhập gói trang bị">
                                    @foreach ($listEquimentPack->data as $value)
                                        <option value="{{ $value->id}}">
                                            {{ $value->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="col-sm-6 mb-3">
                                <input class="form-control" required type="text" name="name" placeholder="Nhập hạng mục gói trang bị">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <select class="selectpicker" required title="Chọn đơn vị" name="unit_id">
                                    @foreach ($listUnits->data as $unit)
                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Lưu</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
@section('footer-script')

    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/plugins/jquery-datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>

        <script>
            const targetTable = $('#dsTrangBi').DataTable({
                paging: true,
                ordering: false,
                order: [[0, 'desc']],
                // pageLength: 20,
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
                dom: '<"d-flex mb-3 justify-content-end"<"card-title-wrapper">f>rt<"dataTables_bottom"i<"d-flex align-items-center justify-content-between"lp>>',
            });
            $('div.card-title-wrapper').html(`
                @if (session('user')['role'] == 'admin')
                <div class="main_search d-flex me-3">
                    <button class="btn btn-danger d-block w-60" data-bs-toggle="modal" data-bs-target="#themTrangBi" style="margin-left: 10px">Thêm trang bị</button>
                </div>
                @endif
            `);
        </script>
@endsection
