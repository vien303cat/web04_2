<?php 
include_once("head.php");


if($_GET["table"] == "member"){
    $sql = "DELETE FROM member where member_seq = '".$_GET["seq"]."'";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=admin'</script>";
}else if($_GET["table"] == "item1"){
    $sql = "DELETE FROM item1 where item1_seq = '".$_GET["seq"]."'";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}else if($_GET["table"] == "item2"){
    $sql = "DELETE FROM item2 where item2_seq = '".$_GET["seq"]."'";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}else if($_GET["table"] == "item3"){
    $sql = "DELETE FROM item3 where item3_seq = '".$_GET["seq"]."'";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=item'</script>";
}




?>