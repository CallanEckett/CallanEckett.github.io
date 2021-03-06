//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > ($(window).height()) * 0.1) {
        $("nav.fixed-top").addClass("top-nav-collapse");
    } else {
        $("nav.fixed-top").removeClass("top-nav-collapse");
    }
 });   

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});