<?php
/* :::::::::::::::::::::::::::::::::::::::::::::::::::::
このファイルでやっている事
ログイン
::::::::::::::::::::::::::::::::::::::::::::::::::::: */
header("Content-Type: text/html; charset=UTF-8"); // キャラセット

?>
<html>
<head>
<title>顧客管理</title>
<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../guest.css?1">
<script type="text/javascript" src="/chintai/common/js/libs.js?11"></script>
<script type="text/javascript" src="/system/guest/guest.js?1111"></script>
</head>
<body class="login">

<div id="loginbox">
<p class="loglogo">顧客管理</span></p>
<form method="GET">
<input type="hidden" name="shubetu" class="shubetu" id="staff" value="staff">
<label class="name">名前<br><input type="text" id="name" name="name" value=""></label><br>
<label class="birth">生年月日<br>（数字のみで入力してください）<br><input type="password" id="birth" name="birth" value=""></label><br>
<input class="submitbutton" type="submit" value="ログイン" />




</form>
</div>



</body>
</html>
