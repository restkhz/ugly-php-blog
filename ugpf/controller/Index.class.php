<?php
namespace Controller;

use Ugly\Controller;
use Model\PostsModel;
use Widget\MakeHead;
//use Widget\ViewsCounter;
/**
 * index CONTROLLER
 */
class Index extends Controller
{
    public function index($param){
      //get Posts 
      $pObj = new PostsModel;
      $postsList = $pObj->getPostsIndex();
      
      $banner = MakeHead::run();

      $renderData = array_merge($postsList, $banner); 
      echo $this->view->render('block_index.html',$renderData);

      //ViewsCounter::count();
    }

    public function init()
    {
      
    }
}
