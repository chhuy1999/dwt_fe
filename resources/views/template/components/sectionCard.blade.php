<div class="mainSection_card">
    <div class="row">
        <div class="col-md-3">
            <div class="text-nowrap">Đơn vị: </div>
        </div>
<<<<<<< HEAD
        <div class="col-md-9"><strong class="text-nowrap">{{ session('user')['departement']['name'] ?? 'Chưa có đơn vị' }}</strong>
=======
        <div class="col-md-8"><strong class="text-nowrap">{{Session::get('department_name')}}</strong>
>>>>>>> 23d5c8b9ad47f9a3722600519de4b9d2a31fd337
        </div>
        <div class="col-md-3">
            <div class="text-nowrap">Trưởng đơn vị: </div>
        </div>
        <div class="col-md-9"><strong class="text-nowrap">{{ Session::get('user')['name'] }} -
                {{ Session::get('user')['code'] ?? 'Chưa có mã' }}</strong></div>
    </div>

</div>

{{-- Date Time Picker --}}
<div id="mainSection_width" class="mainSection_thismonth d-flex align-items-center overflow-hidden">
    <input id="thismonth" class="form-control" type="text" />
</div>
