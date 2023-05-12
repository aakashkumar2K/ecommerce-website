<?php
include("account_panel.php");
include("db.php");

?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
        <!-- JavaScript file for icons-->
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
    <body>
        
        <div class="cart">
            
        <form action="cart.php" method="post">
             <h1>Shopping Cart</h1>
             <?php 
                       
                       $ip_add = getRealIpUser();
                       
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($con,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
                       
                       ?>
            <p style="align-content:left; margin-left:0px;">You currently have <?php echo $count; ?> item(s) in your cart.</p>
            <table ><!-- table Begin -->
                               
            
                                   
             <tr ><!-- tr Begin -->
                                 
                <td  style="font-size:18px;">Product</td>
                <td style="font-size:18px;">Quantity</td>
               <td style="font-size:18px;">Unit Price</td>
                <td style="font-size:18px;">Size</td>
                <td  style="font-size:18px;">Delete</td>
                <td style="font-size:18px;">Sub-Total</td>
                    <hr>             
             </tr><!-- tr Finish -->
                                   
           <?php 
                                   
                  $total = 0;
                                   
                  while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                  $pro_id = $row_cart['p_id'];
                                       
                  $pro_size = $row_cart['size'];
                                       
                   $pro_qty = $row_cart['qty'];
                  
                                       
                $get_products = "select * from product where product_id='$pro_id'";
                                       
                   $run_products = mysqli_query($con,$get_products);
                                       
              while($row_products = mysqli_fetch_array($run_products)){
                                           
               $product_title = $row_products['product_title'];
                                           
                     $product_img1 = $row_products['product_img1'];
                                           
                      $only_price = $row_products['product_price'];
                                           
                      $sub_total = $row_products['product_price']*$pro_qty;
                                           
                         $total += $sub_total;
              
                                           
                                   ?>
                            
          
                 
                    <tr>
                     
                        <td style="width:18%;"> <br><img  src="admin/products/<?php echo $product_img1; ?>" style="width:90%;" ><div class='desc'><a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a></div></td>
             
                                       
              <td >  <?php echo $pro_qty; ?> </td>
               <td > Rs.<?php echo $only_price; ?> </td>
          <td> <?php echo $pro_size; ?> </td>
             <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"> </td>
            <td>  Rs.<?php echo $sub_total; ?> </td>
                               
       </tr>
                 <?php } } ?>
                             
           <br>
                  </table>
            
                <button type="submit" name="update" value="Update Cart" style="width:30%; margin-left:62%;"> Update Cart </button>
              
               
          
              
            
          <br><br>
       
            <div class="right_sidenav"  >
            <h3>Order Summary</h3><hr> <br><br>
            <table>
               
            <tr><td >Amount: </td>
                <td>Rs.<?php echo $total; ?></td></tr>
            <tr>
                <td style="width:310px;">Shipping Charges:</td>
                <td>Rs.0</td></tr>
            <tr>
                <td>Tax Charges: </td>
                <td>Rs.0</td></tr>
            <tr>
                <td>Total Amount: </td>
                <td>Rs.<?php echo $total; ?></td></tr></table><br><br>
            
            <button id="shop_btn" ><a href="shop.php" style="text-decoration:none; color:black;">Continue Shopping</a></button>
            <button id="pay_btn">Checkout</button>
            </div>
            <div class="clearfix"></div>
        
         <?php 
               
                function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('cart.php','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                }
               
               echo @$up_cart = update_cart();
               
               ?>
            </form>
        </div>
        
        
      
        
        <?php 
    include("header-footer.php");
        ?>
    </body>
  
</html>
  