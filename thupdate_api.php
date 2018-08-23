<?php 
include_once("head.php");

if($_POST["item"] == "item1"){
    $sql = "update item1 set item1_txt = '".$_POST["upname"]."' where item1_seq = '".$_POST["seq"]."'";
    mysqli_query($link,$sql);
}else if($_POST["item"] == "item2"){
    $sql = "update item2 set item2_txt = '".$_POST["upname"]."' where item2_seq = '".$_POST["seq"]."'";
    mysqli_query($link,$sql);
}

?>