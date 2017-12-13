<?php
	$title = "CSV入力";
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
<link rel="stylesheet" type="text/css" href="input.css?123" media="screen,tv" />





</head>

<body class="input">
<?php require_once "../inc/header.php"; ?>

<div id="content">


<form action="" method="post" enctype="multipart/form-data">
<div class="drag-drop-area">
    <div class="drag-drop-inside">
      <p class="drag-drop-info">ここにCSVファイルをドロップ</p>
      <input type="file" value="ファイルを選択" name="image">
    </div>
</div>
</form>















</div><!-- content -->

</body>
</html>
