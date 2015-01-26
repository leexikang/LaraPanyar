

var main = function(){

	$(".datepicker").each(function(){
		$(this).datepicker();
	});

	$(".timepicker").each(function(){
		$(this).timepicker();
	});
}

$(document).ready(main);