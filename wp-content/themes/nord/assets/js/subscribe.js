jQuery(document).ready(function($) {

	var popover_options = {
		placement: 'top',
		html: true,
	};

	$('.form-subscribe').submit(function (e)
	{
		e.preventDefault();

		var email = $('#email').val();

		if ( ! email)
		{
			popover_options.content = '<span class="text-danger">E-mail address field is empty</span>';
			$('#email').popover('destroy').popover(popover_options).popover('show');
			return;
		}

		$.ajax({
			url: subscribe.ajaxUrl,
			type: 'post',
			dataType: 'json',
			data: {
				'action': 'subscribe',
				'email': email,
			},
		})
		.done(function(data) {
			if (data.success)
			{
				$('.form-subscribe').slideUp();
				$('.one-more-step').slideDown();
			}
			else
			{
				popover_options.content = '<span class="text-danger">' + data.message + '</span>';
				$('#email').popover('destroy').popover(popover_options).popover('show');
			}
		})
		.fail(function() {
			popover_options.content = '<span class="text-danger>Failed due to system error.</span>';
			$('#email').popover('destroy').popover(popover_options).popover('show');
		});
	});
});