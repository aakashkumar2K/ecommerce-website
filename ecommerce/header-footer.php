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
  <a href="index.php" ><img src="logo3.png" style="width: 40%; height: 40%; "></a>
    <div class="toggle" onclick="toggleMenu();"></div>
    <ul class="menu">
        <li><a href="#">MEN</a></li>
        <li><a href="#">WOMEN</a></li>
        <li><a href="#">KIDS</a></li>
        <li><a href="#">MASKS</a></li>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</button>
        <li><a href="#">WISHLIST</a></li>
        <li><a href="#"><i class="fa fa-shopping-cart" ></i> CART</a></li>

       
        </ul>
    
    </header>
 
   
		
        <!---------------FOOTER-------------->
    
    <footer id="contact" >
    <div class="list">
    <ul class="customer-care">
        <li>CUSTOMER CARE</li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">My Account</a></li>
    <li><a href="#">Wishlist</a></li>
    <li><a href="#">Cart</a></li>
    </ul>
    </div>
    
    <div class="list">
     <ul class="collection">
        <li>COLLECTION</li>
    <li><a href="#">Men</a></li>
    <li><a href="#">Women</a></li>
    <li><a href="#">Kids</a></li>
    <li><a href="#">Masks</a></li>
    </ul>
    </div>
    
    <ul class="icons">
        <li><a href="mailto:kauranmol81@gmail.com"><i class="fa fa-envelope"></i></a></li>
        <li><a href="https://github.com/ak17-11"><i class="fab fa-twitter"></i>
</a></li>
        <li><a href="https://www.instagram.com/boredgirlwithaphone/" ><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://www.facebook.com/anmol.kaur.1865" ><i class="fab fa-facebook"></i></a></li>
   <!-- 		  <center><hr ></center><br>
    <center>
        <p>

Modista Misfits is a fashion house with an eclectic mix of clothing for men, women and tweens. With a utilitarian, trendy and premium quality approach to clothing, it has become the clothing brand of choice where customers love to buy their fix of jackets, jeans, trousers, shirts, sweatshirts, sweaters, coats, t-shirts, tops, cardigans, tracksuits, denims, thermals and much more. Fashion savvy designs in finest quality materials make them the preferred choice of one and all.</p><br>
 <p>
    Online shopping in India has come of age and people from all walks of life are eager to buy online, given the sheer variety and newest styling. With trendy urban wear that is chic and affordable, Modista Misfits makes your experience of online shopping for clothes in India memorable. The suave and casual menswear collection makes these clothes perfect for online shopping for men in India. Also, the exhilarating array of womens wear has gained an ardent following. Shop with us for a truly unique and unforgettable experience, both in terms of product and service.<br> </p></center><br>
        <center><hr ></center>	</ul><br>  -->
		<center style="font-size: 17px;">COPYRIGHT: MODISTA MISFITS 2020</center><br><br><br>
		
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
</script>
    </body>
</html>