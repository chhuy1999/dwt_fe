<div class="sidebarBody_heading-wrapper">
    <h6 class="sidebarBody_heading mt-2">
        {{-- Icon --}}
        {!! isset($icon) ? '<i class="bi ' . $icon . '"></i>' : '' !!}
        {{-- Heading --}}
        {{ isset($heading) ? $heading : '' }}
        {{-- Heading Mini --}}
        {!! isset($heading_mini)
            ? '<span class="sidebarBody_heading-mini text-black">(' . $heading_mini . ')</span>'
            : '' !!}
    </h6>

</div>
<div class="table-responsive">
    <table class="table table-borderless text-left" style="margin: 0">
        <thead>
            <tr>
                <th style="padding: 0; text-align: left; {{ $space ?? '' }}">
                    {{ isset($title_today) ? $title_today . ':' : '' }}
                    <span class="sidebarBody_card-body-subtitle">
                        {!! isset($today_completed) ? '<span class="sidebarBody_card-body-subtitle-before">' . $today_completed . '</span>' : '' !!}
                        {!! isset($separate) ? '<span class="sidebarBody_card-body-subtitle-separate">'.$separate.'</span>' : '' !!}
                        {!! isset($today_total) ? '<span class="sidebarBody_card-body-subtitle-after ' . ($color_after ?? '') . '">' . $today_total . '</span>' : '' !!}
                    </span>
                </th>
                <th style="padding: 0; text-align: left; {{ $space ?? '' }}">
                    {{ isset($title_week) ? $title_week . ':' : '' }}
                    <span class="sidebarBody_card-body-subtitle">
                        {!! isset($week_completed) ? '<span class="sidebarBody_card-body-subtitle-before">' . $week_completed . '</span>' : '' !!}
                        {!! isset($separate) ? '<span class="sidebarBody_card-body-subtitle-separate">'.$separate.'</span>' : '' !!}
                        {!! isset($week_total) ? '<span class="sidebarBody_card-body-subtitle-after ' . ($color_after ?? '') . '">' . $week_total . '</span>' : '' !!}
                    </span>
                </th>
                <th style="padding: 0; text-align: left; {{ $space ?? '' }}">
                    {{ isset($title_month) ? $title_month . ':' : '' }}
                    <span class="sidebarBody_card-body-subtitle">
                        {!! isset($month_completed) ? '<span class="sidebarBody_card-body-subtitle-before">' . $month_completed . '</span>' : '' !!}
                        {!! isset($separate) ? '<span class="sidebarBody_card-body-subtitle-separate">'.$separate.'</span>' : '' !!}
                        {!! isset($month_total) ? '<span class="sidebarBody_card-body-subtitle-after ' . ($color_after ?? '') . '">' . $month_total . '</span>' : '' !!}
                    </span>
                </th>
            </tr>
        </thead>
    </table>
</div>