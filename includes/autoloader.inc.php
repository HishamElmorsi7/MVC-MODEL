<?php
spl_autoload_register('autoload');

 function autoload($className) {
    $path = 'classes/';
    $extension = '.class.php';
    $full_path = $path . $className . $extension; 

    if ( !file_exists($full_path) ) {
        return false;
    }

    include_once $full_path;
 }



   