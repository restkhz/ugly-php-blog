<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\CategoriesModel;
use Model\CommentsModel;

class Commentsmgmt extends Controller {

    public function index() {
        $commentsObj = new CommentsModel;
        $this->outputJson($commentsObj->getCommentsAdmin());
    }

    public function delete() {
        global $_JSON;
        $commentsObj = new CommentsModel;
        $id = $_JSON['id'];
        $commentsObj->deleteCommentsAdmin($id);
    }
 
    public function init()
    {
            if (!isset($_SESSION['token'])) {
                $this->outputJson([],403,'Why r you here?');
                die();
            }
    }

}