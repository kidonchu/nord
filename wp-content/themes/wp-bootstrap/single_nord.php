<?php
/*
Template Name: Single
 */
?>
<?php get_header() ?>

	<div id="content" class="container-fluid">

		<div class="row-fluid">

			<div class="span8 clearfix" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post() ?>

				<article id="post-<?php the_ID() ?>" <?php post_class('clearfix') ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header>

						<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title() ?></h1></div>

					</header> <!-- end article header -->

					<section class="post_content clearfix" itemprop="articleBody">

						<?php the_content() ?>

						<?php wp_link_pages() ?>

					</section> <!-- end article section -->

				</article> <!-- end article -->

				<?php endwhile; ?>

				<?php else : ?>

				<article id="post-not-found">
						<header>
							<h1><?php _e("Not Found", "bonestheme") ?></h1>
						</header>
						<section class="post_content">
							<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme") ?></p>
						</section>
						<footer>
						</footer>
				</article>

				<?php endif; ?>

			</div> <!-- end #main -->

			<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">

				<?php get_sidebar() // sidebar 1 ?>

			</div>

		</div>

	</div><!-- end #content -->
<?php get_footer() ?>