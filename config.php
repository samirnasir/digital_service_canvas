<?php

    define('DB_HOST', 'localhost');

    if($_SERVER['SERVER_NAME'] == 'localhost')
    {
        define('DB_USER', 'root');
        define('DB_PASS', 'root');
        define('DB_NAME', 'digital_service_canvas');
        define('DB_DRIVER', 'mysqli');
    }
    else
    {
        define('DB_USER', 'root');
        define('DB_PASS', 'Carols2017');
        define('DB_NAME', 'digital_service_canvas');
        define('DB_DRIVER', 'mysqli');
    }
