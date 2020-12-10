$(function() {
	$('.product img').on('mouseover', function() {
		if ($(window).width() >= 768) {
			$('body').append($('<img id="preview" src="' + $(this).attr('src') + '">'));
			$('#preview').css('display', 'none')
			.css('position', 'absolute')
			.css('border-radius', '15px')
			.css('max-width', '40%')
			.css('max-height', '60%')
			.css('border', 'solid 3px goldenrod')
			.css('box-shadow', '0px 3px 6px rgba(0, 0, 0, 0.2)')
			.css('z-index', '3')
			.delay(300)
			.fadeIn(200);
		}
	});

	$('.product img').on('mousemove', function(e) {
		if ($(window).width() >= 768) {
			$('#preview').css("top", e.pageY - $('#preview').height() / 2);

			if (e.pageX > ($(window).width() / 2)) {
				$('#preview').css("left", e.pageX - 75 - $('#preview').width());
			} else {
				$('#preview').css("left", e.pageX + 75);
			}
		}
	});

	$('.product img').on('mouseleave', function() {
		if ($(window).width() >= 768) $('#preview').remove();
	});
});