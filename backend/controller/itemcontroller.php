<?php
include_once('model/item.php');
class ItemController extends Item
{
	
	public function createItem($name,$fullpath,$code,$size,$color,$price,$pro_id)
	{
		return $this->add($name,$fullpath,$code,$size,$color,$price,$pro_id);
			//echo "success";
		
    }
	public function showitem()
	{
		return $this->getitem();
	}
	public function showitem2()
	{
		return $this->getitem2();
	}
	public function showitem3()
	{
		return $this->getitem3();
	}
	public function showitem4()
	{
		return $this->getitem4();
	}
    public function showitem5()
	{
		return $this->getitem5();
	}
	public function showitem6()
	{
		return $this->getitem6();
	}
	public function showitem7()
	{
		return $this->getitem7();
	}
	public function showitem8()
	{
		return $this->getitem8();
	}
	public function showitem9()
	{
		return $this->getitem9();
	}
	public function showitem10()
	{
		return $this->getitem10();
	}
	public function showitem11()
	{
		return $this->getitem11();
	}
	public function showitem12()
	{
		return $this->getitem12();
	}
	public function showitem13()
	{
		return $this->getitem13();
	}
	public function showitem14()
	{
		return $this->getitem14();
	}
    public function viewitem($itemid)
	{ 
		return $this->getviewitem($itemid);
	}
    public function edititem($id,$name,$fullpath,$code,$size,$color,$price,$pro_id)
    {
        return $this->updateitem($id,$name,$fullpath,$code,$size,$color,$price,$pro_id);

    }
    public function deleteitem($itemid){
    	//echo "success";
    	return $this->getdeleteitem($itemid);
    }
   public function Items($cid){
    	return $this->getItms($cid);
	}
	public function itemName($iname){
		return $this->name($iname);
	}
}
?>