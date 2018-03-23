<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin") {
  echo "Login sucess";
} else {
  echo "Invalid Username or password";
}
?>

<a href="get.php">Back</a>
