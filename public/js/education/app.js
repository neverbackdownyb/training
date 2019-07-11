function goToDiv(features){
$('html,body').animate({
        scrollTop: $("#" + features).offset().top
    }, 'slow');
} 


$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});


$(document).ready(function(){
  $(".dropdown").on("hide.bs.dropdown", function(){
    $(".btn").html('PAGE <span class="caret"></span>');
  });
  $(".dropdown").on("show.bs.dropdown", function(){
    $(".btn").html('PAGE <span class="caret caret-up"></span>');
  });
});

$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});