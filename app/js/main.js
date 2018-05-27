jQuery(document).ready(function($) {
   $(".nav-link").click(function(e) {
        e.preventDefault();
        var aid = $(this).attr("href");
        $('body, html').animate({scrollTop: $(aid).offset().top});
    });
});