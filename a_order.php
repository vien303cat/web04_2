<?php 

$sql = "select sum(buylog_total) as am , buylog_no , consumer_acc , consumer_name , buylog_time  from buylog,consumer where buylog_accseq = consumer_seq group by buylog_no";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<table width="80%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="6" align="center" valign="middle">訂單管理</td>
  </tr>
  <tr>
    <td align="center" valign="middle">訂單編號</td>
    <td align="center" valign="middle">金額</td>
    <td align="center" valign="middle">會員帳號</td>
    <td align="center" valign="middle">姓名</td>
    <td align="center" valign="middle">下單時間</td>
    <td align="center" valign="middle">操作</td>
  </tr>
  <?php do{ ?>
  <tr>
    <td align="center" valign="middle"><a href='admin.php?do=admin&redo=orderdata&no=<?=$c2["buylog_no"]?>'> <?=$c2["buylog_no"]?> </a> </td>
    <td align="center" valign="middle"><?=$c2["am"]?></td>
    <td align="center" valign="middle"><?=$c2["consumer_acc"]?></td>
    <td align="center" valign="middle"><?=$c2["consumer_name"]?></td>
    <td align="center" valign="middle"><?=$c2["buylog_time"]?></td>
    <td align="center" valign="middle"><input type="button" value="刪除" onclick="document.location.href='delete_api.php?table=buylog&no=<?=$c2["buylog_no"]?>'"></td>
  </tr>
  <?php }while($c2 = mysqli_fetch_assoc($c1));  ?>
</table>