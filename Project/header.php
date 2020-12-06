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
    <div class="container-fluid login" >
<div class="row">
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm" style="background-color:#FAB90C ;">
     
        
            <a class="nav-link" href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a class="nav-link" href="www.pinterest.com"><i class="fab fa-pinterest"></i></a>
            <a class="nav-link" href="www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a class="nav-link" href="www.email.com"><i class="fas fa-envelope-square"></i></a>
        
        
      
        </nav> 
        </div>
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm" style="background-color:#FAB90C ;">
        </nav>
    </div>
    <div class="col-md-4">
        <nav class="navbar navbar-expand-sm" style="background-color:#FAB90C ;"></nav>
    </div>
    <div class="col-md-2 ">
        <nav class="navbar navbar-expand-sm" style="background-color:#FAB90C;">
        <a href="register.php"><div class="btn btn-outline-dark ml-auto mt-2  mr-4 " style="height:33px;"><span>Register</span></div></a>
            <a href="login.php"><div class="btn btn-outline-dark mt-2" style="height:33px;">Login</div></a>
        </nav>
    </div>

</div>

    </div>
    <nav class="navbar navbar-expand-lg" style="background-color: #F9F306;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
          <div>
             <a href="home.html" class="img"><img src="images/imgs/rowbg.png" width="80px" height="80px"></a>
        </div>
        <form action="items.php" method="POST">
            <input name="sear" type="text" placeholder="Type here">
            <input name="submit" type="submit" value="Search">
        </form>
          
          