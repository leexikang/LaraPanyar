

var main = function(){

	$(".datepicker").each(function(){
		$(this).datepicker({dateFormat: "yy-mm-dd"});
	});

	$(".timepicker").each(function(){
		$(this).timepicker();
	});
}

$(document).ready(main);