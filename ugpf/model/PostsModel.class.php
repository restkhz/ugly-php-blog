<?php
namespace Model;

use Ugly\Model;

class PostsModel extends Model
{

    public function getPostsIndex() {
        $postsList['posts'] = $this->select('url,title,create_time,category_id')
                                   ->where('status', 1)
                                   ->orderBy(['create_time'],'desc')
                                   ->exec()
                                   ->fetchAll();
        return $postsList;
    }

    public function getPostPost($postUrl) {
        $post['post'] = $this->select('pid,author_id,title, create_time,content_html,views,description')
                            ->where('url', $postUrl)
                            ->and('status','!=',-1)
                            ->exec()
                            ->fetch();
        return $post;
    }
    
    public function getPostsCategories($id) {
        $postsList['posts'] = $this->select('url,title,create_time,category_id')
                                   ->where('status', 1)
                                   ->and('category_id','=', $id )
                                   ->exec()
                                   ->fetchAll();
        return $postsList;
    }

    public function url2id($url) {
      $id = $this->select('pid')
                  ->where('url', $id)
                  ->exec()
                  ->fetch();
      return $id[0];
    }

    public function getPostsCountAdmin() {
      $count =  $this->select('count(pid)')->exec()->fetch();
      return $count[0];
    }

    public function getPostslistMgmt() {
      return $this->select('*')->exec()->fetchAll();
    }

    public function changeStatusMgmt($pid,$status) {
      return $this->update(['status'],[$status])->where('pid', $pid)->exec();
    }

    public function createPost($array) {
      return $this->insert($array);
    }

    public function updatePost($pid, $post_column, $post) {
      return $this->update($post_column,$post)->where('pid',$pid)->exec();
    }

    public function checkPostUrlExist($url) {
      $r = $this->select('pid')->where('url',$url)->exec()->fetch();
      return !empty($r);
    }

    public function getPostByPid($pid) {
      return $this->select('*')->where('pid',$pid)->exec()->fetch();
    }

    public function getAllUrls() {
      return $this->select('url')->where('status',-1,'!=')->exec()->fetchAll(\PDO::FETCH_FUNC,array('\Model\PostsModel','prefix'));
    }

    public function prefix($name) {return 'post/'.rawurlencode($name);}
    

  public function init()
  {
    $this->table = 'posts';
  }
}
