// scroll

// トップスクロール
$(function () {
    var toTOP = $('#topscroll');
    toTOP.click(function () {
    $('body,html').animate({
    scrollTop: 0
    }, 400);
    return false;
    });
});

// スムーススクロール
$(function(){
    $('a[href^="#"]').click(function() {
        
    var headerHeight = 50;
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight;
    
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
    });
});

