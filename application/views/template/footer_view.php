<footer>
	<div id="footerContainer" class="container_16">
		<ul>
			<li class="grid_4">
				<a href=""><span class="blue1">\\</span>CONNECT</a>
				<p>
					text
				</p>
			</li>
			<li class="grid_4">
				<a href=""><span class="blue1">\\</span>BLOG</a>
				<p>
					text
				</p>
			</li>
			<li class="grid_4">
				<a href=""><span class="blue1">\\</span>CURRENT CLIENTS</a>
				<p>
					text
				</p>
			</li>
			<li>
				<p id="footerDescriptionText">
					text
				</p>
			</li>
		</ul>
	</div>
	<script src="<?php echo base_url();?>js/jquery-1.6.4.min.js"></script>
	<script src="<?php echo base_url();?>js/AnythingSlider/jquery.easing.1.2.js"></script>
	<script src="<?php echo base_url();?>js/AnythingSlider/jquery.anythingslider.fx.js"></script>
	<script src="<?php echo base_url();?>js/AnythingSlider/jquery.anythingslider.js"></script>
	<script src="<?php echo base_url();?>js/AnythingSlider/jquery.anythingslider.video.js"></script>
	<script src="<?php echo base_url();?>js/AnythingSlider/swfobject.js"></script>
	<script src="<?php echo base_url();?>js/lavalamp/jquery.lavalamp.js"></script>
	<script>
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
		// TODO Create function to handle this and move it to a seperate js
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

	</script>
</footer>
</body>
</html> 