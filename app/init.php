<?php

define('SRC_DIR', 'app/');

function autoload_class($class_name)
{

    $array_paths = array(
        'Class/',
    );

    $total_paths = count($array_paths);

    $file_name = $class_name . '.php';

    for ($i = 0; $i < $total_paths; $i++) {
        if (file_exists(SRC_DIR . $array_paths[$i] . $file_name)) {
            require_once SRC_DIR . $array_paths[$i] . $file_name;
        }
    }
}

spl_autoload_register('autoload_class');