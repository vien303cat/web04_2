<?php
if(!empty($_POST["bigmom"])){
    $sql = "insert into item1 value(null,'".$_POST["bigmom"]."')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}
if(!empty($_POST["midmom"])){
    $sql = "insert into item2 value(null,'".$_POST["midmom"]."','".$_POST["midselect"]."')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}
?>

<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle">商品分類</td>
  </tr>
  <form method="post">
  <tr>
    <td colspan="2" align="center" valign="middle">新增大類<input type="text" name="bigmom"><input type="submit" value="新增"></td>
  </tr>
  </form>
  <form method="post">
  <?php 
  $sql = "select * from item1";
  $c1  = mysqli_query($link,$sql);
  $c2  = mysqli_fetch_assoc($c1);
  ?>
  <tr>
    <td colspan="2" align="center" valign="middle">新增中類
    <select name="midselect">
    <?php do{ ?>
    <option value="<?=$c2["item1_seq"]?>" > <?=$c2["item1_txt"]?> </option>
    <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>
    </select>
    <input type="text" name="midmom" />
    <input type="submit" value="新增">
    </td>
  </tr>
  </form>
  <?php 
  $sql = "select * from item1";
  $c1  = mysqli_query($link,$sql);
  $c2  = mysqli_fetch_assoc($c1);
  do{
  ?>
  <tr>
    <td width="50%" align="center" valign="middle" class="tt"><?=$c2["item1_txt"]?></td>
    <td width="50%" align="center" valign="middle" class="tt">
    <input type="button" value="修改" onclick="update('item1',<?=$c2["item1_seq"]?>)" >
    <input type="button" value="刪除" onclick="document.location.href='delete_api.php?table=item1&seq=<?=$c2["item1_seq"]?>'" >
    </td>
  </tr>
  <?php 
  $sqll = "select * from item2 where item2_i1 = '".$c2["item1_seq"]."'";
  $cc1  = mysqli_query($link,$sqll);
  $cc2  = mysqli_fetch_assoc($cc1);
  do{
  ?>
  <tr>
    <td width="50%" align="center" valign="middle" class="pp"><?=$cc2["item2_txt"]?></td>
    <td width="50%" align="center" valign="middle" class="pp">
    <input type="button" value="修改" onclick="update('item2',<?=$cc2["item2_seq"]?>)" >
    <input type="button" value="刪除" onclick="document.location.href='delete_api.php?table=item2&seq=<?=$cc2["item2_seq"]?>'" >
    </td>
  </tr>
  <?php }while($cc2 = mysqli_fetch_assoc($cc1)) ?>
  <?php }while($c2 = mysqli_fetch_assoc($c1)) ?>

</table>

<script>
function update(item,seq){
    var upname = prompt("要修改成什麼?","");
    if (upname){
        $.post("thupdate_api.php",{item,seq,upname},function(){
            alert("修改完成");
            document.location.href='admin.php?do=admin&redo=th' ;
            }
        )
        
    }
}
</script>