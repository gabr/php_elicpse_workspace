$(document).ready(function() {
	$("#przycisk").click(function() {
		if ($("#lewa").css("width") == "740px") {
			$("#lewa").animate({width: '140'});
			$("#prawa").animate({width: '740'});
		} else {
			$("#lewa").animate({width: '740'});
			$("#prawa").animate({width: '140'});
		}
	});
});