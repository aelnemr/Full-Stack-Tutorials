<?php
require_once 'consts.php';

require_once 'dbconnections.php';

require_once LAYOUTS_PATH . 'app.view.php';
require_once LAYOUT_ADMIN_PATH . 'app.admin.php';


//require_once MODELS_PATH . "user.class.php";
//require_once MODELS_PATH . "course.class.php";
//or
require_once 'autoload.php';

ob_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

