<?php  

$sql = "select * from item3";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
$row = mysqli_num_rows($c1);

$sql = "select * from item1";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<div class=""><a href="index.php?do=all">全部商品(<?=$row?>)</a></div>

<?php do{ 
        $sqll = "select * from item2 where item2_i1 = '".$c2["item1_seq"]."'";
        $cc1  = mysqli_query($link,$sqll);
        $cc2  = mysqli_fetch_assoc($cc1);
        $row  = mysqli_num_rows($cc1);
    ?>

    <div class="mainmu"><a href="index.php?do=item&item1=<?=$c2['item1_seq']?>"><?=$c2["item1_txt"]?>(<?=$row?>)</a>

<?php  do{  ?>

    <div class="mw" style="display:none;">
    <a href="index.php?do=item&item2=<?=$cc2['item2_seq']?>"> <?=$cc2["item2_txt"]?></a>
    </div>

    <?php }while($cc2 = mysqli_fetch_assoc($cc1)) ?>
    </div>
<?php
}while($c2 = mysqli_fetch_assoc($c1))
 ?>


<script>
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show();
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide();
		}
	)
});
</script>