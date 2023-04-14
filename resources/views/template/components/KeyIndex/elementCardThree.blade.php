<div class="sidebarBody_heading-wrapper">
    <h6 class="sidebarBody_heading mt-1">
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
    <table class="table table-borderless" style="margin: 0">
        <thead>
            <tr>
                <th style="padding: 0; text-align: left; {{ $space ?? '' }}">
                    {{ isset($title_today) ? $title_today . ':' : '' }}
                    {!! isset($today_completed) ? '<span class="'. ($color ?? 'text-danger') .'">' . $today_completed . '</span>' : '' !!}
                </th>
                <th style="padding: 0; text-align: left; {{ $space ?? '' }}">
                    {{ isset($title_week) ? $title_week . ':' : '' }}
                    {!! isset($week_completed) ? '<span class="'. ($color ?? 'text-warning') .'">' . $week_completed . '</span>' : '' !!}
                </th>
                <th style="padding: 0; text-align: left; {{ $space ?? '' }}">
                    {{ isset($title_month) ? $title_month . ':' : '' }}
                    {!! isset($month_completed) ? '<span class="'. ($color ?? 'text-success') .'">' . $month_completed . '</span>' : '' !!}
                </th>
            </tr>
        </thead>
    </table>
</div>