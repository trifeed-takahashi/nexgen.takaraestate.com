<?php
/* **********************************
変数宣言
********************************** */
header("Content-Type: text/html; charset=UTF-8"); // キャラセット
mb_language("ja");
mb_internal_encoding("UTF-8");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

<title>解約届｜大分 賃貸はタカラ不動産｜写真と動画が豊富な情報を毎日更新中！</title>
<meta name="keywords" content="賃貸,大分,不動産,アパート,マンション,学生,リノベーション,ペット,タカラ不動産"/>
<meta name="description" content="大分賃貸のお部屋探しならタカラ不動産！毎日更新されるので物件情報が盛りだくさん！内装写真や動画を多数掲載しているので分か りやすい！猫OKのペット可や敷金礼金0の物件を条件検索が可能！また、駐車場まで検索が出来るので、あなたのお部屋探しをスムーズに行います。是非タカラ不動産へお問い合わせください。"/>

<!-- [ =============== OG =============== ] -->
<meta property="og:title" content="大分 賃貸はタカラ不動産｜写真と動画が豊富な情報を毎日更新中！">
<meta property="og:type" content="website">
<meta property="og:description" content="大分賃貸のお部屋探しならタカラ不動産！毎日更新されるので物件情報が盛りだくさん！内装写真や動画を多数掲載しているので分か りやすい！">
<meta property="og:url" content="http://www.takaraestate.com/chintai/">
<meta property="og:image" content="http://www.takaraestate.com/chintai/common/img/og-image.jpg">
<meta property="og:site_name" content="大分の賃貸サイト タカラ不動産">
<meta property="fb:app_id" content="355358851231260">


<!-- [ =============== page structure =============== ] -->

<?php require_once "../inc/structure.php"; ?>

<!-- [ =============== import =============== ] -->

<script type="text/javascript" src="/chintai/common/js/libs.js?2000"></script>
<script type="text/javascript" src="/chintai/common/js/widget.js?2000"></script>
<script type="text/javascript" src="js/residente.js?1"></script>

<link rel="stylesheet" type="text/css" href="/chintai/common/css/import.css?4000" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="css/residente.css?3000" media="screen,tv" />


</head>

<body id="kaiyaku">
<?php require_once "../inc/header.php"; ?>

<div id="content" class="kaiyaku">
<h2>解約届フォーム</h2>


<form>

<div class="addbox">
<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_kinyu">記入日</div>
	<div class="inner in_kinyu">
	<div class="clearfix">
	<input type="text" class="txtarea b_txtarea kinyu" id="kinyu" name="kinyu" value="<?php echo date('Y-m-d') ?>" readonly="readonly"/>
	</div>
</div>
</div>
</div>




<div class="additem">
<div class="cl clearfix">
<div class="sttl sttl_kaiyakubi">解約希望日<br/>
<span class="bikou">お部屋を解約する日です</span>
</div>
<div class="inner in_kaiyakubi">
<div class="clearfix">
<select name="kaiyaku_year" class="kaiyaku_year">
	<option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
	<option value="<?php echo date('Y')+1; ?>"><?php echo date('Y')+1; ?></option>
</select>
年
<select name="kaiyaku_month" class="kaiyaku_month">
	<option value="01" <?php if(date('m') == '12'){ echo 'selected'; } ?>>01</option>
	<option value="02" <?php if(date('m') == '01'){ echo 'selected'; } ?>>02</option>
	<option value="03" <?php if(date('m') == '02'){ echo 'selected'; } ?>>03</option>
	<option value="04" <?php if(date('m') == '03'){ echo 'selected'; } ?>>04</option>
	<option value="05" <?php if(date('m') == '04'){ echo 'selected'; } ?>>05</option>
	<option value="06" <?php if(date('m') == '05'){ echo 'selected'; } ?>>06</option>
	<option value="07" <?php if(date('m') == '06'){ echo 'selected'; } ?>>07</option>
	<option value="08" <?php if(date('m') == '07'){ echo 'selected'; } ?>>08</option>
	<option value="09" <?php if(date('m') == '08'){ echo 'selected'; } ?>>09</option>
	<option value="10" <?php if(date('m') == '09'){ echo 'selected'; } ?>>10</option>
	<option value="11" <?php if(date('m') == '10'){ echo 'selected'; } ?>>11</option>
	<option value="12" <?php if(date('m') == '11'){ echo 'selected'; } ?>>12</option>
</select>
月
<select name="kaiyaku_day" class="kaiyaku_day">
	<option value="01" <?php if(date('d') == '02'){ echo 'selected'; } ?>>01</option>
