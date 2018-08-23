<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./home_files/css.css" rel="stylesheet" type="text/css">
<script src="./home_files/js.js"></script>
<script src="./home_files/jquery-1.8.3.min.js"></script>
<link rel="icon" href="../favicon.ico">
<link rel="shortcut icon" href="favicon.ico">
</head>

<?php
session_start();
$link = mysqli_connect("localhost","root","","db04_2");
mysqli_query($link,"SET NAMES UTF8");
$strtime = strtotime("+6hour");
$nowtime = date("Y-m-d H:i:s");
$t_Y = date("Y");
$t_m = date("m");
$t_d = date("d");

include_once("weblist.php");

?>;