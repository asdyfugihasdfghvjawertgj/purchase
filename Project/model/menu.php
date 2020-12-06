<?php
include_once('include/dbconn.php');
class Menu
{
	

	private $pdo;

	public function addmenu($itemid,$qty,$uid)
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    
    $sql="insert into menu (itemid,itemqty,userid) values (:a,:b,:c)";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':a',$itemid);
    $stmt->bindParam(':b',$qty);
    $stmt->bindParam(':c',$uid);
    $stmt->execute();
}
 public function show($cid){
        $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="select menu.*,item.name as iname,item.id as iid,item.price as iprice,item.photo as iphoto from menu inner join item on menu.userid=:cid AND menu.itemid=item.id";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':cid',$cid);
    $stmt->execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
    }
    public function delete($menuid){
      $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    //$sql="DELETE  FROM  `menu` INNER JOIN `item` ON `menu`.`itemid`=`item`.`id` WHERE `userid`=:menuid";
    $sql="delete from menu where itemid=:menuid";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':menuid',$menuid);
    $stmt->execute();  
    }

}
?>
