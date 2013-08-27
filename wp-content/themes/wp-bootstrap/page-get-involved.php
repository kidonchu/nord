<?php get_header(); ?>
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
					<h1>GET INVOLVED</h1>
				</header>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>

				<div class="row with-padding-all">

					<div class="col-md-4">
						<a href="<?php echo home_url('get-involved/donate') ?>">
							<img src="http://lorempixel.com/250/200/people/2" alt="img1" class="img-thumbnail">
							<header>
								<h3>Donate</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>

					<div class="col-md-4">
						<a href="<?php echo home_url('get-involved/volunteer') ?>">
							<img src="http://lorempixel.com/250/200/people/5" alt="img2" class="img-thumbnail">
							<header>
								<h3>Volunteer</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>

					<div class="col-md-4">
						<a href="<?php echo home_url('get-involved/events') ?>">
							<img src="http://lorempixel.com/250/200/people/1" alt="img1" class="img-thumbnail">
							<header>
								<h3>Events</h3>
							</header>
						</a>
						<p>Lerem ipsum can be a very good way to modify each string value in website</p>
					</div>

				</div>

			</div>

		</div>
		<!-- end .row -->

	</div>
	<!-- end .content-container -->

</div>
<?php get_footer(); ?>