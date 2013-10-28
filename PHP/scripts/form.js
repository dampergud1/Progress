$('form.flipbox').on('submit', function() {
	var that = $(this),
		url = that.attr('action'),
		type = that.attr('method'),
		data = {};

	that.find('[name]').each(function(index, value) {
		var that = $(this),
			name = that.attr('name'),
			value = that.val();

			data[name] = value;
	});

	var content = $("#content");

	$.ajax({
		url: url,
		type: type,
		data: data,
		success: function(response) {
			if (response == 'false') {
				$(".flipbox").flippy({
					duration: "500",
					direction: "RIGHT",
					verso: content,
					onMidway: function() {
						$(".flipbox").removeClass('flipbox');
					}
				});
			} else {
				$( ".flipbox" ).effect( "shake" );
			}

			console.log(response);
		}
	});

return false;
});