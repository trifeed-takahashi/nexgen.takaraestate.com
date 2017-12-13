<?php
header("Content-Type: text/html; charset=UTF-8"); // キャラセット
mb_language("ja");
mb_internal_encoding("UTF-8");

$kinyu = $_GET['kinyu'];
$kaiyakubi = $_GET['kaiyakubi'];
$keiyakusya = $_GET['keiyakusya'];
$keiyakusyamail = $_GET['keiyakusyamail'];
$keiyaku = $_GET['keiyaku'];
$keiyakujusho = $_GET['keiyakujusho'];
$tenkyo = $_GET['tenkyo'];
$tenkyotel = $_GET['tenkyotel'];
$kouza_gin = $_GET['kouza_gin'];
$kouza_shiten = $_GET['kouza_shiten'];
$syumoku = $_GET['syumoku'];
$kouza_ban = $_GET['kouza_ban'];
$kouza_mei = $_GET['kouza_mei'];
$tenkyoriyu = $_GET['tenkyoriyu'];
$biko = $_GET['biko'];

$kakuninjiko1 = $_GET['kakuninjiko1'];
$kakuninjiko2 = $_GET['kakuninjiko2'];
$kakuninjiko3 = $_GET['kakuninjiko3'];
$kakuninjiko4 = $_GET['kakuninjiko4'];
$kakuninjiko5 = $_GET['kakuninjiko5'];



$msg = "賃貸借契約の解除を希望します\r\r\r";
$msg .= "！！！！！！！！！！！！！【担当者確認】！！！！！！！！！！！！！\r";
$msg .= "身分証が届いているかDropboxから確認しましょう\r";
$msg .= "https://www.dropbox.com/home/01%20タカラ不動産%20チームフォルダ/ファイルリクエスト/身分証\r\r";
if($keiyakusyamail){
	$msg .= "メールアドレスが取得出来ているので受付完了のメールを送りましょう\r";
	$msg .= "メール　".$keiyakusyamail."\r";
}else{
	$msg .= "メールアドレスが取得出来てないので確認の電話をしましょう\r";
	$msg .= "電話　".$tenkyotel."\r";
}
$msg .= "！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！\r\r";
$msg .= "記入日：".$kinyu."\r";
$msg .= "解約希望日：".$kaiyakubi."\r";
$msg .= "契約名義：".$keiyakusya."\r";
$msg .= "メールアドレス：".$keiyakusyamail."\r";
$msg .= "解約物件・号室：".$keiyaku."\r";
$msg .= "解約物件住所：".$keiyakujusho."\r";
$msg .= "転居先：".$tenkyo."\r";
$msg .= "転居先電話番号：".$tenkyotel."\r";
$msg .= "転居理由：".$tenkyoriyu."\r";
$msg .= "備考欄：".$biko."\r\r";
$msg .= "：：：：：：：：：：：：：：返金口座：：：：：：：：：：：：：：\r";
$msg .= "銀行名：".$kouza_gin."\r";
$msg .= "支店名：".$kouza_shiten."\r";
$msg .= "口座番号：".$syumoku."　".$kouza_ban."\r";
$msg .= "口座名義：".$kouza_mei."\r";
$msg .= "：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：\r\r";

$msg .= "：：：：：：：：：：：：：：下記の事項に同意しました：：：：：：：：：：：：：：\r";
$msg .= "本退去届を提出後は新しいお客様にお部屋を貸す為募集に出されます。\r退去キャンセルの前に次の入居者が決まっている場合は退去のキャンセル・変更は受付が出来ません\r";
$msg .= "解約日までに鍵を当社へご持参・または郵送にてご返却ください\r鍵返却が無い場合は交換費用が請求されますのでご注意ください\r";
$msg .= "お部屋に残置物があった場合撤去をして頂きます。残置物を撤去するまで損害金をご請求する事がございます\r";
$msg .= "解約希望日が記入日より1か月未満の場合解約日は1か月後に変更となります\r";
$msg .= "本人確認書類に不備がある場合お受付は出来ません\r";
$msg .= "：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：\r";

$msg = str_replace(array("\r\n", "\r"), "\n", $msg);

// ↓入居者宛

$msg2 = $keiyakusya."　様\r\r";
$msg2 .= "当社ウェブページより解約届を送信致しました\r";
$msg2 .= "当社担当者より受付完了のメールが届いて完了となります\r\r";
$msg2 .= "もし当社よりメールが届かない場合はお手数ですが　097-532-8834　までお電話ください\r\r";
$msg2 .= "提出内容\r";
$msg2 .= "！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！\r\r";
$msg2 .= "記入日：".$kinyu."\r";
$msg2 .= "解約希望日：".$kaiyakubi."\r";
$msg2 .= "契約名義：".$keiyakusya."\r";
$msg2 .= "メールアドレス：".$keiyakusyamail."\r";
$msg2 .= "解約物件・号室：".$keiyaku."\r";
$msg2 .= "解約物件住所：".$keiyakujusho."\r";
$msg2 .= "転居先：".$tenkyo."\r";
$msg2 .= "転居先電話番号：".$tenkyotel."\r";
$msg2 .= "転居理由：".$tenkyoriyu."\r";
$msg2 .= "備考欄：".$biko."\r\r";
$msg2 .= "：：：：：：：：：：：：：：返金口座：：：：：：：：：：：：：：\r";
$msg2 .= "銀行名：".$kouza_gin."\r";
$msg2 .= "支店名：".$kouza_shiten."\r";
$msg2 .= "口座番号：".$syumoku."　".$kouza_ban."\r";
$msg2 .= "口座名義：".$kouza_mei."\r";
$msg2 .= "：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：：\r\r\r";
$msg2 .= "+++++++++++++++++++++++++++++++++++++++++++++++++++++++\r
（株）タカラ不動産\r
\r
WEB　http://www.takaraestate.com/chintai/\r
メール　chintai@takaraestate.com\r
電話　097.532.8834　　FAX　097.532.8613\r
\r
〒870-0022　大分県大分市大手町1-1-3 寿ビル1F\r
営業時間　10:0 0～19:00（日・祝は18:00まで）　　店休日　水曜日\r
+++++++++++++++++++++++++++++++++++++++++++++++++++++++";

$msg2 = str_replace(array("\r\n", "\r"), "\n", $msg2);

// 本文をJISに変換
$mailbody = mb_convert_encoding($msg,"UTF-8");

if (mb_send_mail("chintai@takaraestate.com", "解約届けが届きました", $msg , "From: ".mb_encode_mimeheader($keiyakusya) ."<".$keiyakusyamail.">")) {
	if($keiyakusyamail){
	  mb_send_mail($keiyakusyamail, "【タカラ不動産】解約届けを送りました", $msg2 , "From: ".mb_encode_mimeheader("タカラ不動産") ."<chintai@takaraestate.com>");
	  echo "解約届が送信されました　※お客様にもメール致しましたのでご確認ください";
	}else{
		echo "解約届が送信されました　※当社より本人確認のお電話があります";
	}
} else {
  echo "解約届の送信に失敗しました。";
};

	
?>