<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\PostsModel;
use Model\CategoriesModel;
use Widget\MakeHead;
//use Widget\ViewsCounter;
/**
 * Categories CONTROLLER
 */
class Categories extends Controller
{
    public function index($param){
      $postsObj = new PostsModel;
      $cateObj = new CategoriesModel;

      $cateId = $cateObj->name2id(urldecode($param));
      if($cateId == false && $cateId !== '0')Ugly::$ErrorHandler->E404('? ? ?');

      $postsList = $postsObj->getPostsCategories($cateId);

      $banner = MakeHead::run();

      $cateName = array('cateName' => urldecode($param));
      $renderData = array_merge($postsList, $banner, $cateName);   
      echo $this->view->render('block_categories.html',$renderData);

      //ViewsCounter::count();
    }

    public function init()
    {
      
    }
}
