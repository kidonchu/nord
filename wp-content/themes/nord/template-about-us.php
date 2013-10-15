<?php
/**
 * Template Name: About Us
 */
?>
<?php get_header() ?>

	<div class="row">
		<div class="col-md-3 col-sm-4">
			<div class="sidebar">
				<?php get_sidebar('about-us') ?>
			</div>
		</div>
		<div class="col-md-9 col-sm-8">

			<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p class="breadcrumbs">','</p>');
			} ?>

			<?php while (have_posts()) : the_post() ?>

				<?php get_template_part('content', 'page') ?>

			<?php endwhile ?>

		</div>
	</div>

<?php get_footer() ?>
