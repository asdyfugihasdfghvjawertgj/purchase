<?php
include_once('controller/catcontroller.php');
$depid=$_GET['id'];
$catController=new CatController();
$results=$catController->deleteDep($depid);
header('location:catindex.php');
?>