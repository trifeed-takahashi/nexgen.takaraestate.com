<?php
	
	// ログインしてクッキーが設定されていればコンテンツを見れる
	if($_COOKIE['c_shubetsu'] ){
	
	$title = "顧客管理";
	$trash = $_GET["trash"];
	$current_year = $_GET["current_year"];
	$search_form = $_GET["search_form"];
	
?>




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

<title><?php echo $title; ?></title>
<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">

<!-- [ =============== page structure =============== ] -->

<?php require_once "../inc/structure.php"; ?>

<!-- [ =============== import =============== ] -->

<script type="text/javascript" src="/chintai/common/js/libs.js?123"></script>
<script type="text/javascript" src="/chintai/common/js/widget.js"></script>
<script type="text/javascript" src="/system/common/js/widget.js?1"></script>
<script type="text/javascript" src="guest.js?111"></script>

<link rel="stylesheet" type="text/css" href="/system/common/css/import.css?1251232981143" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="guest.css?12111113" media="screen,tv" />





</head>

<body class="guest">



<?php require_once "../inc/header.php"; ?>

<div id="content">


<div class="filter_menus clearfix">

<div class="filter">
<div class="filter_menu_title">一括操作</div><!-- filter_menu_title -->
<div class="filter_menu_box">

<select class="pulldown" name="pulldown">
    <option value="" selected>一括操作</option>
    <option value="1">削除する</option>
</select>

</div><!-- filter_menu_box -->
</div><!-- filter -->


<div class="filter">
<div class="filter_menu_title">フィルター</div><!-- filter_menu_title -->
<div class="filter_menu_box">

<ul class="clearfix">
<li class="filter4 checkitem_li checkitem_f"><a href="?trash=1<? if($search_form) {echo "&search_form=$search_form";}if($current_year or $current_year == 0) {echo "&current_year=$current_year";}else{echo "&current_year=2";}?>" <?php if($trash == 1 or $trash == "" or $trash == null) echo ' class="active"'; ?>>全員</a></li>
<li class="filter4 checkitem_li checkitem_m"><a href="?<? if($trash) {echo "&trash=$trash";}if($search_form) {echo "&search_form=$search_form";}if($current_year) {echo "&current_year=0";}else{echo "&current_year=2";}?>" <?php if(!$current_year) echo ' class="active"'; ?>><?php echo date("Y"); ?>年のみ</a></li>
<li class="filter4 checkitem_li checkitem_l"><a href="?trash=2<? if($search_form) {echo "&search_form=$search_form";}if($current_year or $current_year == 0) {echo "&current_year=$current_year";}else{echo "&current_year=2";}?>" <?php if($trash == 2) echo ' class="active"'; ?>>ゴミ箱</a></li>
</ul>

</div><!-- filter_menu_box -->
</div><!-- filter -->

<div class="search">
<form id="search_form_submit">
<input type="hidden" name="trash" class="trash" value="<?php echo $trash;?>">
<input type="hidden" name="current_year" class="current_year" value="<?php echo $current_year;?>">
<input type="text" name="search_form" class="search_form" placeholder="担当名・顧客名" value="<? if($search_form) echo $search_form;?>">
</form>
</div><!-- search -->



</div><!-- filter_menus -->



<div class="view_head">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value=""></label></div><!-- colum1 -->
<div class="view_colum colum_date"><span class="des">登録日</span></div><!-- colum5 -->
<div class="view_colum colum_tanto"><span>担当者</span></div><!-- colum3 -->
<div class="view_colum colum_user">ランク<br>顧客名<br>よみ</div><!-- colum2 -->
<div class="view_colum colum_tel">メールアドレス<br>電話番号</div><!-- colum4 -->
<div class="view_colum colum_jiki">入居時期</div><!-- colum6 -->
</div><!-- view_head -->


<div class="view_row_items">

<div class="list_navi_box">
<p class="navi_text">検索中...</p>
</div><!-- list_navi_box -->

</div>




























</div><!-- content -->

</body>
</html>





<?php
// クッキー情報が切れたらログアウトする
}else{
echo '<meta http-equiv="refresh" content="0;URL=./login/login.php">';
}

?>