<?php 
session_start();
$link = mysqli_connect("localhost","root","","db04_2");
mysqli_query($link,"SET NAMES UTF8");

$sql = "select * from consumer where consumer_acc ='".$_POST["acc"]."'";
$c1  = mysqli_query($link,$sql);
$row = mysqli_num_rows($c1);
if($row == 1){
    echo "此帳號已存在";
}else{
    echo "此帳號可以使用";
}

?>