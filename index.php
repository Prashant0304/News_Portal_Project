<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("1_metatags.php");?>
</head>
<body class="animsition">

<?php include_once("2_header.php");?>

<!-- Headline -->
<div class="container">
<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8" style="background-color:black!important;border-bottom:3px solid white;border-top:3px solid white;margin:2px;">
<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
<span class="text-uppercase cl2 p-r-8" style="color:#b90707!important;font-weight:bold;font-family: sans-serif!important;background-color: white;padding: 1px;">
<span class="img_blink" style="font-size:18px;">&nbsp;Breaking News&nbsp;</span>
</span>

&nbsp;&nbsp;<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
<?php 
$result=fetch_breaking_news("BREAKING NEWS",$conn);     
while($row=$result->fetch_assoc()){
?> 
&nbsp;&nbsp;<span class="dis-inline-block slide100-txt-item animated visible-false">
<a href="news_details.php?news_id=<?php echo $row["news_details_id"];?>&category=<?php echo $row["news_category_name"];?>" style="color:white;"><?php echo $row["news_details_headlines"];?></a>
</span>
<?php
}
$result="";
$row=""; 
?>
    
</span>
</div>

</div>
</div>

<!-- Feature post -->
<section class="bg0">
<div class="container">
<div class="row m-rl--1">
<?php
$row1=fetch_single("HUBLI-DHARWAD",$conn);    
?>
<div class="col-md-6 p-rl-1 p-b-2">
<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(admin/photos/<?php echo $row1["news_details_image"];?>);">
<a href="news_details.php?news_id=<?php echo $row1["news_details_id"];?>&category=<?php echo $row1["news_category_name"]?>" class="dis-block how1-child1 trans-03"></a>

<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
<a href="" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
<?php echo $row1["news_category_name"];?>
</a>

<h3 class="how1-child2 m-t-14 m-b-10 noHover">
<a href="news_details.php?news_id=<?php echo $row1["news_details_id"];?>&category=<?php echo $row1["news_category_name"]?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
<?php echo $row1["news_details_headlines"];?>
</a>
</h3>

<span class="how1-child2">
<span class="f1-s-4 cl11">
Reporter : <?php echo $row1["fullname"];?>
</span>

<span class="f1-s-3 cl11 m-rl-3">
-
</span>

<span class="f1-s-3 cl11">
<?php echo $row1["news_details_date"];?>
</span>
</span>
</div>
</div>
</div>
<?php
$row2=fetch_single("BREAKING NEWS",$conn);    
?>
<div class="col-md-6 p-rl-1">
<div class="row m-rl--1">
<div class="col-12 p-rl-1 p-b-2">
<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(admin/photos/<?php echo $row2["news_details_image"];?>);">
<a href="news_details.php?news_id=<?php echo $row2["news_details_id"];?>&category=<?php echo $row2["news_category_name"]?>" class="dis-block how1-child1 trans-03"></a>

<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
<a href="" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
<?php echo $row2["news_category_name"];?>
</a>

<h3 class="how1-child2 m-t-14 noHover">
<a href="news_details.php?news_id=<?php echo $row2["news_details_id"];?>&category=<?php echo $row2["news_category_name"]?>" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
<?php echo $row2["news_details_headlines"];?>
</a>
</h3>
</div>
</div>
</div>
<?php
$row3=fetch_single("SPORTS",$conn);    
?>
<div class="col-sm-6 p-rl-1 p-b-2">
<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(admin/photos/<?php echo $row3["news_details_image"];?>);">
<a href="news_details.php?news_id=<?php echo $row3["news_details_id"];?>&category=<?php echo $row3["news_category_name"]?>" class="dis-block how1-child1 trans-03"></a>

<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
<a href="" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
<?php echo $row3["news_category_name"];?>
</a>

<h3 class="how1-child2 m-t-14 noHover">
<a href="news_details.php?news_id=<?php echo $row3["news_details_id"];?>&category=<?php echo $row3["news_category_name"]?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
<?php echo $row3["news_details_headlines"];?>
</a>
</h3>
</div>
</div>
</div>
<?php
$row4=fetch_single("POLITICS",$conn);    
?>
<div class="col-sm-6 p-rl-1 p-b-2">
<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(admin/photos/<?php echo $row4["news_details_image"];?>);">
<a href="news_details.php?news_id=<?php echo $row4["news_details_id"];?>&category=<?php echo $row4["news_category_name"]?>" class="dis-block how1-child1 trans-03"></a>

