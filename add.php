<?php
if(!empty($_POST["ifadd"])){
    $name = $_POST["name"];
    $acc  = $_POST["acc"];
    $pw   = $_POST["pw"];
    $cel  = $_POST["cel"];
    $lo   = $_POST["lo"];
    $email = $_POST["email"];

    $sql = "select * from consumer where consumer_acc = '$acc' ";
    $c1  = mysqli_query($link,$sql);
    $row = mysqli_num_rows($c1);
    if($row == 1 || $acc == "admin"){
        echo "<script>alert('此帳號已存在或是不可使用admin註冊！')</script>";
    }else{
        $sql = "insert into consumer value(null,'$acc','$pw','$name','$cel','$lo','$email')";
        echo $sql;
        mysqli_query($link,$sql);
        echo "<script>document.location.href='index.php'</script>";
    }

}

?>


<form method="post">
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="2">
  <tr>
    <td colspan="2" align="center" valign="middle">會員註冊</td>
    <input type="hidden" value="1" name="ifadd">
  </tr>
  <tr>
    <td align="center" valign="middle" class="tt" width="50%">姓名</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="name"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">帳號</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" id="acc" name="acc"><input type="button" value="檢查帳號" onclick="accheck()"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">密碼</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="pw"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">電話</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="cel"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">住址</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="lo"></td>
  </tr>
  <tr>
  <td align="center" valign="middle" class="tt" width="50%">電子信箱</td>
    <td align="left" valign="middle" class="pp" width="50%"><input tpye="text" name="email"></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle"><input type="submit" value="註冊"><input type="reset" value="重置"></td>
  </tr>
</table>
</form>

<script>
function accheck(){
    var acc = document.getElementById("acc").value;
    if(acc == ""){
        alert("請輸入帳號!");
    }else{
        $.post("accheck_api.php",{acc},function(un){
            alert(un);
        });
    }
}
</script>