<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("1_metatags.php");?>
<style>
    .f1-l-1 {    
            font-size: 26px !important;
    }
</style>
</head>
<body class="animsition">
<?php include_once("2_header.php");?>
    <section class="bg0 p-b-60">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-5 p-b-80">
<div class="container p-t-4 p-b-10">
<h3 class="f1-l-1 cl2" style="text-align:center"><br>
LOGIN
</h3>
</div>
<div class="p-r-10 p-r-0-sr991">
<form class="login_form row" method="POST" action="customer/customer_login_check.php" onsubmit="return ValidateLoginForm()" enctype="multipart/form-data" style="border:1px solid black;padding:30px;">
<?php 
if(isset($_POST["order_url"])){
?>
<input type="hidden" name="order_url" value="<?php echo $_POST['order_url'];?>">                                
<?php
}else
{
?>                                
<input type="hidden" name="order_url" value="NAN">                                 
<?php
}
?>   
<div class="col-md-12 mb-20"> 
<div class="form-group">  
<label>Enter Username</label>  
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="cu_username_login" id="cu_username_login" placeholder="Enter Username">
<span id="cu_username_login_error"></span> 
</div> 
</div> 
 
<div class="col-md-12 mb-20"> 
<div class="form-group">  
<label>Enter Password</label>  
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="password" name="cu_password_login" id="cu_password_login" placeholder="Enter Password">
<span id="cu_password_login_error"></span>  
</div>
</div>
 
<button class="btn btn-block size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20" type="submit">
LOGIN
</button><br>
<br><br><br><a href="customer_forgotpassword.php" class="btn btn-outline-danger btn-block">Forgot Password?</a> 
<br><br><br>
</form>
</div>
</div>

<div class="col-md-7 p-b-80">
<div class="container p-t-4 p-b-10">
<h4 class="f1-l-1 cl2" style="text-align:center" style="font-size:16px !important;"><br>
New User? Fill the Details to Register.
</h4>
</div>
<div class="p-r-10 p-r-0-sr991">
<form class="login_form row1" method="post" action="customer/customer_insert.php" onsubmit="return ValidateForm()" style="border:1px solid black;padding:30px;">
<div class="row">
 
<div class="col-md-6 col-12 mb-20">
<div class="form-group">
<label>FullName</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="cu_name" id="cu_name" placeholder="Full Name">
<span id="cu_name_error"></span>
</div>  
</div>
 
<div class="col-md-6 col-12 mb-20">
<div class="form-group"> 
<label>Contact</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="cu_contact" id="cu_contact" placeholder="Contact">
<span id="cu_contact_error"></span>
</div>
</div>
 
<div class="col-md-6 mb-20">
<div class="form-group"> 
<label>Email</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="cu_email" id="cu_email" placeholder="Email ID">
<span id="cu_email_error"></span>
</div>
</div>
 
<div class="col-md-6 mb-20">
<div class="form-group">
<label>Address</label>
<input type="text" class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" placeholder="Address" name="cu_address" id="cu_address">
<span id="cu_address_error"></span>
</div>
</div>
 
<div class="col-md-6 mb-20">
<div class="form-group"> 
<label>Username</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" placeholder="Username" name="cu_username" id="cu_username">
<span id="cu_username_error"></span>
</div>
</div>
 
<div class="col-md-6 mb-20">
<div class="form-group"> 
<label>Password</label>
<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="password" placeholder="Password" name="cu_password" id="cu_password">
<span id="cu_password_error"></span>
</div> 
</div> 
</div> 

<button class="btn btn-block size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20">
REGISTER
</button>
</form>
</div>
</div>

 
</div>
</div>
</section>
 
<?php include_once("3_footer.php");?>
<?php include_once("3_footer_scripts.php");?>
<script type="text/javascript">
function ValidateForm()
{
var cu_name = '';
var cu_contact = '';
var cu_email = '';
var cu_address = '';
var cu_username = '';
var cu_password = '';                

cu_name = alphabets('cu_name', 'cu_name_error', 'Name');
cu_contact = phoneno('cu_contact', 'cu_contact_error', 'Contact Number');
cu_email = emailid('cu_email', 'cu_email_error', 'Email');
cu_address = fieldrequired('cu_address', 'cu_address_error', 'Address');
cu_username = fieldrequired('cu_username', 'cu_username_error', 'Username');
cu_password = pasword('cu_password', 'cu_password_error', 'Password');

if (cu_name == 1 && cu_contact == 1 && cu_email == 1 && cu_address == 1 && cu_username == 1 && cu_password == 1) 
{
    return true;
}
else
{
    return false;
}
}
</script>
   
    <script type="text/javascript">
        function ValidateLoginForm()
        {
            var cu_username_login = '';
            var cu_password_login = '';                            

            cu_username_login = fieldrequired('cu_username_login', 'cu_username_login_error', 'Username');
            cu_password_login = pasword('cu_password_login', 'cu_password_login_error', 'Password');

            if (cu_username_login == 1 && cu_password_login == 1) 
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
</body>
</html>