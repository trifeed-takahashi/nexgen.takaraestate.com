<?php
	$title = "物件登録";
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
<script type="text/javascript" src="/system/common/js/widget.js?123123"></script>
<script type="text/javascript" src="new.js?123"></script>

<link rel="stylesheet" type="text/css" href="/system/common/css/import.css?123" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="/chintai/search/css/detail.css?123" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="new.css?1212123112123" media="screen,tv" />





</head>

<body class="new">
<?php require_once "../inc/header.php"; ?>

<div id="content">

















<div class="photo_box">
<form action="" method="post" enctype="multipart/form-data">
<div class="photo">
	
    <div class="drag-drop-area">
    <div class="drag-drop-inside">
      <p class="drag-drop-info">ここに画像をドロップ</p>
      <input type="file" value="ファイルを選択" name="image">
    </div>
    </div>
    
    <div id="upload_file_list">
	    <div class="upload_files clearfix">
	    <div class="upload_title">外観</div>
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1.jpg" alt="" title=""/></div>
	    <div class="upload_name"><input type="text" value="k0171_1.jpg"><a href="" class="delete_upload">削除</a></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_title">間取</div>
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501.jpg" alt="" title=""/></div>
	    <div class="upload_name"><input type="text" value="k0171_1LDK501.jpg"><a href="" class="delete_upload">削除</a></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_title">室内メイン</div>
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_title">室内2</div>
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_11.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_title">室内3</div>
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_title">室内4</div>
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_title">室内5</div>
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
    </div>

</div>
</form>

<div class="youtube">
	<input type="text" value="" placeholder="youtube埋込コード">
</div>

</div><!-- photo_box -->




















<div class="detail_info_box">


<div class="detail_box">

<div class="section detail_title clearfix">
    
<div class="detail_title_text">
	<div class="detail_title_ttl"><input type="text" value="リノベーション！初期費用ゼロ！敷金・礼金・前家賃０物件の募集開始です！" placeholder="タイトル"></div>
	<div class="detail_title_box clearfix">
	<div><input type="text" value="" placeholder="物件番号"></div>
	<div><input type="text" value="" placeholder="元付名称"></div>
	<div><input type="text" value="" placeholder="元付電話番号"></div>
	<div><input type="text" value="" placeholder="元付ファックス"></div>
	<div><input type="text" value="" placeholder="元付メールアドレス"></div>
	<div class="memoarea"><textarea placeholder="報酬"></textarea></div>
	<div class="memoarea"><textarea placeholder="非公開メモ"></textarea></div>
	</div>
</div>
</div><!-- detail_title -->









<div id="room_info" class="section clearfix">
<div class="section_title">
	<h2>部屋</h2>
</div>

<div class="clearfix">
	<dl class="section_info_dl clearfix">
		<dt>間取</dt>
		<dd class="madori mini">
<input type="text" value="" placeholder="2">
<select>
    <option value="" selected>選択</option>
    <option value="R">R</option>
    <option value="K">K</option>
    <option value="DK">DK</option>
    <option value="LDK">LDK</option>
    <option value="SLDK">SLDK</option>
</select>
		</dd>
		<dt>間取内訳</dt>
		<dd class="madori">
<div>
1
<select>
    <option value="" selected>選択</option>
    <option value="R">洋室</option>
    <option value="K">和室</option>
    <option value="DK">K</option>
    <option value="LDK">DK</option>
    <option value="SLDK">LDK</option>
    <option value="SLDK">S</option>
</select>
<label class="mini">帖 <input type="text" value="" placeholder="6"></label>
<label class="mini">数 <input type="text" value="" placeholder="2"></label>
</div>

<div>
2
<select>
    <option value="" selected>選択</option>
    <option value="R">洋室</option>
    <option value="K">和室</option>
    <option value="DK">K</option>
    <option value="LDK">DK</option>
    <option value="SLDK">LDK</option>
    <option value="SLDK">S</option>
</select>
<label class="mini">帖 <input type="text" value="" placeholder="6"></label>
<label class="mini">数 <input type="text" value="" placeholder="2"></label>
</div>

