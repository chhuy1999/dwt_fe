<div class="mainSection_card">
    <div class="mainSection_content row">
        <div class="col-md-7"><div class="text-nowrap">Đơn vị: </div></div>
        <div class="col-md-5"><strong  class="text-nowrap">{{ session('user') ['departement']['name'] ?? '' }}</strong></div>
    </div>
    <div class="mainSection_content row">
        <div class="col-md-7"><div class="text-nowrap">Trưởng đơn vị: </div></div>
        <div class="col-md-5"><strong class="text-nowrap">{{Session::get('user')['name']}}</strong></div>
    </div>
</div>

{{-- Date Time Picker --}}
<div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
    <input id="thismonth" class="form-control" type="text" />
</div>