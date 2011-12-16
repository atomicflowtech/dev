// DOM Ready
 $(window).load(function() {
         $('#mainSliderContentContainer').orbit({
     animation: 'horizontal-push',                  // fade, horizontal-slide, vertical-slide, horizontal-push
     animationSpeed: 1400,                // how fast animtions are
     timer: true, 			 // true or false to have the timer
     advanceSpeed: 5000, 		 // if timer is enabled, time between transitions 
     pauseOnHover: false, 		 // if you hover pauses the slider
     startClockOnMouseOut: true, 	 // if clock should start on MouseOut
     startClockOnMouseOutAfter: 0, 	 // how long after MouseOut should the timer start again
     directionalNav: true, 		 // manual advancing directional navs
     captions: true, 			 // do you want captions?
     captionAnimation: 'fade', 		 // fade, slideOpen, none
     captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
     bullets: false,			 // true or false to activate the bullet navigation
     bulletThumbs: false,		 // thumbnails for the bullets
     bulletThumbLocation: '',		 // location from this file where thumbs will be
     afterSlideChange: function(){} 	 // empty function 
});
     });


// $(function() {
 // $('#mainSliderContentContainer').orbit();
// });