$(document).ready(function(){

////////////////////////////////////
// 検索ajax view編
////////////////////////////////////

$('.search_form').each(function(){
	$(this).bind('keyup blur', ajaxview(this));
});
// デフォルト検索
ajaxsearch($('.search_form').val());




jQuery('.view_row').live({ // イベントを取得したい要素
	mouseenter:function(){
        $(this).addClass('hover');
	},
	mouseleave:function(){
	    $(this).removeClass('hover');
	}
});


$(".pulldown").change(function(){
	if($(".pulldown option:selected").val() == 1){
		// 削除
		deleteitem();
	}
	return false;
});




// カナ入力補完
$.fn.autoKana('#f_name', '#f_yomi', {
katakana : false  //true：カタカナ、false：ひらがな（デフォルト）
});



////////////////////////////////////
// ログイン
////////////////////////////////////
$('.login .submitbutton').click(function () {
	loginentry( $('#name').val() , $('#birth').val(),$("input[name='shubetu']").val());
	return false;
});



}); // $(document).ready











// ///////////////////////////////////////////
// 一括操作　削除
// ///////////////////////////////////////////
function deleteitem(){
	value = '';
	// 削除前の確認
		alert(123);
	if(window.confirm('削除しますが本当にいいんですね？')){
		$('input.view_check:checked').map(function() {
		    value = value+$(this).val()+'***';
		});
		$.ajax({
		type: "GET",
		url: "ajaxdelete.php",
		data: "delitem="+value,
	
		success: function(msg){
			ajaxsearch($('.search_form').val());
		}
		
		});
	}else{ // 削除しますが本当にいいんですね？
		return false;
	}

}



// ゴミ箱へ移動
function trash_move(_id){
	$.ajax({
		type: "GET",
		url: "ajaxtrash.php",
		data: "id="+_id,
		success: function(msg){
		alert(msg);
		ajaxsearch($('.search_form').val());
		}
	});
}

// ゴミ箱へ移動
function trash_back(_id){
	$.ajax({
		type: "GET",
		url: "ajaxtrashback.php",
		data: "id="+_id,
		success: function(msg){
		alert(msg);
		ajaxsearch($('.search_form').val());
		}
	});
}








// ///////////////////////////////////////////
// 文字検索　view　編
// ///////////////////////////////////////////
// フォーム文字をajaxで回すファンクション
function ajaxview(elm){
　var v, old = elm.value;
　return function(){
　　if(old != (v=elm.value)){
		old = v;
		str = $('.search_form').val();
		ajaxsearch(str);
	}
　}
}

function ajaxsearch(str){
// 結果をdivに吐き出す
$.ajax({
	type: "GET",
	url: "ajaxuser.php",
	data: "val="+str+"&trash="+$('.trash').val(),
	success: function(msg){
		$(".view_row_items").html(msg);
	}
});
}









/****************************
ログイン
****************************/
function loginentry(_name , _birth , _shubetu){
	
// 結果をdivに吐き出す
$.ajax({
	type: "GET",
	url: "entry.php",
	data: "name="+_name+"&birth="+_birth+"&shubetu="+_shubetu,
	success: function(msg){
		var ar = msg.split(",,,");
		$(".kekka").remove();
		
		if(ar[0] == 1){
			$("#loginbox").append('<div class="kekka">'+ar[1]+'</div>');
			location.href = "../";
		}else{
			$("#loginbox").append('<div class="kekka">'+ar[1]+'</div>');
		}
		
	}
});
}
