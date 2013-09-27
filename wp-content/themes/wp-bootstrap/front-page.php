<?php get_header() ?>

<div class="container">

	<div class="main-feature-container">
<!-- 			<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="active item"><img src="http://lorempixel.com/1000/400/people/1" alt="image0"></div>
				<div class="item"><img src="http://lorempixel.com/1000/400/people/4" alt="image1"></div>
				<div class="item"><img src="http://lorempixel.com/1000/400/people/2" alt="image2"></div>
			</div>
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
-->
		<div class="row">
			<div class="col-md-8">
				<iframe width="100%" height="100%" src="//www.youtube.com/embed/M60yzOXTl0Y?rel=0&autoplay=0&autohide=1&modestbranding=1" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-4">
				<h1>NORD</h1>
				<p>
					is a nonprofit health agency dedicated to preventing kidney (renal) disease, diabetes and high blood pressure through education and research.
				</p>
				<a href="<?php echo home_url('get-involved/donate') ?>" class="btn btn-success">
					Donate. <br>
					Prolong and Save Lives
				</a>
			</div>
		</div>
	</div>

	<div class="sub-content-container top-shadow">

		<hr>

		<div class="row">

			<!-- Screening & Diagnostic Center -->
			<section class="screening col-md-4 cf">
				<header>
					<h3>Screening</h3>
				</header>
				<p>
					We are getting ready for on-site Screening and Diagnostic services. Please come back later for more information.
				</p>
				<div class="pull-right">
					<a href="<?php echo home_url('get-screened') ?>" class="btn btn-warning">
						Get Screened
					</a>
				</div>
			</section>

			<!-- Renal Disease Library -->
			<section class="library col-md-4 cf">
				<header>
					<h3>Resources</h3>
				</header>
				<p>
					We have great number of resources regarding Renal Disease, Diabetes, High Blood Pressure, and Transplantation.
				</p>
				<div class="pull-right">
					<a href="<?php echo home_url('resources') ?>" class="btn btn-warning">
						Find out more
					</a>
				</div>
			</section>

			<!-- Get Invoved -->
			<section class="get-involved col-md-4 cf">
				<header>
					<h3>Get Involved</h3>
				</header>
				<p>
					Are you interested in Renal Disease? Do you want to help out NORD? There are many ways you can participate, including volunteer activities and donations.
				</p>
				<div class="pull-right">
					<a href="<?php echo home_url('get-involved/volunteer') ?>" class="btn btn-warning">
						Find out more
					</a>
				</div>
			</section>

		</div>
		<!-- end .row -->

		<hr>

		<div class="partners text-center">
			<header>
				<a href="<?php echo home_url('about-us/partners') ?>"><h2>Our Partners</h2></a>
			</header>
			<div class="spacer20"></div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/library/img/partner_logos.png">
				</div>
			</div>
			<div class="spacer50"></div>
		</div>
		<!-- end .partners -->
	</div>
	<!-- end .sub-content-container -->

</div>
<!-- end .container -->
<?php get_footer() ?>