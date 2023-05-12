    <html>
    <body>
    
    <!---------------FOOTER-------------->
   
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
  
        <center ><h4>COPYRIGHT: MODISTA MISFITS 2020</h4></center><br><br>
        </ul>
      
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
     
        
        </script>

        </body></html>