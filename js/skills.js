$(document).ready(function(){

// Hide Action
  $("#design-p").hide();
  $(".design-skill").hide();
  $("#dev-p").hide();
  $(".dev-skill").hide();
  $("#full-p").hide();
  $(".full").hide();


  // Roll Over Events
  $("#design-skill").on("mouseover", function(){
    $("#design-p").show().addClass("animated fadeInLeft");
  });

   $("#development-skill").on("mouseover", function(){
    $("#dev-p").show().addClass("animated fadeInLeft");
  });

   $("#full-skill").on("mouseover", function(){
    $("#full-p").show().addClass("animated fadeInLeft");
  });

   //On Click Event

  $("#design-skill").on("click", function(){
    $(".dev-skill").hide();
    $(".full").hide();
    $(".design-skill").show().addClass("animated fadeInLeft");
  });

   $("#development-skill").on("click", function(){
    $(".design-skill").hide();
    $(".full").hide();
    $(".dev-skill").show().addClass("animated fadeInLeft");
  });

  $("#full-skill").on("click", function(){
    $(".design-skill").show().addClass("animated fadeInLeft");
    $(".dev-skill").show().addClass("animated fadeInLeft");
    $(".full").show().addClass("animated fadeInLeft");
  });




}); //End document.ready
