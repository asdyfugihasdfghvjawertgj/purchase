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
    public function searchitems($search)
    {
		return $this->searchIts($search);
	}
	

}
?>