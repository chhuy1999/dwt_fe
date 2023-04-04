<div class="mainSection_card">
    <div class="row">
        <div class="col-md-3">
            <div class="text-nowrap">Đơn vị: </div>
        </div>
        <div class="col-md-9"><strong class="text-nowrap">{{Session::get('department_name') ?? ''}}</strong>
        </div>
        <div class="col-md-3">
            <div class="text-nowrap">Trưởng đơn vị: </div>
        </div>
        <div class="col-md-9"><strong class="text-nowrap">{{ Session::get('user')['name'] }} -
                {{ Session::get('user')['code'] ?? '' }}</strong></div>
    </div>
</div>

{{-- Date Time Picker --}}
<div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
    <input id="thismonth" class="form-control" type="text" />
</div>