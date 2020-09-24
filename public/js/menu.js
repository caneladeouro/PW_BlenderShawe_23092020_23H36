//var $width = $( window ).width();

//if ($width >= 1000) {
//    $(".display").addClass("hide");
//    $(".display").removeClass("display");
//}

$(document).ready(function(){
      var width = $(document).width();
      if (width <= 1200){
        $(".menu-desktop").addClass("hide");
        $(".menu-desktop").removeClass("display");
        $(".menu-mobile").addClass("display");
        $(".menu-mobile").removeClass("hide");
      }
  });