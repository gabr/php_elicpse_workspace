$(document).ready(function() {
	var height = $("#footer").offset().top - $("#menu-body").offset().top;
	
	console.log("menu pos: "+$("#menu-body").offset().top);
	console.log("footer pos: "+$("#footer").offset().top);
	console.log("roznica: "+height);
	
	console.log("menu-body bot: "+$("#menu-body").height());
	
	$("#menu").css("height", height);
    $("#menu-body").css("height", height);
});