<?php 

spl_autoload_extensions('.class.php');
set_include_path('./class/');
set_include_path(get_include_path().PATH_SEPARATOR.'./class1/');
spl_autoload_register();
/**
spl_autoload_register('MyAutoloader::ClassLoader');
spl_autoload_register('MyAutoloader::LibraryLoader');
spl_autoload_register('MyAutoloader::HelperLoader');
spl_autoload_register('MyAutoloader::DatabaseLoader');

class MyAutoloader
{
    public static function ClassLoader($className)
    {
         //your loading logic here
    }


    public static function LibraryLoader($className)
    {
         //your loading logic here
    }
With regards to spl_autoload, the manual states:

This function is intended to be used as a default implementation for __autoload(). If nothing else is specified and spl_autoload_register() is called without any parameters then this functions will be used for any later call to __autoload().
 */


 ?>