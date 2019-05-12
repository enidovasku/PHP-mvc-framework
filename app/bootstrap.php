<?php 
//load config file 
require_once 'config/config.php';

// implementing autoloader for core libraries
spl_autoload_register(function($className){
    //Controller should match the filename 
    // for example controller.php -> class Controller{}
        require_once 'libraries/'.$className.'.php';
});