<div>
3
<select>
    <option value="" selected>選択</option>
    <option value="R">洋室</option>
    <option value="K">和室</option>
    <option value="DK">K</option>
    <option value="LDK">DK</option>
    <option value="SLDK">LDK</option>
    <option value="SLDK">S</option>
</select>
<label class="mini">帖 <input type="text" value="" placeholder="6"></label>
<label class="mini">数 <input type="text" value="" placeholder="2"></label>
</div>

<div>
4
<select>
    <option value="" selected>選択</option>
    <option value="R">洋室</option>
    <option value="K">和室</option>
    <option value="DK">K</option>
    <option value="LDK">DK</option>
    <option value="SLDK">LDK</option>
    <option value="SLDK">S</option>
</select>
<label class="mini">帖 <input type="text" value="" placeholder="6"></label>
<label class="mini">数 <input type="text" value="" placeholder="2"></label>
</div>

<div>
5
<select>
    <option value="" selected>選択</option>
    <option value="R">洋室</option>
    <option value="K">和室</option>
    <option value="DK">K</option>
    <option value="LDK">DK</option>
    <option value="SLDK">LDK</option>
    <option value="SLDK">S</option>
</select>
<label class="mini">帖 <input type="text" value="" placeholder="6"></label>
<label class="mini">数 <input type="text" value="" placeholder="2"></label>
</div>



		</dd>
		<dt>専有面積</dt>
		<dd class="mini"><input type="text" value="" placeholder="32"> m²</dd>
		<dt>バルコニー向き</dt>
		<dd>
<select>
    <option value="" selected>選択</option>
    <option value="">なし</option>
    <option value="">北</option>
    <option value="">北東</option>
    <option value="">東</option>
    <option value="">南東</option>
    <option value="">南</option>
    <option value="">南西</option>
    <option value="">西</option>
    <option value="">北西</option>
</select>
		</dd>
		<dt>お部屋の階数</dt>
		<dd class="mini"><input type="text" value="" placeholder="2"> 階</dd>
		<dt>入居状況</dt>
		<dd class="nyukyo">
<select>
    <option value="" selected>現況</option>
    <option value="">空家</option>
    <option value="">居住中</option>
    <option value="">未完成</option>
</select>
<label>退去日 <input type="text" placeholder="yyyy/mm/dd"></label>
</dd>
		<dt>入居可能時期</dt>
		<dd>
<select>
    <option value="" selected>時期</option>
    <option value="">即時</option>
    <option value="">期日指定</option>
    <option value="">相談</option>
</select>
<label>入居可能日 <input type="text" placeholder="yyyy/mm/dd"></label>
<label><select>
    <option value="" selected>旬</option>
    <option value="">上旬</option>
    <option value="">中旬</option>
    <option value="">下旬</option>
</select></label>
</dd>

<dt>コメント</dt>
<dd><textarea placeholder="メモ"></textarea></dd>
	</dl>

</div>

</div><!-- room_info -->









<div id="bill_info" class="section clearfix">
<div class="section_title">
	<h2>建物</h2>
</div>

<dl class="section_info_dl clearfix">
	<dt>物件種別</dt>
	<dd><select>
    <option value="" selected>選択</option>
    <option value="">マンション</option>
    <option value="">アパート</option>
    <option value="">戸建</option>
    <option value="">駐車場</option>
</select>
</dd>
	<dt>所在地</dt>
	<dd>
<select>
    <option value="" selected>大分県</option>
</select>
<select>
    <option value="" selected>大分市</option>
    <option value="">別府市</option>
    <option value="">杵築市</option>
</select><br>
<label>町・丁目 <input type="text" placeholder="大手町1丁目"></label><label>詳細（非公開） <input type="text" placeholder="1-3"></label><br>
<label>建物名 <input type="text" placeholder="寿ビル"></label><label>号室 <input type="text" placeholder="101"></label><br>
<label>物件名の公開<select>
    <option value="" selected>選択</option>
    <option value="">公開</option>
    <option value="">非公開</option>
</select></label>
	</dd>
	<dt>構造・階数</dt>
	<dd class="mini">
