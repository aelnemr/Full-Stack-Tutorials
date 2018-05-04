<?php

if (isset($_GET['page'])) {
    $path = ADMIN_PATH . "pages/" .  $_GET['page'] . ".php";
    if (file_exists($path))
        require_once $path;
    else
        require_once HOST_NAME . '404.php';
} else {
    require_once ADMIN_PATH . "pages/home.php";
}

