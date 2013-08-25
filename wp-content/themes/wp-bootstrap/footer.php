	</div><!-- end #main -->
</div><!-- end #wrap -->
<footer class="footer-main" role="contentinfo">
	<div class="container-fluid">
		<div class="footer-top">
			<div class="row-fluid">
				<div class="span3">
					<ul>
						<li class="title">get involved</li>
						<li><a href="<?php echo home_url('get-involved/donate') ?>" class="text-emphasize">donate</a></li>
						<li><a href="<?php echo home_url('get-involved/volunteer') ?>">volunteer</a></li>
					</ul>
				</div>
				<div class="span3">
					<ul>
						<li class="title">get to know us</li>
						<li><a href="https://www.facebook.com/NORDorg" target="_blank"><i class="icon-facebook-sign icon-white"></i> facebook</a></li>
						<li><a href="#" target="_blank"><i class="icon-twitter icon-white"></i> twitter</a></li>
					</ul>
				</div>
				<div class="span3">
					<ul>
						<li class="title">about us</li>
						<li><a href="<?php echo home_url('about-us/mission') ?>">our mission</a></li>
						<li><a href="<?php echo home_url('about-us/program') ?>">our program</a></li>
						<li><a href="<?php echo home_url('about-us/media') ?>">on media</a></li>
					</ul>
				</div>
				<div class="span3">
					<ul>
						<li class="title">connect</li>
						<li><a href="<?php echo home_url('about-us/contact-us') ?>">contact info</a></li>
						<li>+1.818.769-6245</li>
						<li>nord4kidneydisease@yahoo.com</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<p class="text-center">
				11018 Aqua Vista Street #19 •
				Studio City, CA 91602
			</p>
			<p>
				&copy; <?php echo date('Y') ?> <?php bloginfo('name') ?>. All rights reserved.
			</p>
			<p>
				<a href="#">Disclaimer, Copyright, and Service mark information</a>
			</p>
		</div>
	</div>
</footer>
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

$('.subscription-form-container a.no').click(function(e){
	e.preventDefault();
	$('.subscription-form-container').toggle(1000);
});

$('.topic').on('click', 'h4', function(){
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
</script>
<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>