<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\PostsModel;
use Model\CategoriesModel;
use Model\SiteModel;
use Model\UsersModel;
use Model\CommentsModel;
/**
 * Admin CONTROLLER
 */
class Admin extends Controller
{
    public function index($param) {
        echo 'meow ' . $param;
    }
    /**
     * return :
     * views, posts, comments, sysload[], diskSpace, diskFree
     */
    public function overview() {
        $postsObj = new PostsModel;
        $commentsObj = new CommentsModel;
        $siteObj = new SiteModel;

        $array = [
            'spiders' =>  $siteObj->getSpidersAdmin(),
            'views'   =>  $siteObj->getViewsAdmin(),
            'posts'    =>  $postsObj->getPostsCountAdmin(),
            'comments'=>  $commentsObj->getCommentsCountAdmin(),
            'sysLoad' =>  sys_getloadavg(),
            'diskSpace'=> disk_total_space('/'),
            'diskFree'=>  disk_free_space('/'),
        ];
        //var_dump($array);
        $this->outputJson($array);
    }

    public function login() {
        $userObj = new UsersModel;
        global $_JSON;
        $user = $_JSON['user'];
        $password = $_JSON['password'];
        $password_hash = $userObj->getPasswordHash($user);
        if ($password_hash && password_verify($password, $password_hash)) {
            $this->outputJson(['token'=>1]);
            $_SESSION['token'] = 1;
            $_SESSION['user'] = $user;
        } else {
            $this->outputJson(['token'=>0]);
        }
    }

    public function logout() {
        session_destroy();
    }

    public function pwdmodify(){
        $userObj = new UsersModel;
        global $_JSON;
        $user = $_SESSION['user'];
        $password = $_JSON['pwd_now'];

        $password_hash = $userObj->getPasswordHash($user);
        if ($password_hash && password_verify($password, $password_hash)) {
            if($_JSON['pwd_new']===$_JSON['pwd_retype']){
                $newHash = password_hash($_JSON['pwd_new'],PASSWORD_BCRYPT);
                $userObj->updatePasswordHash($user,$newHash);
                $this->outputJson([],200,'done');
            } else {
                $this->outputJson([],500,'check retype');
            }
        } else {
            $this->outputJson([],500,'invalid');
        }
    }

    public function sitesettings() {
        $siteObj = new SiteModel;
        global $_JSON;
        $siteObj->updateSite([$_JSON['title'],$_JSON['subtitle']]);
        $this->outputJson([],200,'done');
    }

    public function databasebackup(){
        $file = UGLY_PATH.'/../data/'.Ugly::$config['DB']['NAME'];
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            //  A Bug about two Blankspace in the front of backup file.
            //  clean the buff.
            ob_clean();
            flush();
            readfile($file);
            exit;
    }

    public function sitemap() {

        $postsObj = new PostsModel;
        $postsLinks = $postsObj->getAllUrls();
        
        $cateObj = new CategoriesModel;
        $cateLinks = $cateObj->getAllUrls();
        
        $links = array_merge($cateLinks,$postsLinks);

        $host = 'https://'.$_SERVER["HTTP_HOST"].'/';

        $dom = new \DOMDocument('1.0','utf-8');

        $dom->formatOutput = true;
        $root = $dom->createElement("urlset");
        $dom->appendChild($root);
        foreach($links as $link){

            $track = $dom->createElement("url");
            $root->appendChild($track);

            $loc = $dom->createElement("loc");
                $track->appendChild($loc);
            $priority = $dom->createElement("priority");
                $track->appendChild($priority);
            //$lastmod = $dom->createElement("lastmod");
            //    $track->appendChild($lastmod);
            $changefreq = $dom->createElement("changefreq");
                $track->appendChild($changefreq);
            $text = $dom->createTextNode($host.$link);
            $loc->appendChild($text);
            $date = date("Y-m-d",time());
            //$text = $dom->createTextNode($date);
            //$lastmod->appendChild($text);
            $text = $dom->createTextNode("daily");
            $changefreq->appendChild($text);
            $text = $dom->createTextNode(0.8);
            $priority->appendChild($text);
        }
        echo $dom->saveXML();
    }

    public function ping() {
        $this->outputJson([],200,'pong');
    }

    public function init()
    {
        if (Ugly::$action != 'login') {
            if (!isset($_SESSION['token'])) {
                $this->outputJson([],403,'Why r you here?');
                die();
            }
        }
    }
}
