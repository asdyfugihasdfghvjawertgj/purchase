<?php
include_once("controller/itemcontroller.php");
$cid=$_GET['cid'];

$itemController=new ItemController();
$results=$itemController->Items($cid);
$output=null;
$output="<option>Please select Item Name</option>";

foreach($results as $result)
{
   
    $output.="<option value=";
    $output.= $result['id'];
    $output.=">";
    $output.=$result['name'];
    $output.="</option>";
}

echo $output;


?>