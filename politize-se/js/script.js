$(document).ready(function() {
	$('.green').addClass('sd0');
	$('.blue').addClass('sd1');
	$('.yellow').addClass('sd15');
});
	$("#open-box").click(function () {
		$(".pop-modal").css('display', 'block');
	});
	$("#hide-box").click(function () {
		$(".pop-modal").css('display', 'none');
	});
	$("#hide-x").click(function () {
		$(".pop-modal").css('display', 'none');
	});