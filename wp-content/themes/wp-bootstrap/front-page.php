<?php get_header() ?>

<div class="main-feature-container">
	<div class="content-container container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
						<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item"><img src="http://lorempixel.com/g/1200/600/people/9" alt="image0"></div>
						<div class="item"><img src="http://lorempixel.com/g/1200/600/people/6" alt="image1"></div>
						<div class="item"><img src="http://lorempixel.com/g/1200/600/people/5" alt="image2"></div>
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
			<div class="span4">
				<h2>
					Our Mission
				</h2>
				<p>
					Our mission is to change the face of kidney disease by aggressively promoting good health though education, disease prevention, and follow up.
				</p>
				<button class="btn btn-link pull-right">Read mord...</button>
			</div>
		</div>
	</div>
</div>

<div class="spacer10"></div>

<div class="content-container container-fluid">

	<div class="row-fluid">

		<div class="span6">
			<img class="img-polaroid" src="http://lorempixel.com/500/250/people/1" alt="">
			<header>
				<h2>Screening &amp; Diagnostic Center</h2>
			</header>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, quo, iure dignissimos architecto error placeat quia vitae pariatur reiciendis mollitia a deleniti maiores possimus ab repellendus ipsum consequatur ullam esse?
			</p>
			<div class="pull-right">
				<a href="<?php echo home_url('get-screened') ?>" class="btn ">
					Get Screened <i class="icon-share-alt"></i>
				</a>
			</div>
		</div>

		<div class="span6">
			<img class="img-polaroid" src="http://lorempixel.com/500/250/people/10" alt="">
			<header>
				<h2>Education Center with Library</h2>
			</header>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, quo, iure dignissimos architecto error placeat quia vitae pariatur reiciendis mollitia a deleniti maiores possimus ab repellendus ipsum consequatur ullam esse?
			</p>
			<div class="pull-right">
				<a href="<?php echo home_url('renal-disease-library') ?>" class="btn ">
					Visit Library <i class="icon-share-alt"></i>
				</a>
			</div>
		</div>

	</div>

	<hr>

	<div class="row-fluid">

		<div class="span4">
			<img class="img-polaroid" src="http://lorempixel.com/500/250/people/8" alt="">
			<header>
				<h3>Volunteer</h3>
			</header>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, aliquid, doloribus hic dicta nostrum
			</p>
			<div class="pull-right">
				<a href="<?php echo home_url('get-involved/volunteer') ?>" class="btn ">
					Find out more <i class="icon-share-alt"></i>
				</a>
			</div>
		</div>

		<div class="span4">
			<img class="img-polaroid" src="http://lorempixel.com/500/250/sports/3" alt="">
			<header>
				<h3>Media</h3>
			</header>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, aliquid, doloribus hic dicta nostrum
			</p>
			<div class="pull-right">
				<a href="<?php echo home_url('about-us/media') ?>" class="btn ">
					Find out more <i class="icon-share-alt"></i>
				</a>
			</div>
		</div>

		<div class="span4">
			<img class="img-polaroid" src="http://lorempixel.com/500/250/people/4" alt="">
			<header>
				<h3>Donate</h3>
			</header>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, aliquid, doloribus hic dicta nostrum
			</p>
			<div class="pull-right">
				<a href="<?php echo home_url('get-involved/donate') ?>" class="btn ">
					Find out more <i class="icon-share-alt"></i>
				</a>
			</div>
		</div>

	</div>

	<hr>

	<div class="row-fluid">
		<header class="text-center">
			<h2>Our Partners</h2>
		</header>
		<div class="spacer20"></div>
		<div class="span10 offset1">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/library/img/partner_logos.png">
		</div>
	</div>

</div>
<?php get_footer() ?>