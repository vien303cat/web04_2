<?php
session_start();
$_SESSION["consumer"] = "";
echo "<script>document.location.href='index.php'</script>";
?>