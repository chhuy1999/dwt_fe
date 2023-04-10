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
                        @foreach($data->data as $parent)
                            @if($parent->parent == null)
                                <li class="section tree_list-item">
                                    <input type="checkbox" id="group{{ $parent->id }}">
                                    <label class="d-flex" for="group{{ $parent->id }}"></label>
                                    <span class="clicktree d-block" data-href="#body_content-3">{{ $parent->name }}</span>
                                    <ul class="tree_list-more">
                                        @foreach($data->data as $child1)
                                            @if($child1->parent != null && $child1->parent->id == $parent->id)
                                                <li class="section tree_list-more-item">
                                                    <input type="checkbox" id="group{{ $child1->id }}">
                                                    <label class="d-flex" for="group{{ $child1->id }}"></label>
                                                    <span class="clicktree d-block" data-href="#body_content-3">{{ $child1->name }}</span>
                                                    <ul class="tree_list-more">
                                                        @foreach($data->data as $child2)
                                                            @if($child2->parent != null && $child2->parent->id == $child1->id)
                                                                <li class="section tree_sublist-more-item">
                                                                    {{-- <input type="checkbox" id="group{{ $child2->id }}">
                                                                    <label class="d-flex" for="group{{ $child2->id }}"></label> --}}
                                                                    <span class="clicktree d-block" data-href="#body_content-3">{{ $child2->name }}</span>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
        <span id="btn-left"><i class="bi bi-arrow-bar-left"></i></span>
    </div>
</div>