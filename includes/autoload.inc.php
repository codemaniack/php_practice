<?php

    // Display php errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    spl_autoload_register('autoload');

    function autoload($className){
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (strpos($url, 'includes') !== false){
            $path = '../classes/';
        } else {
            $path = 'classes/';
        }
        
        $extension = '.class.php';
        require_once $path . $className . $extension;
    }