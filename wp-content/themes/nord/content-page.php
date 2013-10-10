<article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>

	<h1 class="entry-title">
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
	</h1><!-- entry-title -->

	<div class="row">
		<div class="col-md-8">
			<div class="entry-content">
				<?php the_content( __('Continue reading <span class="meta-nav">&rarr;</span>', 'nord' )) ?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->
