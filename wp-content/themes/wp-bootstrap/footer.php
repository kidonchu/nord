<div class="container">
	<footer class="footer" role="contentinfo">
		<div class="footer-top">
			<div class="row">
				<div class="col-md-3">
					<ul>
						<li class="title">connect</li>
						<li><a href="<?php echo home_url('about-us/contact-us') ?>">contact info</a></li>
						<!-- <li><a href="https://www.facebook.com/NORDorg" target="_blank"><i class="icon-facebook-sign icon-white"></i> facebook</a></li> -->
						<!-- <li><a href="#" target="_blank"><i class="icon-twitter icon-white"></i> twitter</a></li> -->
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li class="title">resources</li>
						<li><a href="<?php echo home_url('resources/renal-disease') ?>">renal diease</a></li>
						<li><a href="<?php echo home_url('resources/resource-links') ?>">links</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li class="title">get involved</li>
						<li><a href="<?php echo home_url('get-involved/donate') ?>" class="text-emphasize">donate</a></li>
						<li><a href="<?php echo home_url('get-involved/volunteer') ?>">volunteer</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li class="title">about us</li>
						<li><a href="<?php echo home_url('about-us/mission') ?>">our mission</a></li>
						<li><a href="<?php echo home_url('about-us/program') ?>">our program</a></li>
						<li><a href="<?php echo home_url('about-us/media') ?>">on media</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<ul class="list-inline">
				<li><a href="<?php echo home_url('sitemap') ?>">Site Map</a></li>
				<li>|</li>
				<li><a href="<?php echo home_url('disclaimer') ?>">Disclaimer, Copyright, Service mark</a></li>
			</ul>
			<p>
				&copy; <?php echo date('Y') ?> <?php bloginfo('name') ?><br>
				A.P.E.R. Awareness, Prevention, Education and Research!<br>
				11018 Aqua Vista Street #19, Studio City, CA 91602<br>
				mvj4nord@stop-esrd.org
			</p>
		</div>
	</footer>
</div>
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
<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>