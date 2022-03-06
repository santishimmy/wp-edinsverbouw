// ------------------------ // ------------------------ // ------------------------ // ------------------------ // ------------------------ // ------------------------ // 
//                                                                                                                                                                      //
// The main JavaScript file which contains code that's used on every page of the website.                                                                               //
//                                                                                                                                                                      //
// This is where the magic happens, elements moving, dissapearing, being replaced or whatever you can think of.                                                         //
// This is also where the most fun happens ;) <3 JS.                                                                                                                    //
//                                                                                                                                                                      //
// Anyhow, let's do $(this)                                                                                                                                             //
//                                                                                                                                                                      //
// ------------------------ // ------------------------ // ------------------------ // ------------------------ // ------------------------ // ------------------------ // 


// -------------------------- // ------------------------ // 
//                            // ------------------------ // 
// -------------------------- // ------------------------ // ------------------------ // 
// Always Resize the Document // ------------------------ // ------------------------ // 
// -------------------------- // ------------------------ // ------------------------ // 
//                            // ------------------------ // 
// -------------------------- // ------------------------ // 


$(document).ready(function() {
    $(window).resize();
})


// ------------------------ // ------------------------ // 
//                          // ------------------------ // 
// ------------------------ // ------------------------ // ------------------------ // 
// Change Header On Scroll  // ------------------------ // ------------------------ // 
// ------------------------ // ------------------------ // ------------------------ // 
//                          // ------------------------ // 
// ------------------------ // ------------------------ // 


$(function(){
    var lastScrollTop = 0, delta = 15;
    $(window).scroll(function(event){
       var st = $(this).scrollTop();
       
       if(Math.abs(lastScrollTop - st) <= delta)
          return;
if ((st > lastScrollTop) && (lastScrollTop>75)) {
       // downscroll code
      $(".info-header").removeClass("info-header-passive");
      $(".info-header").addClass("info-header-active");
      $(".header").removeClass("header-passive");
      $(".header").addClass("header-active");
      $(".navmenu-mobile").removeClass("mobile-navbar-passive");
      $(".navmenu-mobile").addClass("mobile-navbar-active");
      $("#special-button").fadeIn(350);
      
  
   } if((st < lastScrollTop) && (lastScrollTop<75)) {
      // upscroll code
      $(".info-header").removeClass("info-header-active");
      $(".info-header").addClass("info-header-passive");
      $(".header").removeClass("header-active")
      $(".header").addClass("header-passive");
      $(".navmenu-mobile").removeClass("mobile-navbar-active");
      $(".navmenu-mobile").addClass("mobile-navbar-passive");
      $("#special-button").fadeOut(350);
   }
       lastScrollTop = st;
    });
});

$(function() {
   $(document).ready( function() {
      if (location.hash === "#offerte") {
         $('html, body').animate({
            scrollTop: $("#offerte").offset().top -120
        }, 10);
      }
   });
});

$(function() {
   $(document).ready( function() {
      if (location.hash === "#contact") {
         $('html, body').animate({
            scrollTop: $("#contact").offset().top -120
        }, 10);
      }
   });
});

$(function() {
   $(document).ready( function() {
      if (location.hash === "#atlantis") {
         $('html, body').animate({
            scrollTop: $("#atlantis").offset().top -120
        }, 10);
      }
   });
});

$(function() {
   $(document).ready( function() {
      if (location.hash) {
         $(".info-header").removeClass("info-header-passive");
         $(".info-header").addClass("info-header-active");
         $(".header").removeClass("header-passive");
         $(".header").addClass("header-active");
         $(".navmenu-mobile").removeClass("mobile-navbar-passive");
         $(".navmenu-mobile").addClass("mobile-navbar-active");
         $("#special-button").fadeIn(350);
      }
   });
});

$(function() {
   $('.special').click(function(e) {
      e.preventDefault()
      $('html, body').animate({
         scrollTop: $("#offerte").offset().top -110
      }, 0);
   })
})


// ------------------------ // ------------------------ // 
//                          // ------------------------ // 
// ------------------------ // ------------------------ // ------------------------ // 
// Show Nav-Menu on Click   // ------------------------ // ------------------------ // 
// ------------------------ // ------------------------ // ------------------------ // 
//                          // ------------------------ // 
// ------------------------ // ------------------------ // 


$(function() {
   $('.menu-ul').on('click', function() {
      $('.menu-ul').toggleClass('active', 500);
   });
});

$(function() {
   $('.menu-ul').click( function() {
      $('.nav-overlay').fadeToggle(150);
   });
});

$(function() {
   $('.menu-ul').on('click', function() {
      if($('.navmenu-mobile').css('right') == '0px') {
         $('.navmenu-mobile').animate({"right": '-500px'}, 300);
      } else {
         $('.navmenu-mobile').animate({"right": '0'}, 300);
      };
   });
});


