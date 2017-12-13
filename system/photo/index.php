<?php
	$title = "画像";
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
<script type="text/javascript" src="/system/common/js/widget.js?123123123"></script>
<script type="text/javascript" src="photo.js?123"></script>

<link rel="stylesheet" type="text/css" href="/system/common/css/import.css?1234543" media="screen,tv" />
<link rel="stylesheet" type="text/css" href="photo.css?124563" media="screen,tv" />





</head>

<body class="photo">
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



<div class="search">
<input type="text" class="search_form" placeholder="画像ファイル名">
</div><!-- search -->



</div><!-- filter_menus -->












<div id="load_file_head">
	    <div class="upload_files clearfix">
	    <div class="upload_sousa"><input type="checkbox" class="view_check" value="1"> 操作</div><!-- colum1 -->
	    <div class="upload_image">画像</div>
	    <div class="upload_name">ファイル名</div>
	    </div>
</div>
<div id="load_file_list">
	    <div class="upload_files clearfix">
	    <div class="upload_sousa"><input type="checkbox" class="view_check" value="1"></div><!-- colum1 -->
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1.jpg</p><p><a href="" class="delete_upload">削除</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_sousa"><input type="checkbox" class="view_check" value="1"></div><!-- colum1 -->
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501.jpg</p><p><a href="" class="delete_upload">削除</a></p></div>
	    </div>
	    
</div>
















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


















<form action="" method="post" enctype="multipart/form-data">
<div class="drag-drop-area">
    <div class="drag-drop-inside">
      <p class="drag-drop-info">ここに画像をドロップ</p>
      <input type="file" value="ファイルを選択" name="image">
    </div>
</div>
</form>
    
<div id="upload_file_list">
	    <div class="upload_files clearfix">
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1.jpg</p><p><a href="" class="delete_upload">削除</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501.jpg</p><p><a href="" class="delete_upload">削除</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_11.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
	    
	    <div class="upload_files clearfix">
	    <div class="upload_image"><img src="http://www.takaraestate.com/chintai/search/images/k0171_1LDK501_2.jpg" alt="" title=""/></div>
	    <div class="upload_name"><p>k0171_1LDK501_2.jpgをアップロード中...</p><p><a href="" class="delete_upload">アップロードをキャンセル</a></p></div>
	    </div>
</div>













</div><!-- content -->

</body>
</html>
