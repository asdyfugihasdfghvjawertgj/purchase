<?php
include_once('controller/registercontroller.php');
$cusid=$_GET['id'];
$cusController=new RegisterController();
$results=$cusController->deleteCus($cusid);
header('location:customerindex.php');
?>