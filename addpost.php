<?php
	require_once "newsdatabase.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['postId']) && isset($_POST['userId']) && isset($_POST['title']) && isset($_POST['text'])){
			addPost($_POST['postId']++,$_POST['userId'],$_POST['title'],$_POST['text']);
		}
	}
?>