<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>{page_title}</title>
		<meta name="description" content="{page_description}" />
		<meta name="author" content="Brandon John-Freso and Lucas Paulger" />
		<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0" /> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fontfaces.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid/reset.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/default.css" media="all" />
		
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/grid/960.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/styles.css" media="all" />
		
		<!-- ANYTHING SLIDER -->
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/orbit/orbit-1.2.3.css" />
		<script type="text/javascript">
		//Script Brandon added to override default styles in the 960 Gridder overlay
var gOverride = {
  urlBase: 'http://gridder.andreehansson.se/releases/latest/',
  gColor: '#EEEEEE',
  gColumns: 16,
  gOpacity: 0.35,
  gWidth: 10,
  pColor: '#C0C0C0',
  pHeight: 15,
  pOffset: 0,
  pOpacity: 0.55,
  center: true,
  gEnabled: true,
  pEnabled: false,//modified from true
  setupEnabled: true,
  fixFlash: true,
  size: 960
};
</script>
	</head>
	<body id="<?php 
	if($this->uri->segment(1)==""){
		echo "home";
	}
	else{
		echo $this->uri->segment(1);
	}
	?>">
