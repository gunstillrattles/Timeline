<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
</head>
	<body>
  <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .result {
            width: 100%;
            padding: 10px;
        }

        .item {
            width: 100%;
            height: 150px;
            padding: 20px;
            background-color: lightgray;
            margin-bottom: 10px;
        }

        .item>.title {
            font-size: 24px;
            font-weight: bold;
        }

        .item>.text {
            font-size: 19px;
            font-weight: 200;
        }

        .item>.author {
            font-size: 16px;
            font-weight: 200;
        }

        .item>.author>span {
            font-weight: bold;
        }

        body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.teal {padding:10px;background:teal;color:white;}

input[type=submit]{cursor:pointer}
form button{float:left;margin:5px}
    </style>
    <?php
    	session_start();
    require_once 'nav.php';
    require_once "newsdatabase.php";
    if(isset($_SESSION['id'])){
    ?>
    <div class="container">
    <h1>Write a post</h1>
    <p>Please fill in this form to write a post.</p>
    <hr>
        <form action="addpost.php" method="post">
    <input type="hidden" name="postId" value="<?php if(isset($_SESSION['postId']))
		echo $_SESSION['postId']++; ?>"> </input>
    <input type="hidden" name="userId" value = "<?php if(isset($_SESSION['id']))
		echo $_SESSION['id']; ?>"> </input>
    <label> Title : </label>
    <input type="text" name="title"> </input></br>
    <label> Text : </label>
			<input type="text" name="text"> </input></br>
			<button> Add post </button>
		</form></br></br>

    <?php
    }
    $query = $connection->prepare("select posts.*, authorization.* from posts join authorization on authorization.id = posts.userId");
			$query->execute();
			$result = $query->fetchAll();
      
			foreach($result as $item){
        if(isset($_SESSION['id']) && ($_SESSION['id'] == $item['userId']) || $_SESSION['roleId'] == 1){
          ?> <div class="item"> <div class="author">Author: <span> <?php echo $item['name']." ".$item['surname'] ?> </span> 
          <form action="editpost.php" method="post"> <input type="hidden" name="postId" value="<?php echo $item['postId']; ?>"> </input> <input type="hidden" name="userId" value="<?php echo $item['userId']; ?>"> </input> <button class="teal">Edit</button> </form>
          <form action="deletepost.php" method="post">
        <input type="hidden" name="postId" value="<?php echo $item['postId']; ?>"> </input>
        <input type="hidden" name="userId" value ="<?php echo $_SESSION['id']; ?>"> </input>
        <button class="teal">Delete</button>
        </form>
        </div></br></br></br> <div class="title"> <?php echo $item['title']; ?> </div> <div class="text"> <?php echo $item['text']; ?> </div>
        </div>
          <?php 
        }
        else{
          ?> <div class="item"> <div class="author">Author: <span> <?php echo $item['name']." ".$item['surname'] ?> </span> </div> <div class="title"> <?php echo $item['title']; ?> </div> <div class="text"> <?php echo $item['text']; ?> </div> </div> <?php
        }
      }
      ?>
	</body>
</html>