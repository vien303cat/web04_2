<?php
if(!empty($_GET["item1"])){
    $sql = "select * from item3 where item3_display = '1' and item3_i1 = '".$_GET["item1"]."'";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
    $row = mysqli_num_rows($c1);
}else if(!empty($_GET["item2"])){
    $sql = "select * from item3 where item3_display = '1' and item3_i2 = '".$_GET["item2"]."'";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
    $row = mysqli_num_rows($c1);
}

?>
<div style="overflow:auto;" >

<?php 
if($row >= 1){
    do{ ?>
<table width="80%" border="1" cellspacing="2" cellpadding="2" align="center">
  <tr>
    <td width="40%" rowspan="4" align="center" valign="middle" class="pp"><a href='index.php?do=itemdata&seq=<?=$c2["item3_seq"]?>'><img src="img/<?=$c2["item3_img"]?>" width="150" height="150"></a></td>
    <td align="center" valign="middle" class="tt"><?=$c2["item3_txt"]?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="pp">價錢:<?=$c2["item3_price"]?> <a href='buyapi.php?seq=<?=$c2["item3_seq"]?>'><img src='img/0402.jpg'></a></td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="pp">規格:<?=$c2["item3_type"]?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="pp">簡介:<?=nl2br($c2["item3_con"])?></td>
  </tr>

</table>

<?php }while($c2  = mysqli_fetch_assoc($c1));
    }else{ echo "此區無商品哦！"; } ?>
</div>