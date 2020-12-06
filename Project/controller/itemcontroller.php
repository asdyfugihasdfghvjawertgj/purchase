<?php
include_once('model/item.php');
class ItemController extends Item
{
    
	public function showitem()
	{
		return $this->getitem();
	}
	public function Items($cid){
    	return $this->getItms($cid);
	}
	
}
?>