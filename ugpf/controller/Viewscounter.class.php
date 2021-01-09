<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\SiteModel;
use Model\PostsModel;

/**
 * A widget which can count UV based on session.
 * I really shouldn't using sql here.
 */

class Viewscounter extends Controller
{
    /**
     * this function is for total-views counting only.
     * @return void
     */
    public function count()
    {
        $site = new SiteModel;
        if(!isset($_SESSION['view_flag'])){
            $_SESSION['view_flag'] = true;
            if(self::_isSpider()){
                $site->runSql('UPDATE site SET spiders = spiders + 1;');
            } else {
                $site->runSql('UPDATE site SET views = views + 1;');
            }
            //if(Ugly::$controller === 'Post')self::postCount(Ugly::$action);
        }
        header("HTTP/1.1 204 No Content");
    }

    /**
     * single post counting
     */
    public function postcount()
    {
        $id = intval($_GET['pid']);
        //$site = new SiteModel;
        $post = new PostsModel;
        if(!isset($_SESSION['p'.$id])){    //A bug about session index using number.
            $_SESSION['p'.$id] = 1;
            $post->runSql('UPDATE posts SET views = views + 1 WHERE pid = '. $id);
        }
        header("HTTP/1.1 204 No Content");
    }

    protected static function _isSpider()
    {
        $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $spiders   = array(
            'spider',
            'bot'
        );

        foreach ($spiders as $spider) {
            $spider = strtolower($spider);
            if(strpos($userAgent, $spider) !== false){
                return true;
            }
        }

    }
    /**
     * Prevent bots from touching this thing.
     */
    public function init()
    {
        if(!isset($_GET['t'])){
            header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
            exit(404);
        }
    }

}
