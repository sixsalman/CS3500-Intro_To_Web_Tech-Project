$(function() {
	$("textarea").on("focus", function() {
		setFocusColor($(this));
	}).on("keyup", function() {
		$("#cLeft").text(280 - $(this).val().length);
		setFocusColor($(this));
	}).on("blur", function() {
		$("#cLeft").css("color", "grey");
	});

	function setFocusColor(tArea) {
		if ((280 - tArea.val().length) > 50) {
			$("#cLeft").css("color", "goldenrod");
		} else {
			$("#cLeft").css("color", "indianred");
		} 
	}
});