<?php
namespace Controller;

use Ugly\Ugly;
use Ugly\Controller;
use Model\PagesModel;

class Pagesmgmt extends Controller {

    public function index() {
        $pagesObj = new PagesModel;
        $this->outputJson($pagesObj->getAllPages());
    }

    public function delete() {
        global $_JSON;
        $pagesObj = new PagesModel;
        $id = $_JSON['id'];
        $pagesObj->deleteById($id);
    }

    public function add() {
        global $_JSON;
        $pagesObj = new PagesModel;

        $page = [
            'title' => $_JSON['title'],
            'link'  => $_JSON['link'],
        ];

        $pagesObj->addPage($page);
    }
 
    public function init()
    {
            if (!isset($_SESSION['token'])) {
                $this->outputJson([],403,'Why r you here?');
                die();
            }
    }

}