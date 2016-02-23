/*SLIDESHOW*/
$(document).ready(function() {
    $("#slider").owlCarousel({
        loop:true,  
        lazyLoad:true,
        autoplay:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed:450,
        items:1
    });
     
});
// SMOOTH SCROLL
$(window).on('load', function() {
    $(this).impulse();
});
// TOOLTIP
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
//TO TOP
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function() {
    $("html, body").animate({scrollTop: 0}, 1000);
});
// IMG HOVER
$('.hover').contenthover({
    overlay_background:'#000',
    overlay_opacity:0.5
});
$(document).ready(function(){
    $('#gallery').simplegallery({
        galltime : 400,
        gallcontent: '.content',
        gallthumbnail: '.thumbnail',
        gallthumb: '.thumb'
    });
});
(function($){
    $(document).ready(function(){
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            event.preventDefault(); 
            event.stopPropagation(); 
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
    });
})(jQuery);