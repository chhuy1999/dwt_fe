<div class="sidebarBody_cardmini">
    <span class="sidebarBody_card-title">
        {!! isset($value->icon) ? '<i class="bi ' . $value->icon . '"></i>' : '' !!}
        {{ $value->title ?? '' }}
    </span>
    <strong><span class="text-success">{{ $value->number_before ?? '' }}</span>{{ !empty($value->number_after) ? '/'. $value->number_after : '' }}
    </strong>
</div>
