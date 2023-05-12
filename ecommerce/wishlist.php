<?php
include("account_panel.php");

include("db.php");
?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css">
        <!-- JavaScript file for icons-->
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
    <body>
        
        <div class="main"  style="margin-left:14%;">
            
        <form action="wishlist.php" method="post">
             <h1>Wishlist</h1>
            <?php 
                       
                       $ip_add = getRealIpUser();
                       
                       $select_wishlist = "select * from wishlist where ip_add='$ip_add'";
                       
                       $run_wishlist = mysqli_query($con,$select_wishlist);
                       
                       $count = mysqli_num_rows($run_wishlist);
                       
                       ?>
             <p style="align-content:left; margin-left:0px;">You currently have <?php echo $count; ?> item(s) in your wishlist.</p>
            
            <table ><!-- table Begin -->
                               
            
                                   
             <tr ><!-- tr Begin -->
                                 
                <td  style="font-size:18px;">Product</td>
                
               <td style="font-size:18px;">Price</td>
                
                <td  style="font-size:18px;">Delete</td>
               
                
                    <hr>             
             </tr><!-- tr Finish -->
             <?php 
                                   
                 
                                   
                  while($row_wishlist = mysqli_fetch_array($run_wishlist)){
                                       
                  $pro_id = $row_wishlist['p_id'];
                                       
                
                  
                                       
                $get_products = "select * from product where product_id='$pro_id'";
                                       
                   $run_products = mysqli_query($con,$get_products);
                                       
              while($row_products = mysqli_fetch_array($run_products)){
                                           
               $product_title = $row_products['product_title'];
                                           
                     $product_img1 = $row_products['product_img1'];
                              
                   $only_price = $row_products['product_price'];
                     
              
                                           
                                   ?>                      
         
                            
          
                 
                    <tr>
                     
              <td style="width:18%;"> <br><img  src="admin/products/<?php echo $product_img1; ?>" style="width:90%;" ><div class='desc'><a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a></div></td>
             
                                       
            
              <td > Rs.<?php echo $only_price; ?> </td>
         
              <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"> </td>
          
                               
       </tr><!-- tr Finish -->
                      <?php } } ?>        
           <br>
            </table>
             <button type="submit" name="update" value="Update Cart" style="width:30%; margin-left:52%;"> Update Wishlist </button><br><br>
              <div class="clearfix"></div>
         <?php 
               
                function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from wishlist where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('wishlist.php','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                }
               
               echo @$up_cart = update_cart();
               
               ?>
            
            </form>
        </div>
            
          
      
        
       
    </body>
  
</html>
   <?php 
    include("header-footer.php");
        ?>