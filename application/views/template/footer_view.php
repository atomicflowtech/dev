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
	<script>
		// DOM Ready
		$(function() {
			$('#headerTopAreaSlider').anythingSlider({
				buildArrows : false,
				buildNavigation : false,
				buildStartStop : false
			});
		});
		// TODO Create function to handle this and move it to a seperate js
		$("#homeLink").mouseenter(function() {
			$('#headerTopAreaSlider').anythingSlider(1);
		});

		$("#aboutLink").mouseenter(function() {
			$('#headerTopAreaSlider').anythingSlider(2);
		});

	</script>
</footer>
</body>
</html> 