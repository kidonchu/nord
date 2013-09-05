<?php get_header() ?>
<div class="container">

	<div class="content-container with-padding-top with-padding-bottom">

		<div class="row min-height-400">

			<!-- navigation -->
			<div class="sidebar-container col-md-3 border-right no-padding-right">

				<?php include('sidebar-resources.php') ?>

			</div>

			<div class="content col-md-8 with-padding-left">

				<div class="border-bottom">
					<ul class="breadcrumb">
						<li><a href="<?php echo home_url() ?>">Home</a> <span class="divider">/</span></li>
						<li class="active">Resources</li>
					</ul>
				</div>

				<header class="pageHeader">
					<h1>What should be on this page?</h1>
				</header>
				<!-- <script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Fwww.sciencedaily.com%2Frss%2Fhealth_medicine%2Fkidney_disease.xml&chan=title&num=6&desc=1&date=y&targ=y&utf=y"  charset="UTF-8" type="text/javascript"></script> -->

<!-- 				<div class="more-btn pull-right">
					<a href="http://www.sciencedaily.com/news/health_medicine/kidney_disease" class="btn btn-link">View more articles on ScienceDaily.com <i class="icon-external-link"></i></a>
				</div>
 -->

			</div>

		</div>
		<!-- end .row -->

	</div>
	<!-- end .content-container -->

</div>
<?php get_footer(); ?>