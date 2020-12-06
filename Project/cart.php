<?php
session_start();
$cid=$_SESSION['cid'];
include_once("controller/menucontroller.php");
$menuController=new MenuController();
$results=$menuController->showMenu($cid);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>oreder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		 <script src="js/jquery-3.5.1.min.js"></script>
		 <script src="js/bootstrap.min.js"></script>
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container">
 <table style="border: 1px solid black;" class="table">
<thead>
<tr>
<td >No</td>
<td>Name</td>
<td>Price</td>
<td>Photo</td>
<td>Quantity</td>
<td>Subtotal</td>
<td>Action</td>

</tr>
</thead>
<tbody>
	<div class="form-group">
	<form id="order">
<?php
$total=0;
$i=1;
foreach($results as $result)
{
$iname[]=$result['iname'];
$iqty[]=$result['itemqty'];
//echo $iname[0];
$price = $result['iprice'];
$qty = $result['itemqty'];

$sum_total = $price * $qty;
$total+=$sum_total;
//echo $sum_total;
?>
<tr>
<td><?php echo $i++?> </td>
<td><?php echo $result['iname'];?> </td>
<td><?php echo $result['iprice'];?> </td>
<td><img src="backend/<?php echo $result['iphoto'];?>"> </td>
<td><?php echo $result['itemqty'];?> </td>
<td><?php echo $sum_total;?> </td>
<td><a class="btn btn-danger" onclick="return deleteuser(<?php echo $result['iid'];?>);">Cancel</a></td>
</tr>

<?php

}
?>
</form>
</div>
</tbody>
<tfoot>
	<tr>
		<td colspan="5">Total Amount:</td>
		<td colspan="1"><?php echo $total; ?></td>
		<td> <input type="button" name="submit" id="submit" class="btn btn-info" value="Order" /></td>
	</tr>
</tfoot>
</table>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
	function deleteuser(iid){
		$result=confirm("Are you sure to delete?");
		if ($result) {
			window.location.href="menudelete.php?id="+iid;
			return true;
		}
	}
	$('#submit').click(function(){		
		$.ajax({
			url:"order.php",
			method:"POST",
			data:$('#order').serialize(),
			success:function(data)
			{
				alert("Successfully Order");
				//$('#add_schedule')[0].reset();
                //$('#add_schedule')[1].reset();
                //$('#add_schedule')[2].reset();
				
				
			}
		});
    });
</script>
</body>

</html>