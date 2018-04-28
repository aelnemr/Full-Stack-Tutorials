<?php

try{
    $dbh = new PDO($dsn, $username, $password, $options );

} catch (PDOException $e) {
    $txt = $e->getMessage();
    $myfile = file_put_contents('connection_errors.txt', $txt . PHP_EOL , FILE_APPEND | LOCK_EX);
    exit(header("Location:" . BASE_URL . "404.php"));
}