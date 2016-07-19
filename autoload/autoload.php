<?php 

function __autoload($className)
{
    $folders = array(
        __DIR__.'/class/',
        __DIR__.'/class1/',

        );

    foreach ($folders as $folder) 
    {
        $fileName = $folder.$className.'.class.php';
        if (is_readable($fileName)) 
        {
            require($fileName);
        }
    }
}
