<?php get_header() ?>
<div class="container">

	<div class="content-container with-padding-top with-padding-bottom">

		<div class="sitemap page-content">

			<div class="border-bottom">
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url() ?>">Home</a> <span class="divider"></span></li>
					<li class="active"><?php the_title() ?></li>
				</ul>
			</div>

			<div class="row">

				<div class="col-md-3">
					<h4 class="heading-sitemap"><a href="<?php echo home_url('resources') ?>">RESOURCES</a></h4>
					<ul class="list-sitemap">
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease') ?>">Renal Disease</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/transplantation') ?>">Transplantation</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/medications') ?>">Medications</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease-statistics') ?>">Statistics</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/new-technologies') ?>">New Technologies</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease-of-african-american') ?>">African American</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease-of-american-indian') ?>">American Indian</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease-of-asian') ?>">Asian</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease-of-caucasian') ?>">Caucasian</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease-of-latino') ?>">Latino</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/renal-disease-of-pacific-islander') ?>">Pacific Islander</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('resources/resource-links') ?>">Resource Links</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4 class="heading-sitemap"><a href="<?php echo home_url('get-involved') ?>">GET INVOLVED</a></h4>
					<ul class="list-sitemap">
						<li><a class="link-sitemap" href="<?php echo home_url('get-involved/donate') ?>">Donate</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('get-involved/volunteer') ?>">Volunteer</a></li>
						<li><a class="link-sitemap" href="<?php echo home_url('get-involved/events') ?>">Events</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4 class="heading-sitemap"><a href="<?php echo home_url('get-involved') ?>">ABOUT US</a></h4>
					<ul class="list-sitemap">
						<li><a class="post-link" href="<?php echo home_url('about-us/mission') ?>">Our Mission</a></li>
						<li><a class="post-link" href="<?php echo home_url('about-us/program') ?>">Our Program</a></li>
						<li><a class="post-link" href="<?php echo home_url('about-us/history') ?>">Our History</a></li>
						<li><a class="post-link" href="<?php echo home_url('about-us/founder') ?>">Founder</a></li>
						<li><a class="post-link" href="<?php echo home_url('about-us/media') ?>">On Media</a></li>
						<li><a class="post-link" href="<?php echo home_url('about-us/brochure') ?>" >Online Brochure</a></li>
						<li><a class="post-link" href="<?php echo home_url('about-us/partners') ?>" >Partners</a></li>
						<li><a class="post-link" href="<?php echo home_url('about-us/contact') ?>" >Contact</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4 class="heading-sitemap">META</h4>
					<ul class="list-sitemap">
						<li><a class="link-sitemap" href="<?php echo home_url('disclaimer') ?>">Disclaimer</a></li>
					</ul>
				</div>

			</div>

		</div>

	</div>
	<!-- end .content-container -->

</div>
<!-- end .container -->

<?php get_footer() ?>