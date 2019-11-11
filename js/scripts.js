$(window).on("load", function () {

    $(".nav-link").click(function() {  
        if (!$(this).hasClass("dropdown-toggle")) {
            $(".navbar-collapse").collapse('hide');
        }
    });
    
    $(".dropdown-item").click(function() {  
        $(".navbar-collapse").collapse('hide');
    });
    
    $('[data-toggle="tooltip"]').tooltip();
    
    var galleryCarousel = $("#gallery-carousel");
    
    $(galleryCarousel).owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        lazyLoad: false,
        responsive:{
            0:{
                items: 1
            },
            576:{
                items: 2
            },
            768:{
                items: 2
            },
            992:{
                items: 2
            },
            1200:{
                items: 2
            }
        }
    });
    
    $(".next").click(function(){
        galleryCarousel.trigger('next.owl.carousel');
    });
    $(".prev").click(function(){
        galleryCarousel.trigger('prev.owl.carousel');
    });
    
    $('.results-list-group').each(function(){
        $(this).css('max-height', (($('.results-list-group-item').height()) * 3) + 20);
    });
    
    AOS.init();
    
});