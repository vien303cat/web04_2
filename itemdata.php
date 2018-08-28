<?php
if(empty($_SESSION["consumer"])){
    echo "<script>document.location.href='index.php?do=login'</script>";
}


$sql = "select * from item3,item2,item1 where item3_seq ='".$_GET["seq"]."' and item3_i1 = item1_seq and item3_i2 = item2_seq";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<form method='post'>
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle"  ><span style="font-size:36px"><?=$c2["item3_txt"]?></span></td>
  </tr>
  <tr>
    <td width="50%" rowspan="5" align="center" valign="middle" class="pp"><img src='img/<?=$c2["item3_img"]?>' width="250px" height="250px"></td>
    <td align="left" valign="middle" class="pp"><?=$c2["item1_txt"]?> > <?=$c2["item2_txt"]?> </td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="pp">編號:<?=$c2["item3_seq"]?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="pp">價格:<?=$c2["item3_price"]?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="pp">詳細說明:<?=$c2["item3_con"]?></td>
  </tr>
  <tr>
    <td align="left" valign="middle" class="pp">庫存量:<?=$c2["item3_howmuch"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" class="tt">購買數量<input tpye="text" id="howmuch" value="1" name="howmuch"><img src="img/0402.jpg" onclick="putbuy()"> </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="button" value="返回" onclick="document.location.href='index.php'" /></td>
  </tr>
</table>
</form>

<script>
function putbuy(){
  var how = document.getElementById("howmuch").value;
  document.location.href="buyapi.php?how="+how+"&seq=<?=$_GET['seq']?>";
}
</script>