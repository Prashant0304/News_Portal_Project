 <!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("1_metatags.php");?>
</head>
<body class="animsition">

<?php include_once("2_header.php");?>
    <section class="bg0 p-b-60">
<div class="container">
<div class="row justify-content-center">
 
<div class="col-md-5 p-b-80" id="contactShow">
<div class="container p-t-4 p-b-40">
<h2 class="f1-l-1 cl2" style="text-align:center"><br>
LOGIN
</h2>
</div>
<div class="p-r-10 p-r-0-sr991">
<form class="login_form row" method="POST" id="contact_form" enctype="multipart/form-data">
<input class="form-control" type="hidden" name="type" id="type" value="CONTACT">
 
<label>Enter Registered Mobile Number</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" placeholder="Enter Registered Contact Number" name="cu_contact" id="cu_contact">
<span id="cu_contact_error"></span>
 
<button class="btn btn-block size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20" type="submit">
SEND OTP
</button><br>

</form>
</div>
</div>


<div class="col-md-5 p-b-80" id="changePassoword">
<div class="container p-t-4 p-b-40">
<h2 class="f1-l-1 cl2" style="text-align:center"><br>
LOGIN
</h2>
</div>
<div class="p-r-10 p-r-0-sr991">
<form class="login_form row" method="POST" id="change_password" enctype="multipart/form-data">
<input class="form-control" type="hidden" name="type" id="type" value="CHANGEPASSWORD">
 
<label>Enter OTP</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" placeholder="Enter OTP" name="otp" id="otp">
<span id="otp_error"></span>
 
 
<label>Enter New Password</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" placeholder="Enter New Password" name="new_password" id="new_password">
<span id="new_password_error"></span>
 
 
<label>Enter Confirm Password</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" placeholder="Enter Confirm Password" name="confirm_password" id="confirm_password">
<span id="confirm_password_error"></span>
  
<button class="btn btn-block size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20" type="submit">
CHANGE PASSWORD
</button><br>

</form>
</div>
</div>


 
</div>
</div>
</section>
 
<?php include_once("3_footer.php");?>
<?php include_once("3_footer_scripts.php");?>
<script type="text/javascript">    
$(document).ready(function(){
$('#changePassoword').hide();    
$(document).on('submit', '#contact_form', function(event) {
event.preventDefault(); 
var cu_contact = '';
var formData = new FormData($('#contact_form')[0]);    
cu_contact = phoneno('cu_contact', 'cu_contact_error', 'Contact Number');
if (cu_contact == 1) 
{
 $.ajax({
    url: "customer/forgot_contact_check.php",
    method: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    dataType: "json",    
    success: function(data)
    {
        if(data.message_error==1)
        {
            alert("Contact Number Not Found!!");    
        }
        if(data.message_error==0)
        {
            $('#contactShow').hide();
            $('#changePassoword').show();    
        }
    }
});   
}
});
    
$(document).on('submit', '#change_password', function(event) {
event.preventDefault(); 
var otp = '';
var new_password = '';
var confirm_password = '';
var formData = new FormData($('#change_password')[0]);    
otp = fieldrequired('otp', 'otp_error', 'Otp');
new_password = pasword('new_password', 'new_password_error', 'New Password');    
confirm_password = pasword('confirm_password', 'confirm_password_error', 'Confirm Password');
if (otp == 1 && new_password == 1 && confirm_password == 1) 
{
 $.ajax({
    url: "customer/forgot_contact_check.php",
    method: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    dataType: "json",    
    success: function(data)
    {
        if(data.message_error==1)
        {
            alert("NEW & CONFIRM PASSWORD DOES NOT MATCH");    
        }
        else if(data.message_error==2)
        {
            alert("INVALID OTP");    
        }
        if(data.message_error==0)
        {
            alert("PASSWORD CHANGED SUCCESSFULLY");    
            window.location.href = "index.php";   
        }
    }
});   
}
});    
});       
</script>   
</body>
</html>