<?php
session_start();
//$cid=$_SESSION['cid'];
//echo $cid;
$cid=$_GET['id'];
include_once('controller/itemcontroller.php');
//$cid=$_GET['id'];
$itemcontroller=new ItemController();
$results=$itemcontroller->Items($cid);
if (isset($_POST['cart'])) {
    $qty=$_POST['qty'];
    //echo $qty;
    $itemid=$_POST['cart'];
 if (isset($_SESSION['cid'])) {
    $uid=$_SESSION['cid'];
    include_once('controller/menucontroller.php');
    $menucontroller=new MenuController();
    $menucontroller->create($itemid,$qty,$uid);
}
else{

    header('location:login.php');
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid login" >
<div class="row">
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm">
     
        
            <a class="nav-link" href="www.facebook.com"><i class="fab fa-facebook-f" style="color:white;"></i></a>
            <a class="nav-link" href="www.pinterest.com"><i class="fab fa-pinterest" style="color:white;"></i></a>
            <a class="nav-link" href="www.twitter.com"><i class="fab fa-twitter" style="color:white;"></i></a>
            <a class="nav-link" href="www.email.com"><i class="fas fa-envelope-square" style="color:white;"></i></a>
        
        
      
        </nav> 
        </div>
    <div class="col-md-3">
        <nav class="navbar navbar-expand-sm">
        </nav>
    </div>
    <div class="col-md-4">
        <nav class="navbar navbar-expand-sm"></nav>
    </div>
    <div class="col-md-2 ">
        <nav class="navbar navbar-expand-sm">
        <a href="register.php"><div class=" ml-auto mt-2  mr-4 " style="height:33px;"><span style="color:white;">Register</span></div></a>
            <a href="login.php"><div class="mt-2" style="height:33px;"><span style="color:white;">Login</span></div></a>
        </nav>
    </div>

</div>

    </div>
    <nav class="navbar navbar-expand-lg menu">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color:#000000; font-size:22px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#000000; font-size:22px;">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color:#000000; font-size:22px;">Contact</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color:#000000; font-size:22px;">About Us</a>
            </li>
          </ul>

          <div>
             <a href="home.php" class="img"><img src="images/imgs/rowbg.png" width="80px" height="70px"></a>
        </div>
        <form action="items.php" method="POST">
            <input class="search" name="sear" type="text" placeholder="Type here" style="height:35px;">
            <input name="submit" type="submit" value="Search">
        </form>
        
        </div>
      </nav>
    
<h1 style="text-align: center; ">ALL ITEMS</h1>
        <div class="container">
            <div class="row mx-5">
        <?php foreach($results as $result){
?>
<div class="col-md-3 mb-2">
                <div class="card" style="border-color: #F0B73B;" id="card1">
                    <img src="backend/<?php echo $result['photo']; ?>" class="card-img-top" width="50px" height="200px" id="img1" >
                    <div class="card-body " >
                        Name:<?php echo $result['name']; ?><br>
                        Code:<?php echo $result['code']; ?><br>
                        Size:<?php echo $result['size']; ?><br>
                        Color:<?php echo $result['color']; ?><br>
                        Price:<span style="color: red">**<?php echo $result['price']; ?>**</span>
                    </div>
                    <div class="card-footer"  style=" background-color: #90257D;">
                        <form method="POST">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                        <input type="text" name="qty"  class="form-control" placeholder="enter quantity" style="width: 115px;height: 30px;">
                        </div>
                        </div>
                        <div class="col-md-2 ">
                         <div class="form-group">    
                    <button name="cart" id="cart" class="mr-5"value="<?php echo $result['id']; ?>">*Cart*</button>
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

<script src="js/jquery-3.5.1.min.js"></script>
</body>
</html>
<?php
require("footer.php");
?>
