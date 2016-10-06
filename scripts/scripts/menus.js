$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 300) {
            $(".navbar").css('background-color', 'rgba(51, 44, 44, 1)');
        } else {
            $(".navbar").css('background-color', 'rgba(51, 44, 44, .9)');
        }
    });
});