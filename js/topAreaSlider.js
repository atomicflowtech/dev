
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

$("#homeLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(1);
});

$("#aboutLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(2);
});
$("#skillsLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(3);
});
$("#workLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(4);
});
$("#contactLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(5);
});

$("#googleSocialLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(6);
});
$("#facebookSocialLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(7);
});
$("#twitterSocialLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(8);
});
$("#rssSocialLink").mouseenter(function() {
	$('#headerTopAreaSlider').stop().anythingSlider(9);
});
