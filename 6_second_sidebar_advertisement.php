<div class="col-md-10 col-lg-4">
<div class="p-l-10 p-rl-0-sr991 p-b-20">
<!-- Video -->
<div class="p-b-55" style="padding-bottom: 20px!important">
<div class="how2 how2-cl4 flex-s-c m-b-35">
<h3 class="f1-m-2 cl3 tab01-title">
ADVERTISEMENT
</h3>
</div>

<div>
<div class="wrap-pic-w pos-relative">
<?php
$row=fetch_advertisement_pricing("LOWER RIGHT IMAGE(6)",$conn);
?>   
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=IMAGE"> 
<p style="width:320px;height:250px;background-color:#bdbcbc;text-align:center;padding: 80px 0;font-weight:bold;color:black;"> 
  Click Here to Order<br> Banner Size : 300pxX250px , <br>Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
  Priority : <?php echo $row["ap_priority"];?>
</p>
</a> 
</div>


</div>	
</div>

<div class="p-b-55" style="padding-bottom: 20px!important">
<!--
<div class="how2 how2-cl4 flex-s-c m-b-35">
<h3 class="f1-m-2 cl3 tab01-title">
VIDEO ADVERTISEMENT
</h3>
</div>
-->
<div>
<div class="wrap-pic-w pos-relative">
<?php
$row=fetch_advertisement_pricing("LOWER RIGHT VIDEO(7)",$conn);
?>   
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=VIDEO">  
<p style="width:100%;height:250px;background-color:#bdbcbc;text-align:center;padding: 80px 0;font-weight:bold;color:black;"> 
  Click Here to Order<br> Video Size : 100%X250px , <br>Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
  Priority : <?php echo $row["ap_priority"];?>
</p>
</a> 
</div>


</div>	
</div>    

<div class="p-b-55" style="padding-bottom: 20px!important">
<!--
<div class="how2 how2-cl4 flex-s-c m-b-35">
<h3 class="f1-m-2 cl3 tab01-title">
VIDEO ADVERTISEMENT
</h3>
</div>
-->
<div>
<div class="wrap-pic-w pos-relative">
<?php
$row=fetch_advertisement_pricing("LOWER BOTTOM IMAGE(8)",$conn);
?>   
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=IMAGE"> 
<p style="width:320px;height:250px;background-color:#bdbcbc;text-align:center;padding: 80px 0;font-weight:bold;color:black;"> 
  Click Here to Order<br> Image Size : 320pxX250px , <br>Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
  Priority : <?php echo $row["ap_priority"];?>
</p>
</a> 
</div>


</div>	
</div> 

</div>
</div>