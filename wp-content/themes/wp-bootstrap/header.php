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
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_head(); ?>
		<link href='<?php echo get_stylesheet_directory_uri() ?>/library/css/main.css' rel='stylesheet'>
		<!-- <link href='<?php echo get_stylesheet_directory_uri() ?>/library/css/font-awesome.min.css' rel='stylesheet'> -->

		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/library/css/font-awesome-ie7.min.css">
		<![endif]-->

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

			<div class="container">

				<div class="header-meta hidden-xs hidden-sm hidden-md hidden-lg">

					<div class="row">

						<!-- search bar -->
						<div class="col-md-3 search-form">
							<form action="#" method="post">
								<label for="search" class="sr-only">Search</label>
								<div class="input-group">
									<input type="search" class="form-control" id="search" name="search" placeholder="Search">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
									</span>
								</div>
							</form>
						</div>

						<div class="col-md-3 newsletter">
							<a class="btn btn-primary" href="http://stop-esrd.org/images/eNewsLetter_201308.pdf" target="_blank">
								Check out our e-Newsletter
							</a>
						</div>

						<div class="col-md-2">
							<div class="joinus">
								<p>Join Us <i class="glyphicon glyphicon-share"></i></p>
							</div>
						</div>

						<!-- TODO: Implement logic -->
						<div class="col-md-2">
							<div class="subscription-form-container">
								<form action="#" class="form-inline subscribe">
									<div class="form-group">
										<label for="email" class="sr-only">E-mail</label>
										<input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
									</div>
									<button type="submit" class="btn btn-info">Subscribe</button>
								</form>
							</div>
						</div>

						<!-- share icons -->
						<div class="col-md-2">
							<div class="social-icons">
								<a href="#">
									<span class="social social-facebook"></span>
								</a>
								<a href="#">
									<span class="social social-twitter"></span>
								</a>
							</div>
						</div>

					</div>

				</div>
				<!-- end .header-meta -->

				<div class="header-top clearfix">

					<!-- start Logo -->
					<a class="logo pull-left" title="<?php echo get_bloginfo('description') ?>" href="<?php echo home_url() ?>">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/library/img/logo.png" alt="NORD Logo">
					</a>
					<!-- end Logo -->

<!-- 					<div class="slogan pull-right text-right">
						<h3 class="orange">
							A.P.E.R. fect solution for controlling kidney disease... <br>
							prolongin health and life!
						</h3>
					</div>
 -->
				</div>
				<!-- end .header-top -->

				<div id="main-navbar">

					<nav class="navbar" role="navigation">

						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse navbar-main">
							<ul class="nav navbar-nav">
								<li>
									<a href="<?php echo home_url('get-involved/donate') ?>">DONATE</a>
								</li>
								<li>
									<a href="<?php echo home_url('about-us/mission') ?>">About Us</a>
								</li>
								<li>
									<a href="<?php echo home_url('about-us/program') ?>">Program</a>
								</li>
								<li>
									<a href="<?php echo home_url('resources/renal-disease') ?>">Resources</a>
								</li>
								<li>
									<a href="<?php echo home_url('get-screened') ?>">Screening</a>
								</li>
								<li>
									<a href="<?php echo home_url('about-us/media') ?>">Media</a>
								</li>
								<li>
									<a href="<?php echo home_url('get-involved/events') ?>">Event</a>
								</li>
								<li>
									<a href="<?php echo home_url('get-involved/volunteer') ?>">Volunteer</a>
								</li>
								<li>
									<a href="<?php echo home_url('about-us/contact-us') ?>">Contact</a>
								</li>
							</ul>
						</div>

					</nav>

				</div>
				<!-- end #main-navbar -->

			</div><!-- end .container -->

		</header> <!-- end header -->
