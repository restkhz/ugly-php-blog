<?php
namespace Ugly;

/**
 * Ugly Router, very ugly as its name.
 */
class Router extends Ugly
{
  /**
  * Start() do nothing only let everything run.
  */
  public static function Start()
  {
      $uri = self::_parsing();
      self::dispatch($uri);
  }

  /*
  * Parsing URL into $uri
  * [0]=>controller [1]=>action [>2]=>params
  * Do not set any param as same as the name of the Action....
  */
  protected static function _parsing()
  {
    $uri = explode('/', trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/'));
    self::$controller = !empty($uri[0]) ? ucfirst($uri[0]) : self::$config['DEFAULT_ROUTE']['CONTROLLER'];
    self::$action = !empty($uri[1]) ? $uri[1] : self::$config['DEFAULT_ROUTE']['ACTION'];
    //cut up params into KV array
    $raw_param = array_slice($uri, 2);
    $count = count($raw_param);
    if($count==1) {
      self::$param = $raw_param;
      return;
    }
    $k=[]; $v=[]; $c=0;
    $it=$count-1;
    for ($i = 0; $i < $it; $i=$i+2) {
        $k[$c] = $raw_param[$i];
        $v[$c] = $raw_param[$i+1];
        $c++;
    }
    self::$param = array_combine($k, $v);
  }

  public static function dispatch()
  {
    $controller = '\Controller\\' . self::$controller;
    $controllerObj = new $controller;
    if(method_exists($controller,self::$action)){
      call_user_func_array(array($controllerObj,self::$action), array(self::$param));
    } else {
      $param = self::$action;
      self::$action = self::$config['DEFAULT_ROUTE']['ACTION'];
      call_user_func_array(array($controllerObj,self::$action), array($param));
    }
  }

}
