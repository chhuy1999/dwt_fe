/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro


** Custom DataTable JS

----------------------------------------------*/
(function ($) {
    'use strict';
    $(document).ready(function () {
        $('#khoLuuTruHopGiaoBan').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ biên bản họp',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm biên bản họp...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"dataTables_top"<"select_options">f>rt<"dataTables_bottom"ip>',
        });
        $('div.select_options').html(`
        <select class="form-select">
            <option selected hidden>Chọn cuộc họp...</option>
            <optgroup label="Cuộc họp của tôi">
                <option value="Giao ban">Giao ban</option>
                <option value="Tổng kết tuần">Tổng kết tuần</option>
                <option value="Tổng kết tháng">Tổng kết tháng</option>
                <option value="Khác">Khác</option>
            </optgroup>
            <optgroup label="Cuộc họp tôi tham dự">
                <option value="Giao ban">Giao ban</option>
                <option value="Tổng kết tuần">Tổng kết tuần</option>
                <option value="Tổng kết tháng">Tổng kết tháng</option>
                <option value="Khác">Khác</option>
            </optgroup>
        </select>`);
        $('#danhSachDinhMuc').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ biên bản họp',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm biên bản họp...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"dataTables_top justify-content-end"f>rt<"dataTables_bottom  justify-content-end"p>',
        });
        
        $('#listDanhSach').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ biên bản họp',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm biên bản họp...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"dataTables_top justify-content-end"f>rt<"dataTables_bottom"ip>',
        });
        $('#coCauToChuc').DataTable({
            paging: true,
            ordering: true,
            language: {
                info: 'Hiển thị _START_ đến _END_ trên _TOTAL_ bản ghi',
                infoEmpty: 'Hiện tại chưa có biên bản họp nào',
                search: 'Tìm kiếm biên bản',
                paginate: {
                    previous: '<i class="bi bi-caret-left-fill"></i>',
                    next: '<i class="bi bi-caret-right-fill"></i>',
                },
                search: '',
                searchPlaceholder: 'Tìm kiếm...',
                zeroRecords: 'Không tìm thấy kết quả',
            },
            oLanguage: {
                sLengthMenu: 'Hiển thị _MENU_ biên bản họp',
            },
            dom: '<"dataTables_top"<"demodemo">f>rt<"dataTables_bottom"ip>',
        });
        $('div.demodemo').html(`
        <div class="info_wrapper">
    <div class="info_content">
        <div class="info_label">Mã đơn vị:&nbsp;</div>
        <div class="info_content">OTC</div>
    </div>
    <div class="info_content">
        <div class="info_label">Cấp tổ chức:&nbsp;</div>
        <div class="info_content">Bộ phận trực thuộc</div>
    </div>
    <div class="info_content">
        <div class="info_label">Tên viết tắt:&nbsp;</div>
        <div class="info_content">OTC</div>
    </div>
    
</div>
<div class="info_content">
        <div class="info_label">Chức năng, nhiệm vụ:&nbsp;</div>
        <div class="info_content"> ....</div>
    </div>`);
    });
})(jQuery);
