$(document).ready(function () {
    $(".left-toggle-aside").click(function () {
        $(".aside-left").slideToggle("fast");
        $(".left-menu-icon").toggleClass(
            "bi-box-arrow-in-right bi-box-arrow-in-left"
        );
    });

    $(".right-toggle-aside").click(function () {
        $(".aside-right").slideToggle("fast");
        $(".right-menu-icon").toggleClass(
            "bi-box-arrow-in-left bi-box-arrow-in-right"
        );
    });

    $(".section_mobile-list").click(function () {
        $(".header_menu").slideToggle("fast");
        $(".center-menu-icon").toggleClass("bi-list bi-x");
    });

    if ($(window).width() < 1023) {
        $(".menu_btn-sub").click(function () {
            $(this).next("#header_submenu").slideToggle();
        });

        $(".more_btn").click(function () {
            $(this).next(".header_more").slideToggle();
        });
        $(document).click(function (event) {
            // Nếu màn hình có chiều rộng nhỏ hơn 1023px

            

            // Nếu người dùng click ra ngoài aside-left và left-toggle-aside
            if (
                !$(event.target).closest(".aside-left, .left-toggle-aside")
                    .length
            ) {
                $(".aside-left").slideUp("fast");
                $(".left-menu-icon")
                    .removeClass("bi-box-arrow-in-left")
                    .addClass("bi-box-arrow-in-right");
            }

            // Nếu người dùng click ra ngoài aside-right và right-toggle-aside
            if (
                !$(event.target).closest(".aside-right, .right-toggle-aside")
                    .length
            ) {
                $(".aside-right").slideUp("fast");
                $(".right-menu-icon")
                    .removeClass("bi-box-arrow-in-right")
                    .addClass("bi-box-arrow-in-left");
            }
        });
    }
});
