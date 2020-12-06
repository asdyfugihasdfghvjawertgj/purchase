<?php
include_once('include/dbconn.php');
class Order
{
	
    private $iname;
    private $iqty;
	private $pdo;

	public function add($iname,$iqty,$cid,$voucher_id,$date)
{
    $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $number = count($iname);
    if($number >= 1)
    {
    for($i=0; $i<$number; $i++)
    {
        if(trim($iname[$i] != '') && trim($iqty[$i] != ''))
        {
            //$sql = "INSERT INTO schedule(dayname) VALUES('".mysqli_real_escape_string($connect, $_POST["day"][$i])."')";
            //mysqli_query($connect, $sql);
            $sql="insert into orders (itemname,itemqty,userid,voucherid,orderdate) values(:a,:b,:c,:d,:e)";
            $stmt=$this->pdo->prepare($sql);
            $stmt->bindParam(':a',$iname[$i]);
            $stmt->bindParam(':b',$iqty[$i]);
            $stmt->bindParam(':c',$cid);
            $stmt->bindParam(':d',$voucher_id);
            $stmt->bindParam(':e',$date);
            $stmt->execute();
        }
    }
    
    }
        
        
    }
}
?>