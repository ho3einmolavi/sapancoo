$(function(){ 
 
 var formTop = $('.sticky').offset().top;
 
  $(window).scroll(function(){ 
   
    var windowTop = $(window).scrollTop(); 
    var formWidth = $('.sticky').width();
    var fluidVal = ( formWidth/$(window).width() ) * 100;
   
    if (formTop < windowTop) {
      $('.box_profile').css({ 
        position: 'fixed', 
        top: 10,
        width: fluidVal + "%",
        transform: "translateY(-270px)"
      });
    } else {
      $('.box_profile').css({
        position: 'static',
        width: '100%',
         transform: "translateY(0px)"
      });
    }

  }); 
});