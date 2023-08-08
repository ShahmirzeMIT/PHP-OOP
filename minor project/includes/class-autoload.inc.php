<?php

spl_autoload_register("myAutoload");

function myAutoload($classname) {
    $path = 'classes/';
    $extension = '.class.php';
    include $path . $classname . $extension;
}
