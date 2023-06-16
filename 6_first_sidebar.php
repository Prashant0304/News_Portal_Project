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
<li class="flex-wr-sb-c p-b-20">
<?php
$result=fetch_advertisement(2,"IMAGE",$conn); 
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
    ?> 
    <img src="admin/photos/advertisement/<?php echo $row["ad_name"];?>" style="width:320px;height:250px">
    <?php 
    } 
}
else
{
?>    
<img class="max-w-full" src="vendor/images/300x250.jpg" alt="IMG" style="width:320px!important">   
<?php    
}  
$result="";
$row="";    
?>
</li>

</ul>
</div>
    
<!--  -->
<ul class="p-t-35">
<li class="flex-wr-sb-c p-b-20">
<a href="#">   
<div class="marquee">
<?php
$result=fetch_advertisement(3,"IMAGE",$conn); 
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
    ?>  
    
    <img src="admin/photos/advertisement/<?php echo $row["ad_name"];?>" style="padding-top:10px;width:320px!important">    
    <?php 
    } 
}
else
{
?>    
    <img class="max-w-full" src="vendor/images/300x600.jpg" alt="IMG" style="width:320px !important">   
<?php    
}  
$result="";
$row="";    
?>     
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
<li class="flex-wr-sb-c p-b-20">
<?php
$result=fetch_advertisement(4,"VIDEO",$conn); 
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
</li>

</ul>
</div>
</div>
</div>