<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
<a href="" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
<?php echo $row4["news_category_name"];?>
</a>

<h3 class="how1-child2 m-t-14 noHover">
<a href="news_details.php?news_id=<?php echo $row4["news_details_id"];?>&category=<?php echo $row4["news_category_name"]?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
<?php echo $row4["news_details_headlines"];?>
</a>
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php $row1="";$row2="";$row3="";$row4="";?>    
    
<!-- Post -->
<section class="bg0 p-t-70">    
<div class="container">    
<!--ADVERTISING TEXT    -->
<div class="tab01 p-b-20">
    <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
        <div class="col-md-12">
            <h3 class="f1-m-2 cl12 tab01-title">
            <marquee direction="left">
                <?php
                $result=fetch_advertisement(9,"TEXT MARQUEE",$conn);                 
                 while($row=$result->fetch_assoc())
                 {
                ?> 
                <?php echo $row["ad_name"];?> &nbsp; | &nbsp;
                <?php
                 }
                ?>
            </marquee>
            </h3>
        </div>
    </div>    
</div>        
<!--ADVERTISING TEXT END    -->    
<div class="row justify-content-center">    
<div class="col-md-10 col-lg-8">
<div class="p-b-20">
    
<!--STATE START-->                    
<?php
$category_name1="STATE";
$row1=fetch_single($category_name1,$conn);            
$news_id=$row1["news_details_id"];    
?>
<!-- Entertainment -->
<div class="tab01 p-b-20">
<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
<!-- Brand tab -->
<div class="col-md-6">
<h3 class="f1-m-2 cl12 tab01-title" style="float:left">
<?php echo $category_name1;?>
</h3>
</div>
<!--  -->
<div class="col-md-6">
<a href="news_list.php?category=<?php echo $category_name1;?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
View all
<i class="fs-12 m-l-5 fa fa-caret-right"></i>
</a>
</div>
</div>

<!-- Tab panes -->
<div class="tab-content p-t-35">
<!-- - -->
<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
<div class="row">
<div class="col-sm-6 p-r-25 p-r-15-sr991">
<!-- Item post -->	
<div class="m-b-30">
<img src="admin/photos/<?php echo $row1["news_details_image"];?>" class="img_custom">     
<div class="p-t-20">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row1["news_details_id"]?>&category=<?php echo $row1["news_category_name"];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
<?php 
$out = strlen($row1["news_details_headlines"]) > 70 ? substr($row1["news_details_headlines"],0,70)."..." : $row1["news_details_headlines"];
echo $out;
?>
</a>
</h5>
<span class="cl8">                                            
<b>Reporter : <?php echo $row1["fullname"];?></b>             
<span class="f1-s-3 m-rl-3">-</span>
<span class="f1-s-3">
<?php echo $row1["news_details_date"];?>
</span>
</span>
</div>
</div>
</div>

