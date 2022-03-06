// Form Validation
// ---------------

// Contact Form
// ----------

var phone_regex = /^\(?([+]31|0031|0)-?6(\s?|-)([0-9]\s{0,3}){8}$/gm;
var web_regex = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/gm;

$(function(){
   $("input[type='text'], input[type='number'], input[type='email'], textarea").on("keyup", function() {
      if(
         $("input[type='text']").val().length > 1 &&
         $("input[type='number']").val().match(phone_regex) &&
         $("input[type='email']").val().match(/^\S+@\S+\.\S+$/) &&
         $("textarea").val().length > 1 
      ) {
         $('.fake-button').hide()
         $("#submit").show()
      } else if(
         $("input[type='text']").val().length < 1 ||
         !$("input[type='number']").val().match(phone_regex) ||
         !$("input[type='email']").val().match(/^\S+@\S+\.\S+$/) ||
         $("textarea").val().length < 1 
      ) {
         $("#submit").hide()
         $('.fake-button').show()
      }
   });
});

// Input Validation

$(function() {
   $("input[type='text']").on('blur', function() {
      if(!$(this).val()) {
         $(this).css("border", "2px solid rgba(210, 31, 60, 0.6)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      } else {
         $(this).css("border", "2px solid rgb(106, 230, 188)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      }
   });

   $("input[type='email']").on('blur', function() {
      if(!$(this).val().match(/^\S+@\S+\.\S+$/)) {
         $(this).css("border", "2px solid rgba(210, 31, 60, 0.6)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      } else {
         $(this).css("border", "2px solid rgb(106, 230, 188)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      }
   });

   $("input[type='number']").on('blur', function() {
      if(!$(this).val().match(phone_regex)) {
         $(this).css("border", "2px solid rgba(210, 31, 60, 0.6)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      } else {
         $(this).css("border", "2px solid rgb(106, 230, 188)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      }
   });

   $("textarea").on('blur', function() {
      if(!$(this).val()) {
         $(this).css("border", "2px solid rgba(210, 31, 60, 0.6)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      } else {
         $(this).css("border", "2px solid rgb(106, 230, 188)");
         $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
      }
   });

   $(function() {
      $("input[type='text']").on('keyup', function() {
         if(!$(this).val()) {
            $(this).css("border", "none");
            $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
         } else {
            $(this).css("border", "2px solid rgba(106, 230, 188, 0.6)");
            $(this).css("background-color", "rgba(106, 230, 188, 0.25)");
         }
      });
   
      $("input[type='email']").on('keyup', function() {
         if(!$(this).val().match(/^\S+@\S+\.\S+$/)) {
            $(this).css("border", "none");
            $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
         } else {
            $(this).css("border", "2px solid rgba(106, 230, 188, 0.6)");
            $(this).css("background-color", "rgba(106, 230, 188, 0.25)");
         }
      });
   
      $("input[type='number']").on('keyup', function() {
         if(!$(this).val().match(phone_regex)) {
            $(this).css("border", "none");
            $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
         } else {
            $(this).css("border", "2px solid rgba(106, 230, 188, 0.6)");
            $(this).css("background-color", "rgba(106, 230, 188, 0.25)");
         }
      });
   
      $("textarea").on('keyup', function() {
         if(!$(this).val()) {
            $(this).css("border", "none");
            $(this).css("background-color", "rgba(0, 140, 149, 0.2)");
         } else {
            $(this).css("border", "2px solid rgba(106, 230, 188, 0.6)");
            $(this).css("background-color", "rgba(106, 230, 188, 0.25)");
         }
      });
   });
   
   // Reset Form

   $(".fa-sync-alt").click(function() {
      var e = $(this);
      e.css("color", "rgb(0, 140, 149)")
      setTimeout(function() {
         e.css("color", "rgb(41, 50, 61)")
      }, 150); 

      $("input[type='text'], input[type='email'], input[type='number'], textarea").css("background-color", "rgba(0, 140, 149, 0.2)")
      $("input[type='text'], input[type='email'], input[type='number'], textarea").css("border", "none")
      $("input[type='text'], input[type='email'], input[type='number'], textarea").val("")
      $("#submit").hide()
      $('.fake-button').show()

   })
});


// Form Success
// -----------

$(function() {
   $("#contact-formulier").submit(function(e) {
      $("#submit").fadeOut(1000);
      $("#contact-formulier").fadeOut(1000);
      $("iframe").delay(1000).fadeIn(1000);
   });
});