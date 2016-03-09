$(document).ready(function(){

// Hide Action
  $("#short-welcome").hide();
  $("#middle-welcome").hide();
  $("#coding-sub").hide();
  $("#nephews-sub").hide();
  $("#running-sub").hide();
  $("#pb-sub").hide();

 //On Click Event
  $("#mid-wel-btn").on("click", function(){
    if($("#long-welcome").is(":visible")){
       $("#long-welcome").fadeOut(500, function(){
         $("#middle-welcome").fadeIn(2000);
       });
    } else {
      $("#short-welcome").fadeOut(500, function(){
        $("#middle-welcome").fadeIn(2000);
      });
    };
  });

  $("#short-wel-btn").on("click", function(){
      if($("#long-welcome").is(":visible")){
         $("#long-welcome").fadeOut(500, function(){
           $("#short-welcome").fadeIn(2000);
         });
      } else {
        $("#middle-welcome").fadeOut(500, function(){
          $("#short-welcome").fadeIn(2000);
        });
      };
    });

  $(".read-more").on("click", function(){
      if($("#short-welcome").is(":visible")){
         $("#short-welcome").fadeOut(500, function(){
           $("#long-welcome").fadeIn(2000);
         });
      } else {
        $("#middle-welcome").fadeOut(500, function(){
          $("#long-welcome").fadeIn(2000);
        });
      };
    });

  $("#coding").on("mouseover", function(){
    $("#coding-sub").show().addClass("animated fadeInLeft");
  });

  $("#nephews").on("mouseover", function(){
    $("#nephews-sub").show().addClass("animated fadeInLeft");
  });

   $("#running").on("mouseover", function(){
    $("#running-sub").show().addClass("animated fadeInLeft");
  });

     $("#pb").on("mouseover", function(){
    $("#pb-sub").show().addClass("animated fadeInLeft");
  });

}); //End document.ready
