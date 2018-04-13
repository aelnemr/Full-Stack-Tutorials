<?php
require_once '../config/config.php';

if (isset($_SESSION['user'])) {
    exit(header("Location:" . BASE_ADMIN));
}

if (isset($_POST['username'], $_POST['password'])) {
    //validations
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user = login($username, $password)) {
        session_start();
        $_SESSION['user'] = $user;
        exit(header("Location:" . BASE_ADMIN));
    } else {
        echo "Error";
    }
}

_header_admin("LOGIN");



?>
<div class="container">

    <form action="<?php echo BASE_ADMIN; ?>login.php" method="post">
        Username :
        <input type="text" name="username" class="form-control">
        <br>
        Password :
        <input type="password" name="password" class="form-control">
        <br>
        <div class="text-center">

            <button class="btn btn-success text-center" type="submit">LOGIN</button>
        </div>
    </form>
</div>


<?php

_footer_admin();
