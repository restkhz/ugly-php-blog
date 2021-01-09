<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\PostsModel;
use Model\CommentsModel;
use Model\UsersModel;
use Widget\MakeHead;
//use Widget\ViewsCounter;
/**
 * POST CONTROLLER
 */
class Post extends Controller
{
    public function index($postUrl){
        if(empty($postUrl))Ugly::$ErrorHandler->E404('? ? ?');

        $pObj = new PostsModel;
        $commentObj = new CommentsModel;
        $uObj = new UsersModel;
        //Try to query Post information
        $post = $pObj->getPostPost(urldecode($postUrl));
        //Got nothing...
        if($post['post']==false)Ugly::$ErrorHandler->E404('? ? ?');

        $username = $uObj->getNameById($post['post']['author_id']);
        $post['post']['author'] = $username;

        $comments =  $commentObj->getCommentsPost($post['post']['pid']);

        $banner = MakeHead::run();
        
        $renderData = array_merge($post, $banner, $comments);
        echo $this->view->render('block_post.html',$renderData);

        //COUNTING STAR
        //ViewsCounter::postCount($post['post']['pid']);
        //ViewsCounter::count();
    }

    public function postComment() {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = htmlspecialchars($value,ENT_QUOTES);
        }
        $_POST['comment'] = str_replace('[blockquote]','<blockquote>', $_POST['comment']);
        $_POST['comment'] = str_replace('[/blockquote]','</blockquote>', $_POST['comment']);
        
        if($_POST['key'] != 'a'){die('SPAMMER, GET AWAY FROM ME!');}

        $is_admin = '0';
        if(isset($_SESSION['token']))$is_admin = '1';

        $commentArray = [
            'content' => $_POST['comment'],
            'name'  => $_POST['user'],
            'pid' => $_POST['pid'],
            'email' => $_POST['email'],
            'site' => $_POST['site'],
            'create_time' => time(),
            'is_admin' => $is_admin
        ];
        $commentObj = new CommentsModel;
        if($commentObj->insertComment($commentArray)->errorCode() == '00000') {
            echo '<script>alert(\'Thanks! now teleporting...bibibi, XD\\nREFRESH TO SEE YOUR COMMENT\');window.history.back(-1);</script>';
        }
    }

    public function init()
    {
      
    }
}
