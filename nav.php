    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.btn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="./news.php">Home</a>
  <a href="./news.php">News</a>
  <a href="./login.php">Login</a>
  <a href="./register.php">Reqister</a>
  <form action="destroysession.php" method="post">
      <button class="btn"> Logout</button>
    </form>
</div>

</body>
</html>