<?php
include_once('model/order.php');
class OrderController extends Order
{
    
	public function createOrder($iname,$iqty,$cid,$voucher_id,$date){
		echo "string";
		return $this->add($iname,$iqty,$cid,$voucher_id,$date);
	}
}
?>