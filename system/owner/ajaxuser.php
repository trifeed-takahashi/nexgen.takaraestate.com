<?php
header("Content-Type: text/html; charset=UTF-8"); // キャラセット
require_once('../inc/db.php');

$val = $_GET["val"];

$trash = $_GET["trash"];


$dumptable = '';
$tcolum = 'concat(bukken,bukkenyomi,bukkenaddress,ownername,owneryomi,ownertel,kessaitanto)';
if($val){ // 検索ワードが有る場合

// ////////////////////////////////////
//全角空白があったら半角空白にそろえる
$val = str_replace("　", " ", $val);
//空白文字で検索ワードを分割	
$word_array = preg_split("/[ ]+/",$val);	
//ワードごとに検索条件を追加

$str_sql = "select * from owner WHERE";

if($trash == 2){
	$str_sql .= " trash LIKE 2";
}else{
	$str_sql .= " trash NOT LIKE 2";
}



foreach( $word_array as $word_array_element ){
	$str_sql .= " AND $tcolum LIKE '%{$word_array_element}%'";
}

$str_sql .= " ORDER BY ownername DESC";



}else{ // 検索ワードが無い場合

$str_sql = "select * from owner";// テーブルの中身を全て表示
if($trash == 2){
	$str_sql .= " WHERE trash LIKE 2";
}else{
	$str_sql .= " WHERE trash NOT LIKE 2";
}
$str_sql .= " ORDER BY ownername DESC"; //契約日順にならべる
}


$rs = mysql_query($str_sql,$db);// テーブル実行


$alter =0;





// ///////////////////////////////////////////////////////
// テンプレートスタート
// ///////////////////////////////////////////////////////
while($arr_item = mysql_fetch_assoc($rs)){



if($alter === 0){ $alter=1; }
else{ $alter=0; }

$dumptable .= '<div class="view_row';
if($alter == 1){
	$dumptable .= ' alter';
}
$dumptable .= '">';
$dumptable .= '<div class="view_colum colum_sousa"><label><input type="checkbox" name="view_check[]" class="view_check" value="'.$arr_item[bukkenid].'"></label>';
$dumptable .= '<div class="koukai_state">';
$dumptable .= '<ul class="controll_panel">';
$dumptable .= '<li><a href="/system/owner/modify.php?id='.$arr_item[bukkenid].'">編集</a></li>';

if($trash == 2){
	$dumptable .= '<li class="trash_back"><a href="#" onclick="trash_back('.$arr_item[bukkenid].')">ゴミ箱から戻す</a></li>';
}else{
	$dumptable .= '<li class="trash"><a href="#" onclick="trash_move('.$arr_item[bukkenid].')">ゴミ箱へ</a></li>';
}


$dumptable .= '</ul>';
$dumptable .= '</div>';
$dumptable .= '</div><!-- colum1 -->';
$dumptable .= '<div class="view_colum colum_name">'.$arr_item[ownername].'<br><span class="yomi">'.$arr_item[owneryomi].'</span></div><!-- colum5 -->';
$dumptable .= '<div class="view_colum colum_tel">'.$arr_item[ownertel].'</div><!-- colum2 -->';
$dumptable .= '<div class="view_colum colum_bukken">'.$arr_item[bukken].'<br><a href="'.$arr_item[bukkengmap].'" target="_blank">'.$arr_item[bukkenaddress].'</a></div><!-- colum3 -->';
$dumptable .= '<div class="view_colum colum_tanto">';
$dumptable .= '<img src="/common/img/';
if($arr_item[kessaitanto] == "矢野宏一"){$dumptable .= 'kouichi';}
elseif($arr_item[kessaitanto] == "矢野広彰"){$dumptable .= 'hiro';}
elseif($arr_item[kessaitanto] == "加藤文哉"){$dumptable .= 'kato';}
elseif($arr_item[kessaitanto] == "西村考司"){$dumptable .= 'koji';}
elseif($arr_item[kessaitanto] == "幸野愛"){$dumptable .= 'kouno';}
elseif($arr_item[kessaitanto] == "冨高綾"){$dumptable .= 'tomitaka';}
$dumptable .= '.jpg">';
$dumptable .= '</div><!-- colum4 -->';
$dumptable .= '<div class="view_colum colum_biko clearfix">'.$arr_item[ownerchui].'</div><!-- colum6 -->';
$dumptable .= '</div><!-- view_row -->';
}
// ///////////////////////////////////////////////////////
// テンプレートエンド
// ///////////////////////////////////////////////////////




if(mysql_num_rows($rs)){
	$dumptable .= '<div class="list_navi_box">';
	$dumptable .= '<p class="navi_text">'.mysql_num_rows($rs).'件を表示中</p>';
	$dumptable .= '</div><!-- list_navi_box -->';
}else{
	$dumptable .= '<div class="list_navi_box">';
	$dumptable .= '<p class="navi_text">該当するデータがありません</p>';
	$dumptable .= '</div><!-- list_navi_box -->';
}






print $dumptable;


// データベース切断
mysql_close($db);






?>

