$(document).ready(function () {
    $(".nav-link").click(function() {  
        if (!$(this).hasClass("dropdown-toggle")) {
            $(".navbar-collapse").collapse('hide');
        }
    });
    
    $(".dropdown-item").click(function() {  
        $(".navbar-collapse").collapse('hide');
    });
});