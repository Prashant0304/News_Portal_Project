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
$result=fetch_advertisement(6,"IMAGE",$conn); 
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
    ?> 
    <img src="admin/photos/advertisement/<?php echo $row["ad_name"];?>" style="border:2px solid gray" style="width:300px;height:250px">
    <?php 
    } 
}
else
{
?>    
<img class="max-w-full" src="vendor/images/300x250.jpg" alt="IMG">   
<?php    
}  
$result="";
$row="";    
?> 
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
$result=fetch_advertisement(7,"VIDEO",$conn); 
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
    ?> 
    <iframe width="100%" height="250" src="admin/photos/advertisement/<?php echo $row["ad_name"];?>?loop=1&controls=0"></iframe>
    <?php 
    } 
}
else
{
?>    
<img class="max-w-full" src="vendor/images/video.jpg" alt="IMG">   
<?php    
}  
$result="";
$row="";    
?> 
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
$result=fetch_advertisement(8,"IMAGE",$conn); 
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
    ?> 
    <img src="admin/photos/advertisement/<?php echo $row["ad_name"];?>" style="border:2px solid gray" style="width:300px;height:250px">
    <?php 
    } 
}
else
{
?>    
<img class="max-w-full" src="vendor/images/300x250.jpg" alt="IMG">   
<?php    
}  
$result="";
$row="";    
?> 
</div>


</div>	
</div> 

</div>
</div>