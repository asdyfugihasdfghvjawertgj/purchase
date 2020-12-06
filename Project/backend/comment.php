<?php 
if(isset($_POST['comment'])){
    $search=$_POST['sear'];
    include_once('controller/itemcontroller.php');
    $itemcontroller=new ItemController();
    $results=$itemcontroller->searchitems($search);
}
?>