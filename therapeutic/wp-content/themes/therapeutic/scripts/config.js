// JavaScript Document

$(document).ready(function(){

	//CSS Fixes
	$(".mainNav li:last-child").addClass("last");	
	if (navigator.appVersion.indexOf("Mac") !=-1)
		$(".mainNav li:last-child a span").css("padding-right", "9px");
	
	var counter = 0;
	var totalBox = $("#content .box").length;
	var maxHt = 0;
	$("#content .box").each(function(){
		counter ++;
		if(counter%3==0){
			$(this).addClass("thirdBox");
		}
		
		var _ht = $(this).height();
		if(maxHt < _ht)
			maxHt = _ht;
		});
	$("#content .box").each(function(){
		$(this).css("height", maxHt+"px");	
	});
	
});