<?php 
include_once('controller/catcontroller.php');
$catcontroller=new CatController();
$results=$catcontroller->showCate();
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="stylesheet" href="css/home.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script>

            function click(){

                window.location.href=("register.php");
            }
            </script>
        <style>

            .login{
           
            background-color:#FAB90C ;
            height: 40px;
        }
        .navbar-expand-sm{
    height: 30px;
}
        </style>
        
    </head>
  
    <body style="font-family: 'Times New Roman', Times, serif;">

    <!--start first nav bar-->
    

      
      <div class="container my-5">
        
          
          <p style="font-size: 30px;text-align: center;"><strong>LOVELY CLIENTS COMMENTS</strong></p>
          
         
          <P style="text-align: center;">It is really awesome theme and specially mode for online shopping,<br>
             so this theme unique to create your drean website and help to promote.</P>
        
      </div>
    
       <!--start footer-->
       <div class="container-fluide" style="background-color:#EDFF06;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-3">
                    <h2>Collection</h2>
                    <ul style="font-size: small; ">
                        <li>MEN COLLECTION</li>
                        <li>WOMEN COLLECTION</li>
                      </ul>
                </div>
                <div class="col-md-4 my-3">
                    <h2>Content Info</h2>
                    <ul style="font-size: small; ">
                        <li>Phone: +959-7865677578</li>
                        <li>Emial: rowshopping@gmial.com</li>
                </div>
                <div class="col-md-4 my-3">
                    <h2>Customer Service</h2>
                    <ul style="font-size: small; ">
                        <li>Help & Contact</li>
                        <li>Shipping& Taxes</li>
                        <li>Return Policy</li>
                        <li>Legal Notice</li>
                      </ul>
                </div>
            </div>
            <p>If you have any advice or comment</p>
            <input type="text" placeholder="comment" class="input1">
            <button type="button" class="button2">Submit</button>
        </div>
    </div>



    <script src="js/home.js"></script>
    </body>
    </html>
    
              




   