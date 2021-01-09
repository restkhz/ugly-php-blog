<?php
namespace Model;

use Ugly\Model;

class UsersModel extends Model
{
    public function getNameById($id) {
        $r = $this  ->select('name')
                    ->where('id', $id)
                    ->exec()
                    ->fetch();
        return $r['name'];
    }

    public function getIdByUser($user) {
        $r = $this  ->select('id')
                    ->where('user', $user)
                    ->exec()
                    ->fetch();
        return $r['id'];
    }

    public function getPasswordHash($user) {
        $r = $this->select('password')
             ->where('user', $user)
             ->exec()
             ->fetch();

        if($r) {
          return $r[0];
        } else {
          return false;
        }
    }

    public function updatePasswordHash($user,$password) {
        return $this->update(['password'],[$password])->where('user',$user)->exec();
    }

  public function init()
  {
    $this->table = 'users';
  }
}
