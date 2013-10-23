		</div><!-- .content -->

		<footer class="footer" role="contentinfo">
			<ul class="footer-nav list-inline">
				<li><a href="<?php echo home_url('get-involved/donate') ?>">DONATE</a></li>
				<li><a href="<?php echo home_url('get-involved/subscribe') ?>">subscribe</a></li>
				<li><a href="<?php echo home_url('get-involved/volunteer') ?>">volunteer</a></li>
				<li><a href="<?php echo home_url('about-us/contact-us') ?>">contact</a></li>
				<li>|</li>
				<li><a href="<?php echo home_url('sitemap') ?>">sitemap</a></li>
				<li><a href="<?php echo home_url('policy') ?>">policy</a></li>
			</ul>
			<div class="social-icons">
				<ul class="list-inline social-icon-list">
					<li class="social-icon-item"><a target="_blank" class="social-icon-link social-icon-facebook" href="http://facebook.com/NORDorg">facebook</a></li>
					<li class="social-icon-item"><a target="_blank" class="social-icon-link social-icon-twitter" href="http://twitter.com/N_0_R_D">twitter</a></li>
					<li class="social-icon-item"><a class="social-icon-link social-icon-subscribe" href="<?php echo home_url('get-involved/subscribe') ?>">subscribe</a></li>
				</ul>
			</div>
			<p class="copyright">
				&copy; <?php echo date('Y') ?> <?php bloginfo('name') ?><br>
				A.P.E.R. Awareness, Prevention, Education, and Research<br>
				11018 Aqua Vista Street #19, Studio City, CA 91602<br>
				mvj4nord@stop-esrd.org
			</p>
		</footer>
	</div><!-- .container -->

<?php wp_footer() ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$('form.subscribe').submit(function(e){
	e.preventDefault();

	var name  = $('input[name=name]', this).val();
	var email = $('input[name=email]', this).val();
	var url   = $(this).attr('action');

	$.post(url, {name: name, email: email}, function(html)
	{
		console.log(html);
		if (html.length > 0)
		{
			alert('success');
		}
	});
});

/* Set active class to sidebar item */
var path = $(location).attr('href').split('/');
path = path[path.length - 2]; // get second last uri which is page name
$('.sidebar').find('.post-link').each(function()
{
	var target = $(this).data('uri');
	if (target == path)
	{
		$(this).addClass('active');
	}
});

$('.sidebar').on('click', '.post-link', function(){
	var topic = $(this).closest('.topic');

	// toggle topic sub-list
	topic.find('ul').slideToggle('fast');

	// toggle caret icon
	var icon = topic.find('i.icon-caret');
	if (icon.hasClass('icon-caret-right'))
	{
		icon.removeClass('icon-caret-right').addClass('icon-caret-down');
	}
	else
	{
		icon.removeClass('icon-caret-down').addClass('icon-caret-right');
	}
});

var content_height = $('.content').height();
var sidebar_height = $('.sidebar-container').height();
if (content_height > sidebar_height)
{
	$('.sidebar-container').height(content_height);
}
else
{
	$('.content').height(sidebar_height);
}
</script>

</body>
</html>