<?php get_header() ?>
<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-4">
			<div class="sidebar">
				<?php get_sidebar('get-involved') ?>
			</div>
		</div>
		<div class="col-md-9 col-sm-8">

			<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p class="breadcrumbs">','</p>');
			} ?>

			<article id="post-<?php the_ID() ?>" <?php post_class('entry') ?>>

				<h1 class="entry-title"><?php the_title() ?></h1>

				<div class="row">
					<div class="col-md-8">
						<div class="entry-content">

							<h4>
								Sign Up for the E-Mail Newsletter
							</h4>

							<p>
								You will receive one e-mail every two - three months. An e-mail message contains an e-newsletter containing useful information on renal disease.
							</p>

							<form action="<?php echo admin_url('admin-ajax.php') ?>" class="form-horizontal form-subscribe clearfix" accept-charset="utf-8" role="form" method="post">
								<label for="email" class="col-md-3 control-label">E-mail address</label>
								<div class="col-md-5">
									<input type="email" class="form-control" name="email" id="email">
								</div>
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
								</div>
							</form>

							<div class="one-more-step" style="display:none">
								<h5 class="text-success">ALMOST THERE!</h5>
								<p>
									<strong>
										<mark>One More Step</mark> : Check Your Email to Confirm the Subscription
									</strong>
								</p>
								<p>
									After you enter your email address in the box on this page, the mailing list server will send you a message to confirm that you actually want to receive the newsletter. This is an extra opt-in step to reduce spam and unwanted email pranks.
								</p>
								<ul>
									<li> Please go and check your email and <strong>click the link in the confirmation message</strong>.</li>
									<li> If you do not respond, your subscription <strong>will not be activated</strong>.</li>
									<li>
										Look for an email from "mvj4nord@stop-esrd.org" with the subject <strong>"NORD Newsletter: Please Confirm Subscription"</strong>
										<ul>
											<li>
												This confirmation mail may be sitting in your spam folder, so please check there if you don't see it in the inbox. We don't send spam, but your email program can't know this until you start reading the newsletter.)
											</li>
										</ul>
									</li>
								</ul>
							</div>


							<p>
								<strong>Privacy policy: </strong>
								Email addresses are never sold or given out to anybody.
							</p>
							<p>
								The mailing list is password-protected and is only used for one-way announcements from National Organization for Renal Disease. No spam, no discussion.
							</p>

							<h5>Whitelist Message Sender</h5>

							<p>
								The newsletters will be sent with <strong>mvj4nord</strong> @ <strong>stop-esrd.org</strong> as the "from" address.
							</p>
							<p>
								If you use a spam filter, please add this address to the whitelist to ensure that you will receive the newsletter.
							</p>

							<h5>How to Unsubscribe</h5>

							<p>
								At the bottom of each message from this mailing list is a special webpage address that is encoded with your subscriber information. Simply click this link to get a page that will remove you from the mailing list.
							</p>
							<p>
								Since this special unsubscribe address is different for each member of the list, we cannot print it here. Instead, look at the bottom of the latest email message you received from the list. You can also go to this <a href="http://stop-esrd.us3.list-manage.com/unsubscribe?u=cf737b1673ac72662c67cc757&id=7e8a065dab" target="_blank">generic link to unsubscribe</a>.
							</p>

						</div><!-- .entry-content -->
					</div>
				</div>

			</article><!-- #post-## -->

		</div>
	</div>
</div>
<?php get_footer() ?>