<label>
<select>
    <option value="" selected>構造</option>
    <option value="">木造</option>
    <option value="">ブロック</option>
    <option value="">鉄骨造</option>
    <option value="">RC</option>
    <option value="">SRC</option>
    <option value="">軽量鉄骨</option>
</select></label>
<label>地上 <input type="text" placeholder="2"> 階建　地下 <input type="text" placeholder="2"> 階</label>
</dd>
	<dt>築年月</dt>
	<dd><input type="text" placeholder="yyyy/mm"></dd>
	<dt>交通1</dt>
	<dd>
<label>
<select>
    <option value="" selected>路線</option>
    <option value="">ＪＲ久大本線</option>
    <option value="">ＪＲ日田彦山線</option>
    <option value="">ＪＲ日豊本線</option>
    <option value="">ＪＲ豊肥本線</option>
</select></label>
<label>
<select>
    <option value="" selected>駅</option>
    <option value="">大分</option>
    <option value="">牧</option>
</select></label>
<label class="mini">距離 <input type="text" placeholder="800"> m</label><label class="mini">徒歩時間 <input type="text" placeholder="10">分</label>
	</dd>
	<dt>交通2</dt>
	<dd>
<label>路線 
<select>
    <option value="" selected>選択</option>
    <option value="" selected>バス</option>
</select></label>
<input type="text" placeholder="バス停名"><br>
<label class="mini">距離 <input type="text" placeholder="800"> m</label><label class="mini">徒歩時間 <input type="text" placeholder="10">分</label>
	</dd>
	<dt>学校区</dt>
	<dd><label><input type="text" placeholder="小学校"></label><label><input type="text" placeholder="中学校"></label>
	</dd>
	<dt>取引態様</dt>
	<dd>
<select>
    <option value="" selected>取引態様</option>
    <option value="">仲介</option>
    <option value="">代理</option>
    <option value="">貸主</option>
    <option value="">専任</option>
</select>
	</dd>
	<dt>最終更新日</dt>
	<dd><input type="text" placeholder="yyyy/mm"><br>これの設定がなければ自動で前日の日付を表示</dd>
</dl>

</div><!-- bill_info -->










<div id="setsubi_info" class="section clearfix">
<div class="section_title clearfix">
	<h2>設備・条件</h2>
</div>

<div class="section_info_ul_box"><!-- メニュー閉じる時はここに box_open-->
<h3>入居条件</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">ペット可</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">ネコ可</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">楽器相談可</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">事務所利用可</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">リノベーション</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">デザインリフォーム</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">デザイナーズ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">敷金礼金0</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">保証人不要</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">女性限定</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">分譲賃貸</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">インターネット無料</span></label></li>
</ul>

<h3>キッチン</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">キッチン</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">ガスコンロ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">電気コンロ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">IHコンロ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">1口コンロ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">2口コンロ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">3口コンロ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">ガスコンロ持込</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">システムキッチン</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">カウンターキッチン</span></label></li>
</ul>

<h3>バストイレ・洗面</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">バストイレ別</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">脱衣所</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">独立洗面</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">シャンプードレッサー</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">シャワー</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">給湯</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">浴室乾燥機</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">追い炊き</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">洗濯機置き場</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">室内洗濯機置き場</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">ウォシュレット</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">1坪風呂</span></label></li>
</ul>



<h3>ライフライン</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">プロパンガス</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">都市ガス</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">オール電化</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">エコキュート</span></label></li>
</ul>


<h3>通信</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">CATV</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">CSアンテナ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">BSアンテナ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">インターネット有</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">光ファイバー</span></label></li>
</ul>

<h3>建物設備</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">エレベータ</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">駐車場有</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">バイク置き場</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">駐輪場</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">宅配ボックス</span></label></li>
</ul>

<h3>部屋条件</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">フローリング</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">エアコン</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">専用庭</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">バルコニー</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">出窓</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">角部屋</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">家具家電付</span></label></li>
</ul>

<h3>収納</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">収納</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">W.INクローゼット</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">床下収納</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">トランクルーム</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">ロフト付き</span></label></li>
</ul>

