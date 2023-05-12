<?php
$db=mysqli_connect("localhost","root","","ecom");

function getRealIpUser(){
    switch(true){
            case(!empty($_SERVER['HTTP_X_REAL_IP'])): return $_SERVER['HTTP_X_REAL_IP'];
            
            case(!empty($_SERVER['HTTP_CLIENT_IP'])): return $_SERVER['HTTP_CLIENT_IP'];
            
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])): return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
        default: return $_SERVER['REMOTE_ADDR'];
    }
}


function add_cart(){
    
    global $db;
    
    if(isset($_GET['add_cart'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_cart'];
        
        $product_qty = $_POST['product_qty'];
        
        $product_size = $_POST['product_size'];
        
        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product is already added in the cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
            
            $run_query = mysqli_query($db,$query);
            echo "<script>alert('This product is now added in the cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}


function add_wishlist(){
    
    global $db;
    
    if(isset($_GET['add_wishlist'])){
        
        $ip_add = getRealIpUser();
        
        $p_id = $_GET['add_wishlist'];
        
       
        
        $check_product = "select * from wishlist where ip_add='$ip_add' AND p_id='$p_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product is already added in the wishlist')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }else{
            
            $query = "insert into wishlist (p_id,ip_add) values ('$p_id','$ip_add')";
            
            $run_query = mysqli_query($db,$query);
             echo "<script>alert('This product is now added in the wishlist')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            
        }
        
    }
    
}



function getPro(){
    global $db;
    
    $get_product="select * from product order by 1 asc limit 0,12";
    $run_products=mysqli_query($db, $get_product);
    
    while($row_product=mysqli_fetch_array($run_products)){
        $pro_id=$row_product['product_id'];
        $pro_title=$row_product['product_title'];
        
        $pro_price=$row_product['product_price'];
        
        $pro_img=$row_product['product_img1'];
        
        $cat_id=$row_product['cat_id'];
        
        if($cat_id==2){
        
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
        
        if($cat_id==1){
        
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
        
        if($cat_id==3){
        
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
    }
}

function getCat(){
    global $db;
    $get_cat="select * from categories";
    $run_cat=mysqli_query($db,$get_cat);
    while($row_cat=mysqli_fetch_array($run_cat)){
        $cat_id=$row_cat['cat_id'];
        $cat_title=$row_cat['cat_title'];
        echo "
        <li>
        <a href='shop.php?cat=$cat_id'>$cat_title</a></li>";
    }
}

function getCatPro(){
    global $db;
    if(!isset($_GET['cat'])){
        getPro();
    }
    
    if(isset($_GET['cat'])){
        $cat_id=$_GET['cat'];
        $get_cat="select * from categories where cat_id='$cat_id'";
        $run_cat=mysqli_query($db,$get_cat);
        
        $row_cat=mysqli_fetch_array($run_cat);
        
        $cat_title=$row_cat['cat_title'];
        
        $get_cat_pro="select * from product where cat_id='$cat_id'";
        
         $run_product=mysqli_query($db,$get_cat_pro);
        
        $count=mysqli_num_rows($run_product);
        
        if($count==0){
            echo"
            <div class='main'><h1> No products available in this category</h1>
            </div>";
        }
        
        
        
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
<div class='clearfix'></div>";
        }
    }
}



?>