<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("1_metatags.php");?>
</head>
<style>
 .custom{
  background-color:#e6e2e2;
  cursor: not-allowed;
 } 
</style>
<body class="animsition">

<?php include_once("2_header.php");?>
<!-- Page heading -->
<!-- Content -->
<section class="bg0 p-b-60">
<div class="container">
<div class="row justify-content-center">
<div class="offset md-3 col-md-7 col-lg-8 p-b-80">
<div class="container p-t-4 p-b-10">
<h3 class="f1-l-1 cl2" style="text-align:center"><br>
ADVERTISEMENT ORDER CHECKOUT
</h3>
</div>
<?php
if(isset($_SESSION["customer"])){
$ap_id=$_REQUEST["ap_id"]; 
$at_id=$_REQUEST["at_id"]; 
 
$sql=$conn->prepare("SELECT * FROM advertisement_pricing ap,advertisement_type at WHERE ap.at_id=at.at_id AND ap.ap_id=? AND ap.at_id=?"); 
$sql->bind_param("ii",$ap_id,$at_id); 
$sql->execute();
$result=$sql->get_result();
$row=$result->fetch_assoc();
?>
<!--advertisement_pricing_insert.php -->
<div class="p-r-10 p-r-0-sr991" style="border: 1px solid black;padding: 40px;">
<form method="post" action="advertisement_pricing_insert.php" onsubmit="return validateForm();" enctype="multipart/form-data">
<input type="hidden" name="ap_id" id="ap_id" value="<?php echo $row["ap_id"];?>"> 
<input type="hidden" name="at_id" id="at_id" value="<?php echo $row["at_id"];?>">  
<input type="hidden" name="ap_priority" id="ap_priority" value="<?php echo $row["ap_priority"];?>">  
<input type="hidden" name="cu_id" id="cu_id" value="<?php echo $cu_id;?>">
 
<label>Customer Name</label>  
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 custom" type="text" name="cu_name" id="cu_name" value="<?php echo $fullname;?>" readonly>
 
<label>Advertisement Type</label>  
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 custom" type="text" name="at_type" id="at_type" value="<?php echo $row["at_type"];?>" readonly>
 
<label>Position</label> 
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 custom" type="text" name="ap_name" id="ap_name" value="<?php echo $row["ap_name"];?>" readonly>

 
<label>Per Day Price</label> 
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 custom" type="text" name="ap_price" id="ap_price" value="<?php echo $row["ap_price"];?>" readonly>
 
 
<label>No of Days</label> 
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="ad_no_of_days" id="ad_no_of_days" onkeyup="calculate_total();">
<span id="ad_no_of_days_error"></span> 
<script type="text/javascript">
function calculate_total()
{ 
if(document.getElementById("ad_no_of_days").value<=0){
  alert("Days Should Be Grater Than Zero(0)");
  document.getElementById("ad_no_of_days").focus;
}
else
{
  if(document.getElementById("ad_no_of_days").value==""){
  var days=0; 
  }
  else{
  var days=document.getElementById("ad_no_of_days").value; 
  } 

  var unit_price=document.getElementById("ap_price").value;
  var total_price=parseInt(days)*parseInt(unit_price);
  document.getElementById("ad_total_price").value=total_price;
}
}  
</script>    

<label>Total Amount</label> 
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 custom" type="text" name="ad_total_price" id="ad_total_price">
 
<input type="hidden" class="form-control" id="add_type" name="add_type" value="<?php echo $_REQUEST["type"];?>">	
<?php
if($_REQUEST["type"]=="IMAGE" || $_REQUEST["type"]=="VIDEO"){
?>
<label>Upload File</label> 
<input class="btn btn-default bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="file" name="ad_image" id="ad_image"> 
<span id="ad_image_error"></span>  
<?php
} 
?>
 
<?php
if($_REQUEST["type"]=="TEXT"){
?>
<label>Add text</label> 
<textarea name="marquee_text" id="marquee_text" class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20"></textarea> 
<span id="marquee_text_error"></span> 
<?php
} 
?>


<button class="btn btn-block size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20">
CONFIRM ORDER
</button>
</form>
</div>
<?php
}
else{
?>
<h2 class="f1-l-1 cl2" style="text-align:center"><br>
<form method="post" action="customer_login_register.php">
<?php 
include_once('5_current_page_url.php');
?>
<input type="hidden" name="order_url" id="order_url" value="<?php echo $current_link;?>">
<input type="submit" class="btn btn-sm btn-info btn-rounded btn-block" value="Login/Register to Confirm Order">
</form>
</h2> 
<?php
} 
?>
</div>

</div>
</div>
</section>
   
<?php include_once("3_footer.php");?>
<?php include_once("3_footer_scripts.php");?>
<script type="text/javascript">
function validateForm(){
var ad_no_of_days="";
var marquee_text="";
var ad_image="";
ad_no_of_days=numbers("ad_no_of_days","ad_no_of_days_error","Days"); 
if(document.getElementById('add_type').value =="TEXT")
{
marquee_text = fieldrequired('marquee_text', 'marquee_text_error', 'Text');	
}
else
{
marquee_text=1;
}

if(document.getElementById('add_type').value =="IMAGE")
{
ad_image = imagename('ad_image', 'ad_image_error', 'Upload');
}
else
{
ad_image=1;
}

if(document.getElementById('add_type').value =="VIDEO")
{
ad_image = videoname('ad_image', 'ad_image_error', 'Upload');
}
else
{
ad_image=1;
}

 
if(ad_no_of_days==1 && marquee_text==1 && ad_image==1){
   return true;
}
else{
    return false;  
   }
} 
</script>
</body>
</html>