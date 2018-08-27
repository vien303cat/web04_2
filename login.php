<?php
    if(!empty($_POST["acc"])){
        if($_POST["math"] == $_SESSION["math"]){
            $sql = "select * from consumer where consumer_acc = '".$_POST["acc"]."' and consumer_pw = '".$_POST["pw"]."' ";
            $c1  = mysqli_query($link,$sql);
            $row = mysqli_num_rows($c1);
            if($row == 1){
                $_SESSION["consumer"] = $_POST["acc"] ;
                echo "<script>document.location.href='index.php'</script>";
            }else{  echo "<script>alert('帳號密碼錯誤')</script>"; }
        }else{
            echo "<script>alert('對不起，您輸入的驗證碼有務請您重新輸入')</script>";
        }
    }


$X = rand(1,100);
$D = rand(1,100);
$XD = $X + $D ;
$_SESSION["math"] = $XD ;
?>


<span style="font-size:24px">第一次購物</span><br><br>
<a href="index.php?do=add"><img src="img/0413.jpg"></a><br><br>
<span style="font-size:24px">會員登入</span><br><br>

<form method="post">
<table width="80%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" valign="middle">帳號</td>
    <td align="left" valign="middle"><input type="text" name="acc"/></td>
  </tr>
  <tr>
    <td align="center" valign="middle">密碼</td>
    <td align="left" valign="middle"><input type="text" name="pw"/></td>
  </tr>
  <tr>
    <td align="center" valign="middle">驗證碼</td>
    <td align="left" valign="middle"><?=$X?> + <?=$D?> = <input type="text" name="math"></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="登入"></td>
  </tr>
</table>
</form>