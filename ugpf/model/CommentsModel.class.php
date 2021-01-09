<?php
namespace Model;

/**
 * This file is just a example.
 */
use Ugly\Model;

class CommentsModel extends Model
{
    public function getCommentsPost($pid)
    {
        $comments['comments'] = $this->select('name,content,id,is_admin')
                                     ->where('pid', $pid)
                                     ->exec()
                                     ->fetchAll();
        return $comments;
    }

    public function insertComment($arr) {
        return $this->insert($arr);
    }

    public function getCommentsCountAdmin() {
        $count = $this->select('count(id)')->exec()->fetch();
        return $count[0];
    }

    public function getCommentsAdmin() {
        $comments = $this->select('*')
                         ->orderBy(['create_time'],'desc')
                         ->exec()
                         ->fetchAll();
        return $comments;
    }

    public function deleteCommentsAdmin($id) {
        $this->delete($id)
             ->where('id',$id)
             ->exec();
    }


  public function init()
  {
    $this->table = 'comments';
  }
}
