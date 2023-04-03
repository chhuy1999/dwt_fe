@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Giao việc')
@section('header-style')
@endsection
@section('content')
    @include('template.sidebar.sidebarGiaoViec.sidebarLeft')

    @php
        //some helper functions
        function isAssigned($assignedTask, $userId)
        {
            $isAssigned = false;
            for ($i = 0; $i < count($assignedTask->users); $i++) {
                if ($assignedTask->users[$i]->id == $userId) {
                    $isAssigned = true;
                    break;
                }
            }
            return $isAssigned;
        }
    @endphp

    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">Giao Việc</h5>
                        <div class="mainSection_card">
                            <div class="mainSection_content">
                                <div class="me-5" style="flex:1">Đơn vị: </div>
                                <div class="d-flex justify-content-start" style="flex:2"><strong>{{Session::get('department_name')}}</strong></div>
                            </div>
                            <div class="mainSection_content">
                                <div class="me-3">Trưởng đơn vị: </div>
                                <div class="d-flex justify-content-start"><strong>{{ Session::get('user')['name'] }}</strong></div>
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
                                    <div class='row'>
                                        <div class="col-md-7">
                                            <div class="table-responsive dataTables_wrapper">
                                                <table id="danhSachDinhMuc" class="table table-responsive table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">STT</th>
                                                            <th class="text-nowrap">Tên định mức</th>
                                                            <th class="text-nowrap">Mô tả</th>
                                                            <th class="text-center">MD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($listTargets->data as $target)
                                                            <tr class="clickTable" data-href="#body_content-{{ $target->id }}" style="cursor: pointer">
                                                                <th scope="row">
                                                                    <div class="d-flex align-items-center justify-content-center">
                                                                        {{ $loop->iteration }}
                                                                    </div>
                                                                </th>
                                                                <td>
                                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:250px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $target->name }}">
                                                                        {{ $target->name }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="text-nowrap d-inline-block text-truncate" style="max-width:280px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $target->description }}">
                                                                        {{ $target->description }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $target->manday }} manday">
                                                                        {{ $target->manday }}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-5 overflow-auto" style="height: 276px">
                                            
                                            @foreach ($listTargets->data as $target)
                                                <div class="body_content-wrapper" id="body_content-{{ $target->id }}">
                                                    <form action="/giao-viec" method="POST" id="formTarget">
                                                        @csrf
                                                        <input type="hidden" name="target_id" value="{{ $target->id }}">
                                                        <div class="card-title mb-2">
                                                            <div class="text-nowrap d-block text-truncate" style="max-width:100%;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="{{ $target->name }}">Giao việc cho
                                                                định mức: "{{ $target->name }}"</div>
                                                        </div>
                                                        <div class="mb-3 row align-items-center">
                                                            <div class="col-md-7 mb-3">
                                                                <input type="text" class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="Tên nhiệm vụ" name="name" placeholder="Tên nhiệm vụ" value="{{ $target->name }}" />
                                                            </div>
                                                            <div class="col-md-5 mb-3">
                                                                <input type="text" name="daterange" autocomplete="off" class="form-control" placeholder="Thời hạn" />
                                                            </div>
                                                            <div class="col-md-9 mb-3">
                                                                <textarea class="form-control" name="description" rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                {{-- <input type="number" class="form-control" min="0" step="0.05" oninput="onInput(this)" placeholder="Manday" id="title" name="manday" /> --}}
                                                                <input type="text" class="form-control" data-bs-toggle="tooltip" readonly data-bs-placement="top" title="Manday" name="manday" placeholder="Manday" value="{{ $target->manday }}" />
                                                            
                                                            </div>
                                                            <div class="col-md-9 mb-3">
                                                                <textarea class="form-control" rows="1" placeholder="Kế hoạch thực hiện" name="executionPlan"></textarea>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-check">
                                                                    <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh{{ $target->id }}" name="saveAsForm">
                                                                    <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh{{ $target->id }}">Lưu
                                                                        thành mẫu</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <select class='selectpicker' title="Người đảm nhiệm" multiple data-live-search="true" data-size="5" name="users[]">
                                                                    @foreach ($listUsers as $user)
                                                                        <option value="{{ $user->id }}">
                                                                            {{ $user->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <select class='selectpicker' title="Người liên quan" multiple data-live-search="true" data-size="5" name="relatedUsers[]">
                                                                    @foreach ($listUsers as $user)
                                                                        <option value="{{ $user->id }}">
                                                                            {{ $user->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="repeater">
                                                                <div data-repeater-list="kpiKeys">
                                                                    <div class="row" data-repeater-item>
                                                                        <div class="col-md-8 mb-3">
                                                                            <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true" name="id">
                                                                                <option value="" hidden>Chọn chỉ số
                                                                                    key</option>
                                                                                @foreach ($kpiKeys as $kpiKey)
                                                                                    <option value="{{ $kpiKey->id }}">
                                                                                        {{ $kpiKey->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-3 mb-3">
                                                                            <input type="number" min="0" class="form-control" placeholder="Giá trị" name="quantity" />
                                                                        </div>
                                                                        <div class="col-md-1 mb-3 d-flex align-items-center">
                                                                            <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="d-flex justify-content-start">
                                                                        <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="justify-content-end d-flex">
                                                            <div class="action_btn">
                                                                <input class="btn btn-outline-danger px-4 me-3" type="reset" value="Hủy" />
                                                                <button type="submit"
                                                                    class="btn btn-danger px-4">Giao</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endforeach


                                            <div class="body_noContent-wrapper">
                                                Vui lòng chọn định mức để giao việc
                                                <button type="button" class="btn btn-danger ms-2" id="toggleDinhMuc">tại
                                                    đây</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-3">
                                        <div class="card-body">

                                            <div class='row'>
                                                <div class="col-md-12">
                                                    <div class="position-relative">
                                                        <table id="listDanhSach" class="table table-responsive table-hover table-bordered  style_table-6">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-nowrap" style="width: 2%" class="text-center">STT</th>
                                                                    <th class="text-nowrap" style="width: 26%">Tên nhiệm
                                                                        vụ</th>
                                                                    <th class="text-nowrap" style="width: 20%">Thuộc định
                                                                        mức</th>
                                                                    <th class="text-nowrap" style="width:20%">Người đảm
                                                                        nhiệm</th>
                                                                    <th class="text-nowrap" style="width:20%">Người liên
                                                                        quan</th>
                                                                    <th class="text-nowrap" style="width:8%">Thời hạn</th>
                                                                    {{-- <th>Tình trạng</th> --}}
                                                                    <th style="width: 2%"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($listAssignTasks->data as $assignedTask)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center justify-content-center">
                                                                                {{ $loop->iteration }}

                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="text-nowrap d-inline-block text-truncate" style="max-width:295px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $assignedTask->name }}">
                                                                                {{ $assignedTask->name }}
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="text-nowrap d-inline-block text-truncate" style="max-width:225px;" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $assignedTask->target->name }}">
                                                                                {{ $assignedTask->target->name ?? '' }}
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="text-nowrap d-inline-block text-truncate" style="max-width:180px;" data-bs-toggle="tooltip" data-bs-placement="top" title="@foreach ($assignedTask->users as $user) {{ $user->name }}, @endforeach">
                                                                                @foreach ($assignedTask->users as $user)
                                                                                    {{ $user->name }},
                                                                                @endforeach
                                                                            </div>

                                                                        </td>
                                                                        <td>
                                                                            <div class="text-nowrap d-inline-block text-truncate" style="max-width:180px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Nguoi lien quan">

                                                                            </div>

                                                                        </td>
                                                                        <td>
                                                                            {{ date('d/m/Y', strtotime($assignedTask->deadline)) }}
                                                                        </td>
                                                                        {{-- <td>
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-center">
                                                                            <div class="circle_tracking-wrapper"
                                                                                style="border: 1px solid">
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                                <div class="circle_tracking bg-white">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td> --}}
                                                                        <td>
                                                                            <div class="dotdotdot" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i>
                                                                            </div>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suaVanDeTonDong{{ $assignedTask->id }}">
                                                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/edit.svg') }}" />
                                                                                        Sửa
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#xoaThuocTinh{{ $assignedTask->id }}" data-repeater-delete>
                                                                                        <img style="width:16px;height:16px" src="{{ asset('assets/img/trash.svg') }}" />
                                                                                        Xóa
                                                                                    </a>
                                                                                </li>
                                                                            </ul>

                                                                        </td>
                                                                    </tr>


                                                                    {{-- Xóa thuộc tính --}}
                                                                    <div class="modal fade" id="xoaThuocTinh{{ $assignedTask->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title text-danger" id="exampleModalLabel">Xóa nhiệm vụ
                                                                                    </h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    Bạn có thực sự muốn xoá nhiệm vụ đã chọn
                                                                                    không?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                                                                                    <form method="POST" action="/huy-giao-viec/{{ $assignedTask->id }}">
                                                                                        @csrf
                                                                                        @method('PUT')
                                                                                        <button type="submit" class="btn btn-danger" id="deleteRowElement">Có, tôi
                                                                                            muốn
                                                                                            xóa</button>
                                                                                    </form>

                                                                                </div>
                                                                            </div>
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
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarGiaoViec.sidebarRight')
   
    @foreach ($listAssignTasks->data as $assignedTask)
        <!-- Modal Sửa nvu -->
        <div class="modal fade" id="suaVanDeTonDong{{ $assignedTask->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title w-100" id="exampleModalLabel">Chỉnh sửa
                            nhiệm vụ đã giao</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('targetDetail.update', $assignedTask->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <div class="col-md-7 mb-3">
                                    <input type="text" class="form-control" data-bs-toggle="tooltip" data-bs-placement="top" title="Tên nhiệm vụ" name="name" value="{{ $assignedTask->name }}" />
                                </div>
                                
                                <div class="col-md-5 mb-3">
                                    <input type="text" name="daterange" class="form-control" value="{{ date('d/m/Y', strtotime($assignedTask->startDate)) }} - {{ date('d/m/Y', strtotime($assignedTask->deadline)) }}" />
                                </div>

                                <div class="col-md-12 mb-3">
                                    <input type="text" class="form-control" readonly data-bs-toggle="tooltip" data-bs-placement="top" title="Thuộc định mức" value="{{ $assignedTask->target->name ?? '' }}" />
                                </div>

                                <div class="col-md-9 mb-3">
                                    <textarea class="form-control" rows="1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mô tả nhiệm vụ" name="description" id="" placeholder="Nhập mô tả nhiệm vụ">{{ $assignedTask->description }}</textarea>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <input type="number" data-bs-toggle="tooltip" data-bs-placement="top" title="Manday" name="manday" min="0" step="0.05" oninput="onInput(this)" value="{{ $assignedTask->manday }}" class="form-control" />
                                </div>
                                <div class="col-md-9 mb-3">
                                    <textarea class="form-control" rows="1" data-bs-toggle="tooltip" data-bs-placement="top" title="Kế hoạch thực hiện" name="executionPlan" id="" placeholder="Nhập kê hoạch thực hiẹn">{{ $assignedTask->executionPlan }}</textarea>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-check">
                                        <input role="button" type="checkbox" class="form-check-input fs-5" id="datGiaTriKinhDoanh{{ $assignedTask->id }}" name="saveAsForm">
                                        <label role="button" class="form-check-label user-select-none fs-5" for="datGiaTriKinhDoanh{{ $assignedTask->id }}">Lưu
                                            thành mẫu</label>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Người đảm nhiệm">
                                    <select class='selectpicker' multiple data-size="5" data-live-search="true" data-selected-text-format="count > 1" data-count-selected-text="Có {0} người đảm nhiệm" name="users[]">
                                        @foreach ($listUsers as $user)
                                            @if (isAssigned($assignedTask, $user->id))
                                                <option value="{{ $user->id }}" selected>
                                                    {{ $user->name }}
                                                </option>
                                            @else
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name }}
                                                </option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 mb-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Người liên quan">
                                    <select class='selectpicker' title="Người liên quan" multiple data-live-search="true" data-size="5" data-selected-text-format="count > 1" data-count-selected-text="Có {0} người liên quan" name="relatedUsers[]" id="">
                                        @foreach ($listUsers as $user)
                                            <option value="{{ $user->id }}" selected>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="repeater">
                                    <div data-repeater-list="kpiKeys">
                                        @foreach ($assignedTask->kpiKeys as $kpiKey)
                                            <div class="row" data-repeater-item>
                                                <div class="col-md-6 mb-3">
                                                    <select class='form-select' name="id">
                                                        <option class="text-secondary" value="" hidden>Chọn tiêu chí
                                                        </option>
                                                        @foreach ($kpiKeys as $kpi)
                                                            @if ($kpi->id == $kpiKey->id)
                                                                <option value="{{ $kpi->id }}" selected>
                                                                    {{ $kpi->name }}</option>
                                                            @else
                                                                <option value="{{ $kpi->id }}">{{ $kpi->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-5 mb-3">
                                                    <input type="number" class="form-control" min="0" placeholder="Giá trị" name="quantity" value="{{ $kpiKey->quantity }}" />
                                                </div>
                                                <div class="col-md-1 mb-3 d-flex align-items-center">
                                                    <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-start">
                                            <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                        </div>
                                    </div>
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
    @endforeach

    <!-- Modal Giao việc phát sinh -->
    <div class="modal fade" id="giaoNhiemVuPhatSinh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Giao nhiệm vụ phát sinh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('reportTask.store') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Tên nhiệm vụ">
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Thời hạn" data-bs-original-title="Thời hạn">
                                    <input name="deadline" id="giaoNhiemVuPhatSinhGiaoViec" placeholder="Thời hạn" class="form-control" type="text">
                                    <i class="bi bi-calendar-plus style_pickdate"></i>
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <textarea class="form-control" name="description"rows="1" placeholder="Mô tả/Diễn giải"></textarea>
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="number" name="manDay" class="form-control" min="0" step="0.05" oninput="onInput(this)" placeholder="Manday" id="title" name="manday">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class="selectpicker" data-live-search="true" data-size="5" name="user_id" id="" title="Người đảm nhiệm">
                                    @foreach ($listUsers as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <select class='selectpicker' title="Người liên quan" multiple data-live-search="true" data-size="5">
                                    @foreach ($listUsers as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="repeater">
                                    <div data-repeater-list="kpiKeys">
                                        <div class="row" data-repeater-item>
                                            <div class="col-md-7 mb-3">
                                                <select class='form-select' style="font-size:var(--fz-12)" title="Tiêu chí" data-live-search="true" name="id">
                                                    <option value="" hidden>Chọn chỉ số key</option>
                                                    @foreach ($kpiKeys as $kpiKey)
                                                        <option value="{{ $kpiKey->id }}">
                                                            {{ $kpiKey->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <input type="number" min="0" class="form-control" placeholder="Giá trị" name="quantity" />
                                            </div>
                                            <div class="col-md-1 mb-3 d-flex align-items-center">
                                                <img data-repeater-delete role="button" src="{{ asset('/assets/img/trash.svg') }}" width="20px" height="20px" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-start">
                                            <div role="button" class="fs-4 text-danger" data-repeater-create><i class="bi bi-plus-circle"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Giao</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('footer-script')

    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-daterangepicker/daterangepicker.min.js') }}"></script>
    <!-- Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/repeater.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery-repeater/custom-repeater.js') }}"></script>

    <!-- ChartJS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-stacked100@1.0.0.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/chartjs/chartjs-plugin-datalabels@2.0.0.js') }}"></script>

    <!-- Chart Types -->
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangActive.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_khachHangMoi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_soDonHang.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_doanhSo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_nhanSu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/chart/StackedChart_chiPhi.js') }}"></script>

    <script type="text/javascript">
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

                const val = opt.value || opt.text;
                if (opt.selected) {
                    document.getElementById(val).style.display = 'block';
                } else {
                    document.getElementById(val).style.display = 'none';
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

    <script type="text/javascript">
        function handleTargetTableRowClick() {
            // Change tabs table
            const clickTables = document.querySelectorAll(".clickTable");
            console.log(clickTables.length);
            clickTables.forEach((clickTable) => {
                clickTable.addEventListener("click", () => {
                    const id = clickTable.getAttribute("data-href");
                    console.log(id);
                    const element = document.querySelector(id);
                    if (element) {
                        const items = document.querySelectorAll(".body_content-wrapper");
                        items.forEach((item) => {
                            item.style.display = "none";
                        });
                        element.style.display = "block";
                        const noContent = document.querySelector(".body_noContent-wrapper");
                        noContent.style.display = "none";
                    } else {
                        const items = document.querySelectorAll(".body_content-wrapper");
                        items.forEach((item) => {
                            item.style.display = "none";
                        });
                    }
                });
            });


        }
        // Toggle List Table
        const handleBtn = document.querySelector('#toggleDinhMuc');
        handleBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const dataTable = document.querySelector('.dataTables_wrapper')
            dataTable.setAttribute('id', 'bg-blink');
            setTimeout(() => {
                dataTable.removeAttribute('id', 'bg-blink');
            }, 2000);
        })
        // init when DOM is ready
        // document.addEventListener("DOMContentLoaded", handleTargetTableRowClick);
    </script>

    <script type="text/javascript">
        const targetTable = $('#danhSachDinhMuc').DataTable({
            paging: true,
            ordering: true,
            order: [
                [0, 'desc']
            ],
            pageLength: 5,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm định mức...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-title-wrapper">f>rt<"dataTables_bottom  justify-content-end"p>',
        });
        //get all tr elements
        var trs = targetTable.rows().nodes();
        //add click event to all tr elements
        $(trs).click(function() {
            //get dat-href attribute value on each tr
            const id = $(this).attr('data-href');
            // //get element by id
            const element = document.querySelector(id);
            //check if element exist
            if (element) {
                //get all elements with class body_content-wrapper
                const items = document.querySelectorAll(".body_content-wrapper");
                //hide all elements with class body_content-wrapper
                items.forEach((item) => {
                    item.style.display = "none";
                });
                //show element with id
                element.style.display = "block";
                //get element with class body_noContent-wrapper
                const noContent = document.querySelector(".body_noContent-wrapper");
                //hide element with class body_noContent-wrapper
                noContent.style.display = "none";
            } else {
                //get all elements with class body_content-wrapper
                const items = document.querySelectorAll(".body_content-wrapper");
                //hide all elements with class body_content-wrapper
                items.forEach((item) => {
                    item.style.display = "none";
                });
            }
        });


        $('div.card-title-wrapper').html(`
            <div class="d-flex align-items-center">
                <div class="card-title me-2">Danh sách định mức</div>
                <div class="select">
                    <select class="selectpicker" placeholder="Chọn đơn vị" title="Chọn đơn vị" data-actions-box="true" data-size="5" data-live-search="true" data-live-search-placeholder="Tìm kiếm...">
                            <option value="1">Ban Giám Đốc</option>
                            <option value="2">Ban Kiểm soát</option>
                            <option value="3">Phòng Dịch vụ bán hàng</option>
                            <option value="4">Bộ phận Kho Vận</option>
                            <option value="5">Phòng Kế toán</option>
                            <option value="6">Cung ứng MTT</option>
                            <option value="7">Phòng marketing</option>
                            <option value="8">Phòng quản trị nhãn và đào tạo</option>
                    </select>
                </div>
            </div>
        `);

        $('#listDanhSach').DataTable({
            paging: true,
            ordering: true,
            order: [
                [0, 'desc']
            ],
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có bản ghi nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm nhiệm vụ...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ bản ghi',
            },
            dom: '<"dataTables_top justify-content-between align-items-center"<"card-titles-wrapper">f>rt<"dataTables_bottom"ip>',
        });
        $('div.card-titles-wrapper').html(`
            <div class="card-title">Lịch sử giao việc</div>
        `);
    </script>

    <script>
        function onInput(event) {
            let value = parseFloat(event.value);
            if (Number.isNaN(value)) {
                document.getElementById('input-1').value = "0.00";
            } else {
                document.getElementById('input-1').value = value.toFixed(2);
            }
        }
    </script>

    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                locale: {
                    format: 'DD/MM/YYYY'
                },
                language: 'ru'
            });
            $('input[name="daterange"]').val('');
            $('input[name="daterange"]').attr("placeholder", "Chọn thời hạn");
        });
    </script>

    <script>
        $(document).ready(function() {
            $.datetimepicker.setLocale('vi');
            $('#giaoNhiemVuPhatSinhGiaoViec').datetimepicker({
                format: 'd/m/Y',
                timepicker: false,
            });
        });
    </script>

@endsection
