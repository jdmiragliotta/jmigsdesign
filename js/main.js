$(document).ready(function(){
  $('.slider').slider({
    full_width: true,
    height: 500,
    indicators: false
  });

  $(".nav-link").mouseenter(function(){
    $(this).children().filter(':not(:animated)').animate({bottom: "5px"});
    });
  $(".nav-link").mouseleave(function(){
    $(this).children().animate({bottom: "0px"});
    });


});