<h3>セキュリティ</h3>
<ul class="section_info_ul clearfix">
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">オートロック</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">TVドアホン</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">セキュリティシステム</span></label></li>
<li><label><input type="checkbox" class="checkitem"><span class="checkitem_parts">カードキーシステム</span></label></li>
</ul>
</div><!-- section_info_ul_box -->


</div><!-- bill_info -->

















<div id="price_info" class="section clearfix">
<div class="section_title">
	<h2>料金</h2>
</div>

<div class="clearfix">
<div class="tuki section_half section_half_l">
<h3>月額</h3>
<dl class="section_info_dl clearfix">
	<dt>家賃</dt>
	<dd><input type="text" placeholder="37000"> 円</dd>
	<dt>共益費</dt>
	<dd><input type="text" placeholder="3000"> 円</dd>
	<dt>町内会費</dt>
	<dd><input type="text" placeholder="300"> 円</dd>
	<dt>水道料</dt>
	<dd><input type="text" placeholder="2000"> 円</dd>
	<dt>
<select>
    <option value="" selected>選択</option>
    <option value="">2</option>
    <option value="">3</option>
    <option value="">4</option>
    <option value="">追加なし</option>
</select>
人目以降水道料</dt>
	<dd><input type="text" placeholder="1000"> 円</dd>
	<dt>駐車料</dt>
	<dd>
<label>空 
<select>
    <option value="" selected>選択</option>
    <option value="">空有</option>
    <option value="">空無</option>
    <option value="">近隣</option>
    <option value="">無</option>
</select>
</label>
<input type="text" placeholder="5000"> 円</dd>
	<dd class="biko"><input type="text" placeholder="備考"></dd>
	<dt>2台目駐車料</dt>
	<dd><input type="text" placeholder="5000"> 円</dd>
	<dt><input type="text" placeholder="その他項目1"></dt>
	<dd><input type="text" placeholder="3000"> 円</dd>
	<dt><input type="text" placeholder="その他項目2"></dt>
	<dd><input type="text" placeholder="3000"> 円</dd>
	<dt><input type="text" placeholder="その他項目3"></dt>
	<dd><input type="text" placeholder="3000"> 円</dd>
	
	<dt class="total">合計</dt>
	<dd class="total">自動計算</dd>
</dl>
</div>

<div class="syoki section_half section_half_r">
<h3>契約時</h3>
<dl class="section_info_dl clearfix">
	<dt>敷金</dt>
	<dd><input type="text" placeholder="1"></dd>
	<dt>礼金</dt>
	<dd><input type="text" placeholder="60000"></dd>
	<dt>保証金</dt>
	<dd><input type="text" placeholder="60000"></dd>
	<dt>保証会社契約料</dt>
	<dd>
<select>
    <option value="" selected>保証会社</option>
    <option value="">ジェイリース</option>
    <option value="">アルファー</option>
    <option value="">JID 50%</option>
    <option value="">JID 30%</option>
    <option value="">その他</option>
    <option value="">加入義務なし</option>
</select><br>
<input type="text" placeholder="30000"> 円
</dd>
	<dt>鍵交換代</dt>
	<dd><input type="text" placeholder="税込"> 円</dd>
	<dt>火災保険料</dt>
	<dd class="mini"><input type="text" placeholder="6900"> 円/<input type="text" placeholder="1"> 年更新</dd>
	<dt><input type="text" placeholder="その他項目1"></dt>
	<dd><input type="text" placeholder="3000"> 円</dd>
	<dt><input type="text" placeholder="その他項目2"></dt>
	<dd><input type="text" placeholder="3000"> 円</dd>
	<dt><input type="text" placeholder="その他項目3"></dt>
	<dd><input type="text" placeholder="3000"> 円</dd>
	<dt>仲介手数料</dt>
	<dd><input type="text" placeholder="100"> %</dd>
	<dt>初月賃料</dt>
	<dd>自動計算</dd>
	<dt class="freerent">フリーレント割引</dt>
	<dd class="mini"><input type="text" placeholder="1"> か月</dd>
	
	<dt class="total">合計</dt>
	<dd class="total">自動計算</dd>
</dl>
</div>
</div>

