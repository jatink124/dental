jQuery(function ($) {
    $(document).ready(function() {// if needed, use window.onload which fires after this event
        if(window.location.hash) {
            var hash = window.location.hash;
          console.log(hash);
            $( 'a[href=' + hash + ']' ).click();
        }
    });
});
$('#bootstrap-touch-slider').bsTouchSlider();
$(document).ready(function(){


  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
