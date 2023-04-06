{{-- {{ dd($data); }} --}}

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
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#themCoCauToChuc">Thêm cơ
                            cấu</button>
                    </div>

                    <div class="main_search form-group has-search mb-3 mt-3">
                        <span class="bi bi-search form-control-feedback fs-5"></span>
                        <input type="text" id="search_tree" class="form-control" placeholder="Tìm kiếm">
                    </div>

                    <ul class="tree_list">
                        <li class="section ps-0 tree_list-item">
                            <input type="checkbox" checked id="all">
                            <label class="d-flex" for="all"></label>
                            <span class="clicktree d-block" style="padding-left: 20px" data-href="#body_content-1"> Công ty Cổ phần Mastertran</span>
                            <ul class="tree_sublist">
                                <li class="section tree_sublist-item">
                                    <input type="checkbox" id="groupA">
                                    <label class="d-flex" for="groupA"></label>
                                    <span class="clicktree d-block" data-href="#body_content-2">Khối Kinh doanh</span>
                                    {{-- <ul class="tree_sublist-more">
                                        <li class="tree_sublist-more-item">
                                            <input type="checkbox" id="groupOTC">
                                            <label class="d-flex" for="groupOTC"></label>
                                            <span class="clicktree d-block" data-href="#">Kinh doanh OTC</span>
                                            <ul class="tree_sublist-more">
                                                <li class="tree_sublist-more-item">
                                                    <input type="checkbox" id="groupv1OTC">
                                                    <label class="d-flex" for="groupv1OTC"></label>
                                                    <span class="clicktree d-block" data-href="#">Vùng 1: Hà Nội và Tây Bắc</span>
                                                    <ul class="tree_sublist-more">
                                                        <li class="tree_sublist-more-item">Đội O1A</li>
                                                        <li class="tree_sublist-more-item">Đội O1B</li>
                                                        <li class="tree_sublist-more-item">Đội O2B</li>
                                                        <li class="tree_sublist-more-item">Đội O2B</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="tree_sublist-more-item">Kinh doanh ETC</li>
                                        <li class="tree_sublist-more-item">Kinh doanh MT</li>
                                        <li class="tree_sublist-more-item">Kinh doanh Online</li>
                                    </ul> --}}
                                </li>
                                <li class="section tree_sublist-item">
                                    <input type="checkbox" id="groupB">
                                    <label class="d-flex" for="groupB"></label>
                                    <span class="clicktree d-block" data-href="#body_content-3">Khối Marketing</span>
                                    <ul class="tree_sublist-more">
                                        <li class="tree_sublist-more-item">Quản trị nhãn & Đào tạo</li>
                                        <li class="tree_sublist-more-item">Digital Marketing</li>
                                        <li class="tree_sublist-more-item">Trade Marketing</li>
                                        <li class="tree_sublist-more-item">Truyền thông nội bộ</li>
                                    </ul>
                                </li>
                                
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Kế toán</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Tài chính</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Hành chính nhân sự</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Cung ứng</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Kho & Giao vận</span>
                                </li>
                                <li class="tree_sublist-item">
                                    <span class="clicktree d-block">Dịch vụ bán hàng</span>
                                </li>

                                {{-- @foreach($data->data as $treeValue) --}}
                                {{-- <li class="section tree_sublist-item"> --}}
                                    {{-- <input type="checkbox" id="group{{ $treeValue->id }}"> --}}
                                    {{-- <label class="d-flex" for="group{{ $treeValue->id }}"></label> --}}
                                    {{-- <span class="clicktree d-block" data-href="">Khối văn phòng</span> --}}
                                    {{-- <span class="clicktree d-block" data-href="#body_content-3">{{ $treeValue->name }}</span> --}}
                                    {{-- <ul class="tree_sublist-more"> --}}
                                        {{-- @foreach($treeValue as $treeSub)
                                        <li class="tree_sublist-more-item">{{ $treeSub->name }}</li>
                                        @endforeach --}}
                                        {{-- <li class="tree_sublist-more-item">Quản trị nhãn & Đào tạo</li> --}}
                                        {{-- <li class="tree_sublist-more-item">Digital Marketing</li>
                                        <li class="tree_sublist-more-item">Trade Marketing</li>
                                        <li class="tree_sublist-more-item">Truyền thông nội bộ</li> --}}
                                    {{-- </ul> --}}
                                {{-- </li> --}}
                                {{-- @endforeach --}}
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        <span id="btn-left"><i class="bi bi-arrow-bar-left"></i></span>
    </div>
</div>