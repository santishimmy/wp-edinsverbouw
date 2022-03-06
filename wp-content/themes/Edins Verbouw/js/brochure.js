$(function() {
    $("#request-brochure").submit(function(e) {
       $("#brochure-submit").fadeOut(1000);
       $("#request-brochure").fadeOut(1000);
       $("iframe[name='brochure-frame']").delay(1000).fadeIn(1000);
    });
 });