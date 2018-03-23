<?php

if (isset($_GET['username'], $_GET['password'])) {

  $username = $_GET['username'];
  $password = $_GET['password'];

  if ($username == "admin" && $password == "admin") {
    echo "Welcome, $username";
  } else {
    echo "Invalid Username:$username or password ";
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="get.php" method="post">
      Username: <input type="text" name="username" value="">
      Password: <input type="password" name="password" value="">
      <input type="submit" value="Login">
    </form>
  </body>
</html>
