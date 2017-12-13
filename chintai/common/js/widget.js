jQuery(document).ready(function(){	

 
$("#menu2").click(function () {
  OpenMenu3();
	return false;
});

$("#menu").click(function () {
  OpenMenu();
	return false;
});

$(".mybukken_opener").click(function () {
  OpenMyBukken();
	return false;
});

$(".accountmenu_opener").click(function () {
  OpenAccountMenu();
	return false;
});

$(".more a").click(function () {
  OpenMore();
	return false;
});

$(".minus,.plus").click(function () {
	hebeiTotalSum($(this).attr("atr"),$(this).attr("class"));
	return false;
});



});




function hebeiTotalSum(_class,_plusorminus){
	var number = $("."+_class+" .number").text();
	number = number * 1;
	if(_plusorminus == "plus"){
		number = number+1;
	}else{
		if(number > 0){number = number-1;}
	}
	$("."+_class+" .number").text(number);
	
	// ninzutotal
	var adult = $(".adult .number").text();
	var kids = $(".kids .number").text();
	var baby = $(".baby .number").text();
	adult = adult * 1;
	kids = kids * 1;
	baby = baby * 1;
	numbers = (adult+kids+baby);
	if(numbers == 0){
		alert("入居人数を1名以上で指定してください");
	}
	$(".ninzutotal").text(numbers);
	// heibei
	h_adult = adult * 11;
	h_kids = kids * 8;
	h_baby = baby * 5;
	h_numbers = (h_adult+h_kids+h_baby)+5;
	$(".heibei").text(h_numbers);
	$(".heibei").val(h_numbers);
	
}








var accountflag = true;
function OpenAccountMenu(){
	if(accountflag){ OpenAccountMenu_open(); }
	else{ OpenAccountMenu_close();}
}
function OpenAccountMenu_open(){
	$(".accountmenu_float").css("display","block");
	accountflag = false;
	OpenMenu_close();
	OpenMyBukken_close();
}
function OpenAccountMenu_close(){
	$(".accountmenu_float").css("display","none");
	accountflag = true;
}


var myflag = true;
function OpenMyBukken(){
	if(myflag){ OpenMyBukken_open(); }
	else{ OpenMyBukken_close();}
}
function OpenMyBukken_open(){
	$(".mybukken_float").css("display","block");
	myflag = false;
	OpenMenu_close();
	OpenAccountMenu_close();
}
function OpenMyBukken_close(){
	$(".mybukken_float").css("display","none");
	myflag = true;
}



var mflag = true;
function OpenMenu(){
	if(mflag){ OpenMenu_open(); }
	else{ OpenMenu_close();}
}
function OpenMenu_open(){
	$("body").addClass("menu1-1_on");
	$("#menu .txt").html("閉じる");
	$("#menu .images").html('<img src="/chintai/common/img/menuclose.png">');
	mflag = false;
	OpenMyBukken_close();
	OpenAccountMenu_close();
}
function OpenMenu_close(){
	$("body").removeClass("menu1-1_on");
	$("#menu .txt").html("メニュー");
	$("#menu .images").html('<img src="/chintai/common/img/menu.png">');
	mflag = true;
}




var m3flag = true;
function OpenMenu3(){
	if(m3flag){
		// var h1 = jQuery('#menu1').height();
		var h2 = jQuery('#menu2').height();
		var wh = window.innerHeight ? window.innerHeight: $(window).height();
		var h3 = wh-h2;
		$("#menu3").css("height",h3+"px");
		$("body").addClass("overflow");
		$("#menu2 .txt").html("閉じる");
		
		var scrollTop = $(window).scrollTop();
		$('body').css({'position':'fixed','top':0});
		
		m3flag = false;
		OpenMenu_close();
	}else{
		$("#menu3").css("height","0px");
		$("body").removeClass("overflow");
		$("#menu2 .txt").html("物件を探す");
		
		$('body').css({'position':'relative','top':'auto'});
		
		m3flag = true;
	}
}






var moreflag = true;
function OpenMore(){
	if(moreflag){
		$(".closebox").css("display","block");
		$(".more a").addClass("open");
		$(".more a").html("閉じる");
		
		moreflag = false;
	}else{
		$(".closebox").css("display","none");
		$(".more a").removeClass("open");
		$(".more a").html("もっと絞りこむ");
		moreflag = true;
	}
}




























var w;
var timer = false;
$(window).on('load resize', function(){
	SwitchDevice();
});


SwitchDevice();
function SwitchDevice(){
	w = window.innerWidth || document.documentElement.clientWidth;
	if (w > 768) {
	jQuery("html").addClass('device-desktop');
	jQuery("html").removeClass('device-mobile');
	} else {
	jQuery("html").addClass('device-mobile');
	jQuery("html").removeClass('device-desktop');
	}
};