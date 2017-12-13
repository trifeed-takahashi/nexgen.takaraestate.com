<?php
	$title = "会員";
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

<script type="text/javascript" src="/chintai/common/js/libs.js"></script>
<script type="text/javascript" src="/chintai/common/js/widget.js"></script>
<script type="text/javascript" src="/system/common/js/widget.js?1"></script>

<link rel="stylesheet" type="text/css" href="/system/common/css/import.css?123" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="user.css?123" media="screen,tv" />





</head>

<body class="user">
<?php require_once "../inc/header.php"; ?>

<div id="content">


<div class="filter_menus clearfix">

<div class="pulldown">
<select class="old-select">
    <option value="" selected>一括操作</option>
    <option value="1">削除する</option>
</select>

<!-- Bouton Select reconstruit -->
<div class="new-select">
    <div class="selection">
        <p>
            <span></span>
            <i></i>
        </p>
        <span></span>
    </div>
</div>
</div><!-- pulldown -->


<div class="sort">
<div class="filter_menu_title">並び替え</div><!-- filter_menu_title -->
<div class="filter_menu_box">

<ul class="clearfix">
<li class="sort1 checkitem_f"><label><input type="radio" name="sort" class="checkitem" checked><span class="checkitem_parts">会員登録日順</span></label></li>
<li class="sort2 checkitem_m"><label><input type="radio" name="sort" class="checkitem"><span class="checkitem_parts">最終ログイン日順</span></label></li>
<li class="sort3 checkitem_l"><label><input type="radio" name="sort" class="checkitem"><span class="checkitem_parts">名前順</span></label></li>
</ul>

</div><!-- filter_menu_box -->
</div><!-- sort -->


<div class="filter">
<div class="filter_menu_title">フィルター</div><!-- filter_menu_title -->
<div class="filter_menu_box">

<ul class="clearfix">
<li class="filter1 checkitem_f"><label><input type="radio" name="filter" class="checkitem" checked><span class="checkitem_parts">全会員</span></label></li>
<li class="filter4 checkitem_m"><label><input type="radio" name="filter" class="checkitem"><span class="checkitem_parts">6か月ログイン無</span></label></li>
<li class="filter4 checkitem_l"><label><input type="radio" name="filter" class="checkitem"><span class="checkitem_parts">ゴミ箱</span></label></li>
</ul>

</div><!-- filter_menu_box -->
</div><!-- filter -->


<div class="search">
<input type="text" class="search_form" placeholder="ID・名前・メールアドレス">
</div><!-- search -->



</div><!-- filter_menus -->



<div class="view_head">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"> 操作</label></div><!-- colum1 -->
<div class="view_colum colum_bukken"><span>ID名</span></div><!-- colum2 -->
<div class="view_colum colum_gazo"><span>名前</span></div><!-- colum3 -->
<div class="view_colum colum_bango"><span>メールアドレス</span></div><!-- colum4 -->
<div class="view_colum colum_yatin"><span class="des">最終ログイン日</span></div><!-- colum5 -->
<div class="view_colum colum_date"><span>閲覧済物件</span></div><!-- colum6 -->
</div><!-- view_head -->


<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2017/10/20</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">コーポ新貝205</a><a href="#">ラデュース新町101</a><a href="#">大城コーポ201</a><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->































<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix">閲覧なし</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->
<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix">閲覧なし</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->
<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix">閲覧なし</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->
<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix">閲覧なし</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->
<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix">閲覧なし</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->
<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix">閲覧なし</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->
<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix">閲覧なし</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"></label>
<div class="koukai_state">
<ul class="controll_panel">
<li><a href="#">編集</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">pepe</div><!-- colum2 -->
<div class="view_colum colum_gazo">矢野　広彰</div><!-- colum3 -->
<div class="view_colum colum_bango">yanohiroaki@icloud.com</div><!-- colum4 -->
<div class="view_colum colum_yatin">2016/12/10</div><!-- colum5 -->
<div class="view_colum colum_date clearfix"><a href="#">プレシャス211001</a><a href="#">コーポ新貝205</a></div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->












<div class="list_navi_box">

<ul class="navi clearfix">
	<li class="first"><a href="#"><img src="/chintai/common/img/arrow_bottom_blue_left.png"></a></li>
	<li class="active"><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li class="last"><a href="#"><img src="/chintai/common/img/arrow_bottom_blue_right.png"></a></li>
</ul>

<p class="navi_text">検索結果300件中　1-20件を表示中</p>

</div><!-- list_navi_box -->





















</div><!-- content -->

</body>
</html>
