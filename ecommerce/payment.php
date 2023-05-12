<?php// Merchant key here as provided by Payu
$MERCHANT_KEY = "gtKFFx";
$SALT = "eCwWELxi";
$txnid=$MERCHANT_KEY.time().uniqid(mt_rand(),true);
$name="anil";
$email="webanilsidhu@gmail.com";
$amount=10;
$phone="9999766582";
$surl="http://localhost/cake/my_app_name/view/sucess";
$furl="http://localhost/cake/my_app_name/view/failure";
$productInfo="xyzabc";

// Merchant Salt as provided by Payu

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
.container1{
display:none;
width:40%;
height:auto;
margin-left:30%;
margin-right:30%;
margin-top:3%;
}
input[type=submit] {
  background-color: rgb(255,160,0,.8);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
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
<input name="amount" class="signup-text-input" value="<?php echo $amount;?>">
<label for="firstname">First Name:</label>
<input name="firstname" class="signup-text-input" id="firstname" value="<?php echo $name;?>" >
<label for="email">Email: </label>
<input name="email" class="signup-text-input" id="email"  value="<?php echo $email;?>" >
<label for="phone">Phone: </label>
<input name="phone" class="signup-text-input" value="<?php echo $phone;?> " >
<label for="productinfo">Product Info: </label>
<textarea name="productinfo" class="signup-text-input" ><?php echo $productInfo;?></textarea>
<label for="surl">Success URI: </label>
<input name="surl"  class="signup-text-input" size="64" value="<?php echo $surl;?> " >
<label for="furl">Failure URI: </label>
<input name="furl"  class="signup-text-input" size="64" value="<?php echo $furl;?> " >
<input type="hidden"class="signup-text-input" name="service_provider" value="" >


<input type="submit" value="Submit"  />
</form>
</div>
</body>
</html>