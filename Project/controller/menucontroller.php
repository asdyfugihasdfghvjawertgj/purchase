
<?php
include_once('model/menu.php');
class MenuController extends Menu
{
    
	public function create($itemid,$qty,$uid)
	{
		return $this->addmenu($itemid,$qty,$uid);
	}
	public function showMenu($cid){
		//echo "string";
		return $this->show($cid);

	}
	public function deleteMenu($menuid){
		$this->delete($menuid);
	}
}
?>