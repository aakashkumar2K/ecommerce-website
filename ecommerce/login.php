<?php
$showalert=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="ecom";
$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);
$psw=$_POST['psw'];
$email=$_POST['email'];
$sql="SELECT * FROM signup where  PSW='$psw'AND EMAIL='$email'";
$results=mysqli_query($conn,$sql);
$num=mysqli_num_rows($results);
if($num==1){
  $showalert=true;
  session_start();
  $_SESSION['logeedin']=true;
  $_SESSION['username']=$num['USERNAME'];
  $_SESSION['email']=$email;
  header("location:index.php");
}
else
$showerror=true;
}
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
.container{
display:inline-block;
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
input[type=text]:focus,input[type=password]:focus{
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
<?php
if($showalert==true)
echo '<div style="background-color:rgb(265,155,0); width:100%; margin:4px,4px;padding:2%;">
<strong>logged in sucessfully</strong>
</div>';
if($showerror==true){
  echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:4px,4px;padding:2%;font-size:14px;">
  <strong>OPSS.....invalid crendtials</strong>
</div>';
}
?>
<div class="logo">
<img src="logo3.png">
</div>
<div class="container">
<form action="login.php" method="post">
<h1>login</h1>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<br>
<button type="button" onclick="goback()" class="cancelbtn">Cancel</button>
<button type="submit" class="signupbtn">Sign Up</button>
 <div class="forget">
 <a href="forget.php">forget </a>password
 </div>
 </form>
 </div>
 <script>
  function goBack() {
  window.history.back();
}
</script>
</body>
</html>