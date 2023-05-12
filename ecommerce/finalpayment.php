<?php
session_start();

$MERCHANT_KEY = "gtKFFx";
$SALT = "eCwWELxi";
$txnid=$MERCHANT_KEY.time().uniqid(mt_rand(),true);
$name=$_SESSION['username'];
//$email="webanilsidhu@gmail.com";
$email=$_SESSION['email'];
$amount=10;
$phone="9999766582";
$surl="http://localhost/cake/my_app_name/view/sucess";
$furl="http://localhost/cake/my_app_name/view/failure";
$productInfo="xyzabc";
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-width, initial-scale=1">
<title> login  </title>
<style>
*{
box-sizing:border box;
}
.logo img {
   display:block;
   margin-left:auto;
   margin-right:auto;
   width:20%;
   height:auto;
    
}
.forget{
display inline-block;
float:right;
}
#form1,.container{
display:inline-block;
width:40%;
height:auto;
margin-left:30%;
margin-right:30%;
margin-top:3%;
}
.container1,.container2{
width:40%;
height:auto;
margin-left:30%;
margin-right:30%;
margin-top:3%;
}
input[type=text], input[type=password] {
  width:100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background-color:rgb(255,165,0,.5);
}
input[type=text]:focus,input[type=password]:focus,input[type=button]{
  background-color:rgb(255,165,0,.9);
  outline: none;
}
button {
  background-color: rgb(255,160,0,.8);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
input[type=submit] {
  background-color: rgb(255,160,0,.8);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}
button:hover {
  background-color:rgb(255,160,0,1);
}
.cancelbtn{
float:left;
width:45%;
} 
.signupbtn {
  float: right;
  width: 45%;
}
</style>
</head>
<body>
<div class="logo">
<img src="logo3.png">
</div>
<div class="container1">
<h1>PayUMoney Payment Request Form </h1>
<form action="https://sandboxsecure.payu.in/_payment"  name="payuform" method=POST >
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" >
<input type="hidden" name="hash"  value="<?php echo $hash;?>" >
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>

<label for="amount">Amount: </label>
<input  type="text"name="amount" class="signup-text-input" value="<?php echo $amount;?>">
<label for="firstname">First Name:</label>
<input type="text"name="firstname" class="signup-text-input" id="firstname" value="<?php echo $name;?>" >
<label for="email">Email: </label>
<input type="text"name="email" class="signup-text-input" id="email"  value="<?php echo $email;?>" >
<label for="phone">Phone: </label>
<input type="text" name="phone" class="signup-text-input" value="<?php echo $phone;?> " >
<label for="productinfo">Product Info: </label>
<input type="text" name="productinfo" class="signup-text-input" value="<?php echo $productInfo;?>" >
<label for="surl">Success URI: </label>
<input type="text" name="surl"  class="signup-text-input" size="64" value="<?php echo $surl;?> " >
<label for="furl">Failure URI: </label>
<input type="text" name="furl"  class="signup-text-input" size="64" value="<?php echo $furl;?> " >
<input type="hidden"class="signup-text-input" name="service_provider" value="" >


<input type="submit" value="Submit"  />
</form>
</div>
</body>
</html>