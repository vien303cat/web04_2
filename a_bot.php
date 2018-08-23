<?php 

if(!empty($_POST["txt"])){
    $sql = "update bot set bot_txt = '".$_POST["txt"]."' ";
    mysqli_query($link,$sql);
}

$sql = "select * from bot ";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<form method="post">
<table width="80%" border="1" align="center" cellpadding="2" cellspacing="2" class="pp">
  <tr>
    <td colspan="2" align="center" valign="middle" style="font-size: 24px">編輯頁尾版權區</td>
  </tr>
  <tr>
    <td width="50%" align="center" valign="middle">頁尾宣告內容</td>
    <td width="50%" align="center" valign="middle"><input type="text" value="<?=$c2["bot_txt"]?>" name="txt"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="修改"><input type="reset" value="重置"></td>
  </tr>
</table>
</form>