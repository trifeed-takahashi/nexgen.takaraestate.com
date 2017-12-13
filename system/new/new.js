

jQuery(document).ready(function(){	

	$(".device-mobile .info_box_ttl").click(function () {
		overflow_info();
	});
	
	

});/* ready */














$(window).on('load resize', function(){
mainimaage_height();
});



function mainimaage_height(){
		var h1 = jQuery('#menu1').height();
		var h2 = jQuery('.detail_title').height();
		var wh = window.innerHeight ? window.innerHeight: $(window).height();
		var h_image = wh-(h1+h2);
		var ih =jQuery('.info_box_ttl').height()+20;
		var h_info = wh-ih;
		if($("html").hasClass("device-mobile")){
			$(".device-mobile .detail_info_box .info_box").css("top",h_info+"px");
		}else{
			$(".detail_info_box .info_box").css("top","-80px");
		}
}













var infoflag = true;
function overflow_info(){
	if(infoflag){ OpenInfo_open(); }
	else{ OpenInfo_close();}
	return false;
}
function OpenInfo_open(){
	$("body").addClass("overflow");
	$(".device-mobile .info_box_ttl").html("閉じる");
	
	$('html').css({'position':'fixed','top':0});
	
	infoflag = false;
}
function OpenInfo_close(){
	$("body").removeClass("overflow");
	$(".device-mobile .info_box_ttl").html("お問合せ");
	
	$('html').css({'position':'static','top':'auto'});
	
	infoflag = true;
}










