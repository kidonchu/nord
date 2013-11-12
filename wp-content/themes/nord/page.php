<?php get_header() ?>

<!-- ===================================================================== -->
<!-- =========================== DEFAULT PAGE ============================ -->
<!-- ===================================================================== -->
<div class="container">

	<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p class="breadcrumbs">','</p>');
	} ?>

	<h1 class="entry-title"><?php the_title() ?></h1>

	<div class="entry-content">

		<?php the_content() ?>

	</div>

</div>

<?php get_footer() ?>