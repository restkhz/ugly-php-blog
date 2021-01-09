<?php
namespace Ugly;

//use Widget\ViewsCounter;

/**
 * Mother Controller.
 * 1. Include view engine
 * 2. Load widgets
 * 3. and some dirty functions be defined here...
 * 4. Check init() for every controller.
 * 5. Session started here
 */
class Controller
{
  public $view;
  /**
   * Reply with a json
   */
  public function echo_json($array) {
    echo json_encode($array);
  }

  /**
   * Sometimes we will get a Json in POST body.
   * So we use this func, in order to get the request
   * @return object when success
   * @return boole when...craped
   */
  public function get_json()
  {
    $raw = file_get_contents('php://input');
    $json = json_decode($raw);
    if($json){
      return $json;
    } else {
      return false;
    }
  }
  
  /**
   * Init $_JSON[]
   */
  private function _constructJson()
  {
    $raw = file_get_contents('php://input');
    $json = json_decode($raw, true);
    global $_JSON;
    if($json){
      $_JSON = $json;
    }
  }

  /**
   * clone a view engine from Ugly core
   */
  function __construct()
  {
      session_start();
      $this->_constructJson();
      $this->view = clone Ugly::$view;
      if (method_exists(get_called_class(), 'init')) {
        $this->init();
      }
  }

  function outputJson($json=[],$status=200,$msg='') {
      echo '{"status":' . $status . ', "data":' . json_encode($json) . ',"msg":"'. $msg .'"}';
  }

  function __destruct(){
      //$this->LoadWidgets();
  }
  /**
   * Load widgets here
   * (Deprecated)
   */
  function LoadWidgets()
  {
      //ViewsCounter::count();
  }

}
