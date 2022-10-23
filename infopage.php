<?php

	session_start();
		if (isset($_SESSION["login"]) && isset($_SESSION["password"]) && isset($_SESSION["name"]) && isset($_SESSION["surname"]))
{
    $login = $_SESSION["login"];
    $password = $_SESSION["password"];
	$name = $_SESSION["name"];
    $surname = $_SESSION["surname"];

    echo "Login: $login <br> Password: $password <br> Name: $name <br> Surname: $surname";
}
?>	