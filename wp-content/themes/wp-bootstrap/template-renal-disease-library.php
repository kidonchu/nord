<?php
/**
 * Template Name: Renal Disease Library
 */
?>
<?php get_header() ?>
<div class="content-container container-fluid">

	<div class="row-fluid">

		<!-- navigation -->
		<div class="span3">

			<?php include('sidebar-renal-disease-library.php') ?>

		</div><!-- end span -->

		<div class="span9">


			<?php if (have_posts()) : while (have_posts()) : the_post() ?>

			<div class="border-bottom">
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url() ?>">Home</a> <span class="divider">/</span></li>
					<li><a href="<?php echo home_url('renal-disease-library') ?>">Renal Disease Library</a> <span class="divider">/</span></li>
					<li class="active"><?php the_title() ?></li>
				</ul>
			</div>

			<article id="post-<?php the_ID() ?>" <?php post_class('clearfix') ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<header class="pageHeader">
					<h1 itemprop="headline"><?php the_title() ?></h1>
				</header>

				<section class="post_content clearfix" itemprop="articleBody">

					<?php the_content() ?>

				</section>

			</article> <!-- end article -->

			<?php endwhile ?>

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

			<?php endif ?>

		</div>
	</div>
</div>
<?php get_footer() ?>