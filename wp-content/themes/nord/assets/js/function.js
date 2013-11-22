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

    // main navigation toggle
    $(function() {
        var toggle     = $('.resp-nav-toggle'),
            menu       = $('.resp-nav-ul'),
            menuHeight = menu.height();

        toggle.on('click', function() {
            menu.slideToggle();
        });

        $(window).resize(function(){
            var w = $(this).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
});