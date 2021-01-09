<?php
namespace Model;

use Ugly\Model;

class PagesModel extends Model
{

  public function getPages() {
    $pages['pages'] = $this->select('*')->exec()->fetchAll(\PDO::FETCH_UNIQUE | \PDO::FETCH_ASSOC);
    return $pages;
  }

  public function getAllPages() {
        $pages = $this->select('*')
                         ->exec()
                         ->fetchAll();
        return $pages;
  }

  public function deleteById($id) {
        $this->delete($id)
             ->where('id',$id)
             ->exec();
  }

  public function addPage($arr) {
      return $this->insert($arr);
  }

  public function init()
  {
    $this->table = 'pages';
  }
}
