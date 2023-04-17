/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro


** Custom DateTime Picker JS

----------------------------------------------*/

$(function () {
    'use strict';
    // initialize input widgets first
    // $('#date_time-hopgiaoban .time').timepicker({
    //     showDuration: true,
    //     timeFormat: 'g:ia',
    // });

    // $('#date_time-hopgiaoban .date').datepicker({
    //     format: 'd/m/yyyy',
    //     autoclose: true,
    //     showDuration: true,
    // });

    // // initialize datepair
    // var dateTimeHopgiaobanEl = document.getElementById('date_time-hopgiaoban');
    // var datepair = new Datepair(dateTimeHopgiaobanEl);
    $(document).ready(function () {
        $.datetimepicker.setLocale('vi');
        $('#datetimepicker').datetimepicker({
            format: 'd/m/Y h:m',
            // timepicker: false,
        });
    });
    $(document).ready(function () {
        $.datetimepicker.setLocale('vi');
        $('#datetimepicker2').datetimepicker({
            format: 'd/m/Y h:m',
            // timepicker: false,
        });
    });
    $(document).ready(function () {
        $.datetimepicker.setLocale('vi');
        $('#vanDeTonDong').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
    });
    $(document).ready(function () {
        $.datetimepicker.setLocale('vi');
        $('#timeSuaVanDe').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
    });
    $(document).ready(function () {
        $.datetimepicker.setLocale('vi');
        $('#createUser').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
    });
    $(document).ready(function () {
        $.datetimepicker.setLocale('vi');
        $('#ngayThuViec').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
    });
    $(document).ready(function () {
        $.datetimepicker.setLocale('vi');
        $('#ngayChinhThuc').datetimepicker({
            format: 'd/m/Y',
            timepicker: false,
        });
    });
});
