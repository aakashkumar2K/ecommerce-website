<?php

include("db.php");

include("head.php");

?>



<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Details</title>
    <link rel="stylesheet" href="style.css">
        <!-- JavaScript file for icons-->
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    </head>
    <body>

<div class="slideshow-container">

<div class="detailSlides fade">
 
  <img src="admin/products/<?php echo $product_img1; ?>" class="slide-img">
  
</div>

<div class="detailSlides fade">
  
  <img src="admin/products/<?php echo $product_img2; ?>" class="slide-img">
  
</div>

<div class="detailSlides fade">
  
  <img src="admin/products/<?php echo $product_img3; ?>" class="slide-img" >
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
        
        <div class="detail">
        
        <h1 ><?php echo $product_title; ?><br> MRP: Rs.<?php echo $product_price;?></h1>
            <br><br>
            <?php
            add_cart();
            ?>
            <form action="details.php?add_cart=<?php echo $product_id; ?>" method="post">
            <label class="size">Select quantity: &nbsp;&nbsp;   </label>
             <select name="product_qty" class="select-size" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick quantity')">
            <option disabled selected>Select quantity </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select><br><br>
        <label class="size">Select a size: &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  </label>
            <select name="product_size" class="select-size" required >
            <option disabled selected>Select a size </option>
            <option value="34">34</option>
            <option value="36">36</option>
            <option value="38">38</option>
            <option value="40">40</option>
            <option value="42">42</option></select>
            <br><br><br>
            
            <button id="cart_btn" >Add to Cart</button>
           
            
            </form>
            
             <?php
            add_wishlist();
            ?>
              <form action="details.php?add_wishlist=<?php echo $product_id; ?>" method="post"> 
            <button  id="wl_btn"  >Add to Wishlist</button>
                </form>
               
        </div>
     
        
        <div class="des">
        <br>
        <h1 >Description</h1>
            <p >
               <?php echo $product_desc;?></p><br>
<table>
            <tr><td>Country of Origin:</td>
    <td>India</td>
    </tr>
            
            <tr>
    <td style="width:200px;">Manufacturer Address:</td>
    <td>Monte Carlo 
Fashions Limited Unit-2, 231, Industrial Area - A, Ludhiana-141003, Punjab, India
</td></tr>
            
            <tr>
                <tr>
    <td>Customer Care:</td>
    <td>Monte Carlo Fashions Limited,B-XXIX-106, G.T. Road, Sherpur,Ludhiana-141003 Punjab, Call: 0161-5048700, 081969-22333 Or email to info@montecarlo.in</td></tr>
    <tr>
    <td>Washcare:</td>
    <td>Machine Wash</td></tr>
            
      </table>


           <br>
        </div><hr style=" float: left; margin-left:15%; width:75%">
        
         <div class="heading " style=" float: left; " >
        <center><h1>SIMILAR PRODUCTS</h1></center><br>
        </div>
        
        <div class="row" style="float:left; margin-left:15%; margin-right:15%;">
        <?php
           $get_product="select * from product where cat_id='$cat_id' order by 1 asc limit 0,4";
            $run_product=mysqli_query($con,$get_product);
            
            while($row_product=mysqli_fetch_array($run_product)){
                 $pro_id=$row_product['product_id'];
                 $pro_title=$row_product['product_title'];
        
                 $pro_price=$row_product['product_price'];
        
                 $pro_img=$row_product['product_img1'];
                  echo"
        
        <div class='responsive'>
  <div class='gallery'>
    <a target='_blank' href='details.php?pro_id=$pro_id'>
      <img src='admin/products/$pro_img' width='600' height='400'>
    </a>
    <div class='desc'><a href='details.php?pro_id=$pro_id'> $pro_title<br> Rs.$pro_price  </a></div>
  </div>
</div>
<div class='clearfix'></div>
        
        ";
        
            }
            ?></div>     
         
            
          
        
        
        <div class='clearfix'></div>
        
        <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("detailSlides");
  
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  
  
}
</script>

</body>
 
    
</html> 
<?php
      include("foot.php");  
        ?>