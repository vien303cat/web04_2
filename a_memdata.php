<?php
if(!empty($_POST["ifup"])){
    $name = $_POST["name"];
    $cel  = $_POST["cel"];
    $lo   = $_POST["lo"];
    $email = $_POST["email"];
    $sql = "update consumer set consumer_name = '$name' , consumer_cel = '$cel' , consumer_lo = '$lo', consumer_email = '$email' where  consumer_seq ='".$_GET["seq"]."'";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=mem'</script>";

}

$sql = "select * from consumer where consumer_seq = '".$_GET["seq"]."'";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<form method="post">
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="2">
  <tr>
    <td colspan="2" align="center" valign="middle">會員註冊</td>
    <input type="hidden" value="1" name="ifup">
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">帳號</td>
    <td align="left" valign="middle" class="pp" width="50%"><?=$c2["consumer_acc"]?></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">密碼</td>
    <td align="left" valign="middle" class="pp" width="50%"><?=$c2["consumer_pw"]?></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%">累積交易金額</td>
    <td align="left" valign="middle" class="pp" width="50%">5億</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%">姓名</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="name" value="<?=$c2["consumer_name"]?>"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">電子信箱</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="email" value="<?=$c2["consumer_email"]?>"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">住址</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="lo" value="<?=$c2["consumer_lo"]?>"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">電話</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="cel" value="<?=$c2["consumer_cel"]?>"></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="修改"><input type="reset" value="重置"><input type="button" value="取消" onclick="document.location.href='admin.php?do=admin&redo=mem'"></td>
  </tr>
</table>
</form>