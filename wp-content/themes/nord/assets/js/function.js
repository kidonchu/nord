jQuery(document).ready(function($) {
	var path = $(location).attr('href').split('/');
	path = path[path.length - 1]; // get second last uri which is page name
	$('.main-navigation').find('.main-nav-link').each(function()
	{
		var target = $(this).data('target');
		if (target == path)
		{
			$(this).addClass('active');
		}
	});
	$('.sidebar-nav-link').each(function()
	{
		var target = $(this).data('target');
		console.log(path);
		if (target == path || target == (path + "/"))
		{
			$(this).addClass('active');
		}
	});
});