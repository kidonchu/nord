<?php get_header() ?>
<div class="container">

	<div class="content-container with-padding-top with-padding-bottom min-height-400">

		<div class="row with-padding-left with-padding-right">

			<!-- navigation -->
			<div class="col-md-12 text-center">

				<header>
					<h1><?php _e("Epic 404 - Article Not Found","bonestheme"); ?></h1>
				</header>
				<p><?php _e("This is embarassing. We can't find what you were looking for.","bonestheme"); ?></p>

				<hr>

				<p><?php _e("Whatever you were looking for was not found, but maybe try looking again or search using the form below.","bonestheme"); ?></p>

				<div class="spacer20"></div>

				<?php get_search_form() ?>

			</div>

		</div>

	</div>

</div>
<?php get_footer() ?>