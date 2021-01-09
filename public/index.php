<?php
/**
* Ugly PHP blog 0.1.0
* This is the Entrance File.
* We defined consts and included all the things we need.
* check, and run.
*/

//Please set DEV to 0 when in production environment
define('DEV', 1);

define('DIR',__DIR__.'/');

define('UGLY_PATH',DIR.'../ugpf/');

require UGLY_PATH.'core/errHandler.php';

$config = (file_exists(UGLY_PATH.'config/config.php')) ? require UGLY_PATH.'config/config.php' : die('Configuration file is missing. x_x');

require UGLY_PATH.'core/Ugly.class.php';

      header("Access-Control-Allow-Origin: http://127.0.0.1:8080");
      header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 
      header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
      header('Access-Control-Allow-Credentials: true');

Ugly\Ugly::run($config);
