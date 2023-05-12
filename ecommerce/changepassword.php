<?php
$showalertnormal=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $SERVER="localhost";
    $USERNAME="root";
    $PASSWORD="";
    $DATABASE="ecom";
    $conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);
    $password=$_POST['psw'];
   $cpassword=$_POST['cpsw'];
    if($password==$cpassword){
   $sql="UPDATE signup SET PASSWORD='$PASSWORD' WHERE EMAIL='$email'";
   $result=mysqli_query($conn,$sql);
   if($results){
       $showalertnormal=true;
   }
  }
  else{
    $showerror=true;  
  }
}

?>
<!doctype html>
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
.container{
display:inline-block;
width:40%;
height:auto;
margin-left:30%;
margin-right:30%;
margin-top:3%;
}
 input[type=password] {
  width:100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background-color:rgb(255,165,0,.5);
}
input[type=password]:focus{
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

button:hover {
  background-color:rgb(255,160,0,1);
} 
.signupbtn {
  float: right;
  width: 45%;
}
</style>
</head>
<body>
</body>
<?php
if($showalertnormal==true){
    echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:4px,4px;padding:2%;font-size:14px;">
    <strong>your password changed sucessfully</strong>
  </div>';
  }
if($showerror==true){
    echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:4px,4px;padding:2%;font-size:14px;">
    <strong>passwords do not match</strong>
  </div>';
  } 
?>
<div class="logo">
<img src="logo3.png">
</div>
<div class="container" id="form2">
 <form action="changepassword.php" method="POST">
 <label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<label for="cpsw"><b>confirm Password</b></label>
<input type="password" placeholder="confirm Password" name="cpsw" required>
<button type="submit" class="signupbtn">submit</button>
 </form>
 </div>
</html>