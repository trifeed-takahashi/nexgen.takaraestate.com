

jQuery(document).ready(function(){	



});/* ready */

$(window).on('load resize', function(){
search_height();
});

function search_height(){
		var h1 = jQuery('#menu1').height();
		var wh = window.innerHeight ? window.innerHeight: $(window).height();
		var h_map = wh-h1;
		// $(".search").css("height",h_map+"px");
		$(".device-desktop .search_map iframe").css("height",h_map+"px");
		
		var h2 = jQuery('.device-desktop .filter_box').height();
		var h_list = wh-h1-h2;
		$(".device-desktop .list_box").css("height",h_list+"px");
}




