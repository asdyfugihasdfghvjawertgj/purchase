<?php
/**
 * 
 */
class Database
{
	private static $dbHost='localhost';
	private static $dbName='purchasersystem';
	private static $dbUserName='root';
	private static $dbPassword='';
	private static $cont=null;
	public static function connect(){
	if (null== self::$cont) {
		try{
			self::$cont=new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName,self::$dbUserName,self::$dbPassword);
		}
		catch (PDOException $e){
			die($e->getMessage());
		}
	}
	return self::$cont;
}
public static function disconnect(){
	self::$cont=null;
}
}
?>