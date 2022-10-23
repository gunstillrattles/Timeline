<?php
	
	try{
		$connection = new PDO("mysql:host=localhost;dbname=timeline","root","");
		getAllPosts();

	}catch(PDOException $e){
		echo $e->getMessage();
	}

	function getAllPosts(){
		global $connection;
		try{
			$query = $connection->prepare("select * from posts");
			$query->execute();
			$result = $query->fetchAll();

		
		}catch(Exception $e){
			echo $e->getMessage();
		}

		return $result;
	}

    function addPost($postId, $userId, $title, $text){
		global $connection;

		$query = $connection->prepare("Insert into posts(postId,userId,title,text)
				values(:_postId, :_userId, :_title, :_text);
			");
		$query->execute(
			array("_postId" => $postId,
				  "_userId" => $userId,
				  "_title" => $title,
				 "_text" => $text,
				 )
		);
		header("Location:news.php");
	}
	function updatePost($postId, $userId, $title, $text){
		global $connection;
		try{
			$query = $connection->prepare("update posts set postId = :_postId, userId = :_userId, title = :_title, text = :_text where postId = :_postId");
			$query->execute(array("_postId" => $postId,
			"_userId" => $userId,
			"_title" => $title,
		   "_text" => $text));
		}catch(Exception $e){
			echo $e->getMessage();
		}
		header("Location:news.php");
	}

	function deletePost($postId){
		global $connection;
		try{
			$query = $connection->prepare("delete from posts where postId = :_postId");
			$query->execute(array("_postId" => $postId));
		}catch(Exception $e){
			echo $e->getMessage();
		}
		header("Location:news.php");
	}