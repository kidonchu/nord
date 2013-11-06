<h5 class="sidebar-title">About Us</h5>
<div class="sidebar-nav-toggle-wrapper">
	<button type="button" class="sidebar-nav-toggle-button" data-toggle="collapse" data-target=".sidebar-collapse">
		<span class="sr-only">Toggle navigation</span>
		Sub Menu
	</button>
</div>
<nav class="collapse navbar-collapse sidebar-collapse">
	<ul class="sidebar-navs">
		<li class="sidebar-nav">
			<a href="<?php echo esc_url(home_url('about-us/mission')) ?>" class="sidebar-nav-link" data-target="mission">
				Mission
				<small class="sidebar-nav-desc">Change the face of kidney desease</small>
			</a>
		</li>
		<li class="sidebar-nav">
			<a href="<?php echo esc_url(home_url('about-us/program')) ?>" class="sidebar-nav-link" data-target="program">
				Program
				<small class="sidebar-nav-desc">A.P.E.R.FECT solution</small>
			</a>
		</li>
		<li class="sidebar-nav">
			<a href="<?php echo esc_url(home_url('about-us/history')) ?>" class="sidebar-nav-link" data-target="history">
				History
				<small class="sidebar-nav-desc">Over <?php echo ((int)date('Y') - 1998) ?> years of helping clients</small>
			</a>
		</li>
		<li class="sidebar-nav">
			<a href="<?php echo esc_url(home_url('about-us/media')) ?>" class="sidebar-nav-link" data-target="media">
				Media
				<small class="sidebar-nav-desc">Award-winning documentary</small>
			</a>
		</li>
		<li class="sidebar-nav">
			<a href="<?php echo esc_url(home_url('about-us/partners')) ?>" class="sidebar-nav-link" data-target="partners">
				Partners
				<small class="sidebar-nav-desc">Sponsors and donors</small>
			</a>
		</li>
		<li class="sidebar-nav">
			<a href="<?php echo esc_url(home_url('about-us/contact-us')) ?>" class="sidebar-nav-link" data-target="contact-us">
				Contact
				<small class="sidebar-nav-desc">Contact us for more information</small>
			</a>
		</li>
<!-- 		<li class="sidebar-nav">
		<a href="<?php echo esc_url(home_url('about-us/archives')) ?>" class="sidebar-nav-link" data-target="archives">
			Archives
			<small class="sidebar-nav-desc">Brochure, E-newsletter, etc.</small>
		</a>
	</li>
	 -->
	</ul>
</nav>