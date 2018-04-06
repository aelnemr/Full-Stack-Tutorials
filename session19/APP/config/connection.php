<?php

$dbname = "session19";
$username = "root";
$password = "";
$host = "localhost";

$dsn = "mysql:host=$host;dbname=$dbname";

$dbh = new PDO($dsn,  $username, $password);