<option value="02" <?php if(date('d') == '03'){ echo 'selected'; } ?>>02</option>
<option value="03" <?php if(date('d') == '04'){ echo 'selected'; } ?>>03</option>
<option value="04" <?php if(date('d') == '05'){ echo 'selected'; } ?>>04</option>
<option value="05" <?php if(date('d') == '06'){ echo 'selected'; } ?>>05</option>
<option value="06" <?php if(date('d') == '07'){ echo 'selected'; } ?>>06</option>
<option value="07" <?php if(date('d') == '08'){ echo 'selected'; } ?>>07</option>
<option value="08" <?php if(date('d') == '09'){ echo 'selected'; } ?>>08</option>
<option value="09" <?php if(date('d') == '10'){ echo 'selected'; } ?>>09</option>
<option value="10" <?php if(date('d') == '11'){ echo 'selected'; } ?>>10</option>
<option value="11" <?php if(date('d') == '12'){ echo 'selected'; } ?>>11</option>
<option value="12" <?php if(date('d') == '13'){ echo 'selected'; } ?>>12</option>
<option value="13" <?php if(date('d') == '14'){ echo 'selected'; } ?>>13</option>
<option value="14" <?php if(date('d') == '15'){ echo 'selected'; } ?>>14</option>
<option value="15" <?php if(date('d') == '16'){ echo 'selected'; } ?>>15</option>
<option value="16" <?php if(date('d') == '17'){ echo 'selected'; } ?>>16</option>
<option value="17" <?php if(date('d') == '18'){ echo 'selected'; } ?>>17</option>
<option value="18" <?php if(date('d') == '19'){ echo 'selected'; } ?>>18</option>
<option value="19" <?php if(date('d') == '20'){ echo 'selected'; } ?>>19</option>
<option value="20" <?php if(date('d') == '21'){ echo 'selected'; } ?>>20</option>
<option value="21" <?php if(date('d') == '22'){ echo 'selected'; } ?>>21</option>
<option value="22" <?php if(date('d') == '23'){ echo 'selected'; } ?>>22</option>
<option value="23" <?php if(date('d') == '24'){ echo 'selected'; } ?>>23</option>
<option value="24" <?php if(date('d') == '25'){ echo 'selected'; } ?>>24</option>
<option value="25" <?php if(date('d') == '26'){ echo 'selected'; } ?>>25</option>
<option value="26" <?php if(date('d') == '27'){ echo 'selected'; } ?>>26</option>
<option value="27" <?php if(date('d') == '28'){ echo 'selected'; } ?>>27</option>
<option value="28" <?php if(date('d') == '29'){ echo 'selected'; } ?>>28</option>
<option value="29" <?php if(date('d') == '30'){ echo 'selected'; } ?>>29</option>
<option value="30" <?php if(date('d') == '31'){ echo 'selected'; } ?>>30</option>
<option value="末日" <?php if(date('d') == '01'){ echo 'selected'; } ?>>末日</option>
</select>
日で契約終了します
</div>
</div>
</div>
</div>




<div class="additem item_keiyakusya">
<div class="cl clearfix">
<div class="sttl sttl_keiyakusya">契約者名</div>
<div class="inner in_keiyakusya">
<div class="clearfix">
<input type="text" class="txtarea b_txtarea keiyakusya" id="keiyakusya" name="keiyakusya" placeholder="例：タカラ　太郎" value=""/>
</div>
</div>
</div>
</div>


<div class="additem">
<div class="cl clearfix">
<div class="sttl sttl_keiyakusyamail">メールアドレス</div>
<div class="inner in_keiyakusyamail">
<div class="clearfix">
<input type="text" class="txtarea b_txtarea keiyakusyamail" id="keiyakusyamail" name="keiyakusyamail" placeholder="例：kaiyaku@takaraestate.com" value=""/>
</div>
</div>
</div>
</div>


<div class="additem item_keiyaku">
	<div class="cl clearfix">
	<div class="sttl sttl_keiyaku">建物名・駐車場名　号室（区画番号）<br/>
	<span class="bikou">現在お住いの建物名と号室（区画番号）をご記載ください</span></div>
	<div class="inner in_keiyaku">
	<div class="clearfix">
	<input type="text" class="txtarea b_txtarea keiyaku" id="keiyaku" name="keiyaku" placeholder="例：タカラアパート 101号" value=""/>
	</div>
</div>
</div>
</div>

<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_keiyakujusho">建物住所<br/>
	<span class="bikou">現在お住いの住所をご記載ください</span></div>
	<div class="inner in_keiyaku">
	<div class="clearfix">
	<input type="text" class="txtarea b_txtarea keiyakujusho" id="keiyakujusho" name="keiyakujusho" placeholder="例：大分市大手町1-1-3" value=""/>
	</div>
</div>
</div>
</div>








<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_tenkyo">転居先住所<br>
		<span class="bikou">お引越し後の住所・建物名・号室を記載ください　解約精算書を送付します</span>
	</div>
	<div class="inner in_tenkyo">
		<div class="clearfix">
		<input type="text" class="txtarea b_txtarea tenkyo" id="tenkyo" name="tenkyo" placeholder="例：大分市大手町1-1-1 タカラアパート101号室" value=""/>
		</div>
	</div>
