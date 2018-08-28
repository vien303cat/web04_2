<?php 
if(empty($_SESSION["consumer"])){
    echo "<script>document.location.href='index.php?do=login'</script>";
}


$sql = "select * from buycar,item3 where buycar_acc = '".$_SESSION["consumer"]."' and buycar_i3 = item3_seq";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
$row = mysqli_num_rows($c1);
if($row >= 1 ){
?>

<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="7" align="center" valign="middle"><?=$_SESSION["consumer"]?> 的購物車</td>
  </tr>
  <tr>
    <td width="12%" align="center" valign="middle">編號</td>
    <td width="18%" align="center" valign="middle">商品名稱</td>
    <td width="6%" align="center" valign="middle">數量</td>
    <td width="12%" align="center" valign="middle">庫存量</td>
    <td width="12%" align="center" valign="middle">單價</td>
    <td width="12%" align="center" valign="middle">總和</td>
    <td width="12%" align="center" valign="middle">刪除</td>
  </tr>
  <?php do{ ?>
  <tr>
    <td width="12%" align="center" valign="middle"><?=$c2["item3_seq"]?></td>
    <td width="18%" align="center" valign="middle"><?=$c2["item3_txt"]?></td>
    <td width="6%" align="center" valign="middle"><?=$c2["buycar_howmuch"]?></td>
    <td width="12%" align="center" valign="middle"><?=$c2["item3_howmuch"]?></td>
    <td width="12%" align="center" valign="middle"><?=$c2["item3_price"]?></td>
    <td width="12%" align="center" valign="middle">
    <?php
    $tot = $c2["item3_price"] * $c2["buycar_howmuch"] ;
    echo $tot ;
    ?>
    </td>
    <td width="12%" align="center" valign="middle"><img src="img/0415.jpg" onclick="document.location.href='delete_api.php?table=buycar&seq=<?=$c2["buycar_seq"]?>'"/></td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
  <tr>
    <td colspan="7" align="center" valign="middle">
    <img src="img/0411.jpg" onclick="document.location.href='index.php'"/>
    <img src="img/0412.jpg" onclick="document.location.href='index.php?do=buycheck'"/>
    </td>
  </tr>
</table>
<?php }else{ echo "購物車是空的！"; } ?>