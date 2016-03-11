$(document).ready(function(){

// Hide Action
  $(".short").hide();
  $("#more").hide();
  $(".css3-site").hide();
  $(".css3-line").hide();
  $(".fitness-site").hide();
  $(".fitness-line").hide();
  $(".uxui-site").hide();
  $(".uxui-line").hide();
  $(".pb-site").hide();
  $(".pb-line").hide();

 //On Click Event
  $("#mid-wel-btn").on("click", function(){
    $("#more").show();
    $("#mid-wel-btn").hide();
    $(".long").fadeOut(1, function(){
        $(".short").show().addClass("animated fadeInLeft");
    });
  });

   $("#more").on("click", function(){
    $("#mid-wel-btn").show();
    $("#more").hide();

    $(".short").fadeOut(1, function(){
        $(".long").show().addClass("animated fadeInLeft");
    });
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

  $("#css3").on("mouseover", function(){
    $(".css3-site").show().addClass("animated fadeInRight");
    $(".css3-line").show().addClass("animated fadeInLeft");
  });

  $("#uxui").on("mouseover", function(){
    $(".uxui-site").show().addClass("animated fadeInRight");
    $(".uxui-line").show().addClass("animated fadeInLeft");
  });

  $("#fitness").on("mouseover", function(){
    $(".fitness-site").show().addClass("animated fadeInRight");
    $(".fitness-line").show().addClass("animated fadeInLeft");
  });

  $("#pb").on("mouseover", function(){
    $(".pb-site").show().addClass("animated fadeInRight");
    $(".pb-line").show().addClass("animated fadeInLeft");
  });

}); //End document.ready
