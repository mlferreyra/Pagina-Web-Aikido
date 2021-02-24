$(document).ready(function(){

  // Accordian effect
  $(".case-button").click(function(){
    if ($(this).next("p").is(":visible")) {
      $(this).next("p").hide();
      $(this).css("background-color","#f7f7f7");
      $(this).css("color","#333333");
      $(this).children("i").css("transform", "rotate(0deg)");
      $(this).children("i").css("color", "#454545");
    }else{
      $(this).next("p").show();
      $(this).css("background-color","#454545");
      $(this).css("color","white");
      $(this).children("i").css("transform", "rotate(45deg)");
      $(this).children("i").css("color", "#00c982");
    };
});

});
