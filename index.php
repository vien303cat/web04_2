

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<?php
include_once("head.php");
?>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main" style="width:1024px;">
    	<div id="top">
        	<a href="index.php">
            	<img src="./home_files/0416.jpg" width="540">
            </a>
                        <div style="padding:10px;width:413px;float:right">
                <a href="?">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycart">購物車</a> |
                                <a href="?do=login">會員登入</a> |
                                <a href="?do=adminlog">管理登入</a>
           </div>
                <marquee>情人節特惠活動 &nbsp; 年終特賣會開跑了   </marquee>      </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
                        <div class=""><a href="#">123</a></div>
                        
        	            </div>
                        <span>
            	<div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                	00005                </div>
            </span>
                    </div>
        <div id="right">
                <?php include_once($dolist[$do]); ?>
        	        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
        	頁尾版權 :        </div>
    </div>

</body></html>