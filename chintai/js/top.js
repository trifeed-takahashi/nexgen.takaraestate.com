

jQuery(document).ready(function(){	




});/* ready */

$(window).on('load resize', function(){
topimage_container_height();
});

topimage_container_height();

function topimage_container_height(){
		var h1 = jQuery('#menu1').height();
		var h2 = jQuery('#menu2').height();
		var wh = window.innerHeight ? window.innerHeight: $(window).height();
		var h3 = wh-h1-h2;
		$(".topimage_item").css("height",h3+"px");
}