<div class="col-sm-6 p-r-25 p-r-15-sr991">
<?php     
$result11=fetch_multiple($category_name1,$news_id,$conn); 
while($row11=$result11->fetch_assoc()){
?>                                
<!-- Item post -->	
<div class="flex-wr-sb-s m-b-30">
<img src="admin/photos/<?php echo $row11["news_details_image"];?>" style="width:100px;height:100px">
<div class="size-w-2">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row11["news_details_id"]?>&category=<?php echo $row11["news_category_name"];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
<?php 
$out = strlen($row11["news_details_headlines"]) > 60 ? substr($row11["news_details_headlines"],0,60)."..." : $row11["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">
<b>Reporter : <?php echo $row11["fullname"];?></b>  
<span class="f1-s-3 m-rl-3"><br>
</span>
<span class="f1-s-3">
<?php echo $row11["news_details_date"];?>
</span>
</span>
</div>
</div>
<?php } ?>

</div>
</div>
</div>

</div>
</div>
<?php    
$category_name1="";
$row1="";    
$news_id="";    
$result11="";
$row11="";
$out="";    
?>
<!--STATE END-->                
    
<!--POLITICS START-->                
<?php
$category_name1="POLITICS";
$row1=fetch_single($category_name1,$conn);            
$news_id=$row1["news_details_id"];        
?>
<!-- Entertainment -->
<div class="tab01 p-b-20">
<div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
<!-- Brand tab -->
<div class="col-md-6">    
<h3 class="f1-m-2 cl13 tab01-title" style="float:left">
<?php echo $category_name1;?>
</h3>
</div>
<!--  -->
<div class="col-md-6">
<a href="news_list.php?category=<?php echo $category_name1;?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
View all
<i class="fs-12 m-l-5 fa fa-caret-right"></i>
</a>
</div>
</div>


<!-- Tab panes -->
<div class="tab-content p-t-35">
<!-- - -->
<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
<div class="row">
<div class="col-sm-6 p-r-25 p-r-15-sr991">
<!-- Item post -->	
<div class="m-b-30">
<img src="admin/photos/<?php echo $row1["news_details_image"];?>" class="img_custom">     
<div class="p-t-20">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row1["news_details_id"]?>&category=<?php echo $row1["news_category_name"];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
<?php 
$out = strlen($row1["news_details_headlines"]) > 70 ? substr($row1["news_details_headlines"],0,70)."..." : $row1["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">                                            
<b>Reporter : <?php echo $row1["fullname"];?></b>             
<span class="f1-s-3 m-rl-3">
-
</span>

<span class="f1-s-3">
<?php echo $row1["news_details_date"];?>
</span>
</span>
</div>
</div>
</div>

<div class="col-sm-6 p-r-25 p-r-15-sr991">
<?php 
$result11=fetch_multiple($category_name1,$news_id,$conn); 
while($row11=$result11->fetch_assoc()){
?>                                
<!-- Item post -->	
<div class="flex-wr-sb-s m-b-30">
<img src="admin/photos/<?php echo $row11["news_details_image"];?>" style="width:100px;height:100px">
<div class="size-w-2">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row11["news_details_id"]?>&category=<?php echo $row11["news_category_name"];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
<?php 
$out = strlen($row11["news_details_headlines"]) > 60 ? substr($row11["news_details_headlines"],0,60)."..." : $row11["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">
<b>Reporter : <?php echo $row11["fullname"];?></b>  
<span class="f1-s-3 m-rl-3">
<br>
</span>

<span class="f1-s-3">
<?php echo $row11["news_details_date"];?>
</span>
</span>
</div>
</div>
<?php } ?>

</div>
</div>
</div>

</div>
</div>
<?php    
$category_name1="";
$row1="";    
$news_id="";    
$result11="";
$row11="";
$out="";
?>    
<!--POLITICS END-->            


<!--NATIONAL START-->        
<?php
$category_name1="NATIONAL";
$row1=fetch_single($category_name1,$conn);            
$news_id=$row1["news_details_id"];        
?>
<!-- Entertainment -->
<div class="tab01 p-b-20">
<div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
<!-- Brand tab -->
<div class="col-md-6">    
<h3 class="f1-m-2 cl14 tab01-title" style="float:left">
<?php echo $category_name1;?>
</h3>
</div>
<!--  -->
<div class="col-md-6">
<a href="news_list.php?category=<?php echo $category_name1;?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
View all
<i class="fs-12 m-l-5 fa fa-caret-right"></i>
</a>
</div>
</div>


<!-- Tab panes -->
<div class="tab-content p-t-35">
<!-- - -->
<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
<div class="row">
<div class="col-sm-6 p-r-25 p-r-15-sr991">
<!-- Item post -->	
<div class="m-b-30">
<img src="admin/photos/<?php echo $row1["news_details_image"];?>" class="img_custom">     
<div class="p-t-20">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row1["news_details_id"]?>&category=<?php echo $row1["news_category_name"];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
<?php 
$out = strlen($row1["news_details_headlines"]) > 70 ? substr($row1["news_details_headlines"],0,70)."..." : $row1["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">                                            
<b>Reporter : <?php echo $row1["fullname"];?></b>             
<span class="f1-s-3 m-rl-3">
-
</span>

<span class="f1-s-3">
<?php echo $row1["news_details_date"];?>
</span>
</span>
</div>
</div>
</div>

<div class="col-sm-6 p-r-25 p-r-15-sr991">
<?php 
$result11=fetch_multiple($category_name1,$news_id,$conn); 
while($row11=$result11->fetch_assoc()){
?>                                
<!-- Item post -->	
<div class="flex-wr-sb-s m-b-30">
<img src="admin/photos/<?php echo $row11["news_details_image"];?>" style="width:100px;height:100px">
<div class="size-w-2">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row11["news_details_id"]?>&category=<?php echo $row11["news_category_name"];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
<?php 
$out = strlen($row11["news_details_headlines"]) > 60 ? substr($row11["news_details_headlines"],0,60)."..." : $row11["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">
<b>Reporter : <?php echo $row11["fullname"];?></b>  
<span class="f1-s-3 m-rl-3">
<br>
</span>

<span class="f1-s-3">
<?php echo $row11["news_details_date"];?>
</span>
</span>
</div>
</div>
<?php } ?>

</div>
</div>
</div>

</div>
</div>
<?php    
$category_name1="";
$row1="";    
$news_id="";    
$result11="";
$row11="";
$out="";
?>      
<!--NATIONAL END-->     
    
</div>
</div>
<?php include_once("6_first_sidebar.php");?>
</div>
</div>
</section>

<!-- Banner -->
<div class="container">
<div class="flex-c-c">
<?php
$result=fetch_advertisement(5,"IMAGE",$conn); 
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
    ?>  
    <img src="admin/photos/advertisement/<?php echo $row["ad_name"];?>" style="width:100%;height:220px">
    <?php 
    } 
}
else
{
?>    
    <img class="max-w-full" src="vendor/images/1200x220.jpg" alt="IMG" style="width:1200px;height:220px">  
<?php    
}  
$result="";
$row="";    
?>      

</div>
</div>

    
<!-- Latest -->
<section class="bg0 p-t-60 p-b-35">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-8 p-b-20">
<!--INTERNATIONAL START-->     
<?php
$category_name1="INTERNATIONAL";
$row1=fetch_single($category_name1,$conn);            
$news_id=$row1["news_details_id"];        
?>
<!-- Entertainment -->
<div class="tab01 p-b-20">
<div class="tab01-head how2 how2-cl4 bocl12 flex-s-c m-r-10 m-r-0-sr991">
<!-- Brand tab -->
<div class="col-md-6">
    
<h3 class="f1-m-2 cl3 tab01-title" style="float:left">
<?php echo $category_name1;?>
</h3>
</div>
<!--  -->
<div class="col-md-6">
<a href="news_list.php?category=<?php echo $category_name1;?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
View all
<i class="fs-12 m-l-5 fa fa-caret-right"></i>
</a>
</div>
</div>


<!-- Tab panes -->
<div class="tab-content p-t-35">
<!-- - -->
<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
<div class="row">
<div class="col-sm-6 p-r-25 p-r-15-sr991">
<!-- Item post -->	
<div class="m-b-30">
<img src="admin/photos/<?php echo $row1["news_details_image"];?>" class="img_custom">     
<div class="p-t-20">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row1["news_details_id"]?>&category=<?php echo $row1["news_category_name"];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
<?php 
$out = strlen($row1["news_details_headlines"]) > 70 ? substr($row1["news_details_headlines"],0,70)."..." : $row1["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">                                            
<b>Reporter : <?php echo $row1["fullname"];?></b>             
<span class="f1-s-3 m-rl-3">
-
</span>

<span class="f1-s-3">
<?php echo $row1["news_details_date"];?>
</span>
</span>
</div>
</div>
</div>

<div class="col-sm-6 p-r-25 p-r-15-sr991">
<?php 
$result11=fetch_multiple($category_name1,$news_id,$conn); 
while($row11=$result11->fetch_assoc()){
?>                                
<!-- Item post -->	
<div class="flex-wr-sb-s m-b-30">
<img src="admin/photos/<?php echo $row11["news_details_image"];?>" style="width:100px;height:100px">
<div class="size-w-2">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row11["news_details_id"]?>&category=<?php echo $row11["news_category_name"];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
<?php 
$out = strlen($row11["news_details_headlines"]) > 60 ? substr($row11["news_details_headlines"],0,60)."..." : $row11["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">
<b>Reporter : <?php echo $row11["fullname"];?></b>  
<span class="f1-s-3 m-rl-3">
<br>
</span>

<span class="f1-s-3">
<?php echo $row11["news_details_date"];?>
</span>
</span>
</div>
</div>
<?php } ?>

</div>
</div>
</div>

</div>
</div>
<?php    
$category_name1="";
$row1="";    
$news_id="";    
$result11="";
$row11="";
$out="";
?>    
<!--INTERNATIONAL END-->     

<!--SPORTS START-->
<?php
$category_name1="SPORTS";
$row1=fetch_single($category_name1,$conn);            
$news_id=$row1["news_details_id"];        
?>
<!-- Entertainment -->
<div class="tab01 p-b-20">
<div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
<!-- Brand tab -->
<div class="col-md-6">    
<h3 class="f1-m-2 cl14 tab01-title" style="float:left">
<?php echo $category_name1;?>
</h3>
</div>
<!--  -->
<div class="col-md-6">
<a href="news_list.php?category=<?php echo $category_name1;?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
View all
<i class="fs-12 m-l-5 fa fa-caret-right"></i>
</a>
</div>
</div>


<!-- Tab panes -->
<div class="tab-content p-t-35">
<!-- - -->
<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
<div class="row">
<div class="col-sm-6 p-r-25 p-r-15-sr991">
<!-- Item post -->	
<div class="m-b-30">
<img src="admin/photos/<?php echo $row1["news_details_image"];?>" class="img_custom">     
<div class="p-t-20">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row1["news_details_id"]?>&category=<?php echo $row1["news_category_name"];?>" class="f1-m-3 cl2 hov-cl10 trans-03">
<?php 
$out = strlen($row1["news_details_headlines"]) > 70 ? substr($row1["news_details_headlines"],0,70)."..." : $row1["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">                                            
<b>Reporter : <?php echo $row1["fullname"];?></b>             
<span class="f1-s-3 m-rl-3">
-
</span>

<span class="f1-s-3">
<?php echo $row1["news_details_date"];?>
</span>
</span>
</div>
</div>
</div>

<div class="col-sm-6 p-r-25 p-r-15-sr991">
<?php 
$result11=fetch_multiple($category_name1,$news_id,$conn); 
while($row11=$result11->fetch_assoc()){
?>                                
<!-- Item post -->	
<div class="flex-wr-sb-s m-b-30">
<img src="admin/photos/<?php echo $row11["news_details_image"];?>" style="width:100px;height:100px">
<div class="size-w-2">
<h5 class="p-b-5">
<a href="news_details.php?news_id=<?php echo $row11["news_details_id"]?>&category=<?php echo $row11["news_category_name"];?>" class="f1-s-5 cl3 hov-cl10 trans-03">
<?php 
$out = strlen($row11["news_details_headlines"]) > 60 ? substr($row11["news_details_headlines"],0,60)."..." : $row11["news_details_headlines"];
echo $out;
?>
</a>
</h5>

<span class="cl8">
<b>Reporter : <?php echo $row11["fullname"];?></b>  
<span class="f1-s-3 m-rl-3">
<br>
</span>

<span class="f1-s-3">
<?php echo $row11["news_details_date"];?>
</span>
</span>
</div>
</div>
<?php } ?>

</div>
</div>
</div>

</div>
</div>
<?php    
$category_name1="";
$row1="";    
$news_id="";    
$result11="";
$row11="";
$out="";
?> 
<!--SPORTS END-->    
</div>
<?php include_once("6_second_sidebar.php");?>
</div>
</div>
</section>

<?php include_once("3_footer.php");?>
<?php include_once("3_footer_scripts.php");?>

</body>
</html>