<?php
require_once 'consts.php';

require_once 'dbconnections.php';

require_once LAYOUTS_PATH . 'app.view.php';
require_once LAYOUT_ADMIN_PATH . 'app.admin.php';

require_once LIBS_PATH . "user.lib.php";
require_once LIBS_PATH . "student.lib.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

