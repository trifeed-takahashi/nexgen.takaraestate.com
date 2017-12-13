<?php
	$title = "物件一覧";
?>




<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

<title><?php echo $title; ?></title>
<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">

<!-- [ =============== page structure =============== ] -->

<?php require_once "inc/structure.php"; ?>

<!-- [ =============== import =============== ] -->

<script type="text/javascript" src="/chintai/common/js/libs.js"></script>
<script type="text/javascript" src="/chintai/common/js/widget.js"></script>
<script type="text/javascript" src="/system/common/js/widget.js?123"></script>

<link rel="stylesheet" type="text/css" href="/system/common/css/import.css?123123567" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="css/view.css?123456" media="screen,tv" />





</head>

<body class="index">
<?php require_once "inc/header.php"; ?>

<div id="content">


<div class="filter_menus clearfix">

<div class="pulldown">
<select class="old-select">
    <option value="" selected>一括操作</option>
    <option value="1">削除する</option>
    <option value="2">非公開にする</option>
    <option value="3">公開にする</option>
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
<li class="sort1 checkitem_f"><label><input type="radio" name="sort" class="checkitem" checked><span class="checkitem_parts">物件名順</span></label></li>
<li class="sort2 checkitem_m"><label><input type="radio" name="sort" class="checkitem"><span class="checkitem_parts">元付名順</span></label></li>
<li class="sort3 checkitem_l"><label><input type="radio" name="sort" class="checkitem"><span class="checkitem_parts">物件番号順</span></label></li>
</ul>

</div><!-- filter_menu_box -->
</div><!-- sort -->


<div class="filter">
<div class="filter_menu_title">フィルター</div><!-- filter_menu_title -->
<div class="filter_menu_box">

<ul class="clearfix">
<li class="filter1 checkitem_f"><label><input type="radio" name="filter" class="checkitem" checked><span class="checkitem_parts">全物件</span></label></li>
<li class="filter2 checkitem_m"><label><input type="radio" name="filter" class="checkitem"><span class="checkitem_parts">公開中</span></label></li>
<li class="filter3 checkitem_m"><label><input type="radio" name="filter" class="checkitem"><span class="checkitem_parts">非公開</span></label></li>
<li class="filter4 checkitem_l"><label><input type="radio" name="filter" class="checkitem"><span class="checkitem_parts">ゴミ箱</span></label></li>
</ul>

</div><!-- filter_menu_box -->
</div><!-- filter -->


<div class="search">
<input type="text" class="search_form" placeholder="物件名・物件番号・住所">
</div><!-- search -->



</div><!-- filter_menus -->



<div class="view_head">
<div class="view_colum colum_sousa"><label><input type="checkbox" class="view_check" value="1"> 操作</label></div><!-- colum1 -->
<div class="view_colum colum_bukken">
<span>物件名・号室</span><br>
<span>元付名</span></div><!-- colum2 -->
<div class="view_colum colum_gazo">画像</div><!-- colum3 -->
<div class="view_colum colum_bango"><span>物件番号</span><br>
<span>住所</div><!-- colum4 -->
<div class="view_colum colum_yatin"><span>賃料</span><br>
<span>間取（平米）</span></div><!-- colum5 -->
<div class="view_colum colum_date"><span class="des">公開日</span></div><!-- colum6 -->
</div><!-- view_head -->


<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
</div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->

</div><!-- view_row -->
<!-- アイテム終了 -->






















<div class="quick_view">
	<div class="quick_title">クイック編集</div>
	<div class="quick_colum clearfix">
		<div class="quick_colums quick_colums1">
		<p class="clearfix"><span>号室</span><input type="text" value="205"></p>
		<p class="clearfix"><span>階数</span><input type="text" value="2"></p>
		<p class="clearfix"><span>家賃</span><input type="text" value="20000"></p>
		<p class="clearfix"><span>敷金</span><input type="text" value="0"></p>
		<p class="clearfix"><span>礼金</span><input type="text" value="0"></p>
		</div>
		
		<div class="quick_colums quick_colums2">
		<p class="clearfix"><span>現況</span>
<select>
    <option value="" selected>現況</option>
    <option value="">空家</option>
    <option value="">居住中</option>
    <option value="">未完成</option>
</select>
		</p>
		<p class="clearfix"><span>退去日</span><input type="text" placeholder="yyyy/mm/dd"></p>
		<p class="clearfix"><span>時期</span><select>
    <option value="" selected>時期</option>
    <option value="">即時</option>
    <option value="">期日指定</option>
    <option value="">相談</option>
</select></p>
		<p class="clearfix"><span>入居可能日</span><input type="text" placeholder="yyyy/mm/dd"></p>
		<p class="clearfix"><span>旬</span>
<select>
    <option value="" selected>旬</option>
    <option value="">上旬</option>
    <option value="">中旬</option>
    <option value="">下旬</option>
</select>
		</p>
		</div>
		
		<div class="quick_colums quick_colums3">
		<p class="clearfix">公開</p>
		<ul class="section_info_ul clearfix">
		<li class="koukai1"><label><input type="radio" name="koukai" class="checkitem" checked><span class="checkitem_parts">一般公開</span></label></li>
		<li class="koukai2"><label><input type="radio" name="koukai" class="checkitem"><span class="checkitem_parts">会員公開</span></label></li>
		<li class="koukai2"><label><input type="radio" name="koukai" class="checkitem"><span class="checkitem_parts">パスワード保護</span></label></li>
		<li class="koukai3"><label><input type="radio" name="koukai" class="checkitem"><span class="checkitem_parts">非公開</span></label></li>
		</ul>
		</div>
	</div>
	
	<div class="quick_colum_submit">
	<div><input type="submit" class="koukaisubmit" value="更 新"></div>
	高橋さん：更新ボタンクリックしたら公開日が現在時刻になるようにしてください
	</div>
	
</div><!-- quick_view -->





















<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div class="koukai_state">
<span>非公開</span>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div>
	
</div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->



























<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->






<!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 --><!-- アイテム開始 -->
<div class="view_row">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
</div><!-- view_row -->
<!-- アイテム終了 -->


<!-- アイテム開始 -->
<div class="view_row alter">
<div class="view_colum colum_sousa"><input type="checkbox" class="view_check" value="1">
<div>
<ul class="controll_panel">
<li><a href="#">クイック編集</a></li>
<li><a href="#">非公開にする</a></li>
<li><a href="#">編集</a></li>
<li><a href="#">表示</a></li>
<li class="trash"><a href="#">ゴミ箱へ</a></li>
</ul>
</div></div><!-- colum1 -->
<div class="view_colum colum_bukken">
コーポ新貝 205<br>
タカラ不動産</div><!-- colum2 -->
<div class="view_colum colum_gazo">
<div class="img_gazo img1"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403-150x150.jpg"></div>
<div class="img_gazo img2"><img src="http://www.takaraestate.com/chintai/search/images/16-150x150.jpg"></div>
<div class="img_gazo img3"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_2-150x150.jpg"></div>
<div class="img_gazo img4"><img src="http://www.takaraestate.com/chintai/search/images/k0005_1K403_11-150x150.jpg"></div>
<div class="img_gazo img5"><span>+18</span></div>
</div><!-- colum3 -->
<div class="view_colum colum_bango">k0239_1K207<br>
大分市原新町1-45</div><!-- colum4 -->
<div class="view_colum colum_yatin">¥ 20000<br>
1K(18㎡)</div><!-- colum5 -->
<div class="view_colum colum_date">2017/10/28</div><!-- colum6 -->
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
