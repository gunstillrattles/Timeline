<?php
	require_once "newsdatabase.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['postId'])){
			deletePost($_POST['postId']);
		}
	}
?>