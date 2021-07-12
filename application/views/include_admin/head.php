<head>
	
	<meta charset="utf-8">
	<title>SISTA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="<?php echo base_url('public/images/logosista2.ico') ?> ">
    
	<!-- CSS -->
	<link href="<?php echo base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/css/flexslider.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/css/prettyPhoto.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/css/animate.css') ?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url('public/css/owl.carousel.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/style.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('public/fontawesome-free-5.15.1-web/css/all.css') ?>" rel="stylesheet">
    
	<!-- FONTS -->
	<link href='<?php echo base_url('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') ?>' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') ?>" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="<?php echo base_url('public/js/jquery.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/jquery.prettyPhoto.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/jquery.nicescroll.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/superfish.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/jquery.flexslider-min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/owl.carousel.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/animate.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/jquery.BlackAndWhite.js');?>"></script>
	<script src="<?php echo base_url('public/js/myscript.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('public/js/otentikasi.js');?>" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>