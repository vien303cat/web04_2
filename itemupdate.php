<?php 
if(!empty($_POST["itname"])){
  $bigmom = $_POST["bigmom"];
  $midmom = $_POST["midmom"];
  $itname =  $_POST["itname"];
  $price =  $_POST["price"];
  $type  = $_POST["type"];
  $howmuch = $_POST["howmuch"];
  $con = $_POST["con"];

  if(!empty($_FILES["img"]["name"])){
        copy($_FILES["img"]["tmp_name"],"img/".$imgname);
        $sql = "update item3 set item3_txt = '$itname' , item3_price = '$price' , item3_type = '$type' , item3_howmuch = '$howmuch' , item3_con = '$con' , item3_i1 = '$bigmom' , item3_i2 = '$midmom' , item3_img = '".$_POST["imgname"]."' where item3_seq = '".$_GET["seq"]."' ";
        mysqli_query($link,$sql);
    }else{
        $sql = "update item3 set item3_txt = '$itname' , item3_price = '$price' , item3_type = '$type' , item3_howmuch = '$howmuch' , item3_con = '$con' , item3_i1 = '$bigmom' , item3_i2 = '$midmom' where item3_seq = '".$_GET["seq"]."' ";
        mysqli_query($link,$sql);
    }
  echo "<script>document.location.href='admin.php?do=admin&redo=item'</script>";
}

$sqll = "select * from item3 where item3_seq = '".$_GET["seq"]."'";
$cc1  = mysqli_query($link,$sqll);
$cc2  = mysqli_fetch_assoc($cc1);
?>

<form method="post" enctype="multipart/form-data">
<table width="80%" border="-" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2" align="center" valign="middle">修改商品</td>
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
    <option value="<?=$c2["item1_seq"]?>" <?php if($c2["item1_seq"] == $cc2["item3_i1"]){ echo "selected"; } ?> > <?=$c2["item1_txt"]?> </option>
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
    <option value="<?=$c2["item2_seq"]?>" <?php if($c2["item2_seq"] == $cc2["item3_i2"]){ echo "selected"; } ?> ><?=$c2["item2_txt"]?></option>
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
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="itname" value="<?=$cc2["item3_txt"]?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品價格</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="price" value="<?=$cc2["item3_price"]?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >規格</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="type" value="<?=$cc2["item3_type"]?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >庫存量</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="text" name="howmuch" value="<?=$cc2["item3_howmuch"]?>"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品圖片</td>
    <td align="center" valign="middle" class="pp" width="50%" ><input type="file" name="img"><input type="hidden" name="imgname" value="<?=$cc2["item3_img"]?>"</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%" >商品介紹</td>
    <td align="center" valign="middle" class="pp" width="50%" ><textarea name="con"><?=$cc2["item3_con"]?></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="修改">|<input type="reset" value="重置">|<input type="button" value="返回"></td>
  </tr>
</table>
</form>