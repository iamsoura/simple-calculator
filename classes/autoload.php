<?php 
function autoloader($className){
    //Split the class name up if it contains backslashes.
    $classNameParts = explode('\\', $className);
    //The last piece of the array will be our class name.
    $className = end($classNameParts);
    //Include the class.
    include 'classes/' . $className . '.php';
}
 
//Tell PHP what our autoloading function is.
spl_autoload_register('autoloader');