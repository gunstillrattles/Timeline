<?php
	require_once "authorization.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['id']) && isset($_POST['roleId']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['surname'])){
			setcookie('login', $_POST['login'], time() + 10000);
            setcookie('password', $_POST['password'], time() + 10000);
			adduser($_POST['id'],$_POST['roleId'],$_POST['login'],$_POST['password'],$_POST['name'],$_POST['surname']);
		}
	}
?>