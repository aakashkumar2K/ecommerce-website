<?php

include("db.php");
include("admin/functions.php");

?>




<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Modista Misfits</title>
    <link rel="stylesheet" href="style.css">
        <!-- JavaScript file for icons-->
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
    <body>
            <header>
   <a href="index.php" ><img src="logo3.png" style="width: 40%; height: 40%;"></a>  
    <div class="toggle" onclick="toggleMenu();"></div>
    <ul class="menu">
        <?php
         getCat();
         ?>
        
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button>
        <li><a href="wishlist.php">WISHLIST</a></li>
        <li><a href="cart.php"><i class="fa fa-shopping-cart" ></i> CART</a></li>

       
        </ul>
    
    </header>
    
        
        <!--   ==================        LOGIN FORM   ====================        -->
        <div id="id01" class="login">
  
  <form class="login-content " action="/action_page.php" method="post">
      
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <p>LOGIN</p>
        <p>NOT REGISTERED? <a href="signup.php" style="color:#ffa500">SIGN UP</a></p>
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
      
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="pwd">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

        
        <div id="id02" class="login">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Signup">&times;</span>
  <form class="login-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <label for="pwd-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
      
     

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      
       <br>
        <button type="submit" class="signupbtn">Sign Up</button>
     
    </div>
  </form>
</div>
        
        <!-- ========================================================  -->
        
        <!----------- DYNAMIC SLIDESHOW ---------->
        <div class="slide-container">
            
            <?php
            
            $get_slides="select * from slider LIMIT 0,1";
            $run_slider=mysqli_query($con,$get_slides);
            
            while($row_slides=mysqli_fetch_array($run_slider)){
                $slide_name=$row_slides['slide_name'];
                $slide_img=$row_slides['slide_img'];
                
                echo " 
                <div class='slides fade'>
                
                <a href='shop.php'><img src='admin/slider/$slide_img' style='width:100%'></a>

            </div>
                
                
                ";
            }
            
            
            $get_slides="select * from slider LIMIT 1,1";
            $run_slider=mysqli_query($con,$get_slides);
            
            while($row_slides=mysqli_fetch_array($run_slider)){
                $slide_name=$row_slides['slide_name'];
                $slide_img=$row_slides['slide_img'];
                
                echo " 
                <div class='slides fade'>
                
                <a href='shop.php'><img src='admin/slider/$slide_img' style='width:100%'></a>

            </div>
                
                
                ";
            }
            
            ?>
            

            
    
        </div>
        <!-------------------------------------->
        
        
        <div class="heading " >
        <center><h2>OUR PRODUCTS</h2><hr style="width: 10%; color: black;"></center><br>
        </div>
<!--  ====================  PRODUCTS =====================  -->
        <div class="row">
        <?php
        
        getPro();
        
        
        
        ?>
        </div>

        
<!-- ==================== PRODUCTS FINISHED ======================== -->    
        
        
        
        
        
        
        
        
        
        
        
        
        <!-------------------------- Footer for contact information----------------------------------------->
<footer id="contact" >
    <div class="list">
    <ul class="customer-care">
        <li>CUSTOMER CARE</li>
    <li><a href="https://mail.google.com/mail/u/0/#inbox">Contact Us</a></li>
    <li><a href="wishlist.php">My Account</a></li>
    <li><a href="wishlist.php">Wishlist</a></li>
    <li><a href="cart.php">Cart</a></li>
    </ul>
    </div>
    
    <div class="list">
     <ul class="collection">
        <li>COLLECTION</li>
   <?php
         getCat();
         ?>
    </ul>
    </div>
    <div class="clearfix"></div>
    <ul class="icons">
        <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope"></i></a></li>
        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i>
</a></li>
        <li><a href="https://www.instagram.com/accounts/login/" ><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://www.facebook.com/" ><i class="fab fa-facebook"></i></a></li>
		  <center><hr ></center><br>
        
        <p>

Modista Misfits is a fashion house with an eclectic mix of clothing for men, women and tweens. With a utilitarian, trendy and premium quality approach to clothing, it has become the clothing brand of choice where customers love to buy their fix of jackets, jeans, trousers, shirts, sweatshirts, sweaters, coats, t-shirts, tops, cardigans, tracksuits, denims, thermals and much more. Fashion savvy designs in finest quality materials make them the preferred choice of one and all.</p><br>
 <p>
    Online shopping in India has come of age and people from all walks of life are eager to buy online, given the sheer variety and newest styling. With trendy urban wear that is chic and affordable, Modista Misfits makes your experience of online shopping for clothes in India memorable. The suave and casual menswear collection makes these clothes perfect for online shopping for men in India. Also, the exhilarating array of womens wear has gained an ardent following. Shop with us for a truly unique and unforgettable experience, both in terms of product and service.<br> </p><br>
        <center><hr ></center>	</ul><br>
		<center><h4>COPYRIGHT: MODISTA MISFITS 2020</h4></center><br><br><br>
		
</footer>
        
        
        
        <script type="text/javascript">
        
    //for sticky navigation bar
    window.addEventListener('scroll',function(){    //adding the event listener
        var header=document.querySelector('header');   //selects the tag in which the navigation bar lies
        header.classList.toggle('sticky',window.scrollY>180)   //becomes sticky for y>180
    })
    
        //for the side menu on smaller devices
        function toggleMenu(){     
            var menuToggle=document.querySelector('.toggle');   //selects the toggle class
            var menu=document.querySelector('.menu');     //selects the menu class
            menuToggle.classList.toggle('active')    //adds a class active to toggle 
            menu.classList.toggle('active');      //adds a class active to menu 
        }
        
        
        //goes to top of the page every time the page is reloaded
        window.onbeforeunload=function(){
    window.scrollTo(0,0);
}
     
        
 //  =============== LOGIN =====================       
        // Get the modal
var login = document.getElementById('id01');
var signup=document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
    
    if (event.target == signup) {
        signup.style.display = "none";
    }
}
        
//================================================

//===============SLIDESHOW=========================
        var slideIndex = 0;
        showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slides");
  
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  
  slides[slideIndex-1].style.display = "block";  
  
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
         
            

           </script>
    </body>