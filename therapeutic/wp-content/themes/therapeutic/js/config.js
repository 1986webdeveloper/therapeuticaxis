// JavaScript Document

$(document).ready(function(){
	//CSS Fixes
	$(".mainNav li:last-child").addClass("last");	
	if (navigator.appVersion.indexOf("Mac") !=-1)
		$(".mainNav li:last-child a span").css("padding-right", "9px");
	// ReSponsIVE EQUAL HEIGHT 

equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('#content .box');
});


$(window).resize(function(){
  equalheight('#content .box');
});

	//mobile menu
$(".navbar-toggle").click(function(){
            $('.navbar-toggle').toggleClass('toggled');
            $('.mainNav ul').slideToggle();
            $('.mainNav ul').toggleClass('in');
  });
//sidebar
$(".hidden-list").click(function(){
            if($('.arrow').hasClass('arrow')){
              $('.arrow').addClass('up-arrow').removeClass('arrow');
            }
            else{
              $('.up-arrow').addClass('arrow').removeClass('up-arrow');
            }
            $('.sidebar-list').slideToggle();
            $('.sidebar-list').toggleClass('in');
  });
//blog sidebar
$(".blog-list h3").click(function(){
  var wnwidth = $(window).width();
  if(wnwidth < 479){
        if($(this).find('span').hasClass('arrow')){
              $(this).find('span').addClass('up-arrow').removeClass('arrow');
            }
            else {
              $(this).find('span').addClass('arrow').removeClass('up-arrow');
            }
            $(this).siblings('.blog-list ul').slideToggle();
            $(this).toggleClass('in');
  }
        
  });
$(".tags h3").click(function(){
    var wnwidth = $(window).width();
  if(wnwidth < 767){
    $(this).siblings('.tags ul').slideToggle('slow');
    $(this).toggleClass('less');
  }
    });
	 
});