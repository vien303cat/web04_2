<?php 
if(empty($_SESSION["consumer"])){
    echo "<script>document.location.href='index.php?do=login'</script>";
}
if(!empty($_POST["okbuy"])){
    $no = date("YmdHis",$strtime);
    for($i = 0 ; $i < count($_POST["seq"]);$i++){
        $sql = "insert into buylog value(null,'".$_POST["accseq"]."','".$_POST["seq"][$i]."','".$_POST["howmuch"][$i]."','".$_POST["ii"][$i]."','".$no."','".$nowtime."')";
        mysqli_query($link,$sql);
    }
    $sql = "DELETE FROM buycar where buycar_acc = '".$_SESSION["consumer"]."'";
    mysqli_query($link,$sql);
    echo "<script>alert('訂購成功 感謝您的訂購')</script>";
    echo "<script>document.location.href='index.php'</script>";
}



$sql = "select * from buycar,item3,consumer where buycar_acc = '".$_SESSION["consumer"]."' and consumer_acc = '".$_SESSION["consumer"]."' and buycar_i3 = item3_seq";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);

?>

<form method="post" action="">
<input type="hidden" value="<?=$c2["consumer_seq"]?>" name="accseq">
<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="5" align="center">填寫資料</td>
  </tr>
  <tr>
    <td colspan="2" align="center">登入帳號</td>
    <td colspan="3" align="center"><?=$_SESSION["consumer"]?></td>
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
    <td width="20%" align="center"><?=$c2["item3_seq"]?></td>     <input type="hidden" value="<?=$c2["item3_seq"]?>" name="seq[]">
    <td width="20%" align="center"><?=$c2["buycar_howmuch"]?></td><input type="hidden" value="<?=$c2["buycar_howmuch"]?>" name="howmuch[]">
    <td width="20%" align="center"><?=$c2["item3_price"]?></td>    
    <td width="20%" align="center"><?php $i = $c2["item3_price"] * $c2["buycar_howmuch"] ; echo $i ; $allp +=$i ; ?></td> <input type="hidden" value="<?=$i?>" name="ii[]">
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
  <tr>
    <td colspan="5" align="center">總價:<?=$allp?></td>
  </tr>
  <tr>
    <td colspan="5" align="center">
    <input type="submit" value="確定送出" ><input type="hidden" value="1" name="okbuy">
    <input type="button" value="返回修改訂單" onclick="document.location.href='index.php?do=buycar'" />
    </td>
  </tr>
</table>
</form>