<?php
include_once('include/dbconn.php');
class Item
{
	

	private $pdo;

	public function getitem()
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="select * from item";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    //$stmt->bindParam(':search',$search);
    $stmt->execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;

    }
    
    public function getItms($cid){
        $this->pdo = Database::connect();
             $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
             // sql query
             $sql="select * from item where productid=:cid";
             //prepare sql statement
             $stmt=$this->pdo->prepare($sql);
             $stmt->bindParam(':cid',$cid);
             $stmt->execute();
             $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                 return $results; 
     }

}
?>