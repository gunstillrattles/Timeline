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
    </style>
<?php
session_start();
?>
<form action="updatepost.php" method="post">
        <div class="container">
    <h1>Update post</h1>
    <p>Please fill in this form to update the post.</p>
    <hr>
        <input type="hidden" name="postId" value="<?php echo $_POST['postId']; ?>"> </input>
        <input type="hidden" name="userId" value ="<?php echo $_POST['userId']; ?>"> </input>
        <label for="title"><b>Title</b></label>
        <input type="text" name="title"> </input></br>
        <label for="text"><b>Text</b></label>
          <input type="text" name="text"> </input></br>
          <hr>
          <button type="submit" class="registerbtn">Edit</button>
          </div>
        </form>