<?php
include_once('include/dbconn.php');
class Register{
    private $pdo;
    public function add($input1,$input2,$input3,$input4,$input5,$input7){
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="insert into register (firstname,lastname,gender,address,email,password) values (:a,:b,:c,:d,:e,:f)";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        //bind parameter
        $stmt->bindParam(':a',$input1);
        $stmt->bindParam(':b',$input2);
        $stmt->bindParam(':c',$input3);
        $stmt->bindParam(':d',$input4);
        $stmt->bindParam(':e',$input5);
        $stmt->bindParam(':f',$input7);
        if ($stmt->execute())
         {
            return true;
        }
        else {
            return false;
        }
    }
    public function show(){
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="select * from register";
            //prepare sql statement
            $stmt=$this->pdo->prepare($sql);
            $stmt -> execute();
            $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
    }
    public function view($cusid){
         $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="select * from register where id=:a";
            //prepare sql statement
            $stmt=$this->pdo->prepare($sql);
            $stmt->bindParam(':a',$cusid);
            $stmt -> execute();
            $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
    }
    public function update($cusid,$input1,$input2,$input3,$input4,$input5,$input7){
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="update register set firstname=:a,lastname=:b,gender=:c,address=:d,email=:e,password=:f where id=:id";
            //prepare sql statement
            $stmt=$this->pdo->prepare($sql);
            $stmt->bindParam(':a',$input1);
        $stmt->bindParam(':b',$input2);
        $stmt->bindParam(':c',$input3);
        $stmt->bindParam(':d',$input4);
        $stmt->bindParam(':e',$input5);
        $stmt->bindParam(':f',$input7);
         $stmt->bindParam(':id',$cusid);
            if($stmt->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
    }
    
    public function delete($cusid){
        $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="delete from register where id=:id";
    $stmt=$this->pdo->prepare($sql);
    $stmt->bindParam(':id',$cusid);
    $stmt->execute();
    }
    public function name($uname){
      $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="select * from register where id=:a";
            //prepare sql statement
            $stmt=$this->pdo->prepare($sql);
            $stmt->bindParam(':a',$uname);
            $stmt -> execute();
            $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;  
    }
}
?>