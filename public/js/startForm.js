$(document).ready(function(){
    $('.phone').mask('000-000-0000');
    $("#thank").fadeIn(1000);
    $("#activeForm").click(function(){
      $(".form").fadeIn(1000);
    });
    $("#closeForm").click(function(){
      $(".form").fadeOut(1000);
    });
});
