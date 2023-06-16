<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("1_metatags.php");?>
</head>
<body class="animsition">
<!-- Header -->
<header>
<!-- Header desktop -->
<div class="container-menu-desktop">
<div class="topbar">
<div class="content-topbar container h-100">
<div class="left-topbar">
<span class="left-topbar-item flex-wr-s-c">
<span>
<a href="index.php" class="left-topbar-item">
<b>HOME</b>
</a> 
</span>
</span>
<a href="" class="left-topbar-item">
<b>FOR MORE INFORMATION CONTACT : +91-9999999999</b> 
</a>  
<a href="advertisement_pricing.php" class="left-topbar-item">
<b>ADVETISEMENT PRICING</b>
</a>

</div>

<div class="right-topbar">
<a href="#">
<span class="fab fa-facebook-f"></span>
</a>
<a href="#">
<span class="fab fa-twitter"></span>
</a>
<a href="#">
<span class="fab fa-youtube"></span>
</a>
</div>
</div>
</div>

<!-- Header Mobile -->
<div class="wrap-header-mobile">
<!-- Logo moblie -->		
<div class="logo-mobile">    
<!--<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>-->
<h3>NEWS PORTAL</h3> 
</div>
<!-- Button show menu -->
<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</div>
</div>

<!-- Menu Mobile -->
<div class="menu-mobile">
<ul class="topbar-mobile">
<li class="left-topbar">
<span class="left-topbar-item flex-wr-s-c">
<span>
New York, NY
</span>

<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

<span>
HI 58° LO 56°
</span>
</span>
</li>

<li class="left-topbar">
<a href="#" class="left-topbar-item">
About
</a>

<a href="#" class="left-topbar-item">
Contact
</a>

<a href="#" class="left-topbar-item">
Sing up
</a>

<a href="#" class="left-topbar-item">
Log in
</a>
</li>

<li class="right-topbar">
<a href="#">
<span class="fab fa-facebook-f"></span>
</a>

<a href="#">
<span class="fab fa-twitter"></span>
</a>

<a href="#">
<span class="fab fa-pinterest-p"></span>
</a>

<a href="#">
<span class="fab fa-vimeo-v"></span>
</a>

<a href="#">
<span class="fab fa-youtube"></span>
</a>
</li>
</ul>

<ul class="main-menu-m">
<?php
$result=fetch_header($conn); 
while($row=$result->fetch_assoc()){
?>
<li class="main-menu">
<a href="news_list.php?category=<?php echo $row["news_category_name"];?>"><?php echo $row["news_category_name"];?></a>
</li>
<?php 
    }
$result="";
$row="";
?>      
</ul>
</div>

<!--  -->
<div class="wrap-logo container">
<!-- Logo desktop -->		
<div class="logo">
<h1 style="font-size:31px;font-weight:bold;">
 <span style="color:#b90707;font-size:50px;">N</span>EWS <span style="color:#b90707;font-size:50px;">P</span>ORTAL</h1>
</div>	

<!-- Banner -->
<div class="banner-header">
<?php
$row=fetch_advertisement_pricing("TOP HEADER IMAGE(1)",$conn);
?> 
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=IMAGE">
 <p style="width:728px;height:90px;background-color:#bdbcbc;text-align:center;padding: 15px 0;font-weight:bold;color:black;"> Click Here to Order<br>
   Banner Size : 728X90 , Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
   Priority : <?php echo $row["ap_priority"];?>
 </p>
</a>  
<!--<img src="images/728x90.jpg" alt="IMG">    -->
</div> 
</div>	
 

<!--  -->
<div class="wrap-main-nav">
<div class="main-nav">
<!-- Menu desktop -->
<nav class="menu-desktop">
<a class="logo-stick" href="index.php">

<!-- <img src="images/icons/logo-01.png" alt="LOGO"> -->
    
</a>

<ul class="main-menu">
<?php
$result=fetch_header($conn); 
while($row=$result->fetch_assoc()){
?>
<li class="main-menu">
<a href="news_list.php?category=<?php echo $row["news_category_name"];?>"><?php echo $row["news_category_name"];?></a>
</li>
<?php 
    } 
?>    
</ul>
</nav>
</div>
</div>	
</div>
</header>

<!-- Feature post -->
    
<!-- Post -->
<section class="bg0 p-t-70">    
<div class="container">    
<!--ADVERTISING TEXT    -->
<?php
$row=fetch_advertisement_pricing("TEXT MARQUEE",$conn);
?>  
<div class="tab01 p-b-20">
<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
<div class="col-md-12">
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=TEXT">  
<h3 class="f1-m-2 cl12 tab01-title">
<marquee direction="left"><p>Click Here to Order , Per Day Price : Rs<?php echo $row["ap_price"];?> For Long Text, Priority : <?php echo $row["ap_priority"];?></p></marquee>
</h3>
</a> 
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
<a href="news_list.php?category='<?php echo $category_name1;?>'" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
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
<a href="news_list.php?category='<?php echo $category_name1;?>'" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
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
<a href="news_list.php?category='<?php echo $category_name1;?>'" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
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
<?php include_once("6_first_sidebar_advertisement.php");?>
</div>
</div>
</section>

<!-- Banner -->
<div class="container">
<div class="flex-c-c">
<?php
$row=fetch_advertisement_pricing("MIDDLE CENTER IMAGE(5)",$conn);
?>       
<a href="advertisement_pricing_confirm.php?ap_id=<?php echo $row["ap_id"];?>&at_id=<?php echo $row["at_id"];?>&type=IMAGE"> 
<p style="width:1200px;height:220px;background-color:#bdbcbc;text-align:center;padding: 70px 0;font-weight:bold;color:black;"> 
   Click Here to Order<br> Image Size : 1200pxX220px , <br>Per Day Price : Rs.<?php echo $row["ap_price"];?><br>
   Priority : <?php echo $row["ap_priority"];?>
 </p> 
</a> 
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
<a href="news_list.php?category='<?php echo $category_name1;?>'" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
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
<a href="news_list.php?category='<?php echo $category_name1;?>'" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03" style="float:right">
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
<?php include_once("6_second_sidebar_advertisement.php");?>
</div>
</div>
</section>

<?php include_once("3_footer.php");?>
<?php include_once("3_footer_scripts.php");?>

</body>
</html>