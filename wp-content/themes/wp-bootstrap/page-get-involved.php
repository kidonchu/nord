<?php get_header(); ?>
<div class="content-container container-fluid">

	<header class="pageHeader border-bottom">
		<h1>GET INVOLVED</h1>
	</header>

	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>

	<div class="spacer30"></div>

	<div class="row-fluid">

			<div class="span4">
				<a href="<?php echo home_url('get-involved/donate') ?>">
					<img src="http://lorempixel.com/200/150/people/3" alt="img1" class="img-polaroid">
					<header class="postHeader">
						<h3>Donate</h3>
					</header>
				</a>
				<p>Lerem ipsum can be a very good way to modify each string value in website</p>
			</div>

			<div class="span4">
				<a href="<?php echo home_url('get-involved/volunteer') ?>">
					<img src="http://lorempixel.com/200/150/people/5" alt="img2" class="img-polaroid">
					<header class="postHeader">
						<h3>Volunteer</h3>
					</header>
				</a>
				<p>Lerem ipsum can be a very good way to modify each string value in website</p>
			</div>

			<div class="span4">
				<a href="<?php echo home_url('get-involved/events') ?>">
					<img src="http://lorempixel.com/200/150/people/1" alt="img1" class="img-polaroid">
					<header class="postHeader">
						<h3>Events</h3>
					</header>
				</a>
				<p>Lerem ipsum can be a very good way to modify each string value in website</p>
			</div>

	</div>

</div><!-- end .content-container -->

<?php get_footer(); ?>