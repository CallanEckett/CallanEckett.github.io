$(document).ready(function() {
     
    $(".members-carousel").owlCarousel({
     
        autoPlay: 3000,
     
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        mouseDrag: false,
        pagination: true,
        stopOnHover: true,

    });
     
});

$(document).ready(function() {
     
    $(".testimonials-carousel").owlCarousel({
        autoPlay : 10000,
        stopOnHover : true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeight : true,
        transitionStyle:"backSlide"
    });
     
});

$(document).ready(function() {
     
    $(".gallery-carousel").owlCarousel({
        autoPlay : 5000,
        stopOnHover : true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeight : true,
        transitionStyle:"goDown"
    });
     
});