<?php 
try{
	$con = new PDO("mysql:host=localhost;port=3306;dbname=final",'root','');	
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo $e->getMessage();
}

 ?>

