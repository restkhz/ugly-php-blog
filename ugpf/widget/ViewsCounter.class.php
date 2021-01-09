<?php
namespace Widget;

use Ugly\Ugly;
use Model\SiteModel;
use Model\PostsModel;

/**
 * A widget which can count UV based on session.
 */

class ViewsCounter
{
    /**
     * this function is for total counting only.
     */
    public static function count()
    {
        $site = new SiteModel;
        if(!isset($_SESSION[Ugly::$controller][Ugly::$action])){
            $_SESSION[Ugly::$controller][Ugly::$action] = true;
            if(self::_isSpider()){
                $site->runSql('UPDATE site SET spiders = spiders + 1;');
            } else {
                $site->runSql('UPDATE site SET views = views + 1;');
            }
            //if(Ugly::$controller === 'Post')self::postCount(Ugly::$action);
        }
    }

    public static function postCount($id)
    {
        $site = new SiteModel;
        $post = new PostsModel;
        if(!isset($_SESSION[Ugly::$controller][Ugly::$action])){
            $_SESSION[Ugly::$controller][Ugly::$action] = true;
            $post->runSql('UPDATE posts SET views = views + 1 WHERE pid = '. $id);
        }
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

}