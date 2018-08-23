<?php


$dolist["news"] = "news.php";
$dolist["n_1"] = "n_1.php";
$dolist["n_2"] = "n_2.php";
$dolist["look"] = "look.php";
$dolist["adminlog"] = "adminlog.php";


////////////////////////////////

$relist["admin"] = "a_admin.php";
$relist["adminadd"] = "adminadd.php";
$relist["bot"] = "a_bot.php";
$relist["th"] = "th.php";



if(!empty($_GET["do"])){
    $do = $_GET["do"];
}else{
    $do = "all";
}
if(!empty($_GET["redo"])){
    $redo = $_GET["redo"];
}else{
    $redo = "admin";
}

?>