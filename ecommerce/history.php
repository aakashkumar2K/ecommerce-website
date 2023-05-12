<?php
include("account_panel.php");


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
            
        
             <h1>Order History</h1>
            <table ><!-- table Begin -->
                               
            
                                   
             <tr ><!-- tr Begin -->
                                 
                <td  style="font-size:18px;">Product</td>
                <td style="font-size:18px;">Quantity</td>
               <td style="font-size:18px;">Unit Price</td>
                <td style="font-size:18px;">Size</td>
               
                <td style="font-size:18px;">Total</td>
                
                    <hr>             
             </tr><!-- tr Finish -->
                                   
         
                            
          
                 
                    <tr>
                     
             <td style="width:18%;"> <br><img  src="admin/products/m1.JPG" style="width:90%;" ><div class='desc'><a href="details.php?pro_id=<?php echo $pro_id; ?>">Men Blue Sweatshirt</a></div></td>
             
                                       
              <td > 2 </td>
               <td > $50 </td>
          <td>Large </td>
             
            <td> $100 </td>
                       
                               
       </tr><!-- tr Finish -->
                             
           <br>
            </table>
              <div class="clearfix"></div>
        
        </div>
            
          
      
        
       
    </body>
  
</html>
   <?php 
    include("header-footer.php");
        ?>