<?php
include_once('model/category.php');
class CatController extends Category
{
	
	public function createCategory($name,$fullpath)
	{
		return $this->add($name,$fullpath);
			//echo "success";
		
	}
	public function showCate()
	{
		return $this->getcate();
	}
	public function viewCat($catid)//$results
	{
		return $this->getviewCat($catid);
	}
	public function deleteDep($depid)
	{
		return $this->getdeleteDep($depid);
	}

	public function updateCat($catid,$name,$fullpath)
	{
		//echo "ss";
		return $this->getupdateCat($catid,$name,$fullpath);
	}

}
?>