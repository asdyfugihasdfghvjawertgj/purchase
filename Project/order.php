<?php
session_start();
$cid=$_SESSION['cid'];
//echo $_POST['iqty'];
date_default_timezone_set('Asia/Yangon');
	$date=date('Y-m-d');
	$voucher_id=date('YmdHis');
include_once("controller/ordercontroller.php");
$ordercontrol=new OrderController();
$ordercontrol->createOrder($_POST['iname'],$_POST['iqty'],$cid,$voucher_id,$date);


?>