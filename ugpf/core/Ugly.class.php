<?php
namespace Ugly;

 /**
  * Ugly core class
  */
 class Ugly
 {

   public static $controller;
   public static $action;
   public static $param;
   public static $config;
   public static $view;
   public static $ErrorHandler;
   /**
   * Run() do nothing only let everything run.
   */
   public static function run($config)
   {
       //load Configurations
       self::$config = $config;

       //Register classloader
       spl_autoload_register('self::loadClass');

       //Load View engine
       self::_initView();

       //Register Error Handler.
       self::$ErrorHandler = new \ErrorHandler\ErrorHandler;
       self::$ErrorHandler->run();

       //Run the Router, and LOS!
       Router::start();

   }

   /**
    * For auto loading
    * @param  [type] $dirtyClassName [description]
    * @return [type]                 [description]
    */
   public static function loadClass($dirtyClassName)
   {
       $class = substr(strrchr($dirtyClassName, '\\'), 1);
       $nameSpace =  substr($dirtyClassName, 0, strrpos($dirtyClassName, $class));
       //$nameSpace = str_replace($class, '', $dirtyClassName);
       //self::D([$dirtyClassName,$nameSpace, $class]);
       $file = self::$config['CLASS_MAP'][$nameSpace]. '/'. $class .'.class.php';
       if(!file_exists($file)){self::$ErrorHandler->E404($class);}
       require $file;
   }

   /**
    * ONLY FOR debuging. Set DEV to 0
    * in order to disable this function
    * @param [type] $arr [description]
    */

   public static function D($arr)
   {
        if(!DEV) return;
        echo '<b>Loading...</b>  ';
        foreach ($arr as $value) {
          echo  $value . ' > ';
        }
        echo '... done.<br>';
   }

   /**
    * This loading method is awful.
    * Twig used in ErrorHandler and controllers
    * @return [type] [description]
    */
   protected static function _initView()
   {
       require UGLY_PATH.'/vendor/autoload.php';
       $loader = new \Twig_Loader_Filesystem(self::$config['VIEW']);
       self::$view = new \Twig_Environment($loader, array(
          'cache' => self::$config['CACHE_PATH'],
          'debug' => true
        ));

   }

 }
