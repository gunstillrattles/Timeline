<?php
	
	try{
		$connection = new PDO("mysql:host=localhost;dbname=timeline","root","");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	function adduser($id, $roleId, $login, $password, $name, $surname){
		global $connection;

		$query = $connection->prepare("Insert into authorization(id,roleId,login,password,name,surname)
				values(:_id, :_roleId, :_login, :_password, :_name, :_surname);
			");
		$query->execute(
			array("_id" => $id,
			"_roleId" => $roleId,
				  "_login" => $login,
				 "_password" => $password,
				 "_name" => $name,
				 "_surname" => $surname,
				 )
		);
		header("Location:login.php");
	}