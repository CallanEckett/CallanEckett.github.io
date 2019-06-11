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
    
    var servicesCarousel = $("#services-carousel");
    
    $(servicesCarousel).owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
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
                items: 3
            },
            1200:{
                items: 4
            }
        }
    });
    
    $(".next").click(function(){
        servicesCarousel.trigger('next.owl.carousel');
    });
    $(".prev").click(function(){
        servicesCarousel.trigger('prev.owl.carousel');
    });
    
    AOS.init();
    
    var filterizd = $('.filtr-container').filterizr({
        filter: 'all',
        layout: 'sameWidth'
    });
    
    $(".filterListItem").on("click", function(){
        $(".filterListItem").removeClass("active");
        $(this).addClass("active");
    });
});