<?php
include_once('model/register.php');
class RegisterController extends Register
{
	public function createRegister($input1,$input2,$input3,$input4,$input5,$input7){
		//echo $input7;
		return $this->add($input1,$input2,$input3,$input4,$input5,$input7);
	}
	public function showCus()
	{
		return $this->show();
	}
	public function viewCus($cusid){
		return $this->view($cusid);
	}
	public function updateCus($cusid,$input1,$input2,$input3,$input4,$input5,$input7)
	{
		return $this->update($cusid,$input1,$input2,$input3,$input4,$input5,$input7);

	}
	public function deleteCus($cusid){
		$this->delete($cusid);
	}
	public function customerName($uname){
		return $this->name($uname);
	}
}

?>