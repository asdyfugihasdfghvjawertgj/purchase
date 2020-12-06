<?php 
session_start();
if(isset($_POST['submit'])){
    $search=$_POST['sear'];
    include_once('controller/catcontroller.php');
    $catcontroller=new CatController();
    $results=$catcontroller->searchitems($search);
//echo $results[0];
}
if (isset($_GET['cart'])) {
    $qty=$_GET['qty'];
    //echo $qty;
    $itemid=$_GET['cart'];
 if (isset($_SESSION['cid'])) {
    $uid=$_SESSION['cid'];
    include_once('controller/menucontroller.php');
    $menucontroller=new MenuController();
    $menucontroller->create($itemid,$qty,$uid);
    header('location:home.php');
}
else{

    header('location:login.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    </head>
  
    <body style="font-family: 'Times New Roman', Times, serif;">

    <!--start first nav bar-->
    <nav class="navbar navbar-expand-sm" style="background-color:#FAB90C ;">
        <a class="nav-link" href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
        <a class="nav-link" href="www.pinterest.com"><i class="fab fa-pinterest"></i></a>
        <a class="nav-link" href="www.twitter.com"><i class="fab fa-twitter"></i></a>
        <a class="nav-link" href="www.email.com"><i class="fas fa-envelope-square"></i></a>
        <a class="nav-link" style="position: relative; left:970px;" href="login.php">Login</a>
        <a class="nav-link" style="position: relative; left:970px;" href="register.php">Register</a>
    </nav>
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
          <form action="items.php" method="GET">
            <input name="search" type="text" placeholder="Type here">
            <input name="submit" type="submit" value="Search">
        </form>
          
          <a class="nav-link my-1" href="#" style="font-size: 30px; color: black;"><i class="fas fa-shopping-cart"></i></a>
        </div>
      </nav>
    
    <!--start banner-->
    <div class="container-fluide">
        <img src="images/imgs/banner1.jpg" height="500px" width="100%">
        
    </div>
     <!--End banner-->
        <h1 style="text-align: center; padding: 30px;">ALL CATEGORIES</h1>
        <div class="container">
            <div class="row mx-5">
        <?php foreach($results as $result){
?>
<div class="col-md-3 mb-2">
                <div class="card" style="border-color: #F0B73B;" id="card1">
                    <img src="backend/<?php echo $result['iphoto']; ?>" class="card-img-top" width="50px" height="200px" id="img1" >
                    <div class="card-body " >
                        Name:<?php echo $result['iname']; ?><br>
                        Code:<?php echo $result['icode']; ?><br>
                        Size:<?php echo $result['isize']; ?><br>
                        Color:<?php echo $result['icolor']; ?><br>
                        Price:<span style="color: red">**<?php echo $result['iprice']; ?>**</span>
                    </div>
                    <div class="card-footer"  style=" background-color: #90257D;">
                        <form method="GET">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                        <input type="text" name="qty"  class="form-control" placeholder="enter quantity" style="width: 115px;height: 30px;">
                        </div>
                        </div>
                        <div class="col-md-2 ">
                         <div class="form-group">    
                    <button name="cart" id="cart" class="mr-5"value="<?php echo $result['iid']; ?>">*Cart*</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
            <?php
        } 
        ?>
    </div>
</div>
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