
// DOM Ready
$(function() {
	$('#headerTopAreaSlider').anythingSlider({
		buildArrows : false,
		buildNavigation : false,
		buildStartStop : false,
		easing : "easeOutElastic",
		// vertical: true,
	});
});

var currentPageNum = 1;

switch(currentPageName){
	
	case "home":
		currentPageNum = 1
		break;
	case "about":
		currentPageNum = 2
		break;
	case "skills":
		currentPageNum = 3
		break;
	case "work":
		currentPageNum = 4
		break;
	case "contact":
		currentPageNum = 5
		break;
	default:
	currentPageNum = 1
}

$(".topAreaSliderLink").mouseleave(function(){
	$('#headerTopAreaSlider').stop().anythingSlider(currentPageNum);
});

$("#homeLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(1);
});

$("#aboutLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(2);
});
$("#skillsLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(3);
});
$("#workLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(4);
});
$("#contactLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(5);
});

$("#googleSocialLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(6);
});
$("#facebookSocialLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(7);
});
$("#twitterSocialLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(8);
});
$("#rssSocialLink").mouseover(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(9);
});
