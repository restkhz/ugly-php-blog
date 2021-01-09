<?php
namespace Model;

use Ugly\Model;

class CategoriesModel extends Model
{

  public function getCategoriesIndex() {

    $categoriesList['categories'] = $this->select('id,name')->exec()->fetchAll(\PDO::FETCH_UNIQUE | \PDO::FETCH_ASSOC);
    return $categoriesList;
  }

  public function addCategories($name) {
    $this->insert(['name'=>$name]);
  }

    public function getCategoriesPostsmgmt() {
    $categoriesList['categories'] = $this->select('id,name')->exec()->fetchAll();
    return $categoriesList;
  }
  
  public function name2id($name) {
    $id = $this->select('id')
                ->where('name', $name)
                ->exec()
                ->fetch();
    if($id==false)return false;
    return $id[0];
  }

  public function getAllUrls() {
    return $this->select('name')->exec()->fetchAll(\PDO::FETCH_FUNC,array('\Model\CategoriesModel','handle'));
  }

  function handle($name) {return 'categories/'.rawurlencode($name);}

  public function init()
  {
    $this->table = 'categories';
  }
}
