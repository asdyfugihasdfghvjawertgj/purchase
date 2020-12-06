<?php
include_once('controller/menucontroller.php');
$menuid=$_GET["id"];
$menucontroller=new MenuController();
$menucontroller->deleteMenu($menuid);
header('location:order.php');
?>