$(function() {
   $('.menu-ul').click( function() {
      $('.header').toggleClass("header-change");
   });
});

// --------------------- //
// Show on swipe as well //
// --------------------- //

$(function() {

   if('ontouchstart' in window) {
      $(function() {
         $('body').on('swipeleft', function() {
            $('.menu-ul').addClass('active', 500);
         });

         $('body').on('swiperight', function() {
            $('.menu-ul').removeClass('active', 500);
         });
      });

      $(function() {
         $('body').on('swipeleft', function() {
               $('.nav-overlay').fadeIn(150);
         });
      });

      $(function() {
         $('body').on('swiperight', function() {
               $('.nav-overlay').fadeOut(150);
         });
      });

      $(function() {
         $('body').on('swipeleft', function() {
            $('.navmenu-mobile').animate({"right": '0'}, 300);
         });
      });

      $(function() {
         $('body').on('swiperight', function() {
            $('.navmenu-mobile').animate({"right": '-500px'}, 300);
         });
      });

      $(function() {
         $('body').on('swipeleft', function() {
            $('.header').addClass("header-change");
         });

         $('body').on('swiperight', function() {
            $('.header').removeClass("header-change");
         });
      });
   }
})

// ------------------- // ------------------------ // 
//                     // ------------------------ // 
// ------------------- // ------------------------ // ------------------------ // 
// Carousel be sliding // ------------------------ // ------------------------ // 
// ------------------- // ------------------------ // ------------------------ // 
//                     // ------------------------ // 
// ------------------- // ------------------------ // 


$(function() {
   $('.fa-chevron-circle-right').on('click', function() {
      if($('#radio-1').is(':checked')) {
         $('#radio-1').prop('checked', false);
         $('#radio-2').prop('checked', true);
      }
      else if($('#radio-2').is(':checked')) {
         $('#radio-3').prop('checked', true);
         $('#radio-2').prop('checked', false);
      }       
      else if($('#radio-3').is(':checked')) {
         $('#radio-4').prop('checked', true);
         $('#radio-3').prop('checked', false);
      } 
   });   
});

$(function() {
   $('.fa-chevron-circle-left').on('click', function() {
      if($('#radio-4').is(':checked')) {
         $('#radio-4').prop('checked', false);
         $('#radio-3').prop('checked', true);
      }
      else if($('#radio-3').is(':checked')) {
         $('#radio-2').prop('checked', true);
         $('#radio-3').prop('checked', false);
      }       
      else if($('#radio-2').is(':checked')) {
         $('#radio-1').prop('checked', true);
         $('#radio-2').prop('checked', false);
      } 
   });   
});

// --------------------------------- //
// Carrousel be sliding and swiping  //
// --------------------------------- //

$(function() {
   $('.slide').on('swipeleft', function() {
      if($('#radio-1').is(':checked')) {
         $('#radio-1').prop('checked', false);
         $('#radio-2').prop('checked', true);
      }
      else if($('#radio-2').is(':checked')) {
         $('#radio-3').prop('checked', true);
         $('#radio-2').prop('checked', false);
      }       
      else if($('#radio-3').is(':checked')) {
         $('#radio-4').prop('checked', true);
         $('#radio-3').prop('checked', false);
      } 
   });
});

$(function() {
   $('.slide').on('swiperight', function() {
      if($('#radio-4').is(':checked')) {
         $('#radio-4').prop('checked', false);
         $('#radio-3').prop('checked', true);
      }
      else if($('#radio-3').is(':checked')) {
         $('#radio-2').prop('checked', true);
         $('#radio-3').prop('checked', false);
      }       
      else if($('#radio-2').is(':checked')) {
         $('#radio-1').prop('checked', true);
         $('#radio-2').prop('checked', false);
      } 
   });   
});

// --------------------------------- //
// Carrousel be sliding and shifting //
// --------------------------------- //

$(function() {
   $('body').keydown(function(e) {
      if(e.which == 39) {
         if($('#radio-1').is(':checked')) {
            $('#radio-1').prop('checked', false);
            $('#radio-2').prop('checked', true);
         }
         else if($('#radio-2').is(':checked')) {
            $('#radio-3').prop('checked', true);
            $('#radio-2').prop('checked', false);
         }       
         else if($('#radio-3').is(':checked')) {
            $('#radio-4').prop('checked', true);
            $('#radio-3').prop('checked', false);
         }
      } 
   });
});

$(function() {
   $('body').keydown(function(e) {
      if(e.which == 37) {
         if($('#radio-4').is(':checked')) {
            $('#radio-4').prop('checked', false);
            $('#radio-3').prop('checked', true);
         }
         else if($('#radio-3').is(':checked')) {
            $('#radio-2').prop('checked', true);
            $('#radio-3').prop('checked', false);
         }       
         else if($('#radio-2').is(':checked')) {
            $('#radio-1').prop('checked', true);
            $('#radio-2').prop('checked', false);
         } 
      } 
   });
});


