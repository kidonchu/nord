<?php get_header() ?>

	<!-- category.php -->
	<div class="row">
		<div class="col-md-3 col-sm-4">
			<div class="spacer2"></div>
			<div class="sidebar">
				<?php if (is_active_sidebar('blog')): ?>
					<?php dynamic_sidebar('blog') ?>
				<?php endif ?>
			</div>
		</div>
		<div class="col-md-9 col-sm-8">
			<div class="spacer2"></div>

			<div class="row">
				<div class="col-md-8">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

						<article id="post-<?php the_ID() ?>" <?php post_class('summary') ?>>

							<div class="summary-date"><?php the_time(get_option('date_format')) ?></div>
							<h3 class="summary-title">
								<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
							</h3>
							<?php the_excerpt() ?>

						</article><!-- #post-## -->

						<?php endwhile; ?>

					<?php endif; ?>
					<nav role="navigation" class="paging-navigation cf">
						<h1 class="screen-reader-text"><?php _e( 'Page navigation', 'nord' ); ?></h1>
						<?php if ( get_next_posts_link() ) : ?>
							<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&larr;</span> Older posts', 'nord')) ?></div>
						<?php endif; ?>

						<?php if ( get_previous_posts_link() ) : ?>
							<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&rarr;</span>', 'nord')) ?></div>
						<?php endif; ?>
					</nav>
				</div>
			</div>
		</div>
	</div>

<?php get_footer() ?>