</div>
</div>


<div class="additem item_tenkyotel">
	<div class="cl clearfix">
	<div class="sttl sttl_tenkyotel">転居後電話番号<br>
		<span class="bikou">お引越し後の電話番号を記載ください</span>
	</div>
	<div class="inner in_tenkyotel">
		<div class="clearfix">
		<input type="text" class="txtarea b_txtarea tenkyotel" id="tenkyotel" name="tenkyotel" placeholder="例：090-8834-8834" value=""/>
		</div>
	</div>
</div>
</div>




<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_kouza">ご返金口座<br>
		<span class="bikou">敷金返金・過払い金の返金先を記載ください</span>
	</div>
	<div class="inner in_kouza">
		<div class="clearfix">
		<p><input type="text" class="txtarea b_txtarea kouza_gin" name="kouza_gin" placeholder="銀行名　例：大分銀行" value=""/></p>
		<p><input type="text" class="txtarea b_txtarea kouza_shiten" name="kouza_shiten" placeholder="支店名　例：大手町支店" value=""/></p>
		<p>
			<select name="syumoku" class="syumoku">
				<option value="普通" selected>普通</option>
				<option value="当座">当座</option>
			</select>
		</p>
		<p><input type="text" class="txtarea b_txtarea kouza_ban" name="kouza_ban" placeholder="口座番号　例：1111111" value=""/></p>
		<p><input type="text" class="txtarea b_txtarea kouza_mei" name="kouza_mei" placeholder="口座名義　例：タカラ　タロウ" value=""/></p>
		</div>
	</div>
</div>
</div>


<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_tenkyoriyu">転居理由</div>
	<div class="inner in_tenkyoriyu">
		<div class="clearfix">
		<input type="text" class="txtarea b_txtarea tenkyoriyu" id="tenkyoriyu" name="tenkyoriyu" placeholder="例：転勤が決まった為" value=""/>
		</div>
	</div>
</div>
</div>


<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_biko">備考欄</div>
	<div class="inner in_biko">
		<div class="clearfix">
		<textarea class="txtarea b_txtarea biko" id="biko" name="biko"></textarea>
		</div>
	</div>
</div>
</div>


<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_tenkyoriyu">本人確認書類<br>
		<span class="bikou">運転免許証等身分を証明できる書類の画像をご提出ください</span></div>
	<div class="inner in_tenkyoriyu">
		<div class="clearfix">
		<p class="linkbutton"><a href="https://www.dropbox.com/request/yMuEbugHxtWwQB06v2kH" target="_blank">身分証明書をアップロード</a></p>
		</div>
	</div>
</div>
</div>


<div class="additem">
	<div class="cl clearfix">
	<div class="sttl sttl_kakuninjiko">確認事項<br>
		<span class="bikou">記載の内容をご確認頂きチェックをお願いします<br>（チェック頂きましたら同意したものと致します）</span></div>
	<div class="inner in_kakuninjiko">
		<div class="clearfix">
		<ul>
		<li>
		<label for="kakuninjiko1">
		<input type="checkbox" class="kakuninjiko1" name="kakuninjiko1" id="kakuninjiko1" value="1">
		<span>本解約届を提出後は新しいお客様にお部屋を貸す為募集に出されます。<br>退去キャンセルの前に次の入居者が決まっている場合は退去のキャンセル・変更は受付が出来ません</span>
		</label>
		</li>
		<li><label for="kakuninjiko2"><input type="checkbox" class="kakuninjiko2" name="kakuninjiko2" id="kakuninjiko2" value="1"><span>解約日までに鍵を当社へご持参・または郵送にてご返却ください<br>鍵返却が無い場合は交換費用が請求されますのでご注意ください</span></label></li>
		<li><label for="kakuninjiko3"><input type="checkbox" class="kakuninjiko3" name="kakuninjiko3" id="kakuninjiko3" value="1"><span>お部屋に残置物があった場合撤去をして頂きます。残置物を撤去するまで損害金をご請求する事がございます</span></label></li>
		<li><label for="kakuninjiko4"><input type="checkbox" class="kakuninjiko4" name="kakuninjiko4" id="kakuninjiko4" value="1"><span>解約希望日が記入日より1か月未満の場合解約日は1か月後に変更となります</span></label></li>
		<li><label for="kakuninjiko5"><input type="checkbox" class="kakuninjiko5" name="kakuninjiko5" id="kakuninjiko5" value="1"><span>本人確認書類に不備がある場合お受付は出来ません</span></label></li>
		</ul>
		</div>
	</div>
</div>

</div>

<p class="kaiyakuwarninng">全て同意頂けましたら下のボタンが黒くなり押せるようになります</p>

<div class="submitbuttonbox">
	<input class="submitbutton" type="submit" value="解約届を提出する">
</div><!-- /submitibutton -->



</div>
</form>



</div><!-- content -->

<?php require_once "../inc/footer.php"; ?>

</body>
</html>
