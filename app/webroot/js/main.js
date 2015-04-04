$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset().top - $(".navbar-default").height();

    set_navbar_alpha(offset);

    $(document).scroll(function () {
        set_navbar_alpha(offset);
    });

    function set_navbar_alpha(offset) {
        scroll_start = $(window).scrollTop();
        $('.navbar-default').css('background-color', 'rgba(255,62,23,' + Math.min(Math.pow(scroll_start / offset, 3), 1) + ')');
    }

});

