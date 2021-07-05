// header
$(function () {
  $(".js-btn").click(function () {
      $(this).toggleClass('open');
      $('.l-header__nav').toggleClass('open');
      $('.l-header__inner').toggleClass('open');
      $('html').toggleClass('open');
      $('html, .l-header__nav').on('touchmove.noScroll', function(e) {
        e.preventDefault();
    });
  });
  });

  $(function () {
    $(".js-btn.open").click(function () {
      $('html').removeClass('open');
      $('html, .l-header__nav').off('.noScroll');
      });
   
    });






// 横幅指定
$(window).on('load resize', function(){
    var minW = $(window).width();
    var maxW = 767;
    if (minW <= maxW) {
      //767px以下の時の処理
    } else {

      $('.l-header__nav').removeClass('open');
      $('.l-header__inner').removeClass('open');
      $('html').removeClass('open');
      $('.js-btn').removeClass('open');

    }
  });
