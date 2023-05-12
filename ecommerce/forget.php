<?php
$showalert=false;
$showalertnormal=false;
$showerror=false;
$showerrornormal=false;
$notconfirm=false;
STATIC $gemail="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="ecom";
$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);
  if(isset($_POST['submitt'])){
if($_POST['submitt']=='submit_1'){

$gemail=$_POST['email'];
$uname=$_POST['uname'];
$book=$_POST['book'];
$dish=$_POST['dish1'];
$sql="SELECT * FROM signup where  USERNAME='$uname'AND EMAIL='$gemail'";
$results=mysqli_query($conn,$sql);
$num=mysqli_num_rows($results);
if($num==1){
$row = mysqli_fetch_assoc($results);
if($row['BOOK']==$book AND $row['DISH']==$dish){
  $showalert=true;
  session_start();
  $_SESSION['email']=$gemail;
}
else{
   $notconfirm=true; 
}
}
else{
  $showerrornormal=true;
}

}

if($_POST['submitt']=='submit_2'){
  session_start();
  $gemail=$_SESSION['email']; 
  $password=$_POST['psw'];
  $cpassword=$_POST['cpsw'];
  if($password==$cpassword){
        $sqlc="UPDATE signup SET PSW='$password' where EMAIL='$gemail'";
        $result=mysqli_query($conn,$sqlc);
        if($result){
        $showalertnormal=true;
        session_unset();

          // destroy the session
          session_destroy();
        }
  }
  else{
    $showerror=true;  
  }
  
}
}
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
#form1,.container{
display:inline-block;
width:40%;
height:auto;
margin-left:30%;
margin-right:30%;
margin-top:3%;
}
.container1,.container2{
display:none;
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
<?php
if($showalert==true){
echo '<div style="background-color:rgb(265,155,0); width:100%; margin:4px,4px;padding:2%;">
<strong>YOU are verified as a genuine user</strong>
</div>';
?>
<script language="javascript">
document.getElementById("form1").style.display="none";
document.getElementById("form2").style.display="block";
</script>;
<?php
}
if($showerror==true){
  echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:4px,4px;padding:2%;font-size:14px;">
  <strong>passwords do not match</strong>
</div>';
}
if($showerrornormal==true){
    echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:4px,4px;padding:2%;font-size:14px;">
    <strong>OPSS.....invalid crendtials</strong>
  </div>';
  }
  if($showalertnormal==true){
    echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:4px,4px;padding:2%;font-size:14px;">
    <strong>your password changed sucessfully</strong>
  </div>';
  }
  if($notconfirm==true){
    echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:4px,4px;padding:2%;font-size:14px;">
    <strong>it can not be confirm now that this account belong to you ...sorry your request cannot be processed at this time</strong>
  </div>';
  }
?>

<div class="logo">
<img src="logo3.png">
</div>
<div class="container1" id="form1">
<form action="forget.php" method="post">
<h1>Forget password</h1>
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter  Username" name="uname" required>
 in order to verify that this account belongs to you<br>
answere these questions <br>
<label for="book"><b> favourite book</b></label>
<input type="text" name="book" placeholder="book name" required>
<label for="dish1"><b>favourite dish</b></label>
<input type="text" name="dish1" placeholder="dish name" required>

<button type="button" onclick="goback()" class="cancelbtn">Cancel</button>
<input type="submit" class="signupbtn" name="submitt" value="submit_1">
 <div class="forget">
 <a href="index.php">back to home </a>
 </div>
 </form>
 </div>
 <div class="container2" id="form2">
 <form action="forget.php" method="POST">
 <label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<label for="cpsw"><b>confirm Password</b></label>
<input type="password" placeholder="confirm Password" name="cpsw" required>
<input type="submit" class="signupbtn" name="submitt" value="submit_2">
 </form>
 </div>
 <?php
 if($showalert==true){
?>
<script language="javascript">
document.getElementById("form1").style.display="none";
document.getElementById("form2").style.display="block";
</script>;
<?php
 }
 ?>
 <script>
  function goback() {
  window.history.back();
}
</script>
</body>
</html>
