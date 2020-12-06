<?php
include_once('controller/itemcontroller.php');
$itemid=$_GET["id"];
$itemcontroller=new ItemController();
$itemcontroller->deleteitem($itemid);
header('location:itemindex.php');
?>