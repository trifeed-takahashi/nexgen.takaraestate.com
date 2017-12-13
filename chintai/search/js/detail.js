

jQuery(document).ready(function(){	

	$(".device-mobile .info_box_ttl").click(function () {
		overflow_info();
	});
	
	$(".setsubiall").click(function () {
		setsubiOpener();
		return false;
	});
	
	$(".photo_box a").click(function () {
		AllViewSlideShow();
		return false;
	});
	
	$(".all_Photo_bg").click(function () {
		OpenSlideShow_close();
		return false;
	});
	
	

});/* ready */





$(window).on('load resize', function(){
mainimaage_height();
horizontal_div_size_fit();
});




function AllViewSlideShow(){
	$("body").addClass("overflow");
}







function mainimaage_height(){
		var h1 = jQuery('#menu1').height();
		var h2 = jQuery('.detail_title').height();
		var wh = window.innerHeight ? window.innerHeight: $(window).height();
		var h_image = wh-(h1+h2);
		var ih =jQuery('.info_box_ttl').height()+20;
		var h_info = wh-ih;
		$(".photo_box").css("height",h_image+"px");
		
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



var setsubiflag = true;
function setsubiOpener(){
	if(setsubiflag){ OpenSetsubi_open(); }
	else{ OpenSetsubi_close(); }
}
function OpenSetsubi_open(){
	$(".section_info_ul_box").addClass("box_open");
	$(".setsubiall").html("閉じる");
	setsubiflag = false;
}
function OpenSetsubi_close(){
	$(".section_info_ul_box").removeClass("box_open");
	$(".setsubiall").html("設備を全て見る");
	setsubiflag = true;
}





var slideflag = true;
function AllViewSlideShow(){
	if(slideflag){ OpenSlideShow_open(); }
	else{ OpenSlideShow_close(); }
}

function OpenSlideShow_open(){
	$("body").addClass("overflow_slide");
		
	$('html').css({'position':'fixed','top':0});
	
	horizontal_div_size_fit();
	
	slideflag = false;
}
function OpenSlideShow_close(){
	$("body").removeClass("overflow_slide");
	
	$('html').css({'position':'static','top':'auto'});
	
	slideflag = true;
}

function horizontal_div_size_fit(){

	var ww = window.innerWidth ? window.innerWidth: $(window).width();
	var wh = window.innerHeight ? window.innerHeight: $(window).height();
	var ih = $('.horizontal img').height();
	
	if(ih > wh){
		$('.horizontal').css('width',ww+'px');
		$('.horizontal img').css('height','auto');
		$('.horizontal img').css('width','100%');
	}else{
		$('.horizontal').css('width',ww+'px');
		$('.horizontal').css('padding-top','auto');
	}
		// var image_top_padding = ((wh-$('.horizontal img').height())/2);
		// $('.horizontal').css('padding-top',image_top_padding+'px');
}












