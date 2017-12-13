<?php
header("Content-Type: text/html; charset=UTF-8"); // キャラセット
require_once('../inc/db.php');

$val = $_GET["val"];

$trash = $_GET["trash"];
$current_year = $_GET["current_year"];
$year = date("Y");


$dumptable = '';
$tcolum = 'concat(f_date,f_tanto,f_name,f_yomi,f_tel,f_mail)';
if($val){ // 検索ワードが有る場合

// ////////////////////////////////////
//全角空白があったら半角空白にそろえる
$val = str_replace("　", " ", $val);
//空白文字で検索ワードを分割	
$word_array = preg_split("/[ ]+/",$val);	
//ワードごとに検索条件を追加

$str_sql = "select * from guest WHERE";

if($trash == 2){
	$str_sql .= " f_trash LIKE 2";
}else{
	$str_sql .= " f_trash NOT LIKE 2";
}

if(!$current_year or $current_year==0){
	$str_sql .= " AND f_date LIKE '%{$year}%'";
}


foreach( $word_array as $word_array_element ){
	$str_sql .= " AND $tcolum LIKE '%{$word_array_element}%'";
}

$str_sql .= " ORDER BY f_date DESC";



}else{ // 検索ワードが無い場合

$str_sql = "select * from guest";// テーブルの中身を全て表示
if($trash == 2){
	$str_sql .= " WHERE f_trash LIKE 2";
}else{
	$str_sql .= " WHERE f_trash NOT LIKE 2";
}
if(!$current_year or $current_year==0){
	$str_sql .= " AND f_date LIKE '%{$year}%'";
}
$str_sql .= " ORDER BY f_date DESC"; //契約日順にならべる
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
$dumptable .= '<div class="view_colum colum_sousa"><label><input type="checkbox" name="view_check[]" class="view_check" value="'.$arr_item[id].'"></label>';
$dumptable .= '<div class="koukai_state">';
$dumptable .= '<ul class="controll_panel">';
$dumptable .= '<li><a href="/system/guest/modify.php?id='.$arr_item[id].'">編集</a></li>';

if($trash == 2){
	$dumptable .= '<li class="trash_back"><a href="#" onclick="trash_back('.$arr_item[id].')">ゴミ箱から戻す</a></li>';
}else{
	$dumptable .= '<li class="trash"><a href="#" onclick="trash_move('.$arr_item[id].')">ゴミ箱へ</a></li>';
}


$dumptable .= '</ul>';
$dumptable .= '</div>';
$dumptable .= '</div><!-- colum1 -->';
$dumptable .= '<div class="view_colum colum_date">'.$arr_item[f_date].'</div><!-- colum5 -->';
$dumptable .= '<div class="view_colum colum_tanto">'.$arr_item[f_tanto].'</div><!-- colum2 -->';
$dumptable .= '<div class="view_colum colum_user">';
if($arr_item[f_rank] == 1){ $dumptable .= 'クレーマー'; }
elseif($arr_item[f_rank] == 2){$dumptable .= 'ゾンビ'; }
elseif($arr_item[f_rank] == 3){$dumptable .= '紹介'; }
elseif($arr_item[f_rank] == 4){ $dumptable .= 'リピーター'; }
else{ $dumptable .= '-'; }

$dumptable .= '<br>'.$arr_item[f_name].'<br><span class="yomi">'.$arr_item[f_yomi].'</span></div><!-- colum3 -->';
$dumptable .= '<div class="view_colum colum_tel"><a href="mailto:'.$arr_item[f_mail].'?body='.$arr_item[f_name].'">'.$arr_item[f_mail].'</a><br>'.$arr_item[f_tel].'</div><!-- colum4 -->';
$dumptable .= '<div class="view_colum colum_jiki clearfix">'.$arr_item[f_startliving_year];
if($arr_item[f_startliving_month]){ $dumptable .= '/'.$arr_item[f_startliving_month]; }
if($arr_item[f_startliving_day]){ $dumptable .= '/'.$arr_item[f_startliving_day]; }
if($arr_item[f_startliving]){
	if($arr_item[f_startliving] == 1){$dumptable .= '上旬';}
	elseif($arr_item[f_startliving] == 2){$dumptable .= '中旬';}
	elseif($arr_item[f_startliving] == 3){$dumptable .= '下旬';}
	elseif($arr_item[f_startliving] == 4){$dumptable .= 'まで';}
}
$dumptable .= '</div><!-- colum6 -->';
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

