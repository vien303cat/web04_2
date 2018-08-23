<?php 
include_once("head.php");


if($_GET["table"] == "member"){
    $sql = "DELETE FROM member where member_seq = '".$_GET["seq"]."'";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=admin'</script>";
}





?>