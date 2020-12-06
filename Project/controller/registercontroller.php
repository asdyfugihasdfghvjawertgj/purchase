<?php
include_once('model/register.php');
class RegisterController extends Register
{
	public function createRegister($input1,$input2,$input3,$input4,$input5,$input7){
		//echo $input7;
		return $this->add($input1,$input2,$input3,$input4,$input5,$input7);
	}
	public function get()
	{
		return $this->getReg();
	}
	public function getCustomer($email)
	{
		return $this->getCus($email);

	}
}

?>