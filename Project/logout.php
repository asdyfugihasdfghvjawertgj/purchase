<?php 
	session_start();
	
	session_destroy(); //delete

	header('location: home.php');


 ?>