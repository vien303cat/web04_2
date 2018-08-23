<?php 
    if(!empty($_POST["txt"])){
        $acc = $_POST["txt"];
        $pw  = $_POST["pw"];
        for($i = 1 ;$i <= 5 ;$i++){
            if(!empty($_POST["lv".$i])){
                $lv[$i] = "1"; 
            }else { $lv[$i] = "0";  }
        }

        $sql = "insert into member value(null,'$acc','$pw','$lv[1]','$lv[2]','$lv[3]','$lv[4]','$lv[5]')";
        mysqli_query($link,$sql);
        echo "<script>document.location.href='admin.php'</script>";
    }
    

?>


<form method="post" >
<table width="80%" border="1" align="center" cellpadding="2" cellspacing="2" class="pp">
  <tr>
    <td colspan="2" align="center" valign="middle">新增管理帳號</td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">帳號</td>
    <td align="left" valign="middle"><input type="text" name="txt"></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">密碼</td>
    <td align="left" valign="middle"><input type="text" name="pw"></td>
  </tr>
  <tr>
    <td width="40%" align="center" valign="middle">權限</td>
    <td align="left" valign="middle">
        <input type="checkbox" name=lv1 value="1" />商品分類與管理<br>
        <input type="checkbox" name=lv2 value="1" />訂單管理<br>
        <input type="checkbox" name=lv3 value="1" />會員管理<br>
        <input type="checkbox" name=lv4 value="1" />頁尾版權區管理<br>
        <input type="checkbox" name=lv5 value="1" />最新消息管理
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="新增"><input type="reset" value="重置"></td>
  </tr>
</table>
</post>