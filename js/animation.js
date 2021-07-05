// animation

$(function () {
    $(window).scroll(function () {
    $('section *').each(function () {
    var elemPos = $(this).offset().top; 
    var scroll = $(window).scrollTop(); 
    var windowHeight = $(window).height();
    if (scroll > elemPos - windowHeight) {
    
    $(this).addClass("effect-scroll");
    }
    });
    });
    jQuery(window).scroll();
});