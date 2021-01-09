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
 * PostsManagement CONTROLLER
 */
class Postsmgmt extends Controller
{
    public function index($param) {

    }

    public function listposts() {
        $postsObj = new PostsModel;

        $array = $postsObj->getPostslistMgmt();
        $this->outputJson($array);
    }

    public function visibility() {
        global $_JSON;
        $postsObj = new PostsModel;
        $postsObj->changeStatusMgmt($_JSON['pid'],$_JSON['status']);
        $this->outputJson([]);
    }

    public function create() {
        global $_JSON;
        $postsObj = new PostsModel;
        $usersObj = new UsersModel;

        if(empty($_JSON['url']) && empty($_JSON['title'])) {
            $this->outputJson([],500,'Missing url or title');
            return;
        }
        if($postsObj->checkPostUrlExist($_JSON['url'])){
            $this->outputJson([],500,'url duplicate');
            return;
        }

        $post = [
            'title' => $_JSON['title'],
            'status' =>$_JSON['status'],
            'url' => $_JSON['url'],
            'content_md' => $_JSON['contentMarkdown'],
            'category_id' => $_JSON['categoryId'],
            'author_id' => $usersObj->getIdByUser($_SESSION['user']) ,
            'create_time' => time(),
            'content_html' => $_JSON['contentHTML'],
            'description' => $_JSON['description']
        ];

        $postsObj->createPost($post);
        $this->outputJson([],200);
    }

    public function updatepost() {
        global $_JSON;
        $postsObj = new PostsModel;
        $usersObj = new UsersModel;

        if(empty($_JSON['url']) && empty($_JSON['title'])) {
            $this->outputJson([],500,'Missing url or title');
            return;
        }

        $post_column = array(
            'title',
            'status',
            'url',
            'content_md',
            'category_id',
            'author_id',
            'update_time',
            'content_html',
            'description',
        );

        $post = array(
            $_JSON['title'],
            $_JSON['status'],
            $_JSON['url'],
            $_JSON['contentMarkdown'],
            $_JSON['categoryId'],
            $usersObj->getIdByUser($_SESSION['user']) ,
            time(),
            $_JSON['contentHTML'],
            $_JSON['description'],
        );

        $postsObj->updatePost($_JSON['id'],$post_column, $post);
        $this->outputJson([],200);
    }

    public function getcategories() {
        $categoriesObj = new CategoriesModel;
        $categoriesList = $categoriesObj->getCategoriesPostsmgmt();
        $this->outputJson($categoriesList);
    }

    public function addcategory() {
        global $_JSON;
        $categoriesObj = new CategoriesModel;
        $categoriesObj->addCategories($_JSON['name']);
        $this->outputJson();
    }

    public function edit($pid) {
        $postsObj = new PostsModel;
        $post = $postsObj->getPostByPid($pid[0]);
        $this->outputJson($post);
    }


    public function init()
    {
            if (!isset($_SESSION['token'])) {
                $this->outputJson([],403,'Why r you here?');
                die();
            }
    }
}
