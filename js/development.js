$(document).ready(function(){


  $(".db-tech").hide();
  $("#db-tech").on("click", function(){
    $(".db-tech").show().addClass("animated fadeInLeft");
  });

  $(".rpsls-tech").hide();
  $("#rpsls-tech").on("click", function(){
    $(".rpsls-tech").show().addClass("animated fadeInRight");
  });

  $(".rpsls-tech").hide();
  $("#rpsls-tech-mobile").on("click", function(){
    $(".rpsls-tech").show().addClass("animated fadeInRight");
  });

  $(".staythenight-tech").hide();
  $("#staythenight-tech").on("click", function(){
    $(".staythenight-tech").show().addClass("animated fadeInLeft");
  });

   $(".codo-tech").hide();
  $("#codo-tech").on("click", function(){
    $(".codo-tech").show().addClass("animated fadeInRight");
  });

  $(".codo-tech").hide();
    $("#codo-tech-mobile").on("click", function(){
      $(".codo-tech").show().addClass("animated fadeInRight");
    });


}); //End document.ready
