$("#openNav").click(function(){
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("masthead").style.marginLeft = "250px";
});

$("#closeNav").click(function(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("masthead").style.marginLeft= "0";
});

$(document).ready(function(){
  $("#solucoes-vg").click(function(){
    $(".solucoes-vg").toggleClass("invisible");
  });
});

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();

  if (scroll >= 1) {
    $(".idHeader").addClass("black-header");
  } else {
    $(".idHeader").removeClass("black-header");
  }
});

function handleSelect(elm){
  window.location = elm.value;
}