<ul class="tree_sublist-more">
    @foreach($children as $child)
        <li class="section tree_sublist-more-item">
            <input type="checkbox" id="group{{ $child->id }}">
            <label class="d-flex" for="group{{ $child->id }}"></label>
            <span class="clicktree d-block" data-href="#body_content-3">{{ $child->name }}</span>
            @if(isset($child->children) && count($child->children) > 0)
                @include('recursive_list', ['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>