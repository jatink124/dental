// team js
// When the DOM is ready, run this function
// $(document).ready(function() {
//   //Set the carousel options
//   $('#quote-carousel').carousel({
//     pause: true,
//     interval: 4000,
//   });
// });
// text shadow


   

// text shadow
// team js
$('#carousel-example-generic').on('slide.bs.carousel', function() {
  if ($('.carousel-inner .item:last').hasClass('active')) {

    $('.carousel-inner .item:first').addClass('animated zoomInDown');
  } else {
    $('.item.active').next().addClass('animated zoomInDown');
  }
  $('.item.active').addClass('animated zoomOutDown');
});

$('#carousel-example-generic').on('slid.bs.carousel', function() {
  $('.item').removeClass('animated zoomInDown zoomOutDown')
});

$('.left').click(function() {
  if ($('.carousel-inner .item:first').hasClass('active')) {
    $('.carousel-inner .item:last').addClass('animated zoomInDown');
  } else {
    $('.item.active').prev().addClass('animated zoomInDown');
  }
});

$('.carousel-indicators > li').click(function() {
  $('.item').addClass('animated zoomInDown');
});

// text color address
$(".add").letterEffect({

  // CSS property you want to apply
  "effectParam": "color",

  // Propety values
  "effectValues": ["red", "green", "blue", "yellow","BlueViolet" ],

  // Enable ambient animation
  // "ambient<a href="http:www.jqueryscript.net/animation/">Animation</a>": true,

  // Percentage of affacted characters
  "ambientstrength": .2,

  // Animation speed in seconds
  "time": .5,

  // Amout in seconds to randomly vary animation time
  "drift": .25,

  // CSS3 transition
  "ambientEase": "ease-in-out",

  // Enable hover effect
  "hoverAnimation": true,

  // Transition delay in seconds
  "hoverTime": .3,

  // CSS3 transition
  "hoverEase": "ease-in-out",

  // Groups by every letter
  "splitChar": '',

});
// text animation
// title zoom
$('.anim').switchText(

  // an arrary of words or sentences
  // ['I Love','jQuery Script','.Net!'],
  [],
  // animation speed
  2000,

  // 1 = loop
  1,

  // 1 = remove animation on end
  1,

  // animation type
  'fadeIn'

);
// title zoom
