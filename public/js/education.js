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