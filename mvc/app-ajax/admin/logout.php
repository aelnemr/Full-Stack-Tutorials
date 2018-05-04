<?php

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
exit(header("Location:" . BASE_ADMIN . "login.php"));
