<article id="post-<?php the_ID() ?>" <?php post_class('summary') ?>>

	<div class="summary-date"><?php the_time(get_option('date_format')) ?></div>
	<h5 class="summary-title">
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
	</h5>

</article><!-- #post-## -->
