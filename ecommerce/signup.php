<?php
$exists=false;
$showalert=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $nameErr = $emailErr =  "";

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="ecom";
$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

$name=$_POST['name'];
$email=$_POST['email'];
$psw=$_POST['psw'];
$book=$_POST['book'];
$dish1=$_POST['dish1'];
$sql = "INSERT INTO SIGNUP ".
"(USERNAME,EMAIL,PSW,BOOK,DISH) ".
"VALUES"."('$name','$email','$psw','$book','$dish1')";
$results=mysqli_query($conn,$sql);
if($results&&$exists==false){
 $showalert=true; 
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
<title>  sign up  </title>
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
width:60;
height:70%;
margin-left:15%;
margin-right:15%;
margin-top:3%;
}
input[type=text], input[type=password],input[type=email] {
  width:100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background-color:rgb(255,165,0,.5);
}
input[type=text]:focus,input[type=password]:focus,input[type=email]:focus{
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
  background-color:rgb(255,160,0);
}
.error{
color="red";
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn{
float:left;
width:45%
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
echo '<div style="background-color:rgb(265,155,0); width:100%; margin:8px,4px;padding:4%;">
<strong>your account created sucessfully</strong>
</div>';
if($showerror==true){
  echo '<div style="background-color:rgb(265,155,0);  width:100%; margin:8px,4px;padding:4%;">
  <strong> account already exist with this email id  </strong>
</div>';
}
?>
<div class="logo">
<img src="logo3.png">
</div>
<div class="container">
<form action="signup.php" method="post">

      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
       <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required><br>

      <label for="name"><b>Username</b></label>
      <input type="text" placeholder="Enter name" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <p><strong>  please give the answere of the following questions</strong></p>
      <p>this will help us to recover your account<i><b> in case you forget your password</b></i></p>
      <label for="book"><b> favourite book</b></label>
          <input type="text" name="book" placeholder="book name" required>
      <label for="dish1"><b>favourite dish</b></label>
          <input type="text" name="dish1" placeholder="dish name" required>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <br>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
      <script>
         function go_back(){
         window.history.back();
        }
        </script>
        <button type="button" onclick="go_back()" class="cancelbtn">Cancel</button>
        

     
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    
  </form>
</div>

</body>
</html>