<?php
$orderid=$_GET["id"];
include_once("controller/ordercontroller.php");
$ordercontrol=new OrderController();
$ordercontrol->deleteOrder($orderid);
header('location:orderindex.php');
?>