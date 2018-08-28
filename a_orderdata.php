<?php 

$sql = "select * from buylog,item3,consumer where buylog_no = '".$_GET["no"]."' and consumer_seq = buylog_accseq and buylog_i3 = item3_seq";

$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);

?>

<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="5" align="center">訂單編號<?=$c2["buylog_no"]?>的詳細資料</td>
  </tr>
  <tr>
    <td colspan="2" align="center">會員帳號</td>
    <td colspan="3" align="center"><?=$c2["consumer_acc"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">姓名</td>
    <td colspan="3" align="center"><?=$c2["consumer_name"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">電子信箱</td>
    <td colspan="3" align="center"><?=$c2["consumer_email"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">聯絡地址</td>
    <td colspan="3" align="center"><?=$c2["consumer_lo"]?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">連絡電話</td>
    <td colspan="3" align="center"><?=$c2["consumer_cel"]?></td>
  </tr>
  <tr>
    <td width="20%" align="center">商品名稱</td>
    <td width="20%" align="center">編號</td>
    <td width="20%" align="center">數量</td>
    <td width="20%" align="center">單價</td>
    <td width="20%" align="center">小計</td>
  </tr>
  <?php $allp=""; do{ ?>
  <tr>
    <td width="20%" align="center"><?=$c2["item3_txt"]?></td> 
    <td width="20%" align="center"><?=$c2["item3_seq"]?></td>    
    <td width="20%" align="center"><?=$c2["buylog_howmuch"]?></td>
    <td width="20%" align="center"><?=$c2["item3_price"]?></td>    
    <td width="20%" align="center"><?php $i = $c2["item3_price"] * $c2["buylog_howmuch"] ; echo $i ; $allp +=$i ; ?></td> 
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
  <tr>
    <td colspan="5" align="center">總價:<?=$allp?></td>
  </tr>
  <tr>
    <td colspan="5" align="center">
    <input type="button" value="返回" onclick="document.location.href='admin.php?do=admin&redo=order'" />
    </td>
  </tr>
</table>
</form>