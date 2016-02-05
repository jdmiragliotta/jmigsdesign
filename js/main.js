$(document).ready(function(){
  $('.slider').slider({
    full_width: true,
    height: 500,
    indicators: false
  });


  // ADDS ANIMATION TO NAVBAR LINKS
  $(".nav-link").mouseenter(function(){
    $(this).children().filter(':not(:animated)').animate({bottom: "5px"});
    });
  $(".nav-link").mouseleave(function(){
    $(this).children().animate({bottom: "0px"});
    });

  // CREATES STICKY NAVBAR
  $(window).scroll(function() {
    if( $(this).scrollTop() > $("header").height()-70) {
      $("nav").addClass("scroll");
    } else {
      $("nav").removeClass("scroll");
    }
  });

  // NAVBAR COLOR CHANGE
  $(function() {
    $(window).width();
    var width = $(window).width();
    var scroll_start = 0;

    if(width <= 480){
      $(window).scroll(function() { 
        scroll_start = $(this).scrollTop();
        if(scroll_start = $("header").height()-70)  {
          $('nav').css('background-color', 'rgba(0,53,95,1)');
        }else {
          $('nav').css('background-color', 'transparent');
        }
      });
    }
  })





























});


