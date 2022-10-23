<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
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
</head>
	<body>
    <?php
    	session_start();
    require_once 'nav.php';
    ?>
		<form action="checklogin.php" method="post">
        <div class="container">
    <h1>Login</h1>
    <p>Please fill in this form to sign in.</p>
    <hr>
    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" required value="<?php if(isset($_COOKIE['login']))echo $_COOKIE['login'] ?>">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required value="<?php if(isset($_COOKIE['password']))echo $_COOKIE['password'] ?>">
    <hr>
    <button type="submit" class="registerbtn">Login</button>
  </div>
  
  <div class="container signin">
    <p>Don't have an account? <a href="./register.php">Register</a>.</p>
  </div>
		</form>
	</body>
</html>