</div><!-- price_info -->

















<div id="saiten_info" class="section clearfix">
<div class="section_title">
	<h2>採点</h2>
</div>

<div class="clearfix">
<h3>総合　　自動計算</h3>

<div class="saiten_list clearfix">
<div class="saiten_list_item clearfix"><p class="sttl">清潔</p>
<p class="star"><select>
    <option value="" selected>選択</option>
    <option value="">★☆☆☆☆</option>
    <option value="">★★☆☆☆</option>
    <option value="">★★★☆☆</option>
    <option value="">★★★★☆</option>
    <option value="">★★★★★</option>
</select>
</p></div>
<div class="saiten_list_item clearfix"><p class="sttl">立地</p><p class="star"><select>
    <option value="" selected>選択</option>
    <option value="">★☆☆☆☆</option>
    <option value="">★★☆☆☆</option>
    <option value="">★★★☆☆</option>
    <option value="">★★★★☆</option>
    <option value="">★★★★★</option>
</select></p></div>
<div class="saiten_list_item clearfix"><p class="sttl">デザイン</p><p class="star"><select>
    <option value="" selected>選択</option>
    <option value="">★☆☆☆☆</option>
    <option value="">★★☆☆☆</option>
    <option value="">★★★☆☆</option>
    <option value="">★★★★☆</option>
    <option value="">★★★★★</option>
</select></p></div>
<div class="saiten_list_item clearfix"><p class="sttl">コスパ</p><p class="star"><select>
    <option value="" selected>選択</option>
    <option value="">★☆☆☆☆</option>
    <option value="">★★☆☆☆</option>
    <option value="">★★★☆☆</option>
    <option value="">★★★★☆</option>
    <option value="">★★★★★</option>
</select></p></div>
</div>

</div>

</div><!-- saiten_info -->









</div><!-- detail_box -->



<div class="info_box">
<div class="info_box_ttl">
公開
</div>

<div class="info_box_inner">

<dl class="section_info_dl clearfix">
	<dt>公開状態</dt>
	<dd>
<ul class="section_info_ul clearfix">
<li class="koukai1"><label><input type="radio" name="koukai" class="checkitem" checked><span class="checkitem_parts">一般公開</span></label></li>
<li class="koukai2"><label><input type="radio" name="koukai" class="checkitem"><span class="checkitem_parts">会員公開</span></label></li>
<li class="koukai2"><label><input type="radio" name="koukai" class="checkitem"><span class="checkitem_parts">パスワード保護</span></label></li>
<li class="koukai3"><label><input type="radio" name="koukai" class="checkitem"><span class="checkitem_parts">非公開</span></label></li>
</ul>
	</dd>
	<dt>公開日時</dt>
	<dd>
<input type="text" class="koukai_year" placeholder="yyyy">年 <input type="text" class="koukai_month" placeholder="mm">月 <input type="text" class="koukai_day" placeholder="dd">日 <input type="text" class="koukai_hour" placeholder="hh">：<input type="text" class="koukai_min" placeholder="mm">
	</dd>
</dl>

<div><input type="submit" class="koukaisubmit" value="公 開"></div>



</div><!-- info_box_inner -->
<div class="controll clearfix">
<p class="preview"><a href="#">プレビュー</a></p>
<p class="duplicate"><a href="#">複製</a></p>
<p class="trash"><a href="#">ゴミ箱へ</a></p>
</div>
</div><!-- info_box -->




























<div class="allwidth_section clearfix">


<div id="map_info" class="section clearfix">
<div class="section_title">
	<h2>エリア</h2>
</div>

<div class="erea_maps clearfix">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1309.1612853305594!2d131.6126364336616!3d33.234777488506744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35469f706a5b5949%3A0x512781981664cb49!2z44CSODcwLTAwMjIg5aSn5YiG55yM5aSn5YiG5biC5aSn5omL55S677yR5LiB55uu77yR4oiS77yT!5e0!3m2!1sja!2sjp!4v1506676771138" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>

</div><!-- map_info -->












</div><!-- allwidth_section -->









</div><!-- detail_info_box -->



















</div><!-- content -->

</body>
</html>
