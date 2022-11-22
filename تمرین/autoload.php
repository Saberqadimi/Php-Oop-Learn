<?php

function autoload($class)
{
    $classFile = __DIR__ . "/$class.php";
    if (file_exists($classFile) && is_readable($classFile)){
        include_once($classFile);
    }else{
        die("$classFile not found!\n");
    }
    
}

spl_autoload_register('autoload');