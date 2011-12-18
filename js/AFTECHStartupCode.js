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
    }); //end orbit
    
    
    
    $(function() {
    	
        $('#boxWeb').hover(function() {
            $(this).animate({
                backgroundColor: "#20B8F1"
            }, "slow");
        }, function() {
            $(this).stop().css('background-color', '#181C21');
        });
        $('#boxTech').hover(function() {
            $(this).animate({
                backgroundColor: "#20B8F1"
            }, "slow");
        }, function() {
            $(this).stop().css('background-color', '#181C21');
        });
        $('#boxBusiness').hover(function() {
            $(this).animate({
                backgroundColor: "#20B8F1"
            }, "slow");
        }, function() {
            $(this).stop().css('background-color', '#181C21');
        });
        
        //Make the boxes whole div act like links
$('#boxWeb').click(function() {
window.location.href = $('#boxWeb a').attr('href');
});
$('#boxTech').click(function() {
window.location.href = $('#boxTech a').attr('href');
});
$('#boxBusiness').click(function() {
window.location.href = $('#boxBusiness a').attr('href');
});
        
    });
     
    

// $(document).ready(function(){
    // $("#mainNavigationList li").hover(function(){
        // $("#mainNavigationList li a")
            // // first jump  
            // .animate({'padding-top':"-10px"}, 200).animate({'padding-top':"-4px"}, 200)
            // // second jump
            // .animate({'padding-top':"-7px"}, 100).animate({'padding-top':"-4px"}, 100)
            // // the last jump
            // .animate({'padding-top':"-6px"}, 100).animate({'padding-top':"-4px"}, 100);
    // });
// });

// $(function() {
 // $('#mainSliderContentContainer').orbit();
// });