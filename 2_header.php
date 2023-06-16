<!-- Header -->
<header>
<!-- Header desktop -->
<div class="container-menu-desktop">
<div class="topbar">
<div class="content-topbar container h-100">
<div class="left-topbar">
<span class="left-topbar-item flex-wr-s-c">
<span>
<a href="index.php" class="left-topbar-item"><b>HOME</b></a>
</span>
</span>

<!-- <a href="#" class="left-topbar-item">
<b>ABOUT</b>
</a>

<a href="#" class="left-topbar-item">
<b>CONTACT</b>
</a> -->

<a href="advertisement_pricing.php" class="left-topbar-item">
<b>CLICK HERE FOR ADVETISEMENT PRICING</b>
</a>
<?php
if(isset($_SESSION["customer"])){
?>
<a href="" class="left-topbar-item">
<b style="text-transform:uppercase;">WELCOME, <?php echo $fullname;?></b>
</a> 
<a href="customer_logout.php" class="left-topbar-item">
<b style="text-transform:uppercase;">LOGOUT</b>
</a>  
 
<?php
} 
else{
?>
<a href="customer_login_register.php" class="left-topbar-item">
<b>LOGIN/REGISTER</b>
</a>
<?php
}
?>
</div>

<div class="right-topbar">
<a href="admin_login/index.php">
<span class="fa fa-lock"></span>
</a> 
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
<!--<a href="index.html"><img src="vendor/images/icons/logo-01.png" alt="IMG-LOGO"></a>-->
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
<!-- <li class="left-topbar">
<span class="left-topbar-item flex-wr-s-c">
<span>
New York, NY
</span>

<img class="m-b-1 m-rl-8" src="vendor/images/icons/icon-night.png" alt="IMG">

<span>
HI 58° LO 56°
</span>
</span>
</li> -->
<!-- 
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
</li> -->

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
$result=fetch_advertisement(1,"IMAGE",$conn); 
if($result->num_rows>0){
    while($row=$result->fetch_assoc())
    {
    ?>  
    <img src="admin/photos/advertisement/<?php echo $row["ad_name"];?>" style="border:2px solid gray">
    <?php 
    } 
}
else
{
?>    
    <img src="vendor/images/728x90.jpg" alt="IMG">    
<?php    
}  
$result="";
$row="";    
?>    
</div>
</div>	

<!--  -->
<div class="wrap-main-nav">
<div class="main-nav" style="background-color:#b90707;">
<!-- Menu desktop -->
<nav class="menu-desktop">
<a class="logo-stick" href="index.php">
<h3 style="color:white;font-size:16px;font-weight:bold;">NEWS PORTAL</h3>
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