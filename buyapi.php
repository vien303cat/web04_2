<?php 
include_once("head.php");

if(empty($_SESSION["consumer"])){
    echo "<script>document.location.href='index.php?do=login'</script>";
}

if(!empty($_GET["how"])){
    $sql = "insert into buycar value(null,'".$_SESSION["consumer"]."','".$_GET["seq"]."','".$_GET["how"]."')";
    mysqli_query($link,$sql);
}else{
    $sql = "insert into buycar value(null,'".$_SESSION["consumer"]."','".$_GET["seq"]."','1')";
    mysqli_query($link,$sql);
}

echo "<script>document.location.href='index.php?do=buycar'</script>";
?>