<?php
namespace ErrorHandler;

/**
 * ErrorHandler
 */
class ErrorHandler
{

    public static $view;

    public function run()
    {
      if(DEV) {
        set_error_handler('\ErrorHandler\ErrorHandler::errHandler');
        set_exception_handler('\ErrorHandler\ErrorHandler::expHandler');
      } else {
        set_error_handler('\ErrorHandler\ErrorHandler::EShort');
        set_exception_handler('\ErrorHandler\ErrorHandler::EShort');
      }
      DEV ? error_reporting(E_ALL) : error_reporting(0);
    }


    public function Edb($errInfo,$sql)
    {
      if(!DEV) {
        $this->EShort();
      }
      echo self::$view->render('dbdebug.html', ['errInfo'=>print_r($errInfo, true), 'sql' => $sql]);
      exit(1);
    }

    public function E404($name)
    {
      header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
      echo self::$view->render('404.html', ['class' => $name]);
      exit(404);
    }

    public static function EShort()
    {
      header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
      echo self::$view->display('error.html');
      exit(1);
    }

    public function ErrCollector($no, $str, $file, $line, $context)
    {

    }

    public function ExpCollector($e)
    {

    }

    public static function errHandler($no, $file, $line, $context)
    {
        echo '<h1>We met an Error :</h1><br>';
        #echo '<b>'. $no . ' ' . $str .'</b><br>';
        echo '<b>'. $no . ' ' . '</b><br>';
        echo 'at: '. $file .'<br>';
        echo 'Line: ' . $line. '<br><pre>';
        print_r($context);
        echo '<pre>';
        exit(1);
    }

    public static function expHandler($e)
    {
        echo '<h1>We met an Exception :</h1><br>';
        echo $e->getMessage().'<br>';
        echo 'at: '. $e->getFile() .'<br>';
        echo 'Line: ' . $e->getLine(). '<br>';
        echo '<pre>';print_r($e->getTrace());
        echo  '<pre><br>'.$e->getTraceAsString();
        exit(1);
    }

    function __construct()
    {
        self::$view = clone \Ugly\Ugly::$view;
    }
}
