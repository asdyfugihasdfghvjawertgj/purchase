<?php
include_once('include/dbconn.php');
class Category
{
	private $id;
	private $name;
	private $pdo;
	function set_id($id){
		$this->id=$id;
	}
	function get_id(){
		return $this->id;
	}
	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
	}

	public function add($name,$fullpath){
		$this->name=$name;
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into product (name,photo) values (:name,:photo)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':photo',$fullpath);

		if ($stmt->execute())
		 {
			return true;
		}
		else {
			return false;
		}

	}
	public function getcate()
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="select * from product";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;

}
public function getviewCat($catid)
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="select * from product where id=:id";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':id',$catid);
    $stmt->execute();
    $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    return $results;

}
public function getdeleteDep($depid)
{
$this->pdo= Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="delete  from product where id=:id";
$stmt=$this->pdo->prepare($sql);
$stmt->bindParam(':id',$depid);
$stmt->execute();


}

public function getupdateCat($catid,$name,$fullpath)
{
    $this->pdo = Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // sql query
    $sql="update product set name=:name,photo=:photo where id=:id";
    //prepare sql statement
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':id',$catid);
	$stmt->bindParam(':name',$name);
	$stmt->bindParam(':photo',$fullpath);
    if ($stmt->execute())
    {
        return true;
    }
    else
    {
        return false;
    }

}
}
?>