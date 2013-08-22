<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<link href='http://fonts.googleapis.com/css?family=Kreon:400,700' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='<?php echo get_stylesheet_directory_uri() ?>/library/css/stylus/main.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo get_stylesheet_directory_uri() ?>/library/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/library/css/font-awesome-ie7.min.css">
		<![endif]-->

		<!-- theme options from options panel -->
		<?php // get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>

		<script>
			// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			// ga('create', 'UA-43014291-1', 'stop-esrd.org');
			// ga('send', 'pageview');
		</script>
	</head>

	<body <?php body_class(); ?>>

		<header role="banner">

			<!-- start subscription -->
			<!-- TODO: Implement logic -->
<!-- 			<div class="subscription-form-container">
				<div class="container-fluid">
					<form action="post_actions" class="form-inline subscribe">
						GET monthly e-Newsletter <i class="icon-mail-forward"></i>
						<input type="text" name="email" class="span3" placeholder="E-mail">
						<button class="btn btn-small btn-info">Subscribe</button>
						<a href="#" class="btn btn-link no">No, thanks</a>
						<label class="checkbox"><input type="checkbox">Do not show this again</label>
					</form>
				</div>
			</div>
 -->			<!-- end subscription -->

			<div class="header-top">

				<div class="container-fluid">

					<!-- start Logo -->
					<a class="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/library/img/logo.png" alt="NORD Logo">
					</a>
					<!-- end Logo -->

				</div>

			</div>

			<div class="header navbar clearfix">

				<div class="container-fluid">


					<!-- start main menu -->
					<div class="menu-main">

						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>

						<div class="nav-collapse collapse">
							<ul class="nav">
								<li>
									<a href="<?php echo home_url('get-involved/donate') ?>">DONATE</a>
								</li>
								<li>
									<a href="<?php echo home_url('renal-disease-library') ?>">Renal Disease Library</a>
								</li>
								<li>
									<a href="<?php echo home_url('get-screened') ?>">Get Screened</a>
								</li>
								<li>
									<a href="<?php echo home_url('get-involved') ?>">Get Involved</a>
								</li>
								<li>
									<a href="<?php echo home_url('about-us') ?>">About Us</a>
								</li>
								<li>
									<a href="<?php echo home_url('contact-us') ?>">Contact</a>
								</li>
							</ul>

						</div>

					</div>
					<!-- end main menu -->

				</div>

			</div><!-- end header-bottom -->

		</header> <!-- end header -->

		<div id="wrap">

			<div id="main">
