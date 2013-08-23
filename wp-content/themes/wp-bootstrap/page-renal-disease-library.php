<?php get_header(); ?>
<div class="content-container container-fluid">

	<header class="pageHeader border-bottom">
		<h1>RENAL DISEASE LIBRARY</h1>
	</header>

	<div class="row-fluid">

		<!-- navigation -->
		<div class="span3">

			<?php include('sidebar-renal-disease-library.php') ?>

		</div><!-- end span -->

		<div class="span9">

			<header class="pageHeader">
				<h1>Recent News on Kidney</h1>
			</header>
			<script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fwww.sciencedaily.com%2Frss%2Fhealth_medicine%2Fkidney_disease.xml&chan=title&num=6&desc=1&date=y&targ=y&utf=y"  charset="UTF-8" type="text/javascript"></script>

			<div class="more-btn pull-right">
				<a href="http://www.sciencedaily.com/news/health_medicine/kidney_disease" class="btn btn-link">View more articles on ScienceDaily.com <i class="icon-external-link"></i></a>
			</div>

				<?php query_posts('cat=4') ?>
				<?php if (have_posts()) : while (have_posts()) : the_post() ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					<header>
							<h1><?php the_title(); ?></h1>
							<?php echo get_post_meta($post->ID, 'custom_tagline' , true) ?>
					</header>

					<section class="post_content">

						<?php the_excerpt() ?>

					</section> <!-- end article header -->

					<footer>

						<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>

					</footer> <!-- end article footer -->

				</article> <!-- end article -->

				<?php endwhile; ?>
				<?php endif; ?>

		</div><!-- end span -->

	</div>

</div>
<?php get_footer(); ?>