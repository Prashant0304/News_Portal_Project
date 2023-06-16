<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("1_metatags.php");?>
</head>
<body class="animsition">
<?php include_once("2_header.php");?>

<!-- Breadcrumb -->

<center><h2 style="font-size:25px;font-weight:bold;padding:20px;text-decoration:underline"><?php echo $_REQUEST["category"];?></h2></center>
<!-- Post -->
<section class="bg0 p-b-55">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-8 p-b-80">
<div class="p-r-10 p-r-0-sr991">
<div class="m-t--40 p-b-40">
<!-- Item post -->
<?php
$page=@$_GET["page"];
if($page=="" ||$page=="1"){
$page1=0;
}
else{
$page1=($page*5)-5;
}     
$category=$_REQUEST["category"];    
$result=fetch_news_list($category,$page1,$conn);    
while($row=$result->fetch_assoc()){
?>    
<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
<img src="admin/photos/<?php echo $row["news_details_image"];?>" style="width:260px;height:260px;">
<div class="size-w-9 w-full-sr575 m-b-25">
<h6 class="p-b-12">
<a href="news_details.php?news_id=<?php echo $row["news_details_id"]?>&category=<?php echo $row["news_category_name"];?>" class="f1-l-1 cl2 hov-cl10 trans-03 respon2" style="font-size:20px!important">
<?php echo $row["news_details_headlines"];?>
</a>
</h6>

<div class="cl8 p-b-18">
<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
Reporter : <?php echo $row["fullname"];?>
</a>
<span class="f1-s-3 m-rl-3">
-
</span>
<span class="f1-s-3">
<?php echo $row["news_details_date"];?>
</span>
</div>
<p class="" style="text-align:justify">
<?php 
$out = strlen($row["news_details_description"]) > 250 ? substr($row["news_details_description"],0,410)."..." : $row["news_details_description"];
echo $out;
?>
<a href="news_details.php?news_id=<?php echo $row["news_details_id"]?>&category=<?php echo $row["news_category_name"];?>">ReadMore</a>    
</p>
</div>
</div>
<?php 
} 
$category="";
$result="";
$row="";
?>

</div>
  
<div class="flex-wr-c-c m-rl--7 p-t-15">
<?php
$sql=$conn->prepare("SELECT * FROM news_details nd,news_category nc,reporters r WHERE nc.news_category_name=? AND nd.news_category_id=nc.news_category_id AND r.reporter_id=nd.reporter_id ORDER BY nd.news_details_id DESC");
$sql->bind_param("s",$_REQUEST["category"]);
$sql->execute();
$result=$sql->get_result();
$count=$result->num_rows;
$per_page=$count/5;
$per_page=ceil($per_page);                      
for($b=1;$b<=$per_page;$b++)
{
?>
<a href="news_list.php?category=<?php echo $_REQUEST["category"];?>&page=<?php echo $b;?>" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7"><?php echo $b." ";?></a>    

<?php 
} 
?>    
</div>
    
</div>
</div>

<?php include_once("6_first_sidebar.php");?>
</div>
</div>
</section>

<!-- Footer -->
<?php include_once("3_footer.php");?>
<?php include_once("3_footer_scripts.php");?>

</body>
</html>