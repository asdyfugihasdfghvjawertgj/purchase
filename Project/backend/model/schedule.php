<?php
include_once('includes/dbcon.php');
class Schedule{

    
    private $day;
    private $stime;
    private $etime;
    private $pdo;
    public function __construct(){

    }
    
    public function add($day,$stime,$etime){
        
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $number = count($day);
    if($number >= 1)
    {
	for($i=0; $i<$number; $i++)
	{
		if(trim($day[$i] != '') && trim($stime[$i] != '') && trim($etime[$i] != ''))
		{
			//$sql = "INSERT INTO schedule(dayname) VALUES('".mysqli_real_escape_string($connect, $_POST["day"][$i])."')";
            //mysqli_query($connect, $sql);
            $sql="insert into schedule(dayname,stime,etime) values(:dayname,:stime,:etime)";
            $stmt=$this->pdo->prepare($sql);
            $stmt->bindParam(':dayname',$day[$i]);
            $stmt->bindParam(':stime',$stime[$i]);
            $stmt->bindParam(':etime',$etime[$i]);
            $stmt->execute();
		}
	}
	
    }
        
        
    }
}
?>