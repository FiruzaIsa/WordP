jQuery(document).ready(function($){
    $(window).bind('load resize', function()
    {
      var win=$(window).width();
      if(win<=576){
        $(".ellipse").last().insertBefore($(".line"));
      }else{
        $(".container > .ellipse").appendTo(".row-circle")
      }
      
      });

      $(window).bind('load resize', function(){
       if($(window).width()<768){
        $(".card-discount").insertAfter($(".about-med-center"));
       }else{
        $(".card-discount").insertBefore($(".about-med-center"));
       }
      });


});