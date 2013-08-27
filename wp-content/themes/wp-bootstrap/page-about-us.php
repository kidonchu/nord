<?php get_header() ?>
<div class="container">

	<div class="content-container with-padding-top with-padding-bottom">

		<div class="row with-padding-left with-padding-right">

			<div class="col-md-12">

				<div class="border-bottom">
					<ul class="breadcrumb">
						<li><a href="<?php echo home_url() ?>">Home</a> <span class="divider"></span></li>
						<li class="active"><?php the_title() ?></li>
					</ul>
				</div>

				<header class="pageHeader">
					<h1>ABOUT US</h1>
				</header>

				<p> The National Organization for Renal Disease is a nonprofit health agency dedicated to preventing kidney (renal) disease, diabetes and high blood pressure through education and research. </p>

				<div class="row with-padding-all">
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/mission') ?>">
							<img src="http://lorempixel.com/200/150/people/10" alt="img1" class="img-thumbnail">
							<header class="postHeader">
								<h3>Our Mission</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/program') ?>">
							<img src="http://lorempixel.com/200/150/people/7" alt="img2" class="img-thumbnail">
							<header class="postHeader">
								<h3>Our Program</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/contact-us') ?>">
							<img src="http://lorempixel.com/200/150/people/8" alt="img3" class="img-thumbnail">
							<header class="postHeader">
								<h3>Contact Us</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/partners') ?>">
							<img src="http://lorempixel.com/200/150/people/4" alt="img3" class="img-thumbnail">
							<header class="postHeader">
								<h3>Partners</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
				</div>
				<!-- end .row -->

				<div class="row with-padding-all">
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/history') ?>">
							<img src="http://lorempixel.com/200/150/people/3" alt="img1" class="img-thumbnail">
							<header class="postHeader">
								<h3>Our History</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/founder') ?>">
							<img src="http://lorempixel.com/200/150/people/5" alt="img2" class="img-thumbnail">
							<header class="postHeader">
								<h3>Founder &amp; President</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/media') ?>">
							<img src="http://lorempixel.com/200/150/people/1" alt="img1" class="img-thumbnail">
							<header class="postHeader">
								<h3>Media</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
					<div class="col-md-3">
						<a href="<?php echo home_url('about-us/brochure') ?>">
							<img src="http://lorempixel.com/200/150/people/2" alt="img2" class="img-thumbnail">
							<header class="postHeader">
								<h3>Online Brochure</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>
				</div>

			</div>

		</div>

	</div>
	<!-- end .content-container -->

</div>
<!-- end container -->

<?php get_footer(); ?>