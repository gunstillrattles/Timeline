<?php
	require_once "newsdatabase.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['postId']) && ($_POST['userId']) && ($_POST['title']) && ($_POST['text'])){
			updatePost($_POST['postId'],$_POST['userId'],$_POST['title'],$_POST['text']);
		}
	}
?>