<div class="col-md-10 col-lg-4">
<div class="p-l-10 p-rl-0-sr991 p-b-20">
<!--  -->
    
<div class="p-t-50" style="padding-top:0px!important">
<div class="how2 how2-cl4 flex-s-c">
<h3 class="f1-m-2 cl3 tab01-title">
Advertisement
</h3>
</div>

<ul class="p-t-35">
<?php
$row=fetch_advertisement_pricing("MID RIGHT IMAGE(2)",$conn);
?>  
<li class="flex-wr-sb-c p-b-20">
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=IMAGE"> 
 <p style="width:320px;height:250px;background-color:#bdbcbc;text-align:center;padding: 80px 0;font-weight:bold;color:black;"> 
   Click Here to Order<br>Banner Size : 320pxX250px , <br>Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
   Priority : <?php echo $row["ap_priority"];?>
 </p>
</a>
</li>

</ul>
</div>
    
<!--  -->
<ul class="p-t-35">
<li class="flex-wr-sb-c p-b-20">
<a href="#">   
<div class="marquee">
<?php
$row=fetch_advertisement_pricing("MID RIGHT IMAGE MARQUEE(3)",$conn);
?>   
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=IMAGE"> 
<p style="width:320px;height:600px;background-color:#bdbcbc;text-align:center;padding: 270px 0;font-weight:bold;color:black;"> 
   Click Here to Order<br>Banner Size : 320pxX600px , <br>Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
   Priority : <?php echo $row["ap_priority"];?>
 </p>
</a> 
</div>
</a>
</li>
</ul>

<!--  -->
<div class="p-t-50">
<div class="how2 how2-cl4 flex-s-c">
<h3 class="f1-m-2 cl3 tab01-title">
Stay Connected
</h3>
</div>

<ul class="p-t-35">
<?php
$row=fetch_advertisement_pricing("MIDDLE RIGHT VIDEO(4)",$conn);
?>   
<li class="flex-wr-sb-c p-b-20">
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=VIDEO"> 
<p style="width:320px;height:250px;background-color:#bdbcbc;text-align:center;padding: 80px 0;font-weight:bold;color:black;"> 
   Click Here to Order<br>Video Size : 100%X250 , <br>Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
   Priority : <?php echo $row["ap_priority"];?>
 </p>   
</a> 
</li>

</ul>
</div>
</div>
</div>