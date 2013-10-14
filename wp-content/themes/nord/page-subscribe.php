<?php get_header() ?>

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

				<h1 class="entry-title">
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a>
				</h1><!-- entry-title -->

				<div class="row">
					<div class="col-md-8">
						<div class="entry-content">

							<h4>
								Sign Up for the E-Mail Newsletter
							</h4>

							<p>
								You will receive one e-mail every two - three months. An e-mail message contains an e-newsletter containing useful information on renal disease.
							</p>


							<form action="#" class="form-horizontal" accept-charset="utf-8" role="form">
								<div class="form-group">
									<label for="firstName" class="col-md-3 control-label">First Name</label>
									<div class="col-md-4">
										<input type="text" class="form-control" name="firstName" id="firstName">
									</div>
								</div>
								<div class="form-group">
									<label for="lastName" class="col-md-3 control-label">Last Name</label>
									<div class="col-md-4">
										<input type="text" class="form-control" name="lastName" id="lastName">
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-md-3 control-label">E-mail</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" id="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</form>

							<div class="spacer2"></div>

							<p>
								<strong>Privacy policy: </strong>
								Email addresses are never sold or given out to anybody.
							</p>
							<p>
								The mailing list is password-protected and is only used for one-way announcements from National Organization for Renal Disease. No spam, no discussion.
							</p>
							<p>
								<strong>
									<span class="mark">One More Step </span>: Check Your Email to Confirm the Subscription
								</strong>
							</p>
							<p>
								After you enter your email address in the box on this page, the mailing list server will send you a message to confirm that you actually want to receive the newsletter. This is an extra opt-in step to reduce spam and unwanted email pranks.
							</p>
							<ul>
								<li> Please go and check your email and <strong>click the link in the confirmation message</strong>.</li>
								<li> If you do not respond, your subscription <strong>will not be activated</strong>.</li>
								<li>
									Look for an email from "subscribe@stop-esrd.org" with the subject <strong>"NORD: Please Confirm Subscription"</strong>
									<ul>
										<li>
											(This confirmation mail may be sitting in your spam folder, so please check there if you don't see it in the inbox. We don't send spam, but your email program can't know this until you start reading the newsletter.)
										</li>
									</ul>
								</li>
							</ul>

							Whitelist Message Sender

							The newsletters will be sent with alertbox @ nngroup.com as the "from" address.

							If you use a spam filter, please add this address to the whitelist to ensure that you will receive the newsletter.

							How to Unsubscribe

							At the bottom of each message from this mailing list is a special webpage address that is encoded with your subscriber information. Simply click this link to get a page that will remove you from the mailing list.

							Since this special unsubscribe address is different for each member of the list, we cannot print it here. Instead, look at the bottom of the latest email message you received from the list. You can also go to this generic link to unsubscribe .

							Sample Newsletter

							To: "Alertbox Announcement List"
							From: alertbox @ nngroup.com (Jakob Nielsen)

							Alertbox: Mobile Sites vs. Apps: The Coming Strategy Shift
							Mobile apps currently have better usability than mobile sites, but forthcoming changes will eventually make a mobile site the superior strategy.

							Jakob Nielsen's Alertbox for February 13:
							  > http://www.useit.com/alertbox/mobile-sites-apps.html

							  unsubscribe from this list | update subscription preferences

							Mailing List Host

							We use MailChimp to host this newsletter mailing list. It's reasonably priced (though not the very cheapest), and has much better usability than other mailing list services we investigated.

							</p>

						</div><!-- .entry-content -->
					</div>
				</div>

			</article><!-- #post-## -->

		</div>
	</div>

<?php get_footer() ?>
