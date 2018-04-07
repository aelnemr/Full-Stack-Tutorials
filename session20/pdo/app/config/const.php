<?php

//app config
define('APP_NAME', 'session20');

//app path

// win \  linux /
define('DS', DIRECTORY_SEPARATOR);
//main root
define('APP_PATH', dirname(__DIR__) . DS);
define('LIBS_PATH', APP_PATH . 'libs' . DS );
define('CONFIG_PATH', APP_PATH . 'config' . DS );
define('TEMP_PATH', APP_PATH . 'templates' . DS );
define('LAYOUTS_PATH', TEMP_PATH . '_layouts' . DS );
//admin root
define('ADMIN_PATH', APP_PATH . 'admin' . DS );
define('ADMIN_TEMP_PATH', ADMIN_PATH . 'templates' . DS );
define('ADMIN_LAYOUTS_PATH', ADMIN_TEMP_PATH . '_layouts' . DS );


//database connection
define('DSN', 'mysql:host=localhost;dbname=session20');
define('USERNAME', 'root');
define('PASSWORD', '');

$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];


