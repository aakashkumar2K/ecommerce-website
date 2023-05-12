<?php
session_start();
include("db.php");
include("admin/functions.php");
?>
<?php

if(isset($_GET['pro_id'])){
    $product_id=$_GET['pro_id'];
    $get_product="select * from product where product_id='$product_id'";
    $run_product=mysqli_query($con,$get_product);
    $row_product=mysqli_fetch_array($run_product);
    $cat_id=$row_product['cat_id'];
    $product_title=$row_product['product_title'];
    $product_price=$row_product['product_price'];
    $product_desc=$row_product['product_desc'];
    $product_img1=$row_product['product_img1'];
    $product_img2=$row_product['product_img2'];
    $product_img3=$row_product['product_img3'];
    $get_cat="select * from product where cat_id='$cat_id'";
    $run_cat=mysqli_query($con,$get_cat);
    $row_cat=mysqli_fetch_array($run_cat);
    $cat_title=$row_cat['cat_title'];
    $cat_id=$row_cat['cat_id'];
    
}


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
     
 
}
</script>
    </body>
</html>