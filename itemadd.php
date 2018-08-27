<?php 
if(!empty($_POST["itname"])){
  $bigmom = $_POST["bigmom"];
  $midmom = $_POST["midmom"];
  $itname =  $_POST["itname"];
  $price =  $_POST["price"];
  $type  = $_POST["type"];
  $howmuch = $_POST["howmuch"];
  $con = $_POST["con"];
  $imgname = $strtime.".".explode(".",$_FILES["img"]["name"])[1];
  copy($_FILES["img"]["tmp_name"],"img/".$imgname);
  $sql = "insert into item3 value(NULL,'$itname','$price','$type','$howmuch','$imgname','$con','$bigmom','$midmom','1')";
  mysqli_query($link,$sql);
  echo "<script>document.location.href='admin.php?do=admin&redo=item'</script>";
}


?>

<form method="post" enctype="multipart/form-data">
<table width="80%" border="-" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2" align="center" valign="middle">新增商品</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >所屬大類</td>
    <td align="center" valign="middle" class="pp" width="50%" >
    <select name='bigmom'>
    <?php
    $sql = "select * from item1";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
    do{
    ?>
    <option value="<?=$c2["item1_seq"]?>"><?=$c2["item1_txt"]?></option>
    <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
    </select>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >所屬中類</td>
    <td align="center" valign="middle" class="pp" width="50%" >
    <select name='midmom'>
    <?php
    $sql = "select * from item2";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
    do{
    ?>
    <option value="<?=$c2["item2_seq"]?>"><?=$c2["item2_txt"]?></option>
    <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
    </select>
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品編號</td>
    <td align="center" valign="middle" class="pp" width="50%" >完成分類後自動分配</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品名稱</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="itname"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品價格</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="price"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >規格</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="type"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >庫存量</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="howmuch"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品圖片</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="file" name="img"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品介紹</td>
    <td align="center" valign="middle" class="pp" width="50%" ><textarea name="con"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="新增">|<input type="reset" value="重置">|<input type="button" value="返回"></td>
  </tr>
</table>
</form>