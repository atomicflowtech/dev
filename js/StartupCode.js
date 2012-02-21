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
    
    
    
    $(function() { //starts dom load function
    	
        $('#boxWeb').hover(function() {
            $(this).animate({
                backgroundColor: "#20B8F1"
            }, "slow");
        }, function() {
            $(this).stop().css('background-color', '#FFFFFF');
        });
        $('#boxTech').hover(function() {
            $(this).animate({
                backgroundColor: "#20B8F1"
            }, "slow");
        }, function() {
            $(this).stop().css('background-color', '#FFFFFF');
        });
        $('#boxBusiness').hover(function() {
            $(this).animate({
                backgroundColor: "#20B8F1"
            }, "slow");
        }, function() {
            $(this).stop().css('background-color', '#FFFFFF');
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
        
        
        $('#webSubHeader').airport([ 'The Digital DaVincis', 'The Design Einsteins', 'The Web Gurus' ]);
        $('#techSubHeader').airport([ 'The Coding Whizkids', 'The Code Junkies', 'The App Experts' ]);
        $('#marketingSubHeader').airport([ 'The Social Engineers', 'The Media Architects', 'The Search Mechanics' ]);
    }); //ends dom load function
     
    

//************************************************************************************************Raphael

//Fresh document ready handler for Raphael
$(function(){
	//open handler function 1
	var paper = new Raphael(document.getElementById("mainSliderCTA"),960,400);
	var bgCircle = paper.circle(100,100,100);
	bgCircle.node.onmouseover = bgCircleMousedOver;
	
	bgCircle.attr({
		gradient: '270-#F99E43-#F88614', 
		stroke:'#47B8F1', 
		'stroke-width': 2,
		opacity: 0})
		
		function bgCircleMousedOver (refObj) {
	  alert("Circle Moused Over" + refObj);
	}	

		

});

