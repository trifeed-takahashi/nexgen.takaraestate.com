$(document).ready(function(){

// 同意 ///////////////////////////
$("form input[type=checkbox]").change(function () {
	jiko1 = $(".kakuninjiko1").is(':checked');
	jiko2 = $(".kakuninjiko2").is(':checked');
	jiko3 = $(".kakuninjiko3").is(':checked');
	jiko4 = $(".kakuninjiko4").is(':checked');
	jiko5 = $(".kakuninjiko5").is(':checked');
	if(jiko1 && jiko2 && jiko3 && jiko4 && jiko5){
		$(".submitbutton").prop("disabled", false);
		$(".submitbutton").css("opacity", 1);
		$(".submitbutton").css("cursor", "pointer");
	}else{
		$(".submitbutton").prop("disabled", true);
		$(".submitbutton").css("opacity", 0.3);
		$(".submitbutton").css("cursor", "auto");
	}
});



// メール送信 ///////////////////////////
$('.submitbutton').click(function () {
	sendmail();
	
	return false;
});


}); // ready


// メール送信 ///////////////////////////
function sendmail(){
	kinyu = $('.kinyu').val();
	kaiyakubi = $('.kaiyaku_year').val()+"-"+$('.kaiyaku_month').val()+"-"+$('.kaiyaku_day').val();
	keiyakusya = $('.keiyakusya').val();
	keiyakusyamail = $('.keiyakusyamail').val();
	keiyaku = $('.keiyaku').val();
	keiyakujusho = $('.keiyakujusho').val();
	tenkyo = $('.tenkyo').val();
	tenkyotel = $('.tenkyotel').val();
	kouza_gin = $('.kouza_gin').val();
	kouza_shiten = $('.kouza_shiten').val();
	syumoku = $('.syumoku').val();
	kouza_ban = $('.kouza_ban').val();
	kouza_mei = $('.kouza_mei').val();
	tenkyoriyu = $('.tenkyoriyu').val();
	biko = $('#biko').val();
	kakuninjiko1 = $('.kakuninjiko1').val();
	kakuninjiko2 = $('.kakuninjiko2').val();
	kakuninjiko3 = $('.kakuninjiko3').val();
	kakuninjiko4 = $('.kakuninjiko4').val();
	kakuninjiko5 = $('.kakuninjiko5').val();


	$.ajax({
		type: "GET",
		url: "sendmail.php",
		data: "kinyu="+kinyu+"&kaiyakubi="+kaiyakubi+"&keiyakusya="+keiyakusya+"&keiyakusyamail="+keiyakusyamail+"&keiyaku="+keiyaku+"&keiyakujusho="+keiyakujusho+"&tenkyo="+tenkyo+"&tenkyotel="+tenkyotel+"&kouza_gin="+kouza_gin+"&kouza_shiten="+kouza_shiten+"&syumoku="+syumoku+"&kouza_ban="+kouza_ban+"&kouza_mei="+kouza_mei+"&tenkyoriyu="+tenkyoriyu+"&biko="+biko+"&kakuninjiko1="+kakuninjiko1+"&kakuninjiko2="+kakuninjiko2+"&kakuninjiko3="+kakuninjiko3+"&kakuninjiko4="+kakuninjiko4+"&kakuninjiko5="+kakuninjiko5,
		success: function(msg){
			alert(msg);
		}
	});
	
}