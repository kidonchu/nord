<?php get_header() ?>

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

			<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p class="breadcrumbs">','</p>');
			} ?>

			<?php while (have_posts()) : the_post() ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>

					<header class="entry-header">

						<h1 class="entry-title">
							<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
						</h1><!-- entry-title -->

						<div class="entry-meta">
							<?php nord_posted_on(); ?>
						</div><!-- .entry-meta -->

					</header><!-- .entry-header -->

					<div class="row">

						<div class="col-md-8">

							<div class="entry-content">
								<?php the_content() ?>
							</div><!-- .entry-content -->

							<?php nord_content_nav('nav-below') ?>

							<?php
								if (comments_open() || '0' != get_comments_number())
									comments_template();
							?>

						</div><!-- .col -->

					</div><!-- .row -->

				</article><!-- #post-## -->

			<?php endwhile ?>

		</div><!-- .col -->

	</div><!-- .row -->

<?php get_footer() ?>