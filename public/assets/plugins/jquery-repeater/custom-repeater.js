/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro


** Custom Repeater JS

----------------------------------------------*/

$(function () {
    'use strict';

    $(document).ready(function () {
        $('.repeater-hopPhongBan').repeater({
            show: function () {
                $(this).slideDown();
            },
            // hide: function (e) {
            //     confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            // },
            hide: function (e) {
                $('#xoaThuocTinh').modal('show');
                $('#deleteRowElement').on('click', function() {
                    $(this).fadeOut(500, function() {
                        $(this).remove();
                    });
                    $('#xoaThuocTinh').modal('hide');
                });
            },
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.repeater').repeater({
            show: function () {
                $(this).slideDown();
            },
            // hide: function (e) {
            //     confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            // },
            hide: function (e) {
                $('#xoaThuocTinh').modal('show');
                $('#deleteRowElement').on('click', function() {
                    $(this).fadeOut(500, function() {
                        $(this).remove();
                    });
                    $('#xoaThuocTinh').modal('hide');
                });
            },
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
});
