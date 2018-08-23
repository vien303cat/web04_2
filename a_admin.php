
<?php if(empty($_GET["seq"])){
    $sql = "select * from member";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
     ?>
<table width="80%" border="-" align="center" cellpadding="2" cellspacing="2" class="pp">
  <tr>
    <td colspan="3" align="center" valign="middle"><input type="button" value="新增管理員" onclick="document.location.href='admin.php?do=admin&redo=adminadd'"></td>
  </tr>
  <tr>
    <td width="30%" align="center" valign="middle">帳號</td>
    <td width="30%" align="center" valign="middle">密碼</td>
    <td width="30%" align="center" valign="middle">管理</td>
  </tr>
  <?php do{  ?>
  <tr>
    <td width="30%" align="center" valign="middle"><?=$c2["member_acc"]?></td>
    <td width="30%" align="center" valign="middle"><?=$c2["member_pw"]?></td>
    <td width="30%" align="center" valign="middle">
        <?php if($c2["member_acc"] == "admin"){ echo "此帳號為最高權限"; }else{ ?>
        <input type="button" value="管理" onclick="document.location.href='admin.php?do=admin&redo=admin&seq=<?=$c2["member_seq"]?>'" >
        <input type="button" value="刪除" onclick="document.location.href='delete_api.php?table=member&seq=<?=$c2["member_seq"]?>'" >
        <?php } ?>
    </td>
  </tr>
        <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
        <tr>
    <td colspan="3" align="center" valign="middle"><input type="button" value="返回" onclick="document.location.href='index.php'"></td>
  </tr>
</table>

<?php }else{ ?>


<?php 

if(!empty($_POST["txt"])){
    $acc = $_POST["txt"];
    $pw  = $_POST["pw"];
    for($i = 1 ;$i <= 5 ;$i++){
        if(!empty($_POST["lv".$i])){
            $lv[$i] = "1"; 
        }else { $lv[$i] = "0";  }
    }
    $sql = "update member set member_acc = '$acc',member_pw = '$pw',member_lv1 = '$lv[1]',member_lv2 = '$lv[2]',member_lv3 = '$lv[3]',member_lv4 = '$lv[4]',member_lv5 = '$lv[5]' where member_seq = '".$_GET["seq"]."' ";  
    mysqli_query($link,$sql);

    echo "<script>document.location.href='admin.php'</script>";
}

$sql = "select * from member where member_seq='".$_GET["seq"]."'";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<form method="post" action="admin.php?do=admin&redo=admin&seq=<?=$_GET["seq"]?>" >
<table width="80%" border="1" align="center" cellpadding="2" cellspacing="2" class="pp">
  <tr>
    <td colspan="2" align="center" valign="middle">修改管理者帳號</td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">帳號</td>
    <td align="left" valign="middle"><input type="text" name="txt" value="<?=$c2["member_acc"]?>" ></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">密碼</td>
    <td align="left" valign="middle"><input type="text" name="pw" value="<?=$c2["member_pw"]?>"></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">權限</td>
    <td align="left" valign="middle">
        <input type="checkbox" name=lv1 value="1" <?php if($c2["member_lv1"] == "1"){ echo "checked"; }?> />商品分類與管理<br>
        <input type="checkbox" name=lv2 value="1" <?php if($c2["member_lv2"] == "1"){ echo "checked"; }?> />訂單管理<br>
        <input type="checkbox" name=lv3 value="1" <?php if($c2["member_lv3"] == "1"){ echo "checked"; }?> />會員管理<br>
        <input type="checkbox" name=lv4 value="1" <?php if($c2["member_lv4"] == "1"){ echo "checked"; }?> />頁尾版權區管理<br>
        <input type="checkbox" name=lv5 value="1" <?php if($c2["member_lv5"] == "1"){ echo "checked"; }?> />最新消息管理
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="修改"><input type="reset" value="重置"></td>
  </tr>
</table>
</post>










<?php } ?>