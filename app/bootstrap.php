<?php

// load Config
    require_once 'config/config.php';
// load Libraries
//    require_once 'libraries/core.php';
//    require_once 'libraries/controller.php';
//    require_once 'libraries/database.php';

//    autoload core libraries (no need to include libraries like above)
spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
});
