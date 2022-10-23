<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
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
    require_once 'nav.php';
	?>
		<form action="adduser.php" method="post">
		<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
			<input type="hidden" name="id"></input></p>
      <input type="hidden" name="roleId" value="2"></input>
			<label for="login"><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" required>

	<label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

	<label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required>
	<hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="./login.php">Sign in</a>.</p>
  </div>
		</form>
	</body>
</html>