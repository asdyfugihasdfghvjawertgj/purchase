<?php
include_once('include/dbconn.php');
class Category
{
    private $id;
    public function getcate(){
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
    public function searchIts($search){
        $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // sql query
        $sql="select product.*,item.name as iname,item.id as iid,item.price as iprice,item.photo as iphoto,item.code as icode,item.color as icolor,item.size as isize from product inner join item on product.name=:search AND product.id=item.productid";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        $stmt->bindParam(':search',$search);
        $stmt->execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
     }
}