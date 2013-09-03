<?php get_header() ?>

<div class="container">

	<div class="content-container">
		<div class="main-feature-container">
			<div id="myCarousel" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
					<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="active item"><img src="http://lorempixel.com/1000/400/people/1" alt="image0"></div>
					<div class="item"><img src="http://lorempixel.com/1000/400/people/4" alt="image1"></div>
					<div class="item"><img src="http://lorempixel.com/1000/400/people/2" alt="image2"></div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div>
	<!-- end .content-container -->

	<div class="sub-content-container top-shadow">

		<hr>

		<div class="row">

			<!-- Screening & Diagnostic Center -->
			<section class="screening col-md-4 cf">
				<header>
					<h3>Screening &amp; Diagnostic</h3>
				</header>
				<p class="text90">
					ipsum dolor sit amet, consectetur adipisicing elit. Animi, architecto, corporis, commodi cupiditate quae exercitationem dolorem ipsam eius numquam eligendi et voluptates iste?
				</p>
				<div class="pull-right">
					<a href="<?php echo home_url('get-screened') ?>" class="btn btn-warning">
						Get Screened <i class="icon-share-alt"></i>
					</a>
				</div>
			</section>

			<!-- Renal Disease Library -->
			<section class="library col-md-4 cf">
				<header>
					<h3>Renal Disease Library</h3>
				</header>
				<p class="text90">
					Repudiandae, quo, iure dignissimos architecto error placeat quia vitae pariatur reiciendis mollitia a deleniti maiores possimus ab repellendus ipsum consequatur ullam esse?
				</p>
				<div class="pull-right">
					<a href="<?php echo home_url('renal-disease-library') ?>" class="btn btn-warning">
						Visit Library <i class="icon-share-alt"></i>
					</a>
				</div>
			</section>

			<!-- Get Invoved -->
			<section class="get-involved col-md-4 cf">
				<header>
					<h3>Get Involved</h3>
				</header>
				<p class="text90">
					sit amet, consectetur adipisicing elit. Repellendus, ab, distinctio voluptate voluptas reprehenderit dicta fuga sint reiciendis soluta laborum dignissimos optio unde qui voluptatum
				</p>
				<div class="pull-right">
					<a href="<?php echo home_url('get-involved/volunteer') ?>" class="btn btn-warning">
						Find out more <i class="icon-share-alt"></i>
					</a>
				</div>
			</section>

		</div>
		<!-- end .row -->

		<hr>

		<div class="partners text-center">
			<header>
				<h2>Our Partners</h2>
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