$(document).ready(function() {

  var navpos = $('#header-top').offset();

  console.log(navpos.top);

    $(window).bind('scroll', function() {

      if ($(window).scrollTop() > navpos.top) {

        $('#header-top').addClass('fixedNAV');
      
       }

       else {

         $('#header-top').removeClass('fixedNAV');
        
       }

    });

  $(window).resize(function(){
    var current_width = $(window).width(); 
    if(current_width >= 600){    
        var navpos = $('#header-top').offset();
        console.log(navpos.top);
        $(window).bind('scroll', function() {

        if ($(window).scrollTop() > navpos.top) {
            $('#header-top').addClass('fixedNAV');
        }
        else {
            $('#header-top').removeClass('fixedNAV');     
            }
       });
     }
     else{
          $('#header-top').removeClass('fixedNAV');
        }
  });

});