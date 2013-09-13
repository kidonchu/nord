<?php
/**
 * Template Name: Resources
 */
?>
<?php get_header() ?>
<div class="container">

	<div class="content-container">

		<div class="row">

			<!-- navigation -->
			<div class="sidebar-container col-md-3">

				<?php include('sidebar-resources.php') ?>

			</div>

			<div class="content col-md-8">

				<?php if (have_posts()) : while (have_posts()) : the_post() ?>

				<div class="border-bottom">
					<ul class="breadcrumb">
						<li><a href="<?php echo home_url() ?>">Home</a> <span class="divider"></span></li>
						<li><a href="<?php echo home_url('resources') ?>">Resources</a> <span class="divider"></span></li>
						<li class="active"><?php the_title() ?></li>
					</ul>
				</div>

				<article id="post-<?php the_ID() ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="pageHeader">
						<h1 itemprop="headline"><?php the_title() ?></h1>
					</header>

					<section class="post_content clearfix" itemprop="articleBody">
						<div class="text">
							<?php the_content() ?>
						</div>
					</section>

				</article>

				<?php endwhile ?>
				<?php endif ?>

			</div>

		</div>
		<!-- end row -->

	</div>
	<!-- end .content-container -->

</div>
<!-- end .container -->
<?php get_footer() ?>