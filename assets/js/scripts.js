/*jQuery("#openNav").click(function(){
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("masthead").style.marginLeft = "250px";
});

jQuery("#closeNav").click(function(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("masthead").style.marginLeft= "0";
});*/

jQuery(document).ready(function(){
  jQuery("#solucoes-vg").click(function(){
    jQuery(".solucoes-vg").toggleClass("invisible");
  });
});

jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 1) {
    jQuery(".idHeader").addClass("black-header");
  } else {
    jQuery(".idHeader").removeClass("black-header");
  }
});

function handleSelect(elm){
  window.location = elm.value;
}