<?php
$con = mysqli_connect("localhost", "root", "", "e_commerce")or die($mysqli_error($con));
$select_query = "SELECT  id, email_id, first_name FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link href="estyle.css" type="text/css" rel="stylesheet"/>-->
        <style>
         
               .modal_container{
  background-color: rgba(0,0,0,0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  border-width: 20px;
 height: 100%;
  width: 100%;
}
.modal{
    background-color: #fff;
    border-width: 20px;
    border-radius: 20px;
    border-color: #c7254e;
    box-shadow: 0 2px 4px rgba(0,0,0,0.7);
    padding: 30px 50px;
    width: 300px;
    max-width: 100%; /*keep the modal content inside the modal*/
    text-align: center;
        </style>
     
}
    </head>
    <body>
        
        
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        
                    </div>  
                </div>
            </div>
        </div>
        
         <div class="modal_container" >
                             <div class="modal">
                                 <form id="Register_modal" method="post" action="user_registration_script.php">
                                
                                     <div class="form-group">
                                        <label for="email_id">Email</label>
                                        <input type="text" class="form-control" name="email_id" placeholder="Email" >
                                    </div>
                                <br>
                                     
                                     <div class="form-group">
                                        <label for="first_name">First name:</label>
                                        <input type="text" class="form-control input-lg" name="first_name">   
                                    </div>
                                <br>
                                     
                                    <div class="form-group">
                                        <label for="last_name">Last name:</label>
                                           <input type="text" class="form-control input-lg" name="last_name">   
                                    </div>
                                <br>
                                
                                    <div class="form-group">
                                        <!--<label for="phone">Phone number:</label>-->
                                        Phone number:<input type="tel" class="form-control" name="phone" >  
                                    </div>
                                <br>
                                
                                
                                 <button <input type="submit" class="btn btn-danger btn-block">Continue</button>
                                </form> 
                             </div> 
                         </div>
        
    </body>
</html>




<?php

function number_of_products_purchased($con, $user_id) {
  $users_products_query = "SELECT  id FROM users_products WHERE user_id = '$user_id'";
  $users_products_result = mysqli_query($con, $users_products_query);
  $number_of_products = mysqli_num_rows($users_products_result);
  return $number_of_products;
}
?>