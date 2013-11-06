<?php get_header() ?>

<!-- ===================================================================== -->
<!-- ============================= 404 PAGE ============================== -->
<!-- ===================================================================== -->
<div class="container">

	<div class="spacer5"></div>

	<div class="text-center">

		<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'nord' ) ?></h1>

		<div class="entry-content">

			<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nord' ); ?></p>

			<?php get_search_form(); ?>

		</div>

	</div>

	<div class="spacer5"></div>

</div>

<?php get_footer(); ?>