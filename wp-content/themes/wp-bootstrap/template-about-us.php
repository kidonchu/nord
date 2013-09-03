<?php
/**
* Template Name: About Us
*/
?>
<?php get_header() ?>
<div class="container">

	<div class="content-container with-padding-top with-padding-bottom">

		<div class="row min-height-400">

			<!-- navigation -->
			<div class="col-md-3 border-right min-height-700 no-padding-right">

				<?php include('sidebar-about-us.php') ?>

			</div><!-- end span -->

			<div class="col-md-8 with-padding-left">

				<?php if (have_posts()) : while (have_posts()) : the_post() ?>

				<div class="border-bottom">
					<ul class="breadcrumb">
						<li><a href="<?php echo home_url() ?>">Home</a> <span class="divider"></span></li>
						<li><a href="<?php echo home_url('about-us') ?>">About Us</a> <span class="divider"></span></li>
						<li class="active"><?php the_title() ?></li>
					</ul>
				</div>

				<article id="post-<?php the_ID() ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="pageHeader">
						<h1 itemprop="headline"><?php the_title() ?></h1>
					</header>

					<section class="post_content clearfix" itemprop="articleBody">

						<?php the_content() ?>

					</section>

				</article> <!-- end article -->

				<?php endwhile ?>
				<?php endif ?>

			</div><!-- end span -->

		</div>
		<!-- end .row -->

	</div>
	<!-- end .content-container -->

</div>
<!-- end container -->

<?php get_footer(); ?>