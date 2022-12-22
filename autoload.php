<?php
session_start();
require_once("bootstrap.php");
require_once("./controllers/instanciation.php");
spl_autoload_register('autoload');//callback function
function autoload($class_name){
    $array_paths = array(
        'database/',
        'app/classes/',
        'models/',
        'controllers/'
    );
    
    $parts = explode('\\', $class_name);//
    // echo('------'.$class_name.'------') ;
  
    $name = array_pop($parts);//supprier le premier element et return le dernier
    
    // echo ($name);

    foreach($array_paths as $path){
        $file = sprintf($path.'%s.php',$name); // put $name f %s in $path format
        if(is_file($file)){//return booleen 
            include_once $file;
        }
    }
  
}
?>