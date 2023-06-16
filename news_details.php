<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("1_metatags.php");?>
</head>
<body class="animsition">
<?php include_once("2_header.php");?>

<!-- Breadcrumb -->
<div class="container">
<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
<div class="f2-s-1 p-r-30 m-tb-6">
<a href="index.php" class="breadcrumb-item f1-s-3 cl9">
Home 
</a>

<a href="#" class="breadcrumb-item f1-s-3 cl9">
<?php echo $_REQUEST["category"];?> 
</a>
</div>
</div>
</div>
<center><h2 style="font-size:25px;font-weight:bold;text-decoration:underline"><?php echo $_REQUEST["category"];?> NEWS</h2></center>
<!-- Content -->
<section class="bg0 p-b-140 p-t-10">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-8 p-b-30">
<div class="p-r-10 p-r-0-sr991">
<!-- Blog Detail -->
<div class="p-b-70">
<?php
$row=fetch_single_details($_REQUEST["news_id"],$conn);    
?>
<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
<?php echo $row["news_details_headlines"];?>
</h3>

<div class="flex-wr-s-s p-b-40">
<span class="f1-s-3 cl8 m-r-15">
<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
Reporter : <?php echo $row["fullname"];?> 
</a>

<span class="m-rl-3">-</span>

<span>
<?php echo $row["news_details_date"];?> 
</span>
</span>
</div>

<div class="wrap-pic-max-w p-b-30">
<img src="admin/photos/<?php echo $row["news_details_image"];?> " alt="IMG" style="width:680px;height:360px">
</div>

<p class="f1-s-11 cl6 p-b-25">
<?php echo $row["news_details_description"];?> 
</p>
<!-- Share -->
    
<iframe width="100%" height="315"
src="https://www.youtube.com/embed/<?php echo $row["news_details_video_id"]?>?loop=1&rel=0&showinfo=0&autoplay=0" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>    
</div>
<!-- Leave a comment -->
</div>
</div>

<!-- Sidebar -->
<?php include_once("6_first_sidebar.php");?>
</div>
</div>
</section>


<?php include_once("3_footer.php");?>
<?php include_once("3_footer_scripts.php");?>
</body>
</html>