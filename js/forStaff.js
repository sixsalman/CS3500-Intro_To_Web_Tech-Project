$(function() {
	$("#empPass").on("keyup", checkIdPass);
	$("#empId").on("keyup", checkIdPass);

	$("#prodName").on("keyup", function() {
		$.ajax({
			url: "../php/getProdStock.php",
			data: { prodName: $('#prodName').val() },
			type: "POST",
			success: function(data) {
				if (data !== "") {
					$('#prodStock').text(data);
					$('#prodStock').slideDown(500);
				} else {
					$('#prodStock').slideUp(500);
				}
			}
		});
	});

	$('#loginDiv a').on("click", function() {
		$('#passChangeDiv').slideToggle(500);
	});

	$('#passChangeDiv button').on("click", function() {
		if ($('#newPass').val() !== "") {
			$.ajax({
				url: "../php/changePass.php",
				data: { empId: $('#empId').val(), newPass: $('#newPass').val() },
				type: "POST",
				success: function() {
					$('#empPass').val("");
					checkIdPass();
				}
			});
		}
	});

	function checkIdPass() {
		$.ajax({
			url: "../php/getEmpName.php",
			data: { empId: (($('#empId').val() == "") ? 0 : $('#empId').val()), empPass: $('#empPass').val() },
			type: "POST",
			success: function(data) {
				if (data !== "") {
					$('#empName').text("Welcome " + data + "!");
					$('#loginDiv').slideDown(500);
				} else {
					$('#loginDiv').slideUp(500);
					$('#passChangeDiv').slideUp(500);
					$('#newPass').val("");
					$('#prodStock').slideUp(500);
					$('#prodName').val("");
				}
			}
		});
	}
});