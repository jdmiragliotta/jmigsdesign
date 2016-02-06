$(document).ready(function(){
  $(".slider").slider({
    full_width: true,
    height: 500,
    indicators: false
  });

  // ADDS ANIMATION TO NAVBAR LINKS
  $(".nav-link").mouseenter(function(){
    $(this).children().filter(":not(:animated)").animate({bottom: "5px"});
    });
  $(".nav-link").mouseleave(function(){
    $(this).children().animate({bottom: "0px"});
    });

  // CREATES STICKY NAVBAR
  $(window).scroll(function() {
    if( $(this).scrollTop() > $("header").height()-105) {
      $("nav").addClass("scroll");
    } else {
      $("nav").removeClass("scroll");
    }
    if( $(this).scrollTop() > $("header").height()-157) {
      $("nav").addClass("scroll-color");
    } else {
      $("nav").removeClass("scroll-color");
    }
  });

  // MINIMIZES TOP BAR
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 362 ) {
      $(".logo-container").addClass("mini-header-scroll");
    }
    if (scroll <= 362 ) {
      $(".logo-container").removeClass("mini-header-scroll");
   }

});
  

  $('.scrollspy').scrollSpy();





























});


