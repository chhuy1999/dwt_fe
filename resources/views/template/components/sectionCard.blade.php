<div class="mainSection_card">
    <div class="row">
        <div class="col-md-4">
            <div class="text-nowrap">Đơn vị: </div>
        </div>
        <div class="col-md-8"><strong class="text-nowrap">{{ session('user')['departement']['name'] ?? '' }}</strong>
        </div>
        <div class="col-md-4">
            <div class="text-nowrap">Trưởng đơn vị: </div>
        </div>
        <div class="col-md-8"><strong class="text-nowrap">{{ Session::get('user')['name'] }} -
                {{ Session::get('user')['code'] ?? '' }}</strong></div>
    </div>

</div>

{{-- Date Time Picker --}}
<div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
    <input id="thismonth" class="form-control" type="text" />
</div>
