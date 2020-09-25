<?php
function __autoload($classname)
{

    $classpath="./".$classname.'.php';

    if(file_exists($classpath))
    {
        require_once($classpath);

    }
    else
    {
        echo 'class file'.$classpath.'not found!';
    }

}

?>