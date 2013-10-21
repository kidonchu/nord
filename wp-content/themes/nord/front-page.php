<?php get_header() ?>

	<div class="row main-feature">
		<div class="col-md-8">
			<iframe width="100%" height="384px" src="//www.youtube.com/embed/M60yzOXTl0Y?rel=0&autoplay=0&autohide=1&modestbranding=1" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="col-md-4">
			<div class="nord-intro-content">
				<h1 class="nord-intro-header">NORD</h1>
				<p class="nord-intro-body">
					is a nonprofit health agency dedicated to preventing kidney (renal) disease, diabetes and high blood pressure through education and research.
				</p>
				<a href="<?php echo home_url('get-involved/donate') ?>" class="btn btn-primary btn-donate">Donate<br>Prolong and Save LIVES</a>
			</div>
		</div>
	</div>
	<div class="top-shadow"></div>
	<div class="hr"></div>
	<div class="row">
		<section class="col-md-4 feature cf">
			<div class="feature-content">
				<h2 class="feature-header"><a href="<?php echo home_url('screening-diagnostics') ?>">Screening</a></h2>
				<p class="feature-body">
					We provide urinalysis for kidney diesase, finger stick for blood glucose, and high blood pressure checks.
				</p>
					<a href="<?php echo home_url('screening-diagnostics') ?>" class="btn btn-warning">
						Get Screened
					</a>
			</div>
		</section>

		<!-- Renal Disease Library -->
		<section class="col-md-4 feature cf">
			<div class="feature-content">
				<h2 class="feature-header"><a href="<?php echo home_url('resources/renal-disease') ?>">Resources</a></h2>
				<p class="feature-body">
					We have great number of resources regarding Renal Disease, Diabetes, High Blood Pressure, and Transplantation.
				</p>
					<a href="<?php echo home_url('resources/renal-disease') ?>" class="btn btn-warning">
						Find out more
					</a>
			</div>
		</section>

		<!-- Get Invoved -->
		<section class="col-md-4 feature last cf">
			<div class="feature-content">
				<h2 class="feature-header"><a href="<?php echo home_url('get-involved/volunteer') ?>">Get Involved</a></h2>
				<p class="feature-body">
					Are you interested in Renal Disease? Do you want to help out NORD? There are many ways you can participate.
				</p>
					<a href="<?php echo home_url('get-involved/volunteer') ?>" class="btn btn-warning">
						Find out more
					</a>
			</div>
		</section>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="feature-content">
				<h2 class="feature-header"><a href="<?php echo home_url('blog') ?>">Latest from Blog</a></h2>
				<div class="feature-body">
					<?php query_posts('showposts=5') ?>
					<?php while (have_posts()) : the_post() ?>
						<?php get_template_part('content', 'summary') ?>
					<?php endwhile ?>
				</div>
			</div>
		</div>
		<div class="col-md-6 text-center">
			<div class="feature-content">
				<h2>
					<a href="<?php echo home_url('about-us/partners') ?>">Our Partners</a>
				</h2>
				<img class="partners-logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/partner_logos.png" alt="Partners Logos">
			</div>
		</div>
	</div>
	<!-- end .partners -->

<?php get_footer() ?>