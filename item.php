<?php

if(!empty($_POST["upup"])){
  $sql = "update item3 set item3_display = '1' where item3_seq='".$_POST["upup"]."' ;";
  mysqli_query($link,$sql);
}
if(!empty($_POST["downdown"])){
  $sql = "update item3 set item3_display = '0' where item3_seq='".$_POST["downdown"]."' ;";
  mysqli_query($link,$sql);
}

$sql = "select * from item3";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>


<table width="80%" border="-" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="5" align="center" valign="middle">商品管理</td>
  </tr>
  <tr>
    <td colspan="5" align="center" valign="middle"><input type="button" value="新增商品" onclick="document.location.href='admin.php?do=admin&redo=itemadd'" ></td>
  </tr>
  <tr>
    <td width="15%" align="center" valign="middle">編號</td>
    <td width="25%" align="center" valign="middle">商品名稱</td>
    <td width="15%" align="center" valign="middle">庫存量</td>
    <td width="15%" align="center" valign="middle">狀態</td>
    <td width="30%" align="center" valign="middle">操作</td>
  </tr>
  <?php do{  ?>
  <tr>
    <td width="15%" align="center" valign="middle"><?=$c2["item3_seq"]?></td>
    <td width="25%" align="center" valign="middle"><?=$c2["item3_txt"]?></td>
    <td width="15%" align="center" valign="middle"><?=$c2["item3_howmuch"]?></td>
    <td width="15%" align="center" valign="middle"><?php if($c2["item3_display"] == 1){ echo "販售中"; }else{ echo "已下架"; } ?></td>
    <td width="30%" align="center" valign="middle">
    <input type="button" value="修改" onclick="document.location.href='admin.php?do=admin&redo=itemupdate&seq=<?=$c2["item3_seq"]?>'" >　<input type="button" value="刪除" onclick="document.location.href='delete_api.php?table=item3&seq=<?=$c2["item3_seq"]?>'">
    <form method="post"><input type="hidden" name="upup" value="<?=$c2["item3_seq"]?>"><input type="submit" value="上架"></form>
    <form method="post"><input type="hidden" name="downdown" value="<?=$c2["item3_seq"]?>"><input type="submit" value="下架"></form>
    </td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
</table>