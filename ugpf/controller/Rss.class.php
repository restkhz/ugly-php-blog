<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\PostsModel;
use Model\SiteModel;

/**
 * RSS
 */
class Rss extends Controller
{
    public function index($param){
        header('Content-type: text/xml');
        $domainName = array( 'domainName' => 'https://'.$_SERVER["HTTP_HOST"].'/');
        $pObj = new PostsModel;
        $posts = $pObj->getRSS();
        $sObj = new SiteModel;
        $site = $sObj->getSiteIndex();
        $renderData = array_merge($domainName, $site, $posts);
        ob_clean();
        echo $this->view->render('rss.html',$renderData);
    }

    public function init()
    {
      
    }
}
